<?php

namespace App\Services;

use App\Models\WheelItem;

class SpinsService
{
    public function spinWheel()
    {
        // If this scales, we need to find a better way to limit
        $wheelItems = WheelItem::all();
        $weights = [];
        $totalWeight = 0;
        foreach ($wheelItems as $wheelItem)
        {
            $weights[$wheelItem->item_type] = $wheelItem->weight;
            $totalWeight += $wheelItem->weight;
        }

        $spinValue = mt_rand(1, $totalWeight);
        $spinResult = -1;
        foreach ($weights as $itemType => $weight) {
            $spinValue -= $weight;
            if ($spinValue <= 0) {
                $spinResult = $itemType;
            }
        }

        return $spinResult;
    }
}
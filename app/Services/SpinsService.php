<?php

namespace App\Services;

use App\Models\WheelItem;

class SpinsService
{
    public function spinWheel($spins = 1)
    {

        // If this scales, we need to find a better way to limit
        $wheelItems = WheelItem::all();
        $weights = [];
        $spinResults = [];
        $totalWeight = 0;

        foreach ($wheelItems as $wheelItem)
        {
            $weights[$wheelItem->getAttribute("id")] = $wheelItem->getAttribute("weight");
            $totalWeight += $wheelItem->getAttribute("weight");
        }
        
        for ($i = 0; $i < $spins; $i++) {
            $spinValue = mt_rand(1, $totalWeight);
            foreach ($weights as $itemType => $weight) {
                $spinValue -= $weight;
                if ($spinValue <= 0) {
                    $spinResults[] = $itemType;
                    break;
                }
            }
        }


        return $spinResults;
    }
}
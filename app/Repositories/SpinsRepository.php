<?php

namespace App\Repositories;

use App\Interfaces\SpinsRepositoryInterface;
use App\Models\Spins;
use Carbon\Carbon;

class SpinsRepository implements SpinsRepositoryInterface
{

    public function getAllSpins()
    {
        return Spins::all();
    }

    public function getSpins(?int $limit = 10)
    {
        return Spins::all()->take($limit);
    }
    public function deleteSpin($spinId)
    {
        Spins::destroy($spinId);
    }

    public function createSpin(array $spinResults)
    {
        $data = [];
        $now = Carbon::now('America/Los_Angeles')->toDateTimeString();

        file_put_contents("php://stderr", print_r($spinResults, true));
        foreach ($spinResults as $id => $spinResult)
        {
            $data[] = [
                "result" => $spinResult,
                "created_at" => $now,
                "updated_at" => $now
            ];
        }
        Spins::insert($data);
        return $data;
    }

    public function updateSpin($spinId, array $spinResult)
    {
        return Spins::whereId($spinId)->update($spinResult);
    }

    public function getSpinById($spinId)
    {
        return Spins::findOrFail($spinId);
    }
}
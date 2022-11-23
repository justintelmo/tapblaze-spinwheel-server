<?php

namespace App\Repositories;

use App\Interfaces\SpinsRepositoryInterface;
use App\Models\Spins;

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
        foreach ($spinResults as $spinResult)
        {
            $data[] = ["result" => $spinResult];
        }
        Spins::create($data);
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
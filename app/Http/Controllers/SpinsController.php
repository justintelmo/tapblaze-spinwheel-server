<?php

namespace App\Http\Controllers;

use App\Models\Spins;
use App\Repositories\SpinsRepository;
use App\Http\Requests\StoreSpinsRequest;
use App\Http\Requests\UpdateSpinsRequest;
use App\Services\SpinsService;
use Illuminate\Http\Response;

class SpinsController extends Controller
{
    protected $spinsService;
    protected $spinsRepository;

    public function __construct(SpinsRepository $spinsRepository, SpinsService $spinsService)
    {
        $this->spinsRepository = $spinsRepository;
        $this->spinsService = $spinsService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        return response()->json([
            "data" => $this->spinsRepository->getAllSpins()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreSpinsRequest  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(StoreSpinsRequest $request)
    {
        $wheelResult = $this->spinsService->spinWheel();

        return response()->json(
            [
                "data" => $this->spinsRepository->createSpin(['result' => $wheelResult])
            ]
        );
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Spins  $spins
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(Spins $spins)
    {
        $spinId = $spins->only['id'];

        return response()->json([
            "data" => $this->spinsRepository->getSpinById($spinId)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Spins  $spins
     * @return \Illuminate\Http\Response
     */
    public function edit(Spins $spins)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSpinsRequest  $request
     * @param  \App\Models\Spins  $spins
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(UpdateSpinsRequest $request, Spins $spins)
    {
        $spinId = $request->route('id');
        $spinData = $spins->only('result');

        return response()->json([
            "data" => $this->spinsRepository->updateSpin($spinId, $spinData)
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Spins  $spins
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(Spins $spins)
    {
        $id = $spins->getAttribute('id');

        $this->spinsRepository->deleteSpin($id);

        return response()->json([], Response::HTTP_NO_CONTENT);
    }
}

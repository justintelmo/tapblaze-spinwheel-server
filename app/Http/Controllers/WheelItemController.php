<?php

namespace App\Http\Controllers;

use App\Models\WheelItem;
use App\Http\Requests\StoreWheelItemRequest;
use App\Http\Requests\UpdateWheelItemRequest;
use App\Models\Spins;

class WheelItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return WheelItem::all();
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
     * @param  \App\Http\Requests\StoreWheelItemRequest  $request
     * @return \Illuminate\Http\Response|\Illuminate\Http\JsonResponse
     */
    public function store(StoreWheelItemRequest $request)
    {
        file_put_contents("php://stderr", print_r($request->all(), true)); 
        foreach ($request->data as $updateModel) {
            WheelItem::where('id', $updateModel['id'])->update(['weight' => $updateModel['weight']]);
        }
        // WheelItem::upsert($request->data, ['id'], ['weight']);
        return response()->json(WheelItem::all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\WheelItem  $wheelItem
     * @return \Illuminate\Http\Response
     */
    public function show(WheelItem $wheelItem)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\WheelItem  $wheelItem
     * @return \Illuminate\Http\Response
     */
    public function edit(WheelItem $wheelItem)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateWheelItemRequest  $request
     * @param  \App\Models\WheelItem  $wheelItem
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateWheelItemRequest $request, WheelItem $wheelItem)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\WheelItem  $wheelItem
     * @return \Illuminate\Http\Response
     */
    public function destroy(WheelItem $wheelItem)
    {
        //
    }

    public function spin()
    {

    }

    public static function showWeights()
    {
        $spins = Spins::orderBy('created_at', 'desc');
        $spins = $spins->take(10)->get();

        return view('weights', ['spins' => $spins, 'items' => WheelItem::all()]);
    }
}

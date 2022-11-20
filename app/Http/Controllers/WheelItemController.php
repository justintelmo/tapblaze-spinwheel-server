<?php

namespace App\Http\Controllers;

use App\Models\WheelItem;
use App\Http\Requests\StoreWheelItemRequest;
use App\Http\Requests\UpdateWheelItemRequest;

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
     * @return \Illuminate\Http\Response
     */
    public function store(StoreWheelItemRequest $request)
    {
        //
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
}

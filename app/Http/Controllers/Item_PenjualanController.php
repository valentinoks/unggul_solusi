<?php

namespace App\Http\Controllers;

use App\Models\Item_Penjualan;
use App\Http\Requests\StoreItem_PenjualanRequest;
use App\Http\Requests\UpdateItem_PenjualanRequest;

class Item_PenjualanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Item_Penjualan::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreItem_PenjualanRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreItem_PenjualanRequest $request)
    {
        $item_penjualan = Item_Penjualan::create($request->all());

        return $item_penjualan;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Item_Penjualan  $item_Penjualan
     * @return \Illuminate\Http\Response
     */
    public function show(Item_Penjualan $item_Penjualan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateItem_PenjualanRequest  $request
     * @param  \App\Models\Item_Penjualan  $item_Penjualan
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateItem_PenjualanRequest $request, Item_Penjualan $item_Penjualan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Item_Penjualan  $item_Penjualan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Item_Penjualan $item_Penjualan)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\order_items;
use App\Http\Requests\Storeorder_itemsRequest;
use App\Http\Requests\Updateorder_itemsRequest;

class OrderItemsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\Storeorder_itemsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storeorder_itemsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\order_items  $order_items
     * @return \Illuminate\Http\Response
     */
    public function show(order_items $order_items)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\order_items  $order_items
     * @return \Illuminate\Http\Response
     */
    public function edit(order_items $order_items)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updateorder_itemsRequest  $request
     * @param  \App\Models\order_items  $order_items
     * @return \Illuminate\Http\Response
     */
    public function update(Updateorder_itemsRequest $request, order_items $order_items)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\order_items  $order_items
     * @return \Illuminate\Http\Response
     */
    public function destroy(order_items $order_items)
    {
        //
    }
}

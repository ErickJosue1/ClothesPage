<?php

namespace App\Http\Controllers;

use App\Models\order_details;
use App\Http\Requests\Storeorder_detailsRequest;
use App\Http\Requests\Updateorder_detailsRequest;

class OrderDetailsController extends Controller
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
     * @param  \App\Http\Requests\Storeorder_detailsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storeorder_detailsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\order_details  $order_details
     * @return \Illuminate\Http\Response
     */
    public function show(order_details $order_details)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\order_details  $order_details
     * @return \Illuminate\Http\Response
     */
    public function edit(order_details $order_details)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updateorder_detailsRequest  $request
     * @param  \App\Models\order_details  $order_details
     * @return \Illuminate\Http\Response
     */
    public function update(Updateorder_detailsRequest $request, order_details $order_details)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\order_details  $order_details
     * @return \Illuminate\Http\Response
     */
    public function destroy(order_details $order_details)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\customer_addresses;
use App\Http\Requests\Storecustomer_addressesRequest;
use App\Http\Requests\Updatecustomer_addressesRequest;

class CustomerAddressesController extends Controller
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
     * @param  \App\Http\Requests\Storecustomer_addressesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storecustomer_addressesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\customer_addresses  $customer_addresses
     * @return \Illuminate\Http\Response
     */
    public function show(customer_addresses $customer_addresses)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\customer_addresses  $customer_addresses
     * @return \Illuminate\Http\Response
     */
    public function edit(customer_addresses $customer_addresses)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updatecustomer_addressesRequest  $request
     * @param  \App\Models\customer_addresses  $customer_addresses
     * @return \Illuminate\Http\Response
     */
    public function update(Updatecustomer_addressesRequest $request, customer_addresses $customer_addresses)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\customer_addresses  $customer_addresses
     * @return \Illuminate\Http\Response
     */
    public function destroy(customer_addresses $customer_addresses)
    {
        //
    }
}

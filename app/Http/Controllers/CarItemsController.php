<?php

namespace App\Http\Controllers;

use App\Models\car_items;
use App\Http\Requests\Storecar_itemsRequest;
use App\Http\Requests\Updatecar_itemsRequest;
use Illuminate\Http\Request;
use Inertia\Inertia;

class CarItemsController extends Controller
{


    private string $routeName;
    private car_items $model;


    
    public function __construct()
    {
        //$this->middleware('auth');
        $this->model = new car_items();
        $this->routeName = 'shopping-cart.';
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $records = $this->model;
        $records = $records->when($request->search, function ($query, $search) {
            if ($search != '') {
                $query->where('name',          'LIKE', "%$search%");
            }
        })->paginate(5)->withQueryString();

        return Inertia::render("ShoppingCart/Index", [
            'titulo'      => 'Carrito', 
            'routeName'      => $this->routeName,
            'loadingResults' => false
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
     * @param  \App\Http\Requests\Storecar_itemsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storecar_itemsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\car_items  $car_items
     * @return \Illuminate\Http\Response
     */
    public function show(car_items $car_items)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\car_items  $car_items
     * @return \Illuminate\Http\Response
     */
    public function edit(car_items $car_items)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updatecar_itemsRequest  $request
     * @param  \App\Models\car_items  $car_items
     * @return \Illuminate\Http\Response
     */
    public function update(Updatecar_itemsRequest $request, car_items $car_items)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\car_items  $car_items
     * @return \Illuminate\Http\Response
     */
    public function destroy(car_items $car_items)
    {
        //
    }
}

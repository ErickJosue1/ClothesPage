<?php

namespace App\Http\Controllers;

use App\Models\products;
use App\Http\Requests\StoreproductsRequest;
use App\Http\Requests\UpdateproductsRequest;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ProductsController extends Controller
{

    private string $routeName;
    private products $model;


    
    public function __construct()
    {
        //$this->middleware('auth');
        $this->model = new products();
        $this->routeName = 'products.';
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

        return Inertia::render("Products/Index", [
            'titulo'      => 'Productos', 
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
     * @param  \App\Http\Requests\StoreproductsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreproductsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\products  $products
     * @return \Illuminate\Http\Response
     */
    public function show(products $products)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\products  $products
     * @return \Illuminate\Http\Response
     */
    public function edit(products $products)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateproductsRequest  $request
     * @param  \App\Models\products  $products
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateproductsRequest $request, products $products)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\products  $products
     * @return \Illuminate\Http\Response
     */
    public function destroy(products $products)
    {
        //
    }
}

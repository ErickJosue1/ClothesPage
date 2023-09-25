<?php

namespace App\Http\Controllers;

use App\Models\car_items;
use App\Http\Requests\Storecar_itemsRequest;
use App\Http\Requests\Updatecar_itemsRequest;
use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Helpers\Cart;
use App\Models\products;
use Illuminate\Support\Facades\Cookie;

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
    public function index()
    {

        [$products, $cartItems, $productsInfo] = Cart::getProductsAndCartItems();
        $total = 0;
        foreach ($products as $product) {
            $total += $product->price * $cartItems[$product->id]['quantity'];
        }

     
        

        return Inertia::render("ShoppingCart/Index", [
            'titulo'      => 'Carrito',
            'routeName'      => $this->routeName,
            'loadingResults' => false,
            'products' => $productsInfo,
            'cartItems' => $cartItems,
            'total' => $total
        ]);
    }

    public function getCarItems()
    {
        return Cart::getCartItemsCount();
    }

    public function add(Request $request, products $product)
    {
        $quantity = $request->post('quantity', 1);
        $user = $request->user();

        $totalQuantity = 0;

        if ($user) {
            $cartItem = car_items::where(['user_id' => $user->id, 'product_id' => $product->id])->first();
            if ($cartItem) {
                $totalQuantity = $cartItem->quantity + $quantity;
            } else {
                $totalQuantity = $quantity;
            }
        } else {
            $cartItems = json_decode($request->cookie('cart_items', '[]'), true);
            $productFound = false;
            foreach ($cartItems as &$item) {
                if ($item['product_id'] === $product->id) {
                    $totalQuantity = $item['quantity'] + $quantity;
                    $productFound = true;
                    break;
                }
            }
            if (!$productFound) {
                $totalQuantity = $quantity;
            }
        }

        if ($product->quantity !== null && $product->quantity < $totalQuantity) {
            return response([
                'message' => match ($product->quantity) {
                    0 => 'The product is out of stock',
                    1 => 'There is only one item left',
                    default => 'There are only ' . $product->quantity . ' items left'
                }
            ], 422);
        }

        if ($user) {

            $cartItem = car_items::where(['user_id' => $user->id, 'product_id' => $product->id])->first();

            if ($cartItem) {
                $cartItem->quantity += $quantity;
                $cartItem->update();
            } else {
                $data = [
                    'user_id' => $request->user()->id,
                    'product_id' => $product->id,
                    'quantity' => $quantity,
                ];
                car_items::create($data);
            }

            return response([
                'count' => Cart::getCartItemsCount()
            ]);
        } else {
            $cartItems = json_decode($request->cookie('cart_items', '[]'), true);
            $productFound = false;
            foreach ($cartItems as &$item) {
                if ($item['product_id'] === $product->id) {
                    $item['quantity'] += $quantity;
                    $productFound = true;
                    break;
                }
            }
            if (!$productFound) {
                $cartItems[] = [
                    'user_id' => null,
                    'product_id' => $product->id,
                    'quantity' => $quantity,
                    'price' => $product->price
                ];
            }
            Cookie::queue('cart_items', json_encode($cartItems), 60 * 24 * 30);

            return response(['count' => Cart::getCountFromItems($cartItems)]);
        }
    }

    public function remove(Request $request, products $product)
    {
        $user = $request->user();
        if ($user) {
            $cartItem = car_items::query()->where(['user_id' => $user->id, 'product_id' => $product->id])->first();
            if ($cartItem) {
                $cartItem->delete();
            }

            return response([
                'count' => Cart::getCartItemsCount(),
            ]);
        } else {
            $cartItems = json_decode($request->cookie('cart_items', '[]'), true);
            foreach ($cartItems as $i => &$item) {
                if ($item['product_id'] === $product->id) {
                    array_splice($cartItems, $i, 1);
                    break;
                }
            }
            Cookie::queue('cart_items', json_encode($cartItems), 60 * 24 * 30);

            return response(['count' => Cart::getCountFromItems($cartItems)]);
        }
    }

    public function updateQuantity(Request $request, products $product)
    {
        $quantity = (int)$request->post('quantity');
        $user = $request->user();

        if ($product->quantity !== null && $product->quantity < $quantity) {
            return response([
                'message' => match ($product->quantity) {
                    0 => 'The product is out of stock',
                    1 => 'There is only one item left',
                    default => 'There are only ' . $product->quantity . ' items left'
                }
            ], 422);
        }

        if ($user) {
            car_items::where(['user_id' => $request->user()->id, 'product_id' => $product->id])->update(['quantity' => $quantity]);

            return response([
                'count' => Cart::getCartItemsCount(),
            ]);
        } else {
            $cartItems = json_decode($request->cookie('cart_items', '[]'), true);
            foreach ($cartItems as &$item) {
                if ($item['product_id'] === $product->id) {
                    $item['quantity'] = $quantity;
                    break;
                }
            }
            Cookie::queue('cart_items', json_encode($cartItems), 60 * 24 * 30);

            return response(['count' => Cart::getCountFromItems($cartItems)]);
        }
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

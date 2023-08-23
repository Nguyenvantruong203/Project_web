<?php

namespace App\Http\Controllers;

use App\Models\order;
use App\Models\product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $product = product::all();
        return view('home.cart', compact('product'));
    }



    /**
     * Show the form for creating a new resource.
     */
    // public function create($id)
    // {
    //     $product = product::find($id);
    //     $pro = product::all();
    //     return view('home.cart', compact('product', 'pro'));
    // }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request, $id)
    {
        $product = product::find($id);
        $cart = new order();
        $cart->quantity = $request->quantity;
        $cart->size = $request->size;
        $cart->save();
        return redirect()->back();
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

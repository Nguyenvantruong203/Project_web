<?php

namespace App\Http\Controllers;

use App\Models\order;
use App\Models\product;
use App\Models\User;
use Illuminate\Http\Request;


class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = user::all();
        $order = order::all();
        $product = product::all();
        return view('admin.orderAdmin', compact('order', 'product', 'user'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $order = new order();
        $order->quantity = $request->quantity;
        $order->size = $request->size;
        $order->product_id = $request->product_id;
        $order->user_id = $request->user_id;
        $order->save();
        return redirect(route('indexorder'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = user::all();
        $order = order::all();
        $product = product::all();
        return view('admin.editorder', compact('order', 'product', 'user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $order= order::find($id);
        $order->quantity = $request->quantity;
        $order->size = $request->size;
        $order->product_id = $request->product_id;
        $order->user_id = $request->user_id;
        $order->save();
        return redirect(route('indexorder'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        order::destroy($id);
        return redirect(route('indexorder'));
    }
}

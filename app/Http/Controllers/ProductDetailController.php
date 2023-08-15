<?php

namespace App\Http\Controllers;

use App\Models\product_detail;
use Illuminate\Http\Request;
use App\Models\product;

class ProductDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $detail = product_detail::all();
        $product = product::all();
        return view('admin.productDetail', compact('detail', 'product'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $detail = new product_detail();
        $detail->description = $request->description;
        $detail->quantity = $request->quantity;
        $detail->size = $request->size;
        $detail->product_id = $request->product_id;
        $detail->save();
        return redirect(route('indexdetail'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
    public function edit($id)
    {
        $detail= product_detail::find($id);
        $product = product::all();
        return view('admin.editDetail',compact('detail', 'product'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $detail= product_detail::find($id);
        $detail->description = $request->description;
        $detail->quantity = $request->quantity;
        $detail->size = $request->size;
        $detail->product_id = $request->product_id;
        $detail->save();
        return redirect(route('indexdetail'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        product_detail::destroy($id);
        return redirect(route('indexdetail'));
    }
}

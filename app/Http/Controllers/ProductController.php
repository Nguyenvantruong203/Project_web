<?php

namespace App\Http\Controllers;
use App\Models\product;
use App\Models\category;
use App\Models\product_detail;
// use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $product = product::all();
        return view('home.product', compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     */
    // public function product_detail(){
    //     $detail= product_detail::all();
    //     return view('home.product_detail', compact('detail'));
    // }
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
    public function show($id)
    {
        $pro = Product::find($id);
        // $pro = DB::table('products')
        // ->join('product_details', 'products.id', '=', 'product_details.product_id')
        // ->select('products.*', 'product_details.*')
        // ->get();
        return view('home.product_detail', compact('pro'));
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

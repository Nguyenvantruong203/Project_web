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
       $category= category::all();
        return view('home.product', compact('product', 'category'));
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $product = Product::select('products.*', 'categories.category_name as category_name', 'colors.name as color_name', 'providers.provider_name as provider_name')
        ->join('categories', 'products.category_id', '=', 'categories.id')
        ->join('providers', 'products.provider_id', '=', 'providers.id')
        ->join('colors', 'products.color_id', '=', 'colors.id')
        ->where('products.id', $id) 
        ->first();
        // return response()->json($product);
        return view('home.product_detail', compact('product'));
    }

    public function findByCategory($id){
        $product = Product::where('category_id',$id)->get();
        $category= category::all();
    return view('home.product_category', compact('product', 'category'));

    }
    /**
     * Show the form for editing the specified resource.
     */

    public function edit(string $id)
    {

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

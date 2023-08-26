<?php

namespace App\Http\Controllers;

use App\Models\Color;
use Illuminate\Http\Request;


class ColorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $color = color::all();
        return view('admin.colorAdmin', compact('color'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $color = new color();
        $color->name = $request->color_name;
        $color->color_code = $request->color_code;
        $color->save();
        return redirect(route('indexcolor'));
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
        $color = color::find($id);
        $cate = color::all();
        return view('admin.editcolor', compact('color', 'cate'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $color= color::find($id);
        $color->color_code = $request->color_code;
        $color->name = $request->color_name;
        $color->save();
        return redirect(route('indexcolor'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        color::destroy($id);
        return redirect(route('indexcolor'))->with('status', 'Deleted product successfully!!');
    }
}

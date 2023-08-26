<?php

namespace App\Http\Controllers;

use App\Models\provider;

use Illuminate\Http\Request;


class providerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $provider = Provider::all();
        return view('admin.providerAdmin', compact('provider'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $provider = new provider();
        $provider->provider_name =$request->provider_name;
        $provider->phone =$request->phone;
        $provider->address =$request->address;
        $provider->save();
        return redirect(route('indexprovider'));
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
    public function edit(Request $request,string $id)
    {
        $provider = provider::find($id);

        return view('admin.editprovider', compact('provider'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $provider = provider::find($id);
        $provider->provider_name=$request->provider_name;
        $provider->phone=$request->phone;
        $provider->address=$request->address;
        $provider->save();
        return redirect(route('indexprovider'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        provider::destroy($id);
        return redirect(route('indexprovider'));
    }
}

<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function formLogin() // method formlogin sẽ thực hiện hành động trả ra formlogin khi sử dụng đường dẫn get login
    {
        //B2: Khi đã bấm url login sẽ get dữ liệu về và gọi đến method này, method này sẽ thực hiện hành động return view
        return view('auth.login');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function registration()
    {
        return view('auth.Register');
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

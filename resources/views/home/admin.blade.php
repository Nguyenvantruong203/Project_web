@extends('home.layout')
@section('product')
    {{-- @if (session('msg'))
        <h1>{{ session('msg') }}</h1>
    @endif --}}
    <a href="add" class="btn btn-primary">new account</a>
    <table class="table">
        <thead>
            <tr>
                <th>id</th>
                <th>Usernam</th>
                <th>Password</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>

            <tr>
                <td>1</td>
                <td>rf</td>
                <td>fgbfd</td>
                <td>
                    <a href="" class="btn btn-success">Edit</a>
                    <a href="" class="btn btn-danger">Delete</a>
                </td>
            </tr>
        </tbody>
    </table>
@endsection

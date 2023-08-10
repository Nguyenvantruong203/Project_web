@extends('home.layout')
@section('product')
    @include('home.sliderhome')
    <div class="colorlib-product">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 offset-sm-2 text-center colorlib-heading">
                    <h2>Product</h2>
                </div>
            </div>
            <div class="row row-pb-md">
                @foreach ($product as $item)
                    <div class="col-lg-3 mb-4 text-center">
                        <div class="product-entry border">
                            <a href="{{ route('product_detail', ['id' => $item->id]) }}" class="prod-img">
                                <img src="{{ $item->image }}" class="img-fluid" alt="picture error">
                            </a>
                            <div class="desc">
                                <h2><a href="">{{ $item->product_name }}</a></h2>
                                <span class="price">{{ $item->price }}$</span>
                                <button class="btn btn-primary">Xem chi tiết</button>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @endsection

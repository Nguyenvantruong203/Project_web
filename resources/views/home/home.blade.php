@extends('home.layout')
@section('product')
    <div class="colorlib-product">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 offset-sm-2 text-center colorlib-heading">
                    <h2>Best Seller</h2>
                </div>
            </div>
            <div class="row row-pb-md">
                @foreach ($product as $item)
                    <div class="col-lg-3 mb-4 text-center">
                        <div class="product-entry border">
                            <a href="#" class="prod-img">
                                <img src="/uploads/{{ $item->image }}" class="img-fluid"
                                    alt="Free html5 bootstrap 4 template">
                            </a>
                            <div class="desc">
                                <h2><a href="#">{{ $item->product_name }}</a></h2>
                                <span class="price">{{ $item->price }}$</span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @endsection

@extends('home.layout')

@section('category')
    @foreach ($category as $item)
        <li class="active"><a href="{{ route('product_category', ['id' => $item->id]) }}">{{ $item->category_name }}</a></li>
    @endforeach
@endsection

@section('product')
    @include('home.sliderhome')
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
                            <a href="{{ route('product_detail', ['id' => $item->id]) }}" class="prod-img">
                                <img src="/uploads/{{ $item->image }}" class="img-fluid" alt="picture error">
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
        <div class="row">
            <div class="col-md-12 text-center mt-4">
                <div class="block-27">
                    <ul>
                        <li><a href="#"><i class="ion-ios-arrow-back"></i></a></li>
                        <li class="active"><span>1</span></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#"><i class="ion-ios-arrow-forward"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    @endsection

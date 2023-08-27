<!DOCTYPE html>
<html lang="en">

<head>
    <title>Shop Clothes</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Rokkitt:100,300,400,700" rel="stylesheet">

    <!-- Animate.css -->
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="{{ asset('assets/css/icomoon.css') }}">
    <!-- Ion Icon Fonts-->
    <link rel="stylesheet" href="{{ asset('assets/css/ionicons.min.css') }}">
    <!-- Bootstrap  -->
    {{-- <link rel="stylesheet" href="css/bootstrap.min.css"> --}}
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">

    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">

    <!-- Flexslider  -->
    <link rel="stylesheet" href="{{ asset('assets/css/flexslider.css') }}">

    <!-- Owl Carousel -->
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css') }}">

    <!-- Date Picker -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-datepicker.css') }}">
    <!-- Flaticons  -->
    <link rel="stylesheet" href="{{ asset('assets/fonts/flaticon/font/flaticon.css') }}">

    <!-- Theme style  -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<body>
    @include('admin.headeradmin')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        Edit product
                    </div>
                    <div class="card-body">
                        <form action="" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="product_name" class="form-label">Product Name</label>
                                <input type="text" class="form-control" id="product_name" name="product_name"
                                    placeholder="Input product name" value="{{ $product->product_name }}">
                            </div>
                            <div style='color:red;'>
                                @error('product_name')
                                    {{ $message }}
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="price" class="form-label">Price</label>
                                <input type="text" class="form-control" id="price" name="price"
                                    placeholder="Input price" value="{{ $product->price }}">
                            </div>
                            <div style='color:red;'>
                                @error('price')
                                    {{ $message }}
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="category_id" class="form-label">Category</label>
                                <select class="form-select" id="category_id" name="category_id">
                                    @foreach ($cate as $item)
                                        <option value="{{ $item->id }}">{{ $item->category_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Image</label>
                                <input type="file" class="form-control" id="" name="uimage"
                                    value="{{ $product->image }}">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">description</label>
                                <input type="text" class="form-control" id="" name="description"
                                    placeholder="Input price" value="{{ $product->description }}">
                            </div>
                            <div style='color:red;'>
                                @error('description')
                                    {{ $message }}
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">size</label>
                                <input type="text" class="form-control" id="" name="size"
                                    placeholder="Input price" value="{{ $product->size }}">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">quantity</label>
                                <input type="text" class="form-control" id="" name="quantity"
                                    placeholder="Input price" value="{{ $product->quantity }}">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">color</label>
                                <select class="form-select" id="" name="color_id">
                                    @foreach ($color as $item)
                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">provider</label>
                                <select class="form-select" id="" name="provider_id">
                                    @foreach ($provider as $item)
                                        <option value="{{ $item->id }}">{{ $item->provider_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary btn-success">Submit</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>


@include('admin.footeradmin')
</body>
<!-- jQuery -->
<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<!-- popper -->
<script src="{{ asset('assets/js/popper.min.js') }}"></script>
<!-- bootstrap 4.1 -->
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<!-- jQuery easing -->
<script src="{{ asset('assets/js/jquery.easing.1.3.js') }}"></script>
<!-- Waypoints -->
<script src="{{ asset('assets/js/jquery.waypoints.min.js') }}"></script>
<!-- Flexslider -->
<script src="{{ asset('assets/js/jquery.flexslider-min.js') }}"></script>
<!-- Owl carousel -->
<script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
<!-- Magnific Popup -->
<script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('assets/js/magnific-popup-options.js') }}"></script>
<!-- Date Picker -->
<script src="{{ asset('assets/js/bootstrap-datepicker.js') }}"></script>
<!-- Stellar Parallax -->
<script src="{{ asset('assets/js/jquery.stellar.min.js') }}"></script>
<!-- Main -->
<script src="{{ asset('assets/js/main.js') }}"></script>

</html>

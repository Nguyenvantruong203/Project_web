@extends('admin.layoutadmin')

@section('product')
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="card">
                    <div class="card-header">
                        Add New Product
                    </div>
                    <div class="card-body">
                        <form action="" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="product_name" class="form-label">Product Name</label>
                                <input type="text" class="form-control" id="product_name" name="product_name"
                                    placeholder="Input product name">
                            </div>
                            <div style='color:red;'>
                                @error('product_name')
                                    {{ $message }}
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="price" class="form-label">Price</label>
                                <input type="text" class="form-control" id="price" name="price"
                                    placeholder="Input price">
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
                                <label for="image" class="form-label">Image</label>
                                <input type="file" class="form-control" id="image" name="uimage">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">description</label>
                                <input type="text" class="form-control" id="" name="description"
                                    placeholder="Input price">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">size</label>
                                <input type="text" class="form-control" id="" name="size"
                                    placeholder="Input price">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">quantity</label>
                                <input type="text" class="form-control" id="" name="quantity"
                                    placeholder="Input price">
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
                @if (session()->has('status'))
                    <div class="alert alert-success">{{ session('status') }}</div>
                @endif
            </div>
            <div class="col-lg-9">
                <div class="card">
                    <div class="card-header">
                        Product List
                    </div>
                    <div class="card-body">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Product Name</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Size</th>
                                    <th scope="col">Quantity</th>
                                    <th scope="col">description</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($product as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->product_name }}</td>
                                        <td><img src="/uploads/{{ $item->image }}" alt="Product Image"
                                                class="img-thumbnail" style="max-width: 100px;"></td>
                                        <td>{{ $item->price }}$</td>
                                        <td>{{ $item->size }}</td>
                                        <td>{{ $item->quantity }}</td>
                                        <td>{{ $item->description }}</td>

                                        <td>
                                            <a href="{{ route('edit', ['id' => $item->id]) }}"
                                                class="btn btn-info btn-sm">Edit</a>
                                            <a href="{{ route('delete', ['id' => $item->id]) }}"
                                                class="btn btn-danger btn-sm">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
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
            </div>
        </div>
    </div>
    <hr>
@endsection

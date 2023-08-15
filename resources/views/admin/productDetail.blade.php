@extends('admin.layoutadmin')
@section('product')
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="card">
                    <div class="card-header">
                        Add New Product
                    </div>
                    <div class="card-body">
                        <form action="" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="" class="form-label">Description</label>
                                <input type="text" class="form-control" id="" name="description"
                                    placeholder="Input category name">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Quantity</label>
                                <input type="text" class="form-control" id="" name="quantity"
                                    placeholder="Input category name">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Size</label>
                                <input type="text" class="form-control" id="" name="size"
                                    placeholder="Input category name">
                            </div>
                            <div class="mb-3">
                                <label for="product_id" class="form-label"></label>
                                <select class="form-select" id="product_id" name="product_id">
                                    @foreach ($product as $item)
                                        <option value="{{ $item->id }}">{{ $item->product_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>

                        </form>
                    </div>
                </div>
                @if (session()->has('status'))
                    <div class="alert alert-success">{{ session('status') }}</div>
                @endif
            </div>
            <div class="col-lg-7">
                <div class="card">
                    <div class="card-header">
                        Product List
                    </div>
                    <div class="card-body">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Quantity</th>
                                    <th scope="col">Size</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($detail as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->description }}</td>
                                        <td>{{ $item->quantity }}</td>
                                        <td>{{ $item->size }}</td>
                                        <td>
                                            <a href="{{ route('editdetail', ['id' => $item->id]) }}"
                                                class="btn btn-info btn-sm">Edit</a>
                                            <a href="{{ route('deletedetail', ['id' => $item->id]) }}"
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

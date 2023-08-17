@extends('admin.layoutadmin')
@section('product')
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                @if (session()->has('status'))
                    <div class="alert alert-success">{{ session('status') }}</div>
                @endif
            </div>
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        Product List
                    </div>
                    <div class="card-body">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Ảnh</th>
                                    <th scope="col">Tên Sản Phẩm</th>
                                    <th scope="col">Giá</th>
                                    <th scope="col">Số Lượng</th>
                                    <th scope="col">Hành Động</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($order as $item)
                                    <tr>
                                        <td>{{ $item->quantity }}</td>
                                        <td>{{ $item->size }}</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>
                                            <a href="" class="btn btn-info btn-sm">Edit</a>
                                            <a href="" class="btn btn-danger btn-sm">Delete</a>
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

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
                                <label for="" class="form-label">provider Name</label>
                                <input type="text" class="form-control" id="" name="provider_name"
                                    placeholder="Input category name">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">phone</label>
                                <input type="text" class="form-control" id="" name="phone"
                                    placeholder="Input category name">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">address</label>
                                <input type="text" class="form-control" id="" name="address"
                                    placeholder="Input category name">
                            </div>
                            <div style='color:red;'>
                                @error('category_name')
                                    {{ $message }}
                                @enderror
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
                                    <th scope="col">Provider Name</th>
                                    <th scope="col">phone</th>
                                    <th scope="col">address Name</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($provider as $item)
                                    {{-- lặp show dữ liệu  --}}
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        {{-- Hướng tới trường id, lấy tất cả các record ID trong table category hiển thị ra --}}
                                        <td>{{ $item->provider_name }}</td>
                                        <td>{{ $item->phone }}</td>
                                        <td>{{ $item->address }}</td>

                                        <td>
                                            <a href="{{ route('editprovider', ['id' => $item->id]) }}"
                                                class="btn btn-info btn-sm">Edit</a>
                                            {{-- Khi bấm vào nút edit sẽ chuyển sang trang editcategory, route edit sẽ nhận id mình muốn sửa --}}
                                            <a href="{{ route('deleteprovider', ['id' => $item->id]) }}"
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

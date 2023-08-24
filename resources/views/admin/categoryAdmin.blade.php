@extends('admin.layoutadmin')
@section('product')
    {{-- Định nghĩa nội dung của @yield --}}
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
                                <label for="price" class="form-label">Category Name</label>
                                <input type="text" class="form-control" id="price" name="category_name">
                                {{-- ô input nhận dữ liệu của category_name --}}
                            </div>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary btn-success">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
                @if (session()->has('status'))
                    {{-- Bộ nhớ tạm thời --}}
                    {{-- Đoạn này chưa rõ => Có thể là khi bấm submit xong sẽ hiển thị ra một status  --}}
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
                                    <th scope="col">Category ID</th>
                                    <th scope="col">Category Name</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($category as $item)
                                    {{-- Lặp show dữ liệu --}}
                                    {{-- Phần này là phần dưới bảng  --}}
                                    <tr>
                                        <td>{{ $item->id }}</td> {{-- Hướng tới trường id, lấy tất cả các record ID trong table category hiển thị ra --}}
                                        <td>{{ $item->category_name }}</td>
                                        <td>
                                            <a href="{{ route('editcategory', ['id' => $item->id]) }}"
                                                class="btn btn-info btn-sm">Edit</a>
                                            {{-- Khi bấm vào nút edit sẽ chuyển sang trang editcategory, route edit sẽ nhận id mình muốn sửa --}}
                                            <a href="{{ route('deletecategory', ['id' => $item->id]) }}"
                                                class="btn btn-danger btn-sm">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="row"> {{-- Phần hiển thị trang ở dưới --}}
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

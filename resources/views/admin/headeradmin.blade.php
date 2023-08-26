<div id="page">
    <nav class="colorlib-nav" role="navigation">
        <div class="top-menu">
            <div class="container">
                <div class="row">
                    <div class="col-sm-7 col-md-9">
                        <div id="colorlib-logo"><a href="index.html">Admin</a></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="sale">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 offset-sm-2 text-center">
                        <div class="row">
                            <div class="owl-carousel2">
                                <div class="item">
                                    <div class="col">
                                        <h3><a href="#">25% off (Almost) Everything! Use Code: Summer Sale</a>
                                        </h3>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="col">
                                        <h3><a href="#">Our biggest sale yet 50% off all summer shoes</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <div class="container-fluid">
        <div class="row">
            <style>
                /* Thêm hiệu ứng hover cho các liên kết */
                .nav-link {
                    transition: background-color 0.3s ease;
                }

                .nav-link:hover {
                    background-color: #f2f2f2;
                    /* Màu nền khi chạm */
                }

                .nav-link {
                    border: 1px solid #ccc;
                    /* Thêm viền 1px solid và màu sắc tùy chọn */
                    border-radius: 5px;
                    /* Bo tròn viền */
                    padding: 5px 10px;
                    /* Tạo khoảng cách giữa viền và nội dung */
                }

                .nav-link.active {
                    border-color: #007bff;
                    /* Đổi màu viền cho nút hiện tại */
                }
            </style>
            <nav class="col-md-12 d-none d-md-block my-4">
                <div class="position-sticky">
                    <ul class="nav justify-content-center">
                        <li class="nav-item mx-2">
                            <a class="nav-link" href="{{ route('adminindex') }}">
                                Product
                            </a>
                        </li>
                        <li class="nav-item mx-2">
                            <a class="nav-link" href="{{ route('indexcategory') }}">
                                Category
                            </a>
                        </li>
                        <li class="nav-item mx-2">
                            <a class="nav-link" href="{{ route('indexcolor') }}">
                                color
                            </a>
                        </li>
                        <li class="nav-item mx-2">
                            <a class="nav-link" href="{{ route('indexprovider') }}">
                                provider
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</div>

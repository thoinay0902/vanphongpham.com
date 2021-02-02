@extends('layout.layout_admin')
@section('title', 'Trang xem sản phẩm')


@section('breadcrumb')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6"></div>
                <div class="col-sm-6 text-right">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                        <li class="breadcrumb-item"><a href="{{ url('list-product') }}">Danh sách sản phẩm</a></li>
                        <li class="breadcrumb-item active">Thông tin sản phẩm</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
@endsection





@section('content')


    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="card card-solid">
            <div class="card-body">
                <div class="row">
                    <div class="col-12 col-sm-6">
                        <h3 class="d-inline-block d-sm-none">LOWA Men’s Renegade GTX Mid Hiking Boots Review</h3>
                        <div class="col-12">
                            <img src="{{ url('public/home/img/quatao0.jpg') }}" class="product-image" alt="Product Image">
                        </div>
                        <div class="col-12 product-image-thumbs">
                            <div class="product-image-thumb active"><img src="{{ url('public/home/img/quatao1.jpg') }}" alt="Product Image"></div>
                            <div class="product-image-thumb" ><img src="{{ url('public/home/img/quatao2.jpg') }}" alt="Product Image"></div>
                            <div class="product-image-thumb" ><img src="{{ url('public/home/img/quatao3.jpg') }}" alt="Product Image"></div>
                            <div class="product-image-thumb" ><img src="{{ url('public/home/img/quatao4.jpg') }}" alt="Product Image"></div>
                            <div class="product-image-thumb" ><img src="{{ url('public/home/img/quatao5.png') }}" alt="Product Image"></div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6">
                        <h3 class="my-3">QUẢ TÁO</h3>
                        <hr>
                        <h4>Giảm giá: 10%</h4>

                        <h4 class="mt-3">Số lượng:  50</h4>
                        <div class="bg-gray py-2 px-3 mt-4">
                            <h2 class="mb-0">
                                Giá mua vào: 80,000 đ/Kg
                            </h2>
                        </div>
                        <div class="bg-gray py-2 px-3 mt-4">
                            <h2 class="mb-0">
                                Giá bán: 100,000 đ/Kg
                            </h2>
                            <h4 class="mt-0">
                                <small>Thuế : 10% </small>
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="row mt-4">
                    <nav class="w-100">
                        <div class="nav nav-tabs" id="product-tab" role="tablist">
                            <a class="nav-item nav-link active" id="product-desc-tab" data-toggle="tab" href="#product-desc" role="tab" aria-controls="product-desc" aria-selected="true">Mô tả</a>
                        </div>
                    </nav>
                    <div class="tab-content p-3" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="product-desc" role="tabpanel" aria-labelledby="product-desc-tab"> Quả táo tròn tròn, bóng mịn. Cuống táo nhỏ, ngắn và mảnh. Sự hấp dẫn đầu tiên của trước hết nằm ở màu sắc của vỏ táo đỏ thẫm, với những chấm vàng li ti trông rất đẹp mắt. Sau lớp vỏ mỏng là lớp thịt quả vàng màu vàng nhạt, ăn vào cảm giác giòn xốp.</div>

                    </div>
                </div>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->

    </section>
    <!-- /.content -->


@endsection

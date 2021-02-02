@extends('layout.layout_admin')
@section('title', 'Trang chỉnh sửa sản phẩm')


@section('breadcrumb')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6"></div>
                <div class="col-sm-6 text-right">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                        <li class="breadcrumb-item"><a href="{{ url('list-product') }}">Danh sách sản phẩm</a></li>
                        <li class="breadcrumb-item active">Chỉnh sửa sản phẩm</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
@endsection





@section('content')
    <section class="content">
        <!-- Main row -->
        <div class="row">
            <!-- Left col -->
            <section class="col-lg-6 offset-lg-3">
                <!-- TO DO List -->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">
                            <i class="ion ion-clipboard mr-1"></i>
                            Chỉnh sửa sản phẩm
                        </h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body p-2">
                        <form action="" method="post">

                            <div class="form-group">
                                <label for="">Loại sản phẩm</label>
                                <select name="" class="form-control">
                                    <option value="">- - Chọn - -</option>
                                    <option value="">Trái cây</option>
                                    <option value="">Rau</option>
                                    <option value="">Đồ hộp</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="">Tên sản phẩm</label>
                                <input type="text" name="" class="form-control" placeholder="Nhập tên sản phẩm">
                            </div>

                            <div class="form-group">
                                <label for="">Hình ảnh</label><br>
                                <input type="file" name="">
                            </div>

                            <div class="form-group">
                                <label for="">Số lượng</label>
                                <input type="text" name="" class="form-control" placeholder="Nhập số lượng sản phẩm">
                            </div>

                            <div class="form-group">
                                <label for="">Giá bán</label>
                                <input type="text" name="" class="form-control" placeholder="Nhập giá bán sản phẩm">
                            </div>

                            <div class="form-group row">
                                <legend class="col-form-legend col-sm-12">Mô tả </legend>
                                <div class="col-sm-12">
                                    <textarea name="" id="" class="form-control" rows="4" placeholder="Nhập mô tả sản phẩm"></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="">Giảm giá</label>
                                <input type="text" name="" class="form-control" placeholder="Nhập thông tin giảm giá">
                            </div>

                            <div class="form-group">
                                <label for="">Đơn vị</label>
                                <select name="" class="form-control">
                                    <option value="">- - Chọn - -</option>
                                    <option value="">Kg</option>
                                    <option value="">Thùng</option>
                                    <option value="">Hộp</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="">Thuế</label>
                                <input type="text" name="" class="form-control" placeholder="Nhập số thuế">
                            </div>
                        </form>
                    </div>
                    <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10 text-right">
                            <button type="submit" class="btn btn-primary">Lưu</button>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </section>
            <!-- /.Left col -->
        </div>
        <!-- /.row (main row) -->

    </section>
@endsection

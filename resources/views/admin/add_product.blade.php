@extends('layout.layout_admin')
@section('title', 'Thêm sản phẩm')


@section('breadcrumb')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6"></div>
                <div class="col-sm-6 text-right">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                        <li class="breadcrumb-item"><a href="{{ url('list-product') }}">Danh sách sản phẩm</a></li>
                        <li class="breadcrumb-item active">Thêm sản phẩm</li>
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
            <section class="col-lg-10 offset-lg-1">
                <!-- TO DO List -->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">
                            <i class="ion ion-clipboard mr-1"></i>
                            THÊM SẢN PHẨM
                        </h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body p-2">
                        <form action="" method="post">

                            <div class="form-group row">
                                <div class="col-6">
                                    <label for="">Loại sản phẩm</label>
                                    <select name="inputCategoryId" class="form-control">
                                        <option value="">- - Chọn - -</option>
                                        <option value="">Trái cây</option>
                                        <option value="">Rau</option>
                                        <option value="">Đồ hộp</option>
                                    </select>
                                </div>
                                <div class="col-6">
                                    <label for="">Tên sản phẩm</label>
                                    <input type="text" name="inputNameProduct" class="form-control" placeholder="Nhập tên sản phẩm">
                                </div>
                            </div>


                            <div class="form-group row">
                                <div class="col-6">
                                    <label for="">Hình ảnh</label><br>
                                    <input type="file" name="">
                                </div>
                                <div class="col-6">
                                    <label for="">Số lượng</label>
                                    <input type="text" name="" class="form-control" placeholder="Nhập số lượng sản phẩm">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-6">
                                    <label for="">Giá bán</label>
                                    <input type="text" name="" class="form-control" placeholder="Nhập giá bán sản phẩm">
                                </div>
                                <div class="col-6">
                                    <label for="">Giảm giá</label>
                                    <input type="number" name="" class="form-control" placeholder="Nhập thông tin giảm giá">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-6">
                                    <label for="">Đơn vị</label>
                                    <select name="" class="form-control">
                                        <option value="">- - Chọn - -</option>
                                        <option value="Kg">Kg</option>
                                        <option value="Thùng">Thùng</option>
                                        <option value="Hộp">Hộp</option>
                                    </select>
                                </div>
                                <div class="col-6">
                                    <label for="">Thuế</label>
                                    <input type="number" name="" class="form-control" placeholder="Nhập số thuế">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <label for="">Mô tả</label>
                                    <textarea name="inputDescription"></textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="offset-sm-2 col-sm-10 text-right">
                                    <button type="submit" class="btn btn-primary">Lưu</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </section>
            <!-- /.Left col -->
        </div>
        <!-- /.row (main row) -->
    </section>

    <script>
        CKEDITOR.replace('inputDescription');
    </script>

@endsection

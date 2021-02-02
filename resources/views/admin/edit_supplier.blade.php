@extends('layout.layout_admin')
@section('title', 'Trang chỉnh sửa nhà cung cấp')


@section('breadcrumb')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6"></div>
                <div class="col-sm-6 text-right">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                        <li class="breadcrumb-item"><a href="{{ url('list-product') }}">Nhà cung cấp</a></li>
                        <li class="breadcrumb-item active">Chỉnh sửa nhà cung cấp</li>
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
                            Chỉnh sửa nhà cung cấp
                        </h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body p-2">
                        <form action="" method="post">


                            <div class="form-group">
                                <label for="">Tên nhà cung cấp</label>
                                <input type="text" name="" class="form-control" placeholder="Nhập tên nhà cung cấp">
                            </div>

                            <div class="form-group">
                                <label for="">Hình ảnh</label><br>
                                <input type="file" name="">
                            </div>

                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="text" name="" class="form-control" placeholder="Nhập email nhà cung cấp">
                            </div>



                            <div class="form-group row">
                                <legend class="col-form-legend col-sm-12">Mô tả </legend>
                                <div class="col-sm-12">
                                    <textarea name="" id="" class="form-control" rows="4" placeholder="Nhập mô tả nhà cung cấp"></textarea>
                                </div>
                            </div>


                            <div class="form-group">
                                <label for="">Địa chỉ</label>
                                <input type="text" name="" class="form-control" placeholder="Nhập địa chỉ nhà cung cấp">
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


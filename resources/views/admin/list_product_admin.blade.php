@extends('layout.layout_admin')
@section('title', 'Trang Danh sách sản phẩm')


@section('breadcrumb')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6"></div>
                <div class="col-sm-6 text-right">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                        <li class="breadcrumb-item active">Danh sách sản phẩm</li>
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
            <section class="col-lg-12 connectedSortable">
                <!-- TO DO List -->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">
                            <i class="ion ion-clipboard mr-1"></i>
                            Danh sách sản phẩm
                        </h3>
                        <div class="card-tools">
                            <a class="btn btn-primary btn-sm" href="{{ url('add-product') }}" role="button">
                                <i class="fa fa-plus-circle"></i> Thêm mới
                            </a>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body p-1">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>STT</th>
                                <th>Tên sản phẩm</th>
                                <th>Hình ảnh</th>
                                <th>Số lượng</th>
                                <th>Giá bán</th>
                                <th>Mô tả</th>
                                <th>Giảm giá</th>
                                <th>Đơn vị</th>
                                <th>Thuế</th>
                                <th scope="col" colspan="3">Tùy chọn</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td scope="row">1</td>
                                <td>Chuối</td>
                                <td><img src="{{ url('public/home/img/product/product-2.jpg') }}" class="img-circle elevation-2" alt="User Image " width="30px" height="30px"></td>
                                <td>10</td>
                                <td>20000</td>
                                <td>Chuối tươi, ngon</td>
                                <td>Không</td>
                                <td>Kg</td>
                                <td>10%</td>
                                <td>
                                    <a class="btn btn-danger btn-xs" href="#" role="button" onclick="myFunction()">
                                        <i class="fa fa-trash"></i> Xóa
                                    </a>
                                </td>
                                <script>
                                    function myFunction() {
                                        confirm("Bạn có chắc muốn xóa không?");
                                    }
                                </script>
                                <td>
                                    <a class="btn btn-success btn-xs" href="{{ url('edit-product') }}" role="button">
                                        <i class="fas fa-edit"></i> Chỉnh sửa
                                    </a>
                                </td>
                                <td>
                                    <a class="btn btn-success btn-xs" href="{{ url('see-product') }}" role="button">
                                        <i class="fas fa-eye"></i> Xem
                                    </a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
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

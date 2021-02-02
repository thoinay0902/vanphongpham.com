@extends('layout.layout_admin')
@section('title', 'Trang hóa đơn')


@section('breadcrumb')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6"></div>
                <div class="col-sm-6 text-right">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                        <li class="breadcrumb-item active">Hóa đơn</li>
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
                            HÓA ĐƠN
                        </h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body p-1">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>STT</th>
                                <th>Mã hóa đơn</th>
                                <th>Tên khách hàng</th>
                                <th>Trạng thái</th>
                                <th>Phương thức thanh toán</th>
                                <th scope="col" colspan="3">Tùy chọn</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td scope="row">1</td>
                                <td>001</td>
                                <td>Phan Phúc Thịnh</td>
                                <td><b style="color:#00b44e;">Chờ thanh toán</b></td>
                                <td>Tiền mặt</td>

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
                                    <a class="btn btn-info btn-xs" href="{{ url('edit-supplier') }}" role="button">
                                        <i class="fas fa-edit"></i> Duyệt
                                    </a>
                                </td>
                                <td>
                                    <a class="btn btn-success btn-xs" href="{{ url('order-detail') }}" role="button">
                                        <i class="fas fa-eye"></i> xem
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

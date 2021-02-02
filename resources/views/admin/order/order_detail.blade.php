@extends('layout.layout_admin')
@section('title', 'Trang hóa đơn chi tiết')


@section('breadcrumb')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6"></div>
                <div class="col-sm-6 text-right">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                        <li class="breadcrumb-item"><a href="{{ url('list-product') }}">Hóa đơn</a></li>
                        <li class="breadcrumb-item active">Hóa đơn chi tiết</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
@endsection





@section('content')

    <div class="container">
        <div class="card">
            <div class="card-header">
                Ngày đặt hàng
                <strong>20/11/2020</strong>
                <span class="float-right"> <strong>Trạng thái:</strong> Đang giao hàng</span>

            </div>
            <div class="card-body">
                <div class="row mb-4">
                    <div class="col-sm-6">
                        <h6 class="mb-3">From:</h6>
                        <div>
                            <strong>Fruitshop.vn</strong>
                        </div>
                        <div>Hòa An</div>
                        <div>Phụng Hiệp, Hậu Giang</div>
                        <div>Email: thoiduong0@gmail.com</div>
                        <div>Phone: +84 925 434 581</div>
                    </div>

                    <div class="col-sm-6">
                        <h6 class="mb-3">To:</h6>
                        <div>
                            <strong>Nguyễn Văn Thức</strong>
                        </div>
                        <div>Cà Mau</div>
                        <div>Thới Bình, Cà Mau</div>
                        <div>Email: thucnguyen@gmail.com</div>
                        <div>Phone: +84 923 556 779</div>
                    </div>



                </div>

                <div class="table-responsive-sm">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th class="center">Stt</th>
                            <th>Tên sản phẩm</th>
                            <th>Hình ảnh</th>
                            <th>Giá bán</th>
                            <th class="right">Số lượng</th>
                            <th class="right">Tổng tiền</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td class="center">1</td>
                            <td class="left strong">Táo</td>
                            <td class="center"><img src="{{ url('public/home/img/quatao0.jpg') }}" class="img-circle elevation-2" alt="User Image " width="30px" height="30px"></td></td>
                            <td class="left">25000đ/Kg</td>
                            <td class="right">3</td>
                            <td class="right">75000đ/Kg</td>
                        </tr>
                        <tr>
                            <td class="center">2</td>
                            <td class="left strong">Xoài</td>
                            <td class="center"><img src="{{ url('public/home/img/traixoai.jpg') }}" class="img-circle elevation-2" alt="User Image " width="30px" height="30px"></td></td>
                            <td class="left">30000đ/Kg</td>
                            <td class="right">2</td>
                            <td class="right">60000đ/Kg</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-5">

                    </div>

                    <div class="col-lg-4 col-sm-5 ml-auto">
                        <table class="table table-clear">
                            <tbody>
                            <tr>
                                <td class="left">
                                    <strong>Tổng phụ</strong>
                                </td>
                                <td class="right">135000</td>
                            </tr>
                            <tr>
                                <td class="left">
                                    <strong>Khuyến mãi (20%)</strong>
                                </td>
                                <td class="right">25000</td>
                            </tr>
                            <tr>
                                <td class="left">
                                    <strong>Thuế (0%)</strong>
                                </td>
                                <td class="right">0</td>
                            </tr>
                            <tr>
                                <td class="left">
                                    <strong>Tổng tiền thanh toán</strong>
                                </td>
                                <td class="right">
                                    <strong>110000</strong>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                        <div class="card-tools text-right">
                            <a class="btn btn-primary btn-sm" href="{{ url('export-order') }}" role="button">
                                <i class="fa fa-plus-circle"></i> Xuất hóa đơn
                            </a>
                        </div>

                    </div>

                </div>

            </div>
        </div>
    </div>

@endsection

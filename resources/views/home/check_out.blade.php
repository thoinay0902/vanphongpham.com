@extends('layout.layout')
@section('title', 'Trang chủ')
@section('content')

<!-- Hero Section Begin -->
    <section class="hero hero-normal">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="hero__categories">
                        <div class="hero__categories__all">
                            <i class="fa fa-bars"></i>
                            <span>Danh mục</span>
                        </div>
                        <ul>
                            <li><a href="#">Thịt tươi sống</a></li>
                            <li><a href="#">Rau</a></li>
                            <li><a href="#">Trái cây & quả hạt</a></li>
                            <li><a href="#">Quả Mọng</a></li>
                            <li><a href="#">Thức Ăn Đại Dương</a></li>
                            <li><a href="#">Bơ & Trứng</a></li>
                            <li><a href="#">Thức Ăn Nhanh</a></li>
                            <li><a href="#">Hành Tươi</a></li>
                            <li><a href="#">Đu Đủ</a></li>
                            <li><a href="#">Cháo bột yến mạch</a></li>
                            <li><a href="#">Chuối tươi</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="hero__search">
                        <div class="hero__search__form">
                            <form action="#">
                                <div class="hero__search__categories">
                                    All Categories
                                    <span class="arrow_carrot-down"></span>
                                </div>
                                <input type="text" placeholder="Bạn cần tìm gì?">
                                <button type="submit" class="site-btn">TÌM</button>
                            </form>
                        </div>
                        <div class="hero__search__phone">
                            <div class="hero__search__phone__icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="hero__search__phone__text">
                                <h5>+84925434581</h5>
                                <span>support 24/7 time</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="{{ url('public/home/img/breadcrumb.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Thanh toán</h2>
                        <div class="breadcrumb__option">
                            <a href="{{ url('/') }}">Trang chủ</a>
                            <span>Thanh toán</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Checkout Section Begin -->
    <section class="checkout spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h6><span class="icon_tag_alt"></span> Có phiếu giảm giá không? <a href="#">Bấm vào đây</a> nhập mã của bạn

                    </h6>
                </div>
            </div>
            <div class="checkout__form">
                <h4>Chi tiết thanh toán</h4>
                <form action="#">
                    <div class="row">
                        <div class="col-lg-8 col-md-6">
                            <div class="checkout__input">
                                <p>Họ và tên: Dương Thời</p>
                            </div>
                            <div class="checkout__input">
                                <p>
                                    Địa chỉ: Ấp Tà Săng, xã Dương Hòa, huyện Kiên Lương, tỉnh Kiên Giang
                                    <a class="btn btn-danger" href="#" role="button" data-toggle="modal" data-target="#myModal">
                                        <i class="fa fa-exchange"></i> Thay đổi
                                     </a>
                                 </p>
                               
                            </div>
                            <div class="checkout__input">
                                <p>Số điện thoại: 0925434581 </p>
                            </div>
                            <div class="checkout__input">
                                <p>Email: thoiduong0@gmail.com </p>
                            </div>
                            <div class="checkout__input">
                                <p>Ghi chú đơn hàng<span>*</span></p>
                                <textarea name="" rows="3" class="form-control" style="font-size: 13px;"
                                 placeholder="Ghi chú về đơn đặt hàng của bạn, ví dụ: Lưu ý đặc biệt để giao hàng"></textarea>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="checkout__order">
                                <h4>Hóa đơn của bạn</h4>
                                <div class="checkout__order__products">Sản phẩm <span>Định lượng</span></div>
                                <ul>
                                    <li>Gói rau <span>$75.99</span></li>
                                    <li>Rau vườn tươi <span>$151.99</span></li>
                                    <li>Chuối hữu cơ <span>$53.99</span></li>
                                </ul>
                                <div class="checkout__order__subtotal">Tổng phụ <span>$750.99</span></div>
                                <div class="checkout__order__total">Định lượng <span>$750.99</span></div>
                                <div class="checkout__input__checkbox">
                                    <label for="acc-or">
                                        Tạo một tài khoản?
                                        <input type="checkbox" id="acc-or">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adip elit, sed do eiusmod tempor incididunt
                                    ut labore et dolore magna aliqua.</p>
                                <div class="checkout__input__checkbox">
                                    <label for="payment">
                                        Kiểm tra thanh toán
                                        <input type="checkbox" id="payment">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="checkout__input__checkbox">
                                    <label for="paypal">
                                        Paypal
                                        <input type="checkbox" id="paypal">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <button type="submit" class="site-btn">Đặt hàng </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- Checkout Section End -->


    <!-- Modal -->
    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                      <label for="" style="font-size: 14px;font-weight:bold;">Địa chỉ hiện tại</label>
                      <textarea name="" rows="3" class="form-control" style="font-size: 13px;"
                        placeholder="Nhập địa chỉ hiện tại mới"></textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
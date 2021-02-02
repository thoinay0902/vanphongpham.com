@extends('layout.layout')
@section('title', 'Trang cá nhân')


@section('content')

<link rel="stylesheet" href="{{url('public/home/css/style_profile_user.css')}}" type="text/css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<div class="row">
    <div class="col-sm-10 offset-sm-1">
        <div class="user-profile" style="margin-top:15px;">
            <div class="tabbable">
                <ul class="nav nav-tabs padding-18">
                    <li>
                        <a data-toggle="tab" href="#home">

                            <i class="green ace-icon fa fa-user bigger-120"></i>
                            <li><a href="{{ url('profile-user') }}">Hồ sơ cá nhân</a></li>
                        </a>
                    </li>

                    <li>
                        <a data-toggle="tab" href="#feed">

                            <i class="orange ace-icon fa fa-credit-card-alt bigger-120"></i>
                            <li><a href="{{ url('wait-payment') }}">Chờ thanh toán</a></li>
                        </a>
                    </li>

                    <li>
                        <a data-toggle="tab" href="#friends">

                            <i class="blue ace-icon fa fa-car bigger-120"></i>
                            <li><a href="{{ url('shipping') }}">Đã giao hàng</a></li>
                        </a>
                    </li>

                    <li>
                        <a data-toggle="tab" href="#pictures">

                            <i class="pink ace-icon fa fa-window-close bigger-120"></i>
                            <li><a href="{{ url('cancle') }}">Đã hủy</a></li>
                        </a>
                    </li>
                </ul>

                <div class="tab-content no-border padding-24">
                    <div id="home" class="tab-pane in active">
                        <div class="row">
                            <div class="col-xs-12 col-sm-3 center">
                                <span class="profile-picture">
                                    <img class="editable img-responsive" style="max-width:100%;height:200px;" id="avatar2"
                                    src="http://bootdey.com/img/Content/avatar/avatar6.png">
                                </span>

                                <div class="space space-4"></div>
                                <a href="{{ url('change-mk') }}" class="btn btn-sm btn-success" style="margin-top:10px;">
                                    <span class="bigger-110"></span>Đổi mật khẩu</span>
                                </a>

                                <a href="{{ url('edit') }}" class="btn btn-sm btn-success" style="margin-top:10px;">
                                    <span class="bigger-110"></span>Chỉnh sửa</span>
                                </a>
                            </div>
                            <!-- /.col -->

                            @yield('profile_col_9')

                        </div>
                    </div><!-- /#home -->


                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@extends('layout.layout_admin')
@section('title', 'Thông tin')

@section('content')
    <br>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                    <!-- Profile Image -->
                    <div class="card card-primary card-outline">
                        <div class="card-body box-profile">
                            <div class="text-center">
                                <img class="profile-user-img img-fluid img-circle"
                                     href="profile-user-admin"
                                     src="{{ url('public/home/img/thoi.jpg') }}"
                                     alt="User profile picture">
                            </div>

                            <h3 class="profile-username text-center">Dương Thời</h3>

                            <p class="text-muted text-center">Quản trị</p>

                            <a href="{{ url('change-password-admin') }}" class="btn btn-primary btn-block"><b>Đổi mật khẩu</b></a>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                    <!-- About Me Box -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Thông tin admin</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <strong><i class="fas fa-book mr-1"></i> Họ tên</strong>

                            <p class="text-muted">
                                Dương Thời
                            </p>

                            <hr>

                            <strong><i class="fas fa-map-marker-alt mr-1"></i> Địa chỉ</strong>

                            <p class="text-muted">Ấp Tà Săng, xã Dương Hòa, Kiên Lương, Kien Giang</p>

                            <hr>

                            <strong><i class="fas fa-pencil-alt mr-1"></i> Số điện thoại</strong>

                            <p class="text-muted">
                                0925434581
                            </p>

                            <hr>

                            <strong><i class="far fa-file-alt mr-1"></i> Email</strong>

                            <p class="text-muted">thoiduong0@gmail.com</p>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>

                <div class="col-md-9">
                    <div class="card">
                        <div class="card-header p-2">
                            <ul class="nav nav-pills">
                            <li class="nav-item"><a class="nav-link active" href="{{ url('profile-user-admin') }}">Thông tin cá nhân</a></li>
                            </ul>
                        </div><!-- /.card-header -->
                        <div class="card-body">
                            @yield('profile_admin_col_9')
                            <!-- /.tab-content -->
                        </div><!-- /.card-body -->
                    </div>
                    <!-- /.nav-tabs-custom -->
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>

@endsection

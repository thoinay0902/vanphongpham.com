@extends('layout.layout_admin')
@section('title', 'Trang thông tin admin')


@section('breadcrumb')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6"></div>
                <div class="col-sm-6 text-right">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                        <li class="breadcrumb-item active">Quản trị</li>
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

                @if(session()->has('message'))
                    <div class="alert alert-success">
                        {{ session()->get('message') }}
                    </div>
                @endif

                <!-- TO DO List -->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">
                            <i class="ion ion-clipboard mr-1"></i>
                            QUẢN TRỊ
                        </h3>
                        <div class="card-tools">
                            <a class="btn btn-primary btn-sm" href="{{ url('add-admin') }}" role="button">
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
                                <th>Họ và tên</th>
                                <th>Hình ảnh</th>
                                <th>Tài khoản</th>
                                <th>Giới tính</th>
                                <th>Email</th>
                                <th>Địa chỉ</th>

                            </tr>
                            </thead>
                            <tbody>
                            @forelse($show_admins as $key => $data)
                            <tr>
                                <td>{{ ++$key }}</td>
                                <td>{{ $data->fullname }}</td>
                                <td>
                                    <img src="{{ url('public/upload_images/'.$data->avatar) }}"
                                     class="img-circle elevation-2" width="30px" height="30px">
                                </td>
                                <td>{{ $data->username }}</td>
                                <td>{{ $data->sex }}</td>
                                <td>{{ $data->email }}</td>
                                <td>{{ $data->adress }}</td>
                            </tr>
                            @empty
                                <tr>
                                    <td>
                                        <b class="text-danger">Không có dữ liệu</b>
                                    </td>
                                </tr>
                            @endforelse
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

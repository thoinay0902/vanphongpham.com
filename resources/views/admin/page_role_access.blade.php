@extends('layout.layout_admin')
@section('title', 'Trang quyền truy cập')


@section('breadcrumb')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6"></div>
                <div class="col-sm-6 text-right">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                        <li class="breadcrumb-item active">Quyền truy cập</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
@endsection





@section('content')
    <section class="content">
        <div class="container-fluid">
            <!-- Main row -->
            <div class="row">
                <!-- Left col -->
                <section class="col-lg-4">

                    @if(session()->has('add_role'))
                    <div class="alert alert-success" role="alert">
                        <strong>{{ session()->get('add_role') }}</strong>
                    </div>
                    @endif

                    <!-- TO DO List -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">
                                <i class="ion ion-clipboard mr-1"></i>
                                THÊM QUYỀN
                            </h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body p-1">
                            <form action="{{ url('post-role-access') }}" method="POST">
                                {{-- Mã token bảo vệ dữ liệu chống hack lấy dữ liệu gửi đi--}}
                                @csrf

                                <div class="form-group row">
                                    <label for="inputName" class="col-sm-12 col-form-label">Tên quyền</label>
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control" name="inputRoleName" id="inputName"
                                        placeholder="Nhập tên quyền">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <legend class="col-form-legend col-sm-12">Mô tả quyền</legend>
                                    <div class="col-sm-12">
                                        <textarea name="inputRoleDescription" class="form-control" rows="4" placeholder="Nhập mô tả quyền"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="offset-sm-2 col-sm-10 text-right">
                                        <button type="submit" class="btn btn-primary">Thêm</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </section>


                <section class="col-lg-8">
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
                                QUYỀN NGƯỜI DÙNG
                            </h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body p-1">
                            <table class="table">
                                <thead>

                                <tr>
                                    <th style="width: 5%;">STT</th>
                                    <th style="width: 45%;">Họ Tên</th>
                                    <th style="width: 35%;">Quyền người dùng</th>
                                    <th style="width: 15%;">Chọn</th>
                                </tr>
                                </thead>
                                <tbody>
                                @forelse($show_roles as $key => $show_role)
                                <tr>
                                    <td><b>{{ ++$key }}</b></td>
                                    <td>{{ $show_role->fullname }}</td>
                                    <td>
                                        @php($get_roles = DB::table('role_accesses')->where('id',$show_role->role_id)->get())
                                        @foreach($get_roles as $value )
                                            {{ $value->role_name }}
                                        @endforeach
                                    </td>
                                    <td>
                                        @if($show_role->role_id == 1)
                                            <button type="button" class="btn btn-primary btn-sm" disabled>Thay đổi</button>
                                        @else
                                            <a class="btn btn-primary btn-sm" href="{{url('change-role/'.$show_role->id)}}" role="button">Thay đổi</a>
                                        @endif
                                    </td>
                                </tr>
                                @empty
                                    <tr>
                                        <td colspan="4">
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
        </div>
        <!-- /.container-fluid -->
    </section>
@endsection

@extends('layout.layout_admin')
@section('title', 'Thêm quản trị hoặc nhân viên')


@section('breadcrumb')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6"></div>
                <div class="col-sm-6 text-right">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                        <li class="breadcrumb-item"><a href="{{ url('page-admin') }}">Quản trị hoặc nhân viên</a></li>
                        <li class="breadcrumb-item active">Thêm quản trị hoăc nhân viên</li>
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
                            THÊM QUẢN TRỊ HOẶC NHÂN VIÊN
                        </h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body p-2">
                        <form action="{{url('post-admin')}}" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>
                        {{--Mã token bảo vệ dữ liệu chống hack lấy dữ liệu gửi đi--}}
                            @csrf

                            <div class="form-group">
                                <label for="">Họ và tên</label>
                                <input type="text" name="inputAdminName" class="form-control"
                                       placeholder="Nhập họ và tên" required>
                                <div class="invalid-feedback">Chưa nhập họ và tên</div>
                            </div>

                            <div class="form-group">
                                <label for="">Hình ảnh</label><br>
                                <input type="file" accept="image/*" onchange="loadFile(event)" name="inputFileImage" required>
                                <img id="output" style="max-width:100%;height:80px;border-radius:5px;"/>
                            </div>

                            <div class="form-group">
                                <label for="">Tên tài khoản</label>
                                <input type="text" name="inputAdminAccountName" class="form-control"
                                       placeholder="Nhập tài khoản của bạn" required>
                                <div class="invalid-feedback">Chưa nhập tên tài khoản</div>
                                <small class="text-danger">{{ $errors->first('inputAdminAccountName') }}</small>
                            </div>

                            <div class="form-group">
                                <label for="">Điện thoại</label>
                                <input type="number" name="inputAdminPhone" class="form-control"
                                       placeholder="Nhập số điện thoại" required>
                            </div>

                            <div class="form-group">
                                <label for="">Ngày sinh</label>
                                <input type="date" name="inputAdminBirthday" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="">Mật khẩu</label>
                                <input type="password" name="inputPassword" class="form-control"
                                       placeholder="Nhập mật khẩu" required>
                            </div>

                            <div class="form-group">
                                <label for="">Giới tính</label><br>
                                <div class="form-check-inline">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input" name="inputSex" value="Nam">Nam
                                    </label>
                                </div>
                                <div class="form-check-inline">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input" name="inputSex" value="Nữ">Nữ
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="text" name="inputAdminEmail" class="form-control"
                                       placeholder="Nhập email của bạn" required>
                                <small class="text-danger">{{ $errors->first('inputAdminEmail') }}</small>
                            </div>

                            <div class="form-group">
                                <label for="">Địa chỉ</label>
                                <input type="text" name="inputAdminAddress" class="form-control"
                                       placeholder="Nhập địa chỉ của bạn" required>
                            </div>

                            <div class="form-group">
                                <label for="">Quyền truy cập</label>
                                <select name="inputRoleId" class="form-control" required>
                                    <option value="">- - Chọn - -</option>

                                    @php($get_roles = DB::table('role_accesses')->get())
                                    @foreach($get_roles as $value)
                                        <option value="{{ $value->id }}">
                                            {{ $value->role_name }}
                                        </option>
                                    @endforeach

                                </select>
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
        var loadFile = function(event) {
            var output = document.getElementById('output');
            output.src = URL.createObjectURL(event.target.files[0]);
            output.onload = function() {
                URL.revokeObjectURL(output.src) // free memory
            }
        };
    </script>


    <script>
        // Disable form submissions if there are invalid fields
        (function() {
            'use strict';
            window.addEventListener('load', function() {
                // Get the forms we want to add validation styles to
                var forms = document.getElementsByClassName('needs-validation');
                // Loop over them and prevent submission
                var validation = Array.prototype.filter.call(forms, function(form) {
                    form.addEventListener('submit', function(event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();
    </script>

@endsection

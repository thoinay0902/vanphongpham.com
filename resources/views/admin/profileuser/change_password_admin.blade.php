@extends('admin.profileuser.layout_pro_admin')

@section('profile_admin_col_9')

    <div class="tab-content">

                    <div class="tab-pane active" id="settings">
                        <form class="form-horizontal">
                            <div class="form-group row">
                                <label for="inputName" class="col-sm-4 col-form-label">Mật khẩu cũ</label>
                                <div class="col-sm-8">
                                    <input type="email" class="form-control" id="inputName" placeholder="Nhập mật khẩu cũ của bạn">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputEmail" class="col-sm-4 col-form-label">Mật khẩu mới</label>
                                <div class="col-sm-8">
                                    <input type="email" class="form-control" id="inputEmail" placeholder="Nhập mật khẩu mới">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputName2" class="col-sm-4 col-form-label">Xác nhận lại mật khẩu</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="inputName2" placeholder="Nhập lại mật khẩu mới của bạn">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-10 col-sm-2" align="right">
                                    <button type="submit" class="btn btn-info">Đổi</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- /.tab-pane -->
                </div>

@endsection

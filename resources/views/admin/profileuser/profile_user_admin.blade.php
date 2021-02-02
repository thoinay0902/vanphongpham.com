@extends('admin.profileuser.layout_pro_admin')

@section('profile_admin_col_9')
    <div class="tab-content">
        <div class="tab-pane active" id="settings">
            <form class="form-horizontal">
                <div class="form-group row">
                    <label for="inputName" class="col-sm-2 col-form-label">Họ tên</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="inputName" placeholder="Họ tên admin">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="inputEmail" placeholder="Email admin">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputName2" class="col-sm-2 col-form-label">Sđt</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputName2" placeholder="Số điện thoại admin">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputExperience" class="col-sm-2 col-form-label">Điạ chỉ</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" id="inputExperience" placeholder="Địa chỉ admin"></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="offset-sm-2 col-sm-10">
                        <button type="submit" class="btn btn-danger">Cập nhật</button>
                    </div>
                </div>
            </form>
        </div>
        <!-- /.tab-pane -->
    </div>
@endsection

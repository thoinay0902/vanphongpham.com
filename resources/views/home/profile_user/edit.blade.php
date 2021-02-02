@extends('home.profile_user.layout_profile_user')
@section('profile_col_9')

    <div class="col-xs-12 col-sm-9">
        <div class="profile-user-info">
            <div class="profile-info-row">
                <div class="profile-info-name"> Họ và tên </div>
                <div class="profile-info-value">
                    <input type="text" name="" class="form-control" value="Nguyễn Văn A">
                </div>
            </div>

            <div class="profile-info-row">
                <div class="profile-info-name"> Giới tính </div>

                <div class="profile-info-value">
                    <label class="radio-inline"><input type="radio" name="optradio">Nam</label>
                    <label class="radio-inline"><input type="radio" name="optradio">Nữ</label>
                </div>
            </div>

            <div class="profile-info-row">
                <div class="profile-info-name"> Địa chỉ </div>

                <div class="profile-info-value">
                    <input type="text" name="" class="form-control" value="Kiên Lương, Kiên Giang">
                </div>
            </div>

            <div class="profile-info-row">
                <div class="profile-info-name"> Tuổi </div>

                <div class="profile-info-value">
                    <input type="number" name="" class="form-control" value="23">
                </div>
            </div>

            <div class="profile-info-row">
                <div class="profile-info-name"> Tham gia </div>

                <div class="profile-info-value">
                    <input type="date" name="" class="form-control" value="8/2/2010">
                </div>
            </div>

            <div class="profile-info-row">
                <div class="profile-info-name"> Truy cập </div>

                <div class="profile-info-value">
                    <span>3 hours ago</span>
                </div>
            </div>
        </div>

        <div class="hr hr-8 dotted"></div>

        <div class="profile-user-info">
            <div class="profile-info-row">
                <div class="profile-info-name"> Website </div>

                <div class="profile-info-value">
                    <a href="#" target="_blank">www.alexdoe.com</a>
                </div>
            </div>

            <div class="profile-info-row">
                <div class="profile-info-name">
                    <i class="middle ace-icon fa fa-facebook-square bigger-150 blue"></i>
                </div>

                <div class="profile-info-value">
                    <a href="#">Find me on Facebook</a>
                </div>
            </div>

            <div class="profile-info-row">
                <div class="profile-info-name">
                    <i class="middle ace-icon fa fa-twitter-square bigger-150 light-blue"></i>
                </div>

                <div class="profile-info-value">
                    <a href="#">Follow me on Twitter</a>
                </div>
            </div>
        </div>
        <div class="form-group row">
            <div class="offset-sm-2 col-sm-10 text-right">
                <button type="submit" class="btn btn-primary">Cập nhật</button>
            </div>
        </div>
    </div>

@endsection

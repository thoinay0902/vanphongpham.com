<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    //ham hiển thị trang đăng nhập
    public function page_login()
    {
        if (!Auth::check()){
            return view('home.page_login');
        }else{
            return redirect('home-admin');
        }
    }

    //Dang xuat
    public function logout()
    {
        Auth::logout();
        return redirect('page-login');
    }

    //Xu ly đăng nhập
    public function post_login(Request $request)
    {
        $username = $request->input('inputUsername');
        $password = $request->input('inputPassword');

        if (Auth::attempt(['username' => $username, 'password' => $password, 'role_id' => 1])) {
            return redirect('home-admin');
        }elseif (Auth::attempt(['username' => $username, 'password' => $password, 'role_id' => 2])){
            return redirect('home-admin');
        }elseif (Auth::attempt(['username' => $username, 'password' => $password, 'role_id' => 3])){
            return redirect('/');
        }else{
            $massage = $request->session()->get('massage');
            return redirect()->back()->with('massage','');
        }
    }


    //ham hiển thị trang đăng ký
    public function page_register()
    {
        return view('home.page_register');
    }

    //ham hien thi trang chu
    public function index()
    {

        return view('home.index');
    }

    //Hàm hiển thị trang sản phẩm
    public function list_product()
    {

        return view('home.list_product');
    }

    //Hàm hiện thị sản phẩm chi tiết
    public function product_detail()
    {

        return view('home.product_detail');
    }

    //Hàm hiện thị trang thanh toán
    public function check_out()
    {

        return view('home.check_out');
    }

    //Hàm hiện thị trang giỏ hàng
    public function shopping_card()
    {

        return view('home.shopping_card');
    }

    //Hàm hiện thị trang layout cá nhân
    public function layout_profile_user()
    {

        return view('home.profile_user.layout_profile_user');
    }

    //Hàm hiện thị trang hồ sơ cá nhân
    public function profile_user()
    {

        return view('home.profile_user.profile_user');
    }

    //Hàm hiện thị trang chờ thanh toán
    public function wait_payment()
    {

        return view('home.profile_user.wait_payment');
    }




    //Hàm hiện thị trang đang giao hàng
    public function shipping()
    {

        return view('home.profile_user.shipping');
    }

    //Hàm hiện thị trang đã hủy
    public function cancle()
    {

        return view('home.profile_user.cancle');
    }


    //Hàm hiện thị trang thay đổi mật khẩu
    public function change_password()
    {
        return view('home.profile_user.change_password');
    }

    //Hàm hiện thị trang liên hệ
    public function contact()
    {
        return view('home.contact');
    }

    //Hàm hiện thị chỉnh sửa thông tin khách hàng
    public function edit()
    {
        return view('home.profile_user.edit');
    }

}


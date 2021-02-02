<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\CheckLogin;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/*TRANG CHỦ*/
//Trang đăng nhập
Route::get('page-login', 'HomeController@page_login');

//đăng xuat
Route::get('logout', 'HomeController@logout');

//Xử lý đăng nhập
Route::post('post-login', 'HomeController@post_login');



//Trang đăng ký
Route::get('page-register', 'HomeController@page_register');
//Trang chu
Route::get('/', 'HomeController@index');
//Trang sản phẩm
Route::get('list-product', 'HomeController@list_product');
//Trang sản phẩm chi tiết
Route::get('product-detail', 'HomeController@product_detail');
//Trang thanh toán
Route::get('check-out', 'HomeController@check_out');
//Trang giỏ hàng
Route::get('shopping-card', 'HomeController@shopping_card');
//trang layout cá nhân
Route::get('layout-profile-user', 'HomeController@layout_profile_user');
//trang hồ sơ cá nhân
Route::get('profile-user', 'HomeController@profile_user');
//trang chờ thanh toán
Route::get('wait-payment', 'HomeController@wait_payment');
//trang chờ đang giao hàng
Route::get('shipping', 'HomeController@shipping');
//trang đã hủy
Route::get('cancle', 'HomeController@cancle');
//trang đổi mật khẩu
Route::get('change-password', 'HomeController@change_password');
//trang chỉnh sửa lại thông tin
Route::get('edit', 'HomeController@edit');
//trang đổi mật khẩu
Route::get('contact', 'HomeController@contact');
/*=======================================================================*/



Route::middleware([CheckLogin::class])->group(function () {
    /*=======================================================================*/
    //Trang bố cục admin
    Route::get('home-admin', 'AdminController@home_admin');

    //Trang quyền truy cập
    Route::get('page-role-access', 'AdminController@page_role_access');

    //Thêm quyền truy cập CSDL
    Route::post('post-role-access', 'AdminController@post_role_access');

    //Trang thay đổi quyền truy cập
    Route::get('change-role/{id_user}', 'AdminController@change_role');

    //Trang thay đổi quyền truy cập
    Route::put('update-role-user/{id_user}', 'AdminController@update_role_user');

    //Trang quan tri
    Route::get('page-admin', 'AdminController@page_admin');

    //Trang thêm mới quản trị
    Route::get('add-admin', 'AdminController@add_admin');

    //Trang thêm mới quản trị CSDL
    Route::post('post-admin', 'AdminController@post_admin');

    //Trang nhân viên
    Route::get('page-staff', 'AdminController@page_staff');

    //Xoa nhân viên
    Route::get('delete-staff/{id_staff}', 'AdminController@delete_staff');

    //Trang khách hàng
    Route::get('page-customer', 'AdminController@page_customer');

    //Trang loại sản phẩm
    Route::get('page-category', 'AdminController@page_category');

    //Trang loại sản phẩm
    Route::get('delete-catetory/{id_catetory}', 'AdminController@delete_catetory');

    //Trang thêm mới loại sản phẩm
    Route::post('post-category', 'AdminController@post_category');

    //Trang danh sách sản phẩm admin
    Route::get('list-product-admin', 'AdminController@list_product_admin');

    //Trang thêm mới sản phẩm
    Route::get('add-product', 'AdminController@add_product');

    //Trang thêm mới sản phẩm CSDL
    Route::post('post-product', 'AdminController@post_product');

    //Trang chỉnh sửa sản phẩm
    Route::get('edit-product', 'AdminController@edit_product');

    //Trang Xem sản phẩm
    Route::get('see-product', 'AdminController@see_product');

    //Trang Nhà cung cấp
    Route::get('page-supplier', 'AdminController@page_supplier');

    //Trang chỉnh sửa nhà cung cấp
    Route::get('edit-supplier', 'AdminController@edit_supplier');

    //Trang xem nhà cung cấp
    Route::get('see-supplier', 'AdminController@see_supplier');

    //Trang thêm nhà cung cấp
    Route::get('add-supplier', 'AdminController@add_supplier');

    //Trang hóa đơn
    Route::get('page-order', 'AdminController@page_order');

    //Trang hóa đơn chi tiết
    Route::get('order-detail', 'AdminController@order_detail');

    //Trang xuất hóa đơn
    Route::get('export-order', 'AdminController@export_order');

    //Trang thông tin admin
    Route::get('profile-user-admin', 'AdminController@profile_user_admin');

    //Trang layout khách hàng
    Route::get('layout-profile-user', 'AdminController@layout_profile_user');

    //Trang thay doi mat khau admin
    Route::get('change-password-admin', 'AdminController@change_password_admin');

    //Trang thay doi mat khau admin
    Route::get('change-password-admin', 'AdminController@change_password_admin');

    //Trang bang dieu khien
    Route::get('index-admin', 'AdminController@index_admin');

    //Trang thay doi mat khau khach hang
    Route::get('change-mk', 'AdminController@change_mk');
});




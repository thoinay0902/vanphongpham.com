<?php

namespace App\Http\Controllers;

use App\Catetory;
use App\Role_access;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    //Trang chủ admin
    public function home_admin()
    {
        if (!Auth::check()){
            return redirect('page-login');
        }else{
            return view('admin.index_admin');
        }
    }


    //Trang quyền truy cập
    public function page_role_access()
    {
        $show_roles = User::latest()->paginate(5);
        return view('admin.page_role_access',['show_roles'=>$show_roles]);
    }

    //Thêm quyền truy cập CSDL
    public function post_role_access(Request $request)
    {
        $this->validate($request,[
            'inputRoleName'=>'unique:role_accesses,role_name'
        ],[
            'inputRoleName.unique'=>'Tên quyền đã tồn tại'
        ]);

        $add_role = new Role_access();
        $add_role->role_name = $request->input('inputRoleName');
        $add_role->role_discribe = $request->input('inputRoleDescription');
        $add_role->save();

        return redirect()->back()->with('add_role','Đã thêm quyền truy cập');
    }


    //Cập nhật quyền truy cập CSDL
    public function update_role_user(Request $request, $id_user)
    {
        $update_role_user = User::find($id_user);
        $update_role_user->role_id = $request->input('inputRoleId');
        $update_role_user->save();

        return redirect('page-role-access')->with('message','Đã Thay đổi quyền truy cập');
    }

    //Trang thay đổi quyền truy cập
    public function change_role($id_user)
    {
        $roles = User::find($id_user);
        return view('admin.change_role',['roles'=>$roles]);
    }

    //Trang quản trị
    public function page_admin()
    {
        $show_admins = User::where('role_id', 1)->latest()->paginate(5);
        return view('admin.page_admin',['show_admins'=>$show_admins]);
    }

    //Trang thêm mới quản trị
    public function add_admin()
    {
        return view('admin.add_admin');
    }

    //Trang thêm mới quản trị CSDL
    public function post_admin(Request $request)
    {
        $this->validate($request,[
            'inputAdminAccountName'=>'unique:users,username',
            'inputAdminEmail'=>'unique:users,email'
        ],[
            'inputAdminAccountName.unique'=>'Tên tài khoản đã tồn tại',
            'inputAdminEmail.unique'=>'Tên email đã tồn tại'
        ]);

        $add_admin = new User();
        $add_admin->role_id = $request->input('inputRoleId');
        $add_admin->fullname = $request->input('inputAdminName');
        $add_admin->username = $request->input('inputAdminAccountName');
        $add_admin->password = bcrypt($request->input('inputPassword'));
        $add_admin->adress = $request->input('inputAdminAddress');
        $add_admin->phone = $request->input('inputAdminPhone');
        $add_admin->sex = $request->input('inputSex');
        $add_admin->email = $request->input('inputAdminEmail');
        $add_admin->birthday = $request->input('inputAdminBirthday');

        if ($request->hasFile('inputFileImage')){
            $image = $request->file('inputFileImage');
            $image_name = $image->getClientOriginalName();
            $image->move(public_path('upload_images'), $image_name);
            $add_admin->avatar = $image_name;
        }

        $add_admin->save();

        $redirect = DB::table('users')->latest()->first();

        if($redirect->role_id == 1){
            return redirect('page-admin')->with('message','Đã thêm người dùng quản trị');
        }else{
            return redirect('page-staff')->with('message','Đã thêm người dùng nhân viên');
        }

    }






    //Trang nhân viên
    public function page_staff()
    {
        $show_staffs = User::where('role_id', 2)->latest()->paginate(5);
        return view('admin.page_staff',['show_staffs'=>$show_staffs]);
    }

    //Trang xoa nhân viên
    public function delete_staff($id_staff)
    {
        //cach 1
        User::destroy($id_staff);
        //cach 2
        //User::where('id',',',$id_staff)->delete();
        return redirect()->back()->with('message','Đã xóa nhân viên');
    }

    //Trang lọai sản phẩm
    public function page_category()
    {
        $show_catetorys = Catetory::latest()->paginate(5);
        return view('admin.page_category',['show_catetorys'=>$show_catetorys]);
    }

    //Trang xoa loai sản phẩm
    public function delete_catetory($id_catetory)
    {
        //cach 1
        Catetory::destroy($id_catetory);
        //cach 2
        //User::where('id',',',$id_staff)->delete();
        return redirect()->back()->with('message','Đã xóa loại sản phẩm');
    }

    //Trang thêm mới loại sản phẩm
    public function post_category(Request $request)
    {
        $this->validate($request,[
            'inputCategoryName'=>'unique:catetories,catetory_name'
        ],[
            'inputCategoryName.unique'=>'Tên loại sản phẩm đã tồn tại'
        ]);

        $add_Catetory = new Catetory();
        $add_Catetory->catetory_name = $request->input('inputCategoryName');
        $add_Catetory->catetory_description = $request->input('inputCategoryDescription');
        $add_Catetory->save();

        return redirect()->back()->with('message','Đã thêm loại sản phẩm');
    }

    //Trang khách hàng
    public function page_customer()
    {
        return view('admin.page_customer');
    }

    //Trang danh sách sản phẩm
    public function list_product_admin()
    {
        return view('admin.list_product_admin');
    }

    //Trang thêm mới sản phẩm
    public function add_product()
    {
        return view('admin.add_product');
    }

    //Trang thêm mới sản phẩm CSDL
    public function post_product(Request $request)
    {
        $this->validate($request,[
            'inputAdminAccountName'=>'unique:users,username',
            'inputAdminEmail'=>'unique:users,email'
        ],[
            'inputAdminAccountName.unique'=>'Tên tài khoản đã tồn tại',
            'inputAdminEmail.unique'=>'Tên email đã tồn tại'
        ]);

        $add_admin = new User();
        $add_admin->role_id = $request->input('inputRoleId');
        $add_admin->fullname = $request->input('inputAdminName');
        $add_admin->username = $request->input('inputAdminAccountName');
        $add_admin->password = bcrypt($request->input('inputPassword'));
        $add_admin->adress = $request->input('inputAdminAddress');
        $add_admin->phone = $request->input('inputAdminPhone');
        $add_admin->sex = $request->input('inputSex');
        $add_admin->email = $request->input('inputAdminEmail');
        $add_admin->birthday = $request->input('inputAdminBirthday');

        if ($request->hasFile('inputFileImage')){
            $image = $request->file('inputFileImage');
            $image_name = $image->getClientOriginalName();
            $image->move(public_path('upload_images'), $image_name);
            $add_admin->avatar = $image_name;
        }

        $add_admin->save();

        $redirect = DB::table('users')->latest()->first();

        if($redirect->role_id == 1){
            return redirect('page-admin')->with('message','Đã thêm người dùng quản trị');
        }else{
            return redirect('page-staff')->with('message','Đã thêm người dùng nhân viên');
        }

    }


    //Trang chỉnh sửa sản phẩm
    public function edit_product()
    {
        return view('admin.edit_product');
    }

    //Trang xem sản phẩm
    public function see_product()
    {
        return view('admin.see_product');
    }

    //Trang nhà cung cấp
    public function page_supplier()
    {
        return view('admin.page_supplier');
    }

    //Trang chỉnh sửa nhà cung cấp
    public function edit_supplier()
    {
        return view('admin.edit_supplier');
    }

    //Trang xem nhà cung cấp
    public function see_supplier()
    {
        return view('admin.see_supplier');
    }

    //Trang thêm nhà cung cấp
    public function add_supplier()
    {
        return view('admin.add_supplier');
    }

    //Trang thêm nhà cung cấp
    public function page_order()
    {
        return view('admin.order.page_order');
    }

    //Trang thêm nhà cung cấp
    public function order_detail()
    {
        return view('admin.order.order_detail');
    }

    //Trang xuất hóa đơn
    public function export_order()
    {
        return view('admin.order.export_order');
    }

    //Trang layout khách hàng
    public function layout_profile_user()
    {
        return view('home.profile_user.layout_profile_user');
    }

    //Trang thông tin admin
    public function profile_user_admin()
    {
        return view('admin.profileuser.profile_user_admin');
    }

    //Trang thay doi mat khau admin
    public function change_password_admin()
    {
        return view('admin.profileuser.change_password_admin');
    }

    //Trang bang dieu khien
    public function index_admin()
    {
        return view('admin.index_admin');
    }

    //Trang thay doi mat khau cua khach hang
    public function change_mk()
    {
        return view('home.profile_user.change_mk');
    }






}

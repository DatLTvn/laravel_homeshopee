<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
 
    public function index()
    {
       
        return view('admin_login');
    }

    public function show_dashboard()
    {
        return view('admin.dashboard');
    }

    public function admin_layout()
    {
        return view('admin_layout');
    }

    // public function login(Request $request)
    // {
    //     $rules = [
    //         'admin_email' =>  'required|email',
    //         'admin_password' => 'required|min:8'
    //     ];

    //     $messages = [
    //         'admin_email.required' => 'Email không được bỏ trống',
    //         'admin_email.email' => 'Email không đúng định dạng',
    //         'admin_password.required' => 'Mật khẩu không được bỏ trống',
    //         'admin_password.min' => 'Phải chứa 8 kí tự',
    //     ];

    //     $validator = Validator::make($request->all(), $rules, $messages); //if invalid validate will go back login pages
    //     if ($validator->fails()) {
    //         return redirect()->back()->withErrors($validator)->withInput();
    //     }

    //     $admin_email = $request->admin_email;
    //     $admin_password = $request->admin_password;

    //     // check email and password in DB
    //     $result = DB::table('tbl_admin')->where('admin_email', $admin_email)->where('admin_password', $admin_password)->first();

    //     if ($result) {
    //         session()->put('admin', $result->admin_id);
    //         return redirect()->route('dashboard');
    //     } else {
    //         return redirect()->back()->withErrors(["msg" => "Tài khoản không tồn tại!! Vui lòng nhập lại"]); //tai khoan khong ton tai
    //     }
    // }
}

<?php

namespace App\Http\Controllers;

use App\Models\tbl_all_users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use app\user;
use Illuminate\Support\Collection\render;
use Illuminate\Support\Facades\Hash;
use Session;

class UsersController extends Controller
{

    public function Add_users()
    {
        return view('users.add_users');
    }

    //update
    // cho thu muc du lieu ben all users phan lam 3 dong
    //
    // tra ve view > admin > layout ket qua
    // 
    // tao ten la manager_users để trỏ đến view
    public function all_users()
    {
        $all_users = DB::table("tbl_all_users")->paginate(3);
        $manager_users = view('users.all_users')->with('all_users', $all_users);
        return view('admin_layout')->with('users.all_users', $manager_users);
    }

    // tim kiem  nguoi dùng 
    // 
    // noi giup tim kiem nguoi dung bang chu cai co lien quan o trong muc name email địa chỉ
    //
    //so sanh ten nguoi dung khac null > thuc hien rs so sanh tu DB 
    public function show_users(Request $request)
    {
        $user_name = $request->user_name; // get value form {query string} in request.
        $user_email = $request->user_email; // get value form {query string} in request.
        $user_group = $request->user_group; // get value form {query string} in request.
        $user_status = $request->user_status; // get value form {query string} in request.
        $result = DB::table('tbl_all_users')->orderBy('users_id', 'desc'); //tao  query

        if ($user_name != null) {
            $result->where('users_name', 'like', '%' . $user_name . '%');
        }
        if ($user_email != null) {
            $result->orWhere('users_gmail', 'like', '%' . $user_email . '%');
        }
        if ($user_group != null) {
            $result->orWhere('users_group', 'like', '%' . $user_group . '%');
        }
        if ($user_status != null) {
            $result->orWhere('users_status', 'like', '%' . $user_status . '%');
        }
        $result = $result->paginate(3);

        $manege_customer = view('users.all_users')->with([
            'all' => $result,
            'user_name' => $user_name,
            'user_email' => $user_email,
            'user_group' => $user_group,
            'user_status' => $user_name
        ]);
        return view('admin_layout')->with([
            'users.all_users' => $manege_customer
        ]);
    }

    //them users co dieu kien
    //
    //dat bien rules de mặc định điều kiện vào name o ben all_custom dat bien message de gan nhung thong bao loi
    //
    //dung validator de goi 2 bien o tren
    //
    // sau do kiem tra xem validator co bi loi, neu co thi o lai trang nhap lai, nguoc lai tien hanh them du lieu tu DB va hien thi
    public function save_users(Request $request)
    {
        $rules = [
            'users_name' => 'required',
            'users_gmail' =>  'required||unique:tbl_all_users|email', //check mail co ton tai chua
            'users_password' => 'required|min:5', //khong duoc bo trong, it nhat chua 5 ki tu
            'users_password' =>
            [
                'required',          //khong duoc bo trong  
                'string',            // kieu du lieu string
                'min:6',             // ít nhất 6 ký tự
                'regex:/[a-z]/',      // ít nhất 1 chữ thường
                'regex:/[A-Z]/',      // ít nhất 1 chữ HOA
                'regex:/[0-9]/',      // ít nhất 1 số
            ],
            'users_repassword' => 'required|same:users_password',
            'users_phone' => 'required|min:10',
            'users_address' => 'required',
        ];
        $messages = [
            'users_name.required' => 'Tên không được bỏ trống',
            'users_gmail.required' => 'Email không được bỏ trống',
            'users_gmail.email' => 'Email không đúng định dạng',
            'users_password.required' => 'Mật khẩu không được bỏ trống',
            'users_password.min' => 'Phải chứa 5 kí tự',
            'users_name.min' => 'Tên phải có ít nhất 5 ký tự',
            'users_gmail.unique' => 'Đã có Email này rồi, vui lòng chọn tên khác',
            'users_password.regex' => 'Password ít nhất 1 chữ thường, 1 chữ Hoa, 1 số',
            'users_repassword.same' => 'Mật khẩu nhập lại không giống nhau',
            'users_repassword.required' => 'Vui lòng nhập lại password',
            'users_phone.required' => 'Số điện thoại không được bỏ trống',
            'users_phone.min' => 'Số điện thoại ít nhất 10 số',
            'users_address.required' => 'Địa chỉ không được bỏ trống',
        ];
        $validator = Validator::make($request->all(), $rules, $messages); //if invalid validate will go back login pages
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        //kiem tra gmail
        $dkmail = "/([a-z0-9_]+|[a-z0-9_]+\.[a-z0-9_]+)@(([a-z0-9]|[a-z0-9]+\.[a-z0-9]+)+\.([a-z]{2,4}))/i";
        $mail = $request->users_gmail;
        if (preg_match($dkmail, $mail)) {
            // // check email  in DB
            if ($validator = !null) {
                $data = array();
                $data['users_name'] = $request->users_name; //ten cot, ten naem ben du lieu
                $data['users_gmail'] = $request->users_gmail;
                $data['users_password'] = $request->users_password;
                $data['users_phone'] = $request->users_phone;
                $data['users_address'] = $request->users_address;
                DB::table('tbl_all_users')->insert($data);
                session()->put('message', 'Them nguoi dung thanh cong');
                return Redirect::to('/login-users');
            }
        } else {
            // return redirect()->back()->withErrors(["msg" => "Tài khoản đã tồn tại!! Vui lòng thêm lại!!!!"]);
        }
    }

    public function index_login()
    {
        return view('users.login_users');
    }

    public function sign_in_users()
    {
        return view('users.sign_in_users');
    }

    //chinh sua nguoi dung
    //
    // khoi tao manager_user den view users> edit_users
    //
    //tra ve man hinh ket qua
    public function edit_users($users_id)
    {
        $edit_users = DB::table("tbl_all_users")->where('users_id', $users_id)->get();
        $manager_users = view('users.edit_users')->with('edit_users', $edit_users);
        return view('admin_layout')->with('users.edit_users', $manager_users);
    }

    //ham update users
    //
    //cap nhat users lay ten users tu DB tro qua name ben trang all_user
    //
    //tra ve du lieu den trang can hien
    public function update_users(Request $request, $users_id)
    {
        $data = array();
        $data['users_name'] = $request->users_name; //ten cot, ten nam ben du lieu
        $data['users_gmail'] = $request->users_gmail; //lay du lieu tu ben data qua 
        $data['users_group'] = $request->users_group;
        $data['users_desc'] = $request->users_desc;
        DB::table('tbl_all_users')->where('users_id', $users_id)->update($data);
        session()->put('message', 'Cap nhat nguoi dung thanh cong');
        return Redirect::to('/panel/all-users');
    }

    //xoa nguoi
    public function delete_users($users_id)
    { //xoa users
        DB::table('tbl_all_users')->where('users_id', $users_id)->delete();
        session()->put('message', 'Cap nhat nguoi dung thanh cong');
        return Redirect::to('/panel/all-users');
    }

    public function home(Request $request)
    {

        $users_email = $request->admin_email;
        $users_password = $request->admin_password;
        // check email and password in DB
        $result = DB::table('tbl_all_users')->where('users_gmail', $users_email)->first();
        if ($result) {
            if ($result->users_password == $users_password) {
                $request->session()->put('user', $result);
                return redirect()->route('home');
            } else {
                return redirect()->back();
            }
        } else {
            return redirect()->back()->with('errors', 'Email không ton tai');
        }
    }
    public function logout(Request $request)
    {
        $request->session()->forget('user');
        return redirect()->route('home');
    }
}

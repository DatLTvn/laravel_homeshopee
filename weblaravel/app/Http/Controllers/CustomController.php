<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
class CustomController extends Controller
{
    // hàm in ra dữ liệu từ database sang hiển thị khách hàng
    //
    // gọi dữ liệu từ DB bằng cách đặt tên biến $manager 
    public function all_custom(){
        $all_custom = DB::table("tbl_all_custom")->paginate(3);  
        $manager_custom = view('custom.all_custom')->with('all_custom',$all_custom); 
        return view('admin_layout')->with('custom.all_custom',$manager_custom);
    }

    public function add_custom()
    {
        return view('custom.add_custom');
    }

    // function them khach hang voi dieu kien validation
    //
    // dat bien rules de mặc định điều kiện vào name o ben all_custom dat bien message de gan nhung thong bao loi
    //
    // dung validator de goi 2 bien o tren
    //
    // sau do kiem tra xem validator co bi loi, neu co thi o lai trang nhap lai, nguoc lai tien hanh them du lieu tu DB va hien thi
    public function save_custom(Request $request){ 
        $rules = [  
        'custom_name' => 'required|min:5',
        'custom_email' =>  'required|unique:tbl_all_custom|email', //check mail co ton tai chua
        'custom_phone' => 'required|min:10|max:11|regex:/(0)[0-9]{9}/',
        'custom_address' => 'required',
        ];
        $messages = [
        'custom_name.required' =>'Tên không được bỏ trống',
        'custom_email.required' =>'Email không được bỏ trống',   
        'custom_email.email' =>'Email không đúng định dạng',
        'custom_phone.required' =>'Số phone không được bỏ trống',
        'custom_phone.regex' =>'Số phone phải đúng định dạng(có 10 số và số 0 đầu)',
        'custom_phone.min' =>'Số phone là 10 hoặc 11 số',
        'custom_phone.max' =>'Số phone là 10 hoặc 11 số',
        'custom_address.required' =>'Địa chỉ không được bỏ trống',
        'custom_name.min' => 'Tên phải có ít nhất 5 ký tự',
        'custom_email.unique' => 'Đã có Email này rồi, vui lòng chọn tên khác',
            ];
        $validator = Validator::make($request->all(),$rules, $messages);//if invalid validate will go back login pages
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator) -> withInput();
        }
        if ($validator=!null){
                 $data = array();
                 $data['custom_name'] =$request->custom_name; //ten cot, ten naem ben du lieu
                 $data['custom_email'] =$request->custom_email;
                 $data['custom_phone'] =$request->custom_phone;
                 $data['custom_address'] =$request->custom_address;
            // $data['category_status'] =$request->category_product_status; //or
            DB::table('tbl_all_custom') ->insert($data);
            session()->put('message','Them nguoi dung thanh cong');
            return Redirect::to('panel/all-custom');
         }
    }

     //tim kiem khach hang
     //
     // noi giup tim kiem khach hang bang chu cai co lien quan o trong muc name email địa chỉ
     public function show_custom(Request $request)
     {
         $custom_name = $request->custom_name; // get value form {query string} in request.
         $custom_email = $request->custom_email; // get value form {query string} in request.
         $custom_phone = $request->custom_phone; // get value form {query string} in request.
         $custom_address = $request->custom_address; // get value form {query string} in request.
         $result = DB::table('tbl_all_custom')->orderBy('custom_id', 'desc');//tao  query
 
         if ($custom_name != null) {
             $result->where('custom_name', 'like', '%' . $custom_name . '%');
         }
         if ($custom_email != null) {
             $result->orWhere('custom_email', 'like', '%' . $custom_email . '%');
         }
         if ($custom_phone != null) {
             $result->orWhere('custom_phone', 'like', '%' . $custom_phone . '%');
         }
         if ($custom_address != null) {
             $result->orWhere('custom_address', 'like', '%' . $custom_address . '%');
         }
         $result = $result->paginate(3);
         $manege_customer = view('custom.all_custom')->with([
             'all_custom' => $result,
             'custom_name' => $custom_name,
             'custom_email' => $custom_email,
             'custom_phone' => $custom_phone,
             'custom_address' => $custom_address
         ]);
         return view('admin_layout')->with([
             'custom.all_custom' => $manege_customer]);
     } 

      //update users
      //
      //noi ma co the thay doi du lieu khach hang
      //
      //goi bien data tu DB, trỏ đên id cua khach hang nao do nhờ vào id de biet đó là khách hàng nào
      //
      //thực hiện cập nhật nguoi dùng, dung ham sessiom den thong bao ra dong lenh, cap nhat nguoi dung thanh cong
      //
      //tra ket qua ve all_custom
    public function update_custom(Request $request, $custom_id){
        $data = array();
        $data['custom_name'] =$request->custom_name; //ten cot, ten nam ben du lieu
        $data['custom_email'] =$request->custom_email;
        $data['custom_phone'] =$request->custom_phone;
        $data['custom_address'] =$request->custom_address;
        DB::table('tbl_all_custom') -> where ('custom_id',$custom_id)->update($data);
        session()->put('message','Cap nhat nguoi dung thanh cong');
        return Redirect::to('panel/all-custom'); 
     }

    //edit    
    //chinh sua nguoi dung
    //
    // khoi tao manager_custom den view users> edit_custom
    //
    //tra ve man hinh ket qua
    public function edit_custom($custom_id){
        $edit_custom = DB::table("tbl_all_custom")->where('custom_id',$custom_id)->get();
        $manager_custom = view('custom.edit_custom')->with('edit_custom',$edit_custom);
        return view('admin_layout')->with('custom.edit_custom',$manager_custom);
    }

}

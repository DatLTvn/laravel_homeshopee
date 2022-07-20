<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;

class ContactController extends Controller
{
    public function save_contact(Request $request){
        $rules = [  
            'contact_name' => 'required|min:5',
            'contact_email' =>  'required|email', 
            'contact_company' => 'required',
            'contact_subj' => 'required',
            ];
            $messages = [
            'contact_name.required' =>'Tên không được bỏ trống',
            'contact_name.min' => 'Tên phải có ít nhất 5 ký tự',
            'contact_email.required' =>'Email không được bỏ trống',   
            'contact_email.email' =>'Email không đúng định dạng',
            'contact_company.required' =>'Số phone không được bỏ trống',
            'contact_subj.required' =>'Địa chỉ không được bỏ trống',
                ];
            $validator = Validator::make($request->all(),$rules, $messages);//if invalid validate will go back login pages
            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator) -> withInput();
            }
            if ($validator=!null){
                     $data = array();
                     $data['contact_name'] =$request->contact_name; //ten cot, ten naem ben du lieu
                     $data['contact_email'] =$request->contact_email;
                     $data['contact_company'] =$request->contact_company;
                     $data['contact_subj'] =$request->contact_subj;
                // $data['category_status'] =$request->category_product_status; //or
                DB::table('tbl_contact_user') ->insert($data);
                session()->put('message','Them nguoi dung thanh cong');
                return Redirect::to('/web-contact');
             }
    }
}

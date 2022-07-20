<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
session_start();
use Illuminate\Support\Str;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\tbl_category_product;

class CategoryProduct extends Controller
{
    public function add_category_product()
    {
        return view('admin.categories.add_category_product');
    }

    //ham hien thi tat ca san pham 
    //
    //phan du lieu tu database ra thanh 3 cot
    public function all_category_product()
    {
        $category = DB::table("tbl_all_category_product")->paginate(3);
        return view('admin.categories.all_category_product', compact('category'));
    }

    public function show_category(Request $request)
    {
        $category_name = $request->category_name; // get value form {query string} in request.
        $category_gia = $request->category_gia; // get value form {query string} in request.
        $category_chucnang = $request->category_chucnang; // get value form {query string} in request.
        $category_tinhtrang = $request->category_tinhtrang; // get value form {query string} in request.
        $result = DB::table('tbl_all_category_product')->orderBy('category_id', 'desc'); //tao  query

        if ($category_name != null) {
            $result->where('category_name', 'like', '%' . $category_name . '%');
        }
        if ($category_gia != null) {
            $result->orWhere('category_gia', 'like', '%' . $category_gia . '%');
        }
        if ($category_chucnang != null) {
            $result->orWhere('category_chucnang', 'like', '%' . $category_chucnang . '%');
        }
        if ($category_tinhtrang != null) {
            $result->orWhere('category_desc', 'like', '%' . $category_tinhtrang . '%');
        }
        $result = $result->paginate(3);

        $manege_customer = view('admin.all_category_product')->with([
            'all_category_product' => $result,
            'category_name' => $category_name,
            'category_gia' => $category_gia,
            'category_chucnang' => $category_chucnang,
            'category_desc' => $category_tinhtrang
        ]);
        return view('admin_layout')->with([
            'admin.all_category_product' => $manege_customer
        ]);
    }

  
    public function save_category_product(Request $request)
    {
        $rules = [
            'category_name' => 'required|min:5',
        ];
        $messages = [
            'category_name.required' => 'Tên không được bỏ trống, vui lòng nhập tên sản phẩm',
        ];
        $validator = Validator::make($request->all(), $rules, $messages); //if invalid validate will go back login pages
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        if ($validator = !null) {
            $data = array();
            $data['category_name'] = $request->category_name; //du lieu ben phpadmin //$request ten cua name ben add
            $data['category_chucnang'] = $request->category_chucnang;
            $data['category_slug'] = Str::slug($request->category_name);
            DB::table('tbl_all_category_product')->insert($data);
            session()->put('message', 'Them danh muc san pham thanh cong');
            return redirect()->route('admin.all_category');
        }
    }

    public function edit_category_product($category_id)
    {
        $edit_category_product = DB::table("tbl_all_category_product")->where('category_id', $category_id)->get();
        $manager_category_product = view('admin.edit_category_product')->with('edit_category_product', $edit_category_product);
        return view('admin_layout')->with('admin.edit_category_product', $manager_category_product);
    }

    public function update_category_product(Request $request, $category_id)
    {
        $data = array();
        $data['category_name'] = $request->category_product_name; //ten cot, ten naem ben du lieu
        $data['category_gia'] = $request->category_product_gia;
        $data['category_chucnang'] = $request->category_product_chucnang;
        $data['category_desc'] = $request->category_product_desc;
        DB::table('tbl_all_category_product')->where('category_id', $category_id)->update($data);
        session()->put('message', 'Cap nhat danh muc san pham thanh cong');
        return Redirect::to('all-category-product');
    }

    public function delete_category_product($category_id)
    { ////xoa san pham
        DB::table('tbl_all_category_product')->where('category_id', $category_id)->delete();
        session()->put('message', 'Xoa danh muc san pham thanh cong');
        return Redirect::to('all-category-product');
    }
}

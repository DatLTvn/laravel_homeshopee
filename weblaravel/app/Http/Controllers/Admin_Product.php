<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\tbl_category_product;
use Illuminate\Support\Str;

class Admin_Product extends Controller
{
    public function index()
    {
        $products = DB::table('products')->join('tbl_all_category_product','products.category_id', '=' 
        ,'tbl_all_category_product.category_id')->get(); //join 2 table return name
        return view('admin.product.index', compact('products'));
        //hien thi tat ca san pham cua cua hang
    }
    public function create()
    {
        $category = DB::table("tbl_all_category_product")->get();
        return view('admin.product.add_product', compact('category'));
        //hien thi trang them oi 1sp vao cua hang
    }
    public function store(Request $request)
    {
        $data = [];
        $data['product_name'] = $request->product_name;        
        $data['category_id'] = $request->category_id;        
        $data['product_qty'] = $request->product_qty;
        $data['product_price'] = $request->product_price;
        $data['product_desc'] = $request->product_desc;
        $data['product_slug'] = Str::slug($request->product_name);
        $data['product_file'] = $request->product_file;
        if ($request->file('product_file')) {
            $file = $request->file('product_file');
            $file_name = $file->getClientOriginalName(); //lay ten cua hinh
            // Upload file
            $file->move('public/upload', $file_name);
            $data['product_file'] = $file_name;
            //them moi 1sp vao cua hang
        }
        DB::table('products')->insert($data);
        return redirect()->route('admin.products'); 
    }
    public function edit($id)
    {
        //hien thi trang sua san pham
    }
    public function update($id)
    {
        //update sp
    }
    public function delete($id)
    {
    }
}

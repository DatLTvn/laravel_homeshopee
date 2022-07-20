<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\tbl_category_product;


class Categories extends Controller
{

    public function index($slug)
    {
        $cate = DB::table('tbl_all_category_product')->where('category_slug', $slug)->first()->category_id;
        $products = DB::table('products')->where('category_id', $cate)->get();
        $data = [
            'products' => $products,
        ];
        return view('categories.index', $data);
    }

    public function detail($id)
    {
        $cate_detail = DB::table("products")->where('id', $id)->first();
        $img_detail = DB::table('img_product')->where('product_id',$id)->get();
        return view('categories.detail', compact('cate_detail', 'img_detail'));

        
    }

    public function add_to_cart(Request $request){
        $name = $request->product_name;
        $qty = $request->product_qty;
        $price = $request->product_price;
    }

    public function list_info(){
        return view('categories.list_info');
    }

}

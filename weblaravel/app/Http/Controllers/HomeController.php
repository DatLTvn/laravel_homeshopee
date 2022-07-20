<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    //

    public function layout()
    {
        return view('layout');
    }
    public function sphone()
    {
        return view('smartphone.index');
    }

    public function about_sp()
    {
        return view('smartphone.about_sp');
    }

    public function contact_sp()
    {
        return view('smartphone.contact_sp');
    }

    public function index_sp()
    {
        return view('smartphone.index_sp');
    }

    public function delivery_sp()
    {
        return view('smartphone.delivery_sp');
    }

    public function new_sp()
    {
        return view('smartphone.new_sp');
    }

    //web
    public function web_about()
    {
        return view('web.about');
    }

    public function web_contact()
    {
        return view('web.contact');
    }

    public function web_delivery()
    {
        return view('web.delivery');
    }

    public function web_news()
    {
        return view('web.news');
    }

    public function index(Request $request)
    {
        $result = DB::table('products')->get();
        return view('web.index', compact('result'));
    }

    public function detail()
    {
        $ketqua = DB::table('products')->get();
        return view('categories.detail', compact('ketqua'));
    }

    //search_product
    public function search_product(Request $request)
    {
        $product_name = $request->product_name; // get value form {query string} in request.
        $result = DB::table('products')->orderBy('category_id', 'desc'); //tao  query
        if ($product_name != null) {
            $result->where('product_name', 'like', '%' . $product_name . '%');
        }
        $result = $result->get();
        return view('web.index', compact('result'));
    }
}

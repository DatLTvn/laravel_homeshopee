<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Cart;
use Carbon\Carbon;
use Illuminate\Contracts\Session\Session as SessionSession;
use Session;

class CartController extends Controller
{
    public function index(Request $request)
    {
        //lay users_id
        $id = $request->session()->get('user')->users_id;
        //lay danh sach gio hang ma co user_id
        $cart = DB::table('cart')->where('user_id', $id)
            ->join('products', 'products.id', '=', 'cart.product_id')
            ->select('cart.id', 'products.product_price', 'products.product_name', 'quantity', 'product_id', 'product_file')
            ->get();

        $total = DB::table('cart')->where('user_id', $id)
            ->join('products', 'products.id', '=', 'cart.product_id')
            ->select('product_price', 'quantity')->get();
        $totalCart = 0;
        foreach ($total as $price) {
            $totalCart += $price->quantity * $price->product_price;
        }
        return view('categories.list_info', compact('cart', 'totalCart'));
    }

    public function AddCart(Request $request)
    {
        $id = $request->session()->get('user')->users_id;
        if ($request->product_qty == NULL) {
            return redirect()->back()->with('error', 'Nhap so luong vao ');
        }
        $product = DB::table('products')->where('id', $request->product_id)->first();

        if ($product->product_qty < $request->product_qty) {
            return redirect()->back()->with('error', 'Khong du so luong de ban');
        }
        $productInCart = DB::table('cart')->where('user_id', $id)->where('product_id', $request->product_id)->first(); //kiem tra so luong san pham 

        if ($productInCart) {
            DB::table('cart')->where('product_id', $request->product_id)->update([
                'quantity' => $productInCart->quantity + $request->product_qty,
            ]);
        } else {
            $data = [
                'product_id' => $request->product_id,
                'quantity' => $request->product_qty,
                'user_id' => $request->session()->get('user')->users_id,
                'created_at' => Carbon::now('Asia/Ho_Chi_Minh')
            ];
            DB::table('cart')->insert($data);
        }
        return redirect()->route('cart');
    }

    public function deleteCart($id)
    {
        DB::table('cart')->where('id', $id)->delete();
        return redirect()->back();
    }

    public function check_out(Request $request)
    {
        //hien thi trang
        $id = $request->session()->get('user')->users_id;
        //lay danh sach gio hang ma co user_id
        $cart = DB::table('cart')->where('user_id', $id)
            ->join('products', 'products.id', '=', 'cart.product_id')
            ->select('cart.id', 'products.product_price', 'products.product_name', 'quantity', 'product_id', 'product_file')
            ->get();
        //Tinh tong tien
        $total = DB::table('cart')->where('user_id', $id)
            ->join('products', 'products.id', '=', 'cart.product_id')
            ->select('product_price', 'quantity')->get();
        $totalCart = 0;
        foreach ($total as $price) {
            $totalCart +=  $price->product_price * $price->quantity;
        }
        ///return $
        return view('categories.check_out', compact('cart', 'totalCart'));
    }

    public function checkout(Request $request)
    {
        $id = $request->session()->get('user')->users_id;
        $total = DB::table('cart')->where('user_id', $id)
            ->join('products', 'products.id', '=', 'cart.product_id')
            ->select('product_price', 'quantity')->get();
        $totalCart = 0;
        foreach ($total as $price) {
            $totalCart += $price->quantity * $price->product_price;
        }

        $data = [
            'users_id' => $id,
            'total_money' => $totalCart,
            'create_at' => Carbon::now('Asia/Ho_Chi_Minh')
        ];
        $order_id = DB::table('orders')->insertGetId($data); //them vao 1 bang ghi lay id vua them

        $cart = DB::table('cart')->where('user_id', $id)
            ->join('products', 'products.id', '=', 'cart.product_id')
            ->select('cart.id', 'products.product_price', 'products.product_name', 'quantity', 'product_id')
            ->get();

        foreach ($cart as $detail) {
            $data2 = [
                'order_id' => $order_id,
                'products_id' => $detail->product_id,
            ];
            DB::table('order_detail')->insert($data2);
        }
        DB::table('cart')->where('user_id', $id)->delete();
        return redirect()->route('home')->with('success', 'Chúc mừng mua hàng thành công!!');
    }
}

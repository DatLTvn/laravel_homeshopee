<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Categories;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Admin_Product;
use App\Http\Controllers\CartController;
use App\Http\Controllers\UsersController;

//backend
Route::group(['prefix' => 'panel'], function () {
Route::get('/', [AdminController::class, 'admin_layout'])->name('dashboard');// productRoute::get('/products', [Admin_Product::class, 'index'])->name('admin.products');Route::get('/add-product', [Admin_Product::class, 'create'])->name('admin.add_product');Route::post('/add-product', [Admin_Product::class, 'store'])//category{Route::get('/all-category', 'App\Http\Controllers\CategoryProduct@all_category_product')->name('admin.all_category'); //Route::get('/add-category', 'App\Http\Controllers\CategoryProduct@add_category_product')->name('admin.add_category');Route::get('/edit-category/{category_id}', 'App\Http\Controllers\CategoryProduct@edit_category_product')->name('admin.edit_category');Route::get('/delete-category/{category_id}', 'App\Http\Controllers\CategoryProduct@delete_category_product')->name('admin.delete_category');Route::post('/save-category', 'App\Http\Controllers\CategoryProduct@save_category_product')->name('admin.save_category');Route::post('/update-category/{category_id}', 'App\Http\Controllers\CategoryProduct@update_category_product')->name('admin.update_category');Route::get('/all-edit-category', 'App\Http\Controllers\CategoryProduct@show_category')->name('admin.all_edit_category'); //tim kiem san//useRoute::get('/add-users', 'App\Http\Controllers\UsersController@add_users')->name('users.add_users');Route::get('/all-users', 'App\Http\Controllers\UsersController@show_users')->name('users.all_users'); //tim kiem DTRoute::get('/all-edit-users', 'App\Http\Controllers\UsersController@all_users')->name('users.all_edit_users'); //them nguoi dungRoute::get('/delete-users/{users_id}', 'App\Http\Controllers\UsersController@delete_users')->name('users.delete_users'); //xoaRoute::post('/save-users', 'App\Http\Controllers\UsersController@save_users')->name('users.save_users'); //themRoute::post('/update-users/{users_id}', 'App\Http\Controllers\UsersController@update_users')->name('users.update_users'); //cap nhatRoute::get('/edit-users/{users_id}', 'App\Http\Controllers\UsersController@edit_users')->name('users.edit_users'); //suaRoute::post('/dash-add-users', 'App\Http\Controllers\UsersController@dashboard_users')->name('users.dash_add_users');Route::get('/pagination-users', 'App\Http\Controllers\UsersController@pagination')->name('users.pagination_users'); //phan trang//cusstomroute::get('/all-edit-custom', 'App\Http\Controllers\CustomController@all_custom')->name('custom.all_edit_custom'); //tât caRoute::post('/save-custom', 'App\Http\Controllers\CustomController@save_custom')->name('custom.save_custom'); //themRoute::get('/add-custom', 'App\Http\Controllers\CustomController@add_custom')->name('custom.add_custom');Route::get('/all-custom', 'App\Http\Controllers\CustomController@show_custom')->name('custom.all_custom'); //tim kiemRoute::post('/update-custom/{custom_id}', 'App\Http\Controllers\CustomController@update_custom')->name('custom.update_custom'); //cap nhatRoute::get('/edit-custom/{custom_id}', 'App\Http\Controllers\CustomController@edit_custom')->name('custom.edit_custom'); //su
});

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/login-users', [UsersController::class, 'index_login'])->name('login');
Route::post('/login-users', [UsersController::class, 'home']);
Route::get('/sign-in-users', [UsersController::class, 'sign_in_users']);
Route::get('/logout', [UsersController::class, 'logout'])->name('logout');
//front end 
//detail
//list-info
Route::get('/list-info', [CartController::class, 'index'])->name('cart')->middleware('checkLogin');

//CART
Route::post('/add-cart', [CartController::class, 'AddCart'])->name('AddCart')->middleware('checkLogin');
Route::get('/delete-cart/{id}',[CartController::class, 'deleteCart'])->name('deleteCart')->middleware('checkLogin');
Route::get('/check-out',[CartController::class, 'check_out'])->name('checkout')->middleware('checkLogin');
Route::post('/check-out',[CartController::class, 'checkout'])->middleware('checkLogin');

Route::get('detail/{id}', [Categories::class, 'detail']);


// //save-mobile
Route::post('/save-mobile', [Categories::class, 'save_mobile']);
//web
Route::get('danh-muc/{slug}', [Categories::class, 'index'])->name('category');
Route::get('/web-index', [HomeController::class, 'web_index']);
Route::get('/web-about', [HomeController::class, 'web_about']);
Route::get('/web-contact', [HomeController::class, 'web_contact']);
Route::get('/web-delivery', [HomeController::class, 'web_delivery']);
Route::get('/web-news', [HomeController::class, 'web_news']);
Route::get('/search-product', [HomeController::class, 'search_product']);
//contact user
Route::post('/save-contact', [ContactController::class, 'save_contact']);

Route::post('/panel/save-users', [UsersController::class, 'save_users']);




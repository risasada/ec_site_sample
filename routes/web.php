<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::get('/manage',function () {
    return view('manage');
})->name('manage');

#商品観覧
Route::get('/item/{gender}/{categories?}/{designers?}', [App\Http\Controllers\ItemController::class, 'show_men'])->name('item_list');

Route::get('/item_menu/{id}', [App\Http\Controllers\ItemController::class, 'item_show'])->name('show_item');


Route::post('/search', [App\Http\Controllers\ItemController::class, 'item_search'])->name('item_search');


#For cart
Route::get('/cart', [App\Http\Controllers\CartController::class, 'show_cart'])->name('cart');

Route::post('/cart/insert_wish', [App\Http\Controllers\HomeController::class, 'insert_wish']);

Route::post('/cart/insert_cart', [App\Http\Controllers\ItemController::class, 'insert_cart']);

Route::post('/cart/to_wish', [App\Http\Controllers\ItemController::class, 'to_wish']);

Route::post('/cart/delete', [App\Http\Controllers\CartController::class, 'delete_cart_item']);

Route::get('/cart/checkout', [App\Http\Controllers\CartController::class, 'checkout_view']);

Route::post('/cart/checkout', [App\Http\Controllers\PaymentController::class, 'checkout_function']);

#for wish_list

Route::get('/wish', [App\Http\Controllers\WishController::class, 'show_wish'])->name('wish');

Route::post('/wish/insert_wish', [App\Http\Controllers\ItemController::class, 'insert_wish']);

Route::post('/wish/insert_cart', [App\Http\Controllers\ItemController::class, 'insert_cart']);

Route::post('/wish/to_cart', [App\Http\Controllers\ItemController::class, 'to_cart']);

Route::post('/wish/delete', [App\Http\Controllers\WishController::class, 'delete_wish_item']);

#決済
Route::get('/charge', [App\Http\Controllers\PaymentController::class, 'index'])->name('stripe.charge');
Route::post('/charge', [App\Http\Controllers\PaymentController::class, 'charge'])->name('stripe.charge');

#MyPage用

Route::get('/account', [App\Http\Controllers\MyPageController::class, 'index'])->name('mypage');

Route::post('/account', [App\Http\Controllers\MyPageController::class, 'account_update']);

Route::get('/account/address',function () {
    return view('mypage_address');
});

Route::get('/account/order', [App\Http\Controllers\MyPageController::class, 'order_view']);

Route::post('/account/address', [App\Http\Controllers\MyPageController::class, 'address_update']);


Route::get('/account/mailconfig',function () {
    return view('mypage_mailconfig');
});

Route::post('/account/mailconfig', [App\Http\Controllers\MyPageController::class, 'mail_update']);




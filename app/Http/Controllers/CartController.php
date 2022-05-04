<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Item;
use App\Models\Cart;
use App\Models\Oder;

class CartController extends Controller
{
    //
    
    public function __construct(){
    $this->middleware('auth');
  }
    
    
    public function show_cart(){
        $counter = 0;
        $user_id = Auth::id();
        $cart_info = Cart::where('user_id', $user_id)->latest('created_at')->paginate(10);;
        $cart_item = [];
        foreach($cart_info as $info){
            $cart_item []= Item::where('id', $info['item_id'])->get();;
            $cart_item[$counter][0]['size'] = $info['size'];
            $counter++;
        }

        return view('cart', compact('cart_item', 'cart_info'));
    }

    public function delete_cart_item(request $request){
        $user_id = Auth::id();
        $data = $request->all();
        Cart::where('item_id', $data["item_id"])->where("user_id", $user_id)->where("id", $data['cart_id'])->delete();
        return redirect()->route('cart');
    }
    
    
    public function checkout_view(){
        
        $counter = 0;
        $all = 0;
        $user_id = Auth::id();
        $cart_info = Cart::where('user_id', $user_id)->paginate(10);;
        $cart_item = [];
        foreach($cart_info as $info){
            $cart_item []= Item::where('id', $info['item_id'])->get();;
            $cart_item[$counter][0]['size'] = $info['size'];
            $counter++;
        }
        foreach($cart_item as $item){
            $all = $all +  $item[0]['price'];
        }
        
        
        return view('checkout', compact('all'));
    }
    
}

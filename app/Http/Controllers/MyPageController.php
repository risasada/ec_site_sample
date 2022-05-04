<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\User;
use App\Models\Cart;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;


class MyPageController extends Controller
{
    //
    
    public function __construct(){
    $this->middleware('auth');
   }
    
    
    public function index()
    {
        return view('mypage_accountinfo');
    }
    
    public function order_view()
    {   
        $img_url = [];
        $user_id = Auth::id();
        
        $order_list = Order::latest('updated_at')->where('user_id', $user_id)->get();
        return view('mypage_orderhistory', compact('order_list'));    
    }
    
    public function mail_update(Request $request){
        $data = $request->all();
        $user_id = Auth::id();
        if(isset($data['read'])){
             User::where('id', $user_id)->update([
                'mail_status' => 1,
                'country' => $data['country'],
                
            ]);
        }else{
            User::where('id', $user_id)->update([
                'mail_status' => 0,
                'country' => $data['country'],
                
            ]);
        }
        
        return view('mypage_mailconfig');
        
    }
    
    public function account_update(Request $request){
        $data = $request->all();
        $user_id = Auth::id();
       
             User::where('id', $user_id)->update([
                'first_name' => $data['first_name'],
                'last_name' => $data['last_name'],
                
            ]);
        
        
        return view('mypage_accountinfo');
        
    }
    
    public function address_update(Request $request){
        $data = $request->all();
        $user_id = Auth::id();
       
             User::where('id', $user_id)->update([
                'first_name' => $data['first_name'],
                'last_name' => $data['last_name'],
                'post_number' => $data['post_number'],
                'country' => $data['country'],
                'ken' => $data['ken'],
                'shikutyoson' => $data['shityosonku'],
                'phone' => $data['tell']
            ]);
        
        return view('mypage_address');
        
    }
}

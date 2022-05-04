<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\User;
use App\Models\Cart;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;
use Stripe\Customer;
use Stripe\Stripe;
use Stripe\Charge;

class PaymentController extends Controller
{
    //
    
    public function __construct(){
    $this->middleware('auth');
  }
    
    public function index()
    {
        return view("payment");
    }
    public function charge(Request $request)
    
    {   
        
        
        
        
        Stripe::setApiKey(env('STRIPE_SECRET')); //シークレットキー

        Charge::create(array(
            'amount' =>500,
            'currency' => 'jpy',
            'source' => request()->stripeToken
        ));
        return redirect()->route('cart');;
    }
    
    public function     checkout_function(Request $request)
    {
        #カートアイテム情報取得(はじめ)
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
        #カート情報(終)
        
        
        #住所変更をするかしないかの判定
        $data = $request->all();
        if(isset($data['pre_address'])){
            
        }else{
            $validated = $request->validate([
                'last_name' => 'required',
                'first_name' => 'required',
                'country' => 'required',
                'address' => 'required',
                'ken' => 'required',
                'shikutyoson' => 'required',
                'tel' => 'required',
            ]);
            User::where('id', $user_id)->update([
                'first_name' => $data['first_name'],
                'last_name' => $data['last_name'],
                'post_number' => $data['address'],
                'country' => $data['country'],
                'ken' => $data['ken'],
                'shikutyoson' => $data['shikutyoson'],
                'phone' => $data['tel']
            ]);
        
        }
        #stripe決済の為のコード
        
        try {
        // 成功時の処理をいれる
        Stripe::setApiKey(env('STRIPE_SECRET')); //シークレットキー

        Charge::create(array(
            'amount' => $all,
            'currency' => 'jpy',
            'source' => request()->stripeToken
        ));
        
        $result = 1;
 
        // ここから失敗時
        // ①カード情報不備などで支払いを拒否された
      } catch(\Stripe\Exception\CardException $e) {
        $result = 2;
        $error =  $e->getError()->message;
 
        // ②APIへのリクエストが早く、多すぎる
      }  catch (\Stripe\Exception\RateLimitException $e) {
        $result = 3;
        $error =  $e->getError()->message;
 
        // ③パラメータが無効
      } catch (\Stripe\Exception\InvalidRequestException $e) {
        $result = 4;
        $error =  $e->getError()->message;
 
      // ④STRIPE APIの認証に失敗（最近APIキーを変更した場合など）
      } catch (\Stripe\Exception\AuthenticationException $e) {
        $result = 5;
        $error =  $e->getError()->message;
      
      // ⑤Stripeとのネットワークコミュニケーションに失敗
      } catch (\Stripe\Exception\ApiConnectionException $e) {
        $result = 6;
        $error =  $e->getError()->message;
 
      // ⑥一般的なエラー
      } catch (\Stripe\Exception\ApiErrorException $e) {
        $result = 7;
        $error =  $e->getError()->message;
 
      // ⑦Stripeと関係のないエラー
      } catch (Exception $e) {
        $result = 8;
        $error =  $e->getError()->message;
      }
      
      // 結果によって、ユーザーへのメッセージを変える
    if($result==2) {
        session()->flash('flash_message', '入力いただいたカードでは、お支払いができませんでした。再度お試しいただくか、または他のカードでお試しください。');
        return redirect()->route('cart');
      }elseif($result==3) {
        session()->flash('flash_message', 'APIエラーです。');
        return redirect()->route('cart');
      }elseif($result==4) {
        session()->flash('flash_message', 'パラメータが無効です。');
      return redirect()->route('cart');
      }elseif($result==5) {
        session()->flash('flash_message','認証に失敗しました。' );
      return redirect()->route('cart');
      }elseif($result==6) {
        session()->flash('flash_message', '通信エラーです。');
      return redirect()->route('cart');
      }elseif($result==7) {
        session()->flash('flash_message', 'エラーが起こりました。');
      return redirect()->route('cart');
      }elseif($result==8) {
        session()->flash('flash_message', 'エラーが起こりました。');
        return redirect()->route('cart');
      }
        
        
        # 注文情報を挿入
        foreach($cart_item as $item){
            Order::create(['user_id' => Auth::user()->id,
            'user_name' => Auth::user()->name,
            'last_name' => Auth::user()->last_name,
            'first_name' => Auth::user()->first_name,
            'post_number' => Auth::user()->post_number,
            'address' => Auth::user()->ken . "県" . Auth::user()->shikutyoson,
            'phone' => Auth::user()->phone,
            'item_id' => $item[0]['id'],
            'item_name' => $item[0]['name'],
            'size' => $item[0]['size'],
            'designers' => $item[0]['designers'],
            'categories' => $item[0]['categories'],
            'price' => $item[0]['price'],
            'shipping_status' => "未定",
            'arrival_date' => "未定",
            'shipping_id' => "未定",
            'shipping_company' => "未定",
            'img_url' => $item[0]['img_url1']
        ]);
            Cart::where('item_id', $item[0]['id'])->where('user_id', $user_id)->delete();
            $items = Item::find($item[0]['id']);
            $items->decrement($item[0]['size']);
        }
    session()->flash('flash_message', 'ご注文完了いたしました');
    return redirect()->route('home');
    } 
}

@extends('layouts.app')
@push('css')
<link href="{{ asset('css/checkout.css') }}" rel="stylesheet">
@endpush

@section('content')

<form method="POST" actiton="/cart/checkout" >
<div class="pay-menu-wrap">
        @csrf
        <!-- LEFT MENU -->
        <div class="pay-left-menu">    
            <h4>チェックアウト</h4>
            <p>全て半角ローマ字でご入力してください</p>
            @if(isset(Auth::user()->shikutyoson))
            <div class="">
                <h4>この住所に届ける(仮)</h4>
                <div class="tekitou">
                    <input type="checkbox" name = "pre_address" value = "Don't update"> 
                    <div class="mozi">
                        <p class='mozi-accountname'>{{ Auth::user()->last_name }}  {{ Auth::user()->first_name }}</p>
                        <p class='mozi-yuubin'>{{ Auth::user()->post_number }}</p>
                        <p class='mozi-address'>{{ Auth::user()->country }}  {{ Auth::user()->ken }}  {{ Auth::user()->shikutyoson }}</p>
                        <p class='mozi-denwa'>{{ Auth::user()->phone }}</p>
                    </div>
                </div>
            </div>
            @endif
            <div class="pay-config-wrap">
                @if(isset(Auth::user()->shikutyoson))
                    <h4>お届け先住所を変更する</h4>
                @else
                    <h4>お届け住所を設定する</h4>
                @endif
                
                
                <div class="item-colum">
                    <div class="myou">
                        <p>妙</p>
                        <input type="text" name="last_name">
                    </div>
                    <div class="mei">
                        <p>名</p>
                        <input type="text" name="first_name">
                    </div>
                </div>
                <div class="item-colum">
                    <div class="company">
                        <p>会社名</p>
                        <input type="text" placeholder="任意">
                    </div>
                    <div class="country">
                        <p>国</p>
                        <select name="country" id="">
                            <option value="" selected>-</option>
                            <option value="日本">日本</option>
                        </select>
                    </div>
                </div>
                <div class="item-colum">
                    <div class="zipcode">
                        <p>郵便番号</p>
                        <input type="text" name="address">
                    </div>
                    <div class="prefecture-top">
                        <p>都道府県</p>
                        <select name="ken" id="">
                            <option value="" selected>-</option>
                            <option value="東京都">東京都</option>
                            <option value="岩手県">岩手県</option></option>
                            <option value="宮城県">宮城県</option>
                            <option value="愛知県">愛知県</option>
                            <option value="大阪府">大阪府</option>
                        </select>
                    </div>
                </div>
                <div class="item-colum">
                    <div class="prefecture-middle">
                        <p>市区町村</p>
                        <input type="text" name = "shikutyoson">
                    </div>
                </div>
                <div class="item-colum">
                    <div class="tel">
                        <p>電話番号</p>
                        <input type="text" name = "tel">
                    </div>
                    <div class="zipcode">
                        <p>zipcode(test)</p>
                        <button class='sarch2' onclick='zipcode_call()'>sarch</button>
                        <input type=text class='s-zipcode'>
                    </div>
                </div>
            </div>
            <div class="delivery-config">
                <h4>配送方法</h4>
            </div>
            <div class="pay-config-wrap">
                <h4>お支払い方法</h4>
                <div class="item-colum">
                    <div>
                        <input type="checkbox" name = >
                    </div>
                    <div>
                        <p>クレジットカードで支払う</p>
                    </div>
                </div>
                
            </div>
            <div class="cardinfo-wrap">
                <h4>カード情報</h4>
                <!-- <div class="item-colum">
                    <div class="card-number">
                        <p>カード番号</p>
                        <input type="text">
                    </div>
                    <div class="card-number">
                        <p>有効期限</p>
                        <input type="text">
                    </div>
                    <div class="card-number">
                        <p>&nbsp;</p>
                        <input type="text"> 
                    </div>
                </div>
                <div class="item-colum">
                    <div class="card-number">
                        <p>名義</p>
                        <input type="text">
                    </div>
                    <div class="card-number">
                        <p>セキュリティーコード</p>
                        <input type="text">
                    </div>
                    <div>

                    </div>
                </div>-->
            </div>
        </div>


        <!-- RIGHT MENU -->
        <div class="pay-right-menu">
            <div class="cart-right-menu-content-wrap">
                <!-- <div class="cart-checkout">
                    <h4>チェックアウト</h4>
                    <p>メールアドレスを入力してログインしていただくか、ゲストとしてチェックアウトへおすすみ下さい。</p>
                </div>
                <div class="cart-mailadless">
                    <h4>メールアドレス</h4>
                    <form action="" class="form" novalidate>
                        <input class="cart-email" type="email" name="" id="" required>
                        <span class="error"></span>
                        <input class="cart-submit" type="submit" name="" id="">
                    </form>
                </div> -->
                <div class="cart-list-footer">
                    <div class="cart-list-footer-empty"></div>
                    <div class="cart-list-footer-colum">
                        <div class="cart-sum">
                            <h4 class="left">合計</h4>
                            <h4 class="right">{{$all}} JPY</h4>
                        </div>
                        <div class="cart-dely">
                            <h4 class="left">送料 (推定)</h4>
                            <h4 class="right">チェックアウト時に誤生産</h4>
                        </div>
                        <div class="cart-tax">
                            <h4 class="left">関税と消費税</h4>
                            <h4 class="right">ご注文合計に込み</h4>
                        </div>
                        <div class="cart-sum-sum">
                            <h4 class="left">ご注文の合計</h4>
                            <h4 class="right">¥{{$all}} JPY</h4>
                        </div>
                    </div>
                </div>
                    <script src="https://checkout.stripe.com/checkout.js" class="stripe-button" data-key="{{ env('STRIPE_KEY') }}" data-amount={{$all}} data-name="Stripe決済デモ" data-label="決済する" data-description="これはデモ決済です" data-image="https://stripe.com/img/documentation/checkout/marketplace.png" data-locale="auto" data-currency="JPY">
                    </script>

            </div>
            <div class="remark-wrap">
                <p>※備考欄このへんでいいか？？</p>
            </div>
        </div>
        
    </div>
</form>

@endsection
<script src='{{ asset('js/checkout.js') }}'></script>




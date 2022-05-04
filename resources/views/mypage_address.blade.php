@extends('layouts.app')
@push('css')
<link href="{{ asset('css/maypage_address.css') }}" rel="stylesheet">
@endpush

@section('content')
<div class="account-info-wrap">
        <div class="account-info-left">
            <div class="account">
                アカウント
            </div>
            <div class="account-info">
                <a href="/account">アカウントの詳細</a>
            </div>
            <div class="mail-config">
                <a href=".account/mailconfig">メール購読設定</a>
            </div>
            <div class="order">
                <a href="/account/order">ご注文履歴</a>
            </div>
            <div class="address">
                <a href="/account/address">住所</a>
            </div>
        </div>
        <div class="account-info-center">
        
            <form class="forminput" action="/account/address"  method = "POST" novalidate>
                @csrf
                <!--//required pattern="[Bb]mama"//-->
                <label for="mei">
                    <span>名</span>
                    <input type="text" id="mei" name = "first_name" autocomplete="off" required> 
                    <span class="error" aria-live="polite"></span>
                </label>


                <label for="myou">
                    <span>妙</span>
                    <input type="text" name = "last_name" id="myou" autocomplete="off" required>
                    <span class="error" aria-live="polite"></span>
                </label>


                <label for="">
                    <span>会社名</span>
                    <input type="text">
                </label>

                <label for="langage">
                    <span>国</span>
                    <select name="country" id="langage"  required >
                        <option value="" selected>-</option>
                        <option value="日本">日本</option>
                    </select>
                    <span class="error" aria-live="polite"></span>
                </label>


                <label for="">
                    <span>県</span>
                    <select name="ken" id="coun" required require>
                        <option value="" selected>-</option>
                        <option value="岩手">岩手</option>
                        <option value="宮城">宮城</option></option>
                        <option value="東京">東京</option>
                        <option value="神奈川">神奈川</option>
                        <option value="大阪">大阪</option>
                    </select>
                    <span class="error" aria-live="polite"></span>
                </label>
                <!--//required pattern="[Bb]mama"//-->
                <label for="">
                    <span>市町村区</span>
                    <input type="text" id="zipcode" name = "shityosonku" autocomplete="off" >
                    <span class="error" aria-live="polite"></span>
                </label>

                <label for="">
                    <span>郵便番号</span>
                    <input type="text" id="zipcode" autocomplete="off" name = "post_number" required pattern="[Bb]mama">
                    <span class="error" aria-live="polite"></span>
                </label>

                <label for="">
                    <span>電話番号</span>
                    <input type="number" id="tel" name = "tell" autocomplete="off" required pattern="[Bb]mama"> 
                    <span class="error" aria-live="polite"></span>
                </label>
                
                


                <input type="reset" value="取り消し">
                <input class='input' type="submit" value="保存">
            </form>
            
        </div>
    </div>
    <script type="text/javascript" src="{{ asset('js/mypage_address.js') }}"></script>
    
@endsection   
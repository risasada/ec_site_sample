@extends('layouts.app')
@push('css')
<link href="{{ asset('css/maypage_accountinfo.css') }}" rel="stylesheet">
@endpush


@section('content')
<!-- ここから下追加-->
<div class="account-info-wrap">
        <div class="account-info-left">
            <div class="account">
                アカウント
            </div>
            <div class="account-info">
                <a href="/account">アカウントの詳細</a>
            </div>
            <div class="mail-config">
                <a href="/account/mailconfig">メール購読設定</a>
            </div>
            <div class="order">
                <a href="/account/order">ご注文履歴</a>
            </div>
            <div class="address">
                <a href="/account/address">住所</a>
            </div>
        </div>
        <div class="account-info-center">
            <form action="/account" class="formmm" method = "post" novalidate>
                @csrf
                <h4 class="center-title">アカウント詳細</h4>
                <h5>以下で設定できます</h5>
                <h4>アカウント情報</h4>
                <label for="mei">
                    <span>名</span>
                    <input type="text" value="" name = "first_name" id="mei" required autocomplete="off">
                    <span class="error"></span>
                </label>

                <label for="myou">
                    <span>妙</span>
                    <input type="text" value="" name = "last_name" id="myou" required autocomplete="off">
                    <span class="error"></span>
                </label>

                <label for="email">
                    <span>メールアドレス</span>
                    <input type="email" value="" id="email" required autocomplete="off">
                    <span class="error"></span>
                </label>

                <h4>アカウントのパスワード</h4>
                <label for="before-password">
                    <span>変更前のパスワード</span>
                    <input type="password" value="" id="before-password" required pattern="^[a-zA-Z0-9.?/-]{8,24}$" autocomplete="off">
                    <span class="error"></span>
                </label>

                <label for="after-password">
                    <span>変更後のパスワード</span>
                    <span>8文字以上で設定</span>
                    <input type="password" value="" id="after-password" required pattern="^[a-zA-Z0-9.?/-]{8,24}$" autocomplete="off">
                    <span class="error"></span>
                </label>

                <input class="mepage-submit-button" type="submit" value="変更の保存">
            </form>
        </div>
        
    </div>
    <script type="text/javascript" src="{{ asset('js/mypage_accountinfo.js') }}"></script>
    
    
@endsection

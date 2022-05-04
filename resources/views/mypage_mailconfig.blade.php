@extends('layouts.app')
@push('css')
<link href="{{ asset('css/mypage_mailconfig.css') }}" rel="stylesheet">
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
            <form method="POST"　action="/account/mailconfig">
                @csrf
                <h4 class="center-title">メール購読設定</h4>

                <label for="">
                    <span>ニュースレター</span>
                    <input type="checkbox" value="購読" name="read" checked class="newsSelector">
                    <span class="notblock">購読</span>
                    <input type="checkbox" value="購読解除" name="not_read" class="newsSelector">
                    <span class="notblock">購読解除</span>
                </label>

                <h4>詳細設定</h4>
                <label for="">
                    <span>性別</span>
                    <input type="checkbox" value="メンズ" name="men's" checked class="sexSelector">
                    <span class="notblock">メンズ</span>
                    <input type="checkbox" value="ウィメンズ" name="women's" class="sexSelector">
                    <span class="notblock">ウィメンズ</span>
                </label>

                <h4>言語</h4>
                <select name="language" class="sele" id="">
                    <option value="日本">日本語</option>
                    <option value="英語">ENGLISH</option>
                </select>
                <h4>国/地域</h4>
                <select name="country" id="" class="country">
                    <option value="日本">日本</option>
                </select>

                <input class="mepage-submit-button" type="submit" value="変更の保存">
            </form>
            <script type="text/javascript" src="{{ asset('js/mypage_mailconfig.js') }}"></script>
        </div>
        
    </div>
    
@endsection
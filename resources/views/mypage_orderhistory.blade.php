@extends('layouts.app')
@push('css')
<link href="{{ asset('css/mypage_orderhistory.css') }}" rel="stylesheet">
@endpush
@php

$all = 0;

@endphp

@section('content')
<div class="cart-menu-wrap">

    <!-- LEFT MENU -->
    <div class="cart-left-menu">
        <h4>注文履歴</h4>
        <div class="cart-list">
            <div class="cart-list-head">
                <div id="cart-head-left-left">ご注文</div>
                <div id="cart-head-left-right">ご注文日</div>
                <div id="cart-head-center">合計</div>
                <div id="cart-head-right-left">処理状況</div>
                <div id="cart-head-right-right">変更</div>
            </div>
            
        @foreach($order_list as $order)
            <a href = "/item_menu/{{$order['item_id']}}">
            <div class="item-wrap">
            
                <!--　ご注文　-->
                <div class="cart-item">
                    <div class="img-wrap">
                        <img width="75" height="113" src="{{ Storage::url($order['img_url']) }}" alt="">
                    </div>
                    <div class="item-detail">
                        <p>{{$order['item_name']}}</p>
                        <p>{{$order['size']}}</p>
                        <p>{{$order['designers']}}</p>
                    </div>
                </div>
                
                <!--ご注文日-->
                <div class="order-day">
                    <p>{{$order['created_at']}}</p>
                </div>
                
                <!--合計-->
                <div class="cart-sum">
                    JPY {{$order['price']}}
                </div>
                
                <!--処理状況-->
                <div class="progress-status">
                    <div class='delivery-status'>配送状況 : {{$order['shipping_status']}}</div>
                    <div class='delivery-company'>配送会社 : {{$order['shipping_company']}}</div>
                    <div class='delivery-id'>追跡ID : {{$order['shipping_id']}}</div>
                    
                </div>
            
                <!--変更-->
                <div class="change-item">
                    
                </div>
            </div>
            </a>
        @endforeach
            
        </div>
    </div>

</div>
</body>

</html>
© 2022 GitHub, Inc.
Terms
Privacy

@endsection
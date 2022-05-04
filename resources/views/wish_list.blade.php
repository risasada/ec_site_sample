@extends('layouts.app')
@push('css')
<link href="{{ asset('css/mypage_orderhistory.css') }}" rel="stylesheet">
@endpush
@php

$all = 0;
$counter = 0;
@endphp

@section('content')
<div class="cart-menu-wrap">

    <!-- LEFT MENU -->
    <div class="cart-left-menu">
        <h4>wish_list</h4>
        <h4>欲しいものリスト</h>
        <div class="cart-list">
            <div class="cart-list-head">
                <div id="cart-head-left-left">商品名</div>
                <div id="cart-head-left-right">削除</div>
                <div id="cart-head-center">price</div>
                <div id="cart-head-right-left"> 削除</div>
                <div id="cart-head-right-right">カートに入れる</div>
            </div>
            
        @foreach($wish_item as $wish)
            <a href = "/item_menu/{{$wish[0]['id']}}"　class="item-wrap">
            <div class="item-wrap">
            
                <!--　ご注文　-->
                <div class="cart-item">
                    <div class="img-wrap">
                        <img width="75" height="113" src="{{ Storage::url($wish[0]['img_url1']) }}" alt="">
                    </div>
                    <div class="item-detail">
                        <p>{{$wish[0]['name']}}</p>
                        <p>{{$wish[0]['size']}}</p>
                        <p>{{$wish[0]['designers']}}</p>
                        <p>{{$wish[0]['categories']}}</p>
                    </div>
                </div>
                
                <!--ご注文日-->
                <div class="order-day">
                    <form action = "/wish/to_cart" method="POST">
                    
                            @csrf
                            <input type="hidden" value={{$wish[0]['id']}} name="item_id">
                            <input type="hidden" value={{$wish[0]['size']}} name = "size">
                            <input type="hidden" value={{$wish_info[$counter]['id']}} name="wish_id">
                            <input type="submit" value="カートに入れる">
                        </form>
                </div>
                
                <!--合計-->
                <div class="cart-sum">
                    JPY {{$wish[0]['price']}}
                </div>
                
                <!--処理状況-->
                <div class="progress-status">
                    <p><form action = "/wish/delete" method="POST">
                            @csrf
                            <input type="hidden" value={{$wish[0]['id']}} name="item_id">
                            <input type="hidden" value={{$wish_info[$counter]['id']}} name="cart_id">
                            <input type="submit" value="delete" name="delete">
                        </form></p>
                    
                    
                </div>
            
                <!--変更-->
                <div class="change-item">
                    
                </div>
            </div>
            </a>
            @php
           
            $counter =$counter + 1;
            @endphp
            
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
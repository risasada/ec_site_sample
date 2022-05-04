@extends('layouts.app')
@push('css')
<link href="{{ asset('css/item_menu.css') }}" rel="stylesheet">
@endpush
@section('content')


<div class="item-Menu-wrap">
    <div class="item-menu-left-wrap">

        <!-- left-item のデザイン -->
        <div class="left-fixed-item">
            <<h3>{{$item[0]["designers"]}}</h3>
                <ul>
                    <li>xxxxxxxx</li>
                    <li>{{$item[0]['categories']}}</li>
                    <li>{{$item[0]['made_in']}}</li>
                    <li>{{$item[0]['material']}}</li>
                </ul>
                <p>{{$item[0]['name']}}</p>
                <ul>
                    <li>xxxxxx</li>
                    <li>{{$item[0]['material']}}</li>
                </ul>
                <p>{{$item[0]['material']}}</p>
                <ul>
                    <li>{{$item[0]['material']}}</li>
                    <li>xxxxxxxxxx</li>
                </ul>
        </div>

    </div>
    <div class="item-menu-center-wrap">
        <div class="img-wrap">
            <img width="306" height="460" src="{{ Storage::url($item[0]['img_url1']) }}" alt="">
        </div>
        <div class="img-wrap">
            <img width="306" height="460" src="{{ Storage::url($item[0]['img_url2']) }}" alt="">
        </div>
        <div class="img-wrap">
            <img width="306" height="460" src="{{ Storage::url($item[0]['img_url3']) }}" alt="">
        </div>
        <div class="img-wrap">
            <img width="306" height="460" src="{{ Storage::url($item[0]['img_url4']) }}" alt="">
        </div>

    </div>
    <div class="item-menu-right-wrap">

        <!-- rights-item のデザイン -->
        <div class="right-fixed-item">
            <h4>¥{{$item[0]['price']}} JPY</h4>
            <h4>Taxes and duties included.</h4>
            <form method="POST" class='forminput' novalidate>
                @csrf
                <select name="size" id="size" style="display: block;" required>

                    <option value="" selected >SELECT A SIZE</option>
                    @if($item[0]['XS'] > 0)
                    <option value="XS">XS -only {{$item[0]['XS']}} remaining</option>
                    @endif
                    @if($item[0]['S'] > 0)
                    <option value="S">S -only {{$item[0]['S']}} remaining</option>
                    @endif
                    @if($item[0]['M'] > 0)
                    <option value="M">M -only {{$item[0]['M']}} remaining</option>
                    @endif
                    @if($item[0]['L'] > 0)
                    <option value="L">L -only {{$item[0]['L']}} remaining</option>
                    @endif
                    @if($item[0]['LL'] > 0)
                    <option value="LL">LL -only {{$item[0]['LL']}} remaining</option>
                    @endif
                </select>
                <span class="error"></span>
                <div class="input-wrap">
                    <input type="hidden" name="item_id" value={{$item[0]['id']}}>
                    <input type="submit" formaction="/cart/insert_cart" value="ADD TO BAG">
                    <input class="add-cart" type="submit" formaction="/wish/insert_wish" value="ADD TO WISHLIST">
                </div>
            </form>

        </div>
    </div>
</div>
<script src="{{ asset('js/list_item.js') }}"></script>


@endsection
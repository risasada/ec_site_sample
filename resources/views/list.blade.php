@extends('layouts.app')
@push('css')
<link href="{{ asset('css/list.css') }}" rel="stylesheet">
@endpush
@section('content')
@php

$accessories = ["Belts & Suspenders", "Dog Accessories", "Eyewear", "Face Masks", "Gloves", "Hats", "Jewelry", "Keychains", "Pocket Squares & Tie Bars", "Scarves", "Socks", "Tech", "Ties", "Umbrellas", "Wallets & Card Holders", "Watches"];
$bags = ["Backpacks", "Briefcases", "Duffle Bags", "Messenger Bags", "Pouches & Document Holders", "Tote Bags", "Travel Bags"];
$clothing = ["Jackets & Coats", "Jeans", "Pants", "Shirts", "Shorts", "Suits & Blazers", "Sweaters", "Swimwear", "Tops", "Underwear & Loungewear"];
$shoes = ["Boat Shoes & Moccasins", "Boots", "Espadrilles", "Lace Ups & Oxfords", "Monkstraps", "Sandals", "Slippers & Loafers2", "Sneakers"];

@endphp

<main>
    <div class="category-list">
        <h3 id="reset_tag">
            <a href="">all categories</a>
        </h3>
        <div class="category-item">
            <div class="category-name">
                <button><span>ACCESSORIES</span></button>
            </div>
            <div class="category-child-list" id="child-list">
                @foreach($accessories as $acce)
                <div class="category-child-name"><a href="/item/{{$inform['gender']}}/{{$acce}}/{{$inform['designers']}}">{{$acce}}</a></div>

                @endforeach
            </div>
        </div>
        <div class="category-item">
            <div class="category-name">
                <button><span>BAGS</span></button>
            </div>
            <div class="category-child-list" id="child-list">
                @foreach($bags as $bag)
                <div class="category-child-name"><a href="/item/{{$inform['gender']}}/{{$bag}}/{{$inform['designers']}}">{{$bag}}</a></div>
                @endforeach
            </div>
        </div>
        <div class="category-item">
            <div class="category-name">
                <button><span>CLOTHINGS</span></button>
            </div>
            <div class="category-child-list" id="child-list">
                @foreach($clothing as $cloth)
                <div class="category-child-name"><a href="/item/{{$inform['gender']}}/{{$cloth}}/{{$inform['designers']}}">{{$cloth}}</a></div>
                @endforeach
            </div>
        </div>
        <div class="category-item">
            <div class="category-name">
                <button><span>SHOES</span></button>
            </div>
            <div class="category-child-list" id="child-list">
                @foreach($shoes as $sho)
                <div class="category-child-name"><a href="/item/{{$inform['gender']}}/{{$sho}}/{{$inform['designers']}}">{{$sho}}<a></div>
                @endforeach
            </div>
        </div>
    </div>
    <script>
        const retes = document.getElementById('reset_tag')
        const itemElement = document.getElementsByClassName('category-item')

        retes.addEventListener('click', function() {
            const categoryItem = document.querySelectorAll("div.category-item")
            for (const elem of categoryItem) {
                elem.children[1].style['display'] = 'none'
                // elem.nextElementSibling.style['display'] = 'none'
            }
        })

        for (const elem of itemElement) {
            elem.addEventListener('click', function() {
                const nextElem = this.children[0].nextElementSibling
                
                //追加
                nextElem.addEventListener('click',(e)=>{
                    e.stopPropagation();
                })
                
                console.log(this.children[0].nextElementSibling.style['display'])
                
                // console.log(getComputedStyle(nextElem).display)
                if (getComputedStyle(nextElem).display === 'none') {
                    nextElem.style['display'] = 'block'
                } else if (getComputedStyle(nextElem).display === 'block') {
                    nextElem.style['display'] = 'none'
                }
            })
        }
    </script>
    
    @if(isset($items[0]['name']))
    <ul class="show-item">
        @foreach($items as $item)
        <li><a href="/item_menu/{{$item['id']}}"><img src="{{ Storage::url($item['img_url1']) }}" />
                <p>{{$item['designers']}}</p>
                <p>{{$item['name']}}</p><span>¥{{$item['price']}}</span>
            </a></li>
        @endforeach
    </ul>
    @endif
    
    <div class="color-list">
        <div class="site_route">
            <span>item</span>
            @if($inform['gender']!= "none" and $inform['gender']!= null) <span>> {{$inform['gender']}} </span> @endif
            @if($inform['categories']!= "none" and $inform['categories']!= null) <span> > {{$inform['categories']}}</span> @endif
            @if($inform['designers']!= "none" and $inform['designers']!= null) <span> > {{$inform['designers']}}</span> @endif
        
        </div>
        <div class="color-list-wrap">
            
            <div class="color-button">
                Designers
            </div>
            <div class="color-wrap">
                <div class="color-item-list">
                @foreach($designers as $design)
                    <div class="color-item">
                        <a href = "/item/{{$inform['gender']}}/{{$inform['categories']}}/{{$design['name']}}">{{$design['name']}}</a>
                    </div>
                @endforeach
                </div>
            </div>
        </div>
    </div>

    <script>
        const elems = document.getElementsByClassName('color-button')[0]
        const targetElems = document.getElementsByClassName('color-item-list')[0]

        elems.addEventListener('click', function(e) {

            e.stopPropagation();

            console.log(getComputedStyle(targetElems).transform)
            if (getComputedStyle(targetElems).transform == 'matrix(1, 0, 0, 1, 0, 0)') {
                targetElems.style['transform'] = 'translateY(-100%)'
            } else {
                targetElems.style['transform'] = 'translateY(0)'
            }
            console.log(this)

        })
    </script>
</main>
@endsection
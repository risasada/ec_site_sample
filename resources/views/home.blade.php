@extends('layouts.app')
@push('css')
<link href="{{ asset('css/home.css') }}" rel="stylesheet">
@endpush
<!-- ここにcssを記述 -->

@section('content')

<div class="article" id="article">
    <div class="collection1">
        <img src=" {{ asset('/img/MaisonMargiela_01.jpg')}}">
        <h4>
            <label>RECENT</label>
            <span>Comme des garsons homme plus 2022ss</span>
        </h4>
        <!--
        <div class="feature-buton">
            <a href="">
                <span>SHOP WOMENSWEAR</span>
            </a>
        </div>
        -->
    </div>
    <div class="collection2">
        <img src="{{ asset('img/MaisonMargiela_9.jpg')}}">
        <h4>
            <label>RECENT</label>
            <span>MaisonMargiela 2022ss</span>
        </h4>
        <!--<div class="feature-buton">
            <a href="">
                <span>SHOP WOMENSWEAR</span>
            </a>
        </div>-->
    </div>
    <div class="collection3">
        <img src="{{ asset('img/MaisonMargiela_4.jpg')}}">
        <h4>
            <label>RECENT</label>
            <span>SELINE 2022ss</span>
        </h4>
        <!--<div class="feature-buton">
            <a href="">
                <span>SHOP WOMENSWEAR</span>
            </a>
        </div>-->
    </div>
</div>

<div class="Feature" id="Feature">
    <div class="collection4">
        <img src=" {{ asset('/img/MaisonMargiela_10.jpg')}}">
        
        <h4>
            <label>Featured</label>
            <span>Richardson 2022SS</span>
        </h4>
        <div class="feature-buton">
            <a href="">
                <span>SHOP WOMANSWEAR</span>
            </a>
        </div>
    </div>
    <div class="collection5">
        <img src="{{ asset('img/MaisonMargiela_19.jpg')}}">
        <h4>
            <label>Featured</label>
            <span>Palm Angels 2022SS</span>
        </h4>
        <div class="feature-buton">
            <a href="">
                <span>SHOP MENSWEAR</span>
            </a>
        </div>
    </div>
</div>

<div class="Stories" id="Stories">
    <div class="episode">
        <a>
            <h4>
                <span>DESIGNERS WE LOVE</span>
            </h4>
        </a>
        <div class="label">
            <span>VIEW All STORIES</span>
        </div>
    </div>
    <div class="episode1">

    </div>
    <div class="episode2">

    </div>
    <div class="episode3">

    </div>
    <div class="episode4">

    </div>
</div>


<div class="Feature" id="Feature">
    <div class="collection4">
        <img src=" {{ asset('/img/Richardson1.jpg')}}">
        <h4>
            <label>Featured</label>
            <span>DEntaNkOOl 2022SS</span>
        </h4>
        <div class="feature-buton">
            <a href="">
                <span>SHOP WOMANSWEAR</span>
            </a>
        </div>
    </div>
    <div class="collection5">
        <img src=" {{ asset('/img/ADSR_03.jpg')}}">
        <h4>
            <label>Featured</label>
            <span>PAle DPAA 2022SS</span>
        </h4>
        <div class="feature-buton">
            <a href="">
                <span>SHOP MENSWEAR</span>
            </a>
        </div>
    </div>
</div>


<div class="article" id="article">
    <div class="collection1">
        <img src=" {{ asset('/img/comme.jpg')}}">
        <h4>
            <label>RECENT</label>
            <span>Comme des garsons homme plus 2022ss</span>
        </h4>
        <!--
        <div class="feature-buton">
            <a href="">
                <span>SHOP WOMENSWEAR</span>
            </a>
        </div>
        -->
    </div>
    <div class="collection2">
        <img src="{{ asset('img/sacai_1.jpg')}}">
        <h4>
            <label>RECENT</label>
            <span>Sacai 2022ss</span>
        </h4>
        <!--<div class="feature-buton">
            <a href="">
                <span>SHOP WOMENSWEAR</span>
            </a>
        </div>-->
    </div>
    <div class="collection3">
        <img src="{{ asset('img/celine_1.jpg')}}">
        <h4>
            <label>RECENT</label>
            <span>SELINE 2022ss</span>
        </h4>
        <!--<div class="feature-buton">
            <a href="">
                <span>SHOP WOMENSWEAR</span>
            </a>
        </div>-->
    </div>
</div>

<!-- takito 追加 -->
<!-- yoko-list -->
<div class="slide-wrap">
    <div class="slid-content" id='A'>
        <div class="content-wrap">
            <img src="{{ asset('/img/MaisonMargiela_7.jpg')}}" alt="" width="94.13" height="125.5">
            <div class="p-content">
                <div class="p-content-main">
                    view the world
                    take down night
                </div>
                <div class="p-content-sub">
                    xxxxxxxx
                </div>
            </div>

        </div>
    </div>
    <div class="slid-content" id='B'>
        <div class="content-wrap">
            <img src="{{ asset('/img/MaisonMargiela_8.jpg')}}" alt="" width="94.13" height="125.5">
            <div class="p-content">
                <div class="p-content-main">
                    ABCDEFGHIJKLMN
                </div>
                <div class="p-content-sub">
                    xxxxxxxx
                </div>
            </div>

        </div>
    </div>
    <div class="slid-content" id='C'>
        <div class="content-wrap">
            <img src="{{ asset('/img/MaisonMargiela_01.jpg')}}" alt="" width="94.13" height="125.5">
            <div class="p-content">
                <div class="p-content-main">
                    ABCDEFGHIJKLMN
                </div>
                <div class="p-content-sub">
                xxxxxxxx
                </div>
            </div>

        </div>
    </div>
    <div class="slid-content" id='D'>
        <div class="content-wrap">
            <img src="{{ asset('/img/Burberry_1.jpg')}}" alt="" width="94.13" height="125.5">
            <div class="p-content" id="one">
                <div class="p-content-main">
                    HIJKLNMOPQR
                </div>
                <div class="p-content-sub">
                    xxxxxxxx
                </div>
            </div>
        </div>
    </div>
    <div class="slid-content" id='E'>
        <div class="content-wrap">
            <img src="{{ asset('/img/sacai_1.jpg')}}" alt="" width="94.13" height="125.5">
            <div class="p-content">
                <div class="p-content-main">
                    OPQRSTUVWXY
                </div>
                <div class="p-content-sub">
                xxxxxxxxx
                </div>
            </div>
        </div>
    </div>
</div>



<!-- content-list -->
<div class="main-wrap">
    <div class="left-content">
        <div class="left-conetnt-fist">
            <img src="{{ asset('/img/MaisonMargiela_9.jpg')}}" alt="" width="415.7" height="297.16">
            <div class="p-content-wrap">
                <h3>持ち主を語る物</h3>
                <p>xxxxxxxx</p>
            </div>
        </div>
        <div class="left-conetnt-second">
            <img src="{{ asset('/img/SaturdaysNYC.jpg')}}" alt="" width="415.7" height="297.16">
            <div class="p-content-wrap">
                <h3>ウォーホープ</h3>
                <p>xxxxxxxx</p>
            </div>
        </div>
    </div>
    <div class="center-content">
        <div class="center-content-first">
            <img src="{{ asset('/img/MaisonMargiela_7.jpg')}}" alt="" width="284.09" height="378.78">
            <div class="p-content-wrap-2">
                <h3>国境の町</h3>
                <p>xxxxxxxx</p>
            </div>
        </div>
    </div>
    <div class="right-content">
        <div class="main-content-item">
            <div class="main-content-item-wrap firstchild">
                <img src="{{ asset('/img/Richardson1.jpg')}}" alt="" width="94.13" height="125,5">
                <div class="main-p">
                    <div class="p-main-main">
                        sssssssssssss
                    </div>
                    <div class="p-main-sub">
                        ファッション
                    </div>
                </div>
            </div>
        </div>
        <div class="main-content-item">
            <div class="main-content-item-wrap">
                <img src="{{ asset('/img/Richardson1.jpg')}}" alt="" width="94.13" height="125,5">
                <div class="main-p">
                    <div class="p-main-main">
                        sssssssssssss
                    </div>
                    <div class="p-main-sub">
                        ファッション
                    </div>
                </div>
            </div>
        </div>
        <div class="main-content-item">
            <div class="main-content-item-wrap">
                <img src="{{ asset('/img/Richardson1.jpg')}}" alt="" width="94.13" height="125,5">
                <div class="main-p">
                    <div class="p-main-main">
                        sssssssssssss
                    </div>
                    <div class="p-main-sub">
                        ファッション
                    </div>
                </div>
            </div>
        </div>
        <div class="main-content-item">
            <div class="main-content-item-wrap">
                <img src="{{ asset('/img/Richardson1.jpg')}}" alt="" width="94.13" height="125,5">
                <div class="main-p">
                    <div class="p-main-main">
                        sssssssssssss
                    </div>
                    <div class="p-main-sub">
                        ファッション
                    </div>
                </div>
            </div>
        </div>
        <div class="main-content-item">
            <div class="main-content-item-wrap">
                <img src="{{ asset('/img/Richardson1.jpg')}}" alt="" width="94.13" height="125,5">
                <div class="main-p">
                    <div class="p-main-main">
                        sssssssssssss
                    </div>
                    <div class="p-main-sub">
                        ファッション
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Feature 2 -->
<div class="Feature" id="Feature">
    <div class="collection4">
        <img src=" {{ asset('/img/Richardson1.jpg')}}">
        <h4>
            <label>Featured</label>
            <span>Richardson 2022SS</span>
        </h4>
        <div class="feature-buton">
            <a href="">
                <span>SHOP WOMANSWEAR</span>
            </a>
        </div>
    </div>
    <div class="collection5">
        <img src="{{ asset('img/palmangels2.jpg')}}">
        <h4>
            <label>Featured</label>
            <span>Palm Angels 2022SS</span>
        </h4>
        <div class="feature-buton">
            <a href="">
                <span>SHOP MENSWEAR</span>
            </a>
        </div>
    </div>
</div>


<!-- center title -->
<div class="center-title-wrap">
    <h1>波立つ水面の上でチェイス・ホールと出会う</h1>
    <h3>ホワイトな想像を超えて広がるブラックな存在</h3>
    <a class="p-a" href="">
        <!-- <div class="view-edital-button"> -->

        <span class="p-span">View</span>

        <!-- </div> -->
    </a>
</div>


<!-- article 2 -->
<div class="article" id="article">
    <div class="collection1">
        <img src=" {{ asset('/img/comme.jpg')}}">
        <h4>
            <label>RECENT</label>
            <span>Comme des garsons homme plus 2022ss</span>
        </h4>
        <!--
        <div class="feature-buton">
            <a href="">
                <span>SHOP WOMENSWEAR</span>
            </a>
        </div>
        -->
    </div>
    <div class="collection2">
        <img src="{{ asset('img/sacai_1.jpg')}}">
        <h4>
            <label>RECENT</label>
            <span>Sacai 2022ss</span>
        </h4>
        <!--<div class="feature-buton">
            <a href="">
                <span>SHOP WOMENSWEAR</span>
            </a>
        </div>-->
    </div>
    <div class="collection3">
        <img src="{{ asset('img/celine_1.jpg')}}">
        <h4>
            <label>RECENT</label>
            <span>SELINE 2022ss</span>
        </h4>
        <!--<div class="feature-buton">
            <a href="">
                <span>SHOP WOMENSWEAR</span>
            </a>
        </div>-->
    </div>
</div>

<!-- yoko-list 2 -->
<div class="slide-wrap">
    <div class="slid-content">
        <div class="content-wrap">
            <img src="" alt="" width="94.13" height="125.5">
            <div class="p-content">
                <div class="p-content-main">
                    ABCDEFGHIJKLMN
                </div>
                <div class="p-content-sub">
                    カルチャーsssssss
                </div>
            </div>

        </div>
    </div>
    <div class="slid-content">
        <div class="content-wrap">
            <img src="" alt="" width="94.13" height="125.5">
            <div class="p-content">
                <div class="p-content-main">
                    ABCDEFGHIJKLMN
                </div>
                <div class="p-content-sub">
                    カルチャーsssssss
                </div>
            </div>

        </div>
    </div>
    <div class="slid-content">
        <div class="content-wrap">
            <img src="" alt="" width="94.13" height="125.5">
            <div class="p-content">
                <div class="p-content-main">
                    ABCDEFGHIJKLMN
                </div>
                <div class="p-content-sub">
                    カルチャーsssssss
                </div>
            </div>

        </div>
    </div>
    <div class="slid-content">
        <div class="content-wrap">
            <img src="" alt="" width="94.13" height="125.5">
            <div class="p-content" id="one">
                <div class="p-content-main">
                    ABCDEFGHIJKLMN
                </div>
                <div class="p-content-sub">
                    カルチャーsssssss
                </div>
            </div>
        </div>
    </div>
    <div class="slid-content">
        <div class="content-wrap">
            <img src="" alt="" width="94.13" height="125.5">
            <div class="p-content">
                <div class="p-content-main">
                    ABCDEFGHIJKLMN
                </div>
                <div class="p-content-sub">
                    カルチャーsssssss
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Feature3 -->
<div class="Feature" id="Feature">
    <div class="collection4">
        <img src=" {{ asset('/img/Richardson1.jpg')}}">
        <h4>
            <label>Featured</label>
            <span>Richardson 2022SS</span>
        </h4>
        <div class="feature-buton">
            <a href="">
                <span>SHOP WOMANSWEAR</span>
            </a>
        </div>
    </div>
    <div class="collection5">
        <img src="{{ asset('img/palmangels2.jpg')}}">
        <h4>
            <label>Featured</label>
            <span>Palm Angels 2022SS</span>
        </h4>
        <div class="feature-buton">
            <a href="">
                <span>SHOP MENSWEAR</span>
            </a>
        </div>
    </div>
</div>


<!-- article 3 -->
<div class="article" id="article">
    <div class="collection1">
        <img src=" {{ asset('/img/comme.jpg')}}">
        <h4>
            <label>RECENT</label>
            <span>Comme des garsons homme plus 2022ss</span>
        </h4>
        <!--
        <div class="feature-buton">
            <a href="">
                <span>SHOP WOMENSWEAR</span>
            </a>
        </div>
        -->
    </div>
    <div class="collection2">
        <img src="{{ asset('img/sacai_1.jpg')}}">
        <h4>
            <label>RECENT</label>
            <span>Sacai 2022ss</span>
        </h4>
        <!--<div class="feature-buton">
            <a href="">
                <span>SHOP WOMENSWEAR</span>
            </a>
        </div>-->
    </div>
    <div class="collection3">
        <img src="{{ asset('img/celine_1.jpg')}}">
        <h4>
            <label>RECENT</label>
            <span>SELINE 2022ss</span>
        </h4>
        <!--<div class="feature-buton">
            <a href="">
                <span>SHOP WOMENSWEAR</span>
            </a>
        </div>-->
    </div>
</div>
@endsection
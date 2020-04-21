{{-- asset() helper is used to generate urls to assets from the public directory --}}
<link rel="stylesheet" href="{{asset('css/app.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">


@extends('layouts.app')

@section('title')

@section('content')
    <h1 style="color: white;">JOINT HEALTH</h1>
    <br><br><br>
    <div class="row">
      <div class="product-box">
        <a href="products/321" class="img-container">
          <img src="images/universal_animal_flex.jpg" alt="universal_animal_flex.jpg">
        </a>
        <a href="products/321" class="atext">
          <span>UNIVERSAL <br> ANIMAL FLEX</span>
        </a>
        <span class="price">135 Lei</span>
        <a href="products/321" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/323" class="img-container">
          <img src="images/animal_flex_pudra.jpg" alt="animal_flex_pudra.jpg">
        </a>
        <a href="products/323" class="atext">
          <span>UNIVERSAL <br> ANIMAL FLEX POWDER 381GR</span>
        </a>
        <span class="price">105 Lei</span>
        <a href="products/323" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/325" class="img-container">
          <img src="images/nutrend_flexit_drink_400g.jpg" alt="nutrend_flexit_drink_400g.jpg">
        </a>
        <a href="products/325" class="atext">
          <span>NUTREND <br> FLEXIT DRINK 400GR</span>
        </a>
        <span class="price">55 Lei</span>
        <a href="products/325" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/327" class="img-container">
          <img src="images/nutrend-flexit-gelacoll-izuletved-180-kapsz.jpg" alt="nutrend-flexit-gelacoll-izuletved-180-kapsz.jpg">
        </a>
        <a href="products/327" class="atext">
          <span>NUTREND <br> FLEXIT GELACOLL 180CAPS</span>
        </a>
        <span class="price">30 Lei</span>
        <a href="products/327" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/330" class="img-container">
          <img src="images/nutrend-flexit-gelacoll-izuletved-180-kapsz.jpg" alt="nutrend-flexit-gelacoll-izuletved-180-kapsz.jpg">
        </a>
        <a href="products/330" class="atext">
          <span>NUTREND <br> FLEXIT GELACOLL 360CAPS</span>
        </a>
        <span class="price">55 Lei</span>
        <a href="products/330" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/331" class="img-container">
          <img src="images/flexit_gold.jpg" alt="flexit_gold.jpg">
        </a>
        <a href="products/331" class="atext">
          <span>NUTREND <br> FLEXIT GOLD DRINK 400GR</span>
        </a>
        <span class="price">75 Lei</span>
        <a href="products/331" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/333" class="img-container">
          <img src="images/qnt_joint_shot.png" alt="qnt_joint_shot.png">
        </a>
        <a href="products/333" class="atext">
          <span>QNT <br> JOINT PLUS SHOT 12X80ML</span>
        </a>
        <span class="price">55 Lei</span>
        <a href="products/333" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/333" class="img-container">
          <img src="images/joint-.jpg" alt="joint-.jpg">
        </a>
        <a href="products/333" class="atext">
          <span>QNT <br>JOINT+ 60CAPS</span>
        </a>
        <span class="price">35 Lei</span>
        <a href="products/333" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
    </div>
    <br><br><br>
@endsection

@section('layouts.footer')

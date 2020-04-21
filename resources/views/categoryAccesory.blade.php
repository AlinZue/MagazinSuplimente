{{-- asset() helper is used to generate urls to assets from the public directory --}}
<link rel="stylesheet" href="{{asset('css/app.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">


@extends('layouts.app')

@section('title')

@section('content')
    <h1 style="color: white;">ACCESORY</h1>
    <br><br><br>
    <div class="row">
      <div class="product-box">
        <a href="products/3" class="img-container">
          <img src="images/madmax_mfa300.jpg" alt="madmax_mfa300.jpg">
        </a>
        <a href="products/3" class="atext">
          <span>MADMAX <br> ADAPTOR GLEZNA MFA 300 </span>
        </a>
        <span class="price">30 Lei</span>
        <a href="products/3" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/6" class="img-container">
          <img src="images/nutrend_bidon_1l.jpg" alt="nutrend_bidon_1l.jpg">
        </a>
        <a href="products/6" class="atext">
          <span>NUTREND <br> BIDON 1000 ML</span>
        </a>
        <span class="price">20 Lei</span>
        <a href="products/6" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/10" class="img-container">
          <img src="images/m19.jpg" alt="m19.jpg">
        </a>
        <a href="products/10" class="atext">
          <span>MADMAX <br> CENTURA BODY CONFORM</span>
        </a>
        <span class="price">55 Lei</span>
        <a href="products/10" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/12" class="img-container">
          <img src="images/madmax_246.jpg" alt="madmax_246.jpg">
        </a>
        <a href="products/12" class="atext">
          <span>MADMAX <br> CENTURA PIELE CHOCOLATE</span>
        </a>
        <span class="price">120 Lei</span>
        <a href="products/12" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/16" class="img-container">
          <img src="images/centura_slabit_negru.jpg" alt="centura_slabit_negru.jpg">
        </a>
        <a href="products/16" class="atext">
          <span>MADMAX <br> CENTURA SUPORT SI SLABIRE</span>
        </a>
        <span class="price">95 Lei</span>
        <a href="products/16" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/18" class="img-container">
          <img src="images/m24.jpg" alt="m24.jpg">
        </a>
        <a href="products/18" class="atext">
          <span>MADMAX <br> CENTURA WMN CONFORM PINK</span>
        </a>
        <span class="price">105 Lei</span>
        <a href="products/18" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/20" class="img-container">
          <img src="images/power-strap.jpg" alt="power-strap.jpg">
        </a>
        <a href="products/20" class="atext">
          <span>QNT <br> CHINGI </span>
        </a>
        <span class="price">30 Lei</span>
        <a href="products/20" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/22" class="img-container">
          <img src="images/m35.jpg" alt="m35.jpg">
        </a>
        <a href="products/22" class="atext">
          <span>MADMAX <br> CHINGI CAMO STRAPS BLUE</span>
        </a>
        <span class="price">30 Lei</span>
        <a href="products/22" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/24" class="img-container">
          <img src="images/madmax_model1.jpg" alt="madmax_model1.jpg">
        </a>
        <a href="products/24" class="atext">
          <span>MADMAX <br> MANUSI BASIC</span>
        </a>
        <span class="price">30 Lei</span>
        <a href="products/24" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/26" class="img-container">
          <img src="images/m7.jpg" alt="m7.jpg">
        </a>
        <a href="products/26" class="atext">
          <span>MADMAX <br> MANUSI CRAZY</span>
        </a>
        <span class="price">55 Lei</span>
        <a href="products/26" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/28" class="img-container">
          <img src="images/gloves.jpg" alt="gloves.jpg">
        </a>
        <a href="products/28" class="atext">
          <span>QNT <br> MANUSI STANDARD</span>
        </a>
        <span class="price">30 Lei</span>
        <a href="products/28" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/30" class="img-container">
          <img src="images/Shaker_gold.jpg" alt="Shaker_gold.jpg">
        </a>
        <a href="products/30" class="atext">
          <span>DASO CADO <br> PREMIUM SHAKER GOLD</span>
        </a>
        <span class="price">120 Lei</span>
        <a href="products/30" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/32" class="img-container">
          <img src="images/nutrend_shaker.png" alt="nutrend_shaker.png">
        </a>
        <a href="products/32" class="atext">
          <span>NUTREND <br> SHAKER +</span>
        </a>
        <span class="price">40 Lei</span>
        <a href="products/32" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/36" class="img-container">
          <img src="images/nutrend_bottle.jpg" alt="nutrend_bottle.jpg">
        </a>
        <a href="products/36" class="atext">
          <span>NUTREND <br> SPORT BOTTLE 1000ML</span>
        </a>
        <span class="price">25 Lei</span>
        <a href="products/36" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/38" class="img-container">
          <img src="images/m37_verde.png" alt="m37_verde.png">
        </a>
        <a href="products/38" class="atext">
          <span>MADMAX <br> SHAKER 720 ML</span>
        </a>
        <span class="price">40 Lei</span>
        <a href="products/38" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/461" class="img-container">
          <img src="images/1582748071.jpg" alt="1582748071.jpg">
        </a>
        <a href="products/461" class="atext">
          <span>MADMAX <br> BANDAJE NEGRE 4M</span>
        </a>
        <span class="price">15 Lei</span>
        <a href="products/461" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
    </div>
    <br><br><br>
@endsection

@section('layouts.footer')

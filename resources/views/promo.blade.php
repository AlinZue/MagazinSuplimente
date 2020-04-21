{{-- asset() helper is used to generate urls to assets from the public directory --}}
<link rel="stylesheet" href="{{asset('css/app.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">

@extends('layouts.app')

@section('title')

@section('content')
    <h1 style="color: white;">PROMO PRODUCTS</h1>
    <br><br><br>
    <div class="row">
      <div class="product-box">
        <a href="products/88" class="img-container">
          <img src="images/record-bar.jpg" alt="record-bar.jpg">
        </a>
        <a href="products/88" class="atext">
        <span> QNT <br> RECORD BAR 60 GR 3+3 GRATIS </span>
        </a>
        <span class="price">30 Lei</span>
        <a href="products/88" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/359" class="img-container">
          <img src="images/fatdirect_nutrend.jpg" alt="fatdirect_nutrend.jpg">
        </a>
        <a href="products/359" class="atext">
          <span>NUTREND <br> FAT DIRECT SHOT 20X 60ML </span>
        </a>
        <span class="price">90 Lei</span>
        <a href="products/359" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/172" class="img-container">
          <img src="images/pancake_protein_750g_chocolate_cocoa_logo.jpg" alt="pancake_protein_750g_chocolate_cocoa_logo.jpg">
        </a>
        <a href="products/172" class="atext">
          <span>NUTREND <br> PROTEIN PANCAKE 750GR </span>
        </a>
        <span class="price">55 Lei</span>
        <a href="products/172" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/191" class="img-container">
          <img src="images/creatine_mega_strong_nutrend.jpg" alt="creatine_mega_strong_nutrend.jpg" style="height: 162px;">
        </a>
        <a href="products/191" class="atext">
          <span>NUTREND <br>CREATINE <br>MEGA STRONG</span>
        </a>
        <span class="price">100 Lei</span>
        <a href="products/191" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/215" class="img-container">
          <img src="images/c4_extreme.jpg" alt="c4_extreme.jpg" style="height: 162px;">
        </a>
        <a href="products/215" class="atext">
          <span>CELLUCOR <br> C4 EXTREME ENERGY</span>
        </a>
        <span class="price">115 Lei</span>
        <a href="products/215" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/245" class="img-container">
          <img src="images/bsn_noxplode.png" alt="bsn_noxplode.png" style="height: 162px;">
        </a>
        <a href="products/245" class="atext">
          <span>BSN <br>N.O.-XPLODE</span>
        </a>
        <span class="price">160 Lei</span>
        <a href="products/245" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
    </div>
<br><br><br>
@endsection

{{-- asset() helper is used to generate urls to assets from the public directory --}}
<link rel="stylesheet" href="{{asset('css/app.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">


@extends('layouts.app')

@section('title')

@section('content')
    <h1 style="color: white;">GASPARI NUTRITION</h1>
    <br><br><br>
    <div class="row">
      <div class="product-box">
        <a href="products/259" class="img-container">
          <img src="images/1582207689.png" alt="1582207689.png">
        </a>
        <a href="products/259" class="atext">
          <span>SUPERPUMP MAX US 40 SERVIRI</span>
        </a>
        <span class="price">180 Lei</span>
        <a href="products/259" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/312" class="img-container">
          <img src="images/gaspari_real_mass_advanced.jpg" alt="gaspari_real_mass_advanced.jpg">
        </a>
        <a href="products/312" class="atext">
          <span>REAL MASS ADVANCED 5,4KG</span>
        </a>
        <span class="price">230 Lei</span>
        <a href="products/312" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/60" class="img-container">
          <img src="images/gaspari_aminolast420.jpg" alt="gaspari_aminolast420.jpg">
        </a>
        <a href="products/60" class="atext">
          <span>AMINOLAST 420G</span>
        </a>
        <span class="price">140 Lei</span>
        <a href="products/60" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/80" class="img-container">
          <img src="images/hyperamino.jpg" alt="hyperamino.jpg">
        </a>
        <a href="products/80" class="atext">
          <span>HYPER AMINO 300G</span>
        </a>
        <span class="price">100 Lei</span>
        <a href="products/80" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/156" class="img-container">
          <img src="images/gaspari_myofusion_advanced.jpg" alt="gaspari_myofusion_advanced.jpg">
        </a>
        <a href="products/156" class="atext">
          <span>MYOFUSION ADVANCED 1,8KG</span>
        </a>
        <span class="price">195 Lei</span>
        <a href="products/156" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/413" class="img-container">
          <img src="images/gaspari_anavite.jpg" alt="gaspari_anavite.jpg">
        </a>
        <a href="products/413" class="atext">
          <span>ANAVITE 180 TABLETE</span>
        </a>
        <span class="price">155 Lei</span>
        <a href="products/413" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/164" class="img-container">
          <img src="images/precision_gaspari.jpg" alt="precision_gaspari.jpg">
        </a>
        <a href="products/164" class="atext">
          <span>PRECISION PROTEIN 1,8KG</span>
        </a>
        <span class="price">260 Lei</span>
        <a href="products/164" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/460" class="img-container">
          <img style="height: 120px; width: 160px;" src="images/1582747975.jpg" alt="1582747975.jpg">
        </a>
        <a href="products/460" class="atext">
          <span style="width: 185px;">Mirage Elemental Amino Energy Powder</span>
        </a>
        <span class="price">100 Lei</span>
        <a href="products/460" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
    </div>
    <br><br><br>
@endsection

@section('layouts.footer')

{{-- asset() helper is used to generate urls to assets from the public directory --}}
<link rel="stylesheet" href="{{asset('css/app.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">


@extends('layouts.app')

@section('title')

@section('content')
    <h1 style="color: white;">PROTEIN BARS</h1>
    <br><br><br>
    <div class="row">
      <div class="product-box">
        <a href="products/88" class="img-container">
          <img src="images/record-bar.jpg" alt="record-bar.jpg">
        </a>
        <a href="products/88" class="atext">
          <span>QNT <br> RECORD BAR 60GR 3+3GRATIS</span>
        </a>
        <span class="price">30 Lei</span>
        <a href="products/88" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/90" class="img-container">
          <img src="images/record-bar.jpg" alt="record-bar.jpg">
        </a>
        <a href="products/90" class="atext">
          <span>QNT <br> RECORD BAR 60GR</span>
        </a>
        <span class="price">10 Lei</span>
        <a href="products/90" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/92" class="img-container">
          <img src="images/nut_voltage.jpg" alt="nut_voltage.jpg">
        </a>
        <a href="products/92" class="atext">
          <span>NUTREND <br> VOLTAGE ENERGY CAKE 65GR</span>
        </a>
        <span class="price">7 Lei</span>
        <a href="products/92" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/94" class="img-container">
          <img src="images/so-good-bar.jpg" alt="so-good-bar.jpg">
        </a>
        <a href="products/94" class="atext">
          <span>QNT <br> SO GOOD BAR 60GR</span>
        </a>
        <span class="price">8 Lei</span>
        <a href="products/94" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/96" class="img-container">
          <img src="images/protein-wafer-bar.jpg" alt="protein-wafer-bar.jpg">
        </a>
        <a href="products/96" class="atext">
          <span>QNT <br> PROTEIN WAFER 35G</span>
        </a>
        <span class="price">6 Lei</span>
        <a href="products/96" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/98" class="img-container">
          <img src="images/1582573518.jpg" alt="1582573518.jpg">
        </a>
        <a href="products/98" class="atext">
          <span>QNT <br> PROTEIN JOY 60GR</span>
        </a>
        <span class="price">7 Lei</span>
        <a href="products/98" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/100" class="img-container">
          <img src="images/protein_bar.jpg" alt="protein_bar.jpg">
        </a>
        <a href="products/100" class="atext">
          <span>NUTREND <br> PROTEIN BAR 24X55GR</span>
        </a>
        <span class="price">90 Lei</span>
        <a href="products/100" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/102" class="img-container">
          <img src="images/protein-bar-kokos-en.jpg" alt="protein-bar-kokos-en.jpg">
        </a>
        <a href="products/102" class="atext">
          <span>NUTREND <br> PROTEIN BAR 55GR</span>
        </a>
        <span class="price">5 Lei</span>
        <a href="products/102" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
    </div>
    <br><br><br>
@endsection

@section('layouts.footer')

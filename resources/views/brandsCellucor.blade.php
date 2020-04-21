{{-- asset() helper is used to generate urls to assets from the public directory --}}
<link rel="stylesheet" href="{{asset('css/app.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">


@extends('layouts.app')

@section('title')

@section('content')
    <h1 style="color: white;">CELLUCOR</h1>
    <br><br><br>
    <div class="row">
      <div class="product-box">
        <a href="products/339" class="img-container">
          <img src="images/c4_ripped.jpg" alt="c4_ripped.jpg">
        </a>
        <a href="products/339" class="atext">
          <span>C4 RIPPED 30 SERVIRI</span>
        </a>
        <span class="price">120 Lei</span>
        <a href="products/339" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/215" class="img-container">
          <img src="images/c4_extreme.jpg" alt="c4_extreme.jpg">
        </a>
        <a href="products/215" class="atext">
          <span>C4 EXTREME ENERGY (30SERVIRI)</span>
        </a>
        <span class="price">115 Lei</span>
        <a href="products/215" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/217" class="img-container">
          <img src="images/c4_original.png" alt="c4_original.png">
        </a>
        <a href="products/217" class="atext">
          <span>C4 ORIGINAL 60 SERVIRI</span>
        </a>
        <span class="price">140 Lei</span>
        <a href="products/217" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/219" class="img-container">
          <img src="images/cellucor_c4_ultimate.png" alt="cellucor_c4_ultimate.png">
        </a>
        <a href="products/219" class="atext">
          <span>C4 ULTIMATE 440G</span>
        </a>
        <span class="price">150 Lei</span>
        <a href="products/219" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
    </div>
    <br><br><br>
@endsection

@section('layouts.footer')

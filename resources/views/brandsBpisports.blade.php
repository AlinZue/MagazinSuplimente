{{-- asset() helper is used to generate urls to assets from the public directory --}}
<link rel="stylesheet" href="{{asset('css/app.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">


@extends('layouts.app')

@section('title')

@section('content')
    <h1 style="color: white;">BPI SPORTS</h1>
    <br><br><br>
    <div class="row">
      <div class="product-box">
        <a href="products/86" class="img-container">
          <img src="images/bcaa_shredded.jpeg" alt="bcaa_shredded.jpeg">
        </a>
        <a href="products/86" class="atext">
          <span>BEST BCAA SHREDDED 275GR</span>
        </a>
        <span class="price">120 Lei</span>
        <a href="products/86" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/393" class="img-container">
          <img src="images/a-hd_elite.jpeg" alt="a-hd_elite.jpeg">
        </a>
        <a href="products/393" class="atext">
          <span>A-HD ELITE 30 CAPS</span>
        </a>
        <span class="price">115 Lei</span>
        <a href="products/393" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/180" class="img-container">
          <img src="images/creatine_defined.jpeg" alt="creatine_defined.jpeg">
        </a>
        <a href="products/180" class="atext">
          <span>BEST CREATINE DEFINED 300GR</span>
        </a>
        <span class="price">100 Lei</span>
        <a href="products/180" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/462" class="img-container">
          <img src="images/bpi_wheyhd.jpeg" alt="bpi_wheyhd.jpeg">
        </a>
        <a href="products/462" class="atext">
          <span>WHEY HD 1850GR</span>
        </a>
        <span class="price">175 Lei</span>
        <a href="products/462" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
    </div>
    <br><br><br>
@endsection

@section('layouts.footer')

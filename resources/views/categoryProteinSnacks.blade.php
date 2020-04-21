{{-- asset() helper is used to generate urls to assets from the public directory --}}
<link rel="stylesheet" href="{{asset('css/app.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">


@extends('layouts.app')

@section('title')

@section('content')
    <h1 style="color: white;">PROTEIN SNACKS</h1>
    <br><br><br>
    <div class="row">
      <div class="product-box">
        <a href="products/166" class="img-container">
          <img src="images/1_waffles-protein-480g-pur0022.png" alt="1_waffles-protein-480g-pur0022.png">
        </a>
        <a href="products/166" class="atext">
          <span>QNT <br> BELGIAN WAFFLES PROTEIN 480GR</span>
        </a>
        <span class="price">40 Lei</span>
        <a href="products/166" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/168" class="img-container">
          <img src="images/1_dessert-protein-pur0026.png" alt="1_dessert-protein-pur0026.png">
        </a>
        <a href="products/168" class="atext">
          <span>QNT <br> DESSERT PROTEIN 480GR</span>
        </a>
        <span class="price">55 Lei</span>
        <a href="products/168" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/170" class="img-container">
          <img src="images/qnt_protein_pancake.jpg" alt="qnt_protein_pancake.jpg">
        </a>
        <a href="products/170" class="atext">
          <span>QNT <br> PROTEIN PANCAKE 1020GR</span>
        </a>
        <span class="price">55 Lei</span>
        <a href="products/170" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/172" class="img-container">
          <img src="images/pancake_protein_750g_chocolate_cocoa_logo.jpg" alt="pancake_protein_750g_chocolate_cocoa_logo.jpg">
        </a>
        <a href="products/172" class="atext">
          <span>NUTREND <br> PROTEIN PANCAKE 750GR</span>
        </a>
        <span class="price">55 Lei</span>
        <a href="products/172" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/174" class="img-container">
          <img src="images/protein_spread.jpg" alt="protein_spread.jpg">
        </a>
        <a href="products/174" class="atext">
          <span>QNT <br> PROTEIN SPREAD 250GR</span>
        </a>
        <span class="price">30 Lei</span>
        <a href="products/174" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
    </div>
    <br><br><br>
@endsection

@section('layouts.footer')

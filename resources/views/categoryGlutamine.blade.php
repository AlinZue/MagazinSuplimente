{{-- asset() helper is used to generate urls to assets from the public directory --}}
<link rel="stylesheet" href="{{asset('css/app.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">


@extends('layouts.app')

@section('title')

@section('content')
    <h1 style="color: white;">GLUTAMINE</h1>
    <br><br><br>
    <div class="row">
      <div class="product-box">
        <a href="products/269" class="img-container">
          <img src="images/nutrend_glutamine_300g.jpg" alt="nutrend_glutamine_300g.jpg">
        </a>
        <a href="products/269" class="atext">
          <span>NUTREND <br> GLUTAMINE 300GR</span>
        </a>
        <span class="price">55 Lei</span>
        <a href="products/269" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/271" class="img-container">
          <img src="images/nutrend_glutamine_500g.jpg" alt="nutrend_glutamine_500g.jpg">
        </a>
        <a href="products/271" class="atext">
          <span>NUTREND <br> GLUTAMINE 500GR</span>
        </a>
        <span class="price">75 Lei</span>
        <a href="products/271" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/273" class="img-container">
          <img src="images/glutamine_compressed_caps.jpg" alt="glutamine_compressed_caps.jpg">
        </a>
        <a href="products/273" class="atext">
          <span>NUTREND <br> GLUTAMINE 120CAPS</span>
        </a>
        <span class="price">40 Lei</span>
        <a href="products/273" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/275" class="img-container">
          <img src="images/nutrend_glutamine _mega_strong_powder.jpg" alt="nutrend_glutamine _mega_strong_powder.jpg">
        </a>
        <a href="products/275" class="atext">
          <span>NUTREND <br> MEGA STRONG POWDER 500GR</span>
        </a>
        <span class="price">100 Lei</span>
        <a href="products/275" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/277" class="img-container">
          <img src="images/l-glutamine-6000-pure.jpg" alt="l-glutamine-6000-pure.jpg">
        </a>
        <a href="products/277" class="atext">
          <span>QNT <br> L-GLUTAMINE 6000 PURE 500GR</span>
        </a>
        <span class="price">77 Lei</span>
        <a href="products/277" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/279" class="img-container">
          <img src="images/muscletech_glutamina.jpg" alt="muscletech_glutamina.jpg">
        </a>
        <a href="products/279" class="atext">
          <span>MUSCLETECH <br> PLATINUM 100 GLUTAMINE 300GR</span>
        </a>
        <span class="price">80 Lei</span>
        <a href="products/279" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
    </div>
    <br><br><br>
@endsection

@section('layouts.footer')

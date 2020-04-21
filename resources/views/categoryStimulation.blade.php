{{-- asset() helper is used to generate urls to assets from the public directory --}}
<link rel="stylesheet" href="{{asset('css/app.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">


@extends('layouts.app')

@section('title')

@section('content')
    <h1 style="color: white;">STIMULATION</h1>
    <br><br><br>
    <div class="row">
      <div class="product-box">
        <a href="products/393" class="img-container">
          <img src="images/a-hd_elite.jpeg" alt="a-hd_elite.jpeg">
        </a>
        <a href="products/393" class="atext">
          <span>BPI SPORTS <br> A-HD ELITE 30CAPS</span>
        </a>
        <span class="price">115 Lei</span>
        <a href="products/393" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/395" class="img-container">
          <img src="images/animal_m_stak.png" alt="animal_m_stak.png">
        </a>
        <a href="products/395" class="atext">
          <span>UNIVERSAL <br> ANIMAL M-STAK 21PAC</span>
        </a>
        <span class="price">180 Lei</span>
        <a href="products/395" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/399" class="img-container">
          <img src="images/nutrend_hmb4500.jpg" alt="nutrend_hmb4500.jpg">
        </a>
        <a href="products/399" class="atext">
          <span>NUTREND <br> HMB 4500</span>
        </a>
        <span class="price">60 Lei</span>
        <a href="products/399" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/401" class="img-container">
          <img src="images/universal_natural_sterol_complex.jpg" alt="universal_natural_sterol_complex.jpg">
        </a>
        <a href="products/401" class="atext">
          <span>UNIVERSAL <br> NATURAL STEROL COMPLEX 180TABS</span>
        </a>
        <span class="price">120 Lei</span>
        <a href="products/401" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/403" class="img-container">
          <img src="images/universal_natural_sterol_complex.jpg" alt="universal_natural_sterol_complex.jpg">
        </a>
        <a href="products/403" class="atext">
          <span>UNIVERSAL <br> NATURAL STEROL COMPLEX 90TABS</span>
        </a>
        <span class="price">70 Lei</span>
        <a href="products/403" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/405" class="img-container">
          <img src="images/muscletech_tribulus.jpg" alt="muscletech_tribulus.jpg">
        </a>
        <a href="products/405" class="atext">
          <span>MUSCLETECH <br>TRIBULUS 100CAPS</span>
        </a>
        <span class="price">70 Lei</span>
        <a href="products/405" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/407" class="img-container">
          <img src="images/testek.jpg" alt="testek.jpg">
        </a>
        <a href="products/407" class="atext">
          <span>QNT <br> TESTEK 120CAPS</span>
        </a>
        <span class="price">100 Lei</span>
        <a href="products/407" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/409" class="img-container">
          <img src="images/tribulus.jpg" alt="tribulus.jpg">
        </a>
        <a href="products/409" class="atext">
          <span>QNT <br> TRIBULUS 60CAPS</span>
        </a>
        <span class="price">35 Lei</span>
        <a href="products/409" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/411" class="img-container">
          <img src="images/nutrend_zma.jpg" alt="nutrend_zma.jpg">
        </a>
        <a href="products/411" class="atext">
          <span>NUTREND <br> ZMA 120CAPS</span>
        </a>
        <span class="price">75 Lei</span>
        <a href="products/411" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
    </div>
    <br><br><br>
@endsection

@section('layouts.footer')

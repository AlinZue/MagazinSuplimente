{{-- asset() helper is used to generate urls to assets from the public directory --}}
<link rel="stylesheet" href="{{asset('css/app.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">


@extends('layouts.app')

@section('title')

@section('content')
    <h1 style="color: white;">UNIVERSAL NUTRITION</h1>
    <br><br><br>
    <div class="row">
      <div class="product-box">
        <a href="products/40" class="img-container">
          <img src="images/universal_amino_2700.jpg" alt="universal_amino_2700.jpg">
        </a>
        <a href="products/40" class="atext">
          <span>AMINO 2700 - 350 TABLETE</span>
        </a>
        <span class="price">135 Lei</span>
        <a href="products/40" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/303" class="img-container">
          <img src="images/animal_meal.jpg" alt="animal_meal.jpg">
        </a>
        <a href="products/303" class="atext">
          <span>MEAL 2.27KG</span>
        </a>
        <span class="price">200 Lei</span>
        <a href="products/303" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/321" class="img-container">
          <img src="images/universal_animal_flex.jpg" alt="universal_animal_flex.jpg">
        </a>
        <a href="products/321" class="atext">
          <span>ANIMAL FLEX</span>
        </a>
        <span class="price">135 Lei</span>
        <a href="products/321" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/323" class="img-container">
          <img src="images/animal_flex_pudra.jpg" alt="animal_flex_pudra.jpg">
        </a>
        <a href="products/323" class="atext">
          <span>ANIMAL FLEX POWDER 381G</span>
        </a>
        <span class="price">105 Lei</span>
        <a href="products/323" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/337" class="img-container">
          <img src="images/universal_animal_cuts.jpg" alt="universal_animal_cuts.jpg">
        </a>
        <a href="products/337" class="atext">
          <span>ANIMAL CUTS 42PACHETE</span>
        </a>
        <span class="price">180 Lei</span>
        <a href="products/337" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/82" class="img-container">
          <img src="images/beef_universal.jpg" alt="beef_universal.jpg">
        </a>
        <a href="products/82" class="atext">
          <span>BEEF AMINOS 200 TABLETE</span>
        </a>
        <span class="price">55 Lei</span>
        <a href="products/82" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/85" class="img-container">
          <img src="images/beef_universal.jpg" alt="beef_universal.jpg">
        </a>
        <a href="products/85" class="atext">
          <span>BEEF AMINOS 400 TABLETE</span>
        </a>
        <span class="price">100 Lei</span>
        <a href="products/85" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/122" class="img-container">
          <img src="images/animal_whey.jpg" alt="animal_whey.jpg">
        </a>
        <a href="products/122" class="atext">
          <span>ANIMAL WHEY 1.8KG</span>
        </a>
        <span class="price">230 Lei</span>
        <a href="products/122" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/395" class="img-container">
          <img src="images/animal_m_stak.png" alt="animal_m_stak.png">
        </a>
        <a href="products/395" class="atext">
          <span>ANIMAL M-STAK 21PACHETE</span>
        </a>
        <span class="price">180 Lei</span>
        <a href="products/395" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/401" class="img-container">
          <img src="images/universal_natural_sterol_complex.jpg" alt="universal_natural_sterol_complex.jpg">
        </a>
        <a href="products/401" class="atext">
          <span>NATURAL STEROL COMPLEX 180 TABLETE</span>
        </a>
        <span class="price">120 Lei</span>
        <a href="products/401" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/403" class="img-container">
          <img src="images/universal_natural_sterol_complex.jpg" alt="universal_natural_sterol_complex.jpg">
        </a>
        <a href="products/403" class="atext">
          <span>NATURAL STEROL COMPLEX 90 TABLETE</span>
        </a>
        <span class="price">70 Lei</span>
        <a href="products/403" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/417" class="img-container">
          <img src="images/universal_daily_formula.png" alt="universal_daily_formula.png">
        </a>
        <a href="products/417" class="atext">
          <span>DAILY FORMULA 100 CAPSULE</span>
        </a>
        <span class="price">40 Lei</span>
        <a href="products/417" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/178" class="img-container">
          <img src="images/universal_whey.jpg" alt="universal_whey.jpg">
        </a>
        <a href="products/178" class="atext">
          <span>DAILY FORMULA 100 CAPSULE</span>
        </a>
        <span class="price">220 Lei</span>
        <a href="products/178" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/211" class="img-container">
          <img src="images/universal_animal_pump.jpg" alt="universal_animal_pump.jpg">
        </a>
        <a href="products/211" class="atext">
          <span>ANIMAL PUMP 30PACHETE</span>
        </a>
        <span class="price">180 Lei</span>
        <a href="products/211" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
    </div>
    <br><br><br>
@endsection

@section('layouts.footer')

{{-- asset() helper is used to generate urls to assets from the public directory --}}
<link rel="stylesheet" href="{{asset('css/app.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">


@extends('layouts.app')

@section('title')

@section('content')
    <h1 style="color: white;">OPTIMUM NUTRITION</h1>
    <br><br><br>
    <div class="row">
      <div class="product-box">
        <a href="products/289" class="img-container">
          <img src="images/gold_gainer.jpg" alt="gold_gainer.jpg">
        </a>
        <a href="products/289" class="atext">
          <span>GOLD STANDARD GAINER 3.25 KG</span>
        </a>
        <span class="price">220 Lei</span>
        <a href="products/289" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/313" class="img-container">
          <img src="images/serious_mass.jpg" alt="serious_mass.jpg">
        </a>
        <a href="products/313" class="atext">
          <span>SERIOUS MASS 5.4KG</span>
        </a>
        <span class="price">210 Lei</span>
        <a href="products/313" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/106" class="img-container">
          <img src="images/whey_gold_on.jpg" alt="whey_gold_on.jpg">
        </a>
        <a href="products/106" class="atext">
          <span>100% GOLD WHEY PROTEIN 2.27KG</span>
        </a>
        <span class="price">250 Lei</span>
        <a href="products/106" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/108" class="img-container">
          <img src="images/on_whey.jpg" alt="on_whey.jpg">
        </a>
        <a href="products/108" class="atext">
          <span>100% GOLD WHEY PROTEIN 454G</span>
        </a>
        <span class="price">60 Lei</span>
        <a href="products/108" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/431" class="img-container">
          <img src="images/opti_men.png" alt="opti_men.png">
        </a>
        <a href="products/431" class="atext">
          <span>OPTI MEN 180 TABLETE</span>
        </a>
        <span class="price">120 Lei</span>
        <a href="products/431" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/433" class="img-container">
          <img src="images/optimum_opti_men90tabs.jpg" alt="optimum_opti_men90tabs.jpg">
        </a>
        <a href="products/433" class="atext">
          <span>OPTI MEN 90 TABLETE</span>
        </a>
        <span class="price">70 Lei</span>
        <a href="products/433" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/435" class="img-container">
          <img src="images/opti_women.jpg" alt="opti_women.jpg">
        </a>
        <a href="products/435" class="atext">
          <span>OPTI WOMEN 60 CAPSULE</span>
        </a>
        <span class="price">70 Lei</span>
        <a href="products/435" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/185" class="img-container">
          <img src="images/optimum_cretine.jpg" alt="optimum_cretine.jpg">
        </a>
        <a href="products/185" class="atext">
          <span>CREATINE 317G</span>
        </a>
        <span class="price">50 Lei</span>
        <a href="products/185" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/451" class="img-container">
          <img src="images/fishoil.png" alt="fishoil.png">
        </a>
        <a href="products/451" class="atext">
          <span>FISH OIL 100 CAPSULE GELATINOASE</span>
        </a>
        <span class="price">70 Lei</span>
        <a href="products/451" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/453" class="img-container">
          <img style="weight: 150px; height:165px;" src="images/on_fish_oil.png" alt="on_fish_oil.png">
        </a>
        <a href="products/453" class="atext">
          <span>FISH OIL 200 SOFTGELS</span>
        </a>
        <span class="price">30 Lei</span>
        <a href="products/453" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/235" class="img-container">
          <img src="images/gold-standard-pre-workout.jpg" alt="gold-standard-pre-workout.jpg">
        </a>
        <a href="products/235" class="atext">
          <span>GOLD STANDARD PRE-WORKOUT 30 SERVIRI</span>
        </a>
        <span class="price">110 Lei</span>
        <a href="products/235" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
    </div>
    <br><br><br>
@endsection

@section('layouts.footer')

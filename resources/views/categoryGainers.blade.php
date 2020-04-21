{{-- asset() helper is used to generate urls to assets from the public directory --}}
<link rel="stylesheet" href="{{asset('css/app.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">


@extends('layouts.app')

@section('title')

@section('content')
    <h1 style="color: white;">GAINERS</h1>
    <br><br><br>
    <div class="row">
      <div class="product-box">
        <a href="products/281" class="img-container">
          <img src="images/nutrend_big.jpg" alt="nutrend_big.jpg">
        </a>
        <a href="products/281" class="atext">
          <span>NUTREND <br> COMPRESS B.I.G. 2.1KG</span>
        </a>
        <span class="price">150 Lei</span>
        <a href="products/281" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/283" class="img-container">
          <img src="images/compress_b.i.g._5000g.jpg" alt="compress_b.i.g._5000g.jpg">
        </a>
        <a href="products/283" class="atext">
          <span>NUTREND <br> COMPRESS B.I.G. 5KG</span>
        </a>
        <span class="price">260 Lei</span>
        <a href="products/283" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/287" class="img-container">
          <img src="images/oferta_delicious_n1.jpg" alt="oferta_delicious_n1.jpg">
        </a>
        <a href="products/287" class="atext">
          <span>QNT <br> DELICIOUS WHEY PROTEIN 2.2KG + N1-510 GR</span>
        </a>
        <span class="price">200 Lei</span>
        <a href="products/287" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/289" class="img-container">
          <img src="images/gold_gainer.jpg" alt="gold_gainer.jpg">
        </a>
        <a href="products/289" class="atext">
          <span>OPTIMUM <br> GOLD STANDARD GAINER 3.25KG</span>
        </a>
        <span class="price">220 Lei</span>
        <a href="products/289" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/291" class="img-container">
          <img src="images/nutrend_mass_gain1kg.jpg" alt="nutrend_mass_gain1kg.jpg">
        </a>
        <a href="products/291" class="atext">
          <span>NUTREND <br> MASS GAIN 1KG</span>
        </a>
        <span class="price">60 Lei</span>
        <a href="products/291" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/293" class="img-container">
          <img src="images/mass_gain14_6000g.jpg" alt="mass_gain14_6000g.jpg">
        </a>
        <a href="products/293" class="atext">
          <span>NUTREND <br> MASS GAIN 14 6KG</span>
        </a>
        <span class="price">185 Lei</span>
        <a href="products/293" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/295" class="img-container">
          <img src="images/nutrend_massgain.jpg" alt="nutrend_massgain.jpg">
        </a>
        <a href="products/295" class="atext">
          <span>NUTREND <br> MASS GAIN 2.25KG</span>
        </a>
        <span class="price">120 Lei</span>
        <a href="products/295" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/297" class="img-container">
          <img src="images/muscletech_mass-tech.png" alt="muscletech_mass-tech.png">
        </a>
        <a href="products/297" class="atext">
          <span>MUSCLETECH <br> MASS TECH 3.2KG</span>
        </a>
        <span class="price">200 Lei</span>
        <a href="products/297" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/299" class="img-container">
          <img src="images/image_skumt4910012_largeimage_x_450_white.jpg" alt="image_skumt4910012_largeimage_x_450_white.jpg">
        </a>
        <a href="products/299" class="atext">
          <span>MUSCLETECH <br> MASS TECH EXTREME 2000 3,42KG</span>
        </a>
        <span class="price">190 Lei</span>
        <a href="products/299" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/301" class="img-container">
          <img src="images/massive_mass.jpg" alt="massive_mass.jpg">
        </a>
        <a href="products/301" class="atext">
          <span>QNT <br> MASSIVE MASS 2.7KG</span>
        </a>
        <span class="price">140 Lei</span>
        <a href="products/301" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/303" class="img-container">
          <img src="images/animal_meal.jpg" alt="animal_meal.jpg">
        </a>
        <a href="products/303" class="atext">
          <span>UNIVERSAL <br> MEAL 2.27KG</span>
        </a>
        <span class="price">200 Lei</span>
        <a href="products/303" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/305" class="img-container">
          <img src="images/metapure-mass.jpg" alt="metapure-mass.jpg">
        </a>
        <a href="products/305" class="atext">
          <span>QNT <br> METAPURE MASS 1815G</span>
        </a>
        <span class="price">130 Lei</span>
        <a href="products/305" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/309" class="img-container">
          <img src="images/muscletech_premium_mass_gainer_v2.jpg" alt="muscletech_premium_mass_gainer_v2.jpg">
        </a>
        <a href="products/309" class="atext">
          <span>MUSCLETECH <br> PREMIUM MASS GAINER 5.44KG</span>
        </a>
        <span class="price">230 Lei</span>
        <a href="products/309" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/312" class="img-container">
          <img src="images/gaspari_real_mass_advanced.jpg" alt="gaspari_real_mass_advanced.jpg">
        </a>
        <a href="products/312" class="atext">
          <span>GASPARI <br> REAL MASS ADVANCED 5,4KG</span>
        </a>
        <span class="price">230 Lei</span>
        <a href="products/312" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/313" class="img-container">
          <img src="images/serious_mass.jpg" alt="serious_mass.jpg">
        </a>
        <a href="products/313" class="atext">
          <span>OPTIMUM <br> SERIOUS MASS 5.4KG</span>
        </a>
        <span class="price">210 Lei</span>
        <a href="products/313" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/315" class="img-container">
          <img src="images/bsn_syntha_6.jpg" alt="bsn_syntha_6.jpg">
        </a>
        <a href="products/315" class="atext">
          <span>BSN <br> SYNTHA-6 2.27KG</span>
        </a>
        <span class="price">195 Lei</span>
        <a href="products/315" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/317" class="img-container">
          <img src="images/bsn_true_mass.png" alt="bsn_true_mass.png">
        </a>
        <a href="products/317" class="atext">
          <span>BSN <br> TRUE MASS ALL-IN-ONE 4.2KG</span>
        </a>
        <span class="price">250 Lei</span>
        <a href="products/317" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/319" class="img-container">
          <img src="images/bsn_true_mass.jpg" alt="bsn_true_mass.jpg">
        </a>
        <a href="products/319" class="atext">
          <span>BSN <br> TRUE-MASS 2,61KG</span>
        </a>
        <span class="price">175 Lei</span>
        <a href="products/319" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
    </div>
    <br><br><br>
@endsection

@section('layouts.footer')

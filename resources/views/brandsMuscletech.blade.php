{{-- asset() helper is used to generate urls to assets from the public directory --}}
<link rel="stylesheet" href="{{asset('css/app.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">


@extends('layouts.app')

@section('title')

@section('content')
    <h1 style="color: white;">MUSCLETECH</h1>
    <br><br><br>
    <div class="row">
      <div class="product-box">
        <a href="products/256" class="img-container">
          <img src="images/muscletech_caffeina.jpeg" alt="muscletech_caffeina.jpeg">
        </a>
        <a href="products/256" class="atext">
          <span>PLATINUM 100% CAFFEINE 120 TABLETE</span>
        </a>
        <span class="price">40 Lei</span>
        <a href="products/256" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/258" class="img-container">
          <img src="images/muscletech_arginina.jpg" alt="muscletech_arginina.jpg">
        </a>
        <a href="products/258" class="atext">
          <span>PLATINUM 100% L-ARGININE 100 CAPSULE</span>
        </a>
        <span class="price">80 Lei</span>
        <a href="products/258" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/265" class="img-container">
          <img src="images/muscletech.png" alt="muscletech.png">
        </a>
        <a href="products/265" class="atext">
          <span>VAPOR X5 NEXT GEN 228G</span>
        </a>
        <span class="price">105 Lei</span>
        <a href="products/265" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/279" class="img-container">
          <img src="images/muscletech_glutamina.jpg" alt="muscletech_glutamina.jpg">
        </a>
        <a href="products/279" class="atext">
          <span>PLATINUM 100 GLUTAMINE 300G</span>
        </a>
        <span class="price">80 Lei</span>
        <a href="products/279" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/297" class="img-container">
          <img src="images/muscletech_mass-tech.png" alt="muscletech_mass-tech.png">
        </a>
        <a href="products/297" class="atext">
          <span>MASS TECH 3.2KG</span>
        </a>
        <span class="price">200 Lei</span>
        <a href="products/297" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/299" class="img-container">
          <img src="images/image_skumt4910012_largeimage_x_450_white.jpg" alt="image_skumt4910012_largeimage_x_450_white.jpg">
        </a>
        <a href="products/299" class="atext">
          <span>MASS TECH EXTREME 2000 - 3,42 KG</span>
        </a>
        <span class="price">190 Lei</span>
        <a href="products/299" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/48" class="img-container">
          <img src="images/amino_build_next_gen270.jpg" alt="amino_build_next_gen270.jpg">
        </a>
        <a href="products/48" class="atext">
          <span>AMINO BUILD NEXT GEN 270G</span>
        </a>
        <span class="price">120 Lei</span>
        <a href="products/48" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/309" class="img-container">
          <img src="images/muscletech_premium_mass_gainer_v2.jpg" alt="muscletech_premium_mass_gainer_v2.jpg">
        </a>
        <a href="products/309" class="atext">
          <span>PREMIUM MASS GAINER 5.44KG</span>
        </a>
        <span class="price">230 Lei</span>
        <a href="products/309" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/365" class="img-container">
          <img src="images/hydroxycut.jpg" alt="hydroxycut.jpg">
        </a>
        <a href="products/365" class="atext">
          <span>HYDROXYCUT HARDCORE NEXT GEN 100 CAPSULE</span>
        </a>
        <span class="price">145 Lei</span>
        <a href="products/365" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/367" class="img-container">
          <img src="images/hydroxycut_elite.jpg" alt="hydroxycut_elite.jpg">
        </a>
        <a href="products/367" class="atext">
          <span>HYDROXYCUT HC ELITE 100 CAPSULE</span>
        </a>
        <span class="price">120 Lei</span>
        <a href="products/367" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/381" class="img-container">
          <img src="images/muscletech_lcarnitina.jpg" alt="muscletech_lcarnitina.jpg">
        </a>
        <a href="products/381" class="atext">
          <span>PLATINUM 100% L-CARNITINE 180 CAPSULE</span>
        </a>
        <span class="price">80 Lei</span>
        <a href="products/381" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/383" class="img-container">
          <img src="images/muscletech_lcarnitina.jpg" alt="muscletech_lcarnitina.jpg">
        </a>
        <a href="products/383" class="atext">
          <span>PLATINUM 100% L-CARNITINE 60 CAPSULE</span>
        </a>
        <span class="price">50 Lei</span>
        <a href="products/383" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/405" class="img-container">
          <img src="images/muscletech_tribulus.jpg" alt="muscletech_tribulus.jpg">
        </a>
        <a href="products/405" class="atext">
          <span>PLATINUM 100% TRIBULUS 100 CAPSULE</span>
        </a>
        <span class="price">70 Lei</span>
        <a href="products/405" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/158" class="img-container">
          <img src="images/muscletech-nitro_tech_whey_gold.jpg" alt="muscletech-nitro_tech_whey_gold.jpg">
        </a>
        <a href="products/158" class="atext">
          <span>NITRO TECH 100% WHEY GOLD 2,5KG</span>
        </a>
        <span class="price">250 Lei</span>
        <a href="products/158" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/160" class="img-container">
          <img src="images/muscletech_nitro-tech.jpg" alt="muscletech_nitro-tech.jpg">
        </a>
        <a href="products/160" class="atext">
          <span>NITRO-TECH 1.8KG</span>
        </a>
        <span class="price">230 Lei</span>
        <a href="products/160" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/162" class="img-container">
          <img src="images/muscletech_nitro_ripped.jpg" alt="muscletech_nitro_ripped.jpg">
        </a>
        <a href="products/162" class="atext">
          <span>NITRO-TECH RIPPED 1.81KG</span>
        </a>
        <span class="price">250 Lei</span>
        <a href="products/162" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/181" class="img-container">
          <img src="images/cell_tech.jpg" alt="cell_tech.jpg">
        </a>
        <a href="products/181" class="atext">
          <span>CELL TECH 2.7KG</span>
        </a>
        <span class="price">180 Lei</span>
        <a href="products/181" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/437" class="img-container">
          <img src="images/muscletech_multivit.jpg" alt="muscletech_multivit.jpg">
        </a>
        <a href="products/437" class="atext">
          <span>PLATINUM MULTIVITAMIN 90 CAPSULE</span>
        </a>
        <span class="price">70 Lei</span>
        <a href="products/437" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/201" class="img-container">
          <img src="images/muscletech_creatine_2500.jpg" alt="muscletech_creatine_2500.jpg">
        </a>
        <a href="products/201" class="atext">
          <span>ESSENTIAL SERIES PLATINUM 100% CREATINE 2500</span>
        </a>
        <span class="price">55 Lei</span>
        <a href="products/201" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/205" class="img-container">
          <img src="images/muscletech_creatine.jpg" alt="muscletech_creatine.jpg">
        </a>
        <a href="products/205" class="atext">
          <span>PLATINUM 100% CREATINE 400G</span>
        </a>
        <span class="price">55 Lei</span>
        <a href="products/205" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
    </div>
    <br><br><br>
@endsection

@section('layouts.footer')

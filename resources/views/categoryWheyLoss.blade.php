{{-- asset() helper is used to generate urls to assets from the public directory --}}
<link rel="stylesheet" href="{{asset('css/app.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">


@extends('layouts.app')

@section('title')

@section('content')
    <h1 style="color: white;">WHEY LOSS</h1>
    <br><br><br>
    <div class="row">
      <div class="product-box">
        <a href="products/337" class="img-container">
          <img src="images/universal_animal_cuts.jpg" alt="universal_animal_cuts.jpg">
        </a>
        <a href="products/337" class="atext">
          <span>UNIVERSAL <br> ANIMAL CUTS 42PAC</span>
        </a>
        <span class="price">180 Lei</span>
        <a href="products/337" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/339" class="img-container">
          <img src="images/c4_ripped.jpg" alt="c4_ripped.jpg">
        </a>
        <a href="products/339" class="atext">
          <span>CELLUCOR <br> C4 RIPPED</span>
        </a>
        <span class="price">120 Lei</span>
        <a href="products/339" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/341" class="img-container">
          <img src="images/nutrend_carnitin_60000_synephrine.jpg" alt="nutrend_carnitin_60000_synephrine.jpg">
        </a>
        <a href="products/341" class="atext">
          <span>NUTREND <br> CARNITIN 60000</span>
        </a>
        <span class="price">70 Lei</span>
        <a href="products/341" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/343" class="img-container">
          <img src="images/carnitine_100 000_1l.jpg" alt="carnitine_100 000_1l.jpg">
        </a>
        <a href="products/343" class="atext">
          <span>NUTREND <br> CARNITINE 100000</span>
        </a>
        <span class="price">75 Lei</span>
        <a href="products/343" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/345" class="img-container">
          <img src="images/nutr_carnitine.jpg" alt="nutr_carnitine.jpg">
        </a>
        <a href="products/345" class="atext">
          <span>NUTREND <br> 2XCARNITINE 100000</span>
        </a>
        <span class="price">130 Lei</span>
        <a href="products/345" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/347" class="img-container">
          <img src="images/carnitine_3000_shot.jpg" alt="carnitine_3000_shot.jpg">
        </a>
        <a href="products/347" class="atext">
          <span>NUTREND <br> CARNITINE3000 SHOT 20X60ML</span>
        </a>
        <span class="price">90 Lei</span>
        <a href="products/347" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/349" class="img-container">
          <img src="images/carnitine_3000_shot.jpg" alt="carnitine_3000_shot.jpg">
        </a>
        <a href="products/349" class="atext">
          <span>NUTREND <br> CARNITINE 3000 SHOT 30X60ML</span>
        </a>
        <span class="price">120 Lei</span>
        <a href="products/349" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/351" class="img-container">
          <img src="images/nutrend_carnitine.jpg" alt="nutrend_carnitine.jpg">
        </a>
        <a href="products/351" class="atext">
          <span>NUTREND <br> CARNITINE ACTIVITY DRINK</span>
        </a>
        <span class="price">70 Lei</span>
        <a href="products/351" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/353" class="img-container">
          <img src="images/carnitine_compressde.png" alt="carnitine_compressde.png">
        </a>
        <a href="products/353" class="atext">
          <span>NUTREND <br> CARNITINE 120CAPS</span>
        </a>
        <span class="price">120 Lei</span>
        <a href="products/353" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/355" class="img-container">
          <img src="images/cla_carnitine.jpg" alt="cla_carnitine.jpg">
        </a>
        <a href="products/355" class="atext">
          <span>NUTREND <br> CLA CARNITINE POWDER 300GR</span>
        </a>
        <span class="price">120 Lei</span>
        <a href="products/355" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/357" class="img-container">
          <img src="images/fat_direct.jpg" alt="fat_direct.jpg">
        </a>
        <a href="products/357" class="atext">
          <span>NUTREN <br> DFAT DIRECT 60CAPS</span>
        </a>
        <span class="price">70 Lei</span>
        <a href="products/357" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/359" class="img-container">
          <img src="images/fatdirect_nutrend.jpg" alt="fatdirect_nutrend.jpg">
        </a>
        <a href="products/359" class="atext">
          <span>NUTREND <br> FAT DIRECT SHOT 20X60ML</span>
        </a>
        <span class="price">90 Lei</span>
        <a href="products/359" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/361" class="img-container">
          <img src="images/fatdirect_shot.jpg" alt="fatdirect_shot.jpg">
        </a>
        <a href="products/361" class="atext">
          <span>NUTREND <br> FAT DIRECT SHOT 60ML</span>
        </a>
        <span class="price">7 Lei</span>
        <a href="products/361" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/363" class="img-container">
          <img src="images/nutrend_fever.jpg" alt="nutrend_fever.jpg">
        </a>
        <a href="products/363" class="atext">
          <span>NUTREND <br> FEVER 120CAPS</span>
        </a>
        <span class="price">120 Lei</span>
        <a href="products/363" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/365" class="img-container">
          <img src="images/hydroxycut.jpg" alt="hydroxycut.jpg">
        </a>
        <a href="products/365" class="atext">
          <span>MUSCLETECH <br> HYDROXYCUT HARDCORE </span>
        </a>
        <span class="price">145 Lei</span>
        <a href="products/365" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/367" class="img-container">
          <img src="images/hydroxycut_elite.jpg" alt="hydroxycut_elite.jpg">
        </a>
        <a href="products/367" class="atext">
          <span>MUSCLETECH <br> HYDROXYCUT HC ELITE 100CAPS</span>
        </a>
        <span class="price">120 Lei</span>
        <a href="products/367" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/369" class="img-container">
          <img src="images/qnt_l-carnitine 2000mg.jpg" alt="qnt_l-carnitine 2000mg.jpg">
        </a>
        <a href="products/369" class="atext">
          <span>QNT <br> L-CARNITINE 2000 12X700ML</span>
        </a>
        <span class="price">100 Lei</span>
        <a href="products/369" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/371" class="img-container">
          <img src="images/l-carnitine-caps.jpg" alt="l-carnitine-caps.jpg">
        </a>
        <a href="products/371" class="atext">
          <span>QNT <br> L-CARNITINE 60CAPS</span>
        </a>
        <span class="price">45 Lei</span>
        <a href="products/371" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/373" class="img-container">
          <img src="images/qnt_carnitine.jpg" alt="qnt_carnitine.jpg">
        </a>
        <a href="products/373" class="atext">
          <span>QNT <br>L-CARNITINE LIQUID 500ML</span>
        </a>
        <span class="price">45 Lei</span>
        <a href="products/373" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/375" class="img-container">
          <img src="images/carnitine_12shot.jpg" alt="carnitine_12shot.jpg">
        </a>
        <a href="products/375" class="atext">
          <span>QNT <br>L-CARNITINE SHOT 12X80ML</span>
        </a>
        <span class="price">50 Lei</span>
        <a href="products/375" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/377" class="img-container">
          <img src="images/easy_body_lipitek.jpg" alt="easy_body_lipitek.jpg">
        </a>
        <a href="products/377" class="atext">
          <span>QNT <br> LIPITEK 90CAPS</span>
        </a>
        <span class="price">60 Lei</span>
        <a href="products/377" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/379" class="img-container">
          <img src="images/qnt_lcarnitine.png" alt="qnt_lcarnitine.png">
        </a>
        <a href="products/379" class="atext">
          <span>MUSCLETECH <br>MAXI L-CARNITINE 90TABS</span>
        </a>
        <span class="price">80 Lei</span>
        <a href="products/379" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/381" class="img-container">
          <img src="images/muscletech_lcarnitina.jpg" alt="muscletech_lcarnitina.jpg">
        </a>
        <a href="products/381" class="atext">
          <span>MUSCLETECH <br>L-CARNITINE 180CAPS</span>
        </a>
        <span class="price">80 Lei</span>
        <a href="products/381" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/383" class="img-container">
          <img src="images/muscletech_lcarnitina.jpg" alt="muscletech_lcarnitina.jpg">
        </a>
        <a href="products/383" class="atext">
          <span>MUSCLETECH <br>L-CARNITINE 60CAPS</span>
        </a>
        <span class="price">50 Lei</span>
        <a href="products/383" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/385" class="img-container">
          <img src="images/thermo-booster-actif-by-juice.jpg" alt="thermo-booster-actif-by-juice.jpg">
        </a>
        <a href="products/385" class="atext">
          <span>QNT <br> THERMO BOOSTER 12X700ML</span>
        </a>
        <span class="price">96 Lei</span>
        <a href="products/385" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/389" class="img-container">
          <img src="images/synephrine_nutrend.jpg" alt="synephrine_nutrend.jpg">
        </a>
        <a href="products/389" class="atext">
          <span>NUTREND <br> SYNEPHRINE 60CAPS</span>
        </a>
        <span class="price">35 Lei</span>
        <a href="products/389" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/391" class="img-container">
          <img src="images/water-less.jpg" alt="water-less.jpg">
        </a>
        <a href="products/391" class="atext">
          <span>QNT <br> WATER LESS 90CAPS</span>
        </a>
        <span class="price">60 Lei</span>
        <a href="products/391" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
    </div>
    <br><br><br>
@endsection

@section('layouts.footer')

{{-- asset() helper is used to generate urls to assets from the public directory --}}
<link rel="stylesheet" href="{{asset('css/app.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">


@extends('layouts.app')

@section('title')

@section('content')
    <h1 style="color: white;">NUTREND</h1>
    <br><br><br>
    <div class="row">
      <div class="product-box">
        <a href="products/261" class="img-container">
          <img src="images/turbosnack.jpg" alt="turbosnack.jpg">
        </a>
        <a href="products/261" class="atext">
          <span>TURBOSNACK 25 ML</span>
        </a>
        <span class="price">7 Lei</span>
        <a href="products/261" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/6" class="img-container">
          <img src="images/nutrend_bidon_1l.jpg" alt="nutrend_bidon_1l.jpg">
        </a>
        <a href="products/6" class="atext">
          <span>BIDON 1000 ML</span>
        </a>
        <span class="price">20 Lei</span>
        <a href="products/6" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/263" class="img-container">
          <img src="images/tyrosine.jpg" alt="tyrosine.jpg">
        </a>
        <a href="products/263" class="atext">
          <span>TYROSINE 120 CAPSULE</span>
        </a>
        <span class="price">55 Lei</span>
        <a href="products/263" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/267" class="img-container">
          <img src="images/nutrend_vo2_boost.jpg" alt="nutrend_vo2_boost.jpg">
        </a>
        <a href="products/267" class="atext">
          <span>VO2 BOOST 60 TABLETE</span>
        </a>
        <span class="price">55 Lei</span>
        <a href="products/267" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/269" class="img-container">
          <img src="images/nutrend_glutamine_300g.jpg" alt="nutrend_glutamine_300g.jpg">
        </a>
        <a href="products/269" class="atext">
          <span>GLUTAMINE 300 GR</span>
        </a>
        <span class="price">55 Lei</span>
        <a href="products/269" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/271" class="img-container">
          <img src="images/nutrend_glutamine_500g.jpg" alt="nutrend_glutamine_500g.jpg">
        </a>
        <a href="products/271" class="atext">
          <span>GLUTAMINE 500 GR</span>
        </a>
        <span class="price">75 Lei</span>
        <a href="products/271" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/273" class="img-container">
          <img src="images/glutamine_compressed_caps.jpg" alt="glutamine_compressed_caps.jpg">
        </a>
        <a href="products/273" class="atext">
          <span>GLUTAMINE COMPRESSED CAPS 120 CAPSULE</span>
        </a>
        <span class="price">40 Lei</span>
        <a href="products/273" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/275" class="img-container">
          <img src="images/nutrend_glutamine _mega_strong_powder.jpg" alt="nutrend_glutamine _mega_strong_powder.jpg">
        </a>
        <a href="products/275" class="atext">
          <span>GLUTAMINE MEGA STRONG POWDER 500G</span>
        </a>
        <span class="price">100 Lei</span>
        <a href="products/275" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/281" class="img-container">
          <img src="images/nutrend_big.jpg" alt="nutrend_big.jpg">
        </a>
        <a href="products/281" class="atext">
          <span>COMPRESS B.I.G. 2.1 KG</span>
        </a>
        <span class="price">150 Lei</span>
        <a href="products/281" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/283" class="img-container">
          <img src="images/compress_b.i.g._5000g.jpg" alt="compress_b.i.g._5000g.jpg">
        </a>
        <a href="products/283" class="atext">
          <span>COMPRESS B.I.G. 5 KG</span>
        </a>
        <span class="price">260 Lei</span>
        <a href="products/283" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/32" class="img-container">
          <img src="images/nutrend_shaker.png" alt="nutrend_shaker.png">
        </a>
        <a href="products/32" class="atext">
          <span>SHAKER +</span>
        </a>
        <span class="price">40 Lei</span>
        <a href="products/32" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/291" class="img-container">
          <img src="images/nutrend_mass_gain1kg.jpg" alt="nutrend_mass_gain1kg.jpg">
        </a>
        <a href="products/291" class="atext">
          <span>MASS GAIN 1 KG</span>
        </a>
        <span class="price">60 Lei</span>
        <a href="products/291" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/36" class="img-container">
          <img src="images/nutrend_bottle.jpg" alt="nutrend_bottle.jpg">
        </a>
        <a href="products/36" class="atext">
          <span>SPORT BOTTLE 1000ML</span>
        </a>
        <span class="price">25 Lei</span>
        <a href="products/36" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/293" class="img-container">
          <img src="images/mass_gain14_6000g.jpg" alt="mass_gain14_6000g.jpg">
        </a>
        <a href="products/293" class="atext">
          <span>MASS GAIN 14 - 6KG</span>
        </a>
        <span class="price">185 Lei</span>
        <a href="products/293" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/295" class="img-container">
          <img src="images/nutrend_massgain.jpg" alt="nutrend_massgain.jpg">
        </a>
        <a href="products/295" class="atext">
          <span>MASS GAIN 2.25 KG</span>
        </a>
        <span class="price">120 Lei</span>
        <a href="products/295" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/52" class="img-container">
          <img src="images/amino_power_liquid_1l.jpg" alt="amino_power_liquid_1l.jpg">
        </a>
        <a href="products/52" class="atext">
          <span>AMINO POWER LIQUID 1L</span>
        </a>
        <span class="price">90 Lei</span>
        <a href="products/52" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/54" class="img-container">
          <img src="images/amino-power-liquid_500l.jpg" alt="amino-power-liquid_500l.jpg">
        </a>
        <a href="products/54" class="atext">
          <span>AMINO POWER LIQUID 500ML</span>
        </a>
        <span class="price">50 Lei</span>
        <a href="products/54" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/62" class="img-container">
          <img src="images/nutrend_bcaa_411.jpg" alt="nutrend_bcaa_411.jpg">
        </a>
        <a href="products/62" class="atext">
          <span>BCAA 4:1:1 - 300 TABLETE</span>
        </a>
        <span class="price">180 Lei</span>
        <a href="products/62" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/66" class="img-container">
          <img src="images/nut_bcaa_330ml.jpg" alt="nut_bcaa_330ml.jpg">
        </a>
        <a href="products/66" class="atext">
          <span>BCAA ENERGY 330ML</span>
        </a>
        <span class="price">9 Lei</span>
        <a href="products/66" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/68" class="img-container">
          <img src="images/nutrend_bcaa_energy500g.jpg" alt="nutrend_bcaa_energy500g.jpg">
        </a>
        <a href="products/68" class="atext">
          <span>BCAA ENERGY MEGA STRONG 500G</span>
        </a>
        <span class="price">120 Lei</span>
        <a href="products/68" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/325" class="img-container">
          <img src="images/nutrend-flexit-gelacoll-izuletved-180-kapsz.jpg" alt="nutrend-flexit-gelacoll-izuletved-180-kapsz.jpg">
        </a>
        <a href="products/325" class="atext">
          <span>FLEXIT DRINK 400 GR</span>
        </a>
        <span class="price">55 Lei</span>
        <a href="products/325" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/70" class="img-container">
          <img src="images/nutrend_bcaa_lichid_1l.jpg" alt="nutrend_bcaa_lichid_1l.jpg">
        </a>
        <a href="products/70" class="atext">
          <span>BCAA LIQUID 1000ML</span>
        </a>
        <span class="price">70 Lei</span>
        <a href="products/70" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/327" class="img-container">
          <img src="images/nutrend-flexit-gelacoll-izuletved-180-kapsz.jpg" alt="nutrend-flexit-gelacoll-izuletved-180-kapsz.jpg">
        </a>
        <a href="products/327" class="atext">
          <span>FLEXIT GELACOLL 180 CAPSUL</span>
        </a>
        <span class="price">30 Lei</span>
        <a href="products/327" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/72" class="img-container">
          <img src="images/nutrend_bcaa_liquid_500ml.jpg" alt="nutrend_bcaa_liquid_500ml.jpg">
        </a>
        <a href="products/72" class="atext">
          <span>BCAA LIQUID 500ML</span>
        </a>
        <span class="price">40 Lei</span>
        <a href="products/72" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/74" class="img-container">
          <img src="images/nutrend_bcaa_shot_x20.jpg" alt="nutrend_bcaa_shot_x20.jpg">
        </a>
        <a href="products/74" class="atext">
          <span>BCAA LIQUID SHOT 20 SHOT-URI X 60ML</span>
        </a>
        <span class="price">75 Lei</span>
        <a href="products/74" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/330" class="img-container">
          <img src="images/nutrend-flexit-gelacoll-izuletved-180-kapsz.jpg" alt="nutrend-flexit-gelacoll-izuletved-180-kapsz.jpg">
        </a>
        <a href="products/330" class="atext">
          <span>FLEXIT GELACOLL 360 CAPSULE</span>
        </a>
        <span class="price">55 Lei</span>
        <a href="products/330" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/331" class="img-container">
          <img src="images/flexit_gold.jpg" alt="flexit_gold.jpg">
        </a>
        <a href="products/331" class="atext">
          <span>FLEXIT GOLD DRINK 400GR</span>
        </a>
        <span class="price">75 Lei</span>
        <a href="products/331" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/76" class="img-container">
          <img src="images/nutrend_bcaa_shot.jpg" alt="nutrend_bcaa_shot.jpg">
        </a>
        <a href="products/76" class="atext">
          <span>BCAA LIQUID SHOT 60ML</span>
        </a>
        <span class="price">7 Lei</span>
        <a href="products/76" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/341" class="img-container">
          <img src="images/nutrend_carnitin_60000_synephrine.jpg" alt="nutrend_carnitin_60000_synephrine.jpg">
        </a>
        <a href="products/341" class="atext">
          <span>CARNITIN 60000 + SYNEPHRINE 500 ML</span>
        </a>
        <span class="price">70 Lei</span>
        <a href="products/341" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/343" class="img-container">
          <img src="images/carnitine_100 000_1l.jpg" alt="carnitine_100 000_1l.jpg">
        </a>
        <a href="products/343" class="atext">
          <span>CARNITINE 100000 - 1L</span>
        </a>
        <span class="price">75 Lei</span>
        <a href="products/343" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/345" class="img-container">
          <img src="images/nutr_carnitine.jpg" alt="nutr_carnitine.jpg">
        </a>
        <a href="products/345" class="atext">
          <span>CARNITINE 2X CARNITINE 100000 1L</span>
        </a>
        <span class="price">130 Lei</span>
        <a href="products/345" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/347" class="img-container">
          <img src="images/carnitine_3000_shot.jpg" alt="carnitine_3000_shot.jpg">
        </a>
        <a href="products/347" class="atext">
          <span>CARNITINE 3000 SHOT 20 SHOT-URI X 60 ML</span>
        </a>
        <span class="price">980 Lei</span>
        <a href="products/347" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/92" class="img-container">
          <img src="images/nut_voltage.jpg" alt="nut_voltage.jpg">
        </a>
        <a href="products/92" class="atext">
          <span>VOLTAGE ENERGY CAKE 65 GR</span>
        </a>
        <span class="price">7 Lei</span>
        <a href="products/92" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/349" class="img-container">
          <img src="images/carnitine_3000_shot.jpg" alt="carnitine_3000_shot.jpg">
        </a>
        <a href="products/349" class="atext">
          <span>CARNITINE 3000 SHOT 30 SHOT-URI X 60 ML</span>
        </a>
        <span class="price">120 Lei</span>
        <a href="products/349" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/351" class="img-container">
          <img src="images/nutrend_carnitine.jpg" alt="nutrend_carnitine.jpg">
        </a>
        <a href="products/351" class="atext">
          <span>CARNITINE ACTIVITY DRINK 8 STICLE X 750 ML</span>
        </a>
        <span class="price">70 Lei</span>
        <a href="products/351" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/353" class="img-container">
          <img src="images/carnitine_compressde.png" alt="carnitine_compressde.png">
        </a>
        <a href="products/353" class="atext">
          <span>CARNITINE COMPRESSED CAPS 120 CAPSULE</span>
        </a>
        <span class="price">120 Lei</span>
        <a href="products/353" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/355" class="img-container">
          <img src="images/cla_carnitine.jpg" alt="cla_carnitine.jpg">
        </a>
        <a href="products/355" class="atext">
          <span>CLA CARNITINE POWDER 300G</span>
        </a>
        <span class="price">120 Lei</span>
        <a href="products/355" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/100" class="img-container">
          <img src="images/protein_bar.jpg" alt="protein_bar.jpg">
        </a>
        <a href="products/100" class="atext">
          <span>PROTEIN BAR 24 BATOANE X 55GR</span>
        </a>
        <span class="price">90 Lei</span>
        <a href="products/100" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/357" class="img-container">
          <img src="images/fat_direct.jpg" alt="fat_direct.jpg">
        </a>
        <a href="products/357" class="atext">
          <span>FAT DIRECT 60 CAPSULE</span>
        </a>
        <span class="price">70 Lei</span>
        <a href="products/357" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/102" class="img-container">
          <img src="images/protein-bar-kokos-en.jpg" alt="protein-bar-kokos-en.jpg">
        </a>
        <a href="products/102" class="atext">
          <span>PROTEIN BAR 55GR</span>
        </a>
        <span class="price">5 Lei</span>
        <a href="products/102" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/359" class="img-container">
          <img src="images/fatdirect_nutrend.jpg" alt="fatdirect_nutrend.jpg">
        </a>
        <a href="products/359" class="atext">
          <span>FAT DIRECT SHOT 20X 60ML</span>
        </a>
        <span class="price">90 Lei</span>
        <a href="products/359" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/104" class="img-container">
          <img src="images/nutrend_beef_protein.jpg" alt="nutrend_beef_protein.jpg">
        </a>
        <a href="products/104" class="atext">
          <span>100% BEEF PROTEIN 900G</span>
        </a>
        <span class="price">110 Lei</span>
        <a href="products/104" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/361" class="img-container">
          <img src="images/fatdirect_shot.jpg" alt="fatdirect_shot.jpg">
        </a>
        <a href="products/361" class="atext">
          <span>FAT DIRECT SHOT 60ML</span>
        </a>
        <span class="price">7 Lei</span>
        <a href="products/361" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/363" class="img-container">
          <img src="images/nutrend_fever.jpg" alt="nutrend_fever.jpg">
        </a>
        <a href="products/363" class="atext">
          <span>FEVER 120 CAPSULE</span>
        </a>
        <span class="price">120 Lei</span>
        <a href="products/363" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/110" class="img-container">
          <img src="images/whey_isolate_900g.jpg" alt="whey_isolate_900g.jpg">
        </a>
        <a href="products/110" class="atext">
          <span>100% WHEY ISOLATE 900G</span>
        </a>
        <span class="price">120 Lei</span>
        <a href="products/110" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/112" class="img-container">
          <img src="images/1582244543.jpg" alt="1582244543.jpg">
        </a>
        <a href="products/112" class="atext">
          <span style="weight: 185px;">WHEY PROTEIN + BCAA MEGA STRONG</span>
        </a>
        <span class="price">180 Lei</span>
        <a href="products/112" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/116" class="img-container">
          <img src="images/nutrend_whey.jpg" alt="nutrend_whey.jpg">
        </a>
        <a href="products/116" class="atext">
          <span>100% WHEY PROTEIN 500G</span>
        </a>
        <span class="price">55 Lei</span>
        <a href="products/116" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/118" class="img-container">
          <img src="images/after_training.png" alt="after_training.png">
        </a>
        <a href="products/118" class="atext">
          <span>AFTER TRAINING PROTEIN 2520gr</span>
        </a>
        <span class="price">210 Lei</span>
        <a href="products/118" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/120" class="img-container">
          <img src="images/after training 540.png" alt="after training 540.png">
        </a>
        <a href="products/120" class="atext">
          <span>AFTER TRAINING PROTEIN 540G</span>
        </a>
        <span class="price">55 Lei</span>
        <a href="products/120" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/132" class="img-container">
          <img src="images/hydro_whey_1600g.jpg" alt="hydro_whey_1600g.jpg">
        </a>
        <a href="products/132" class="atext">
          <span>NUTREND HYDRO WHEY 1.6KG</span>
        </a>
        <span class="price">200 Lei</span>
        <a href="products/132" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/389" class="img-container">
          <img src="images/synephrine_nutrend.jpg" alt="synephrine_nutrend.jpg">
        </a>
        <a href="products/389" class="atext">
          <span>SYNEPHRINE 60 CAPSULE</span>
        </a>
        <span class="price">35 Lei</span>
        <a href="products/389" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/134" class="img-container">
          <img src="images/hydro_whey_800g.jpg" alt="hydro_whey_800g.jpg">
        </a>
        <a href="products/134" class="atext">
          <span>NUTREND HYDRO WHEY 800G</span>
        </a>
        <span class="price">115 Lei</span>
        <a href="products/134" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/142" class="img-container">
          <img src="images/nutrend_long_protein_1kg.jpg" alt="nutrend_long_protein_1kg.jpg">
        </a>
        <a href="products/142" class="atext">
          <span>LONG PROTEIN 1KG</span>
        </a>
        <span class="price">105 Lei</span>
        <a href="products/142" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/399" class="img-container">
          <img src="images/nutrend_hmb4500.jpg" alt="nutrend_hmb4500.jpg">
        </a>
        <a href="products/399" class="atext">
          <span>HMB 4500</span>
        </a>
        <span class="price">60 Lei</span>
        <a href="products/399" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/144" class="img-container">
          <img src="images/nutrend_long_protein.jpg" alt="nutrend_long_protein.jpg">
        </a>
        <a href="products/144" class="atext">
          <span>LONG PROTEIN 2,2KG</span>
        </a>
        <span class="price">180 Lei</span>
        <a href="products/144" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/152" class="img-container">
          <img src="images/nutrend_micellar_casein.jpg" alt="nutrend_micellar_casein.jpg">
        </a>
        <a href="products/152" class="atext">
          <span>MICELLAR CASEIN 2,25KG</span>
        </a>
        <span class="price">230 Lei</span>
        <a href="products/152" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/154" class="img-container">
          <img src="images/nutrend_micellar casein 900g.jpg" alt="nutrend_micellar casein 900g.jpg">
        </a>
        <a href="products/154" class="atext">
          <span>MICELLAR CASEIN 900G</span>
        </a>
        <span class="price">110 Lei</span>
        <a href="products/154" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/411" class="img-container">
          <img src="images/nutrend_zma.jpg" alt="nutrend_zma.jpg">
        </a>
        <a href="products/411" class="atext">
          <span>ZMA 120 CAPSULE</span>
        </a>
        <span class="price">75 Lei</span>
        <a href="products/411" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/423" class="img-container">
          <img src="images/nutrend_magneslife.jpg" alt="nutrend_magneslife.jpg">
        </a>
        <a href="products/423" class="atext">
          <span>MAGNESLIFE 10FIOLE X 25 ML</span>
        </a>
        <span class="price">35 Lei</span>
        <a href="products/423" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/425" class="img-container">
          <img src="images/magnes.jpg" alt="magnes.jpg">
        </a>
        <a href="products/425" class="atext">
          <span>MAGNESLIFE ACTIVE DRINK 15G</span>
        </a>
        <span class="price">3 Lei</span>
        <a href="products/425" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/427" class="img-container">
          <img src="images/nutrend_multimineral.jpg" alt="nutrend_multimineral.jpg">
        </a>
        <a href="products/427" class="atext">
          <span>MULTIMINERAL COMPRESSED CAPS 60 CAPSULE</span>
        </a>
        <span class="price">40 Lei</span>
        <a href="products/427" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/172" class="img-container">
          <img src="images/pancake_protein_750g_chocolate_cocoa_logo.jpg" alt="pancake_protein_750g_chocolate_cocoa_logo.jpg">
        </a>
        <a href="products/172" class="atext">
          <span>PROTEIN PANCAKE 750GR</span>
        </a>
        <span class="price">55 Lei</span>
        <a href="products/172" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/183" class="img-container">
          <img src="images/nutrend_creaport.jpg" alt="nutrend_creaport.jpg">
        </a>
        <a href="products/183" class="atext">
          <span>CREAPORT 600G</span>
        </a>
        <span class="price">55 Lei</span>
        <a href="products/183" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/187" class="img-container">
          <img src="images/nutrend_creatine_compressed_caps.jpg" alt="nutrend_creatine_compressed_caps.jpg">
        </a>
        <a href="products/187" class="atext">
          <span>CREATINE COMPRESSED CAPS 120 CAPSULE</span>
        </a>
        <span class="price">55 Lei</span>
        <a href="products/187" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/444" class="img-container">
          <img src="images/vit_c.png" alt="vit_c.png">
        </a>
        <a href="products/444" class="atext">
          <span>VITAMIN C 100 TABLETE</span>
        </a>
        <span class="price">25 Lei</span>
        <a href="products/444" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/191" class="img-container">
          <img src="images/creatine_mega_strong_nutrend.jpg" alt="creatine_mega_strong_nutrend.jpg">
        </a>
        <a href="products/191" class="atext">
          <span>CREATINE MEGA STRONG POWDER 500G</span>
        </a>
        <span class="price">100 Lei</span>
        <a href="products/191" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/449" class="img-container">
          <img src="images/cla.png" alt="cla.png">
        </a>
        <a href="products/449" class="atext">
          <span>CLA SOFTGEL CAPS 60 CAPSULE</span>
        </a>
        <span class="price">50 Lei</span>
        <a href="products/449" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/199" class="img-container">
          <img src="images/nutrend_creatina_creapure.jpg" alt="nutrend_creatina_creapure.jpg">
        </a>
        <a href="products/199" class="atext">
          <span>CREATINE MONOHYDRATE CREAPURE 500 GR</span>
        </a>
        <span class="price">70 Lei</span>
        <a href="products/199" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/457" class="img-container">
          <img src="images/omega3softgel_plus.jpg" alt="omega3softgel_plus.jpg">
        </a>
        <a href="products/457" class="atext">
          <span>OMEGA 3 PLUS 120 SOFTGEL CAPS</span>
        </a>
        <span class="price">60 Lei</span>
        <a href="products/457" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/203" class="img-container">
          <img src="images/nutrend_krealkalin.jpg" alt="nutrend_krealkalin.jpg">
        </a>
        <a href="products/203" class="atext">
          <span>KRE-ALKALYN 1500</span>
        </a>
        <span class="price">70 Lei</span>
        <a href="products/203" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/459" class="img-container">
          <img src="images/curcumina.png" alt="curcumina.png">
        </a>
        <a href="products/459" class="atext">
          <span>CURCUMIN BIOPERINE VITAMIN D</span>
        </a>
        <span class="price">80 Lei</span>
        <a href="products/459" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/209" class="img-container">
          <img src="images/nutrend_aakg_compressed_caps.png" alt="nutrend_aakg_compressed_caps.png">
        </a>
        <a href="products/209" class="atext">
          <span>AAKG COMPRESSED CAPS 120 CAPSULE</span>
        </a>
        <span class="price">60 Lei</span>
        <a href="products/209" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/213" class="img-container">
          <img src="images/nutrend_arginine.jpg" alt="nutrend_arginine.jpg">
        </a>
        <a href="products/213" class="atext">
          <span>ARGININE 120 CAPSULE</span>
        </a>
        <span class="price">55 Lei</span>
        <a href="products/213" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/223" class="img-container">
          <img src="images/endurosnak_cutie.jpg" alt="endurosnak_cutie.jpg">
        </a>
        <a href="products/223" class="atext">
          <span>ENDUROSNACK TUB 10X 75 GR</span>
        </a>
        <span class="price">65 Lei</span>
        <a href="products/223" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/225" class="img-container">
          <img src="images/endurosnak.jpg" alt="endurosnak.jpg">
        </a>
        <a href="products/225" class="atext">
          <span>ENDUROSNACK TUB 75 GR</span>
        </a>
        <span class="price">65 Lei</span>
        <a href="products/225" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/231" class="img-container">
          <img src="images/explosin.jpg" alt="explosin.jpg">
        </a>
        <a href="products/231" class="atext">
          <span>EXPLOSIN 420 GR</span>
        </a>
        <span class="price">120 Lei</span>
        <a href="products/231" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/233" class="img-container">
          <img src="images/wave.jpeg" alt="wave.jpeg">
        </a>
        <a href="products/233" class="atext">
          <span>FOLII MENTOLATE CAFEINA PACHET CU 5 FOLII</span>
        </a>
        <span class="price">6 Lei</span>
        <a href="products/233" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/239" class="img-container">
          <img src="images/nutrend_gutar.jpg" alt="nutrend_gutar.jpg">
        </a>
        <a href="products/239" class="atext">
          <span>GUTAR ENERGY SHOT</span>
        </a>
        <span class="price">6 Lei</span>
        <a href="products/239" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/249" class="img-container">
          <img src="images/nutrend_n1.jpg" alt="nutrend_n1.jpg">
        </a>
        <a href="products/249" class="atext">
          <span>N1 510GR</span>
        </a>
        <span class="price">110 Lei</span>
        <a href="products/249" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/251" class="img-container">
          <img src="images/nutrend_n1_plic.jpg" alt="nutrend_n1_plic.jpg">
        </a>
        <a href="products/251" class="atext">
          <span>N1 PLIC 17G</span>
        </a>
        <span class="price">5 Lei</span>
        <a href="products/251" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
    </div>
    <br><br><br>
@endsection

@section('layouts.footer')

{{-- asset() helper is used to generate urls to assets from the public directory --}}
<link rel="stylesheet" href="{{asset('css/app.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">


@extends('layouts.app')

@section('title')

@section('content')
    <h1 style="color: white;">PROTEIN</h1>
    <br><br><br>
    <div class="row">
      <div class="product-box">
        <a href="products/104" class="img-container">
          <img src="images/nutrend_beef_protein.jpg" alt="nutrend_beef_protein.jpg">
        </a>
        <a href="products/104" class="atext">
          <span>NUTREND <br> 100% BEEF PROTEIN 900GR</span>
        </a>
        <span class="price">110 Lei</span>
        <a href="products/104" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/106" class="img-container">
          <img src="images/whey_gold_on.jpg" alt="whey_gold_on.jpg">
        </a>
        <a href="products/106" class="atext">
          <span>OPTIMUM  <br>GOLD WHEY PROTEIN 2.27KG</span>
        </a>
        <span class="price">250 Lei</span>
        <a href="products/106" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/108" class="img-container">
          <img src="images/on_whey.jpg" alt="on_whey.jpg">
        </a>
        <a href="products/108" class="atext">
          <span>OPTIMUM <br>GOLD WHEY PROTEIN 454GR</span>
        </a>
        <span class="price">60 Lei</span>
        <a href="products/108" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/110" class="img-container">
          <img src="images/whey_isolate_900g.jpg" alt="whey_isolate_900g.jpg">
        </a>
        <a href="products/110" class="atext">
          <span>NUTREND <br>WHEY ISOLATE 900GR</span>
        </a>
        <span class="price">120 Lei</span>
        <a href="products/110" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/112" class="img-container">
          <img src="images/1582244543.jpg" alt="1582244543.jpg">
        </a>
        <a href="products/112" class="atext">
          <span>NUTREND <br>100% WHEY PROTEIN 2.25KG</span>
        </a>
        <span class="price">180 Lei</span>
        <a href="products/112" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/116" class="img-container">
          <img src="images/nutrend_whey.jpg" alt="nutrend_whey.jpg">
        </a>
        <a href="products/116" class="atext">
          <span>NUTREND <br> 100% WHEY PROTEIN 500G</span>
        </a>
        <span class="price">55 Lei</span>
        <a href="products/116" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/118" class="img-container">
          <img src="images/after_training.png" alt="after_training.png">
        </a>
        <a href="products/118" class="atext">
          <span>NUTREND <br> AFTER TRAINING PROTEIN 2520GR</span>
        </a>
        <span class="price">210 Lei</span>
        <a href="products/118" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/120" class="img-container">
          <img src="images/after training 540.png" alt="after training 540.png">
        </a>
        <a href="products/120" class="atext">
          <span>NUTREND <br> AFTER TRAINING PROTEIN 540GR</span>
        </a>
        <span class="price">55 Lei</span>
        <a href="products/120" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/122" class="img-container">
          <img src="images/animal_whey.jpg" alt="animal_whey.jpg">
        </a>
        <a href="products/122" class="atext">
          <span>UNIVERSAL <br> ANIMAL WHEY 1.8KG</span>
        </a>
        <span class="price">230 Lei</span>
        <a href="products/122" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/124" class="img-container">
          <img src="images/qnt_casein.jpg" alt="qnt_casein.jpg">
        </a>
        <a href="products/124" class="atext">
          <span>QNT <br> CASEIN PROTEIN 908GR</span>
        </a>
        <span class="price">90 Lei</span>
        <a href="products/124" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/126" class="img-container">
          <img src="images/delicious_whey.jpg" alt="delicious_whey.jpg">
        </a>
        <a href="products/126" class="atext">
          <span>QNT <br> DELICIOUS WHEY PROTEIN 2.2 KG</span>
        </a>
        <span class="price">170 Lei</span>
        <a href="products/126" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/128" class="img-container">
          <img src="images/delicious x2.jpg" alt="delicious x2.jpg">
        </a>
        <a href="products/128" class="atext">
          <span>QNT <br> DELICIOUS WHEY PROTEIN 4.4KG</span>
        </a>
        <span class="price">260 Lei</span>
        <a href="products/128" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/130" class="img-container">
          <img src="images/delicious-whey-protein.jpg" alt="delicious-whey-protein.jpg">
        </a>
        <a href="products/130" class="atext">
          <span>QNT <br> DELICIOUS WHEY PROTEIN 908GR</span>
        </a>
        <span class="price">80 Lei</span>
        <a href="products/130" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/132" class="img-container">
          <img src="images/hydro_whey_1600g.jpg" alt="hydro_whey_1600g.jpg">
        </a>
        <a href="products/132" class="atext">
          <span>NUTREND <br>HYDRO WHEY 1.6KG</span>
        </a>
        <span class="price">200 Lei</span>
        <a href="products/132" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/134" class="img-container">
          <img src="images/hydro_whey_800g.jpg" alt="hydro_whey_800g.jpg">
        </a>
        <a href="products/134" class="atext">
          <span>NUTREND <br> HYDRO WHEY 800GR</span>
        </a>
        <span class="price">115 Lei</span>
        <a href="products/134" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/136" class="img-container">
          <img src="images/whey_light_digest.png" alt="whey_light_digest.png">
        </a>
        <a href="products/136" class="atext">
          <span>QNT <br> LIGHT DIGEST 2500GR</span>
        </a>
        <span class="price">190 Lei</span>
        <a href="products/136" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/140" class="img-container">
          <img src="images/whey_light_digest.png" alt="whey_light_digest.png">
        </a>
        <a href="products/140" class="atext">
          <span>QNT <br> LIGHT DIGEST 500G</span>
        </a>
        <span class="price">45 Lei</span>
        <a href="products/140" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/142" class="img-container">
          <img src="images/nutrend_long_protein_1kg.jpg" alt="nutrend_long_protein_1kg.jpg">
        </a>
        <a href="products/142" class="atext">
          <span>NUTREND <br> LONG PROTEIN 1KG</span>
        </a>
        <span class="price">105 Lei</span>
        <a href="products/142" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/144" class="img-container">
          <img src="images/nutrend_long_protein.jpg" alt="nutrend_long_protein.jpg">
        </a>
        <a href="products/144" class="atext">
          <span>NUTREND <br> LONG PROTEIN 2,2KG</span>
        </a>
        <span class="price">180 Lei</span>
        <a href="products/144" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/146" class="img-container">
          <img src="images/qnt_metapure.png" alt="qnt_metapure.png">
        </a>
        <a href="products/146" class="atext">
          <span>QNT <br> METAPURE ZERO CARB 2KG</span>
        </a>
        <span class="price">215 Lei</span>
        <a href="products/146" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/148" class="img-container">
          <img src="images/metapure-zero-carb480gr.jpg" alt="metapure-zero-carb480gr.jpg">
        </a>
        <a href="products/148" class="atext">
          <span>QNT <br> METAPURE ZERO CARB 480GR</span>
        </a>
        <span class="price">65 Lei</span>
        <a href="products/148" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/151" class="img-container">
          <img src="images/metapure-zero-carb.jpg" alt="metapure-zero-carb.jpg">
        </a>
        <a href="products/151" class="atext">
          <span>QNT <br> METAPURE ZERO CARB 908GR</span>
        </a>
        <span class="price">120 Lei</span>
        <a href="products/151" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/152" class="img-container">
          <img src="images/nutrend_micellar_casein.jpg" alt="nutrend_micellar_casein.jpg">
        </a>
        <a href="products/152" class="atext">
          <span>NUTREND <br> MICELLAR CASEIN 2,25KG</span>
        </a>
        <span class="price">230 Lei</span>
        <a href="products/152" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/154" class="img-container">
          <img src="images/nutrend_micellar casein 900g.jpg" alt="nutrend_micellar casein 900g.jpg">
        </a>
        <a href="products/154" class="atext">
          <span>NUTREND <br> MICELLAR CASEIN 900G</span>
        </a>
        <span class="price">110 Lei</span>
        <a href="products/154" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/156" class="img-container">
          <img src="images/gaspari_myofusion_advanced.jpg" alt="gaspari_myofusion_advanced.jpg">
        </a>
        <a href="products/156" class="atext">
          <span>GASPARI <br> MYOFUSION ADVANCED 1,8KG</span>
        </a>
        <span class="price">195 Lei</span>
        <a href="products/156" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/158" class="img-container">
          <img src="images/muscletech-nitro_tech_whey_gold.jpg" alt="muscletech-nitro_tech_whey_gold.jpg">
        </a>
        <a href="products/158" class="atext">
          <span>MUSCLETECH <br> NITRO TECH 100% WHEY GOLD 2,5KG</span>
        </a>
        <span class="price">250 Lei</span>
        <a href="products/158" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/160" class="img-container">
          <img src="images/muscletech_nitro-tech.jpg" alt="muscletech_nitro-tech.jpg">
        </a>
        <a href="products/160" class="atext">
          <span>MUSCLETECH <br> NITRO-TECH 1.8KG</span>
        </a>
        <span class="price">230 Lei</span>
        <a href="products/160" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/162" class="img-container">
          <img src="images/muscletech_nitro_ripped.jpg" alt="muscletech_nitro_ripped.jpg">
        </a>
        <a href="products/162" class="atext">
          <span>MUSCLETECH <br> NITRO-TECH RIPPED 1.81KG</span>
        </a>
        <span class="price">250 Lei</span>
        <a href="products/162" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/164" class="img-container">
          <img src="images/precision_gaspari.jpg" alt="precision_gaspari.jpg">
        </a>
        <a href="products/164" class="atext">
          <span>GASPARI <br> PRECISION PROTEIN 1,8KG</span>
        </a>
        <span class="price">260 Lei</span>
        <a href="products/164" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/176" class="img-container">
          <img src="images/bsn_syntha_6_edge.png" alt="bsn_syntha_6_edge.png">
        </a>
        <a href="products/176" class="atext">
          <span>BSN <br> SYNTHA-6 EDGE 1.78KG</span>
        </a>
        <span class="price">195 Lei</span>
        <a href="products/176" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/178" class="img-container">
          <img src="images/universal_whey.jpg" alt="universal_whey.jpg">
        </a>
        <a href="products/178" class="atext">
          <span>UNIVERSAL <br> ULTRA WHEY PRO 2.27KG</span>
        </a>
        <span class="price">220 Lei</span>
        <a href="products/178" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/462" class="img-container">
          <img src="images/bpi_wheyhd.jpeg" alt="bpi_wheyhd.jpeg">
        </a>
        <a href="products/462" class="atext">
          <span>BPI SPORTS <br> WHEY HD 1850GR</span>
        </a>
        <span class="price">175 Lei</span>
        <a href="products/462" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
    </div>
    <br><br><br>
@endsection

@section('layouts.footer')

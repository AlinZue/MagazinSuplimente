{{-- asset() helper is used to generate urls to assets from the public directory --}}
<link rel="stylesheet" href="{{asset('css/app.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">


@extends('layouts.app')

@section('title')

@section('content')
    <h1 style="color: white;">ENERGY</h1>
    <br><br><br>
    <div class="row">
      <div class="product-box">
        <a href="products/256" class="img-container">
          <img src="images/muscletech_caffeina.jpeg" alt="muscletech_caffeina.jpeg">
        </a>
        <a href="products/256" class="atext">
          <span>MUSCLETECH <br> PLATINUM CAFFEINE 120TABS</span>
        </a>
        <span class="price">40 Lei</span>
        <a href="products/256" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/258" class="img-container">
          <img src="images/muscletech_arginina.jpg" alt="muscletech_arginina.jpg">
        </a>
        <a href="products/258" class="atext">
          <span>MUSCLETECH <br> PLATINUM L-ARGININE 100CAPS</span>
        </a>
        <span class="price">80 Lei</span>
        <a href="products/258" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/259" class="img-container">
          <img src="images/1582207689.png" alt="1582207689.png">
        </a>
        <a href="products/259" class="atext">
          <span>GASPARI <br> SUPERPUMP MAX 40SERV</span>
        </a>
        <span class="price">180 Lei</span>
        <a href="products/259" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/261" class="img-container">
          <img src="images/turbosnack.jpg" alt="turbosnack.jpg">
        </a>
        <a href="products/261" class="atext">
          <span>NUTREND <br> TURBOSNACK 25ML</span>
        </a>
        <span class="price">7 Lei</span>
        <a href="products/261" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/263" class="img-container">
          <img src="images/tyrosine.jpg" alt="tyrosine.jpg">
        </a>
        <a href="products/263" class="atext">
          <span>NUTREND <br> TYROSINE 120CAPS</span>
        </a>
        <span class="price">55 Lei</span>
        <a href="products/263" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/265" class="img-container">
          <img src="images/muscletech.png" alt="muscletech.png">
        </a>
        <a href="products/265" class="atext">
          <span>MUSCLETECH <br> VAPOR X5 NEXT GEN 228GR</span>
        </a>
        <span class="price">105 Lei</span>
        <a href="products/265" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/267" class="img-container">
          <img src="images/nutrend_vo2_boost.jpg" alt="nutrend_vo2_boost.jpg">
        </a>
        <a href="products/267" class="atext">
          <span>NUTREND <br> VO2 BOOST 60TABS</span>
        </a>
        <span class="price">55 Lei</span>
        <a href="products/267" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/207" class="img-container">
          <img src="images/aakg-4000.jpg" alt="aakg-4000.jpg">
        </a>
        <a href="products/207" class="atext">
          <span>QNT <br> AAKG 4000</span>
        </a>
        <span class="price">50 Lei</span>
        <a href="products/207" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/209" class="img-container">
          <img src="images/nutrend_aakg_compressed_caps.png" alt="nutrend_aakg_compressed_caps.png">
        </a>
        <a href="products/209" class="atext">
          <span>NUTREND <br> AAKG 120CAPS</span>
        </a>
        <span class="price">60 Lei</span>
        <a href="products/209" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/211" class="img-container">
          <img src="images/universal_animal_pump.jpg" alt="universal_animal_pump.jpg">
        </a>
        <a href="products/211" class="atext">
          <span>UNIVERSAL <br> ANIMAL PUMP 30PAC</span>
        </a>
        <span class="price">180 Lei</span>
        <a href="products/211" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/213" class="img-container">
          <img src="images/nutrend_arginine.jpg" alt="nutrend_arginine.jpg">
        </a>
        <a href="products/213" class="atext">
          <span>NUTREND <br> ARGININE 120CAPS</span>
        </a>
        <span class="price">55 Lei</span>
        <a href="products/213" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/215" class="img-container">
          <img src="images/c4_extreme.jpg" alt="c4_extreme.jpg">
        </a>
        <a href="products/215" class="atext">
          <span>CELLUCOR <br> C4 EXTREME ENERGY</span>
        </a>
        <span class="price">115 Lei</span>
        <a href="products/215" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/217" class="img-container">
          <img src="images/c4_original.png" alt="c4_original.png">
        </a>
        <a href="products/217" class="atext">
          <span>CELLUCOR <br> C4 ORIGINAL</span>
        </a>
        <span class="price">140 Lei</span>
        <a href="products/217" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/219" class="img-container">
          <img src="images/cellucor_c4_ultimate.png" alt="cellucor_c4_ultimate.png">
        </a>
        <a href="products/219" class="atext">
          <span>CELLUCOR <br> C4 ULTIMATE 440GR</span>
        </a>
        <span class="price">150 Lei</span>
        <a href="products/219" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/221" class="img-container">
          <img src="images/qnt_carbo_load.jpg" alt="qnt_carbo_load.jpg">
        </a>
        <a href="products/221" class="atext">
          <span>QNT <br> CARBO LOAD 12X700ML</span>
        </a>
        <span class="price">100 Lei</span>
        <a href="products/221" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/223" class="img-container">
          <img src="images/endurosnak_cutie.jpg" alt="endurosnak_cutie.jpg">
        </a>
        <a href="products/223" class="atext">
          <span>NUTREND <br> ENDUROSNACK 10X75GR</span>
        </a>
        <span class="price">65 Lei</span>
        <a href="products/223" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/225" class="img-container">
          <img src="images/endurosnak.jpg" alt="endurosnak.jpg">
        </a>
        <a href="products/225" class="atext">
          <span>NUTREND <br>ENDUROSNACK 75GR</span>
        </a>
        <span class="price">7 Lei</span>
        <a href="products/225" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/227" class="img-container">
          <img src="images/endorush.jpg" alt="endorush.jpg">
        </a>
        <a href="products/227" class="atext">
          <span>BSN <br> ENDORUSH 495GR</span>
        </a>
        <span class="price">125 Lei</span>
        <a href="products/227" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/229" class="img-container">
          <img src="images/energel.jpg" alt="energel.jpg">
        </a>
        <a href="products/229" class="atext">
          <span>QNT <br> ENERGEL 55ML</span>
        </a>
        <span class="price">5 Lei</span>
        <a href="products/229" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/231" class="img-container">
          <img src="images/explosin.jpg" alt="explosin.jpg">
        </a>
        <a href="products/231" class="atext">
          <span>NUTREND <br>EXPLOSIN 420GR</span>
        </a>
        <span class="price">120 Lei</span>
        <a href="products/231" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/233" class="img-container">
          <img src="images/wave.jpeg" alt="wave.jpeg">
        </a>
        <a href="products/233" class="atext">
          <span>NUTREND <br>FOLII MENTOLATE CAFEINA</span>
        </a>
        <span class="price">6 Lei</span>
        <a href="products/233" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/235" class="img-container">
          <img src="images/gold-standard-pre-workout.jpg" alt="gold-standard-pre-workout.jpg">
        </a>
        <a href="products/235" class="atext">
          <span>OPTIMUM<br> GOLD STANDARD PRE-WORKOUT</span>
        </a>
        <span class="price">110 Lei</span>
        <a href="products/235" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/237" class="img-container">
          <img src="images/guarana_kick_12buc.jpg" alt="guarana_kick_12buc.jpg">
        </a>
        <a href="products/237" class="atext">
          <span>QNT <br> GUARANA KICK 12X80ML</span>
        </a>
        <span class="price">45 Lei</span>
        <a href="products/237" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/239" class="img-container">
          <img src="images/nutrend_gutar.jpg" alt="nutrend_gutar.jpg">
        </a>
        <a href="products/239" class="atext">
          <span>NUTREND <br>GUTAR ENERGY SHOT</span>
        </a>
        <span class="price">6 Lei</span>
        <a href="products/239" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/241" class="img-container">
          <img src="images/hydravol.jpg" alt="hydravol.jpg">
        </a>
        <a href="products/241" class="atext">
          <span>QNT <br> HYDRAVOL 300GR</span>
        </a>
        <span class="price">85 Lei</span>
        <a href="products/241" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/243" class="img-container">
          <img src="images/bsn_no_xplode.jpg" alt="bsn_no_xplode.jpg">
        </a>
        <a href="products/243" class="atext">
          <span>BSN <br> N.O.-XPLODE3.0 30SERV</span>
        </a>
        <span class="price">125 Lei</span>
        <a href="products/243" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/245" class="img-container">
          <img src="images/bsn_noxplode.png" alt="bsn_noxplode.png">
        </a>
        <a href="products/245" class="atext">
          <span>BSN <br> N.O.-XPLODE 50SERV</span>
        </a>
        <span class="price">160 Lei</span>
        <a href="products/245" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/247" class="img-container">
          <img src="images/bsn_n.o.-xplode_xe_edge.png" alt="bsn_n.o.-xplode_xe_edge.png">
        </a>
        <a href="products/247" class="atext">
          <span>BSN <br> N.O.-XPLODE XE EDGE 263GR</span>
        </a>
        <span class="price">120 Lei</span>
        <a href="products/247" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/249" class="img-container">
          <img src="images/nutrend_n1.jpg" alt="nutrend_n1.jpg">
        </a>
        <a href="products/249" class="atext">
          <span>NUTREND <br>N1 510GR</span>
        </a>
        <span class="price">110 Lei</span>
        <a href="products/249" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/251" class="img-container">
          <img src="images/nutrend_n1_plic.jpg" alt="nutrend_n1_plic.jpg">
        </a>
        <a href="products/251" class="atext">
          <span>NUTREND <br>N1 PLIC 17GR</span>
        </a>
        <span class="price">5 Lei</span>
        <a href="products/251" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/253" class="img-container">
          <img src="images/qnt_no_elite_x12.png" alt="qnt_no_elite_x12.png">
        </a>
        <a href="products/253" class="atext">
          <span>QNT <br> NO ELITE SHOT 12X80ML</span>
        </a>
        <span class="price">65 Lei</span>
        <a href="products/253" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
    </div>
    <br><br><br>
@endsection

@section('layouts.footer')

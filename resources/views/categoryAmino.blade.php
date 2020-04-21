{{-- asset() helper is used to generate urls to assets from the public directory --}}
<link rel="stylesheet" href="{{asset('css/app.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">


@extends('layouts.app')

@section('title')

@section('content')
    <h1 style="color: white;">AMINO ACIDS</h1>
    <br><br><br>
    <div class="row">
      <div class="product-box">
        <a href="products/40" class="img-container">
          <img src="images/universal_amino_2700.jpg" alt="universal_amino_2700.jpg">
        </a>
        <a href="products/40" class="atext">
          <span>UNIVERSAL <br> AMINO 2700 350TABS</span>
        </a>
        <span class="price">135 Lei</span>
        <a href="products/40" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/42" class="img-container">
          <img src="images/amino-acid-3000.jpg" alt="amino-acid-3000.jpg">
        </a>
        <a href="products/42" class="atext">
          <span>QNT <br>AMINO ACID 3000 300TABS </span>
        </a>
        <span class="price">90 Lei</span>
        <a href="products/42" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/44" class="img-container">
          <img src="images/qnt_amino_lichid.jpg" alt="qnt_amino_lichid.jpg">
        </a>
        <a href="products/44" class="atext">
          <span>QNT <br> AMINO ACID LIQUID 1000 ML</span>
        </a>
        <span class="price">80 Lei</span>
        <a href="products/44" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/47" class="img-container">
          <img src="images/amino-acid-liquid05.jpg" alt="amino-acid-liquid05.jpg">
        </a>
        <a href="products/47" class="atext">
          <span>QNT <br> AMINO ACID LIQUID 500 ML</span>
        </a>
        <span class="price">40 Lei</span>
        <a href="products/47" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/48" class="img-container">
          <img src="images/amino_build_next_gen270.jpg" alt="amino_build_next_gen270.jpg">
        </a>
        <a href="products/48" class="atext">
          <span>MUSCLETECH <br> AMINO BUILD NEXT GEN 270G</span>
        </a>
        <span class="price">120 Lei</span>
        <a href="products/48" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/50" class="img-container">
          <img src="images/qnt_amino_endurance350.jpg" alt="qnt_amino_endurance350.jpg">
        </a>
        <a href="products/50" class="atext">
          <span>QNT <br> AMINO ENDURANCE 350G</span>
        </a>
        <span class="price">120 Lei</span>
        <a href="products/50" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/52" class="img-container">
          <img src="images/amino_power_liquid_1l.jpg" alt="amino_power_liquid_1l.jpg">
        </a>
        <a href="products/52" class="atext">
          <span>NUTREND <br> AMINO POWER LIQUID 1L</span>
        </a>
        <span class="price">90 Lei</span>
        <a href="products/52" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/54" class="img-container">
          <img src="images/amino-power-liquid_500l.jpg" alt="amino-power-liquid_500l.jpg">
        </a>
        <a href="products/54" class="atext">
          <span>NUTREND <br> AMINO POWER LIQUID 500ML</span>
        </a>
        <span class="price">50 Lei</span>
        <a href="products/54" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/56" class="img-container">
          <img src="images/bsn_aminox.jpg" alt="bsn_aminox.jpg">
        </a>
        <a href="products/56" class="atext">
          <span>BSN <br> AMINO X 1000G</span>
        </a>
        <span class="price">180 Lei</span>
        <a href="products/56" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/58" class="img-container">
          <img src="images/bsn_aminox.jpg" alt="bsn_aminox.jpg">
        </a>
        <a href="products/58" class="atext">
          <span>BSN <br> AMINO X 435G</span>
        </a>
        <span class="price">100 Lei</span>
        <a href="products/58" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/60" class="img-container">
          <img src="images/gaspari_aminolast420.jpg" alt="gaspari_aminolast420.jpg">
        </a>
        <a href="products/60" class="atext">
          <span>GASPARI NUTRITION <br> AMINOLAST 420G</span>
        </a>
        <span class="price">140 Lei</span>
        <a href="products/60" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/62" class="img-container">
          <img src="images/bpi_wheyhd.jpeg" alt="bpi_wheyhd.jpeg">
        </a>
        <a href="products/62" class="atext">
          <span>NUTREND <br> BCAA 4:1:1 300TABS</span>
        </a>
        <span class="price">180 Lei</span>
        <a href="products/62" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/64" class="img-container">
          <img src="images/bcaa-8500.jpg" alt="bcaa-8500.jpg">
        </a>
        <a href="products/64" class="atext">
          <span>QNT <br> BCAA 8500 350GR</span>
        </a>
        <span class="price">90 Lei</span>
        <a href="products/64" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/66" class="img-container">
          <img src="images/nut_bcaa_330ml.jpg" alt="nut_bcaa_330ml.jpg">
        </a>
        <a href="products/66" class="atext">
          <span>NUTREND <br> BCAA ENERGY 330ML</span>
        </a>
        <span class="price">9 Lei</span>
        <a href="products/66" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/68" class="img-container">
          <img src="images/nutrend_bcaa_energy500g.jpg" alt="nutrend_bcaa_energy500g.jpg">
        </a>
        <a href="products/68" class="atext">
          <span>NUTREND <br> BCAA ENERGY MEGA STRONG</span>
        </a>
        <span class="price">120 Lei</span>
        <a href="products/68" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/70" class="img-container">
          <img src="images/nutrend_bcaa_lichid_1l.jpg" alt="nutrend_bcaa_lichid_1l.jpg">
        </a>
        <a href="products/70" class="atext">
          <span>NUTREND <br> BCAA LIQUID 1000ML</span>
        </a>
        <span class="price">70 Lei</span>
        <a href="products/70" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/72" class="img-container">
          <img src="images/nutrend_bcaa_liquid_500ml.jpg" alt="nutrend_bcaa_liquid_500ml.jpg">
        </a>
        <a href="products/72" class="atext">
          <span>NUTREND <br> BCAA LIQUID 500ML</span>
        </a>
        <span class="price">40 Lei</span>
        <a href="products/72" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/74" class="img-container">
          <img src="images/nutrend_bcaa_shot_x20.jpg" alt="nutrend_bcaa_shot_x20.jpg">
        </a>
        <a href="products/74" class="atext">
          <span>NUTREND <br> BCAA LIQUID SHOT 20X60ML</span>
        </a>
        <span class="price">75 Lei</span>
        <a href="products/74" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/76" class="img-container">
          <img src="images/nutrend_bcaa_shot.jpg" alt="nutrend_bcaa_shot.jpg">
        </a>
        <a href="products/76" class="atext">
          <span>NUTREND <br> BCAA LIQUID SHOT 60ML</span>
        </a>
        <span class="price">7 Lei</span>
        <a href="products/76" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/78" class="img-container">
          <img src="images/qnt_bcaas_8000.jpg" alt="qnt_bcaas_8000.jpg">
        </a>
        <a href="products/78" class="atext">
          <span>QNT <br> BCAA'S 8000 12X700ML</span>
        </a>
        <span class="price">105 Lei</span>
        <a href="products/78" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/80" class="img-container">
          <img src="images/hyperamino.jpg" alt="hyperamino.jpg">
        </a>
        <a href="products/80" class="atext">
          <span>GASPARI  <br> HYPER AMINO 300G</span>
        </a>
        <span class="price">100 Lei</span>
        <a href="products/80" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/82" class="img-container">
          <img src="images/beef_universal.jpg" alt="beef_universal.jpg">
        </a>
        <a href="products/82" class="atext">
          <span>UNIVERSAL <br> BEEF AMINOS 200TABS</span>
        </a>
        <span class="price">55 Lei</span>
        <a href="products/82" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/85" class="img-container">
          <img src="images/beef_universal.jpg" alt="beef_universal.jpg">
        </a>
        <a href="products/85" class="atext">
          <span>UNIVERSAL  <br> BEEF AMINOS 400TABS</span>
        </a>
        <span class="price">100 Lei</span>
        <a href="products/85" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/86" class="img-container">
          <img src="images/bcaa_shredded.jpeg" alt="bcaa_shredded.jpeg">
        </a>
        <a href="products/86" class="atext">
          <span>BPI SPORTS <br> BEST BCAA SHREDDED 275G</span>
        </a>
        <span class="price">120 Lei</span>
        <a href="products/86" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/460" class="img-container">
          <img style="height: 120px; width: 160px;" src="images/1582747975.jpg" alt="1582747975.jpg">
        </a>
        <a href="products/460" class="atext">
          <span style="width: 182px;">GASPARI  <br> Mirage Elemental Amino Energy</span>
        </a>
        <span class="price">100 Lei</span>
        <a href="products/460" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
    </div>
    <br><br><br>
@endsection

@section('layouts.footer')

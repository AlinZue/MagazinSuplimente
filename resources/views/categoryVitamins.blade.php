{{-- asset() helper is used to generate urls to assets from the public directory --}}
<link rel="stylesheet" href="{{asset('css/app.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">


@extends('layouts.app')

@section('title')

@section('content')
    <h1 style="color: white;">VITAMINS</h1>
    <br><br><br>
    <div class="row">
      <div class="product-box">
        <a href="products/413" class="img-container">
          <img src="images/gaspari_anavite.jpg" alt="gaspari_anavite.jpg">
        </a>
        <a href="products/413" class="atext">
          <span>GASPARI <br> ANAVITE 180TABS</span>
        </a>
        <span class="price">155 Lei</span>
        <a href="products/413" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/417" class="img-container">
          <img src="images/universal_daily_formula.png" alt="universal_daily_formula.png">
        </a>
        <a href="products/417" class="atext">
          <span>UNIVERSAL <br> DAILY FORMULA 100CAPS</span>
        </a>
        <span class="price">40 Lei</span>
        <a href="products/417" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/419" class="img-container">
          <img src="images/qnt_daily_vit.jpg" alt="qnt_daily_vit.jpg">
        </a>
        <a href="products/419" class="atext">
          <span>QNT <br> DAILY VITAMINS 60CAPS</span>
        </a>
        <span class="price">30 Lei</span>
        <a href="products/419" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/421" class="img-container">
          <img src="images/magnesium_12shot.jpg" alt="magnesium_12shot.jpg">
        </a>
        <a href="products/421" class="atext">
          <span>QNT <br> MAGNESIUM SHOT 12X80ML</span>
        </a>
        <span class="price">40 Lei</span>
        <a href="products/421" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/423" class="img-container">
          <img src="images/nutrend_magneslife.jpg" alt="nutrend_magneslife.jpg">
        </a>
        <a href="products/423" class="atext">
          <span>NUTREND <br> MAGNESLIFE 10X25ML</span>
        </a>
        <span class="price">35 Lei</span>
        <a href="products/423" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/425" class="img-container">
          <img src="images/magnes.jpg" alt="magnes.jpg">
        </a>
        <a href="products/425" class="atext">
          <span>NUTREND <br> MAGNESLIFE ACTIVE DRINK</span>
        </a>
        <span class="price">3 Lei</span>
        <a href="products/425" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/427" class="img-container">
          <img src="images/nutrend_multimineral.jpg" alt="nutrend_multimineral.jpg">
        </a>
        <a href="products/427" class="atext">
          <span>NUTREND <br> MULTIMINERAL 60CAPS</span>
        </a>
        <span class="price">40 Lei</span>
        <a href="products/427" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/431" class="img-container">
          <img src="images/opti_men.png" alt="opti_men.png">
        </a>
        <a href="products/431" class="atext">
          <span>OPTIMUM <br> OPTI MEN 180TABS</span>
        </a>
        <span class="price">120 Lei</span>
        <a href="products/431" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/433" class="img-container">
          <img src="images/optimum_opti_men90tabs.jpg" alt="optimum_opti_men90tabs.jpg">
        </a>
        <a href="products/433" class="atext">
          <span>OPTIMUM <br> OPTI MEN 90TABS</span>
        </a>
        <span class="price">70 Lei</span>
        <a href="products/433" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/435" class="img-container">
          <img src="images/opti_women.jpg" alt="opti_women.jpg">
        </a>
        <a href="products/435" class="atext">
          <span>OPTIMUM <br> OPTI WOMEN 60CAPS</span>
        </a>
        <span class="price">70 Lei</span>
        <a href="products/435" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/437" class="img-container">
          <img src="images/muscletech_multivit.jpg" alt="muscletech_multivit.jpg">
        </a>
        <a href="products/437" class="atext">
          <span>MUSCLETECH <br> MULTIVITAMIN 90CAPS</span>
        </a>
        <span class="price">70 Lei</span>
        <a href="products/437" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/439" class="img-container">
          <img src="images/qnt_smart_vitamin.jpg" alt="qnt_smart_vitamin.jpg">
        </a>
        <a href="products/439" class="atext">
          <span>QNT <br> SMART VITAMIN 12X700ML</span>
        </a>
        <span class="price">100 Lei</span>
        <a href="products/439" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/441" class="img-container">
          <img src="images/super-mins.jpg" alt="super-mins.jpg">
        </a>
        <a href="products/441" class="atext">
          <span>QNT <br> SUPER MINS 60TABS</span>
        </a>
        <span class="price">25 Lei</span>
        <a href="products/441" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/444" class="img-container">
          <img src="images/vit_c.png" alt="vit_c.png">
        </a>
        <a href="products/444" class="atext">
          <span>NUTREND <br> VITAMIN C 100TABS</span>
        </a>
        <span class="price">25 Lei</span>
        <a href="products/444" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/445" class="img-container">
          <img src="images/zinc.jpg" alt="zinc.jpg">
        </a>
        <a href="products/445" class="atext">
          <span>QNT <br> ZINC 100CAPS</span>
        </a>
        <span class="price">25 Lei</span>
        <a href="products/445" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/447" class="img-container">
          <img src="images/cla.jpg" alt="cla.jpg">
        </a>
        <a href="products/447" class="atext">
          <span>QNT <br> CLA 90CAPS</span>
        </a>
        <span class="price">50 Lei</span>
        <a href="products/447" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/449" class="img-container">
          <img src="images/cla.png" alt="cla.png">
        </a>
        <a href="products/449" class="atext">
          <span>NUTREND <br> CLA SOFTGEL 60CAPS</span>
        </a>
        <span class="price">50 Lei</span>
        <a href="products/449" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/451" class="img-container">
          <img src="images/fishoil.png" alt="fishoil.png">
        </a>
        <a href="products/451" class="atext">
          <span>OPTIMUM <br> FISH OIL 100CAPS</span>
        </a>
        <span class="price">70 Lei</span>
        <a href="products/451" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/453" class="img-container">
          <img src="images/on_fish_oil.png" alt="on_fish_oil.png">
        </a>
        <a href="products/453" class="atext">
          <span>OPTIMUM <br> FISH OIL 200 SOFTGELS</span>
        </a>
        <span class="price">30 Lei</span>
        <a href="products/453" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/455" class="img-container">
          <img src="images/omega-3.jpg" alt="omega-3.jpg">
        </a>
        <a href="products/455" class="atext">
          <span>QN <br> TOMEGA 3 60SOFTGELS</span>
        </a>
        <span class="price">30 Lei</span>
        <a href="products/455" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/457" class="img-container">
          <img src="images/omega3softgel_plus.jpg" alt="omega3softgel_plus.jpg">
        </a>
        <a href="products/457" class="atext">
          <span>NUTREND <br> OMEGA 3 PLUS 120CAPS</span>
        </a>
        <span class="price">60 Lei</span>
        <a href="products/457" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/459" class="img-container">
          <img src="images/curcumina.png" alt="curcumina.png">
        </a>
        <a href="products/459" class="atext">
          <span>NUTREND <br> CURCUMIN 60GELCAPS</span>
        </a>
        <span class="price">80 Lei</span>
        <a href="products/459" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
    </div>
    <br><br><br>
@endsection

@section('layouts.footer')

{{-- asset() helper is used to generate urls to assets from the public directory --}}
<link rel="stylesheet" href="{{asset('css/app.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">


@extends('layouts.app')

@section('title')

@section('content')
    <h1 style="color: white;">CREATINE</h1>
    <br><br><br>
    <div class="row">
      <div class="product-box">
        <a href="products/180" class="img-container">
          <img src="images/creatine_defined.jpeg" alt="creatine_defined.jpeg">
        </a>
        <a href="products/180" class="atext">
          <span>BPI SPORTS <br> BEST CREATINE DEFINED 300G</span>
        </a>
        <span class="price">100 Lei</span>
        <a href="products/180" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/181" class="img-container">
          <img src="images/cell_tech.jpg" alt="cell_tech.jpg">
        </a>
        <a href="products/181" class="atext">
          <span>MUSCLETECH <br> CELL TECH 2.7KG</span>
        </a>
        <span class="price">180 Lei</span>
        <a href="products/181" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/183" class="img-container">
          <img src="images/nutrend_creaport.jpg" alt="nutrend_creaport.jpg">
        </a>
        <a href="products/183" class="atext">
          <span>NUTREND <br> CREAPORT 600G</span>
        </a>
        <span class="price">55 Lei</span>
        <a href="products/183" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/185" class="img-container">
          <img src="images/optimum_cretine.jpg" alt="optimum_cretine.jpg">
        </a>
        <a href="products/185" class="atext">
          <span>OPTIMUM NUTRITION <br> CREATINE 317G</span>
        </a>
        <span class="price">50 Lei</span>
        <a href="products/185" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/187" class="img-container">
          <img src="images/nutrend_creatine_compressed_caps.jpg" alt="nutrend_creatine_compressed_caps.jpg">
        </a>
        <a href="products/187" class="atext">
          <span>NUTREND <br> CREATINE 120CAPS</span>
        </a>
        <span class="price">55 Lei</span>
        <a href="products/187" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/189" class="img-container">
          <img src="images/bsn_creatine_dna.jpg" alt="bsn_creatine_dna.jpg">
        </a>
        <a href="products/189" class="atext">
          <span>BSN <br> CREATINE DNA 216GR</span>
        </a>
        <span class="price">45 Lei</span>
        <a href="products/189" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/191" class="img-container">
          <img src="images/creatine_mega_strong_nutrend.jpg" alt="creatine_mega_strong_nutrend.jpg">
        </a>
        <a href="products/191" class="atext">
          <span>NUTREND <br>MEGA STRONG POWDER 500GR</span>
        </a>
        <span class="price">100 Lei</span>
        <a href="products/191" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/193" class="img-container">
          <img src="images/creatine-monohydrate.jpg" alt="creatine-monohydrate.jpg">
        </a>
        <a href="products/193" class="atext">
          <span>QNT <br>MONOHYDRATE 200TABS</span>
        </a>
        <span class="price">40 Lei</span>
        <a href="products/193" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/195" class="img-container">
          <img src="images/qnt_creatine.jpg" alt="qnt_creatine.jpg">
        </a>
        <a href="products/195" class="atext">
          <span>QNT <br>MONOHYDRATE 300GR</span>
        </a>
        <span class="price">40 Lei</span>
        <a href="products/195" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/197" class="img-container">
          <img src="images/creatine-monohydrate800g.jpg" alt="creatine-monohydrate800g.jpg">
        </a>
        <a href="products/197" class="atext">
          <span>QNT <br>MONOHYDRATE 800GR</span>
        </a>
        <span class="price">65 Lei</span>
        <a href="products/197" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/199" class="img-container">
          <img src="images/nutrend_creatina_creapure.jpg" alt="nutrend_creatina_creapure.jpg">
        </a>
        <a href="products/199" class="atext">
          <span>NUTREND <br>MONOHYDRATE CREAPURE 500GR</span>
        </a>
        <span class="price">70 Lei</span>
        <a href="products/199" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/201" class="img-container">
          <img src="images/muscletech_creatine_2500.jpg" alt="muscletech_creatine_2500.jpg">
        </a>
        <a href="products/201" class="atext">
          <span>MUSCLETECH <br> ESSENTIAL SERIES PLATINUM2500</span>
        </a>
        <span class="price">55 Lei</span>
        <a href="products/201" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/203" class="img-container">
          <img src="images/nutrend_krealkalin.jpg" alt="nutrend_krealkalin.jpg">
        </a>
        <a href="products/203" class="atext">
          <span>NUTREND <br> KRE-ALKALYN 1500</span>
        </a>
        <span class="price">70 Lei</span>
        <a href="products/203" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/205" class="img-container">
          <img src="images/muscletech_creatine.jpg" alt="muscletech_creatine.jpg">
        </a>
        <a href="products/205" class="atext">
          <span>MUSCLETECH <br> PLATINUM 400GR</span>
        </a>
        <span class="price">55 Lei</span>
        <a href="products/205" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
    </div>
    <br><br><br>
@endsection

@section('layouts.footer')

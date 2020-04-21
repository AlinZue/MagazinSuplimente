{{-- asset() helper is used to generate urls to assets from the public directory --}}
<link rel="stylesheet" href="{{asset('css/app.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">


@extends('layouts.app')

@section('title')

@section('content')
    <h1 style="color: white;">BSN</h1>
    <br><br><br>
    <div class="row">
      <div class="product-box">
        <a href="products/56" class="img-container">
          <img src="images/bsn_aminox.jpg" alt="bsn_aminox.jpg">
        </a>
        <a href="products/56" class="atext">
          <span>AMINO X 1000G</span>
        </a>
        <span class="price">180 Lei</span>
        <a href="products/56" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/58" class="img-container">
          <img src="images/bsn_aminox.jpg" alt="bsn_aminox.jpg">
        </a>
        <a href="products/58" class="atext">
          <span>AMINO X 435G</span>
        </a>
        <span class="price">100 Lei</span>
        <a href="products/58" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/315" class="img-container">
          <img src="images/bsn_syntha_6.jpg" alt="bsn_syntha_6.jpg">
        </a>
        <a href="products/315" class="atext">
          <span>SYNTHA-6 - 2.27KG</span>
        </a>
        <span class="price">195 Lei</span>
        <a href="products/315" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/317" class="img-container">
          <img src="images/bsn_true_mass.png" alt="bsn_true_mass.png">
        </a>
        <a href="products/317" class="atext">
          <span>TRUE MASS ALL-IN-ONE 4.2KG</span>
        </a>
        <span class="price">250 Lei</span>
        <a href="products/317" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/319" class="img-container">
          <img src="images/bsn_true_mass.jpg" alt="bsn_true_mass.jpg">
        </a>
        <a href="products/319" class="atext">
          <span>TRUE-MASS 2,61KG</span>
        </a>
        <span class="price">175 Lei</span>
        <a href="products/319" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/176" class="img-container">
          <img src="images/bsn_syntha_6_edge.png" alt="bsn_syntha_6_edge.png">
        </a>
        <a href="products/176" class="atext">
          <span>SYNTHA-6 EDGE 1.78KG</span>
        </a>
        <span class="price">195 Lei</span>
        <a href="products/176" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/189" class="img-container">
          <img src="images/bsn_creatine_dna.jpg" alt="bsn_creatine_dna.jpg">
        </a>
        <a href="products/189" class="atext">
          <span>CREATINE DNA - 216G</span>
        </a>
        <span class="price">45 Lei</span>
        <a href="products/189" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/227" class="img-container">
          <img src="images/endorush.jpg" alt="endorush.jpg">
        </a>
        <a href="products/227" class="atext">
          <span>ENDORUSH 495G</span>
        </a>
        <span class="price">125 Lei</span>
        <a href="products/227" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/243" class="img-container">
          <img src="images/bsn_no_xplode.jpg" alt="bsn_no_xplode.jpg">
        </a>
        <a href="products/243" class="atext">
          <span>N.O.-XPLODE 3.0 - 30 SERVIRI</span>
        </a>
        <span class="price">125 Lei</span>
        <a href="products/243" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/245" class="img-container">
          <img src="images/bsn_noxplode.png" alt="bsn_noxplode.png">
        </a>
        <a href="products/245" class="atext">
          <span>N.O.-XPLODE 50 SERVIRI (1KG)</span>
        </a>
        <span class="price">160 Lei</span>
        <a href="products/245" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/247" class="img-container">
          <img src="images/bsn_n.o.-xplode_xe_edge.png" alt="bsn_n.o.-xplode_xe_edge.png">
        </a>
        <a href="products/247" class="atext">
          <span>N.O.-XPLODE XE EDGE - 263G</span>
        </a>
        <span class="price">120 Lei</span>
        <a href="products/247" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
    </div>
    <br><br><br>
@endsection

@section('layouts.footer')

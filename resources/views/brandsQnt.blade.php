{{-- asset() helper is used to generate urls to assets from the public directory --}}
<link rel="stylesheet" href="{{asset('css/app.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">


@extends('layouts.app')

@section('title')

@section('content')
    <h1 style="color: white;">QNT</h1>
    <br><br><br>
    <div class="row">
      <div class="product-box">
        <a href="products/20" class="img-container">
          <img src="images/power-strap.jpg" alt="power-strap.jpg">
        </a>
        <a href="products/20" class="atext">
          <span>CHINGI QNT</span>
        </a>
        <span class="price">30 Lei</span>
        <a href="products/20" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/227" class="img-container">
          <img src="images/l-glutamine-6000-pure.jpg" alt="l-glutamine-6000-pure.jpg">
        </a>
        <a href="products/227" class="atext">
          <span>L-GLUTAMINE 6000 PURE 500 GR</span>
        </a>
        <span class="price">77 Lei</span>
        <a href="products/227" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/28" class="img-container">
          <img src="images/gloves.jpg" alt="gloves.jpg">
        </a>
        <a href="products/28" class="atext">
          <span>MANUSI STANDARD</span>
        </a>
        <span class="price">30 Lei</span>
        <a href="products/28" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/287" class="img-container">
          <img src="images/oferta_delicious_n1.jpg" alt="oferta_delicious_n1.jpg">
        </a>
        <a href="products/287" class="atext">
          <span>DELICIOUS WHEY PROTEIN 2.2KG + N1 - 510 GR</span>
        </a>
        <span class="price">200 Lei</span>
        <a href="products/287" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/288" class="img-container">
          <img src="images/oferta_delicious_n1.jpg" alt="oferta_delicious_n1.jpg">
        </a>
        <a href="products/288" class="atext">
          <span>DELICIOUS WHEY PROTEIN 2.2KG + N1 - 510 GR</span>
        </a>
        <span class="price">200 Lei</span>
        <a href="products/288" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/42" class="img-container">
          <img src="images/amino-acid-3000.jpg" alt="amino-acid-3000.jpg">
        </a>
        <a href="products/42" class="atext">
          <span>AMINO ACID 3000 - 300 TABLETE</span>
        </a>
        <span class="price">90 Lei</span>
        <a href="products/42" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/44" class="img-container">
          <img src="images/qnt_amino_lichid.jpg" alt="qnt_amino_lichid.jpg">
        </a>
        <a href="products/44" class="atext">
          <span>AMINO ACID LIQUID 1000 ML</span>
        </a>
        <span class="price">80 Lei</span>
        <a href="products/44" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/301" class="img-container">
          <img src="images/massive_mass.jpg" alt="massive_mass.jpg">
        </a>
        <a href="products/301" class="atext">
          <span>MASSIVE MASS 2.7KG</span>
        </a>
        <span class="price">140 Lei</span>
        <a href="products/301" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/47" class="img-container">
          <img src="images/amino-acid-liquid05.jpg" alt="amino-acid-liquid05.jpg">
        </a>
        <a href="products/47" class="atext">
          <span>AMINO ACID LIQUID 500 ML</span>
        </a>
        <span class="price">40 Lei</span>
        <a href="products/47" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/305" class="img-container">
          <img src="images/metapure-mass.jpg" alt="metapure-mass.jpg">
        </a>
        <a href="products/305" class="atext">
          <span>METAPURE MASS 1815G</span>
        </a>
        <span class="price">130 Lei</span>
        <a href="products/305" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/50" class="img-container">
          <img src="images/qnt_amino_endurance350.jpg" alt="qnt_amino_endurance350.jpg">
        </a>
        <a href="products/50" class="atext">
          <span>AMINO ENDURANCE 350G</span>
        </a>
        <span class="price">100 Lei</span>
        <a href="products/50" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/64" class="img-container">
          <img src="images/bcaa-8500.jpg" alt="bcaa-8500.jpg">
        </a>
        <a href="products/64" class="atext">
          <span>BCAA 8500 (INSTANT POWDER) 350 GR</span>
        </a>
        <span class="price">90 Lei</span>
        <a href="products/64" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/333" class="img-container">
          <img src="images/joint-.jpg" alt="joint-.jpg">
        </a>
        <a href="products/333" class="atext">
          <span>JOINT + 60 CAPSULE</span>
        </a>
        <span class="price">35 Lei</span>
        <a href="products/333" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/78" class="img-container">
          <img src="images/qnt_bcaas_8000.jpg" alt="qnt_bcaas_8000.jpg">
        </a>
        <a href="products/78" class="atext">
          <span>BCAA'S 8000 12X 700ML</span>
        </a>
        <span class="price">105 Lei</span>
        <a href="products/78" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/335" class="img-container">
          <img src="images/qnt_joint_shot.png" alt="qnt_joint_shot.png">
        </a>
        <a href="products/335" class="atext">
          <span>JOINT PLUS SHOT 12 X 80ML (960ML)</span>
        </a>
        <span class="price">55 Lei</span>
        <a href="products/335" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/88" class="img-container">
          <img src="images/record-bar.jpg" alt="record-bar.jpg">
        </a>
        <a href="products/88" class="atext">
          <span>RECORD BAR 60 GR 3+3 GRATIS</span>
        </a>
        <span class="price">30 Lei</span>
        <a href="products/88" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/90" class="img-container">
          <img src="images/record-bar.jpg" alt="record-bar.jpg">
        </a>
        <a href="products/90" class="atext">
          <span>RECORD BAR 60 GR</span>
        </a>
        <span class="price">10 Lei</span>
        <a href="products/90" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/94" class="img-container">
          <img src="images/so-good-bar.jpg" alt="so-good-bar.jpg">
        </a>
        <a href="products/94" class="atext">
          <span>SO GOOD BAR 60 GR</span>
        </a>
        <span class="price">8 Lei</span>
        <a href="products/94" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/96" class="img-container">
          <img src="images/protein-wafer-bar.jpg" alt="protein-wafer-bar.jpg">
        </a>
        <a href="products/96" class="atext">
          <span>PROTEIN WAFER 35G</span>
        </a>
        <span class="price">6 Lei</span>
        <a href="products/96" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/98" class="img-container">
          <img src="images/1582573518.jpg" alt="1582573518.jpg">
        </a>
        <a href="products/98" class="atext">
          <span>PROTEIN JOY 60G</span>
        </a>
        <span class="price">7 Lei</span>
        <a href="products/98" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/369" class="img-container">
          <img src="images/qnt_l-carnitine 2000mg.jpg" alt="qnt_l-carnitine 2000mg.jpg">
        </a>
        <a href="products/369" class="atext">
          <span>L-CARNITINE 2000 MG (ACTIF BY JUICE) 12X 700ML</span>
        </a>
        <span class="price">100 Lei</span>
        <a href="products/369" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/371" class="img-container">
          <img src="images/l-carnitine-caps.jpg" alt="l-carnitine-caps.jpg">
        </a>
        <a href="products/371" class="atext">
          <span>L-CARNITINE 60 CAPSULE</span>
        </a>
        <span class="price">45 Lei</span>
        <a href="products/371" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/373" class="img-container">
          <img src="images/qnt_carnitine.jpg" alt="qnt_carnitine.jpg">
        </a>
        <a href="products/373" class="atext">
          <span>L-CARNITINE LIQUID 500 ML</span>
        </a>
        <span class="price">45 Lei</span>
        <a href="products/373" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/375" class="img-container">
          <img src="images/carnitine_12shot.jpg" alt="carnitine_12shot.jpg">
        </a>
        <a href="products/375" class="atext">
          <span>L-CARNITINE SHOT 12 X 80ML</span>
        </a>
        <span class="price">50 Lei</span>
        <a href="products/375" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/377" class="img-container">
          <img src="images/easy_body_lipitek.jpg" alt="easy_body_lipitek.jpg">
        </a>
        <a href="products/377" class="atext">
          <span>LIPITEK 90 CAPSULE</span>
        </a>
        <span class="price">60 Lei</span>
        <a href="products/377" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/379" class="img-container">
          <img src="images/qnt_lcarnitine.png" alt="qnt_lcarnitine.png">
        </a>
        <a href="products/379" class="atext">
          <span>MAXI L-CARNITINE 90 TABLETE</span>
        </a>
        <span class="price">65 Lei</span>
        <a href="products/379" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/124" class="img-container">
          <img src="images/qnt_casein.jpg" alt="qnt_casein.jpg">
        </a>
        <a href="products/124" class="atext">
          <span>CASEIN PROTEIN 908G</span>
        </a>
        <span class="price">90 Lei</span>
        <a href="products/124" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/126" class="img-container">
          <img src="images/delicious_whey.jpg" alt="delicious_whey.jpg">
        </a>
        <a href="products/126" class="atext">
          <span>DELICIOUS WHEY PROTEIN 2.2 KG</span>
        </a>
        <span class="price">170 Lei</span>
        <a href="products/126" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/128" class="img-container">
          <img src="images/delicious x2.jpg" alt="delicious x2.jpg">
        </a>
        <a href="products/128" class="atext">
          <span>DELICIOUS WHEY PROTEIN 4.4KG</span>
        </a>
        <span class="price">260 Lei</span>
        <a href="products/128" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/385" class="img-container">
          <img src="images/thermo-booster-actif-by-juice.jpg" alt="thermo-booster-actif-by-juice.jpg">
        </a>
        <a href="products/385" class="atext">
          <span>THERMO BOOSTER 12X 700 ML</span>
        </a>
        <span class="price">96 Lei</span>
        <a href="products/385" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/130" class="img-container">
          <img src="images/delicious-whey-protein.jpg" alt="delicious-whey-protein.jpg">
        </a>
        <a href="products/130" class="atext">
          <span>DELICIOUS WHEY PROTEIN 908G</span>
        </a>
        <span class="price">80 Lei</span>
        <a href="products/130" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/391" class="img-container">
          <img src="images/water-less.jpg" alt="water-less.jpg">
        </a>
        <a href="products/391" class="atext">
          <span>WATER LESS 90 CAPSULE</span>
        </a>
        <span class="price">60 Lei</span>
        <a href="products/391" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/136" class="img-container">
          <img src="images/whey_light_digest.png" alt="whey_light_digest.png">
        </a>
        <a href="products/136" class="atext">
          <span>QNT LIGHT DIGEST WHEY PROTEIN 2500G + SHAKER</span>
        </a>
        <span class="price">190 Lei</span>
        <a href="products/136" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/140" class="img-container">
          <img src="images/whey_light_digest.png" alt="whey_light_digest.png">
        </a>
        <a href="products/140" class="atext">
          <span>LIGHT DIGEST WHEY PROTEIN 500G</span>
        </a>
        <span class="price">45 Lei</span>
        <a href="products/140" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/146" class="img-container">
          <img src="images/qnt_metapure.png" alt="qnt_metapure.png">
        </a>
        <a href="products/146" class="atext">
          <span>METAPURE ZERO CARB 2 KG</span>
        </a>
        <span class="price">215 Lei</span>
        <a href="products/146" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/148" class="img-container">
          <img src="images/metapure-zero-carb480gr.jpg" alt="metapure-zero-carb480gr.jpg">
        </a>
        <a href="products/148" class="atext">
          <span>METAPURE ZERO CARB 480GR</span>
        </a>
        <span class="price">65 Lei</span>
        <a href="products/148" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/151" class="img-container">
          <img src="images/metapure-zero-carb.jpg" alt="metapure-zero-carb.jpg">
        </a>
        <a href="products/151" class="atext">
          <span>METAPURE ZERO CARB 908G</span>
        </a>
        <span class="price">120 Lei</span>
        <a href="products/151" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/407" class="img-container">
          <img src="images/testek.jpg" alt="testek.jpg">
        </a>
        <a href="products/407" class="atext">
          <span>TESTEK 120 CAPSULE</span>
        </a>
        <span class="price">100 Lei</span>
        <a href="products/407" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/409" class="img-container">
          <img src="images/tribulus.jpg" alt="tribulus.jpg">
        </a>
        <a href="products/409" class="atext">
          <span>TRIBULUS 60 CAPSULE</span>
        </a>
        <span class="price">35 Lei</span>
        <a href="products/409" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/419" class="img-container">
          <img src="images/qnt_daily_vit.jpg" alt="qnt_daily_vit.jpg">
        </a>
        <a href="products/419" class="atext">
          <span>DAILY VITAMINS 60 CAPSULE</span>
        </a>
        <span class="price">30 Lei</span>
        <a href="products/419" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/421" class="img-container">
          <img src="images/magnesium_12shot.jpg" alt="magnesium_12shot.jpg">
        </a>
        <a href="products/421" class="atext">
          <span>MAGNESIUM SHOT 12X 80ML</span>
        </a>
        <span class="price">40 Lei</span>
        <a href="products/421" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/166" class="img-container">
          <img src="images/1_waffles-protein-480g-pur0022.png" alt="1_waffles-protein-480g-pur0022.png">
        </a>
        <a href="products/166" class="atext">
          <span>BELGIAN WAFFLES PROTEIN 480G</span>
        </a>
        <span class="price">40 Lei</span>
        <a href="products/166" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/168" class="img-container">
          <img src="images/1_dessert-protein-pur0026.png" alt="1_dessert-protein-pur0026.png">
        </a>
        <a href="products/168" class="atext">
          <span>DESSERT PROTEIN 480G</span>
        </a>
        <span class="price">55 Lei</span>
        <a href="products/168" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/170" class="img-container">
          <img src="images/qnt_protein_pancake.jpg" alt="qnt_protein_pancake.jpg">
        </a>
        <a href="products/170" class="atext">
          <span>PROTEIN PANCAKE 1020G (34 CLATITE)</span>
        </a>
        <span class="price">55 Lei</span>
        <a href="products/170" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/174" class="img-container">
          <img src="images/protein_spread.jpg" alt="protein_spread.jpg">
        </a>
        <a href="products/174" class="atext">
          <span>PROTEIN SPREAD 250G</span>
        </a>
        <span class="price">30 Lei</span>
        <a href="products/174" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/439" class="img-container">
          <img src="images/qnt_smart_vitamin.jpg" alt="qnt_smart_vitamin.jpg">
        </a>
        <a href="products/439" class="atext">
          <span>SMART VITAMIN 12X 700ML</span>
        </a>
        <span class="price">100 Lei</span>
        <a href="products/439" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/441" class="img-container">
          <img src="images/super-mins.jpg" alt="super-mins.jpg">
        </a>
        <a href="products/441" class="atext">
          <span>SUPER MINS 60 TABLETE</span>
        </a>
        <span class="price">25 Lei</span>
        <a href="products/441" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/445" class="img-container">
          <img src="images/zinc.jpg" alt="zinc.jpg">
        </a>
        <a href="products/445" class="atext">
          <span>ZINC 100 CAPSULE</span>
        </a>
        <span class="price">25 Lei</span>
        <a href="products/445" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/447" class="img-container">
          <img src="images/cla.jpg" alt="cla.jpg">
        </a>
        <a href="products/447" class="atext">
          <span>CLA 90 CAPSULE GELATINOASE</span>
        </a>
        <span class="price">50 Lei</span>
        <a href="products/447" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/193" class="img-container">
          <img src="images/creatine-monohydrate.jpg" alt="creatine-monohydrate.jpg">
        </a>
        <a href="products/193" class="atext">
          <span>CREATINE MONOHYDRATE 200 TABLETE</span>
        </a>
        <span class="price">40 Lei</span>
        <a href="products/193" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/195" class="img-container">
          <img src="images/qnt_creatine.jpg" alt="qnt_creatine.jpg">
        </a>
        <a href="products/195" class="atext">
          <span>CREATINE MONOHYDRATE 300G</span>
        </a>
        <span class="price">65 Lei</span>
        <a href="products/195" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/197" class="img-container">
          <img src="images/creatine-monohydrate800g.jpg" alt="creatine-monohydrate800g.jpg">
        </a>
        <a href="products/197" class="atext">
          <span>CREATINE MONOHYDRATE 800 GR</span>
        </a>
        <span class="price">65 Lei</span>
        <a href="products/197" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/455" class="img-container">
          <img src="images/omega-3.jpg" alt="omega-3.jpg">
        </a>
        <a href="products/455" class="atext">
          <span>OMEGA 3 - 60 SOFTGELS</span>
        </a>
        <span class="price">30 Lei</span>
        <a href="products/455" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/207" class="img-container">
          <img src="images/aakg-4000.jpg" alt="aakg-4000.jpg">
        </a>
        <a href="products/207" class="atext">
          <span>AAKG 4000</span>
        </a>
        <span class="price">50 Lei</span>
        <a href="products/207" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/221" class="img-container">
          <img src="images/qnt_carbo_load.jpg" alt="qnt_carbo_load.jpg">
        </a>
        <a href="products/221" class="atext">
          <span>CARBO LOAD 12X 700ML</span>
        </a>
        <span class="price">100 Lei</span>
        <a href="products/221" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/229" class="img-container">
          <img src="images/energel.jpg" alt="energel.jpg">
        </a>
        <a href="products/229" class="atext">
          <span>ENERGEL 55ML</span>
        </a>
        <span class="price">5 Lei</span>
        <a href="products/229" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/237" class="img-container">
          <img src="images/guarana_kick_12buc.jpg" alt="guarana_kick_12buc.jpg">
        </a>
        <a href="products/237" class="atext">
          <span>GUARANA KICK 12X 80ML</span>
        </a>
        <span class="price">45 Lei</span>
        <a href="products/237" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/241" class="img-container">
          <img src="images/hydravol.jpg" alt="hydravol.jpg">
        </a>
        <a href="products/241" class="atext">
          <span>HYDRAVOL 300G</span>
        </a>
        <span class="price">85 Lei</span>
        <a href="products/241" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
      <div class="product-box">
        <a href="products/253" class="img-container">
          <img src="images/qnt_no_elite_x12.png" alt="qnt_no_elite_x12.png">
        </a>
        <a href="products/253" class="atext">
          <span>NO ELITE SHOT 12X 80ML (960ML)</span>
        </a>
        <span class="price">65 Lei</span>
        <a href="products/253" class="btn btn-success btn-sm text-center custom">SHOW</a>
      </div>
    </div>
    <br><br><br>
@endsection

@section('layouts.footer')

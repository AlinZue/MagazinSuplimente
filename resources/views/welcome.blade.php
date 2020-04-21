<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>MonsterShop</title>
        <link rel="icon" type="image/png" href="favicon-32x32.png" sizes="32x32" />
        <link rel="icon" type="image/png" href="favicon-16x16.png" sizes="16x16" />

        <!-- Fonts -->
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>




        <!-- Styles -->
        <style>
        html, body {
              background-color: #fff;
              color: black;
              font-family: 'Nunito', sans-serif;
              font-weight: 200;
              height: 100vh;
              margin: 0;
          }

          .full-height {
              height: 100vh;
          }

          .flex-center {
              align-items: center;
              display: flex;
              justify-content: center;
          }

          .position-ref {
              position: relative;
          }

          .top-right {
              position: absolute;
              right: 10px;
              top: 18px;
          }

          .content {
              text-align: center;
          }

          .title {
              font-size: 84px;
          }

          .links > a {
              color: #636b6f;
              padding: 0 25px;
              font-size: 13px;
              font-weight: 600;
              letter-spacing: .1rem;
              text-decoration: none;
              text-transform: uppercase;
          }

          .m-b-md {
              margin-bottom: 30px;
          }

          .dropbtn {
            background-color: #343a40;
            color: white;
            padding: 16px;
            font-size: 16px;
            border: none;
          }

          .dropdown {
            position: relative;
            display: inline-block;
          }

          .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f1f1f1;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
          }

          .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
          }

          .dropdown-content a:hover {background-color: #ddd;}

          .dropdown:hover .dropdown-content {display: block;}

          .dropdown:hover .dropbtn {background-color: #008b33;}


        </style>

    </head>
    <body>
      <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
              <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                  <li class="nav-item">
                    <a class="nav-link" href="#">
                      <img src="pics/icon-phone.png" alt="Phone_icon">
                      0712 345 678
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="https://www.facebook.com">
                      <img src="pics/facebook.png" alt="Facebook" style="width:25px;height:25px;">
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="https://www.instagram.com">
                      <img src="pics/insta.png" alt="Instagram" style="width:25px;height:25px;">
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="https://www.youtube.com">
                      <img src="pics/youtube.png" alt="Youtube" style="width:20px;height:25px;">
                    </a>
                  </li>
                </ul>
              </div>
              @if (Route::has('login'))
                      <div class="top-right links">
                          @auth
                              <a href="{{ url('/home') }}">
                                <img src="home.png" alt="Home" style="width:30px;height:25px;">
                              </a>
                          @else
                              <a href="{{ route('login') }}">Login</a>
                              @if (Route::has('register'))
                                  <a href="{{ route('register') }}">Register</a>
                              @endif
                          @endauth
                          <a href="{{ url('cart') }}">
                            <img src="cart.png" alt="Shoping cart" style="width:25px;height:25px;">
                          </a>
                      </div>
                  @endif
            </div>
           </nav>
      </header>
      <div class="container">
        <img src="pics/aaaaaaa_whey_nutrend.jpg" alt="aaaaaaa_whey_nutrend" style="width:100%;height:120px;">
      </div>
      <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <a class="navbar-brand" href="home">Home</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="dropdown">
              <button class="dropbtn"><a href="promo" style="color: #ffffff;">Promo</a></button>
            </div>
            <div class="dropdown">
              <button class="dropbtn">Category</button>
              <div class="dropdown-content">
                <a href="categoryAccesory">Accessory</a>
                <a href="categoryAmino">Amino acids</a>
                <a href="categoryProteinBars">Protein bars</a>
                <a href="categoryGainers">Gainers</a>
                <a href="categoryCreatine">Creatine</a>
                <a href="categoryEnergy">Energy</a>
                <a href="categoryGlutamine">Glutamine</a>
                <a href="categoryProteinSnacks">Protein snacks</a>
                <a href="categoryProtein">Protein</a>
                <a href="categoryJointHealth">Joint health</a>
                <a href="categoryWheyLoss">Whey loss</a>
                <a href="categoryStimulation">Stimulation</a>
                <a href="categoryVitamins">Vitamins</a>
              </div>
            </div>
            <div class="dropdown">
              <button class="dropbtn">Brands</button>
              <div class="dropdown-content">
                <a href="brandsBpisports">BPI SPORTS</a>
                <a href="brandsBsn">BSN</a>
                <a href="brandsCellucor">CELLUCOR</a>
                <a href="brandsGaspariNutrition">GASPARI NUTRITION</a>
                <a href="brandsMadmax">MADMAX</a>
                <a href="brandsMuscletech">MUSCLETECH</a>
                <a href="brandsNutrend">NUTREND</a>
                <a href="brandsOptimumNutrition">OPTIMUM NUTRITION</a>
                <a href="brandsQnt">QNT</a>
                <a href="brandsUniversalNutrition">UNIVERSAL NUTRITION</a>
              </div>
            </div>
          </div>
          <div class="logo">
            <a class="navbar-brand" href="{{ url('/') }}">
                <img class="logo img-responsive" src="pics/poster4.png" alt="Welcome" width="160px" height="50px">
            </a>
          </div>
        </nav>
        </div>
      </div>
      <div class="container" id="promoted-products-corousel" style="margin-bottom: 100px;">
        <h2 style="color: white;">Recommended Products</h2>
        <div class="row">
          <div class="product-box">
            <a href="products/30" class="img-container">
              <img src="images/Shaker_gold.jpg" alt="Shaker_gold.jpg" style="height: 162px;">
            </a>
            <a href="products/30" class="atext">
            <span> DASO CADO <br> PREMIUM SHAKER GOLD </span>
            </a>
            <span class="price">120 Lei</span>
            <a href="products/30" class="btn btn-success btn-sm text-center custom">SHOW</a>
          </div>
          <div class="product-box">
            <a href="products/102" class="img-container">
              <img src="images/protein-bar-kokos-en.jpg" alt="protein-bar-kokos-en.jpg">
            </a>
            <a href="products/102" class="atext">
              <span>NUTREND <br> PROTEIN BAR 55GR </span>
            </a>
            <span class="price">5 Lei</span>
            <a href="products/98" class="btn btn-success btn-sm text-center custom">SHOW</a>
          </div>
          <div class="product-box">
            <a href="products/96" class="img-container">
              <img src="images/protein-wafer-bar.jpg" alt="protein-wafer-bar.jpg">
            </a>
            <a href="products/96" class="atext">
              <span>QNT <br> PROTEIN WAFER 35G </span>
            </a>
            <span class="price">6 Lei</span>
            <a href="products/98" class="btn btn-success btn-sm text-center custom">SHOW</a>
          </div>
          <div class="product-box">
            <a href="products/106" class="img-container">
              <img src="images/1579969048.jpg" alt="1579969048.jpg" style="height: 162px;">
            </a>
            <a href="products/106" class="atext">
              <span>OPTIMUM NUTRITION<br> WHEY PROTEIN</span>
            </a>
            <span class="price">250 Lei</span>
            <a href="products/98" class="btn btn-success btn-sm text-center custom">SHOW</a>
          </div>
          <div class="product-box">
            <a href="products/265" class="img-container">
              <img src="images/muscletech.png" alt="muscletech.png" style="height: 162px;">
            </a>
            <a href="products/265" class="atext">
              <span>MUSCLETECH <br> VAPOR X5 NEXT GEN 228G </span>
            </a>
            <span class="price">105 Lei</span>
            <a href="products/98" class="btn btn-success btn-sm text-center custom">SHOW</a>
          </div>
          <div class="product-box">
            <a href="products/259" class="img-container">
              <img src="images/1582207689.png" alt="1582207689.png" style="height: 162px;">
            </a>
            <a href="products/259" class="atext">
              <span>GASPARI NUTRITION <br> SUPERPUMP MAX</span>
            </a>
            <span class="price">180 Lei</span>
            <a href="products/259" class="btn btn-success btn-sm text-center custom">SHOW</a>
          </div>
          <div class="product-box">
            <a href="products/258" class="img-container">
              <img src="images/muscletech_arginina.jpg" alt="muscletech_arginina.jpg" style="height: 162px;">
            </a>
            <a href="products/258" class="atext">
              <span>MUSCLETECH<br>PLATINUM <br> 100% L-ARGININE</span>
            </a>
            <span class="price">80 Lei</span>
            <a href="products/258" class="btn btn-success btn-sm text-center custom">SHOW</a>
          </div>
          <div class="product-box">
            <a href="products/261" class="img-container">
              <img src="images/turbosnack.jpg" alt="turbosnack.jpg" style="height: 162px;">
            </a>
            <a href="products/261" class="atext">
              <span>NUTREND<br>TURBOSNACK <br> 25 ML</span>
            </a>
            <span class="price">7 Lei</span>
            <a href="products/261" class="btn btn-success btn-sm text-center custom">SHOW</a>
          </div>
        </div>
      </div>


</html>

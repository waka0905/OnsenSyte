<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>️温泉検索</title>
        <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
      integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N"
      crossorigin="anonymous"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
      integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct"
      crossorigin="anonymous"
    ></script>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
         <link rel="stylesheet" href="{{asset('css/index.css') }}">
         <link rel="icon" href="{{asset('img/favicon.ico')}}" >
         <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"/>
        </div>
    </head>
    <body class="body"> 
     <div class="all">
                 <!-- Swiper -->
        <div class="swiper mySwiper">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <img src="{{asset('img/background1.jpg')}}" style="height: 100%; max-height: 100%; object-fit: cover">
            </div>
            <div class="swiper-slide">
              <img src="{{asset('img/background2.jpg')}}" style="height: 100%; max-height: 100%; object-fit: cover">
            </div>
            <div class="swiper-slide">
              <img src="{{asset('img/background3.jpg')}}" style="height: 100%; max-height: 100%; object-fit: cover">
            </div>
            <div class="swiper-slide">
              <img src="{{asset('img/background4.jpg')}}" style="height: 100%; max-height: 100%; object-fit: cover">
            </div>
        <div class="back">
        <a href="https://still-ridge-56871.herokuapp.com/"
          ><img class="header" src="img/header2.png"/></a>
        </div>
        </div>
        </div>
        <div class="title">
        <h1>♨︎日帰り温泉</h1>
        <h1>検索サイト︎</h1>
        <h2>誰でも簡単温泉検索</h2>    
        </div>
          </div>
          
        <section class="container">
        <div class="jenre">
            <h1>ジャンルから探す</h1>
            <form action="/sytes/result" method="GET">
                @csrf
                 <nobr>
                サウナ
                <select name="sauna" id="">
                    <option value="">どちらでも良い</option>
                    <option value="1">サウナあり</option>
                    <option value="0">サウナなし</option>
                </select>
                岩盤浴
                <select name="ganban" id="">
                    <option value="">どちらでも良い</option>
                    <option value="1">岩盤浴あり</option>
                    <option value="0">岩盤浴なし</option>
                </select>
                炭酸泉
                 <select name="tansan" id="">
                    <option value="">どちらでも良い</option>
                    <option value="1">炭酸泉あり</option>
                    <option value="0">炭酸泉なし</option>
                </select>
                食事処
                 <select name="restaurant" id="">
                    <option value="">どちらでも良い</option>
                    <option value="1">食事処あり</option>
                    <option value="0">食事処なし</option>
                </select>
                </nobr>
                <div class="w-100 mt3 text-center text-lg-center" style="margin-top:0.7rem;">
                <input class="btn btn-info w25" type="submit" value="検索">
                </div>
            </form>
        </div>
        <div class="sub">
            <h1 class="area"><a href='/sytes/area'>エリアから探す</a></h1>
            <div class="img1" style="width:fit-content;">
                <img src="{{asset('img/関東.png')}}" >
            </div>
            <h1 class="review"><a href='/sytes/rank'>関東温泉レビューランキング３０選</a></h1>
            <div style="text-align:right;">※レビュー評価引用元：<a href="https://www.tripadvisor.jp/">Tripadvisor</a></div>
            <div class="img2"> 
                <img src="{{asset('img/ランキング.jpeg')}}" >
            </div>
        </div>
        </section>
            <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
       <script>
              var swiper = new Swiper(".mySwiper", {
                spaceBetween: 30,
                effect: "fade",
                fadeEffect: {
                  crossFade: true
                },
                autoplay: {
                  delay: 3000
                },
                speed: 2000,
                navigation: {
                  nextEl: ".swiper-button-next",
                  prevEl: ".swiper-button-prev"
                },
                pagination: {
                  el: ".swiper-pagination",
                  clickable: true
                }
              });
        </script>
    </body>
</html>
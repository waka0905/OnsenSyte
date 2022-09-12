<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>エリア検索</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('css/area.css') }}">
        <link rel="icon" href="{{asset('img/favicon.ico')}}" >
         @include('sytes.header')
    </head>
    <body class="body">
        <h1>エリア検索</h1>
        <details>
　      <summary style="font-size:40px;">東京都</summary>
　      <div style="position:relative;width:fit-content;">
　              <img class="Tokyo" src="{{asset('img/東京都.jpeg')}}">
　      <div class="Tokyo_east">
        <a href="/sytes/direction?direction=Tokyo_East">東部</a>
        </div>
        <div class="Tokyo_west">
        <a href="/sytes/direction?direction=Tokyo_West">西部</a>
        </div>
　      </div>
        </details>
        
        <details>
　      <summary style="font-size:40px;">神奈川県</summary>
　      <div style="position:relative;width:fit-content;">
　          <img class="Kanagawa"src="{{asset('img/神奈川県.png')}}">
　      <div class="Kanagawa_east">
        <a href="/sytes/direction?direction=Kanagawa_East">東部</a>
        </div>
        <div class="Kanagawa_west">
        <a href="/sytes/direction?direction=Kanagawa_West">西部</a>
        </div>
        </details>
        </div>
        
        <details>
　      <summary style="font-size:40px;">埼玉県</summary>
　      <div style="position:relative;width:fit-content;">
　          <img class="Saitama"src="{{asset('img/埼玉県.png')}}">
　      <div class="Saitama_east">
        <a href="/sytes/direction?direction=Saitama_East">東部</a>
        </div>
        <div class="Saitama_west">
        <a href="/sytes/direction?direction=Saitama_West">西部</a>
        </div>
        </details>
        </div>
        
        <details>
　      <summary style="font-size:40px;">千葉県</summary>
　      <div style="position:relative;width:fit-content;">
　          <img class="Chiba"src="{{asset('img/千葉県.jpeg')}}">
　      <div class="Chiba_North">
        <a href="/sytes/direction?direction=Chiba_North">北部</a>
        </div>
        <div class="Chiba_South">
        <a href="/sytes/direction?direction=Chiba_South">南部</a>
        </div>
        </details>
        </div>
        
        <details>
　      <summary style="font-size:40px;">群馬県</summary>
　      <div style="position:relative;width:fit-content;">
　          <img class="Gunma"src="{{asset('img/群馬県.png')}}">
　      <div class="Gunma_North">
        <a href="/sytes/direction?direction=Gunma_North">北部</a>
        </div>
        <div class="Gunma_South">
        <a href="/sytes/direction?direction=Gunma_South">南部</a>
        </div>
        </details>
        </div>
        
        <details>
　      <summary style="font-size:40px;">栃木県</summary>
　      <div style="position:relative;width:fit-content;">
　          <img class="Tochigi"src="{{asset('img/栃木県.png')}}">
　      <div class="Tochigi_North">
        <a href="/sytes/direction?direction=Tochigi_North">北部</a>
        </div>
        <div class="Tochigi_South">
        <a href="/sytes/direction?direction=Tochigi_South">南部</a>
        </div>
        </details>
        </div>
        
        
        <details>
　      <summary style="font-size:40px;">茨城県</summary>
　      <div style="position:relative;width:fit-content;">
　          <img class="Ibaraki"src="{{asset('img/茨城県.png')}}">
　      <div class="Ibaraki_North">
        <a href="/sytes/direction?direction=Ibaraki_North">北部</a>
        </div>
        <div class="Ibaraki_South">
        <a href="/sytes/direction?direction=Ibaraki_South">南部</a>
        </div>
        </details>
        </div>
        <img class="Japan" src="{{asset('img/日本.jpeg')}}">
    </body>
</html>
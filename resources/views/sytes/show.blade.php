<!DOCTYPE HTML>
<html lang="{{ str_replace("_", "-", app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ $syte->name }}</title>
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
        <link rel="stylesheet" href="{{asset('css/show.css') }}">
        <link rel="icon" href="{{asset('img/favicon.ico')}}" >
        @include('sytes.header')
    </head>
    <body class="body">
     <main>
        <h1 class="name">
            {{ $syte->name }}
        </h1>
        <h3><a href="{{ $syte->url }}">公式サイト</a></h3>
        <div class="img">
            <img class="img1" src="{{asset($syte->img1)}}">
            <img class="img2" src="{{asset($syte->img2)}}">
        </div>
        <div class="list">
            <li>住所:{{ $syte->prefecture }}{{ $syte->address }}</li>
            <li>最寄駅:{{ $syte->nearest }}</li>
            <li>入浴料:{{ $syte->price }}</li>
            <li>営業時間:{{ $syte->time }}</li>
            <li>休館日:{{ $syte->close }}</li>
            <li>送迎バス:{{ $syte->bus }}</li>
        </div>
        <div class="footer">
        </div>
     </main>
    </body>
</html>
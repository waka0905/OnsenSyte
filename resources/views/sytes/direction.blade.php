<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>方面検索</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('css/direction.css') }}">
        <link rel="icon" href="{{asset('img/favicon.ico')}}" >
        @include('sytes.header')
    </head>
    <body class="body">
        <div class="sytes">
            @foreach ($sytes as $syte)
                <div class="syte">
                <h2 class="name">
                <a href="/sytes/{{$syte->id}}">{{ $syte->name }}</h2>
                @include('sytes.picture')
                </div>
            @endforeach
        </div>
          <img class="Japan" src="{{asset('img/日本.jpeg')}}">
    </body>
</html>
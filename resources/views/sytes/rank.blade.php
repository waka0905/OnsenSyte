<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>ランキング３０選</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
         <link rel="stylesheet" href="{{asset('css/rank.css') }}">
        <link rel="icon" href="{{asset('img/favicon.ico')}}" >
        @include('sytes.header')
    </head>
    <body class="body">
        <main>
        <h1>関東温泉レビューランキング３０選</h1>
        <h3>
            <form action="/sytes/terms" method="GET">
                @csrf
                <select name="prefecture" id="">
                    <option value="東京都">東京都</option>
                    <option value="神奈川県">神奈川県</option>
                    <option value="埼玉県">埼玉県</option>
                    <option value="千葉県">千葉県</option>
                    <option value="群馬県">群馬県</option>
                    <option value="栃木県">栃木県</option>
                    <option value="茨城県">茨城県</option>
                </select>
                <input type="submit" value="絞り込み">
        </h3> 
        <div class="sytes">
            @foreach($sytes as $syte)
                <div class="syte">
                    <h2 class="name">
                        <a href="/sytes/{{$syte->id}}">{{ $syte->name }}</a>　　評価{{ $syte->review }}<div class="star"><img src="{{asset($syte->star)}}"></div>
                    </h2>
                    <img class="img" src="{{asset($syte->img1)}}">
                </div>
            @endforeach
        </div>
        <div class='paginate'>
            {{ $sytes->links() }}
        </div>
        
           
        </div>
        </main>
    </body>
</html>
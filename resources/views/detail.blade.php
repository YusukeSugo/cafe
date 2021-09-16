<!doctype html>
<html lang="{{ str_replace("_", "-", app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>CafeDetail</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="/css/app.css">
    </head>
    
    <body>
        <h2 class = title><a href="/">Cafe Infomation</a></h2>
        
        <div class = "login">
            <div class="loginInfo"><p>ログインをすると投稿にコメントできます</p></div>
            <input type = "button" onclick="location.href='{{ route('login') }}'" value = "ログイン">
        </div>
        
        <h3 class="cafeName">
            {{ $cafe->name }}
        </h3>
        <p class = "cafeMap">
        <a href = "/cafes/ {{ $cafe->id }} /map">{{ $cafe->address }}</a>
        </p>
       
        <img src="{{ $cafe->image_path }}">
        
        <div class="footer">
            <a href="/">戻る</a>
        </div>
    
    </body>
</html>
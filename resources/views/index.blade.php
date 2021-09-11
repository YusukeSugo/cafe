<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>CafeTop</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>Cafe Infomation</h1>
        <input type = "button" onclick="location.href='login.blade.php'" value = "ログイン">
        <form action =  "サイトURL" method = "get">
            <input type = "search" name = "search" placeholder = "検索したい都道府県">
            <input type = "submit" name = "submit" value = "検索">
        </form>
        <div class = 'cafes'>
            @foreach ($cafes as $cafe)
            <div class = 'cafe'>
                <h3><a href="/cafes/{{ $cafe -> id }}">{{ $cafe -> name }}</a></h3>
                <p class = "address"> {{ $cafe -> address }}</p>
            </div>
            @endforeach
        </div>
        <div class = 'entry'>[<a href='/cafes/entry'>カフェ登録</a>]</div>
    </body>
</html>
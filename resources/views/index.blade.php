<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @extends('layouts.app')
        <meta charset="utf-8">
        <title>CafeTop</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
    <div class="empty"></div>
        @section('content')
        <div id = title>
        <h1><a class="titlename" href="/">Cafe Infomation</a></h1>
        
            <div class="col-sm-4">
                <form class="form-inline" method="GET" action="/">
                    <div class="form-group">
                        <input type="text" name="keyword" value="{{ $keyword }}" class="form-control" placeholder="都道府県を入力してください">
                    </div>
                    <input type="submit" value="検索" class="btn btn-info">
                </form>
            </div>
        </div>
        
        
        <div class = 'cafes'>
            @foreach ($cafes as $cafe)
            <div class = 'cafe'>
                <div class="cafe_description">
                    <h3><a class="cafename" href="/cafes/{{ $cafe -> id }}">{{ $cafe -> name }}</a></h3>
                    <p class = "address"> {{ $cafe -> address }}</p>
                </div>
            </div>
            @endforeach
            
            {{ $cafes->links() }}
        </div>
       
        <div class = 'entry'>[<a href='/cafes/entry'>カフェ登録</a>]</div>
        <p>ログインを行うと投稿できます</p>
        
        @endsection
    </body>
</html>
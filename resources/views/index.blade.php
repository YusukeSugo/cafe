<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>CafeTop</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        
    </head>
    <body>
        <h1><a href="/">Cafe Infomation</a></h1>
        
        <div class="col-sm-4" style="padding:20px 0; padding-left:0px;">
            <form class="form-inline" method="GET" action="/">
                <div class="form-group">
                    <input type="text" name="keyword" value="{{ $keyword }}" class="form-control" placeholder="都道府県を入力してください">
                </div>
                <input type="submit" value="検索" class="btn btn-info">
            </form>
        </div>
        
        
        <div class = 'cafes'>
            @foreach ($cafes as $cafe)
            <div class = 'cafe'>
                <h3><a href="/cafes/{{ $cafe -> id }}">{{ $cafe -> name }}</a></h3>
                <p class = "address"> {{ $cafe -> address }}</p>
            </div>
            @endforeach
        </div>
       
        <div class = 'entry'>[<a href='/cafes/entry'>カフェ登録</a>]</div>
        <p>ログインを行うと投稿できます</p>
    </body>
</html>
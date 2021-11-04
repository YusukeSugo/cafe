<!doctype html>
<html lang="{{ str_replace("_", "-", app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>CafeDetail</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="/css/app.css">
    </head>
    
    <body class = detail>
        @extends('layouts.app')

        @section('content')
        <h2 class = title><a href="/">Cafe Infomation</a></h2>
        
        <div class =detailInfo>
            <h3 class="cafeName">
                {{ $cafe->name }}
            </h3>
            
            <p class = "cafeMap">
                GoogleMap:<a href = "/cafes/ {{ $cafe->id }} /map">{{ $cafe->address }}</a>
            </p>
        </div>
        
        @can('update', $cafe)
            <div class = ed_lin>
                <a class="btn btn-primary" href="/cafes/{{ $cafe->id }}/edit" role="button">編集</a>
            </div>
        @endcan
        
        <div class="detailImage" >
            <img src="{{ $cafe->image_path }}">
        </div>
        
        <div class = 'comments'>
            <h2>コメント</h2>
            <ul>
                @forelse ($cafe->comments as $comment)
                    <li>{{ $comment->body }}</li>
                @empty
                    <li>まだコメントされていません</li>
                @endforelse
            </ul>
            
            @if(!Auth::check())
                <h2>ログインするとコメントできます</h2>
            @endif
    
            @if(Auth::check())
                <h2>コメントを追加する</h2>
                <form method="post" action="{{ action('CommentController@store', $cafe->id) }}">
                    @csrf
                        <p>
                            <input type="text" name="body" placeholder="コメント内容" value="{{ old('body') }}">
                            @if ($errors->has('body'))
                                <span class="error">{{ $errors->first('body') }}</span>
                            @endif
                        </p>
                    <p>
                        <input type="submit" value="コメントする">
                    </p>
                </form>
            @endif
            <a href="/" class="footer">戻る</a>
        </div>
    @endsection
    </body>
    
</html>

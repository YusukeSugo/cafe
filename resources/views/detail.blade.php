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
        
        @if(!Auth::check())
        <div class = "login">
            <div class="loginInfo"><p>ログインをすると投稿にコメントできます</p></div>
            <input type = "button" onclick="location.href='{{ route('login') }}'" value = "ログイン">
        </div>
        @endif
        
        <h3 class="cafeName">
            {{ $cafe->name }}
        </h3>
        <p class = "cafeMap">
        <a href = "/cafes/ {{ $cafe->id }} /map">{{ $cafe->address }}</a>
        </p>
       
        <img src="{{ $cafe->image_path }}">
        
        
        <h2>コメント</h2>
        <ul>
            @forelse ($cafe->comments as $comment)
                <li>{{ $comment->body }}</li>
            @empty
            <li>まだコメントされていません</li>
            @endforelse
        </ul>

        @if(Auth::check())
        <h2>コメントを追加する</h2>
        <form method="post" action="{{ action('CommentController@store', $cafe->id) }}">
          {{ csrf_field() }}
          <p>
            <input type="text" name="name" 
            <input type="text" name="body" placeholder="コメント内容" value="{{ old('body') }}">
            @if ($errors->has('body'))
            <span class="error">{{ $errors->first('body') }}</span>
            @endif
          </p>
          <p>
            <input type="submit" value="コメントする">
          </p>
        </form>
        
        <a href={{ route('logout') }} onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                Logout
            </a>
            <form id='logout-form' action={{ route('logout')}} method="POST" style="display: none;">
            @csrf
        @endif
        
        <div class="footer">
            <a href="/">戻る</a>
        </div>
    
    </body>
</html>
<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>CafeEntry</title>
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="/css/app.css">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    </head>
    <body class = "detail">
        
        <h1 class = "eeTitle">CafeInfomation</h1>
        <h2>編集ページ</h2>
        <p>全ての項目を編集する必要があります</p>
        <form action="{{ route('cafe.update', $cafe) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="entryInfo">
            
                <div class="cafeEdit">
                    <input class="ef" type="text" name="cafe[name]" placeholder="{{ $cafe->name}}">
                    <span class="focus_bg"></span>
                </div>
        
                <div class="cafeEntry">
                    <input class="ef" type="text" name="cafe[prefecture]" placeholder="{{ $cafe->prefecture }}">
                    <span class="focus_bg"></span>
                </div>
        
        
                <div class="cafeEntry">
                    <input class="ef" type="text" name="cafe[address]" placeholder="{{ $cafe->address}}">
                    <span class="focus_bg"></span>
                </div>
        
                <div class="editImage" >
                    <img src="{{ $cafe->image_path }}">
                </div>
                
                <div class = "cafe_image">
                    <h2>カフェの写真</h2>
                    <p>画像拡張子をjpegかpngに変更する必要があります</p>
                    <input type="file" name="image">
                </div>
            </div>
        <div class ="submitBt">       
            <input type="submit" value="編集完了"/>
        </div>
    </form>
        <div class = "back">
            <a href="/" class="footer">戻る</a>
        </div>    
    </body>
</html>
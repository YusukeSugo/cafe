<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>CafeEntry</title>
        <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    </head>
    <body>
        
        <h1 id = "entryTitle">CafeInfomation</h1>
        <form action="/cafes" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="entryInfo">
            
                <div class="cafeEntry">
                    <input class="ef" type="text" name="cafe[name]" placeholder="">
                    <label>カフェ名</label>
                    <span class="focus_bg"></span>
                </div>
        
                <div class="cafeEntry">
                    <input class="ef" type="text" name="cafe[prefecture]" placeholder="">
                    <label>都道府県</label>
                    <span class="focus_bg"></span>
                </div>
        
        
                <div class="cafeEntry">
                    <input class="ef" type="text" name="cafe[address]" placeholder="">
                    <label>住所</label>
                    <span class="focus_bg"></span>
                </div>
        
                <div class = "cafe_image">
                    <h2>カフェの写真</h2>
                    <input type="file" name="image">
                </div>
            </div>
        <div class ="submitBt">       
            <input type="submit" value="登録"/>
        </div>
    </form>
        <a href="/" class="footer">戻る</a>
    </body>
</html>
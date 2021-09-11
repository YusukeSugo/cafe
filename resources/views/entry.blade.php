<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>CafeEntry</title>
    </head>
    <body>
        <h1>CafeInfomation</h1>
        <form action="/cafes" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="cafeName">
                <h2>カフェの名前</h2>
                <input type="text" name="cafe[name]" placeholder="カフェの名前"/>
            </div>
            <div class="prefecture">
                <h2>都道府県</h2>
                <input type="text" name="cafe[prefecture]" placeholder="都道府県"/>
            </div>
            <div class = "address">
                <h2>住所</h2>
                <input type="text" name="cafe[address]" placeholder="住所"/>
            </div>
            <div class = "cafe_image">
                <h2>カフェの写真</h2>
                <input type="file" name="image">
            </div>
            
            <input type="submit" value="登録"/>
        </form>
        <div class="back">[<a href="/">back</a>]</div>
    </body>
</html>
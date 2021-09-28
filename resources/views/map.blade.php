<!doctype html>
<html lang="{{ str_replace("_", "-", app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>CafeMap</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="/css/app.css">
    </head>
    
    <body>
        <p id="cafe"> {{  $cafe->name  }}</p>
        <p id="address"> {{ $cafe->address }}</p>
        <div id="gmap" style="height:400px;width:600px"></div>
            <div class="footer">
                <a href="/cafes/{{ $cafe->id }}">戻る</a>
            </div>
        
    <script>
    function initMap() {
      var target = document.getElementById('gmap');  
      var address = document.getElementById('address').textContent; 
     
      var geocoder = new google.maps.Geocoder();  
      
      geocoder.geocode({ address: address }, function(results, status){
         if (status === 'OK' && results[0]){  
            var map = new google.maps.Map(target, {  
              center: results[0].geometry.location,
              zoom: 16
            });
          
            var marker = new google.maps.Marker({
              position: results[0].geometry.location,
              map: map,
              animation: google.maps.Animation.DROP
            });
           
            var infoWindow = new google.maps.InfoWindow({
              content: document.getElementById('cafe'),
              pixelOffset: new google.maps.Size(0, 5)
            });
     
           marker.addListener('click', function(){
              infoWindow.open(map, marker);
            });
           
         }else{ 
           alert('失敗しました。理由: ' + status);
           return;
         }
      });
    }
    </script> 
    <script src="https://maps.googleapis.com/maps/api/js?key={{ config('services.gmap.key') }}&callback=initMap" async defer></script>
    
    </body>
</html>
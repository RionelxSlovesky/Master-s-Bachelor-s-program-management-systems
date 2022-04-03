<!DOCTYPE html>
<html>
  <head>
    <title>UniKhoj Office</title>

    <link rel="stylesheet" type="text/css" href="./style.css" />
    <script src="./index.js"></script>
    <style type="text/css">

          #map{
              width:1500px;
              height:700px;
          }  

    </style>
<script>
    let map ;
    function initMap() {
  // The location of Uluru
  const nsu = { lat: 23.81513, lng: 90.42555 };
  // The map, centered at Uluru
  const map = new google.maps.Map(document.getElementById("map"), {
    zoom: 4,
    center: nsu,
  });
  // The marker, positioned at Uluru
  const marker = new google.maps.Marker({
    position: nsu,
    map: map,
  });
}
</script>

  </head>
  <body>
    <h3>My Google Maps Demo</h3>
    <!--The div element for the map -->
    <div id="map"></div>

    <!-- Async script executes immediately and must be after any DOM elements used in callback. -->
    <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAVO6LFnF0cNs6cgxPwk8X_etkAPYi5yFA&callback=initMap&v=weekly"
      async
    ></script>
  </body>
</html>
    
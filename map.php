<!DOCTYPE html>
<html>
  <head>
    <title>UniKhoj Office</title>

    <link rel="stylesheet" type="text/css" href="./style.css" />
    <script src="./index.js"></script>
<script>
    let map ;
    function initMap() {
  // The location of NSU
  const nsu = { lat: 23.81513, lng: 90.42555 };
  // The map, centered at NSU
  const map = new google.maps.Map(document.getElementById("map"), {
    zoom: 4,
    center: nsu,
  });
  // The marker, positioned at NSU
  const marker = new google.maps.Marker({
    position: nsu,
    map: map,
  });
}
</script>

  </head>
  <body>
  </body>
</html>
    
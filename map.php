<!DOCTYPE html>
<html>
  <head>
    <title>UniKhoj Office</title>

    <link rel="stylesheet" type="text/css" href="./style.css" />
    <script src="./index.js"></script>
<script>
    let map ;
    function initMap() {
<<<<<<< HEAD
  // The location of Unikhoj
  const nsu = { lat: 23.81513, lng: 90.42555 };
  // The map, centered at Unikhoj
=======
  // The location of NSU
  const nsu = { lat: 23.81513, lng: 90.42555 };
  // The map, centered at NSU
>>>>>>> 10fb289e830f11477aa5802c77d2d9bc4fe11b08
  const map = new google.maps.Map(document.getElementById("map"), {
    zoom: 4,
    center: nsu,
  });
<<<<<<< HEAD
  // The marker, positioned at Unikhoj
=======
  // The marker, positioned at NSU
>>>>>>> 10fb289e830f11477aa5802c77d2d9bc4fe11b08
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
    
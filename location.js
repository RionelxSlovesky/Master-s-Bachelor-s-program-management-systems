var lats = document.getElementById("lats");
var longs = document.getElementById("longs");


function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition);
  } else { 
    x.innerHTML = "Geolocation is not supported by this browser.";
  }
}

function showPosition(position) {
  lats.value= position.coords.latitude;
  longs.value= position.coords.longitude;
}
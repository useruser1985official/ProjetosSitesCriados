var lat;
var lon;

if(navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(function(posicao) {
        console.log(posicao);

        lat = posicao.coords.latitude;
        lon = posicao.coords.longitude;

        console.log(lat, lon);
    });
}
@extends('home.template')
@section('content')

<?php

?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="initial-scale=1.0">
<meta charset="utf-8">
<style>

  #map {
    height: 100%;
  }
  /* hace que el maca abarque toda la pantalla*/
  html, body {
    height: 100%;
    margin: 0;
    padding: 0;
  }
</style>
</head>
<body>
  <!--generalmente se utiliza un div y se le da un tamano responsive claro esta pero en mi
mi opinion es preferible utilizar los article pero e cuestion de gusto esto es donde se conectargara el
mapa-->
<div id="map"></div>
<script>
  var map;
  function initMap() {
    ///esto crea el mapa
    map = new google.maps.Map(document.getElementById('map'), {
      //aqui dentro podemos definir sus atributos y propiedades asi como sus tipos de funciones
      //se podria poner en un archivo externo decss para la parte de styles que es la que le da al mapa
      //sus propios colores y estilo de esta manera el codigo seria mucho mas limpio
      center: {lat: 9.998109, lng: -84.675324},
      zoom: 17,
      styles: [
{
"featureType": "administrative.country",
"elementType": "labels.text.fill",
"stylers": [
 { "hue": "#ffee00" },
 { "color": "#51a386" },
 { "saturation": -33 },
 { "lightness": -16 },
 { "gamma": 0.85 }
]
},{
"featureType": "administrative.country",
"elementType": "geometry.stroke",
"stylers": [
 { "visibility": "on" },
 { "color": "#ffffff" }
]
},{
"featureType": "road.local",
"elementType": "geometry.stroke",
"stylers": [
 { "visibility": "on" },
 { "color": "#5CA47A" },
 { "lightness": 59 }
]
},{
"featureType": "road.highway",
"elementType": "geometry.fill",
"stylers": [
 { "visibility": "on" },
 { "color": "#D2E28B" },
 { "gamma": 0.55 },
 { "saturation": -14 },
 { "lightness": 67 }
]
},{
"featureType": "water",
"elementType": "geometry.fill",
"stylers": [
 { "visibility": "on" },
 { "gamma": 1.66 },
 { "color": "#A8CF45" },
 { "saturation": 42 },
 { "lightness": 91 },
 { "hue": "#00ffe6" }
]
},{
"featureType": "landscape.natural.landcover",
"elementType": "geometry.fill",
"stylers": [
 { "visibility": "on" },
 { "gamma": 0.85 },
 { "saturation": 42 },
 { "hue": "#00b2ff" },
 { "lightness": 33 },
 { "color": "#DBE4C2" }
]
},{
"featureType": "landscape.natural.terrain",
"elementType": "geometry",
"stylers": [
 { "visibility": "on" },
 { "color": "#A8CF45" },
 { "lightness": 85 }
]
},{
"featureType": "water",
"elementType": "labels.text.stroke",
"stylers": [
 { "visibility": "on" },
 { "color": "#8C9C7B" },
 { "saturation": -3 },
 { "lightness": 59 }
]
},{
"featureType": "road.arterial",
"elementType": "geometry.stroke",
"stylers": [
 { "visibility": "on" },
 { "color": "#AFDFE5" }
]
},{
"featureType": "road.arterial",
"elementType": "geometry.fill",
"stylers": [
 { "visibility": "on" },
 { "color": "#51A8B1" }
]
},{
"featureType": "road.local",
"elementType": "geometry.fill",
"stylers": [
 { "visibility": "on" },
 { "color": "#CCE7D4" }
]
},{
"featureType": "road.local",
"elementType": "geometry.stroke",
"stylers": [
 { "visibility": "on" },
 { "color": "#A8CF45" },
 { "hue": "#0099ff" },
 { "lightness": 52 }
]
},{
"featureType": "administrative.province",
"elementType": "geometry.stroke",
"stylers": [
 { "visibility": "on" },
 { "hue": "#0008ff" },
 { "color": "#82ade6" }
]
},{
"featureType": "administrative.province",
"elementType": "labels.text.fill",
"stylers": [
 { "visibility": "on" },
 { "hue": "#1900ff" },
 { "color": "#6e9fca" }
]
},{
"featureType": "administrative.locality",
"elementType": "labels.text.fill",
"stylers": [
 { "visibility": "on" },
 { "color": "#0840ff" },
 { "hue": "#0000ff" },
 { "lightness": -58 },
 { "gamma": 1.15 },
 { "saturation": -51 }
]
},{
"featureType": "landscape.man_made",
"elementType": "geometry.fill",
"stylers": [
 { "visibility": "on" },
 { "hue": "#cc00ff" },
 { "color": "#9880c8" },
 { "gamma": 0.18 },
 { "lightness": 95 }
]
},{
"featureType": "transit.line",
"elementType": "geometry.fill",
"stylers": [
 { "visibility": "on" },
 { "color": "#ff8080" },
 { "saturation": 100 },
 { "gamma": 0.1 },
 { "hue": "#0011ff" },
 { "lightness": 91 }
]
},{
"featureType": "transit.station.airport",
"stylers": [
 { "color": "#5CC6D0" }
]
},{
"featureType": "road.highway",
"elementType": "geometry.stroke",
"stylers": [
 { "visibility": "on" },
 { "hue": "#00ff4d" },
 { "color": "#80a980" }
]
}
],

  mapTypeId: google.maps.MapTypeId.ROADMAP,
     panControl:true,
zoomControl:true,
mapTypeControl:true,
scaleControl:true,
streetViewControl:true,
overviewMapControl:true,
rotateControl:true,
   zoomControlOptions: {
       style: google.maps.ZoomControlStyle.SMALL,
       position: google.maps.ControlPosition.LEFT_CENTER
   }
    });
///este codigo nos genera un marcador
    var place = new google.maps.LatLng(9.998109,-84.675324);
var marker = new google.maps.Marker({
position: place, title: 'punto de prueba', map: map});
  }
</script>
<!--es importante odtener el api de maps ya que sin el nada serviria despues del true en la parte que dice key
estarias utilizando mi apikey segun normas de google maps cada desarrollador deberia poner su api key rspectiva de su proyecto
en otras palabras deberias de utilizar la tuya para cargar el mapa solo debes de cambiarla...sludos y suerte con tu proyecto
-->
  <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=truekey=AIzaSyCBGQ9Mph7sMppK-C-jHn7wtFv_45DTpvw&callback=initMap">
async defer></script>
</body>
</html>

@stop

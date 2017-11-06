@extends('home.template')
@section('content')

<!DOCTYPE html>
<html>
  <head>
    <title>dotiU™-Mapa</title>
    <style>
      body,html {height:100%}

      #map {width:100%;height:100%;}
    </style>
    <!--se requiere de jquery y api de google maps con su apikey en este caso estarias utilizando la misma de la app-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <script src="http://maps.googleapis.com/maps/api/js?sensor=true"></script>
    <script>
  //se requiere de este metodo para probar geolocalizacion por navegador y gps y si no esta disponible genera el rreporte de error-->

      function initGeolocation() {
        if (navigator && navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(successCallback, errorCallback);
        } else {
          console.log('Geolocation is not supported');
        }
      }

      function errorCallback() {}
      //si todo sale bien se procesa el mapa y se otiene la latitud y longitud, en map_options se encuentra estilos del mapa y demas opciones del mismo-->

      function successCallback(position) {
        var myLatlng = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);
        var map_options = {
          zoom: 15,
          center: myLatlng,
          gestureHandling: "greedy",
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
          position: google.maps.ControlPosition.RIGHT_CENTER
          }
        }
       map_container = document.getElementById('map');
       var map = new google.maps.Map(map_container, map_options);

       //marcador default-->
       var markcolor={
       url: 'img/mark.png',
       size: new google.maps.Size(39, 40),
       // The origin for this image is (0, 0).
       origin: new google.maps.Point(0, 0),
       // The anchor for this image is the base of the flagpole at (0, 32).
       anchor: new google.maps.Point(0, 40)
       };

       var marker = new google.maps.Marker({
       draggable:true,
       position:myLatlng,
       animation: google.maps.Animation.DROP,
       map: map,
       icon:markcolor,
       zIndex:1.0,
       title:"Ubicacion actual! (Se encuentra alrededor de esta area en un perimetro de "+position.coords.accuracy+" meter radius)"
       });  marker.addListener('click');


       var victima = {
       url: 'img/victimab.png',
       size: new google.maps.Size(21, 20),
       origin: new google.maps.Point(0, 0),
       anchor: new google.maps.Point(0, 20)
       };
       var testigo = {
       url: 'img/testigob.png',
       size: new google.maps.Size(21, 20),
       origin: new google.maps.Point(0, 0),
       anchor: new google.maps.Point(0, 20)
       };

       var shape = {
       coords: [1, 1, 1, 20, 18, 20, 18, 1],
       type: 'poly'
       };

       $.ajax({
       url: 'http://dotiuapp.dx.am/obtenerdDatos.php',//esto con un archivo php
       //url : 'http://miservidorremoto.com/clase/metodo',//esto con codeigniter :D
       type: 'GET',//tipo de petición
       dataType: 'jsonp',//tipo de datos
       jsonp: 'callback',//nombre de la variable get para reconocer la petición
       timeout: 9000,
       error: function(xhr, status, error) {
       alert("error");
       },
       success: function(data, status){
       $.each(data, function(i,item){

        if(item.validar==0){
            if (item.tipo==1) {
       var place = new google.maps.LatLng(item.lat,item.lng);
       var marker = new google.maps.Marker({
       position: place, title: 'Testigo',
        map: map,
         icon: testigo});
        }else{

       var place = new google.maps.LatLng(item.lat,item.lng);
       var marker = new google.maps.Marker({
       position: place, title: '"Victima!"',
        map: map,
         icon: victima                    });

        }

       } else {if (item.tipo==1) {

       var contentString = '<div id="iw-container">' +
       '<div class="iw-title">Testigo</div>' +
       '<div class="iw-content">' +
       '<p>'+item.comentario+'.</p>' +
       '<div class="iw-bottom-gradient"></div>' +
       '</div>';

       var infowindow = new google.maps.InfoWindow({
       content: contentString
       });
       var place = new google.maps.LatLng(item.lat,item.lng);
       var marker = new google.maps.Marker({
       position: place, title: '"Testigo!"',
        map: map,
         icon: testigo,
        snippet:(item.comentario)
       });
       marker.addListener('click', function() {
       infowindow.open(map, marker);

       });

       }else{

       var contentString = '<div id="iw-container">' +
       '<div class="iw-title">Victima</div>' +
       '<div class="iw-content">' +
       '<p>'+item.comentario+'.</p>' +
       '<div class="iw-bottom-gradient"></div>' +
       '</div>';


       var infowindow = new google.maps.InfoWindow({
       content: contentString
       });
       var place = new google.maps.LatLng(item.lat,item.lng);
       var marker = new google.maps.Marker({
       position: place, title: '"Victima!"',
        map: map,
         icon: victima,
        snippet:(item.comentario)
       });
       marker.addListener('click', function() {
       infowindow.open(map, marker);
       });
       }
       }
       });
       }
       });



      }




    </script>
  </head>
  <body onload="javascript:initGeolocation()">
    <div id="map">
    </div>
  </body>
</html>
@stop

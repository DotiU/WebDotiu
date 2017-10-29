@extends('admin.template')
@section('content')








  <div class="container text-center">
    <div class="page-header">
      <h1>
        <i class="fa fa-map-marker"></i>
        Marcadores Registrados<a href="" class=""></a>
      </h1>
    </div>
    <div class="page">
      <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover">
          <thead>
            <tr>

              <th>Eliminar</th>
              <th>Ubicacion</th>

              <th>Comentario</th>
             <th>Tipo</th>

            </tr>
          </thead>
          <tbody>
            @foreach($ubicaciones as $ubicacion)

              <tr>

                <td>
                  <a href="{{URL::action('AdminMapaController@destroy',$ubicacion->id)}}" class="btn btn-primary">
                    <i class="fa fa-trash-o"></i>

               </td>
                <td id="latlng">{{ $ubicacion->lat }},{{ $ubicacion->lng }}</td>

                <td>{{ $ubicacion->comentario }}</td>
                <td>{{ $ubicacion->tipo }}</td>

              </tr>
              <script type="text/javascript">

                var geocoder = new google.maps.Geocoder;
                var infowindow = new google.maps.InfoWindow;

              window.onload= function geocodeLatLng(geocoder) {
                var td = document.getElementById('latlng').value;
                var latlngStr = td.split(',', 2);
                var latlng = {
                  lat: parseFloat(latlngStr[0]),
                  lng: parseFloat(latlngStr[1])
                };
                geocoder.geocode({
                  'location': latlng
                });
              }

              </script>
            @endforeach
          </tbody>
        </table>
      </div>

    </div>
<a href="/admin/home"><button class="btn btn-primary" type="button" name="button"><i class="fa fa-chevron-circle-left" aria-hidden="true"></i>&nbsp Menú Principal</button></a>
  </div>

  @stop

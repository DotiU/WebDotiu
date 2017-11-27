@extends('home.template')
@section('content')
@include('home/partials/slider')

<!DOCTYPE html>
<html>
<title>dotiU™-Acoso Callejero</title>
<head>
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

  <link rel="stylesheet" href="{{asset('css/styles.css')}}">
</head>

<body>

  <div class="container">
  <section class="row" id="first-row">
      <h3 class="hvr-back-pulse" style="text-align: center">¿Qué es el acoso sexual callejero (ASC)?</h3>
        <div class="col-lg-4 hvr-pulse-shrink">
        <img src="/img/acoso-icon.png" id='imgAcoso' width="30%" class="img-responsive" alt="Imagen responsive">
          </div>
          <div class="col-xs-12 col-sm-8 col-md-8">
            <p>El ASC se refere a prácticas de connotación sexual que son ejercidas por una persona <br>
            desconocida en espacios públicos, estas suelen generar malestar en la víctima. Estas <br>
            acciones son unidireccionales, es decir, no son consentidas por la víctima y quien <br>
            acosa no tiene interés en entablar una comunicación real con la persona agredida. <br><br>
            Las prácticas de acoso sexual callejero son sufridas de manera sistemática, en especial <br>
            por las mujeres, ocurriendo varias veces al día, desde aproximadamente los 12 años, lo<br>que
            genera traumatización no sólo por hechos de acoso graves, sino por su recurrencia.</p>
          </div>
    </section>

    <section class="main row" id="second-row">
      <h3 class="hvr-back-pulse">Consecuencias del Acoso Sexual Callejero</h3>
      <div class="col-lg-1"></div>
      <div class="col-xs-12 col-sm-8 col-md-7">
        <p>Puede producir un gran número de efectos mentales negativos en las víctimas. <br><br>
          El acoso de un extraño induce al miedo de la victimización sexual. <br><br>
          Las víctimas suelen revivir intensamente la agresión sufrida. <br><br>
          Generea una respuesta de alerta exagerada en las víctimas. <br><br>
          Efectos negativos en la salud de las víctimas, como dolores de cabeza o problemas gastrointestinales.</p>
      </div>
      <div class="col-lg-4 hvr-pulse-shrink">
        <img src="/img/mujer-icon.png"  id='imgAcoso' width="28%" class="img-responsive" alt="Imagen responsive">
      </div>
    </section>

    <section class="row" id="third-row">
      <h3 class="hvr-back-pulse" style="text-align: center">Acoso Sexual Callejero en Costa Rica</h3>
      <div class="col-lg-4 hvr-pulse-shrink">
        <img src="/img/stop-icon.png" id='imgAcoso'  width="30%" class="img-responsive" alt="Imagen responsive">
      </div>
      <div class="col-xs-12 col-sm-8 col-md-8">
        <p>Silbidos, los populares "piropos", expresiones vulgares, besos robados, gestos vulgares <br>
            rozamientos y toques en la zona íntima, actos de exhibicionismo, persecusiones, entre otras<br>
            cosas forman parte de la realidad vivida diariamentem en su mayoría por mujeres, en las <br>
            calles costarricenses. <br><br>
            Según una encuesta realizada a nivel nacional por la Escuela de la Estadística de la <br>Universidad de Costa Rica, un 80% de las mujeres en el país vivieron al menos 7 tipos <br>
            de acoso diferentes en el año 2015.<br><br>
            Además, esta encuesta revela que las mujeres entre 18 y 29 años son las más victimizadas<br>
            con un 89,4%. Siendo los silbidos (36,2%) y  escuchar el pito de un vehículo con intenciones<br>
            sexuales (37,7%) las acciones más comunes entre los acosadores.</p>
      </div>
    </section>
    </div>

    <!--<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>-->

</body>
</html>

 @stop

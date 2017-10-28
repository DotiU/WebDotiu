@extends('home.template')
@section('content')

<title>dotiU™</title>
  <img src="img/img-publicidad.jpg" class="img-responsive " alt="" height="25%">
<div class="container" id='contenedor-centrado' >


  <div class="row" id='content-home'>
  <h1 id=titulo >dotiU™</h1>
    <div class="col-lg-8">

    <P class="info" >DOTIU™ es la primer aplicación de acoso y navegación hecha en Costa Rica. El fin de la aplicación consiste en dar un
        monitoreo real del acoso callejero en las calles, aceras y comunidades a lo largo de Costa Rica.Únete a la aplicación
        y comparte información en tiempo real para disminuir el acoso callejero</P>
<h2 id='slogan'>¡Construyendo una convivencia libre de acoso!</h2>

<a href="{{'https://play.google.com/store?hl=es'}}"><img src="/img/google.png" alt="" width="25%" class="img-responsive" alt="Imagen responsive" id='stores'></a>

    </div>


    <div class="col-lg-4">
      <img  src="/img/emulador1.png" alt="" width="60%" class="img-responsive" alt="Imagen responsive" id='emulador'>

    </div>


  </div>

<span class="col"></span>

<div class="row-center" id="carrete-container">
 <div class="col-sm-4"><img src="/img/carrete1.png" class="img-responsive" alt="" width="50%" id="img-res"><h2>Género</h2><p id="carrete1">dotiU está dirigida a personas <br>de cualquier sexo y edad, pues <br> su interés esta en la disminución <br> del acoso callejero que afecta a <br> la sociedad en general.</p></div>
<div class="col-sm-4"><img src="/img/carrete2.png" class="img-responsive" alt=""  width="50%" id="img-res"><h2>Ubicación</h2><p id="carrete1">Agrega puntos de acoso en el mapa,<br> de acuerdo a las situaciones que <br> hayas experimentado</p></div>
  <div class="col-sm-4"><img src="/img/carrete3.png" class="img-responsive" alt=""  width="50%" id="img-res"><h2>Tiempo Real</h2><p id="carrete1">Revisa el mapa para conocer las <br> zonas más riesgosas del país <br>y de esta forma evitar exponerte <br> a situaciones de riesgo.</p></li></div>
</div>

</div>



<!---

  <ul class="carrete">
    <li><img src="/img/carrete1.png" class="img-responsive" alt="" width="73%"><h2>Género</h2><p id="carrete1">dotiU está dirigida a personas <br>de cualquier sexo y edad, pues <br> su interés esta en la disminución <br> del acoso callejero que afecta a <br> la sociedad en general.</p></li>
    <li><img src="/img/carrete2.png" class="img-responsive" alt=""  width="73%"><h2>Ubicación</h2><p id="carrete1">Agrega puntos de acoso en el mapa,<br> de acuerdo a las situaciones que <br> hayas experimentado</p></li>
    <li><img src="/img/carrete3.png" class="img-responsive" alt=""  width="73%"><h2>Tiempo Real</h2><p id="carrete1">Revisa el mapa para conocer las <br> zonas más riesgosas del país <br>y de esta forma evitar exponerte <br> a situaciones de riesgo.</p></li>
  </ul>
</section> --->

  <section class="linea">
    <div class="row">

      <div class="col-lg-4">
          <img src="/img/acoso.png" class="img-responsive" alt="" width="30%" id="imgAcoso" >
      </div>


    <div class="col-lg-8">
      <h2>Qué es acoso callejero?</h2>
     <p>El acoso sexual callejero es un tipo de violencia particular, tanto física como  verbal, ya que por lo general no implica una relación entre <br>
        la víctima y su agresor. Esta violencia incluye prácticas como silbidos, comentarios sexualmente explícitos, miradas fijas, masturbación pública, <br>
         seguimiento, tocamientos (“metida de mano”), exhibicionismo (mostrar los genitales), entre otros, del que son víctima las mujeres cotidianamente <br>
          en la calle o en el transporte público.</p>


          <a href="acoso">Ver más</a>
    </div>
  </section>
</div>

<div class="row" >

  <div class="col-lg-4">
      <img src="/img/stop-icon.png" class="img-responsive" alt="" width="30%" id="imgAcoso" >
  </div>


<div class="col-lg-8" id=row-contacto2>
<h1>Alto al acoso callejero</h1>
  <h2>2017-09-14</h2>
  <p>Los piropos callejeros han comenzado a ser un problema un para mi, ultimamente suceden demasiado seguido y ya no aguanto la rabia, la frustracion y la sensacion de inferioridad, me da miedo salir a la calle sola por que se que me van a denigrar. Necesito algun consejo por favor, de verdad esta arruinando mi vida ):</p>
<a href="foro">Ver más</a>

</div>
</section>
</div>

<div class="row" id="galeria-home">
  <div class="col-sm-4">
    <center><p>Campaña contra el acoso callejero</p></center>
    <img src="img/img-acoso2.jpeg" class="img-responsive">
    </div>


  <div class="col-sm-4">
    <center><p>Campaña contra el acoso callejero</p></center>
  <img src="img/img-acoso3.jpeg" class="img-responsive">
  </div>

  <div class="col-sm-4">
    <center><p>Campaña contra el acoso callejero</p></center>
   <img src="img/img-acoso4.jpeg" class="img-responsive">
 </div>

</div>






@stop

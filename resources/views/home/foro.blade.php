@extends('home.template')
@section('content')
<title>@yield('Foro')</title>


  <div class="video-responsive">
  <iframe src="https://www.youtube.com/embed/oOaCp59JDkU" frameborder="0" allowfullscreen></iframe>
  </div>

  <div class="row" id='row-contacto'>
    <div class="col-sm-6">
      <h1>Testimonios Compartidos</h1>
    </div>

    <div class="col-sm-6">
      <h1>Compartir Testimonio</h1>
    </div>

  </div>
  <div class="container">
    @foreach($mensajes as $mensaje)
  <div class="row" id=row-contacto2>
    <div class="col-sm-6">
      <h1>{{$mensaje->titulo}}</h1>
      <h2>{{$mensaje->created_at}}</h2>
      <p>{{$mensaje->mensaje}}</p>
        <p>{{$mensaje->usuario}}</p>
      <a href="#">Leer más</a>
    </div>
  </div>
  @endforeach
  <div class="page">
<a href="login"><p>Inicia sesión para poder ser parte del Foro Abuso Cr</p></a>
@if(Auth::check())
<form class="form'contact" action="/enviarforo" method="post">
  {{ csrf_field() }}
  <div class="form-group">
      <label for="titulo">Titulo:</label>

    <input type="text" name="titulo" class="form-control" placeholder="Titulo....">
  </div>

  <div class="form-group">
      <label for="mensaje">Mensaje:</label>

 <input type="text" name="mensaje" class="form-control" placeholder="Mensaje....">
  </div>

  <select name="usuario">
  <option>{{ Auth::user()->user }}</option>
  <option>Anonimo</option>
  </select>


  <div class="form-group">
      <button type="submit" class="btn btn-primary">Guardar</button>
      <a href="foroenviar" class="">Cancelar</a>
  </div>
  @endif
</form>
  </div>
</div>

@stop

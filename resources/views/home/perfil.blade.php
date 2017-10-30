@extends('home.template')
@section('content')
@if(Auth::check())
<title>dotiU™-Perfil Usuario</title>
<div class="container text-center">


<h1><i class="fa fa-user-circle 2x"></i>&nbsp Perfil del Usuario</h1>


<div class="row">

<div class="col-md-6">
  <div class="product-block">
  <img src="{{ Auth::user()->img}}" width="50%" alt="">
</div>
</div>



<div class="col-md-6">
  <div class="product-info panel" id='info'>
  <h1>Nombre:{{ Auth::user()->name }} </h1> <i class=""> </i>
  <p>Usuario:{{ Auth::user()->user }} </p> <i class="fa fa-pencil 2x"></i>
  <p>Direccion:{{ Auth::user()->address }} </p>
  <p>Fecha de Ingreso:{{ Auth::user()->created_at }} </p>



  </div>
</div>
@endif
</div>



<p><a class="btn btn-primary" id='botonInfo' href="{{'http://localhost:8000/'}}"> <i class="fa fa-chevron-circle-left"></i>&nbsp Regresar</a></p>
</div>
@stop

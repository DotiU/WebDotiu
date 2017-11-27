@extends('home.template')
@section('content')
<title>dotiU™-Contacto</title>
<link rel="stylesheet" href="{{asset('css/contacto.css')}}">

<div class="container-fluid" "imagen-contacto">
<form action="/enviarContacto" method="post">
		{{ csrf_field() }}
	<div class="row">
			<h1>Contacto</h1>
	</div>
	<div class="row">
			<h4 style="text-align:center">Nos comunicaremos lo más pronto posible</h4>
	</div>
	<div class="row input-container">
			<div class="col-xs-12">
				<div class="styled-input wide">
					<input type="text" name="nombre" required />
					<label>Nombre</label> 
				</div>
			</div>
			<div class="col-md-6 col-sm-12">
				<div class="styled-input">
					<input type="text" name="correo" required />
					<label>Correo Electrónico</label> 
				</div>
			</div>
			<div class="col-md-6 col-sm-12">
				<div class="styled-input" style="float:right;">
					<input type="text" name="asunto" required />
					<label>Asunto</label> 
				</div>
			</div>
			<div class="col-xs-12">
				<div class="styled-input wide">
					<textarea name="mensaje" required></textarea>
					<label>Mensaje</label>
				</div>
			</div>
			<div class="col-xs-12 btn ">
				<div>
				    <input type="submit" name="" value="Enviar">
				</div>
			</div>
	</div>
</form>
</div>

<div class="space"></div>
@stop

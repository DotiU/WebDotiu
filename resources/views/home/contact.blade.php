@extends('home.template')
@section('content')
<div class="imagen-contacto">

	<form class="form-contact" action="/enviar" method="post">
		{{ csrf_field() }}
		<h2 id=h2-contact>Contacto</h2>
		<input id="input-contact" type="text" name="nombre" placeholder="Nombre" required>
		<input id="input-contact" type="text" name="correo" placeholder="Correo Electrónico" required>
			<input id="input-contact" type="text" name="asunto" placeholder="Asunto" required>
		<textarea class="text-contact" id="input-contact" name="mensaje" rows="8" cols="60" placeholder="Escriba aquí su mensaje" required></textarea>
	 <input class="button" id="input-contact" type="submit" name="mensaje" value="Enviar">
	</form>
</div>




@stop

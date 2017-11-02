@extends('admin.template')

@section('content')

	<div class="container text-center">
		<div class="page-header">
			<h1>
				<i class="fa fa-users "></i>
				FORO <small>[Agregar Conversacion al Foro]</small>
			</h1>
		</div>

		<div class="row">
            <div class="col-md-offset-3 col-md-6">

                <div class="page">


								     {!! Form::open(['action'=>'AdminMensajeController@store']) !!}
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
										 <option>Anónimo</option>
										 </select>

<div class="form-group">
		<button type="submit" class="btn btn-primary">Guardar</button>
		<a href="/admin/home" class="btn btn-warning">Cancelar</a>
</div>


                    {!! Form::close() !!}

                </div>

            </div>
        </div>


	</div>

@stop

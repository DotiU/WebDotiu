@extends('home.template')

@section('content')

	<div class="container text-center">
		<div class="page-header">
			<h1>
				<i class="fa fa-users "></i>
				Usuarios <small>[Agregar Usuario]</small>
			</h1>
		</div>

		<div class="row">
            <div class="col-md-offset-3 col-md-6">

                <div class="page">


								     {!! Form::open(['action'=>'Admin\AdminUserController@store']) !!}

										 <div class="form-group">
									 		<label for="nombre">
									 			Nombre
									 		</label>
									 		<input type="text" name="nombre" class="form-control" placeholder="Nombre....">
									 	</div>
									 	<div class="form-group">
									 		<label for="descripcion">
									 			Descripción
									 		</label>
									 		<input type="text" name="descripcion" class="form-control" placeholder="Descripcion....">
									 	</div>

<div class="form-group">
		<label for="color">Color:</label>

		<input type="color" name="color" class="form-control">
</div>

<div class="form-group">
		<button type="submit" class="btn btn-primary">Guardar</button>
		<a href="/admin/categoria" class="btn btn-warning">Cancelar</a>
</div>


                    {!! Form::close() !!}

                </div>

            </div>
        </div>


	</div>

@stop

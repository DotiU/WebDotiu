@extends('admin.template')

@section('content')

	<div class="container text-center">
		<div class="page-header">
			<h1>
				<i class="fa fa-shopping-cart"></i>
				CATEGORÍAS <small>[Editar categoría]</small>
			</h1>
		</div>
		{!!Form::model($categoria,['method'=>'PATCH','route'=>['categoria.update',$categoria->id],'files'=>'true'])!!}
		{{Form::token()}}
		<div class="row">
            <div class="col-md-offset-3 col-md-6">

                <div class="page">



                  <div class="form-group">
                    <label for="nombre">
                      Nombre
                    </label>
                    <input type="text" value="{{$categoria->nombre}}" name="nombre" class="form-control" placeholder="Nombre....">
                  </div>
                  <div class="form-group">
                    <label for="descripcion">
                      Descripción
                    </label>
                    <input type="text" value="{{$categoria->descripcion}}"name="descripcion" class="form-control" placeholder="Descripcion....">
                  </div>
                        <div class="form-group">
                            <label for="color">Color:</label>

                            <input type="color" name="color" class="form-control"
                            value="{{ isset($categoria->color) ? $categoria->color : null }}">
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Guardar</button>
                            <a href="{{ url()->previous()  }}" class="btn btn-warning">Cancelar</a>
                        </div>



                </div>

            </div>
        </div>


	</div>
{!!Form::close()!!}
@stop

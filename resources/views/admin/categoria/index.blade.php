@extends('admin.template')

@section('content')

<div class="container text-center">
  <div class="page-header">
    <h1>
      <i class="fa fa-comments"></i>
      FORO ABUSO CR <a href="" class="btn btn-primary"><i class="fa fa-plus-circle"></i>&nbsp Mensaje</a>
    </h1>
  </div>
  <div class="page">
    <div class="table-responsive">
      <table class="table table-striped table-bordered table-hover">
        <thead>
          <tr>
            <th>Editar</th>
            <th>Eliminar</th>
            <th>Titulo</th>
            <th>Mensaje</th>
            <th>Usuario</th>
           <th>Fecha</th>

          </tr>
        </thead>
        <tbody>
          @foreach($mensajes as $mensaje)
            <tr>
              <td>
                <a href="" class="btn btn-primary">
                  <i class="fa fa-pencil-square"></i>
                </a>
              </td>
              <td>
                <a href="" class="btn btn-danger">
                  <i class="fa fa-trash-o"></i>

             </td>
              <td>{{ $mensaje->titulo }}</td>
              <td>{{ $mensaje->mensaje }}</td>
              <td>{{ $mensaje->nombreUsuario }}</td>
              <td>{{ $mensaje->fecha }}</td>

            </tr>

          @endforeach
        </tbody>
      </table>
    </div>

  </div>

</div>

@stop

@extends('admin.template')

@section('content')
<title>dotiU™-Administrador-Foro</title>
<div class="container text-center">
  <div class="page-header">
    <h1>
      <i class="fa fa-comments"></i>
      FORO ABUSO ja CR <a href="mensaje/create" class="btn btn-info"><i class="fa fa-plus-circle"></i>&nbsp Mensaje</a>
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
                <a href="" class="btn btn-success">
                  <i class="fa fa-pencil-square"></i>
                </a>
              </td>
              <td>
                <a href="{{URL::action('AdminMensajeController@destroy',$mensaje->id)}}" class="btn btn-primary">
                  <i class="fa fa-trash-o"></i>

             </td>
              <td>{{ $mensaje->titulo }}</td>
              <td>{{ $mensaje->mensaje }}</td>
              <td>{{ $mensaje->nombreUsuario}}</td>
              <td>{{ $mensaje->fecha }}</td>

            </tr>

          @endforeach
        </tbody>
      </table>
    </div>

  </div>
<a href="/admin/home"><button class="btn btn-primary" type="button" name="button"><i class="fa fa-chevron-circle-left" aria-hidden="true"></i>&nbsp Menú Principal</button></a>
</div>

@stop

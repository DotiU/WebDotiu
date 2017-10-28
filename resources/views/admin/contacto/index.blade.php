@extends('admin.template')

@section('content')

<div class="container text-center">
  <div class="page-header">
    <h1>
      <i class="fa fa-comments"></i>
    Mensajes Recibidos <a href="" class="btn btn-info"><i class="fa fa-plus-circle"></i></a>
    </h1>
  </div>
  <div class="page">
    <div class="table-responsive">
      <table class="table table-striped table-bordered table-hover">
        <thead>
          <tr>

            <th>Eliminar</th>
            <th>Nombre Remitente</th>
            <th>Correo Electronico</th>
            <th>Asunto</th>
              <th>Mensaje</th>

           <th>Fecha y Hora de Envio</th>

          </tr>
        </thead>
        <tbody>
          @foreach($contactos as $contacto)
            <tr>

              <td>
                <a href="{{URL::action('ContactoController@destroy',$contacto->id)}}" class="btn btn-primary">
                  <i class="fa fa-trash-o"></i>

             </td>
              <td>{{ $contacto->nombre }}</td>
              <td>{{ $contacto->correo }}</td>
              <td>{{ $contacto->asunto}}</td>
                <td>{{ $contacto->mensaje}}</td>
              <td>{{ $contacto->created_at }}</td>

            </tr>

          @endforeach
        </tbody>
      </table>
    </div>

  </div>
<a href="/admin/home"><button class="btn btn-primary" type="button" name="button"><i class="fa fa-chevron-circle-left" aria-hidden="true"></i>&nbsp Menú Principal</button></a>
</div>

@stop

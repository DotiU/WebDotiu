@extends('admin.template')

@section('content')
<title>dotiU™-Administrador-Usuario</title>
    <div class="container text-center">
        <div class="page-header">
            <h1>
                <i class="fa fa-user"></i> USUARIOS
                <a href="usuario/create" class="btn btn-success">
                    <i class="fa fa-plus-circle"></i>&nbsp Usuario
                </a>
            </h1>
        </div>

        <div class="page">

            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>Editar</th>
                            <th>Eliminar</th>
                            <th>Nombre</th>
                            <th>Apellidos</th>
                            <th>Usuario</th>
                            <th>Correo</th>
                            <th>Tipo</th>
                            <th>Activo</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td>
                                    <a href="" class="btn btn-info">
                                        <i class="fa fa-pencil-square-o"></i>
                                    </a>
                                </td>
                                <td>

                                  <a href="{{URL::action('AdminUserController@destroy',$user->id)}}" class="btn btn-primary">
                                    <i class="fa fa-trash-o"></i>
                                </td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->last_name }}</td>
                                <td>{{ $user->user }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->type }}</td>
                                <td>{{ $user->active == 1 ? "Si" : "No" }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <hr>


          </div>
        <a href="/admin/home"><button class="btn btn-primary" type="button" name="button"><i class="fa fa-chevron-circle-left" aria-hidden="true"></i>&nbsp Menú Principal</button></a>
        </div>
        </div>

    </div>

@stop

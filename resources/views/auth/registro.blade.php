@extends('home.template')

@section('content')

<div class="container">



    <div class="row">
        <div>
        <center>   <img class="logo-1" src="/img/favicon.png" width="12%" alt="Logo"></center>
        </div>

        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-login">
                <div class="panel-heading">

                    <div class="row">


                        <div class="col-xs-6">
                            <a href="" >Registro</a>
                        </div>
                    </div>
                    <hr>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">

<form  action="/registrarse" method="post" role="form" >

  <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="form-group">
        <input type="text" name="user" id="username" tabindex="1" class="form-control" placeholder="Usuario" value="">
    </div>
    <div class="form-group">
        <input type="text" name="name" id="name" tabindex="1" class="form-control" placeholder="Nombre" value="">
    </div>
    <div class="form-group">
        <input type="text" name="last_name" id="lastname" tabindex="1" class="form-control" placeholder="Apellidos" value="">
    </div>
    <div class="form-group">
        <input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="Correo Electronico" value="">
    </div>
    <div class="form-group">
        <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Contraseña">
    </div>
    <div class="form-group">
        <input type="text" name="address" id="address" tabindex="2" class="form-control" placeholder="Direccion">
    </div>
    <div class="form-group">
        <input type="text" name="type" id="type" tabindex="2" class="form-control" placeholder="" value="user" style="display:none;">
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-primary">Guardar</button>
        <a href="foroenviar" class="">Cancelar</a>
    </div>

</form>

</div>
</div>
</div>
</div>
</div>
</div>
</div>
@stop

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
    <div class="form-group">
        <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Usuario" value="">
    </div>
    <div class="form-group">
        <input type="text" name="name" id="name" tabindex="1" class="form-control" placeholder="Nombre" value="">
    </div>
    <div class="form-group">
        <input type="text" name="lastname" id="lastname" tabindex="1" class="form-control" placeholder="Apellidos" value="">
    </div>
    <div class="form-group">
        <input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="Correo Electronico" value="">
    </div>
    <div class="form-group">
        <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
    </div>
    <div class="form-group">
        <input type="password" name="confirm-password" id="confirm-password" tabindex="2" class="form-control" placeholder="Confirm Password">
    </div>
    <div class="form-group" style="display:none;">
        <input type="" name="confirm-password" id="confirm-password" tabindex="2" class="form-control" placeholder= style="display:none;" value="usuario">
    </div>
    <div class="form-group">
        <div class="row">
        <center>  <button type="submit" class="btn btn-primary">
            Registrarse
          </button></center>

        </div>
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

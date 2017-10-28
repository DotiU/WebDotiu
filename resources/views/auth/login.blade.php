
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

                        <div class="col-xs-6 col">
                            <a href="" class="active" id="login-form-link">Iniciar  Sesión</a>
                        </div>
                        <div class="col-xs-6">
                            <a href="" id="register-form-link">Registro</a>
                        </div>
                    </div>
                    <hr>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <form  id="login-form" action="{{ route('login') }}" method="POST" role="form" style="display: block;">

                                  {{ csrf_field() }}

                                  <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                      <label for="email" class="col-md-4 control-label">Correo Electronico</label>

                                      <div class="col-md-6">
                                          <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus></input>

                                          @if ($errors->has('email'))
                                              <span class="help-block">
                                                  <strong>{{ $errors->first('email') }}</strong>
                                              </span>
                                          @endif
                                      </div>
                                  </div>
<br>
                                  <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                      <label for="password" class="col-md-4 control-label">Contraseña</label>

                                      <div class="col-md-6">
                                          <input id="password" type="password" class="form-control" name="password" required>

                                          @if ($errors->has('password'))
                                              <span class="help-block">
                                                  <strong>{{ $errors->first('password') }}</strong>
                                              </span>
                                          @endif
                                      </div>
                                  </div>

                                <div class="form-group text-center">
                                    <input type="checkbox" tabindex="3" class="" name="remember" id="remember">
                                    <label for="remember"> Recuérdame</label>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                      <div class="col-md-8 col-md-offset-4">
                                          <button type="submit" class="btn btn-primary">
                                              Iniciar Sesion
                                          </button>

                                          <a class="btn btn-link" href="{{ route('password.request') }}">
                                              Olvido su contraseña?
                                          </a>
                                      </div>
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

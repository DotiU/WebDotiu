@extends('admin.template')

@section('content')


<title>@yield('Administrador','dotiU™')</title>

    <div class="container text-center">
        <div class="page-header">
            <h1><i class="fa fa-cogs"></i> DotiU™ - ADMINISTRADOR</h1>
        </div>

        <h2>Bienvenido(a) {{ Auth::user()->name  }} {{ Auth::user()->last_name }} al Panel de administración de Pagina Web.</h2><hr>

        <div class="row">

            <div class="col-md-6">
                <div class="panel">
                    <i class="fa fa-comments icon-home"></i>
                    <a href="/admin/mensaje" class="btn btn-primary btn-block btn-home-admin" id='botones-admin'>FORO ABUSO</a>
                </div>
            </div>



            <div class="col-md-6">
                <div class="panel">
                    <i class="fa fa-users  icon-home"></i>
                    <a href="/admin/contacto" class="btn btn-primary btn-block btn-home-admin" id='botones-admin'>USUARIOS</a>
                </div>
            </div>

            <div class="col-md-6">
                <div class="panel">
                    <i class="fa fa-file-image-o  icon-home"></i>
                    <a href="/admin/usuario" class="btn btn-primary btn-block btn-home-admin" id='botones-admin'>MULTIMEDIA</a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="panel">
                    <i class="fa fa-map-marker icon-home"></i>
                    <a href="/admin/mapa" class="btn btn-primary btn-block btn-home-admin" id='botones-admin'>MAPA</a>
                </div>
            </div>

            <div class="col-md-12">
                <div class="panel">
                    <i class="fa fa-commenting-o icon-home"></i>
                    <a href="/admin/contacto" class="btn btn-primary btn-block btn-home-admin" id='botones-admin'>MENSAJES</a>
                </div>
            </div>

        </div>

    </div>
    <hr>

@stop

@if(Auth::check())
	<li class="dropdown">
		<a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
			<i class="fa fa-user-circle fa-lg"></i> {{ Auth::user()->name }}  <span class="caret"></span>
		</a>

		<ul class="dropdown-menu" role="menu" id="children">
			@if(Auth::user()->type=='admin')

					<li><a href="perfil">Ver Perfil</a></li>
					<li><a href="admin/home">Vista Administrador</a></li>
					<li><a href="{{route('logout')}}">Finalizar sesión</a></li>

			@else
			<li><a href="perfil">Ver Perfil</a></li>
			<li><a href="{{route('logout')}}">Finalizar sesión</a></li>


@endif


		</ul>

	</li>
@else
	<li class="dropdown">
		<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
		<i class="fa fa-user-circle fa-lg"></i> <span class="caret"></span>
		</a>
		<ul class="dropdown-menu" role="menu" id="children">
			<li><a href="{{'login'}}">Iniciar sesión</a></li>
			<li><a href="{{ url('/register') }}">Registrarse</a></li>

		</ul>
	</li>


@endif

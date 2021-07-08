<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Aplicación de anuncios CifoPOP">
		<title>{{config('app.name')}} - @yield('titulo')</title>
		
				
		<!-- CSRF Token -->
		<meta name="csrf-token" content="{{csrf_token()}}">
		<!-- Scripts -->
		<script src="{{asset('js/app.js')}}" defer></script>
		<!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">   
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
		
		<!-- Carga del CSS de bootstrap -->
		<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.css')}}">
		<script src="{{asset('js/bootstrap.js')}}"></script>
	</head>
	
	<body class="container p-3">
		<!-- PARTE SUPERIOR (menú) -->
		@section('navegacion')		
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
            <div class="container">
                <a style="font-variant: small-caps;" class="navbar-brand" href="{{ url('/') }}">
                	<img class="mr-1" src="{{asset('images/template/logo.png')}}" alt="" width="50" height="50">
                    {{ config('app.name', 'Laravel') }}                    
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                      <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                                      <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                                    </svg>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                	<a class="dropdown-item" href="{{ route('home') }}">
                                    	<svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" fill="currentColor" class="bi bi-house-fill mb-1 mr-1" viewBox="0 0 16 16">
                                          <path fill-rule="evenodd" d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
                                          <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
                                        </svg>
                                		Mi perfil
                                	</a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" fill="currentColor" class="bi bi-box-arrow-right mr-1" viewBox="0 0 16 16">
                                          <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z"/>
                                          <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
                                        </svg>
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
		@php($pagina= Route::currentRouteName())
		<nav>
			<ul class="nav nav-pills my-3 col-gray">
				<li class="nav-item mr-2">
					<a class="nav-link {{$pagina=='portada'? 'active':''}}" href="{{route('portada')}}">Inicio</a>
				</li>
				<li class="nav-item mr-2">
					<a class="nav-link {{$pagina=='anuncios.index' || $pagina=='anuncios.search'? 'active':''}}" href="{{route('anuncios.index')}}">Anuncios</a>
				</li>
				@auth
				<li class="nav-item mr-2">
					<a class="nav-link {{$pagina=='home'? 'active':''}}" href="{{route('home')}}">Mis anuncios</a>
				</li>
				<li class="nav-item mr-2">
					<a class="nav-link {{$pagina=='anuncios.create'? 'active':''}}" href="{{route('anuncios.create')}}">Nuevo anuncio</a>
				</li>
				@endauth
			</ul>
		</nav>
		@show
		
		<!-- PARTE CENTRAL -->
		<h1 style="font-variant: small-caps;" class="my-2">Anuncios CifoPop</h1>
		
		<main>
			<h2 class="mb-4">@yield('titulo')</h2>
			
			@includeWhen(Session::has('success'), 'layouts.success')
			@includeWhen($errors->any(), 'layouts.error')
						
			@yield('contenido')
					 
			<div class="btn-group" role="group" aria-label="Links">
				@section('enlaces')
				<a href="{{url()->previous()}}" class="btn btn-primary m-2">Atrás</a>
				<a href="{{route('portada')}}" class="btn btn-primary m-2">Inicio</a>
				@show
			</div>			
		</main>
		
		<!-- PARTE INFERIOR -->
		@section('pie')
		<footer class="page-footer font-small p-4 bg-light">
			<p>Aplicación creada por {{$autor}} como ejercicio de clase.
			Desarrollada haciendo uso de <b>Laravel</b> y <b>Bootstrap</b>.</p>
		</footer>
		@show
	</body>
</html>

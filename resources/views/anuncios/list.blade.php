@extends('layouts.master')

@section('titulo', 'Listado de anuncios')

@section('contenido')		
	<div class="row mt-4">
		<div class="col-6 text-start">{{$anuncios->links()}}</div>
		@auth
		<div class="col-6 text-end">
			<p>Nuevo anuncio <a href="{{route('anuncios.create')}}"
			><img height="25" width="25" src="{{asset('images/buttons/add.png')}}"
        				alt="Añadir" title="Añadir anuncio"></a></p>
		</div>
		@endauth
	</div>
	
	<form method="POST" action="{{route('anuncios.search')}}" class="col-9 d-flex flex-row my-3">
		{{csrf_field()}}
		
		<input type="text" name="titulo" placeholder="Título" 
				value="{{empty($titulo)? '': $titulo}}" maxlength="16" 
				class="col form-control m-2" required>
		<input type="text" name="descripcion" placeholder="Descripción" 
				value="{{empty($descripcion)? '': $descripcion}}" maxlength="16"
				class="col form-control m-2">
		
		<label class="mt-2">Orden:</label>
		<select name="orden" class="m-2">
			<option value="titulo" {{!empty($orden) && $orden=='titulo'? ' selected': ''; }}>Título</option>
			<option value="precio" {{!empty($orden) && $orden=='precio'? ' selected': ''; }}>Precio</option>
			<option value="created_at" {{!empty($orden) && $orden=='created_at'? ' selected': ''; }}>Fecha de publicación</option>
		</select>
		
		<div class="mt-2">
			<input class="ml-3" type="radio" name="sentido" value="asc"
			{{empty($sentido) || $sentido=='asc'? ' checked':'';}}>
			<label class="mr-3">Ascendente</label>
			<input type="radio" name="sentido" value="desc"
			{{!empty($sentido) && $sentido=='desc'? ' checked':'';}}>
			<label class="mr-3">Descendente</label>
		</div>		
		<button type="submit" class="col btn btn-secondary m-2">Buscar</button>
	</form>	
	<div class="col-9 my-3 mx-2">
		<a href="{{route('anuncios.index')}}" class="btn btn-secondary">Quitar filtros</a>
	</div>
	<div class="row row-cols-1 row-cols-xl-5 row-cols-md-3 row-cols-sm-2 g-4">
      @forelse($anuncios as $anuncio)
      <div class="col">
        <div class="card h-100 text-center">
          <img class="card-img-top p-2"
						alt="Imagen de {{$anuncio->titulo}}"
						title="Imagen de {{$anuncio->titulo}}"
						src="{{$anuncio->imagen?
							asset('storage/'.config('filesystems.anunciosImageDir')).'/'.$anuncio->imagen :
							asset('storage/'.config('filesystems.anunciosImageDir').'/'.'default.jpg')}}">
          <div class="card-body">
          	<h5 class="card-title">{{$anuncio->titulo}}</h5>
            <p class="card-text">{{$anuncio->precio}}€</p>
          </div>
          <div class="card-footer">
            <a href="{{route('anuncios.show', $anuncio->id)}}">
			<img height="20" width="20" src="{{asset('images/buttons/show.png')}}"
			alt="Ver detalles" title="Ver detalles"></a>
			@auth
				@if(Auth::user()->can('edit',$anuncio))							
				<a href="{{route('anuncios.edit', $anuncio->id)}}">
				<img height="20" width="20" src="{{asset('images/buttons/update.png')}}"
				alt="Modificar" title="Modificar"></a>
				@endif
        					
        		@if(Auth::user()->can('edit',$anuncio))					
				<a href="{{route('anuncios.delete', $anuncio->id)}}">
				<img height="20" width="20" src="{{asset('images/buttons/delete.png')}}"
				alt="Borrar" title="Borrar"></a>
				@endif
			@endauth 	
          </div>
        </div>      
      </div>
      
      @empty
      </div>
      <div class="alert alert-danger m-3" role="alert">
          No hay anuncios a mostrar.
      </div>
      @endforelse  
	</div>
	
	<div class="row">
		<div class="col-6 my-3 text-start">{{$anuncios->links()}}</div>
	</div>
	
@endsection

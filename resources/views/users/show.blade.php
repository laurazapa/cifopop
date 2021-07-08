@extends('layouts.master')

@section('titulo', 'Perfil de usuario')

@section('contenido')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header"><h3>{{$user->name}}</h3></div>
                <div class="card-body">
                   <p><b>Nombre: </b>{{$user->name}}</p>
                   <p><b>Población: </b>{{$user->poblacion}}</p>
                </div>
                
            </div>
            <h2 class="my-3">Anuncios de {{$user->name}}</h2>
            <div class="row mb-3">
        		<div class="col-6 text-start">{{$anuncios->links()}}</div>
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
        	            
        </div>
    </div>
</div>
@endsection

@section('enlaces')			 
	@parent
		<a href="{{route('anuncios.index')}}" class="btn btn-primary m-2">Anuncios</a>
@endsection
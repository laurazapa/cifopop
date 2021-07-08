@extends('layouts.master')

@section('titulo', 'Home')

@section('contenido')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header"><h3>{{Auth::user()->name}}</h3></div>
				<img alt="Imagen de {{Auth::user()->name}}"
						title="Imagen de {{Auth::user()->name}}"
						style="max-width: 170px"
						src="{{Auth::user()->imagen?
							asset('storage/'.config('filesystems.usersImageDir')).'/'.Auth::user()->imagen :
							asset('storage/'.config('filesystems.usersImageDir').'/'.'default.jpg')}}"
						class="m-3 border rounded-circle">
                <div class="card-body">
                   <p><b>Nombre: </b>{{Auth::user()->name}}</p>
                   <p><b>E-mail: </b>{{Auth::user()->email}}</p>
                   <p><b>Población: </b>{{Auth::user()->poblacion}}</p>
                   <p><b>Teléfono: </b>{{Auth::user()->telefono}}</p>
                   <p><b>Fecha de nacimiento: </b>{{Auth::user()->nacimiento}}</p>
                   <p><b>Fecha de alta: </b>{{Auth::user()->created_at}}</p>
                </div>
                
                <div class="text-end m-3 mt-0">
                	<a href="{{route('users.edit', Auth::user()->id)}}">
    				<img height="35" width="35" src="{{asset('images/buttons/update.png')}}"
    				alt="Modificar" title="Modificar"></a>    							
    				<a href="{{route('users.delete', Auth::user()->id)}}">
    				<img height="35" width="35" src="{{asset('images/buttons/delete.png')}}"
    				alt="Borrar" title="Borrar"></a>
                </div>
                
            </div>
            <h2 class="my-3">Anuncios de {{Auth::user()->name}}</h2>
            <div class="row mb-3">
        		<div class="col-6 text-start">{{$anuncios->links()}}</div>
        		<div class="col-6 text-end">
        			<p>Nuevo anuncio <a href="{{route('anuncios.create')}}"
        			><img height="25" width="25" src="{{asset('images/buttons/add.png')}}"
        				alt="Añadir" title="Añadir anuncio"></a></p>
        		</div>
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
        							asset('storage/'.config('filesystems.anunciosImageDir').'default.jpg')}}">
                  <div class="card-body">
                  	<h5 class="card-title">{{$anuncio->titulo}}</h5>
                    <p class="card-text">{{$anuncio->precio}}€</p>
                  </div>
                  <div class="card-footer">
                    <a href="{{route('anuncios.show', $anuncio->id)}}">
        			<img height="20" width="20" src="{{asset('images/buttons/show.png')}}"
        			alt="Ver detalles" title="Ver detalles"></a>        										
    				<a href="{{route('anuncios.edit', $anuncio->id)}}">
    				<img height="20" width="20" src="{{asset('images/buttons/update.png')}}"
    				alt="Modificar" title="Modificar"></a>    							
    				<a href="{{route('anuncios.delete', $anuncio->id)}}">
    				<img height="20" width="20" src="{{asset('images/buttons/delete.png')}}"
    				alt="Borrar" title="Borrar"></a>
        				
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
        	
        	<div class="col-md-10">
            	<h2 class="my-3">Anuncios borrados de {{Auth::user()->name}}</h2>
                <div class="row mb-3">
            		<div class="col-4 text-start">{{$anunciosBorrados->links()}}</div>
            	</div>
            	<div class="row row-cols-1 row-cols-xl-5 row-cols-md-3 row-cols-sm-2 g-4">
                  @forelse($anunciosBorrados as $anuncio)
                  <div class="col">
                    <div class="card h-100 text-center">
                      <img class="card-img-top p-2" style="background-color: #ffe6e6"
            						alt="Imagen de {{$anuncio->titulo}}"
            						title="Imagen de {{$anuncio->titulo}}"
            						src="{{$anuncio->imagen?
            							asset('storage/'.config('filesystems.anunciosImageDir')).'/'.$anuncio->imagen :
            							asset('storage/'.config('filesystems.anunciosImageDir').'default.jpg')}}">
                      <div class="card-body" style="background-color: #ffe6e6">
                      	<h5 class="card-title">{{$anuncio->titulo}}</h5>
                        <p class="card-text">{{$anuncio->precio}}€</p>
                      </div>
                      <div class="card-footer" style="background-color: #ffcccc">
                        <a href="{{route('anuncios.restore', $anuncio->id)}}">
            			<img height="20" width="20" src="{{asset('images/buttons/restore.png')}}"
            			alt="Restaurar" title="Restaurar"></a>        								  									
        				<a href="{{route('anuncios.forcedelete', $anuncio->id)}}">
        				<img height="20" width="20" src="{{asset('images/buttons/delete.png')}}"
        				alt="Borrar" title="Borrar definitivamente"></a>        				
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
            		<div class="col-6 my-3 text-start">{{$anunciosBorrados->links()}}</div>
            	</div>
        	</div>
        	            
        </div>
    </div>
</div>
@endsection

@section('enlaces')			 
	@parent
		<a href="{{route('anuncios.index')}}" class="btn btn-primary m-2">Anuncios</a>
@endsection
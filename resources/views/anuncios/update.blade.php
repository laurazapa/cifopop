@extends('layouts.master')

@section('titulo', "Actualización del anuncio $anuncio->titulo")

@section('contenido')
	<form class="my-2 border p-5" method="POST" action="{{route('anuncios.update',$anuncio->id)}}" enctype="multipart/form-data">
		{{csrf_field()}}
		<input name="_method" type="hidden" value="PUT">
	
		<div class="form-group row">
			<label for="inputTitulo" class="col-sm-2 col-form-label">Titulo</label>
			<input name="titulo" type="text" class="up form-control col-sm-10"
			id="inputTitulo" placeholder="Título" minlength="3" maxlength="255" required="required"
			value="{{$anuncio->titulo}}">
		</div>
		
		<div class="form-group row">
			<label for="inputPrecio" class="col-sm-2 col-form-label">Precio (€)</label>
			<input name="precio" type="number" class="up form-control col-sm-4"
			id="inputPrecio" maxlength="11" required="required" min="0" step="0.01"
			value="{{$anuncio->precio}}">
		</div>
		
		<div class="form-group row">
			<label for="inputDescripcion" class="col-sm-2 col-form-label">Descripción</label>
			<textarea name="descripcion" class= "form-control" rows="5"
			id="inputDescripcion" placeholder="Descripción del producto" minlength="3" maxlength="250" required="required"
			>{{$anuncio->descripcion}}</textarea>
		</div>		
					
		<div class="form-group row my-3">
			<div class="col-sm-9">
				<label for="inputImagen" class="col-sm-2 col-form-label">
					{{$anuncio->imagen? 'Sustituir':'Añadir'}} imagen</label>
				<input name="imagen" type="file" class="form-control-file" id="inputImagen">
				
				@if($anuncio->imagen) 
				<div class="form-check my-3">
					<input name="eliminarimagen" type="checkbox" 
						class="form-check-input" id="inputEliminar">
					<label for="inputEliminar" class="form-check-label">Eliminar imagen</label>
				</div>
				
				<script>
					inputEliminar.onchange= function(){
						inputImagen.disabled= this.checked;
					}
				</script>
				@endif			
			</div>
			<div class="col-sm-3">
				<label>Imagen actual:</label>
				<img class="rounded img-thumbnail my-3"
					alt="Imagen de {{$anuncio->titulo}}"
					title="Imagen de {{$anuncio->titulo}}"
					src="{{$anuncio->imagen?
							asset('storage/'.config('filesystems.anunciosImageDir')).'/'.$anuncio->imagen :
							asset('storage/'.config('filesystems.anunciosImageDir').'/'.'default.jpg')}}">
			</div>
		</div>
		
		<div class="form-group row">
			<button type="submit" class="btn btn-success mt-5 m-2">Guardar</button>
			<button type="reset" class="btn btn-secondary m-2">Reestablecer</button>
		</div>				
	</form>
    	<div class="text-end my-3">
    		<div class="btn-group mx-2">
    			
    			<a class="mx-2" href="{{route('anuncios.show',$anuncio->id)}}">
    			<img height="40" width="40" src="{{asset('images/buttons/show.png')}}"
    			alt="Detalles" title="Detalles">
    			</a>
    			
    			<a class="mx-2" href="{{route('anuncios.delete',$anuncio->id)}}">
    			<img height="40" width="40" src="{{asset('images/buttons/delete.png')}}"
    			alt="Borrar" title="Borrar">
    			</a>
        			
    		</div>
    	</div>
	
@endsection

@section('enlaces')				
	@parent
	<a href="{{route('anuncios.index')}}" class="btn btn-primary m-2">Anuncios</a>
@endsection

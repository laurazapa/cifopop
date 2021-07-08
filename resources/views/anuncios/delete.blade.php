@extends('layouts.master')

@section('titulo', "Confirmación de borrado de $anuncio->titulo")

@section('contenido')
	<form method="POST" class="my-2 border p-5" 
		action="{{route('anuncios.destroy', $anuncio->id)}}">
		{{csrf_field()}}
		<input name="_method" type="hidden" value="DELETE">
		<img class="rounded" style="max-width: 400px"
		            alt="Imagen de {{$anuncio->titulo}}"
					title="Imagen de {{$anuncio->titulo}}"
					src="{{$anuncio->imagen?
							asset('storage/'.config('filesystems.anunciosImageDir')).'/'.$anuncio->imagen :
							asset('storage/'.config('filesystems.anunciosImageDir').'/'.'default.jpg')}}">
		<br>
		<label for="confirmdelete">Confirmar el borrado de
			{{"$anuncio->titulo"}}:</label>
		<input type="submit" alt="Borrar" title="Borrar" class="btn btn-danger m-4"
			value="Borrar" id="confirmdelete">			
	</form>
@endsection

@section('enlaces')	
	@parent		
	<a href="{{route('anuncios.index')}}" class="btn btn-primary m-2">Anuncios</a>
	<a href="{{route('anuncios.show', $anuncio->id)}}" class="btn btn-primary m-2">
		Regresar a detalles del anuncio</a>				
@endsection

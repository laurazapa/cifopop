@extends('layouts.master')

@section('titulo', "Confirmación de borrado de $user->name")

@section('contenido')
	<form method="POST" class="my-2 border p-5" 
		action="{{route('users.destroy', $user->id)}}">
		{{csrf_field()}}
		<input name="_method" type="hidden" value="DELETE">
		<img class="rounded img-thumbnail my-3"
			style="max-width: 170px"
			alt="Imagen de {{$user->name}}"
			title="Imagen de {{$user->name}}"
			src="{{$user->imagen?
					asset('storage/'.config('filesystems.usersImageDir')).'/'.$user->imagen :
					asset('storage/'.config('filesystems.usersImageDir').'/'.'default.jpg')}}">
		<br>
		<label for="confirmdelete">Por favor, confirma que quieres darte de baja,
			{{"$user->name"}}:</label>
		<input type="submit" alt="Borrar" title="Borrar" class="btn btn-danger m-4"
			value="Borrar" id="confirmdelete">			
	</form>
@endsection

@section('enlaces')	
	@parent	
	<a href="{{route('users.show', $user->id)}}" class="btn btn-primary m-2">
		Regresar a detalles del usuario</a>				
@endsection

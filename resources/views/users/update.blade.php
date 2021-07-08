@extends('layouts.master')

@section('titulo', 'Modificar datos')

@section('contenido')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Modificación de tus datos</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('users.update', $user->id) }}" enctype="multipart/form-data" autocomplete="off">
                        @csrf
						<input name="_method" type="hidden" value="PUT">
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{$user->name}}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{$user->email}}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
						
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" placeholder="Dejar en blanco para no cambiar" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" autocomplete="new-password">
                            </div>
                        </div>

						<div class="form-group row">
                            <label for="poblacion" class="col-md-4 col-form-label text-md-right">Población</label>

                            <div class="col-md-6">
                                <input id="poblacion" type="text" class="form-control @error('poblacion') is-invalid @enderror" name="poblacion" value="{{$user->poblacion}}" autocomplete="poblacion">

                                @error('poblacion')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="telefono" class="col-md-4 col-form-label text-md-right">Teléfono</label>

                            <div class="col-md-6">
                                <input id="telefono" type="tel" class="form-control @error('telefono') is-invalid @enderror" name="telefono" value="{{$user->telefono}}" autocomplete="telefono">

                                @error('telefono')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="nacimiento" class="col-md-4 col-form-label text-md-right">Fecha de nacimiento</label>

                            <div class="col-md-6">
                                <input id="nacimiento" type="date" class="form-control @error('nacimiento') is-invalid @enderror" name="nacimiento" value="{{$user->nacimiento}}" autocomplete="nacimiento">

                                @error('nacimiento')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-group row mx-5">
                			<div class="col-sm-9">
                				<label for="inputImagen" class="col-form-label">
                					{{$user->imagen? 'Sustituir ':'Añadir '}}imagen</label>
                				<input name="imagen" type="file" class="form-control-file" id="inputImagen">
                				
                				@if($user->imagen) 
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
                					alt="Imagen de {{$user->name}}"
                					title="Imagen de {{$user->name}}"
                					src="{{$user->imagen?
                							asset('storage/'.config('filesystems.usersImageDir')).'/'.$user->imagen :
                							asset('storage/'.config('filesystems.usersImageDir').'/'.'default.jpg')}}">
                			</div>
                		</div>                      					
                        
                        <div class="form-group row mx-5">
                			<button type="submit" class="btn btn-success mt-5 m-2">Guardar</button>
                			<button type="reset" class="btn btn-secondary m-2">Reestablecer</button>
                		</div>	
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('enlaces')			 
	@parent
		<a href="{{route('users.show', $user->id)}}" class="btn btn-primary m-2">
		Regresar a detalles del usuario</a>
@endsection
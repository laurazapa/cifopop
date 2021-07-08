@extends('layouts.master')

@section('titulo', 'Nuevo Anuncio')

@section('contenido')
	<form class="my-2 border p-5" method="POST" action="{{route('anuncios.store')}}" enctype="multipart/form-data">
		{{csrf_field()}}
		<div class="form-group row">
			<label for="inputTitulo" class="col-sm-2 col-form-label">Titulo</label>
			<input name="titulo" type="text" class="up form-control col-sm-10"
			id="inputTitulo" placeholder="Título" minlength="3" maxlength="255" required="required"
			value="{{old('titulo')}}">
		</div>
		
		<div class="form-group row">
			<label for="inputPrecio" class="col-sm-2 col-form-label">Precio (€)</label>
			<input name="precio" type="number" class="up form-control col-sm-4"
			id="inputPrecio" maxlength="11" required="required" min="0" step="0.01"
			value="{{old('precio')}}">
		</div>
		
		<div class="form-group row">
			<label for="inputDescripcion" class="col-sm-2 col-form-label">Descripción</label>
			<textarea name="descripcion" class= "form-control" rows="5"
			id="inputDescripcion" placeholder="Descripción del producto" minlength="3" maxlength="250" required="required"
			value="{{old('descripcion')}}"></textarea>
		</div>		
			
		<div class="form-group row my-3">
			<label class="col-sm-2 col-form-label">Imagen</label>
			<input name="imagen" type="file" class="form-control-file col-sm-10" id="inputImagen">
		</div>
		
		<div class="form-group row">
			<button type="submit" class="btn btn-success m-2 mt-5">Guardar</button>
			<button type="reset" class="btn btn-secondary m-2">Borrar</button>
		</div>
	</form>
@endsection			

@section('enlaces')			 
	@parent
		<a href="{{route('anuncios.index')}}" class="btn btn-primary m-2">Anuncios</a>
@endsection

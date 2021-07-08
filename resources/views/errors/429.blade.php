@extends('layouts.master')

@section('titulo', 'Error 429')

@section('contenido')				
	<p>Demasiadas peticiones :)</p>
	<p>{{$exception->getMessage()}}</p>
@endsection

@section('enlaces')
@endsection


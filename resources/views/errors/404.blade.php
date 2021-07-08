@php($pagina='')

@extends('layouts.master')

@section('titulo', 'Error 404')

@section('contenido')				
	<p>Lo sentimos, la página seleccionada no existe :(</p>
	<p>{{$exception->getMessage()}}</p>
@endsection

@section('enlaces')
@endsection

@php($pagina='')

@extends('layouts.master')

@section('titulo', 'Error 503')

@section('contenido')				
	<p>Estamos haciendo mantenimiento, por favor vuelve más tarde :)</p>
	<p>{{$exception->getMessage()}}</p>
@endsection

@section('enlaces')
@endsection
@php($pagina='')

@extends('layouts.master')

@section('titulo', 'Error 419')

@section('contenido')				
	<p>La página ha expirado :(</p>	
	<p>{{$exception->getMessage()}}</p>
@endsection

@section('enlaces')
@endsection
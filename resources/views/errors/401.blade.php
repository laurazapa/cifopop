@extends('layouts.master')

@section('titulo', 'Error 401')

@section('contenido')				
	<p>No autorizado :(</p>
	<p>{{$exception->getMessage()}}</p>
@endsection

@section('enlaces')
@endsection
@extends('layouts.master')

@section('titulo', 'Error 403')

@section('contenido')				
	<p>No tienes permiso para entrar aquí :(</p>
	<p>{{$exception->getMessage()}}</p>
@endsection

@section('enlaces')
@endsection


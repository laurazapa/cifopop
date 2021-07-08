@extends('layouts.master')

@section('titulo', 'Tienda online de segunda mano')

@section('contenido')				
	<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="{{asset('images/template/ropa.jpg')}}" class="d-block w-100" alt="decoración">
          <div class="carousel-caption d-none d-md-block text-dark m-5 p-4" style="background-color: rgba(250,250,250,0.85)">
            <div class="m-1 p-3 border border-secondary border-2">
            	<h2 style="font-variant: small-caps;">CifoPop</h2>
            	<p class="fs-5">¿Filosofia sostenible o moda comercial? Tu eliges :)</p>
            </div>
            
          </div>
        </div>
        <div class="carousel-item">
          <img src="{{asset('images/template/decoracion.jpg')}}" class="d-block w-100" alt="decoración">
          <div class="carousel-caption d-none d-md-block text-dark m-5 p-4" style="background-color: rgba(250,250,250,0.8)">
          	<div class="m-1 p-3 border border-secondary border-2">
                <h2 style="font-variant: small-caps;">CifoPop</h2>
                <p class="fs-5">Consumir más o mejor está en tus manos :)</p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img src="{{asset('images/template/libros.jpg')}}" class="d-block w-100" alt="decoración">
          <div class="carousel-caption d-none d-md-block text-dark m-5 p-4" style="background-color: rgba(250,250,250,0.8)">
          	<div class="m-1 p-3 border border-secondary border-2">
                <h2 style="font-variant: small-caps;">CifoPop</h2>
                <p class="fs-5">¡Rápido, fácil y sin intermediarios! ¿A qué estas esperando?</p>
            </div>
          </div>
        </div>
        
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
	
@endsection

@section('enlaces')
@endsection		
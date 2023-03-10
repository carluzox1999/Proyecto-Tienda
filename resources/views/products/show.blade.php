<!-- Esto es lo que debe contener el yield contenido de la plantilla de nuestra web cuando el usuario acceda a la vista "products" -->
@extends('layouts.app')
@section('title', $viewData['title'])
@section('subtitle', $viewData['subtitle'])
@section('content')
<div class="card mb-3">
    <div class="row g-0">
      <div class="col-md-4">
        <img src="{{ $viewData['product']['image'] }}" class="img-fluid rounded-start">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title">
             {{ $viewData['product']['name'] }} ({{ $viewData['product']['price'] }})
          </h5>
          <p class="card-text">{{ $viewData['product']['description'] }}</p>
          <p class="card-text"><small class="text-muted">Añadir a la cesta</small></p>
        </div>
      </div>
    </div>
  </div>
@endsection

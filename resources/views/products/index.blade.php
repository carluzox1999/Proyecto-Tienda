<!-- Esto es lo que debe contener el yield contenido de la plantilla de nuestra web cuando el usuario acceda a la vista "products" -->
@extends('layouts.app')
@section('title', $viewData['title'])
@section('subtitle', $viewData['subtitle'])
@section('content')
    <div class="row">
        <!-- Bucle con una iteración por cada producto -->
        @foreach ($viewData['products'] as $product)
            <div class="col-md-4 col-lg-3 mb-2">
                <div class="card">
                    <img src="{{ $product['image'] }}" class="card-img-top img-card">
                    <div class="card-body text-center">
                        <a href="/products/{{ $product["id"] }}"
                            class="btn bg-primary text-white">{{ $product['name'] }}</a>
                    </div>
                </div>
            </div>
        @endforeach
        <!-- FIN bucle con una iteración por cada producto -->
    </div>
@endsection

@extends('layouts.layout2')

@section('content')
<div class="jumbotron">
  <div class="row">
    <div class="col-md-4">
      <img src="{{ $destino->foto }}" alt="Imagen Producto1" class="img-fluid rounded">
    </div>
    <div class="col-md-8">
      <h1 class="display-4">{{ $destino->full_title  }}</h1>
      <p class="lead">{{ $destino->full_descrip  }}</p>

      <h5>Precio: {{ $destino->precio  }} $</h5>
    </div>
  </div>

  <div class="row">
    <div class="col-md-12 text-center">
      <hr class="mt-5">
      <p>Hace click y comenzá a viajar.</p>
      <a href="/transacciones/create/{{ $destino->id }}" class="btn btn-primary btn-lg" href="#" role="button">Comprar</a>
    </div>
  </div>
</div>
@endsection
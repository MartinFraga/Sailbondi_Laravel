@extends('layouts.layout')

@section('content')
<!-- BANNER -->
<div class="bg-info text-center py-1 rounded">
    <h1 class="display-4 text-white pt-1">Sailbondi, tu nueva manera de viajar</h1>
    <p class="lead text-white">Colonia / Motenvideo / Punta del Este</p>
</div><!-- BANNER -->

<!-- CARDS -->

<div class="row py-5">
    @foreach($destinos as $destino)
    <div class="col-md-4">
        <h3 class="text-center">{{ $destino["title"] }}</h3>
        <hr>
        <a href="/destinos/view/{{ $destino['id'] }}"><img src="{{ $destino['foto'] }}" alt="Imagen Producto1" class="img-fluid rounded"></a>
        <p class="text-center py-1">{{ $destino["descrip"] }}</p>
    </div>
    @endforeach    
    
</div><!-- CARDS -->

@endsection
@extends('layouts.layout')

@section('content')

<!-- CENTRAL IMAGE -->
<div>
            <img src="/images/sailbondi.png"
                class="img-fluid max-width: 100% height: auto responsive rounded mx-auto d-block" alt="Logo Sailbondi">
</div><!-- CENTRAL IMAGE -->


<!-- BANNER -->
<div class="bg-info text-center py-1 rounded">
    <h1 class="display-4 text-white pt-1"><strong>Sailbondi, tu nueva manera de viajar</strong></h1>
    <p class="lead text-white"><em>Colonia / Motenvideo / Punta del Este</em></p>
</div><!-- BANNER -->

<!-- CARDS -->

<div class="row py-5">
    @foreach($destinos as $destino)
    <div class="col-md-4">
        <h3 class="text-center"><mark>{{ $destino["title"] }}</mark></h3>
        <hr>
        <a href="/destinos/view/{{ $destino['id'] }}"><img src="{{ $destino['foto'] }}" alt="Imagen Producto1" class="img-fluid rounded"></a>
        <p class="text-center py-1">{{ $destino["descrip"] }}</p>
    </div>
    @endforeach    
    
</div><!-- CARDS -->

<div>
    <p id="blink" class="text-center">Aprovecha nuestras ofertas de Verano!</p>
</div>

<script>
    window.setInterval (BlinkIt, 500);
    var color = "#0057a0";
    function BlinkIt () {
    var blink = document.getElementById ("blink");
    color = (color == "#ffffff")? "#0057a0" : "#ffffff";
    blink.style.color = color;
    blink.style.fontSize='36px';}
</script>

@endsection
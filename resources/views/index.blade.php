@extends('layouts.layout')

@section('content')
<!-- BANNER -->
<div class="bg-info text-center py-1 rounded">
    <h1 class="display-4 text-white pt-1">Sailbondi, tu nueva manera de viajar</h1>
    <p class="lead text-white">Colonia / Motenvideo / Punta del Este</p>
</div><!-- BANNER -->

<!-- CARDS -->
<div class="row py-5">
    <div class="col-md-4">
        <h3 class="text-center">Escapada a Colonia</h3>
        <hr>
        <a href=""><img src="images/Colonia1.jpg" alt="Imagen Producto1" class="img-fluid rounded"></a>
        <p class="text-center py-1">Escapadas perfectas para pasar el día desde temprano en Colonia de Sacramento y regresar a última de la noche a Buenos Aires.</p>
    </div>
    <div class="col-md-4">
        <h3 class="text-center">Conoce Montevideo</h3>
        <hr>
        <a href=""><img src="images/PDE1.jpg" alt="Imagen Producto2" class="img-fluid rounded"></a>
        <p class="text-center py-1">La combinación idea para quienes quieren disfrutar de Uruguay recorriendo las distintas atracciónes turisticas de la costa oriental.</p>
    </div>
    <div class="col-md-4">
        <h3 class="text-center">Disfruta Punta del Este</h3>
        <hr>
        <a href=""><img src="images/Piriapolis.jpg" alt="Imagen Producto3" class="img-fluid rounded"></a>
        <p class="text-center py-1">Tu opción ideal para disfrutar un buen descanso en las costas uruguayas, conectando con las naturaleza, playas y estilo particular del Este.</p>
    </div>
</div><!-- CARDS -->
@endsection
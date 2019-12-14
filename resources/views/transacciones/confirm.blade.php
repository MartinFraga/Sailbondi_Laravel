@extends('layouts.layout2')

@section('content')
<!-- CENTRAL IMAGE -->
<div>
    <img src="imagenes/sailbondi.png" class="img-fluid max-width: 100% height: auto responsive rounded mx-auto d-block" alt="">
</div><!-- CENTRAL IMAGE -->

<div class="form-row mt-4 my-3 ml-2">
    <div class="col-md-12 text-center">
        <img src="/images/boarding_pass.jpg" alt="Imagen Producto1" class="img-fluid rounded">

    
        <h3>Felicitaciones tu número de pasaje es el {{ $transaccion->id }}</h3>
    </div>
</div>

@endsection
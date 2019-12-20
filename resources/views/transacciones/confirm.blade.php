@extends('layouts.layout')

@section('content')

<div class="form-row mt-4 my-3 ml-2">
    <div class="col-md-12 text-center">
        <img src="/images/boarding_pass.jpg" alt="Imagen Producto1" class="img-fluid rounded">

    
        <h3>Felicitaciones tus pasajes han sido emitidos con el código de reserva UXW-{{ $transaccion->id }}</h3>

        <h5>En unos minutos recibiras un email con las instrucciones para procesar tu pago.</h5>
    </div>
</div>

@endsection
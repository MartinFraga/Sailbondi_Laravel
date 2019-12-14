@extends('layouts.layout2')

@section('content')
<!-- CENTRAL IMAGE -->
<div>
    <img src="imagenes/sailbondi.png" class="img-fluid max-width: 100% height: auto responsive rounded mx-auto d-block" alt="">
</div><!-- CENTRAL IMAGE -->

<!-- BANNER -->
<div class="bg-info text-center py-2 rounded">
    <p class="lead text-white"><b>Detalles de la compra</b></p>
</div><!-- BANNER -->
<div class="form-row mt-4 my-3 ml-2">
    <div class="col-md-12">
    <h5> Destino: {{ $destino->name }} </h5>
    <h5> Total de la compra: {{ $destino->precio }} </h5>
    </div>
    
</div>


<!-- BANNER -->
<div class="bg-info text-center py-2 rounded">
    <p class="lead text-white"><b>Datos del Pasajero</b></p>
</div><!-- BANNER -->

<!--FORM  -->
<form method="POST" action="/transacciones/save">
    {{ csrf_field() }}
    <input type="hidden" name="total" value="{{ $destino->precio }}">
    <input type="hidden" name="destino" value="{{ $destino->id }}">

    <div class="form-row mt-4">
        <div class="form-group col-md-6">
            <label for="inputName">Nombre y Apellido</label>
            <input type="text" class="form-control" id="inputName" name="passenger_name" placeholder="Nombre del Producto">
        </div>
        <div class="form-group col-md-6">
            <label for="inputDescription">DNI</label>
            <input type="text" class="form-control" id="inputDescription" name="passenger_docnumber" placeholder="DNI">
        </div>
    </div>
    <div class="form-row">
        <div class="col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Confirmar Pasaje</button>
        </div>
    </div>
</form>
<!--FORM  -->
@endsection
@extends('layouts.layout')

@section('content')
<!-- CENTRAL IMAGE -->
<div>
    <img src="imagenes/sailbondi.png"
        class="img-fluid max-width: 100% height: auto responsive rounded mx-auto d-block" alt="">
</div><!-- CENTRAL IMAGE -->

<!-- BANNER -->
<div class="bg-info text-center py-2 rounded">
        <p class="lead text-white"><b>ALTA/BAJA/MODIFICACIONES de Productos</b></p>
    </div><!-- BANNER -->

<!--FORM  -->
<form method="POST" action="/pasajes/save">
    {{ csrf_field() }}
    <div class="form-row mt-4">
        <div class="form-group col-md-6">
            <label for="inputName">Nombre del Producto</label>
            <input type="text" class="form-control" id="inputName" name="name" placeholder="Nombre del Producto">
        </div>
        <div class="form-group col-md-6">
            <label for="inputDescription">Descripción</label>
            <input type="text" class="form-control" id="inputDescription" name="descrip" placeholder="Descripción">
        </div>
        <div class="form-group col-md-6">
            <label for="inputOrigen">Origen</label>
            <select name="id_origen" class="form-control">
                @foreach($destinos as $destino):
                    <option value="{{ $destino["id"] }}">
                        {{ $destino["name"] }} 
                    </option>
                @endforeach
            </select>
        </div>
        <div class="form-group col-md-6">
            <label for="inputDestino">Destino</label>
            <select name="id_destino" class="form-control">
                @foreach($destinos as $destino):
                    <option value="{{ $destino["id"] }}">
                        {{ $destino["name"] }} 
                    </option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="form-group">
        <label for="inputPrecio">Precio</label>
        <input type="number" class="form-control" id="inputPrecio" name="precio" placeholder="Precio">
    </div>
    <div class="form-group">
        <label for="inputFoto">Foto</label>
        <input type="text" class="form-control" id="inputFoto" name="foto" placeholder="Foto">
    </div>
    
    <button type="submit" class="btn btn-primary">Enviar</button>
</form><!--FORM  -->
@endsection
@extends('layouts.layout')

@section('content')
<!-- CENTRAL IMAGE -->
<div>
    <img src="imagenes/sailbondi.png"
        class="img-fluid max-width: 100% height: auto responsive rounded mx-auto d-block" alt="">
</div><!-- CENTRAL IMAGE -->

<!-- BANNER -->
<div class="bg-info text-center py-2 rounded">
        <p class="lead text-white"><b>Contanos un poco sobre vos para que podamos contactarte</b></p>
    </div><!-- BANNER -->

<!--FORM  -->
<form>
    <div class="form-row mt-4">
        <div class="form-group col-md-6">
            <label for="inputName4">Nombre</label>
            <input type="text" class="form-control" id="inputName4" placeholder="Nombre Completo">
        </div>
        <div class="form-group col-md-6">
            <label for="inputSurname4">Apellido</label>
            <input type="text" class="form-control" id="inputSurname4" placeholder="Apellido">
        </div>
        <div class="form-group col-md-6">
            <label for="inputEmail4">Email</label>
            <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
        </div>
        <div class="form-group col-md-6">
            <label for="inputTel4">Teléfono</label>
            <input type="teléfono" class="form-control" id="inputTel4" placeholder="Teléfono de contacto">
        </div>
    </div>
    <div class="form-group">
        <label for="inputAddress">Dirección</label>
        <input type="text" class="form-control" id="inputAddress" placeholder="1234 Avenida Principal">
    </div>
    <div class="form-group">
        <label for="inputAddress2">Indicaciones</label>
        <input type="text" class="form-control" id="inputAddress2" placeholder="Lote, Piso o Departamento">
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="inputCity">Ciudad o Localidad</label>
            <input type="text" class="form-control" id="inputCity">
        </div>
        <div class="form-group col-md-4">
            <label for="inputState">Provincia</label>
            <select id="inputState" class="form-control">
                <option selected>Seleccione...</option>
                <option>...</option>
            </select>
        </div>
        <div class="form-group col-md-2">
            <label for="inputZip">Código Postal</label>
            <input type="text" class="form-control" id="inputZip">
        </div>
    </div>
    <div class="form-group">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" id="gridCheck">
            <label class="form-check-label" for="gridCheck">
                Quiero que me contacten
            </label>
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Enviar</button>
</form><!--FORM  -->
@endsection
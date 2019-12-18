@extends('layouts.layout')

@section('content')

<!-- CENTRAL IMAGE -->
<div>
    <img src="/images/sailbondi.png" class="img-fluid max-width: 100% height: auto responsive rounded mx-auto d-block" alt="Logo Sailbondi">
</div><!-- CENTRAL IMAGE -->

<!-- BANNER -->
<div class="bg-info text-center py-2 rounded">
    <p class="lead text-white"><b>Suscribite a nuestro newsletter para recibir nuestras noticias y promociones</b></p>
</div><!-- BANNER -->

<!--FORM  -->
@if (Session::has('flash_message'))
<div class="alert alert-success mt-2"><strong>{{ Session::get('flash_message') }}</strong></div>
@endif
<form method="post" action="{{ route('contact.store') }}" id="form">
    {{ csrf_field() }}
    <div class="form-row mt-4">
        <div class="form-group col-md-6">
            <label for="inputName"><strong>Nombre y Apellido</strong></label>
            <input type="text" class="form-control" id="inputName" placeholder="Nombre Completo" name="name">
            @if ($errors->has('name'))
            <small class="form-text invalid-feedback">{{ $errors->first('name') }}</small>
            @endif
        </div>

        <div class="form-group col-md-6">
            <label for="inputEmail"><strong>Email</strong></label>
            <input type="text" class="form-control" id="inputEmail" placeholder="Email" name="email">
            @if ($errors->has('email'))
            <small class="form-text invalid-feedback">{{ $errors->first('email') }}</small>
            @endif
        </div>

        <div class="form-group col-md-6">
            <label for="inputName"><strong>Provincia</strong></label>
            <select name="provincia" id="provincias" class="form-control" onchange="getMunicipios()">

            </select>
        </div>
        <div class="form-group col-md-6">
            <label for="inputName"><strong>Municipio</strong></label>
            <select name="municipio" id="municipios" class="form-control">

            </select>
        </div>
    </div>


    <button type="button" class="btn btn-primary" onclick="guardar()">Enviar</button>
</form>
<!--FORM  -->
@endsection
<script>
    var listaProvincias = [];
    var listaMunicipios = [];

    function getProvincias() {
        fetch('https://apis.datos.gob.ar/georef/api/provincias')
            .then(function(response) {
                return response.json();
            }).then(function(data) {
                var provincias = [];
                var content = '<option value="">Seleccione</option>';
                for (var i = 0; i < data.cantidad; i++) {
                    var prov = data['provincias'][i];
                    provincias.push({
                        id: prov["id"],
                        nombre: prov["nombre"]
                    });
                    content += '<option value="' + prov["id"] + '">' + prov["nombre"] + '</option>';
                }
                listaProvincias = provincias;
                document.getElementById('provincias').innerHTML = content;

                return provincias;
            });
    }

    function getMunicipios() {
        var idProvincia = document.getElementById('provincias').value;

        fetch('https://apis.datos.gob.ar/georef/api/municipios?provincia=' + idProvincia)
            .then(function(response) {
                return response.json();
            }).then(function(data) {
                var municipios = [];
                var content = '<option value="">Seleccione</option>';
                for (var i = 0; i < data.cantidad; i++) {
                    var mun = data['municipios'][i];
                    municipios.push({
                        id: mun["id"],
                        nombre: mun["nombre"]
                    });
                    content += '<option value="' + mun["id"] + '">' + mun["nombre"] + '</option>';
                }
                document.getElementById('municipios').innerHTML = content;

                listaMunicipios = municipios;
                return listaMunicipios;
            });

    }

    function guardar() {
        var nameValue = document.getElementById('inputName').value;
        var emailValue = document.getElementById('inputEmail').value;
        var provValue = document.getElementById('provincias').value;

        if (!nameValue || !provValue || !emailValue) {
            Swal.fire(
                'Atención',
                'Nombre, email y provincia son requeridos',
                'warning'
            );
        } else {
            // document.getElementById("form").submit();
            Swal.fire({
                title: 'Registro completo',
                text: "Ha sido registrado en el Newsletter!",
                icon: 'success',
            }).then((result) => {
                if (result.value) {
                    document.getElementById('inputName').value = '';
                    document.getElementById('inputEmail').value = '';
                    document.getElementById('provincias').value = '';
                    document.getElementById('municipios').value = '';
                    document.getElementById('municipios').innerHTML = '';
                }
            });
        }
    }

    getProvincias();
</script>

@section('scripts')

@endsection
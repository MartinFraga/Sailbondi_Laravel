@extends('layouts.layout')

@section('content')

<!-- CENTRAL IMAGE -->
<div>
    <img src="/images/sailbondi.png" class="img-fluid max-width: 100% height: auto responsive rounded mx-auto d-block" alt="Logo Sailbondi">
</div><!-- CENTRAL IMAGE -->

<!-- BANNER -->
<div class="bg-info text-center py-2 rounded">
    <p class="lead text-white"><b>Suscribite al newsletter para recibir nuestras noticias y promociones</b></p>
</div><!-- BANNER -->

<!--FORM  -->
@if (Session::has('flash_message'))
<div class="alert alert-success mt-2"><strong>{{ Session::get('flash_message') }}</strong></div>
@endif
<form method="post" action="{{ route('newsletter.store') }}" id="form">
    {{ csrf_field() }}

    <input type="hidden" name="municipio" id="municipio">
    <input type="hidden" name="provincia" id="provincia">
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
            <select name="provincia_id" id="provincia_id" class="form-control" onchange="getMunicipios()">

            </select>
        </div>
        <div class="form-group col-md-6">
            <label for="inputName"><strong>Municipio</strong></label>
            <select name="municipio_id" id="municipio_id" class="form-control" onchange="setMunicipio()">

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
                var content = '<option value="">Seleccione</option>';
                for (var i = 0; i < data.cantidad; i++) {
                    var prov = data['provincias'][i];
                    content += '<option value="' + prov["id"] + '">' + prov["nombre"] + '</option>';
                }
                document.getElementById('provincia_id').innerHTML = content;
            });
    }

    function getMunicipios() {
        document.getElementById('municipio').value = '';

        var selected = document.getElementById("provincia_id");
        document.getElementById('provincia').value = selected.options[selected.selectedIndex].text;

        fetch('https://apis.datos.gob.ar/georef/api/municipios?provincia=' + selected.value)
            .then(function(response) {
                return response.json();
            }).then(function(data) {
                var content = '<option value="">Seleccione</option>';
                for (var i = 0; i < data.cantidad; i++) {
                    var mun = data['municipios'][i];
                    content += '<option value="' + mun["id"] + '">' + mun["nombre"] + '</option>';
                }
                document.getElementById('municipio_id').innerHTML = content;
            });
    }

    function setMunicipio() {
        var sel = document.getElementById("municipio_id");
        document.getElementById('municipio').value = sel.options[sel.selectedIndex].text;
    }

    function guardar() {
        var nameValue = document.getElementById('inputName').value;
        var emailValue = document.getElementById('inputEmail').value;
        var provValue = document.getElementById('provincia_id').value;

        if (!nameValue || !provValue || !emailValue) {
            Swal.fire(
                'Atención',
                'Nombre, email y provincia son requeridos',
                'warning'
            );
        } else {
            document.getElementById("form").submit();
            
            /*
            Swal.fire({
                title: 'Registro completo',
                text: "Ha sido registrado en el Newsletter!",
                icon: 'success',
            }).then((result) => {
                if (result.value) {
                    document.getElementById('inputName').value = '';
                    document.getElementById('inputEmail').value = '';
                    document.getElementById('provincia_id').value = '';
                    document.getElementById('municipio_id').value = '';
                    document.getElementById('municipio_id').innerHTML = '';
                }
            });
            */
        }
    }

    getProvincias();
</script>

@section('scripts')

@endsection
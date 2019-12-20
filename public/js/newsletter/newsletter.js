
function getProvincias() {
    fetch('https://apis.datos.gob.ar/georef/api/provincias')
        .then(function (response) {
            return response.json();
        }).then(function (data) {
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
        .then(function (response) {
            return response.json();
        }).then(function (data) {
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

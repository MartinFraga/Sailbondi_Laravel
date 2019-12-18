function eliminar(id) {
    swal.fire({
        title: 'Esta seguro de eliminar?',
        text: "¿Confirma que desea eliminar este destino?",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        cancelButtonText: 'Cancelar',
        confirmButtonText: 'Eliminar'
    }).then((result) => {
        if (result.value) {

            Swal.fire(
                'Eliminado',
                'El Destino ha sido eliminado',
                'success'
            )
        }
    });
}

function goTo(url){
    window.location.href = url;
}
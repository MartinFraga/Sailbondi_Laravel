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

            fetch('/admin/delete/' + id)
                .then(function (response) {
                    return response.json()
                })
                .then(function (data) {
                    
                    Swal.fire({
                        title: 'Eliminado',
                        text: data.message,
                        icon: 'success'
                    }).then((result) => {
                        location.reload();
                    });
                    
                });

        }
    });
}

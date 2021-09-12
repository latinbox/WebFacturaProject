function controlBorrado(path,imagen){
    Swal.fire({
        title: 'Estás seguro?',
        text: "Vas a borrar la imagen llamada: "+imagen,
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Si, borrar!'
      }).then((result) => {
        if (result.isConfirmed) {

        window.location.replace(path);

          Swal.fire(
            'Borrado!',
            'Tu imagen ha sido borrada.',
            'exito'
          )
        }
      })
return false;
}
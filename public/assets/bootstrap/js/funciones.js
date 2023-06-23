function nombre_estudiante(id_estudiante){
  swal({
    title: "¡Error!",
    text: "Llenar todos los campos.",
    icon: "warning",
    buttons: true,
    dangerMode: true,
  })
  .then((willDelete) => {
    if (willDelete) {
      swal("Por favor, coloque sus datos correctamente.", {
      
      });
    } else {
      swal("¿Desea cancelar la acción?");
    }
  });
}

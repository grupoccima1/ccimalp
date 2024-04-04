function init(){
    $("#datos_form").on("submit",function(e){
        guardaryeditar(e);
    });
}


function guardaryeditar(e){
    e.preventDefault();
    var formData = new FormData($("#datos_form")[0]);
    $.ajax({
        url:"",
        type: "POST",
        data: formData,
        contentType: false,
        processData: false,
        success: function(datos){
            $('#nombre').val('');
            $('#telefono').val('');
            $('#correo').val('');
            $('#mensaje').summernote('reset');
            swal("Correcto!", "Registrado Correctamente", "success");
        }
    });
}
init();

Swal.fire({
    title: "Enviado",
    text: "Datos Enviados",
    icon: "success"
  });
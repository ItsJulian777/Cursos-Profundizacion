<?php

include '../Modelo/Conexion/configServer.php';
include '../Modelo/Conexion/consulSQL.php';

$codigo=consultasSQL::clean_string($_POST['codigo']);
$documento=consultasSQL::clean_string($_POST['documento']);
$nombre=consultasSQL::clean_string($_POST['nombre']);
$direccion=consultasSQL::clean_string($_POST['direccion']);
$telefono=consultasSQL::clean_string(md5($_POST['telefono']));
$correo=consultasSQL::clean_string(md5($_POST['correo']));
$consignacion=consultasSQL::clean_string($_POST['clien-dir']);


if(!$codigo=="" && !$documento=="" && !$nombre=="" && !$direccion=="" && !$telefono=="" && !$correo=="" && !$consignacion=="" && !$comprobante==""){
    if($passCliente==$passCliente2){
        $verificar= ejecutarSQL::consultar("SELECT * FROM cliente WHERE NIT='".$nitCliente."'");
        $verificaltotal = mysqli_num_rows($verificar);
        if($verificaltotal<=0){
            if(consultasSQL::InsertSQL("cliente", "NIT, Nombre, NombreCompleto, Apellido, Direccion, Clave, Telefono, Email", "'$nitCliente','$nameCliente','$fullnameCliente','$apeCliente','$dirCliente', '$passCliente','$phoneCliente','$emailCliente'")){
                echo '<script>
                    swal({
                      title: "Registro completado",
                      text: "El registro se completó con éxito, ya puedes iniciar sesión en el sistema",
                      type: "success",
                      showCancelButton: true,
                      confirmButtonClass: "btn-danger",
                      confirmButtonText: "Aceptar",
                      cancelButtonText: "Cancelar",
                      closeOnConfirm: false,
                      closeOnCancel: false
                      },
                      function(isConfirm) {
                      if (isConfirm) {
                        location.reload();
                      } else {
                        location.reload();
                      }
                    });
                  </script>';
            }else{
               echo '<script>swal("ERROR", "Ocurrió un error inesperado, por favor intente nuevamente", "error");</script>';
            }
        }else{
            echo '<script>swal("ERROR", "El DNI que ha ingresado ya está registrado en el sistema, por favor ingrese otro número de DNI", "error");</script>';
        }
        mysqli_free_result($verificar);
    }else{
        echo '<script>swal("ERROR", "Las contraseñas no coinciden, por favor verifique e intente nuevamente", "error");</script>';
    }
}else {
    echo '<script>swal("ERROR", "Los campos no pueden estar vacíos", "error");</script>';
}
?>
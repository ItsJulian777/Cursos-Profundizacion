<?php
include '../Modelo/Conexion/conexion.php';
include '../Modelo/Conexion/consulSQL.php';

$codigo = consultasSQL::clean_string($_POST["codigo"]);
$documento = consultasSQL::clean_string($_POST["documento"]);
$nombre = consultasSQL::clean_string($_POST["nombre"]);
$direccion = consultasSQL::clean_string($_POST["direccion"]);
$telefono = consultasSQL::clean_string($_POST["telefono"]);
$correo = consultasSQL::clean_string($_POST["correo"]);
$consignacion = consultasSQL::clean_string($_POST["consignacion"]);
$archivo =consultasSQL::clean_string($_FILES["archivo"]);


if(!$codigo=="" && !$documento=="" && !$nombre=="" && !$direccion=="" && !$telefono=="" && !$correo=="" && !$consignacion=="" && !$archivo==""){
        $verificar= ejecutarSQL::consultar("SELECT * FROM estudiante WHERE NIT='".$codigo."'");
        $verificaltotal = mysqli_num_rows($verificar);
        if($verificaltotal<=0){
            if(consultasSQL::InsertSQL("estudiante", "codigo,documento,nombre,direccion,telefono,correo,consignacion,comprobante", "'$codigo','$documento','$nombre','$direccion','$telefono','$correo','$consignacion','$archivo'")){
                echo '<script> alert("'.$Variable.'");</script>';
                echo '<script> location.href="../index.php"; </script>';
            }else{
               echo '<script>swal("ERROR", "Ocurrió un error inesperado, por favor intente nuevamente", "error");</script>';
            }
        }else{
            echo '<script>swal("ERROR", "El DNI que ha ingresado ya está registrado en el sistema, por favor ingrese otro número de DNI", "error");</script>';
        }
        mysqli_free_result($verificar);
   
}else {
    echo '<script>swal("ERROR", "Los campos no pueden estar vacíos", "error");</script>';
}
        

?>
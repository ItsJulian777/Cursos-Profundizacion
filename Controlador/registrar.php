<?php
include ("./Modelo/Conexion/conexion.php");

//esto es para cuando se haga la accion de presionar el boton 
if(isset($_POST["registro"])){
    //strlen para comparar y saber si esta bacioa la cadena de texto
    if(strlen($_POST["codigo"])<1 &&
        strlen($_POST["documento"])<1 &&
        strlen($_POST["nombre"])<1 &&
        strlen($_POST["direccion"])<1 &&
        strlen($_POST["telefono"])<1 &&
        strlen($_POST["correo"])<1 &&
        strlen($_POST["consignacion"])<1 &&
        strlen($_POST["comprobante"])<1 ){
// con el trim le quitamos los espacios del principio y del final
            $codigo = trim($_POST["codigo"]);
            $documento = trim($_POST["documento"]);
            $nombre = trim($_POST["nombre"]);
            $direccion = trim($_POST["direccion"]);
            $telefono = trim($_POST["telefono"]);
            $correo = trim($_POST["correo"]);
            $consignacion = trim($_POST["consignacion"]);
            $comprobante= addslashes(file_get_contants($_FILES["comprobante"]["tmp_name"]));
           
            $consulta = "INSERT INTO estudiante(codigo,documento,nombre-completo,direccion, telefono,correo,consignacion,comprobante) 
            VALUES ('$codigo','$documento','$nombre','$direccion','$telefono',
            '$correo','$consignacion',' $comprobante')";
            $resultado = mysqli_query($conn,$consulta);
            if ($resultado){
                ?>
                <h3 class= "ok">¡TE HAS INSCRITO CORRECTAMENTE!</h3>
                <?php
            } else {
                ?>
                <h3 class="ok">¡UPS HA OCURRIDO UN ERRORCIRIJITO!</h3>
                <?php
            }
        } else{
            ?>
            <h3 class="ok">¡COMPLETA LOS CAMPOS PRIMEROS!</h3>
            <?php
        }

        }

?>
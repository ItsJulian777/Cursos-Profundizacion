<?php
include ("../Modelo/Conexion/conexion.php");
if(isset($_POST["registro"])|| isset($_POST["comprobante"])){
            $codigo = $_POST["codigo"];
            $documento =$_POST["documento"];
            $nombre = $_POST["nombre"];
            $direccion = $_POST["direccion"];
            $telefono = $_POST["telefono"];
            $correo =$_POST["correo"];
            $consignacion =$_POST["consignacion"];

            if($_FILES["comprobante"]) {
                $nombre_base = ($_FILES["comprobante"]["name"]);
                $consulta = "INSERT INTO estudiante(codigo,documento,nombre,direccion,telefono,correo,consignacion,comprobante)
            VALUES ('$codigo','$documento','$nombre','$direccion','$telefono','$correo','$consignacion','$nombre_base')";
            $resultado = mysqli_query($conn,$consulta);
             if ($resultado){
                echo "<script>alert('se ha enviado informe'); window.location='index.php'</script>";
            } else {
               printf("Errormessage: %s\n", mysqli_error($conn));
            }
            }
            else{
                echo "Error al subir archivo";
            }
        } 
?>
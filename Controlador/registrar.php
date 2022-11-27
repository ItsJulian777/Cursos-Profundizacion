<?php
include ("../Modelo/Conexion/conexion.php");
if(isset($_POST["registro"])){
            $nombre=$_POST["nombre"];
            $documento=$_POST["documento"];
            $direccion=$_POST["direccion"];
            $telefono=$_POST["telefono"];
            $correo=$_POST["email"];
            $contraseña=$_POST["contraseña"];
            
            $tipo=2; 

            $consulta = "INSERT INTO usuario(documento,nombre,email,celular,contraseña,direccion,ustipo)
            VALUES('$documento','$nombre','$correo','$telefono','$contraseña','$direccion','$tipo')";
            $resultado = mysqli_query($conn,$consulta);
            if($resultado){
                echo "<script>alert('se ha enviado informe');window.location='index.php'</script>";

            } else {
               printf("Errormessage: %s\n", mysqli_error($conn));
            }
            }
            else{
                echo "Error al subir archivo";
            }
        
?>
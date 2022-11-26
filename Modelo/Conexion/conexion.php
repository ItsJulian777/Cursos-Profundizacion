<?php
include ("configuracion.php");
// Create connection
$conn = new mysqli($servername, $username, $password, $database);
// Check connection
if (mysqli_connect_error()) {
    echo "Connection failed: " . mysqli_connect_error();
    exit();
}else{
echo "Connected successfully";
mysqli_close($conn);

}


?>
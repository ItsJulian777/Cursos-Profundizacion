<?php
include '../Modelo/Conexion/conexion.php';

?>

<!doctype html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link href="../public/imagenes/favicon.ico" rel="Shortcut icon">
  <title>Registro Estudiante</title>
  <link rel="stylesheet" href="../CSS/StyleRegister.css">
  <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-bold-rounded/css/uicons-bold-rounded.css'>
  <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-solid-rounded/css/uicons-solid-rounded.css'>
  <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-straight/css/uicons-regular-straight.css'>

  <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css'>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
    crossorigin="anonymous"></script>
</head>

<body>
 
  <div class="header-v8 img-logo-superior" style="background-color: #E81B1B;">
    <!--=== Parallax Quote ===-->
    <div class="parallax-quote parallaxBg" style="padding: 0px 30px; height: 120px;">
      <div class="parallax-quote-in" style="padding: 0px;">
        <div class="row">
          <div class="col-4">
            <a href="https://ingsistemas.cloud.ufps.edu.co/">
              <img id="logo-header" src="../public/imagenes/logo_vertical_ingsistemas_ht180.png"
                alt="Logo Programa de Ingeniería de Sistemas" style="max-height:120px; max-width: 300px;">
            </a>

          </div>
          <div class="col-4 ">
            <h1 style="padding:35px 0px 0px 0px; color: white; font-size: 42px;">Registro Estudiante</h1>
          </div>
        </div>
      </div>
    </div>
    <!--=== PRESENTACION DE LOGOS DE LA UFPS ===-->
  </div>
  <nav class="navbar navbar-expand-lg sticky-top navbar-dark bg-danger">
    <div class="container-fluid">
      <a class="navbar-brand" href="../Cursos.php">UFPS</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="./AcercaDe.php">ACERDA-DE</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-1 mb-lg-0">
              <div class="salir">
              <a class="nav-link active" aria-current="page" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-power" viewBox="0 0 16 16">
                <path d="M7.5 1v7h1V1h-1z"/>
                <path d="M3 8.812a4.999 4.999 0 0 1 2.578-4.375l-.485-.874A6 6 0 1 0 11 3.616l-.501.865A5 5 0 1 1 3 8.812z"/>
              </svg></a>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <br>
  <!--=== CUERPO DE LA PAGINA ===-->
  <div class="container">
    <div class="subcontainer1">
        
      <form action="../Controlador/registrar.php" method="POST" class="row g-3 needs-validation" enctype="multipart/form.data">
        <div class="col-md-4">
          <label for="validationCustom01" class="form-label">CODIGO</label>
          <div class="input-group">
            <span class="input-group-text" id="inputGroupPrepend2"><i class="fi fi-br-hastag"></i></span>
            <input type="text" name="codigo" class="form-control" id="validationCustom01" required>
          </div>
        </div>
        <div class="col-md-4">
          <label for="validationCustom02" class="form-label">N° DE DOCUMENTO</label>
          <div class="input-group">
            <span class="input-group-text" id="inputGroupPrepend2"><i class="fi fi-br-hastag"></i></span>
            <input type="text" name="documento" class="form-control" id="validationCustom01" required>
          </div>
        </div>
        <div class="col-md-4">
          <label for="validationCustomUsername" class="form-label">NOMBRE COMPLETO</label>
         
          <div class="input-group">
            <span class="input-group-text" id="inputGroupPrepend2"><i class="fi fi-sr-user"></i></span>
            <input type="text" name="nombre" class="form-control" id="validationCustom01" required>
          </div>
        </div>
        <div class="col-md-6">
          <label for="validationCustom03" class="form-label">DIRECCION</label>

          <div class="input-group">
            <span class="input-group-text" id="inputGroupPrepend2"><i class="fi fi-rs-marker"></i></span>
            <input type="text" name="direccion" class="form-control" id="validationCustom01" required>
          </div>

        </div>
        <div class="col-md-3">
          <label for="validationCustom04" class="form-label">TELEFONO</label>
          <div class="input-group">
            <span class="input-group-text" id="inputGroupPrepend2"><i class="fi fi-sr-phone-call"></i></span>
            <input type="text" name="telefono" class="form-control" id="validationCustom01" required>
          </div>
        </div>
        <div class="col-md-3">
          <label for="validationCustom04" class="form-label">CORREO</label>
          <div class="input-group">
            <span class="input-group-text" id="inputGroupPrepend2"><i class="fi fi-sr-envelope"></i></span>
            <input type="text" name="correo" class="form-control" id="validationCustom01" required>
          </div>
        </div>

        <div class="col-md-3">
          <label for="validationCustom05" class="form-label">N° CONSIGNACION</label>
          <div class="input-group">
            <span class="input-group-text" id="inputGroupPrepend2"><i class="fi fi-sr-credit-card"></i></span>
            <input type="text" name="consignacion" class="form-control" id="validationCustom01"required  >
          </div>
          </div>
        
        <div class="col-md-6">
          <label for="validationCustom05" class="form-label">COMPROBANTE DE PAGO</label>
          <div class="input-group">
            <span class="input-group-text" id="inputGroupPrepend2"><i class="fi fi-sr-document"></i></span>
            <input type="file" name="comprobante" class="form-control" id="validationCustom01" required >
           </div>

        </div>
       
       <div class="col-12">
          <input  class="btn btn-danger" name="registro" type="submit"></button>
        </div>
      </form>

    </div>
    <div class="subcontainer2">
      <img src="../Image/libro-de-lectura.png" alt="Foto" class="imagen">

    </div>
  </div>

  </div>
  </div>
  <br><br>
  <div class=" text-secondary bg-light">
    <hr>
    <div class="" align="center">
      <div class="col-6">
        Copyright © 2022 UFPS - Todos los Derechos Reservados
        <br>
        Desarrollado por: JOSE JULIAN FORERO PEREZ - YIEISON JOSE LIZARAZO - <br>OSCAR FELIPE CACERES SUAREZ
        <br>
        Versión: 1.0
        <br>
      </div>
      <br>
    </div>
  </div>
  <!-- Javascript files -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>
</body>

</html>
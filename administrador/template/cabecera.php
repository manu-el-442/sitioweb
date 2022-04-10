<?php  
session_start();
if(!isset($_SESSION['usuario'])){
  header("Location:../index.php");
}else{

  if($_SESSION['usuario']=="ok"){
    $nombreUsuario=$_SESSION["nombreUsuario"];
    
  }
}


?>


<!doctype html>
<html lang="es">
  <head>
    <title>Administrador</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/navbar/bootstrap.css">
    <link rel="stylesheet" href="../../css/navbar/bootstrap.min.css">

    
  </head>
  <body style="background-color: darksalmon;">

  <?php $url="https://".$_SERVER['HTTP_HOST']."/" ?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Manuel Gallardo</a>
    <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Alternar navegación" _mstaria-label="420485" _mstvisible="0" _msthidden="A" _msthiddenattr="71305">
      <span class="navbar-toggler-icon" _mstvisible="1"></span>
    </button>
    <div class="navbar-collapse collapse" id="navbarColor01" style="">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="<?php echo $url;?>/administrador/inicio.php"><font >Administrador </font><span class="sr-only">(actual)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo $url;?>/administrador/seccion/productos.php">Libros</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="<?php echo $url; ?>">Ver sitio web</a>
        </li>
      </ul>
    </div>
  </nav>

      <div class="container">
        <br>
          <div class="row">

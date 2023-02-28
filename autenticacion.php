<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="autenticacion.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>autenticacion</title>
</head>
<body>
<?php
    session_start();
    if(isset($_SESSION['token']))
    {
        echo("<h2>Zona privado</h2>");
    }
    else{
        header('location:formulario.php');
    }
  ?>
  <nav class="navbar navbar-expand-lg bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Blog de Alex</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="formulario.php">Formulario</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="mostrar.php">Mostrar</a>
          </li>
		<li class="nav-item">
            <a class="nav-link" href="autenticacion.php">update/delete</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
  
    <h2>Log out</h2>
    <form action="logout.php" method="post">
        <button type="submit">Cerrar sesión</button>
    </form>
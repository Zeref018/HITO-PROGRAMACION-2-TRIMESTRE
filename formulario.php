<!DOCTYPE html>
<html>
<head>
    <title>Nuevo post del blog</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="formulario.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>

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
      
<h1>Nuevo post del blog</h1>
<form method="post" action="mysql.php" enctype="multipart/form-data">
    <label for="autor">Autor email:</label>
    <input type="email" id="autor" name="autor" required><br><br>

    <label for="titulo">Titulo:</label>
    <input type="text" id="titulo" name="titulo" required><br><br>

    <label for="contenido">Contenido:</label><br>
    <textarea id="contenido" name="contenido" required></textarea><br><br>

    <label for="fecha">Fecha de publicacion:</label>
    <input type="date" id="fecha" name="fecha" required><br><br>

    <label for="imagen">Imagen:</label>
    <input type="file" id="imagen" name="imagen"><br><br>

    <input type="submit" value="Publicar">

</form>

</body>
</html>

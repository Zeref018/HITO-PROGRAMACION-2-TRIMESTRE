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
<?php
// Conectamos a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // Configuramos el modo de errores para que lance excepciones
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Conexión fallida: " . $e->getMessage();
}

// Obtenemos los datos del formulario
$autor = $_POST['autor'];
$titulo = $_POST['titulo'];
$contenido = $_POST['contenido'];
$fecha = $_POST['fecha'];

// Subimos la imagen al servidor y obtenemos la ruta
$imagen = "";
if ($_FILES['imagen']['error'] == 0) {
    $imagen_temporal = $_FILES['imagen']['tmp_name'];
    $imagen_nombre = $_FILES['imagen']['name'];
    $imagen_ruta = "uploads/" . $imagen_nombre;
    move_uploaded_file($imagen_temporal, $imagen_ruta);
    $imagen = $imagen_ruta;
}

header('location:mostrar.php');

// Preparamos la consulta SQL
$stmt = $conn->prepare("INSERT INTO test (autor, titulo, contenido, fecha, imagen) VALUES (:autor, :titulo, :contenido, :fecha, :imagen)");
$stmt->bindParam(':autor', $autor);
$stmt->bindParam(':titulo', $titulo);
$stmt->bindParam(':contenido', $contenido);
$stmt->bindParam(':fecha', $fecha);
$stmt->bindParam(':imagen', $imagen);

// Ejecutamos la consulta SQL
if ($stmt->execute()) {
    echo "Post publicado correctamente.";
} else {
    echo "Error al publicar el post: " . $stmt->errorInfo();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  session_start();
  $_SESSION['token'] = true;
  exit;
} 
else {
    $error = 'Credenciales inválidas';
}


?>
</body>
</html>




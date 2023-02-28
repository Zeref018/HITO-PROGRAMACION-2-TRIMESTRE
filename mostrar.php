<!DOCTYPE html>
<html>
<head>
	<title>Posts</title>
	<link rel="stylesheet" href="mostrar.css">
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

	<h1>BLOG</h1>
	<table>
		<thead>
			<tr>
				<th>Autor</th>
				<th>Título</th>
				<th>Contenido</th>
				<th>Fecha</th>
				<th>Imagen</th>
			</tr>
		</thead>
		<tbody>
			<?php
			// Conectamos a la base de datos
			$servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "test";

			try {
			    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
			    // set the PDO error mode to exception
			    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

			    // Consultamos los datos de la base de datos
				$sql = "SELECT * FROM test";
				$stmt = $conn->prepare($sql);
				$stmt->execute();

			    // Mostramos los datos en una tabla
				while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
					echo "<tr>";
					echo "<td>" . $row['autor'] . "</td>";
					echo "<td>" . $row['titulo'] . "</td>";
					echo "<td>" . $row['contenido'] . "</td>";
					echo "<td>" . $row['fecha'] . "</td>";
					echo "<td><img src='" . $row['imagen'] . "' width='100px'></td>";
					echo "</tr>";
				}

			    // Cerramos la conexión
			    $conn = null;
			} catch(PDOException $e) {
			    echo "Error: " . $e->getMessage();
			}
			?>
		</tbody>
	</table>
</body>
</html>

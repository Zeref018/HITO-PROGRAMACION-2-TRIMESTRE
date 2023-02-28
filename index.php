<!DOCTYPE html>
<html>
<head>
    <title>Explicación de diferencias entre lenguajes de programación</title>
    <link rel="stylesheet" href="index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <?php
    setcookie('acceso', $_SERVER['REMOTE_ADDR'] . '-' . date('d-m-Y H:i:s'), time() + 3600);
    ?>

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

<div class="container">
    <h1>Explicación de diferencias entre lenguajes de programación</h1>
    <p>Los lenguajes de programación se pueden clasificar en diferentes categorías según su paradigma o forma de programar. Algunas de estas categorías son:</p>
    <ul>
        <li><strong>Lenguajes procedimentales:</strong> se basan en la ejecución de procedimientos o subrutinas que realizan tareas específicas. En estos lenguajes, el flujo de control se dirige de forma secuencial a través de la ejecución de las instrucciones del programa.</li>
        <li><strong>Lenguajes orientados a objetos:</strong> se basan en la creación de objetos que encapsulan datos y funcionalidad relacionados. Estos objetos se comunican entre sí mediante mensajes, lo que permite la reutilización de código y una mayor modularidad.</li>
        <li><strong>Lenguajes orientados a eventos:</strong> se basan en la programación de acciones que se activan en respuesta a eventos ocurridos en el sistema o en el entorno. En estos lenguajes, el flujo de control se dirige por la ocurrencia de eventos, en lugar de seguir una secuencia lineal.</li>
    </ul>
    <p>Estos son solo algunos ejemplos de las diferentes categorías en las que se pueden clasificar los lenguajes de programación. Cada una de ellas tiene sus propias características y ventajas, y la elección de un lenguaje dependerá de las necesidades y requisitos específicos de cada proyecto.</p>
</div>
</body>
</html>












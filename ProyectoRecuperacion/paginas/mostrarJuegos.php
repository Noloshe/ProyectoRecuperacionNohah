<?php
session_start();

include 'cn.php';

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Proyecto PHP - Nohah</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/navbar-fixed/">

    

    <!-- Bootstrap core CSS -->
<link href="../css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      table, th ,td{
        border: 1px solid black;
        border-collapse: collapse;
      }

      th{
        text-align: center;
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="../css/navbar-top-fixed.css" rel="stylesheet">
  </head>
  <body>
    
<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Proyecto PHP</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav me-auto mb-2 mb-md-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../paginas/login.php">Login</a>
        </li>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../paginas/mostrarJuegos.php">Juegos</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<main class="container">
  <div class="bg-light p-5 rounded">
    <h1>Juegos</h1>
    <form action="mostrarJuegos.php" method="POST">
     <p>Mira la información que tenemos de juegos <?php echo $_SESSION['usuario'] ?>!, mira la tabla y expermienta.</p>
      <table border="1" bordercolor="#808080">
        <tr>
          <th>Codigo</th>
          <th>Nombre</th>
          <th>Imagen</th>
          <th>Precio</th>
        </tr>
        <?php
        $sql="SELECT * from juegos";
        $resultado=mysqli_query($conexion, $sql);

        while($mostrar=mysqli_fetch_array($resultado)){
        ?>
        <tr>
          <td><?php echo $mostrar['IdJuego'] ?></td>
          <td><?php echo $mostrar['nombre'] ?></td>
          <td><?php echo '<img width="100" src="data:image/png;base64,'. base64_encode($mostrar['imagen']).'"/>'; ?></td>
          <td><?php echo $mostrar['precio'] ?></td>
          <td><a href="VerJuego.php">Ver juego</a></td>
          <td><a href="ModificarJuego.php">"Modificar juego</a></td>
        </tr>
        <?php
      }
        ?>
      </table>
   </form>
  </div>
</main>


    <script src="../js/bootstrap.bundle.min.js"></script>

      
  </body>
</html>
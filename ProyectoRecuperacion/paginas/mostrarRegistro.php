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
          <a class="nav-link active" href="../paginas/index.html">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="../paginas/mostrarRegistro.php">Registro</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<main class="container">
  <div class="bg-light p-5 rounded">
    <h1>Introduce tus datos de registro:</h1>
    <form action="mostrarRegistro.php" method="POST">
      <?php
      if(isset($_POST['enviar'])){
          $usuario = $_POST["usuario"];
          $nombrecompleto = $_POST["nombrecompleto"];
          $email = $_POST["email"];
          $password = $_POST["password"];

          $campos = array();

          if($usuario == ""){
            array_push($campos, "Debe ingresar un nombre de usuario");
          }

          if($nombrecompleto == ""){
            array_push($campos, "Debe ingresar su nombre con sus apelldios");
          }

          if($email == ""){
            array_push($campos, "Debe ingresar un correo electronico");
          }

          if($password == ""){
            array_push($campos, "Debe ingresar una clave");
          }

          if(count($campos) > 0){
            echo "<div class='error'>";
            for($i = 0; $i < count($campos); $i++){
              echo "<li>".$campos[$i]."</li>";
            }
          
          }else{
            echo "<div class='correcto'> Datos correctos";

            include 'registrar.php';
          }
          echo "</div>";

      }


      ?>
  		<p>Nombre de usuario: <input type = "text" name = "usuario" id="usuario"></p>
  		<p>Nombre y Apellidos: <input type="text" name="nombrecompleto" id="nombrecompleto"></p>
		<p>Correo electronico: <input type="text" name="email" id="email"></p>
  		<p>Contraseña: <input type = "password" name = "password" id="password"></p>
        <input type="submit" name="enviar" value="Enviar" onclick="../js/funciones.js/return ValidarFormularioRegistro();">

   </form>
  </div>
</main>


    <script src="../js/bootstrap.bundle.min.js"></script>

      
  </body>
</html>
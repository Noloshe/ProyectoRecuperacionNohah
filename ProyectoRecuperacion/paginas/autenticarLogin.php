<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>AutenticarLogin - Nohah</title>
</head>
<body>
	<?php
//CONCECTAR CON LA BASE DE DATOS
	 include 'cn.php';

//VARIABLES
	 $usuario=$_POST["usuario"];
     $password=$_POST["password"];
//SESION PARA QUE SE MUESTRE NOMBRE DE USUARIO QUE A INICIADO SESIÓN
     session_start();
     $_SESSION['usuario'] = $usuario;
     
//CONSULTA PARA INICIAR SESIÓN
     $consulta="SELECT * FROM usuarios where nombreusuario='$usuario' and clave=hex(AES_ENCRYPT('$password', 'nohah1'))";
     $resultado=mysqli_query($conexion, $consulta);
     
     $filas=mysqli_num_rows($resultado);

     if($filas>0){
     header("location:home.php");
     	
	}else {
		echo "Error en la autentificacion";
	}
	mysqli_free_result($resultado);
	mysqli_close($conexion);

?>
</body>
</html>
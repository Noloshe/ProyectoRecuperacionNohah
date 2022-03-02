<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Registro - Nohah</title>
</head>
<body>
	<?php
//CONCECTAR CON LA BASE DE DATOS
	include 'cn.php';
//VARIABLES
	$usuario = $_POST["usuario"];
	$nombrecompleto = $_POST["nombrecompleto"];
	$email = $_POST["email"];
	$password = $_POST["password"];

//CONSULTA PARA INSERTAR
	$insertar = "INSERT INTO usuarios(nombreusuario, clave, nombrecompleto, email) VALUES ('$usuario', hex(AES_ENCRYPT('$password', 'nohah1')), '$nombrecompleto', '$email')";
//EJECUCION DE CONSULTA
	$resultado = mysqli_query($conexion, $insertar);
	if (!$resultado) {
		echo 'Error al registrarse';
	}
	 else {
	 	echo 'Usuario registrado exitosamente';
	}
//CERRAMOS CONEXION CON LA BD
	mysqli_close($conexion);
	?>
</body>
<p>Regrese al inicio clickeando en el siguiente enlace: <a href="../paginas/index.html">aqui</a></p>
</html>
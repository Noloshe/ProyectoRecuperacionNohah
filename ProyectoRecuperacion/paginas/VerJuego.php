<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Ver Juego - Nohah</title>

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

</head>
<body>

<?php
//SEGUIMOS CON LA SESSION INCIADA
	session_start();
//CONCECTAR CON LA BASE DE DATOS SI NO ESTA CONECTADA YA
	 include 'cn.php';
     
//CONSULTA PARA VER JUEGO
$sql="SELECT * FROM Juegos";
$resultado=mysqli_query($conexion, $sql);

     while($mostrar=mysqli_fetch_array($resultado)){

?>
<table>

	<tr>
		  <th>Codigo</th>
          <th>Nombre</th>
          <th>Descripción</th>
          <th>Imagen</th>
          <th>Precio</th>
	</tr>

	<tr>
		  <td><?php echo $mostrar['IdJuego'] ?></td>
          <td><?php echo $mostrar['nombre'] ?></td>
          <td><?php echo $mostrar['descripcion'] ?></td>
          <td><?php echo '<img width="100" src="data:image/png;base64,'. base64_encode($mostrar['imagen']).'"/>'; ?></td>
          <td><?php echo $mostrar['precio'] ?></td>
           
	</tr>


</table>

<?php
}
?>
</body>
</html>
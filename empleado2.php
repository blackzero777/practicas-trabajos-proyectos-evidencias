<html>
<head>
 	<title>empleado2.php</title>
 	<center><img src="uam.jpg"></center>
</head>

<body>
 	<h1><div align="center">Lectura de la tabla</div></h1>
	 <br>
 <?php 
		//Conexion con la base de datos
 		$enlace = mysqli_connect ("localhost","root","find your own way"); //conexion a mysql
 		if(!$enlace){
			die("Conexion fallida: " . mysql_error());
		}
		else{
			echo "Conexion exitosa";
		}
 		mysqli_select_db($enlace,"oferta_curso"); //conexion con la bd
 		$resultado=mysqli_query($enlace,"SELECT * FROM empleado" );
 	?>
<br>
<table align="center" border=1>
 <tr>
 	<th>Numero emp.</th>
	 <th>Cargo</th>
 	<th>RFC</th>
         <th>Nombre</th>
	 <th>Apellido</th>
 	<th>Fecha nacimiento</th>
        
 </tr>

<?php 
	//Mostrar los registros

	 while($row=mysqli_fetch_array($resultado,MYSQLI_BOTH))
 	{
 	echo "<tr><td>".$row[0]."</td>"."<td>".$row[1]."</td>"."<td>".$row[2]."</td>"."<td>".$row[3]."</td>"."<td>".$row[4]."</td>"."<td>".$row[5]."</td></tr>";
	 }
 	echo "</table>";
 mysqli_free_result($resultado);
?>
 <br><br>
 <div align="center">
 <a href="insertarEE1.php">Anadir un nuevo registro</a><br>
 <a href="actualizarEE1.php">Actualizar un registro </a><br>
 <a href="borrarEE1.php">Borrar un registro</a></br>
 </div>
</Body>
</html>
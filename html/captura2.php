<!DOCTYPE html>
<html>
<head>
	<title>Enviado</title>
</head>
<body>
	<?php
	$nomb = $_POST["nombre"];
	$cel = $_POST["celular"];
	$email = $_POST["email"];
	$sede = $_POST["sede"];
	$jorn = $_POST["jornada"];
	$asun = $_POST["asunto"];
	$dir = $_POST["dirigido"];
	$com = $_POST["comentario"];
	
// se crea la conexion con el servidor y gestor de BD
$conexion = mysql_connect ("localhost", "u700585909_empresa1", "Alva1129$");
if(!$conexion){     
   die("Error: No se Puede conectar".mysql_error());
}
mysql_select_db("u700585909_proy1",$conexion);

//EJECUCION DE LA SENTENCIA SQL
$sql="INSERT INTO `u700585909_proy1`.`pqr1`(nombre, celular, email, sede, jornada, asunto, dirigido,comentario) 
VALUES ('$nomb', '$cel', '$email', '$sede', '$jorn', '$asun', '$dir', '$com')";
//EJECUTEMOS LA QUERY
mysql_query($sql,$conexion)or die(mysql_error());
?>
<H1><DIV ALIGN="CENTER"> Comentario enviado :)
<br>
<form action="/index.html" method="post">
<p align="center"><input type="submit" value="inicio"></p>
</form>
</DIV></H1>

</BODY>
</HTML>


</body>
</html>
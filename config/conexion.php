<?php

$host="129.151.99.42";

$usuario="admin";

$contraseña="linux";

$base="support";

$conexion= new mysqli($host, $usuario, $contraseña, $base);

if ($conexion -> connect_errno){

	die("Fallo la conexion:(".$conexion -> mysqli_connect_errno().")".$conexion->mysqli_connect_error());

}

?>
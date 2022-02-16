<?php

$host="XXX.XXX.XXX.XXX";

$usuario="XXXX";

$contraseña="XXXX";

$base="support";

$conexion= new mysqli($host, $usuario, $contraseña, $base);

if ($conexion -> connect_errno){

	die("Fallo la conexion:(".$conexion -> mysqli_connect_errno().")".$conexion->mysqli_connect_error());

}

?>

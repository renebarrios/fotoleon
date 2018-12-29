

<?php

$conexion = new mysqli('localhost','root','','marcos');
$consulta = '';


//Funcion que realiza la consulta de la base de datos
function laConsulta()
{
	global $conexion, $consulta;
	$sql = 'SELECT * FROM  pedidos';
	return $conexion -> query($sql);
}

?>
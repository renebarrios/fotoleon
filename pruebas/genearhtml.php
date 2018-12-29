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


$consulta= laConsulta();


						while($solicitud = $consulta -> fetch_assoc())
						{
							
							
							 echo $solicitud['codigo']; 
						     echo $solicitud['modelo'];  
							 echo $solicitud['tamano'];  
							 echo $solicitud['color'];  
							 echo $solicitud['cantidad']; 
							 echo $solicitud['fecha1']; 

							}


						

?>





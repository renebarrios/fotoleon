<?php
	//conectamos Con el servidor
	$conectar=@mysqli_connect('localhost','root','');
	//verificamos la conexion
	if(!$conectar){
		echo"No Se Pudo Conectar Con El Servidor";
	}else{

		$base=mysqli_select_db($conectar,'marcos');
		if(!$base){
			echo"No Se Encontro La Base De Datos";			
		}
	}

	ini_set('date.timezone', 'America/Mexico_City');
    
    $codigo=$_POST['codigo'];

    
	$sql="UPDATE pedidos SET estado='confirmado' WHERE codigo='$codigo' ";

	//ejecutamos la sentencia de sql
	$ejecutar=mysqli_query($conectar,$sql);

      
	//verificamos la ejecucion
	if(!$ejecutar)
	{
		echo"Hubo Algun Error";
	}
	else
	{
		echo"Datos Guardados Correctamente<br><a href='crear2.html'>Volver</a>";
		echo $codigo;
	}
?>
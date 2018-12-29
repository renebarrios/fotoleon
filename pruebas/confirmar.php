<?php 

	$conexion=mysqli_connect('renebarrioscompany.ddns.net','rene','rotbase56','marcos');

 ?>


<!DOCTYPE html>
<html>
<head>
	<title>mostrar datos</title>
	<meta charset="utf-8" lang="es">
	<link rel="stylesheet" type="text/css" href="main3.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300|Roboto+Condensed|Roboto:300,300i" rel="stylesheet">

</head>
<body>

<br>

	<table cellpadding="0" cellspacing="0">
		<tr class="titulo">
			<td>No.° de Pedido</td>
			<td>Modelo</td>
			<td>Tamaño</td>
			<td>Color</td>
			<td>Cantidad</td>
			<td>Fecha de orden</td>	
			<td>Fecha de entrega</td>
			<td>Estado</td>	
			


		</tr>

		<?php 
		$sql="SELECT * from pedidos where estado='sin confirmar' order by codigo desc";
		$result=mysqli_query($conexion,$sql);
		$valor=0;
		$valor2="a";
		while($mostrar=mysqli_fetch_array($result)){


			$valor3=$mostrar['codigo'];

			if ($valor != $valor3) {
				$activar="si";	
				if ($valor2=="a") {

				$valor2="b";	
						
				}

				else{
					$valor2="a";
						
				}
				
						
			}

			if ($valor == $valor3) {
				$activar="no";	
				
				if ($valor2=="a") {

				$valor2="a";		
						

				}

				else{
					$valor2="b";
					
				}
				
						
			}

		



			

 			$valor=$mostrar['codigo'];
    

			
		 ?>
        



		<tr>
			<td class="<?php  echo $valor2; ?>"><?php echo $mostrar['codigo'] ?></td>
			<td class="<?php echo $valor2; ?>" id="modelo"><?php echo $mostrar['modelo']; ?></td>
			<td class="<?php echo $valor2; ?>" id="tamano"><?php echo $mostrar['tamano']; ?></td>
			<td class="<?php echo $valor2; ?>" id="color"><?php echo $mostrar['color']; ?></td>
			<td class="<?php echo $valor2; ?>" id="cantidad">  <?php echo $mostrar['cantidad']; ?> </td>
			<td class="<?php echo $valor2; ?>"><?php echo $mostrar['fecha1']; ?></td>
			<td class="<?php echo $valor2; ?>"><?php echo $mostrar['fecha2']; ?></td>
	<form action="confirmar2.php" method="POST"> 		<td class="<?php echo $valor2; ?>" id="estado"> <?php 


   


			if ($activar=="si") {
			


			echo "<button>", $mostrar['estado'] ,"</button> <input style='display:none' name='codigo' value='", $mostrar['codigo'] ," ' " ; 
						}


			?> </td>
</form>

		</tr>
	<?php 
	
	}
	
	 ?>

	</table>

<?php 
	function confirmar()
	{

	}


?>


</body>
</html>
<?php
	include("conexion.php");
	//Construyo el query ´para traer los registros en select del html
	$consulta = "SELECT email FROM contactos ORDER BY email";
	//ejecutar el query
	$ejecutar_consulta = $conexion->query($consulta);
	//con un while recorro todos los registros generados de la consulta anterior
	//construyp las opciones del select de forma dinámica con los registros de la consulta fetch_assoc permite recorrer todo lo que traiga ejecutar_consulta
	while($registro = $ejecutar_consulta->fetch_assoc()){
		echo "<option value='".utf8_encode($registro["email"])."'";
		if($_GET["contacto_slc"]==$registro["email"])
		{
			echo " selected" ;
		}
		
		echo ">".utf8_encode($registro["email"])."</option>";
	}

	//$conexion->close();
?>
<?php
//Pasos para conectarme en mysql con PHP
//1) Conectarme al BD, mysql_connect mysql ncesita 3 datos:
	//1) Servidor
	//2) Usuario de la BD
	//3) Password del usuario de la BD
	//or die() matar la ejecucion del programa
$conexion = mysql_connect("localhost","root","")or die(" No se pudo conectar con el servidor de BD");
echo "Estoy conectado con la BD MySQL <br/>";
//2) Selecionar la BD con la que vamos a trabajar
mysql_select_db("mis_contactos") or die("No se pudo seleccionar la BD 'mis_contactos'");
echo "BD seleccionada:'mis contactos'<br/>";

//3) Crear una consulta SQL
$consulta = "SELECT * FROM pais";

//4) Ejecutar la consulta SQL
//mysql_query necita dos parametros 
	//1) Consulta
	//2) Conexion a la BD
$ejecutar_consulta = mysql_query($consulta,$conexion) or die(" No se pudo realizar la consulta en la BD :(  ");

echo "Se ejecut&oacute; la consulta<br/>";

//5)Mostrar el resultado de ejecutar la consulta, dentro de un ciclo y en una variable voy a ingresar la función MYSQL  FETCH ARRAY
while($registro = mysql_fetch_array($ejecutar_consulta)){
	echo $registro["id_pais"]." - ".$registro["pais"]."<br/>";
	//Array asociativo
}
//6) cerrar la conecion
mysql_close($conexion) or die("Ocurrio un error al cerrar la conexi&oacute;n a la BD");
echo "Conexi&oacute;n a la BD fue cerrada<br/>"; 
?>


<?php
$conexion = mysql_connect("localhost","root","") or die("No se pudo conectar con el servidor de la BD");

echo "Se conect&oactue; al servidor de la base de datos <br/>";


mysql_select_db("mis_contactos") or die("No se pudo conectar con la BD");
echo "Se conect&oactue; a la BD <b>'mis_contactos'</b> <br/>";

echo "<h1>las 4 operaciones b&aacute;sicos de la BD </h1>";
echo "<h2>Inserci&oacute; de datos</h2>";
//INSERT INTO nombre_tabla (campos_tabla) VALUES (valores_campos)
$consulta= "INSERT INTO contactos(email,nombre,sexo,nacimiento,telefono,pais,imagen) VALUES ('sarita.roman@gmail.com','sarita','f','1991-07-29','9991666777','Perú','')";
$ejecutar_consulta=mysql_query($consulta,$conexion); 
echo "Se realizo la operaci&oactue; satisfactoriamente <br/>";
echo "<h2>2)ELIMINACI&Oacute;N DE DATOS</H2>";
//DELETE FROM nombre_tabla WHERE campo = valor

$consulta="DELETE FROM contactos WHERE email='sarita@gmail.com'";

$ejecutar_consulta=mysql_query($consulta,$conexion);
echo "Datos eliminados =( ";
echo "<h2>3)MODIFICACI&Oacute;N DE DATOS</H2>";
//UPDATE nombre_tabla SET nombre_campo = valor_campo, otro campo=otro valor WHERE campo = valor

$consulta = "UPDATE contactos SET email = 'ingeniera@gmail.com', nombre = 'Sarita Román', imagen = 'sarita.jpg' WHERE email = 'sarita.roman@gmail.com'";

$ejecutar_consulta = mysql_query($consulta,$conexion);
echo "Datos modificados  =) <br/>";
echo "<h2>4) CONSULTA(b&uacute;squeda) DE DATOS </h2>";
//SELECT * FROM nombre_tabla WHERE campo = valor;
$consulta = "SELECT * FROM contactos";
// WHERE email='ingeniera@gmail.com'";
$ejecutar_consulta = mysql_query($consulta,$conexion);
while($registro=mysql_fetch_array($ejecutar_consulta)){
	echo $registro["email"]."---";
	echo $registro["nombre"]."---";
	echo $registro["sexo"]."---";
	echo $registro["nacimiento"]."---";
	echo $registro["telefono"]."---";
	echo $registro["pais"]."---";
	echo $registro["imagen"]."---";
	echo "<br/><br/>";
}
echo "<h2>5) CONSULTA(b&uacute;squeda) DE DATOS </h2>";
//SELECT * FROM nombre_tabla WHERE campo = valor;
$consulta = "SELECT * FROM contactos WHERE email='ingeniera@gmail.com'";
$ejecutar_consulta = mysql_query($consulta,$conexion);
while($registro=mysql_fetch_array($ejecutar_consulta)){
	echo $registro["email"]."---";
	echo $registro["nombre"]."---";
	echo $registro["sexo"]."---";
	echo $registro["nacimiento"]."---";
	echo $registro["telefono"]."---";
	echo $registro["pais"]."---";
	echo $registro["imagen"]."---";
	echo "<br/><br/>";
}
echo "<h2>6) CONSULTA(b&uacute;squeda) DE DATOS de nombre o email</h2>";
//SELECT * FROM nombre_tabla WHERE campo = valor;
$consulta = "SELECT * FROM contactos WHERE email='sarita.roman@gmail.com' OR nombre='Sarita Román' ";
$ejecutar_consulta = mysql_query($consulta,$conexion);
while($registro=mysql_fetch_array($ejecutar_consulta)){
	echo $registro["email"]."---";
	echo $registro["nombre"]."---";
	echo $registro["sexo"]."---";
	echo $registro["nacimiento"]."---";
	echo $registro["telefono"]."---";
	echo $registro["pais"]."---";
	echo $registro["imagen"]."---";
	echo "<br/><br/>";
}
echo "<h2>7) CONSULTA(b&uacute;squeda) DE DATOS de nombre y email</h2>";
//SELECT * FROM nombre_tabla WHERE campo = valor;
$consulta = "SELECT * FROM contactos WHERE sexo='f' AND nombre='sarita' ";
$ejecutar_consulta = mysql_query($consulta,$conexion);
while($registro=mysql_fetch_array($ejecutar_consulta)){
	echo $registro["email"]."---";
	echo $registro["nombre"]."---";
	echo $registro["sexo"]."---";
	echo $registro["nacimiento"]."---";
	echo $registro["telefono"]."---";
	echo $registro["pais"]."---";
	echo $registro["imagen"]."---";
	echo "<br/><br/>";
}
mysql_close($conexion);
echo "Conexi&oacute;n cerrada<br/>"; 
?>
<?php
	error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
	$op = $_GET["op"];
	switch($op){
		case "alta":
			$contenido= "php/alta-contacto.php";
			$titulo =  "Alta de contacto";
			break;
		case "baja":
			$contenido= "php/baja-contacto.php";
			$titulo =  "Baja de contacto";
			break;
		case "cambios":
			$contenido= "php/cambios-contacto.php";
			$titulo =  "Cambios de contacto";
			break;
		case "consultas":
			$contenido= "php/consultas-contacto.php";
			$titulo =  "Consultas de contacto";
				break;
		default:
			$contenido = "php/home.php";
			$titulo= "Mis Contactos v1";
			break;

	}
	
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title><?php echo $titulo;?></?php></title>
	<link rel="stylesheet" href="css/mis_contactos.css"/>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
	<script>
		!window.jQuery && document.write("<script src='js/jquery.min.js'><\/script>");
	</script>
	
	<script src="js/mis_contactos.js"></script>
	
</head>
<body>
	<section id="contenido">
		<nav>
			<ul>
				<li><a class="cambio" href="index.php">Home</a></li>
				<li><a class="cambio" href="?op=alta">Alta de Contacto</a></li>
				<li><a class="cambio" href="?op=baja">Baja de Contacto</a></li>
				<li><a class="cambio" href="?op=cambios">Cambios de Contacto</a></li>
				<li><a class="cambio" href="?op=consultas">Consultas de Contacto</a></li>
			</ul>
		</nav>
		<section id="principal">
			<?php include($contenido); ?>
		
		
		</section>
	</section>
	
</body>
</html>

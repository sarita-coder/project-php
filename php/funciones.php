<?php
// El parametro de $extension determina que tipo de imagen no se borrará por ejemplo si es jpg significa que la image con extension .jpg se queda en el servidor y su existen imagenes con el mismo nombre pero con duplicadas con distinta extensiones para cada perfil la funcion file_exists evalua si un archivo existe y la funcion unlink borra un archivo del servidor
	function borrar_imagenes($ruta,$extension){
		switch($extension){
			case ".jpg":
				if(file_exists($ruta.".png"))
					unlink($ruta.".png");
				if(file_exists($ruta.".gif"))
					unlink($ruta.".gif");
				break;
				
			case ".png":
				if(file_exists($ruta.".jpg"))
					unlink($ruta.".jpg");
				if(file_exists($ruta.".gif"))
					unlink($ruta.".gif");
				break;
				
			case ".gif":
				if(file_exists($ruta.".png"))
					unlink($ruta.".png");
				if(file_exists($ruta.".jpg"))
					unlink($ruta.".jpg");
				break;

		}
	}


	//funciones para subir la imagen
	function subir_imagen($tipo,$imagen,$email){
		//strstr($cadena1, $cadena2) sirve para evaluar si en la primer cadena de texto existe la segundam cadena de tetxo
		//si dentro del tipo de archivo se encuentra la palabra image significa que el archivo es una imagen
		if(strstr($tipo,"image")){
			// el archivo es una imagem
			if(strstr($tipo,"jpeg"))
				$extension = ".jpg";
			
			else if(strstr($tipo,"gif"))
				$extension = ".gif";
			
			else if(strstr($tipo,"png"))
				$extension = ".png";
			
			//para saber si la imagen tiene el ancho correcto que es de 420px
			
			$tam_img = getimagesize($imagen);
			$ancho_img = $tam_img[0];
			$alto_img = $tam_img[1];
			
			//maximo ancho de imagen
			$ancho_img_deseado = 420;
			//si la imagen es mayor en su ancho que 420px, reajusto su tamaño
			if($ancho_img>$ancho_img_deseado){
				// reajustamos
				
				//Por una regla de 3 obtengo el alto de la imagen de manera proporcional al ancho nuevo que sera de 420
				$nuevo_ancho_img = $ancho_img_deseado;
				$nuevo_alto_img = ($alto_img/$ancho_img)*$nuevo_ancho_img;
				
				//creo una imagen de color real con las buevas deimensiones
				$img_reajustada = imagecreatetruecolor($nuevo_ancho_img,$nuevo_alto_img);
				// creo una imagen basada en la origial, dependiendo de su extension de su extension es el tipo que creare
				switch($extension){
					case ".jpg":
					$img_original = imagecreatefromjpeg($imagen);
					//Reajusto la imagen nueva con respecto a la original 
					imagecopyresampled($img_reajustada,$img_original,0,0,0,0,$nuevo_ancho_img,$nuevo_alto_img,$ancho_img,$alto_img);
					
					//Guardo la imagen reescalada en el servidor
					$nombre_img_ext = "../img/fotos/".$email.$extension;
					$nombre_img = "../img/fotos/".$email;
					imagejpeg($img_reajustada,$nombre_img_ext,100);
					///Ejecuto la funcion para borrar posibles imagenes dobles para el perfil
					borrar_imagenes($nombre_img,".jpg");
					break;
					
					case ".gif":
					$img_original = imagecreatefromgif($imagen);
					//Reajusto la imagen nueva con respecto a la original 
					imagecopyresampled($img_reajustada,$img_original,0,0,0,0,$nuevo_ancho_img,$nuevo_alto_img,$ancho_img,$alto_img);
					
					//Guardo la imagen reescalada en el servidor
					$nombre_img_ext = "../img/fotos/".$email.$extension;
					$nombre_img = "../img/fotos/".$email;
					imagegif($img_reajustada,$nombre_img_ext,100);
					///Ejecuto la funcion para borrar posibles imagenes dobles para el perfil
					borrar_imagenes($nombre_img,".gif");
					break;
					
					case ".png":
					$img_original = imagecreatefrompng($imagen);
					//Reajusto la imagen nueva con respecto a la original 
					imagecopyresampled($img_reajustada,$img_original,0,0,0,0,$nuevo_ancho_img,$nuevo_alto_img,$ancho_img,$alto_img);
					
					//Guardo la imagen reescalada en el servidor
					$nombre_img_ext = "../img/fotos/".$email.$extension;
					$nombre_img = "../img/fotos/".$email;
					imagepng($img_reajustada,$nombre_img_ext);
					///Ejecuto la funcion para borrar posibles imagenes dobles para el perfil
					borrar_imagenes($nombre_img,".png");
					break;
					
				}
				
			}else{
				// no se reajusta y se sube
				$destino= "../img/fotos/".$email.$extension;
				//sube la fotos/
				move_uploaded_file($imagen,$destino) or die("No se pudo subir la imagen al servidor:(");
				
				//Ejecuto la funcion para borrar posible imagene dobles para el perfil
				$nombre_img = "../img/fotos/".$email;
				
				borrar_imagenes($nombre_img,$extension);

			}
			//Asigno el nombre de la foto que se guardará en la BD como cadena de texto
			
			$imagen = $email.$extension;
			return $imagen;

		}else{
			return false;
		}
	}
?>
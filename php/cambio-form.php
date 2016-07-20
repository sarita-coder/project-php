<form id="cambio-form" >
	<div>
		<label for="email">Email:</label>
		<input type="email" id="email" name="email_txt" class="cambio" placeholder="Escribe tu email" value="<?php echo $registro_contacto["email"]; ?>" disabled required />
		<input type="hidden" name="email_hdn"  value="<?php echo $registro_contacto["email"]; ?>">
	</div>
	<div>
		<label for="nombre">Nombre:</label>
		<input type="text" id="nombre" name="nombre_txt" class="cambio" placeholder="Escribe tu nombre" value="<?php echo $registro_contacto["nombre"]; ?>" required />
	</div>
	<div>
		<label for="m">Sexo:</label>
		<input type="radio" id="m"  name="sexo_rdo" title="Tu sexo" value="M"<?php if($registro_contacto["sexo"]=="M"){ echo "checked"; } ?> required />
		&nbsp;
		<label form="m" >Masculino</label>&nbsp;&nbsp;&nbsp;
		<input type="radio" id="f" name="sexo_rdo" title="Tu sexo" value="F" <?php if($registro_contacto["sexo"]=="F"){ echo "checked"; } ?> required />&nbsp;
		<label form="f" >Femenino</label>
	</div>
	<div>
		<label for="nacimiento">Fecha de nacimiento:</label>
		<input type="date" id="nacimiento" name="nacimiento_txt" class="cambio" placeholder="Escribe tu cumpleaños" title="Tu cumple" <input type="hidden" name="email_hdn"  value="<?php echo $registro_contacto["nacimiento"]; ?>" required />
	</div>
	<div>
		<label for="telefono">Tel&eacute;fono:</label>
		<input type="number" id="telefono" name="telefono_txt" class="cambio" placeholder="Escribe tu telefono" title="Tu Teléfono" <input type="hidden" name="email_hdn"  value="<?php echo $registro_contacto["telefono"]; ?>" required />
	</div>
	<div>
		<label for="pais">Pa&iacute;s:</label>
		<select id="pais" class="cambio" name="pais_slc" required>
			<option value="">Elige tu pa&iacute;s</option>
			<?php include("select-pais.php"); ?>
		</select>
	<div>
		<label for="foto">Foto:</label>
		<div class="adjuntar-archivo cambio">
			<input type="file" id="foto" name="foto_fls" title="Sube tu foto" />
			<input type="hidden" name="foto_hdn"  value="<?php echo $registro_contacto["imagen"]; ?>">
		</div>
		<div>
			<img src="<?php echo "img/fotos/".$registro_contacto["imagen"]; ?>" alt="">
		</div>
	</div>
	<div>
		<input type="submit" id="enviar-alta" class="cambio" name="enviar_btn" value="cambiar" />
	</div>
</form>
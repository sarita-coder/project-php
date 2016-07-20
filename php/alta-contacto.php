<form id="alta-contacto" name="alta_frm" action="php/agregar-contacto.php" method="post" enctype="multipart/form-data">

	<fieldset>
		<lengend>Alta de Contacto</lengend>
		<div>
			<label for="email">Email:</label>
			<input type="email" id="email" name="email_txt" class="cambio" placeholder="Escribe tu email" required />
		</div>
		<div>
			<label for="nombre">Nombre:</label>
			<input type="text" id="nombre" name="nombre_txt" class="cambio" placeholder="Escribe tu nombre" required />
		</div>
		<div>
			<label for="m">Sexo:</label>
			<input type="radio" id="m"  name="sexo_rdo" title="Tu sexo" value="M" required />
			&nbsp;
			<label form="m" >Masculino</label>
			<input type="radio" id="f" name="sexo_rdo" title="Tu sexo" value="F" required />&nbsp;
			<label form="f" >Femenino</label>
		</div>
		<div>
			<label for="nacimiento">Fecha de nacimiento:</label>
			<input type="date" id="nacimiento" name="nacimiento_txt" class="cambio" placeholder="Escribe tu cumpleaños" title="Tu cumple" required />
		</div>
		<div>
			<label for="telefono">Tel&eacute;fono:</label>
			<input type="number" id="telefono" name="telefono_txt" class="cambio" placeholder="Escribe tu telefono" title="Tu Teléfono" required />
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
			</div>
		</div>
		<div>
			<input type="submit" id="enviar-alta" class="cambio" name="enviar_btn" value="agregar" />
		</div>
		<?php include("mensajes.php"); ?>
	</fieldset>


</form>

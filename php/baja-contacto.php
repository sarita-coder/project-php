<form id="baja-contacto" name="baja_frm" action="php/eliminar-contacto.php" method="post" enctype="application/x-www-form-urlencoded">
	<fieldset>
		<legend>baja de contactos</legend>
		<div>
			<label for="email">Email:</label>
			<select name="email_slc" id="email" class="cambio">
				<option value="">---</option>
				<?php
					include("select-email.php")
				?>
			</select>
		</div>
		<div>
			<input type="submit" id="enviar-baja" class="cambio" name="enviar_btn" value="eliminar"/>
		</div>
		<?php include("mensajes.php"); ?>
	</fieldset>
</form>
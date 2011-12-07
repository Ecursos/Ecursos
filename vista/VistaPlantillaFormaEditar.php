<form action="indexCrudUsuarios.php?controlador=editar" method="post">
<input type="hidden" name="id" value="<?php echo @$datos[id]; ?>" />
	  <p>EDITANDO REGISTRO</p>
	  <label>Clave</label>
		  <input type="text" name="clave" value="<?php echo @$datos[clave] ?>" />
	    <br />
        <label>Nombre</label>
        <input name="nombre" type="text" id="nombre" value="<?php echo @$datos[nombres] ?>"  />
        <br />
<label>Apellido</label>
<input name="apellido" type="text" id="apellido"  value="<?php echo @$datos[apellidos] ?>"  />
<br />
<label>Rol</label>
<input name="rol" type="text" id="rol" value="<?php echo @$datos[rol] ?>"  />
<br />
<label>Correo</label>
<input name="email" type="text" value="<?php echo @$datos[correo] ?>"  />
<br>
        <input name="Aceptar" type="submit" id="Aceptar" value="Aceptar" />
	    <input name="Cancelar" type="submit" id="Cancelar" value="Cancelar" />
	</form>
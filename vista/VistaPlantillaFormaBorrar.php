<form action="indexCrudUsuarios.php?controlador=borrar" method="post">
		  <input type="hidden" value="<?php echo @$datos['id']; ?>" name="id" />
	  <p>BORRAR REGISTRO</p>
      <p><?php echo @$datos['clave'] . " " . @$datos['nombres'] . " " . @$datos['apellidos']; ?></p>
        &iquest;Esta seguro de aceptar el borrado de este registro?<br>
        <input name="Aceptar" type="submit" id="Aceptar" value="Aceptar" />
	    <input name="Cancelar" type="submit" id="Cancelar" value="Cancelar" />
	</form>

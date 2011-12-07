<em>[VistaPlantillaFormaAlta.php]</em><hr>
	<form action="indexCrudUsuarios.php?controlador=nuevo" method="post">
	
	  <p>NUEVO REGISTRO <br>
      <label>Clave</label>
    <input type="text" id="claveRegistro" name="claveRegistro" />
	<label>Nombre</label>
    <input type="text" id="nombreRegistro" name="nombreRegistro" />
    <br>
    <label>Apellido</label>
    <input type="text" id="apellidoRegistro" name="apellidoRegistro" />
    <br>
    <label>Correo</label>
    <input type="text" id="correoRegistro" name="correoRegistro" />
    <br>
    <label>Rol</label>
    <select id="rolRegistro" name="rolRegistro">
        <option value="1">Administrador</option>
        <option value="2">Maestro</option>
        <option value="3">Alumno</option>
        </select>
    
<br>
        <input name="Aceptar" type="submit" id="Aceptar" value="Aceptar" />
        <input name="Cancelar" type="submit" id="Cancelar" value="Cancelar" />
      </p>
</form>

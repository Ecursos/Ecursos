<a href="index.php?controlador=nuevo"><?php echo @$msg; ?><br>
</a>
<form action="indexCrudUsuarios.php">
<table border="1">
  <tr>
    <td>Buscar por Nombre:</td>
    <td><input name="nombrebuscar" type="text" value="<?php echo @$_REQUEST[nombrebuscar] ?>"></td>
    <td><input name="controlador" type="submit"  value="Buscar"></td>
  </tr>
</table>
</form>
<table border="1">
    <tr>
      <td><strong>Clave</strong></td>
      <td><strong>Nombres</strong></td>
      <td><strong>Apellidos</strong></td>
      <td><strong>Correo</strong></td>
      <td><strong>Rol</strong></td>
      <td><strong>Fecha</strong></td>
      <td><strong>Estado</strong></td>
      <td colspan="2"><strong>Operaciones</strong></td>
    </tr>
    <?php
    if (@$datos)
    foreach ($datos as $key => $row) //Associative array $key = table, $row = row of $key
    {
        switch($row['rol'])
        {
            case 1:
            $rol = "Administrador";
            break;
            case 2:
            $rol = "Maestro";
            break;
            case 3:
            $rol = "Alumno";
            break;
        }
        
        switch($row['estado'])
        {
            case 1:
            $estado = "<img src='./public/img/activo.png'>";
            break;
            case 2:
            $estado = "<img src='./public/img/noactivo.png'>";
            break;
        }
    ?>
    <tr>
      <td align="left"><?php echo $row['clave'] ?></td>
      <td align="left"><?php echo $row['nombres'] ?></td>
        <td align="left"><?php echo $row['apellidos'] ?></td>
      <td align="left"><?php echo $row['correo'] ?></td>
      <td align="left"><?php echo $rol ?> </td>
      <td align="left"><?php echo $row['fecha'] ?> </td>
      <td align="left"><?php echo $estado ?> </td>
      <td align="left">
      	<a href="indexCrudUsuarios.php?controlador=borrar&id=<?php echo $row['id'] ?>">Borrar</a>      </td>
      <td align="left">
      	<a href="indexCrudUsuarios.php?controlador=editar&id=<?php echo $row['id'] ?>">Editar</a>      </td>
    </tr>
    <?php } //end foreach loop
	?>
</table>
<p><a href="indexCrudUsuarios.php?controlador=nuevo">Nuevo Registro</a></p>
<p><a href="index.php">Dashboard Administrador</a></p>
</html>


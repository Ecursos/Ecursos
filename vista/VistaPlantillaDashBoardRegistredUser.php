<form id="form1" name="form1" method="post" action="">
  <table width="100%" border="1" align="center">
    <tr>
      <td width="33%" align="center">Bienvenido [<strong><?php echo $_SESSION["userRow"]["nombres"] ?></strong>] </td>
      <td width="47%" align="center">Usuario Alumno</td>
      <td width="20%" align="center"><a href="index.php?controlador=logout">Logout</a></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>MENU DE ALUMNO </td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><a href="CrudUsuarios.php">CRUD Usuarios </a></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </table>
</form>

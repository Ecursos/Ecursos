<?php

error_reporting(E_ALL);

/**
 * Clase que representa el modelo de datos
 *
 * @author Ivan R. Chenoweth
 * @since 2011
 * @version 1
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/**
 * Clase que se encarga del control del acceso a la persistencia de los datos 
 * Centraliza la conexiones en los modelos
 *
 * @author Ivan R. Chenoweth
 * @since 2011
 * @version 1
 */
require_once($base_dir . '/modelo/class.Conexion.php');

/* user defined includes */
// section 127-0-0-1--2bc61e:12e6b7c56db:-8000:0000000000000E2D-includes begin
// section 127-0-0-1--2bc61e:12e6b7c56db:-8000:0000000000000E2D-includes end

/* user defined constants */
// section 127-0-0-1--2bc61e:12e6b7c56db:-8000:0000000000000E2D-constants begin
// section 127-0-0-1--2bc61e:12e6b7c56db:-8000:0000000000000E2D-constants end

/**
 * Clase que representa el modelo de datos
 *
 * @access public
 * @author Ivan R. Chenoweth
 * @since 2011
 * @version 1
 */
class ModeloUsuario
    extends Conexion
{
    // --- ASSOCIATIONS ---


    // --- ATTRIBUTES ---

    // --- OPERATIONS ---

    /**
     * Retorna un arreglo bidimencional:
     * con los datos de cada campo de cada 
     * registro
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return mixed
     */
    public function getAllRows()
    {
        // section 127-0-0-1--2bc61e:12e6b7c56db:-8000:0000000000000E38 begin
       	$sql = "SELECT * FROM usuarios";		
		return $this->ejecutarQuery($sql);
        // section 127-0-0-1--2bc61e:12e6b7c56db:-8000:0000000000000E38 end
    }

    /**
     * Agrega un nuebo registro dado los datos
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  datos
     * @return mixed
     */
    public function insertRow($datos)
    {
        // section 127-0-0-1--2bc61e:12e6b7c56db:-8000:0000000000000E3C begin
		$sql = "INSERT INTO usuarios (
			clave,
			nombres,
			apellidos,
			correo,
			rol,
            fecha,
            estado
			) VALUES (
			'".@$datos['claveRegistro']."',
			'".@$datos['nombreRegistro']."',
			'".@$datos['apellidoRegistro']."',
			'".@$datos['correoRegistro']."',						
			'".@$datos['rolRegistro']."',
            '".date('Y/m/d')."',
            '1'			
			)";
		$this->ejecutarQuery($sql);
		return mysql_insert_id();    	
        // section 127-0-0-1--2bc61e:12e6b7c56db:-8000:0000000000000E3C end
    }

    /**
     * Actualiza registro dado los datos del registro
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  datos
     * @return mixed
     */
    public function updateRow($datos)
    {
        // section 127-0-0-1--2bc61e:12e6b7c56db:-8000:0000000000000E3E begin
		$sql= "
			UPDATE usuarios SET 
				nombres = '".@$datos[nombre]."',
				apellidos = '".@$datos[apellido]."',
				clave = '".@$datos[clave]."',				
				rol = '".@$datos[rol]."',				
				correo = '".@$datos[email]."'
				WHERE id = '".@$datos[id]."'
		";
		$this->ejecutarQuery($sql);        
        // section 127-0-0-1--2bc61e:12e6b7c56db:-8000:0000000000000E3E end
    }

    /**
     * Elimina un registro por el ID
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  id
     * @return mixed
     */
    public function deleteRow($id)
    {
        // section 127-0-0-1--2bc61e:12e6b7c56db:-8000:0000000000000E40 begin
        $sql= "DELETE FROM usuarios WHERE id = $id";
		$this->ejecutarQuery($sql);
    	
        // section 127-0-0-1--2bc61e:12e6b7c56db:-8000:0000000000000E40 end
    }

    /**
     * Devuelve el registro dado el usuario y password
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  user
     * @param  pass
     */
    public function getRowByClave($clave)
    {
        // section -64--88-0-100--b2dec8:13357253886:-8000:0000000000001838 begin
       $sql = "SELECT * FROM usuarios WHERE clave='" . $clave . "' LIMIT 1";
       $row = $this->ejecutarQuery($sql);
		return $row[0];
        // section -64--88-0-100--b2dec8:13357253886:-8000:0000000000001838 end
    }

    /**
     * Devuelve un registro dado el id
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  id
     */
    public function searchById($id)
    {
        // section 10-25-2--51--17cf8bb6:1335becf9e2:-8000:00000000000010EC begin
        $sql = "SELECT * FROM usuarios WHERE id = '$id'";
		$row0 = $this->ejecutarQuery($sql);
		return $row0[0];
    	
        // section 10-25-2--51--17cf8bb6:1335becf9e2:-8000:00000000000010EC end
    }

    /**
     * Devuelve un registro dado el nombre
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  name
     */
    public function getRowByName($name)
    {
        // section -64--88-0-100-3e81fb1a:13360a62803:-8000:000000000000136E begin
        $sql = "SELECT * FROM usuarios WHERE nombre LIKE '%".$name."%'";
		return $this->ejecutarQuery($sql);
    	
        // section -64--88-0-100-3e81fb1a:13360a62803:-8000:000000000000136E end
    }

} /* end of class ModeloUsuario */

?>
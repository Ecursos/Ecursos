<?php

error_reporting(E_ALL);

/**
 * Clase que se encarga del control del acceso a la persistencia de los datos 
 * Centraliza la conexiones en los modelos
 *
 * @author Ivan R. Chenoweth
 * @since 2011
 * @version 1
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/* user defined includes */
// section 127-0-0-1--2bc61e:12e6b7c56db:-8000:0000000000000E0E-includes begin
// section 127-0-0-1--2bc61e:12e6b7c56db:-8000:0000000000000E0E-includes end

/* user defined constants */
// section 127-0-0-1--2bc61e:12e6b7c56db:-8000:0000000000000E0E-constants begin
// section 127-0-0-1--2bc61e:12e6b7c56db:-8000:0000000000000E0E-constants end

/**
 * Clase que se encarga del control del acceso a la persistencia de los datos 
 * Centraliza la conexiones en los modelos
 *
 * @access public
 * @author Ivan R. Chenoweth
 * @since 2011
 * @version 1
 */
class Conexion
{
    // --- ASSOCIATIONS ---


    // --- ATTRIBUTES ---

    /**
     * Host/IP de MySQL
     *
     * @access protected
     * @var String
     */
    protected $host = null;

    /**
     * usuario del servidor de MySQL
     *
     * @access protected
     * @var String
     */
    protected $user = null;

    /**
     * Clave/Password de acceso al servidor MySQL
     *
     * @access protected
     * @var String
     */
    protected $pass = null;

    /**
     * instancia general de conexión para los métodos
     *
     * @access protected
     * @var String
     */
    protected $con = null;

    // --- OPERATIONS ---

    /**
     * Realiza una conexion con SQL, y muestra errores al tener problemas
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return mixed
     */
    public function conexion()
    {
        // section 127-0-0-1--2bc61e:12e6b7c56db:-8000:0000000000000E1B begin
		$this->host = "localhost";
		$this->user = "root";
		$this->pass = "123";
		$this->con = mysql_connect($this->host,$this->user,$this->pass);
		mysql_select_db("e_learning", $this->con);
		if (!$this->con){
			die('Error: No se pudo conectar al servidor: ' . mysql_error());
		}
        // section 127-0-0-1--2bc61e:12e6b7c56db:-8000:0000000000000E1B end
    }

    /**
     * Ejecuta un query y retorna un arreglo con los registros de resultado
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  sql
     * @return mixed
     */
    public function EjecutarQuery($sql)
    {
        // section 127-0-0-1--2bc61e:12e6b7c56db:-8000:0000000000000E1D begin
        $arr = null;
		$res =  mysql_query($sql); 
		if (!$res) {
			die('Invalid query: ['.$sql.']'. mysql_error());							
		}	
	    while ($row = @mysql_fetch_assoc($res)) {
			$arr[]=$row;
		}
		// var_dump($arr);
		return $arr;
        // section 127-0-0-1--2bc61e:12e6b7c56db:-8000:0000000000000E1D end
    }

} /* end of class Conexion */

?>
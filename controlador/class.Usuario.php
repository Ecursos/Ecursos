<?php

error_reporting(E_ALL);

/**
 * Representa la informaciony control de negocios perteneciente a usuarios del
 * de logueo
 *
 * @author firstname and lastname of author, <author@example.org>
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/**
 * Clase que representa el modelo de datos
 *
 * @author Ivan R. Chenoweth
 * @since 2011
 * @version 1
 */
require_once($base_dir . '/modelo/class.ModeloUsuario.php');

/* user defined includes */
// section 127-0-0-1-75f26e5:13347720b44:-8000:000000000000109A-includes begin
// section 127-0-0-1-75f26e5:13347720b44:-8000:000000000000109A-includes end

/* user defined constants */
// section 127-0-0-1-75f26e5:13347720b44:-8000:000000000000109A-constants begin
// section 127-0-0-1-75f26e5:13347720b44:-8000:000000000000109A-constants end

/**
 * Representa la informaciony control de negocios perteneciente a usuarios del
 * de logueo
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class Usuario
{
    // --- ASSOCIATIONS ---


    // --- ATTRIBUTES ---

    /**
     * Short description of attribute row
     *
     * @access private
     * @var Array
     */
    private $row  = null;

    /**
     * Short description of attribute ModeloUsuario
     *
     * @access private
     * @var String
     */
    private $ModeloUsuario = null;

    // --- OPERATIONS ---

    /**
     * Retorna true si el usuario es administrador, de lo contrario retorna
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function isAdmin()
    {
        // section -64--88-0-101-5d4cf1ff:1334bbb4a38:-8000:00000000000010C8 begin
        if (@$_SESSION["userRow"]["rol"] == "1") { 
        	return true;
        }
        else {
        	return false;
        }        
        // section -64--88-0-101-5d4cf1ff:1334bbb4a38:-8000:00000000000010C8 end
    }

    /**
     * Realiza un logueo con los parametros de usuario y password
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  user
     * @param  pass
     */
    public function login($clave)
    {
        // section -64--88-0-101-5d4cf1ff:1334bbb4a38:-8000:00000000000010CA begin
        if (!@$_SESSION['userRow']) {
    		$this->row = $this->ModeloUsuario->getRowByClave($clave);  	
	    	$_SESSION['userRow'] = $this->row;	   		
        }
    	
        // section -64--88-0-101-5d4cf1ff:1334bbb4a38:-8000:00000000000010CA end
    }

    /**
     * Realiza un fin de la sesion y redirecciona hacia
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return mixed
     */
    public function logout()
    {
        // section -64--88-0-100--b2dec8:13357253886:-8000:000000000000181F begin
        $_SESSION["userRow"] = "";
        session_unset();     
        @session_destroy();
        // section -64--88-0-100--b2dec8:13357253886:-8000:000000000000181F end
    }

    /**
     * constructor de usuario. Invoca al UsuarioModelo
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function Usuario()
    {
        // section -64--88-0-100--b2dec8:13357253886:-8000:0000000000001821 begin
        $this->ModeloUsuario = new ModeloUsuario();
        session_start();
        
        // section -64--88-0-100--b2dec8:13357253886:-8000:0000000000001821 end
    }

    /**
     * Retorna true, si el usuario está logueado (en sesion), de lo contrario
     * false.
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function isLogged()
    {
        // section -64--88-0-100--b2dec8:13357253886:-8000:000000000000182E begin
        if (@$_SESSION["userRow"] == null)
        	return false;
        else
        	return true;
        // section -64--88-0-100--b2dec8:13357253886:-8000:000000000000182E end
    }

    /**
     * Retorna verdadero si el rol es Vendedor
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function isRegistredUser()
    {
        // section -64--88-0-100--b2dec8:13357253886:-8000:000000000000188C begin
        if (@$_SESSION["userRow"]["rol"] == "Vendedor") { 
        	return true;
        }
        else {
        	return false;
        }  
        // section -64--88-0-100--b2dec8:13357253886:-8000:000000000000188C end
    }

    /**
     * Inicia sesion si no se ha inciado, verifica si no se ha agotado la
     * y envía a index?controlador=logout de ser asi. Si no se ha agotado
     * la actividad.
     * $_SESSION['LAST_ACTIVITY']
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function checkUsuario()
    {
        // section -64--88-0-100--b2dec8:13357253886:-8000:0000000000001890 begin
//    	if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 900)) {	
//		session_destroy();   // destroy session data in storage
//		session_unset();     // unset $_SESSION variable for the runtime
//		header ("Location:index.php");
//		}
        // section -64--88-0-100--b2dec8:13357253886:-8000:0000000000001890 end
    }
    
    public function registrarUsuario($datos)
    {
        $this->ModeloUsuario->insertRow($datos);
    }

} /* end of class Usuario */

?>
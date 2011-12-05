<?php

error_reporting(E_ALL);

/**
 * Controlador inicial de logueo
 *
 * @author firstname and lastname of author, <author@example.org>
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/**
 * Representa la informaciony control de negocios perteneciente a usuarios del
 * de logueo
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once($base_dir . '/controlador/class.Usuario.php');

/**
 * Administra los despliegues usando plantillas
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once($base_dir . '/vista/class.VistaGenerica.php');

/* user defined includes */
// section -64--88-0-100--b2dec8:13357253886:-8000:0000000000001813-includes begin
// section -64--88-0-100--b2dec8:13357253886:-8000:0000000000001813-includes end

/* user defined constants */
// section -64--88-0-100--b2dec8:13357253886:-8000:0000000000001813-constants begin
// section -64--88-0-100--b2dec8:13357253886:-8000:0000000000001813-constants end

/**
 * Controlador inicial de logueo
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class ControladorApp
{
    // --- ASSOCIATIONS ---


    // --- ATTRIBUTES ---

    /**
     * Short description of attribute usuario
     *
     * @access public
     * @var Usuario
     */
    public $usuario = null;

    /**
     * Short description of attribute vista
     *
     * @access public
     * @var VistaGenerica
     */
    public $vista = null;

    // --- OPERATIONS ---

    /**
     * Gestiona los eventos de la aplicacion principal
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     */
    public function controladorApp()
    {
        // section -64--88-0-100--b2dec8:13357253886:-8000:0000000000001814 begin
        $this->vista = new VistaGenerica();        
        $this->usuario = new Usuario();
        //$this->usuario->checkUsuario();        
        if (@$_REQUEST['username']) { 	// Valida request
        	$this->usuario->login(@$_REQUEST['username']);        	
        	if (!$this->usuario->isLogged()) {
        		echo "clave incorrecto";
        		$this->vista->showPlantilla("VistaPlantillaLogin.php");       		
        	} 
        }
        else
        {        	
	        if (@$_REQUEST["controlador"]=="logout") {
				$this->usuario->logout();
				// echo  "Sesion cerrada";
				$this->vista->showPlantilla("VistaPlantillaLogin.php");
				 
			}        	        	
            if (!$this->usuario->isLogged()) {
            	// echo  "usuario sin sesion y sin request de usuario y password";
            	$this->vista->showPlantilla("VistaPlantillaLogin.php");
        	}
        }
        
        if(@$_REQUEST['c']=="usuarioRegistro")
        {
            $this->vista->showPlantilla("VistaRegistro.php");
        }
        if(@$_REQUEST['c']=="guardarRegistro")
        {
            $this->usuario->registrarUsuario($_REQUEST);
        }
        
        if ($this->usuario->isAdmin()) {
        	$this->vista->showPlantilla("VistaPlantillaDashBoardAdmin.php");
        }
        if ($this->usuario->isRegistredUser()) {
        	$this->vista->showPlantilla("VistaPlantillaDashBoardRegistredUser.php");
        }                
        // section -64--88-0-100--b2dec8:13357253886:-8000:0000000000001814 end
    }

} /* end of class ControladorApp */

?>
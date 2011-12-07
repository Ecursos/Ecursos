<?php

error_reporting(E_ALL);

/**
 * Clase ControladorUsuarios
 * Valida los eventos, peticiones (Requests) y envia los metodos de Vista y
 * correspondientes de acuerdo a cada uno
 *
 * @author Ivan R. Chenoweth
 * @since 2011
 * @version 1
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
// section 127-0-0-1--2bc61e:12e6b7c56db:-8000:0000000000000DDC-includes begin
// section 127-0-0-1--2bc61e:12e6b7c56db:-8000:0000000000000DDC-includes end

/* user defined constants */
// section 127-0-0-1--2bc61e:12e6b7c56db:-8000:0000000000000DDC-constants begin
// section 127-0-0-1--2bc61e:12e6b7c56db:-8000:0000000000000DDC-constants end

/**
 * Clase ControladorUsuarios
 * Valida los eventos, peticiones (Requests) y envia los metodos de Vista y
 * correspondientes de acuerdo a cada uno
 *
 * @access public
 * @author Ivan R. Chenoweth
 * @since 2011
 * @version 1
 */
class ControladorUsuarios
{
    // --- ASSOCIATIONS ---


    // --- ATTRIBUTES ---

    /**
     * Instancia para trabajar el Modelo
     *
     * @access public
     * @var VistaGenerica
     */
    public $miVista = null;

    /**
     * Short description of attribute miModelo
     *
     * @access public
     * @var ModeloUsuario
     */
    public $miModelo = null;

    /**
     * Mensaje para enviar a la vista
     *
     * @access public
     * @var String
     */
    public $mensage = null;

    /**
     * Short description of attribute usuario
     *
     * @access public
     * @var Usuario
     */
    public $usuario = null;

    // --- OPERATIONS ---

    /**
     * Procesa el desplegado de la lista
     * Invoca modelo-Lista ()
     * Invoca vista-Lista ()
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return mixed
     */
    public function Lista()
    {
        // section 127-0-0-1--2bc61e:12e6b7c56db:-8000:0000000000000DEE begin
        $datos=$this->miModelo->getAllRows();      		
		$this->miVista->showPlantilla("VistaPlantillaLista.php",$datos);
		// 	        
        // section 127-0-0-1--2bc61e:12e6b7c56db:-8000:0000000000000DEE end
    }

    /**
     * Procesa el Alta (insertado) de un registro
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return mixed
     */
    public function Alta()
    {
        // section 127-0-0-1--2bc61e:12e6b7c56db:-8000:0000000000000DF0 begin
		if (@$_REQUEST[Aceptar]) {
				$this->miModelo->insertRow($_REQUEST);
				$this->mensage = "El registro ha sido dado de alta"; 
				$this->Lista();
				}
			else     
				$this->miVista->showPlantilla("VistaPlantillaFormaAlta.php");   
        // section 127-0-0-1--2bc61e:12e6b7c56db:-8000:0000000000000DF0 end
    }

    /**
     * Procesa la edición de un registro
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return mixed
     */
    public function Editar()
    {
        // section 127-0-0-1--2bc61e:12e6b7c56db:-8000:0000000000000DF2 begin
		if (@$_REQUEST[Aceptar]) {								// Boton Aceptar
				$this->miModelo->updateRow(@$_REQUEST);		// Graba en el modelo
				$this->mensage = "El registro ha sido modificado";
				$this->Lista();									// Muestra la lista
			}
			else {	
				$datos = $this->miModelo->searchById(@$_REQUEST[id]);
				$this->miVista->showPlantilla("VistaPlantillaFormaEditar.php",$datos);
			}	        
        // section 127-0-0-1--2bc61e:12e6b7c56db:-8000:0000000000000DF2 end
    }

    /**
     * Procesa el borrado de un registro
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return mixed
     */
    public function Borrar()
    {
        // section 127-0-0-1--2bc61e:12e6b7c56db:-8000:0000000000000DF4 begin
		if (@$_REQUEST[Aceptar]) {
				$this->miModelo->deleteRow(@$_REQUEST[id]);
				$this->mensage = "El registro ha sido borrado";
				$this->Lista();				
			}
			else {	
				$datos = $this->miModelo->searchById(@$_REQUEST[id]);				
				$this->miVista->showPlantilla("VistaPlantillaFormaBorrar.php",$datos);
			}	       
        // section 127-0-0-1--2bc61e:12e6b7c56db:-8000:0000000000000DF4 end
    }

    /**
     * Controla la búsqueda por algun campo
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return mixed
     */
    public function Buscar()
    {
        // section -64--88-0-101-54e14bc7:132f9254a1f:-8000:0000000000001482 begin
		$datos=$this->miModelo->getRowByName(@$_REQUEST["nombrebuscar"]);	
		$this->miVista->showPlantilla("VistaPlantillaLista.php",$datos);        
        // section -64--88-0-101-54e14bc7:132f9254a1f:-8000:0000000000001482 end
    }

    /**
     * Metodo Constructor de Controlador
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return mixed
     */
    public function ControladorUsuarios()
    {
        // section 127-0-0-1--2bc61e:12e6b7c56db:-8000:0000000000000DF6 begin
    	$this->miModelo = new ModeloUsuario();		
		$this->miVista = new VistaGenerica();		
		$this->usuario = new Usuario();
		
     	if ($this->usuario->isAdmin()==null) {			// No tiene autorización para este controlador
        	// $this->VistaApp->showDashBoardGuest();
        	header("Location: index.php");
        }
		//var_dump($_REQUEST);
		// VISTA
		// Validando REQUEST 
		if(@$_REQUEST["controlador"]=="" || @$_REQUEST[Cancelar]) 		// Boton generico cancelar
		{
			$this->Lista();
		}
		else 
		{
			if(@$_REQUEST["controlador"]=="Buscar") 	
				$this->Buscar();
			if(@$_REQUEST["controlador"]=="nuevo")
				$this->Alta();			
			if(@$_REQUEST["controlador"]=="editar")
				$this->Editar();
			if(@$_REQUEST["controlador"]=="borrar") 
				$this->Borrar();
		}
        // section 127-0-0-1--2bc61e:12e6b7c56db:-8000:0000000000000DF6 end
    }

} /* end of class ControladorUsuarios */

?>
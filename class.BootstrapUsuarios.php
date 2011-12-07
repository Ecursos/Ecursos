<?php

error_reporting(E_ALL);

/**
 * Clase ejecutora
 * Arranque del Programa CRUD-MVC
 *
 * @author Ivan R. Chenoweth
 * @since 2011
 * @version 1
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/**
 * Clase ControladorUsuarios
 * Valida los eventos, peticiones (Requests) y envia los metodos de Vista y
 * correspondientes de acuerdo a cada uno
 *
 * @author Ivan R. Chenoweth
 * @since 2011
 * @version 1
 */
require_once($base_dir . '/controlador/class.ControladorUsuarios.php');

/* user defined includes */
// section 127-0-0-1--2bc61e:12e6b7c56db:-8000:0000000000000DF8-includes begin
// section 127-0-0-1--2bc61e:12e6b7c56db:-8000:0000000000000DF8-includes end

/* user defined constants */
// section 127-0-0-1--2bc61e:12e6b7c56db:-8000:0000000000000DF8-constants begin
// section 127-0-0-1--2bc61e:12e6b7c56db:-8000:0000000000000DF8-constants end

/**
 * Clase ejecutora
 * Arranque del Programa CRUD-MVC
 *
 * @access public
 * @author Ivan R. Chenoweth
 * @since 2011
 * @version 1
 */
class BootstrapUsuarios
{
    // --- ASSOCIATIONS ---


    // --- ATTRIBUTES ---

    // --- OPERATIONS ---

    /**
     * Metodo Constructor
     * Este simula el main
     * Metodo principal de arranqe
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return mixed
     */
    public function BootstrapUsuarios()
    {
        // section 127-0-0-1--2bc61e:12e6b7c56db:-8000:0000000000000DF9 begin
	new ControladorUsuarios;        
        // section 127-0-0-1--2bc61e:12e6b7c56db:-8000:0000000000000DF9 end
    }

} /* end of class BootstrapUsuarios */

?>
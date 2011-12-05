<?php

error_reporting(E_ALL);

/**
 * Administra los despliegues usando plantillas
 *
 * @author firstname and lastname of author, <author@example.org>
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/* user defined includes */
// section 10-25-2--51--31a7ca5b:13394855662:-8000:00000000000010F7-includes begin
// section 10-25-2--51--31a7ca5b:13394855662:-8000:00000000000010F7-includes end

/* user defined constants */
// section 10-25-2--51--31a7ca5b:13394855662:-8000:00000000000010F7-constants begin
// section 10-25-2--51--31a7ca5b:13394855662:-8000:00000000000010F7-constants end

/**
 * Administra los despliegues usando plantillas
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class VistaGenerica
{
    // --- ASSOCIATIONS ---


    // --- ATTRIBUTES ---

    /**
     * Plantilla header
     *
     * @access private
     * @var String
     */
    private $plantillaHeader = null;

    /**
     * plantilla footer
     *
     * @access private
     * @var String
     */
    private $plantillaFooter = null;

    // --- OPERATIONS ---

    /**
     * Despliega la plantilla enviada por parametro
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  plantilla
     * @param  datos
     * @param  datosdet
     */
    public function showPlantilla($plantilla, $datos = null, $datosdet = null)
    {
        // section 10-25-2--51--31a7ca5b:13394855662:-8000:0000000000001114 begin
        // var_dump($datos);         var_dump($datosdet);        var_dump($plantilla);        require_once($this->plantillaHeader);
        require_once($this->plantillaHeader);      
		require_once($plantilla);
		require_once($this->plantillaFooter);  
        // section 10-25-2--51--31a7ca5b:13394855662:-8000:0000000000001114 end
    }

    /**
     * Setea las plantillas de  header y el footer
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  header
     * @param  footer
     */
    public function VistaGenerica($header = null, $footer = null)
    {
        // section 127-0-0-1-ee6e0cb:13394ac7890:-8000:0000000000001128 begin
        if (!$header) {
        	$this->plantillaHeader= "VistaPlantillaHeader.php";        						
        } else
        	$this->plantillaHeader = $header;
        if (!$footer) {
        	$this->plantillaFooter = "VistaPlantillaFooter.php";
        }  else {
        	$this->plantillaFooter = $footer;
        }
        // section 127-0-0-1-ee6e0cb:13394ac7890:-8000:0000000000001128 end
    }

} /* end of class VistaGenerica */

?>
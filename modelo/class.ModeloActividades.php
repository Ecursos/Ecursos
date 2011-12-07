<?php

error_reporting(E_ALL);

/**
 * modelo sin título - class.ModeloActividades.php
 *
 * $Id$
 *
 * This file is part of modelo sin título.
 *
 * Automatically generated on 06.12.2011, 23:00:58 with ArgoUML PHP module 
 * (last revised $Date: 2010-01-12 20:14:42 +0100 (Tue, 12 Jan 2010) $)
 *
 * @author firstname and lastname of author, <author@example.org>
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/**
 * include objetoDatos
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.objetoDatos.php');

/* user defined includes */
// section -64--88-1-102-9622ab2:134173cef74:-8000:0000000000001755-includes begin
// section -64--88-1-102-9622ab2:134173cef74:-8000:0000000000001755-includes end

/* user defined constants */
// section -64--88-1-102-9622ab2:134173cef74:-8000:0000000000001755-constants begin
// section -64--88-1-102-9622ab2:134173cef74:-8000:0000000000001755-constants end

/**
 * Short description of class ModeloActividades
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class ModeloActividades
    extends objetoDatos
{
    // --- ASSOCIATIONS ---


    // --- ATTRIBUTES ---

    // --- OPERATIONS ---

    /**
     * Short description of method crearActividad
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  objetoDatos
     * @return mixed
     */
    public function crearActividad($objetoDatos)
    {
        // section -64--88-1-102-9622ab2:134173cef74:-8000:0000000000001768 begin
      		$sql = "INSERT INTO actividades (
      			clave,
      			titulo,
      			descripcion,
      			estado,
            fecha
      			) VALUES (
      			'".{$objetoDatos->getClave()}."',
      			'".{$objetoDatos->getTitulo()}."',
      			'".{$objetoDatos->getDescripcion()}."',
      			'".{$objetoDatos->getEstado()}."',
            '".date('Y/m/d')."'
      			)";
      		$this->ejecutarQuery($sql);
      		return mysql_insert_id();
        // section -64--88-1-102-9622ab2:134173cef74:-8000:0000000000001768 end
    }

    /**
     * Short description of method eliminarActividad
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  objetoDatos
     * @return mixed
     */
    public function eliminarActividad($objetoDatos)
    {
        // section -64--88-1-102-9622ab2:134173cef74:-8000:000000000000176A begin
        $sql= "DELETE FROM actividades WHERE id = {$objetoDatos->getId()}";
		    $this->ejecutarQuery($sql);
        // section -64--88-1-102-9622ab2:134173cef74:-8000:000000000000176A end
    }

    /**
     * Short description of method modificarActividad
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  objetoDatos
     * @return mixed
     */
    public function modificarActividad($objetoDatos)
    {
        // section -64--88-1-102-9622ab2:134173cef74:-8000:000000000000176C begin
    		$sql= "
    			UPDATE actividades SET
    				clave = '".{$objetoDatos->getClave()}."',
    				titulo = '".{$objetoDatos->getTitulo()}."',
    				descripcion = '".{$objetoDatos->getDescripcion()}."',
    				estado = '".{$objetoDatos->getEstado()}."',
    				fecha = '".{$objetoDatos->getFecha()}."'
    				WHERE id = ".{$objetoDatos->getId()}."
    		";
    		$this->ejecutarQuery($sql);
        // section -64--88-1-102-9622ab2:134173cef74:-8000:000000000000176C end
    }

    /**
     * Short description of method verActividades
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return mixed
     */
    public function verActividades()
    {
        // section -64--88-1-102-9622ab2:134173cef74:-8000:000000000000176E begin
       	$sql = "SELECT * FROM actividades";
		    return $this->ejecutarQuery($sql);
        // section -64--88-1-102-9622ab2:134173cef74:-8000:000000000000176E end
    }

} /* end of class ModeloActividades */

?>
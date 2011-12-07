<?php

error_reporting(E_ALL);

/**
 * modelo sin título - class.ModeloCursos.php
 *
 * $Id$
 *
 * This file is part of modelo sin título.
 *
 * Automatically generated on 06.12.2011, 23:00:58 with ArgoUML PHP module 
 * (last revised $Date: 2010-01-12 20:14:42 +0100 (Tue, 12 Jan 2010) $)
 *
 * @author Daniel Bravo
 * @since 2011
 * @version 1
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/**
 * include Conexion
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.Conexion.php');

/**
 * include objetoDatos
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.objetoDatos.php');

/* user defined includes */
// section -64--88-1-102-4b6c0acc:13416fa5688:-8000:0000000000000868-includes begin
// section -64--88-1-102-4b6c0acc:13416fa5688:-8000:0000000000000868-includes end

/* user defined constants */
// section -64--88-1-102-4b6c0acc:13416fa5688:-8000:0000000000000868-constants begin
// section -64--88-1-102-4b6c0acc:13416fa5688:-8000:0000000000000868-constants end

/**
 * Short description of class ModeloCursos
 *
 * @access public
 * @author Daniel Bravo
 * @since 2011
 * @version 1
 */
class ModeloCursos
    extends objetoDatos
{
    // --- ASSOCIATIONS ---


    // --- ATTRIBUTES ---

    // --- OPERATIONS ---

    /**
     * Short description of method crearCurso
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  objetoDatos
     * @return mixed
     */
    public function crearCurso($objetoDatos)
    {
        // section -64--88-1-102-4b6c0acc:13416fa5688:-8000:0000000000000869 begin
      		$sql = "INSERT INTO cursos (
      			clave,
      			titulo,
      			descripcion,
      			fechaInicio,
      			fechaFin,
      			fecha,
            estado
      			) VALUES (
      			'".{$objetoDatos->getClave()}."',
      			'".{$objetoDatos->getTitulo()}."',
      			'".{$objetoDatos->getDescripcion()}."',
      			'".{$objetoDatos->getFechaIni()}."',
      			'".{$objetoDatos->getFechaFin()}."',
      			'".{$objetoDatos->getFecha()}."',
      			'".{$objetoDatos->getEstado()}."',
      			)";
      		$this->ejecutarQuery($sql);
      		return mysql_insert_id();
        // section -64--88-1-102-4b6c0acc:13416fa5688:-8000:0000000000000869 end
    }

    /**
     * Short description of method eliminarCurso
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  objetoDatos
     * @return mixed
     */
    public function eliminarCurso($objetoDatos)
    {
        // section -64--88-1-102-4b6c0acc:13416fa5688:-8000:000000000000086B begin
        $sql= "DELETE FROM cursos WHERE id = {$objetoDatos->getId()}";
		    $this->ejecutarQuery($sql);
        // section -64--88-1-102-4b6c0acc:13416fa5688:-8000:000000000000086B end
    }

    /**
     * Short description of method modificarCurso
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  objetoDatos
     * @return mixed
     */
    public function modificarCurso($objetoDatos)
    {
        // section -64--88-1-102-4b6c0acc:13416fa5688:-8000:000000000000086D begin
    		$sql= "
    			UPDATE cursos SET
    				clave = '".{$objetoDatos->getClave()}."',
    				titulo = '".{$objetoDatos->getTitulo()}."',
    				descripcion = '".{$objetoDatos->getDescripcion()}."',
    				fechaInicio = '".{$objetoDatos->getFechaIni()}."',
    				fechaFin = '".{$objetoDatos->getFechaFin()}."',
    				fecha = '".{$objetoDatos->getFecha()}."',
    				estado = '".{$objetoDatos->getEstado()}."'
    				WHERE id = ".{$objetoDatos->getId()}."
    		";
    		$this->ejecutarQuery($sql);
        // section -64--88-1-102-4b6c0acc:13416fa5688:-8000:000000000000086D end
    }

    /**
     * Short description of method verCursos
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return mixed
     */
    public function verCursos()
    {
        // section -64--88-1-102-4b6c0acc:13416fa5688:-8000:000000000000086F begin
       	$sql = "SELECT * FROM actividades";
		    return $this->ejecutarQuery($sql);
        // section -64--88-1-102-4b6c0acc:13416fa5688:-8000:000000000000086F end
    }

} /* end of class ModeloCursos */

?>
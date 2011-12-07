<?php

error_reporting(E_ALL);

/**
 * modelo sin título - class.objetoDatos.php
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
 * include Conexion
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.Conexion.php');

/* user defined includes */
// section -64--88-1-102-9622ab2:134173cef74:-8000:0000000000001773-includes begin
// section -64--88-1-102-9622ab2:134173cef74:-8000:0000000000001773-includes end

/* user defined constants */
// section -64--88-1-102-9622ab2:134173cef74:-8000:0000000000001773-constants begin
// section -64--88-1-102-9622ab2:134173cef74:-8000:0000000000001773-constants end

/**
 * Short description of class objetoDatos
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class objetoDatos
    extends Conexion
{
    // --- ASSOCIATIONS ---


    // --- ATTRIBUTES ---

    /**
     * Short description of attribute id
     *
     * @access public
     * @var Integer
     */
    public $id = null;

    /**
     * Short description of attribute clave
     *
     * @access public
     * @var Integer
     */
    public $clave = null;

    /**
     * Short description of attribute titulo
     *
     * @access public
     * @var String
     */
    public $titulo = null;

    /**
     * Short description of attribute descripcion
     *
     * @access public
     * @var String
     */
    public $descripcion = null;

    /**
     * Short description of attribute fechaIni
     *
     * @access public
     * @var String
     */
    public $fechaIni = null;

    /**
     * Short description of attribute fechaFin
     *
     * @access public
     * @var String
     */
    public $fechaFin = null;

    /**
     * Short description of attribute fecha
     *
     * @access public
     * @var String
     */
    public $fecha = null;

    /**
     * Short description of attribute estado
     *
     * @access public
     * @var String
     */
    public $estado = null;

    // --- OPERATIONS ---
    
    /**
     * Short description of method getId
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return mixed
     */
    public function getId()
    {
        // section -64--88-1-102-9622ab2:134173cef74:-8000:000000000000179E begin
        return $this->id;
        // section -64--88-1-102-9622ab2:134173cef74:-8000:000000000000179E end
    }

    /**
     * Short description of method setId
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  id
     * @return mixed
     */
    public function setId($id)
    {
        // section -64--88-1-102-9622ab2:134173cef74:-8000:00000000000017A0 begin
        $this->id = $id;
        // section -64--88-1-102-9622ab2:134173cef74:-8000:00000000000017A0 end
    }

    /**
     * Short description of method getClave
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return mixed
     */
    public function getClave()
    {
        // section -64--88-1-102-9622ab2:134173cef74:-8000:00000000000017A3 begin
        return $this->clave;
        // section -64--88-1-102-9622ab2:134173cef74:-8000:00000000000017A3 end
    }

    /**
     * Short description of method setClave
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  clave
     * @return mixed
     */
    public function setClave($clave)
    {
        // section -64--88-1-102-9622ab2:134173cef74:-8000:00000000000017A5 begin
        $this->clave = $clave;
        // section -64--88-1-102-9622ab2:134173cef74:-8000:00000000000017A5 end
    }

    /**
     * Short description of method getTitulo
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return mixed
     */
    public function getTitulo()
    {
        // section -64--88-1-102-9622ab2:134173cef74:-8000:00000000000017A8 begin
        return $this->titulo;
        // section -64--88-1-102-9622ab2:134173cef74:-8000:00000000000017A8 end
    }

    /**
     * Short description of method setTitulo
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  titulo
     * @return mixed
     */
    public function setTitulo($titulo)
    {
        // section -64--88-1-102-9622ab2:134173cef74:-8000:00000000000017AA begin
        $this->titulo = $titulo;
        // section -64--88-1-102-9622ab2:134173cef74:-8000:00000000000017AA end
    }

    /**
     * Short description of method getDescripcion
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return mixed
     */
    public function getDescripcion()
    {
        // section -64--88-1-102-9622ab2:134173cef74:-8000:00000000000017AD begin
        return $this->descripcion;
        // section -64--88-1-102-9622ab2:134173cef74:-8000:00000000000017AD end
    }

    /**
     * Short description of method setDescripcion
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  descripcion
     * @return mixed
     */
    public function setDescripcion($descripcion)
    {
        // section -64--88-1-102-9622ab2:134173cef74:-8000:00000000000017AF begin
        $this->descripcion = $descripcion;
        // section -64--88-1-102-9622ab2:134173cef74:-8000:00000000000017AF end
    }

    /**
     * Short description of method getFechaIni
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return mixed
     */
    public function getFechaIni()
    {
        // section -64--88-1-102-9622ab2:134173cef74:-8000:00000000000017B2 begin
        return $this->fechaIni;
        // section -64--88-1-102-9622ab2:134173cef74:-8000:00000000000017B2 end
    }

    /**
     * Short description of method setFechaIni
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  fechaIni
     * @return mixed
     */
    public function setFechaIni($fechaIni)
    {
        // section -64--88-1-102-9622ab2:134173cef74:-8000:00000000000017B4 begin
        $this->fechaIni = $fechaIni;
        // section -64--88-1-102-9622ab2:134173cef74:-8000:00000000000017B4 end
    }

    /**
     * Short description of method getFechaFin
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return mixed
     */
    public function getFechaFin()
    {
        // section -64--88-1-102-9622ab2:134173cef74:-8000:00000000000017B7 begin
        return $this->fechaFin;
        // section -64--88-1-102-9622ab2:134173cef74:-8000:00000000000017B7 end
    }

    /**
     * Short description of method setFechaFin
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  fechaFin
     * @return mixed
     */
    public function setFechaFin($fechaFin)
    {
        // section -64--88-1-102-9622ab2:134173cef74:-8000:00000000000017B9 begin
        $this->fechaFin = $fechaFin;
        // section -64--88-1-102-9622ab2:134173cef74:-8000:00000000000017B9 end
    }

    /**
     * Short description of method getFecha
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return mixed
     */
    public function getFecha()
    {
        // section -64--88-1-102-9622ab2:134173cef74:-8000:00000000000017BC begin
        return $this->fecha;
        // section -64--88-1-102-9622ab2:134173cef74:-8000:00000000000017BC end
    }

    /**
     * Short description of method setFecha
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  fecha
     * @return mixed
     */
    public function setFecha($fecha)
    {
        // section -64--88-1-102-9622ab2:134173cef74:-8000:00000000000017BE begin
        $this->fecha = $fecha;
        // section -64--88-1-102-9622ab2:134173cef74:-8000:00000000000017BE end
    }

    /**
     * Short description of method getEstado
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return mixed
     */
    public function getEstado()
    {
        // section -64--88-1-102-9622ab2:134173cef74:-8000:00000000000017C1 begin
        return $this->estado;
        // section -64--88-1-102-9622ab2:134173cef74:-8000:00000000000017C1 end
    }

    /**
     * Short description of method setEstado
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  estado
     * @return mixed
     */
    public function setEstado($estado)
    {
        // section -64--88-1-102-9622ab2:134173cef74:-8000:00000000000017C3 begin
        $this->estado = $estado;
        // section -64--88-1-102-9622ab2:134173cef74:-8000:00000000000017C3 end
    }

    /**
     * Short description of method objetoDatos
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return mixed
     */
    public function objetoDatos()
    {
        // section -64--88-1-102-9622ab2:134173cef74:-8000:00000000000017C6 begin
        // section -64--88-1-102-9622ab2:134173cef74:-8000:00000000000017C6 end
    }

} /* end of class objetoDatos */

?>
<?php
error_reporting(E_ALL);
if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}
require($base_dir . "/controlador/class.controladorCursos.php");
Class BootstrapCursos{
public function BootstrapCursos()
{
    new ControladorCursos();
}
}
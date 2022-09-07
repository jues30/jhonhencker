<?php
error_reporting(E_ALL);
header('Content-Type: text/html; charset=UTF-8');
date_default_timezone_set('America/Bogota');
require_once 'funciones/bloquedeseguridad.php';
require_once 'funciones/funcionesBasicas.php';
require_once 'funciones/convertir_fecha.php';
require_once 'InterfazVeterinaria.php';
require_once 'funciones/recargarLibrerias.php';

/**
 * Archivo 'ver_servicios_temporales.php'
 * Controlador servicios de sesión en historias
 * 
 * ***   SISTEMA DE VETERINARIAS   ***
 *
 * @copyright  Todos los derechos reservados. Juan Esteban Peláez. 2017.
 * @author     Juan Esteban Peláez <jues30@gmail.com>
 * @version    1.0.0 - 15/08/2019
 * @since      Archivo disponible desde 15/08/2019
 *  */

class controladorVerVotacion {
    protected static $_instance;

    public static function getInstance() {
        if (!isset(self::$_instance)) {
            self::$_instance = new self();
        }
        return self::$_instance;
    }

    public static function run() {
        $_obj = self::getInstance();
        $_obj->ejecutarControladorVerVotacion();
    }
    
    public static function inicializarVariables() {
 
    }
    
    public function ejecutarControladorVerVotacion() {
        self::inicializarVariables();
        echo $_GET["id_obra"].rand(1, 10);
    }
}

class controladorVerVotacionException extends Exception{

}

controladorVerVotacion::run();

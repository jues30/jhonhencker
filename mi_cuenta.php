<?php
error_reporting(E_ALL);
header('Content-Type: text/html; charset=UTF-8');
date_default_timezone_set('America/Bogota');
require_once 'funciones/bloquedeseguridad.php';
require_once 'funciones/funcionesBasicas.php';
require_once 'funciones/convertir_fecha.php';
require_once 'InterfazGeneral.php';
require_once 'funciones/recargarLibrerias.php';

/**
 * Archivo 'formulario_cliente.php'
 * Controlador 
 * 
 * @copyright  Todos los derechos reservados. Juan Esteban Peláez. 2023.
 * @author     Juan Esteban Peláez <jues30@gmail.com>
 * @version    1.0.0 - 12/06/2023
 * @since      Archivo disponible desde 12/06/2023
 * 
 */

class ejecutarControladorCuenta {
    protected static $_instance;

    public static function getInstance() {
        if (!isset(self::$_instance)) {
            self::$_instance = new self();
        }
        return self::$_instance;
    }

    public static function run(){
        $_obj = self::getInstance();
        $_obj->ejecutarControladorCuenta();
    }
    
    public static function inicializarVariables() {
      
    }
    
    public function ejecutarControladorCuenta() {
        self::inicializarVariables();
        $DAOAcceso = new DAOAcceso();
        $DAOObra = new DAOObra();
        $cantidad = $DAOAcceso->cantidadAccesos();
        $visitas_dia = $DAOAcceso->cantidadAccesos(cambiaFechaAMysql(fechaHoy()));
        $total_likes = $DAOObra->obtenerTotalLikes();
        $total_vistos = $DAOObra->obtenerTotalVistos();
        
        try  {
            $Seo = objeto::factoria("Seo");
            $Seo->crear_seo_index();
        } catch (controladorIndexException $e) {
            throw new controladorIndexException('Problemas con la instancia: ',  $e->getMessage(), ".\n");
        }
        $titulo = InterfazGeneral::AUTOR;
        $nombre = "";
        require_once 'vistas/mi_cuenta.php';
    }
}

class controladorCuentaException extends Exception{

}

ejecutarControladorCuenta::run();

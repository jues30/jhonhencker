<?php
ob_start();
set_time_limit(0); 
error_reporting(E_ALL);
ini_set('memory_limit', '248M');
date_default_timezone_set('America/Bogota');
header('Content-Type: text/html; charset=UTF-8');
require_once 'funciones/bloquedeseguridad.php';
require_once 'funciones/funcionesBasicas.php';
require_once 'funciones/convertir_fecha.php';
require_once 'InterfazGeneral.php';
require_once 'Excel/PHPExcel.php';
require_once 'funciones/recargarLibrerias.php';
require_once 'reporte_visitas.php';
require_once 'reporte_obras.php';


/**
 * Controlador Reportes
 * @copyright  Todos los derechos reservados. Juan Esteban Peláez. 2017.
 * @author     Juan Esteban Peláez <jues30@gmail.com>
 * @version    1.0.0 - 10/10/2017
 * @since      Archivo disponible desde 10/10/2017
 *  */

class controladorExportarReportes {
    protected static $_instance;

    public static function getInstance() {
        if (!isset(self::$_instance)) {
            self::$_instance = new self();
        }
        return self::$_instance;
    }

    public static function run() {
        $_obj = self::getInstance();
        $_obj->ejecutarControladorAdmReportes();
    }
    
    public static function inicializarVariables() {
            
    }
    
    public function ejecutarControladorAdmReportes() {
        define('VISITAS_TOTALES', 1);
        define('VISITAS_DIA', 2);
        define('VISTOS', 3);
        define('LIKES', 4);
        self::inicializarVariables();
        if(empty($_GET["id_reporte"])){ $_GET["id_reporte"] = ""; }
        switch ($_GET["id_reporte"]) {
            case VISITAS_TOTALES: 
                reporteVisitas::run();
            break;
            case VISITAS_DIA: 
                reporteVisitas::run(cambiaFechaAMysql(fechaHoy()));
            break;
            case VISTOS: 
                reporteObra::run();
            break;
            case LIKES: 
                reporteObra::run();
            break;
            default:
                echo 'El reporte no se encuentra activo';
            break;
        
        }
    }
}

class controladorAdmReportesException extends Exception{

}

controladorExportarReportes::run();

ob_end_clean();
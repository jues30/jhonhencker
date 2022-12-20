<?php
error_reporting(E_ALL);
date_default_timezone_set('America/Bogota');
header('X-Frame-Options: SAMEORIGIN');
header('X-Powered-By:');
header('X-Content-Type-Options: nosniff');
header('Content-Type: text/html; charset=UTF-8');
require_once 'clases/funcionesGeneralesBD.php';
require_once 'funciones/funcionesBasicas.php';
require_once 'funciones/convertir_fecha.php';
require_once 'funciones/recargarLibrerias.php';
require_once 'InterfazGeneral.php';


/**
 * Archivo 'error404.php'
 * Controlador Error 404
 * 
 * ***   PAGINA WEB   ***
 *
 * @copyright  Todos los derechos reservados. Juan Esteban Pel�ez. 2017.
 * @author     Juan Esteban Pel�ez <jues30@gmail.com>
 * @version    1.0.0 - 20/12/2022
 * @since      Archivo disponible desde 20/12/2022
 */
class controladorError404 {
    protected static $_instance;
     
    public static function getInstance() {
        if (!isset(self::$_instance)) {
            self::$_instance = new self();
        }
        return self::$_instance;
    }
	
    public static function run() {
        $_obj = self::getInstance();
        $_obj->inicializar_index();
    }
    
    public function inicializar_index() {
        try  {
            $Seo = objeto::factoria("Seo");
            $Seo->crear_seo_index();
        } catch (controladorError404Exception $e) {
            throw new controladorError404Exception('Problemas con la instancia: ',  $e->getMessage(), ".\n");
        }
        $titulo = InterfazGeneral::AUTOR;
        $nombre = "";
        require_once 'vistas/error404.php';
    }
}

class controladorError404Exception extends Exception{

}

controladorError404::run();
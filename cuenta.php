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
 * Archivo 'cuenta.php'
 * Controlador cuenta
 * 
 * @copyright  Todos los derechos reservados. Juan Esteban Peláez. 2017.
 * @author     Juan Esteban Peláez <jues30@gmail.com>
 * @version    1.0.0 - 11/08/2017
 * @since      Archivo disponible desde 11/86/2017
 */
class controladorIndex {
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
        if(empty ($_GET["nomusuario"])){ $_GET["nomusuario"] = ""; }
        if(empty($_GET["contra"])){ $_GET["contra"] = ""; }
        if(empty($_GET["errorusuario"])){ $_GET["errorusuario"] = ""; }
        if(empty ($_GET["nomusuario"])){ $_GET["nomusuario"] = ""; }
        if(strcmp($_GET["errorusuario"], "si") == 0) { ?>
            <script> alert("Datos incorrectos."); </script> 
        <?php }
        try  {
            $Seo = objeto::factoria("Seo");
            $Seo->crear_seo_index();
        } catch (controladorIndexException $e) {
            throw new controladorIndexException('Problemas con la instancia: ',  $e->getMessage(), ".\n");
        }
        $titulo = InterfazGeneral::AUTOR;
        $nombre = "";
        require_once 'vistas/login.php';
    }
}

class controladorIndexException extends Exception{

}

controladorIndex::run();
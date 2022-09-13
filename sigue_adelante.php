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
 * Archivo 'la_bruja.php'
 * Controlador index
 * 
 * ***   PAGINA WEB   ***
 *
 * @copyright  Todos los derechos reservados. Juan Esteban Peláez. 2017.
 * @author     Juan Esteban Peláez <jues30@gmail.com>
 * @version    1.0.0 - 26/08/2022
 * @since      Archivo disponible desde 24/08/2022
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
        try  {
            $Seo = objeto::factoria("Seo");
            $Seo->crear_seo_index();
        } catch (Exception $e) {
            throw new Exception('Problemas con la instancia: ',  $e->getMessage(), ".\n");
        }
        
        session_start();
        if(!isset($_SESSION["acceso"])) {
            $_SESSION["acceso"] = md5(rand(1, 500000).fechahorahoy());
        }
        if(!isset($_COOKIE["cookie_obra"])) {
            $_COOKIE["cookie_obra"] = "";
        }
        $id_obra = InterfazGeneral::SIGUE_ADELANTE;
        $DAOAcceso = new DAOAcceso();
        $DAOObra = new DAOObra();
        $DAOAcceso->crearAcceso($id_obra);
        $vistos = $DAOObra->obtenerVistos($id_obra);
        $likes = $DAOObra->obtenerLikes($id_obra);

        require_once 'vistas/sigue_adelante.php';
    }
}

controladorIndex::run();
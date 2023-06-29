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
require_once 'funciones/geoiploc.php';
require_once 'funciones/recargarLibrerias.php';
require_once 'InterfazGeneral.php';


/**
 * Archivo 'index.php'
 * Controlador index
 * 
 * ***   PAGINA WEB   ***
 *
 * @copyright  Todos los derechos reservados. Juan Esteban Pel�ez. 2017.
 * @author     Juan Esteban Pel�ez <jues30@gmail.com>
 * @version    1.0.0 - 24/08/2022
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
        $ip = $_SERVER["REMOTE_ADDR"];
        $ip = '200.122.253.129';
        try  {
            $Seo = objeto::factoria("Seo");
            $Seo->crear_seo_index();
        } catch (controladorIndexException $e) {
            throw new controladorIndexException('Problemas con la instancia: ',  $e->getMessage(), ".\n");
        }
        session_start();
        if(!isset($_SESSION["acceso"])) {
                $_SESSION["acceso"] = md5(rand(1, 500000).fechahorahoy());
        }
        setcookie("cookie_acceso", md5(rand(1, 500000).fechahorahoy()), time() + 30*24*60*60);
        $DAOAcceso = new DAOAcceso();
        $DAOFrase = new DAOFrase();
        $DAOAcceso->crearAcceso();
        $cantidad_frases = $DAOFrase->obtenerCantidadFrases();
        $id_frase = rand(1, $cantidad_frases);
        $Frase = $DAOFrase->obtenerFrase($id_frase);
        $titulo = InterfazGeneral::AUTOR;
        $pais = getCountryFromIP($ip, 'code');
        if($pais == "CO") {
            $imagen_autor = "assets/img/esteban_pelaez2.jpg";
        } else {
            $imagen_autor = "assets/img/esteban_pelaez.jpg";
        }
        
        $url = "https://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"];
        
        $url_facebook = InterfazGeneral::FACEBOOK;
        $url_instagram = InterfazGeneral::INSTRAGRAM;
        $url_youtube = InterfazGeneral::YOUTUBE;
        
        require_once 'vistas/inicio.php';
    }
}

class controladorIndexException extends Exception{

}

controladorIndex::run();
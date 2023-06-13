<?php
ob_start();
error_reporting(E_ALL);
header('Content-Type: text/html; charset=UTF-8');
date_default_timezone_set('America/Bogota');
require_once 'clases/objeto.class.php';
require_once 'clases/singleton.class.php';
require_once 'clases/Conf.class.php';
require_once 'funciones/funcionesBasicas.php';
require_once 'funciones/convertir_fecha.php';
require_once 'funciones/recargarLibrerias.php';

/**
 * Archivo 'controlador_autenticacion.php'
 * Controlador Autenticación de acceso
 * 
 *
 * @copyright  Todos los derechos reservados. Juan Esteban Peláez. 2023.
 * @author     Juan Esteban Peláez <jues30@gmail.com>
 * @version    1.0.0 - 12/06/2023
 * @since      Archivo disponible desde 12/06/2023
 */
class controladorAutenticacion {
    protected static $_instance;
    
    private $usuario;
    
    private $contra;

    public static function getInstance() {
        if (!isset(self::$_instance)) {
            self::$_instance = new self();
        }
        return self::$_instance;
    }

    public static function run($usuario, $contra) {
        $_obj = self::getInstance();
        $_obj->usuario = $usuario;
        $_obj->contra = $contra;
        $_obj->ejecutarAutenticacion();
    }

    public function ejecutarAutenticacion()  {
        try {
            $nomusuario = strip_tags(trim($this->usuario));
            $contra = strip_tags(sha1(trim($this->contra)));
            $Usuario = new Usuario();
            $Usuario->crear_usuario($nomusuario, $contra);
        } catch (controladorAutenticacion $e) {
            throw new controladorAutenticacionException('Problemas con la instancia: '.  $e->getMessage());
        }
        $DAOUsuario = new DAOUsuario();
        $UsuarioSession = $DAOUsuario->autenticacionUsuario($Usuario);
        if(esVacio($UsuarioSession) || !$UsuarioSession) {
            header("Location: cuenta.php?errorusuario=si&nomusuario=$nomusuario");
            exit();
        } else {
            $this->usuarioSesion($UsuarioSession);
            header ("Location: mi_cuenta.php");
            exit();
        }
    }

    /**
     * Funcion para obtener el usuario de sesion
     * @param type $Usuario
     * @throws controladorAutenticacionException
     */
    public function usuarioSesion(Usuario $Usuario) {
        try {
            session_start();
            $_SESSION["autenticado"] = sha1("SI");
            $_SESSION["Id_Usuario"] = $Usuario->obtener_id_usuario();
            $_SESSION["Tipos"] = $Usuario->obtener_tipo();
            $_SESSION["Usuarios"] = $Usuario->obtener_usuario();
        } catch (controladorAutenticacionException $e) {
            throw new controladorAutenticacionException("Error con la sesión del usuario" . $e->getMessage());
        }
    }
    
}

class controladorAutenticacionException extends Exception{

}
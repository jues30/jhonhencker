<?php
/**
 * Archivo 'Usuario.class.php'
 * 
 *
 * @copyright  Todos los derechos reservados. Juan Esteban Peláez. 2023.
 * @author     Juan Esteban Peláez <jues30@gmail.com>
 * @version    1.0.0 - 12/06/2023
 * @since      Archivo disponible desde 12/06/2023
 * Clase Usuario
 */

error_reporting(E_ALL);
require_once 'clases/funcionesGeneralesBD.php';

class Usuario{
    public $id_usuario;
    protected $usuario;
    private $contra;
    public $tipo;
    protected $desc_tipo;
    protected $activo;
    public $_tabla = 'usuarios';
    
    //Constructor de la clase
    function __construct() {
        
    }
    
     //Funciones correspondiente a los usuarios
    public function crear_usuario($_usuario, $_contra) {
        $this->usuario = strip_tags(minusculas(trim($_usuario)));
        $this->contra = strip_tags(trim($_contra));
    }
    
    //Mètodos GET Y SET
    public function obtener_id_usuario(){
        $var = $this->id_usuario;
        return $var;
    }
    public function ingresar_id_usuario($var){
        $this->id_usuario = strip_tags(trim($var));
    }
    
    public function obtener_usuario(){
        $var = $this->usuario;
        return $var;
    }
    public function ingresar_usuario($var){
        $this->usuario = strip_tags(minusculas(trim($var)));
    }
    
    public function obtener_contra(){
        $var = $this->contra;
        return $var;
    }
    public function ingresar_contra($var){
        $this->contra = strip_tags(trim($var));
    }
    
    public function obtener_tipo(){
        $var = $this->tipo;
        return $var;
    }
    public function ingresar_tipo($var){
        $this->tipo = trim($var);
    }
    
    public function obtener_desc_tipo(){
        $var = $this->desc_tipo;
        return $var;
    }
    public function ingresar_desc_tipo($var){
        $this->desc_tipo = mayusculas(trim($var));
    }
    
    public function obtener_activo(){
        $var = $this->activo;
        return $var;
    }
    public function ingresar_activo($var){
        $this->activo = trim($var);
    }
    
}

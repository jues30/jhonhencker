<?php
/**
 * Archivo 'frase.class.php'
 * 
 * ***   JHON HENCKER SYSTEM   ***
 *
 * @copyright  Todos los derechos reservados. Juan Esteban Pelaez. 2015.
 * @author     Juan Esteban Pelaez <jues30@gmail.com>
 * @version    1.0.0 - 09/12/2022
 * @since      Archivo disponible desde 09/12/2022
 * Clase Obra
 */

require_once 'clases/funcionesGeneralesBD.php';
 
class Frase{
    protected $id;
    public $frase;
    public $observaciones;
    public $_tabla = 'frases';
    public $_bd = 'jhon_hencker';
    
    //Metodos GET Y SET
    public function obtener_id(){
        $var = $this->id;
        return $var;
    }
    public function ingresar_id($var){
        $this->id = strip_tags(trim($var));
    }
    
    public function obtener_frase(){
        $var = $this->frase;
        return $var;
    }
    public function ingresar_frase($var){
        $this->frase = strip_tags(trim($var));
    }
        
    public function obtener_observaciones(){
        $var = $this->observaciones;
        return $var;
    }
    public function ingresar_observaciones($var){
        $this->observaciones = strip_tags(trim($var));
    }
}

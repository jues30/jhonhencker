<?php
/**
 * Archivo 'obra.class.php'
 * 
 * ***   JHON HENCKER SYSTEM   ***
 *
 * @copyright  Todos los derechos reservados. Juan Esteban Pelaez. 2015.
 * @author     Juan Esteban Pelaez <jues30@gmail.com>
 * @version    1.0.0 - 29/08/2022
 * @since      Archivo disponible desde 29/08/2022
 * Clase Obra
 */

require_once 'clases/funcionesGeneralesBD.php';
 
class Obra{
    protected $id;
    public $id_obra;
    public $nombre_obra;
    public $vistos;
    public $likes;
    public $puntuacion;
    public $tipo;
    public $id_superior;
    public $Superior;
    public $_tabla = 'obras';
    public $_bd = 'jhon_hencker';
    
    //Metodos GET Y SET
    public function obtener_id(){
        $var = $this->id;
        return $var;
    }
    public function ingresar_id($var){
        $this->id = strip_tags(trim($var));
    }
    
    public function obtener_nombre_obra(){
        $var = $this->nombre_obra;
        return $var;
    }
    public function ingresar_nombre_obra($var){
        $this->nombre_obra = strip_tags(trim(mayusculas($var)));
    }
        
    public function obtener_vistos(){
        $var = $this->vistos;
        return $var;
    }
    public function ingresar_vistos($var){
        $this->vistos = strip_tags(trim($var));
    }
    
    public function obtener_likes(){
        $var = $this->likes;
        return $var;
    }
    public function ingresar_likes($var){
        $this->likes = strip_tags(trim($var));
    }
    
    public function obtener_puntuacion(){
        $var = $this->puntuacion;
        return $var;
    }
    public function ingresar_puntuacion($var){
        $this->puntuacion = strip_tags(trim($var));
    }
	
    public function obtener_tipo(){
        $var = $this->tipo;
        return $var;
    }
    public function ingresar_tipo($var){
        $this->tipo = strip_tags(trim($var));
    }
    
    public function obtener_id_superior(){
        $var = $this->id_superior;
        return $var;
    }
    public function ingresar_id_superior($var){
        $this->id_superior = strip_tags(trim($var));
    }
    
    public function obtener_superior(){
        $var = $this->Superior;
        return $var;
    }
    public function ingresar_superior(Obra $Superior){
        $this->Superior = $Superior;
    }

}

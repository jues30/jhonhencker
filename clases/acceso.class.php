<?php
/**
 * Archivo 'accesos.class.php'
 * 
 * ***   JHON HENCKER SYSTEM   ***
 *
 * @copyright  Todos los derechos reservados. Juan Esteban Pelaez. 2015.
 * @author     Juan Esteban Pelaez <jues30@gmail.com>
 * @version    1.0.0 - 29/08/2022
 * @since      Archivo disponible desde 29/08/2022
 * Clase Acceso
 */

require_once 'clases/funcionesGeneralesBD.php';
 
class Acceso{
    protected $id;
    public $id_obra;
    public $user_cookies;
    public $fecha;
    public $ip;
    public $sesion;
    public $pagina;
    public $_tabla = 'accesos';
    public $_bd = 'jhon_hencker';
    
    //Metodos GET Y SET
    public function obtener_id(){
        $var = $this->id;
        return $var;
    }
    public function ingresar_id($var){
        $this->id = strip_tags(trim($var));
    }
    
    public function obtener_id_obra(){
        $var = $this->id_obra;
        return $var;
    }
    public function ingresar_id_obra($var){
        $this->id_obra = strip_tags(trim($var));
    }
        
    public function obtener_user_cookies(){
        $var = $this->user_cookies;
        return $var;
    }
    public function ingresar_user_cookies($var){
        $this->user_cookies = strip_tags(trim($var));
    }
    
    public function obtener_fecha(){
        $var = $this->fecha;
        return $var;
    }
    public function ingresar_fecha($var){
        $this->fecha = strip_tags(trim($var));
    }
    
    public function obtener_ip(){
        $var = $this->ip;
        return $var;
    }
    public function ingresar_ip($var){
        $this->ip = strip_tags(trim($var));
    }
	
    public function obtener_sesion(){
        $var = $this->sesion;
        return $var;
    }
    public function ingresar_sesion($var){
        $this->sesion = strip_tags(trim($var));
    }
	
    public function obtener_pagina(){
        $var = $this->pagina;
        return $var;
    }
    public function ingresar_pagina($pagina){
        $this->pagina = strip_tags(trim($pagina));
    }  
}

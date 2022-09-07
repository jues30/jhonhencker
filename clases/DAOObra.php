<?php
/**
 * Archivo 'DAOObra.php'
 * Clase DAO (DATA ACCESS OBJECT)
 * Objeto que consulta, inserta, elimina o modifica directamente en la base de datos
 * 
 * ***   COLDOTA SYSTEM   ***
 *
 * @copyright  Todos los derechos reservados. Juan Esteban Peláez. 2017.
 * @author     Juan Esteban Peláez <jues30@gmail.com>
 * @version    1.0.0 - 29/08/2022
 * @since      Archivo disponible desde 29/08/2022
 */

error_reporting(E_ALL);
require_once 'clases/obra.class.php';

class DAOObra{
    
    /**
     *
     * @var Acceso $obj
     */
    protected $obj;
    
    /**
     * Constructor de la clase
     */
    function __construct() {
       $this->obj = new Obra();
    }
    
   function obtenerVistos($id_obra){
        $bd = Db::getInstance();
        $vistos = 0;
        $Sql = "SELECT vistos
                FROM ".$this->obj->_tabla."
                WHERE id = '".$bd->limpiar($id_obra)."'";
        $result = $bd->ejecutar($Sql);
        while($row = mysqli_fetch_assoc($result)) {
            $vistos = $row['vistos'];
        }
        $vistos_actualizados = $this->actualizarVistos($id_obra, $vistos);
        mysqli_free_result($result); 
        unset($bd);
        return $vistos_actualizados;
    }
    
    protected function actualizarVistos($id_obra, $vistos){
        $vistos++;
        $bd = Db::getInstance();
        $Sql = "UPDATE ".$this->obj->_tabla." SET ";
                $Sql .= "vistos = '".$vistos."' ";
                $Sql .= "WHERE id ='".$bd->limpiar($id_obra)."'";
        $bd->ejecutar($Sql);
        return $vistos;
    }
    
    function obtenerLikes($id_obra){
        $bd = Db::getInstance();
        $likes = 0;
        $Sql = "SELECT likes
                FROM ".$this->obj->_tabla."
                WHERE id = '".$bd->limpiar($id_obra)."'";
        $result = $bd->ejecutar($Sql);
        while($row = mysqli_fetch_assoc($result)) {
            $likes = $row['likes'];
        }
        mysqli_free_result($result); 
        unset($bd);
        return $likes;
    }
    
    function actualizarLikes($id_obra){
        $likes = $this->obtenerLikes($id_obra);
        $likes++;
        $bd = Db::getInstance();
        $Sql = "UPDATE ".$this->obj->_tabla." SET ";
                $Sql .= "likes = '".$likes."' ";
                $Sql .= "WHERE id ='".$bd->limpiar($id_obra)."'";
        $bd->ejecutar($Sql);
        return $likes;
    }
    
}

class DAOObraException extends Exception{

}

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
    
    /**
     * 
     * @param type $id_obra
     * @return type
     */
    function obtenerObra($id_obra){
        $bd = Db::getInstance();
        settype($id_obra, 'integer');
        $Sql = "SELECT * FROM ".$this->obj->_tabla." WHERE id ='".$bd->limpiar($id_obra)."' LIMIT 1";
        $result = $bd->ejecutar($Sql);
        while($row = mysqli_fetch_assoc($result)){
            $Obra = $this->objetoObra($row);
        }
        mysqli_free_result($result);
        return $Obra;
    }
    
    /**
     * Crea un objeto Obra a partir de un array
     * @param type $row
     * @return \Horario
     */
    public function objetoObra($row){
        $Obra = new Obra();
        $Obra->ingresar_id($row['id']);
        $Obra->ingresar_nombre_obra($row['nombre_obra']);
        $Obra->ingresar_vistos($row['vistos']);
        $Obra->ingresar_likes($row['likes']);
        $Obra->ingresar_puntuacion($row['puntuacion']);
        $Obra->ingresar_tipo($row['tipo']);
        $Obra->ingresar_id_superior($row['id_superior']);
        return $Obra;
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
    
    function obtenerTotalLikes(){
        $bd = Db::getInstance();
        $total_likes = 0;
        $Sql = "SELECT SUM(likes) AS total_likes
                FROM ".$this->obj->_tabla."";
        $result = $bd->ejecutar($Sql);
        while($row = mysqli_fetch_assoc($result)) {
            $total_likes = $row['total_likes'];
        }
        mysqli_free_result($result); 
        unset($bd);
        return $total_likes;
    }
    
    function obtenerTotalVistos(){
        $bd = Db::getInstance();
        $total_vistos = 0;
        $Sql = "SELECT SUM(vistos) AS total_vistos
                FROM ".$this->obj->_tabla."";
        $result = $bd->ejecutar($Sql);
        while($row = mysqli_fetch_assoc($result)) {
            $total_vistos = $row['total_vistos'];
        }
        mysqli_free_result($result); 
        unset($bd);
        return $total_vistos;
    }
    
    function obtenerReporteObras(){
        $bd = Db::getInstance();
        $consulta = array();
        $Sql = "SELECT * FROM ".$this->obj->_tabla."";
        $result = $bd->ejecutar($Sql);
        $i = 0;
        while($row = mysqli_fetch_assoc($result)){
            $consulta[$i]['nombre_obra'] = $row['nombre_obra'];
            $consulta[$i]['vistos'] = $row['vistos'];
            $consulta[$i]['likes'] = $row['likes'];
            ++$i;
        }
        mysqli_free_result($result); 
        unset($bd);
        return $consulta;
    }
    
}

class DAOObraException extends Exception{

}

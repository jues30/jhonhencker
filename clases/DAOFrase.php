<?php
/**
 * Archivo 'DAOFrase.php'
 * Clase DAO (DATA ACCESS OBJECT)
 * Objeto que consulta, inserta, elimina o modifica directamente en la base de datos
 * 
 * ***   COLDOTA SYSTEM   ***
 *
 * @copyright  Todos los derechos reservados. Juan Esteban Peláez. 2017.
 * @author     Juan Esteban Peláez <jues30@gmail.com>
 * @version    1.0.0 - 09/12/2022
 * @since      Archivo disponible desde 09/12/2022
 */

error_reporting(E_ALL);
require_once 'clases/frase.class.php';

class DAOFrase{
    
    /**
     *
     * @var Acceso $obj
     */
    protected $obj;
    
    /**
     * Constructor de la clase
     */
    function __construct() {
       $this->obj = new Frase();
    }
    
    /**
     * 
     * @param type $id_frase
     * @return type
     */
    function obtenerFrase($id_frase){
        $bd = Db::getInstance();
        settype($id_frase, 'integer');
        $Sql = "SELECT * FROM ".$this->obj->_tabla." WHERE id ='".$bd->limpiar($id_frase)."' LIMIT 1";
        $result = $bd->ejecutar($Sql);
        while($row = mysqli_fetch_assoc($result)){
            $Frase = $this->objetoFrase($row);
        }
        mysqli_free_result($result);
        return $Frase;
    }
    
    /**
     * Crea un objeto Frase a partir de un array
     * @param type $row
     * @return \Horario
     */
    public function objetoFrase($row){
        $Frase = new Frase();
        $Frase->ingresar_id($row['id']);
        $Frase->ingresar_frase($row['frase']);
        $Frase->ingresar_observaciones($row['observacion']);
         return $Frase;
    }
}

class DAOFraseException extends Exception{

}

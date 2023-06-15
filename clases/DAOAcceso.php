<?php
/**
 * Archivo 'DAOAcceso.php'
 * Clase DAO (DATA ACCESS OBJECT)
 * Objeto que consulta, inserta, elimina o modifica directamente en la base de datos
 * 
 * @copyright  Todos los derechos reservados. Juan Esteban Peláez. 2017.
 * @author     Juan Esteban Peláez <jues30@gmail.com>
 * @version    1.0.0 - 29/08/2022
 * @since      Archivo disponible desde 29/08/2022
 */

error_reporting(E_ALL);
require_once 'clases/acceso.class.php';

class DAOAcceso{
    
    /**
     *
     * @var Acceso $obj
     */
    protected $obj;
    
    /**
     * Constructor de la clase
     */
    function __construct() {
       $this->obj = new Acceso();
    }
    
    public function crearAcceso($id_obra = ""){
        $bd = Db::getInstance();
        $fecha_ingreso = cambiaFechaAMysql(fechaHoraHoy(), true);
        $cookie_acceso = $_COOKIE["cookie_acceso"];
        $sesion = $_SESSION["acceso"];
        $pagina = $_SERVER['REQUEST_URI'];
        $ip = $_SERVER['REMOTE_ADDR'];
        if(esVacio($id_obra)) {
        $Sql = "INSERT INTO ".$this->obj->_tabla."(user_cookies, fecha, ip, pagina, sesion) 
            VALUES('".$cookie_acceso."','".$fecha_ingreso."','".$ip."','".$pagina."','".$sesion."')";
        } else {
            $Sql = "INSERT INTO ".$this->obj->_tabla."(id_obra, user_cookies, fecha, ip, pagina, sesion) 
            VALUES('".$id_obra."','".$cookie_acceso."','".$fecha_ingreso."','".$ip."','".$pagina."','".$sesion."')";
        }
        if(!$bd->ejecutar($Sql)) {
                return false; 
        }
        return true;
    }
    
    public function cantidadAccesos($fecha = ""){
        $bd = Db::getInstance();
        $condicion = "";
        $cantidad = 0;
        if(!esVacio($fecha)) {
            $condicion = " AND DATE(fecha) = '".$fecha."'";
        }
        $Sql = "SELECT COUNT(A.sesion) AS cantidad FROM (
        SELECT sesion FROM ".$this->obj->_tabla." WHERE 1 = 1".$condicion." GROUP BY sesion) AS A";
        $result = $bd->ejecutar($Sql);
        $row = mysqli_fetch_assoc($result);
        $cantidad = $row["cantidad"];
        return $cantidad;
    }
    
    function obtenerReporteVisitas($fecha = ""){
        $bd = Db::getInstance();
        $condicion = "";
        $consulta = array();
         if(!esVacio($fecha)) {
            $condicion = " AND DATE(fecha) = '".$fecha."'";
        }
        $Sql = "SELECT * FROM ".$this->obj->_tabla."
                WHERE 1 = 1".$condicion."";
        $result = $bd->ejecutar($Sql);
        $i = 0;
        while($row = mysqli_fetch_assoc($result)){
            $consulta[$i]['id'] = $row['id'];
            $consulta[$i]['fecha'] =  cambiaFechaANormal($row['fecha'], true);
            $consulta[$i]['user_cookies'] = $row['user_cookies'];
            $consulta[$i]['ip'] = $row['ip'];
            $consulta[$i]['pagina'] = $row['pagina'];
            $consulta[$i]['sesion'] = $row['sesion'];
            ++$i;
        }
        mysqli_free_result($result); 
        unset($bd);
        return $consulta;
    }
    
}

class DAOAccesoException extends Exception{

}

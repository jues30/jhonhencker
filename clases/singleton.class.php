<?php
/* Clase encargada de gestionar las conexiones a la base de datos */
class Db{

    private $servidor;
    private $usuario;
    private $password;
    private $base_datos;
    protected $link;
    private $stmt;
    private $array;

    static $_instance;

    /*La función construct es privada para evitar que el objeto pueda ser creado mediante new*/
    private function __construct(){
        $this->setConexion();
        $this->conectar();
    }

    /*Método para establecer los par�metros de la conexi�n*/
    private function setConexion(){
        $conf = Conf::getInstance();
        $this->servidor=$conf->getHostDB();
        $this->base_datos=$conf->getDB();
        $this->usuario=$conf->getUserDB();
        $this->password=$conf->getPassDB();
    }

    /*Evitamos el clonaje del objeto. Patr�n Singleton*/
    private function __clone(){ }

    /*Función encargada de crear, si es necesario, el objeto. Esta es la funci�n que debemos llamar desde fuera de la clase para instanciar el objeto, y  as�, poder utilizar sus m�todos*/
    public static function getInstance(){
        if (!(self::$_instance instanceof self)) {
            self::$_instance = new self();
        }
        return self::$_instance;
    }

    /*Realiza la conexión a la base de datos.*/
    private function conectar(){
        $this->link = new mysqli($this->servidor, $this->usuario, $this->password);
        if(!mysqli_select_db($this->link, $this->base_datos)) {
            echo "Error en la conexion Mysql";
        }
        $this->link->set_charset("utf8");
    }

    /*Método para ejecutar una sentencia sql*/
    public function ejecutar($sql){
        $this->stmt = mysqli_query($this->link, $sql) or die ($sql . mysqli_error() ." Error en Query.");
        return $this->stmt;
    }
    
    public function limpiar($var){
        $var = evitarInyeccion($var);
        $variable = mysqli_real_escape_string($this->link, $var);
        return $variable;
    }
    
    /*Método para obtener la cantidad de registros de una sentencia sql*/
    public function cantidad_registros($sql){
        $this->stmt = mysqli_query($this->link, $sql) or die ($sql . mysqli_error() ." Error en Query.");
        return mysqli_num_rows($this->stmt);
    }

    /*Metodo para obtener una fila de resultados de la sentencia sql*/
    public function obtener_fila($stmt,$fila){
        if ($fila==0) {
            $this->array = mysqli_fetch_array($stmt);
        } else {
            mysql_data_seek($stmt,$fila);
            $this->array = mysqli_fetch_array($stmt);
        }
        return $this->array;
    }

    //Devuelve el ultimo id del insert introducido
    public function ultimoID(){
        return mysqli_insert_id($this->link);
    }
    
     //Funciones para transacciones
    public function begin(){
        $this->stmt = mysqli_query($this->link, "BEGIN") or die (mysql_error() ." Error en BEGIN.");
        return $this->stmt;
    }
	
	public function commit(){
        $this->stmt = mysqli_query($this->link, "COMMIT") or die (mysql_error() ." Error en COMMIT.");
        return $this->stmt;
    }
	
    public function rollback(){
        $this->stmt = mysqli_query($this->link, "ROLLBACK") or die (mysql_error() ." Error en ROLLBACK.");
        return $this->stmt;
    }

}
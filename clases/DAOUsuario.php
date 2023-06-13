<?php
/**
 * Archivo 'DAOUsuario.php'
 * Objeto que consulta, inserta, elimina o modifica directamente en la base de datos
 * 
 * @copyright  Todos los derechos reservados. Juan Esteban Peláez. 2023.
 * @author     Juan Esteban Peláez <jues30@gmail.com>
 * @version    1.0.0 - 12/06/2023
 * @since      Archivo disponible desde 12/06/2023
 */

error_reporting(E_ALL);
require_once 'clases/usuario.class.php';

class DAOUsuario{
    
    /**
     *
     * @var Usuario $obj
     */
    protected $obj;
    
    /**
     * Constructor de la clase
     */
    function __construct() {
       $this->obj = new Usuario();
    }
    
    /**
     * Construye el objeto a partir del array
     * @param type $row
     * @return \Usuario
     */
    protected function objetoUsuario($row){
        $Usuario = new Usuario();
        $Usuario->ingresar_id_usuario($row['id_usuario']);
        $Usuario->ingresar_usuario($row['usuario']);
        $Usuario->ingresar_contra($row['contra']);
        $Usuario->ingresar_tipo($row['tipo']);
        $Usuario->ingresar_activo($row['estado']);
        return $Usuario;
    }
    
    /**
     * Funcion para autenticar el usuario
     * @param Usuario $Usuario
     * @return Usuario
     */
    public function autenticacionUsuario(Usuario $Usuario){
        $bd = Db::getInstance();
        $nomusuario = $bd->limpiar(minusculas($Usuario->obtener_usuario()));
        $contra = $bd->limpiar(md5($Usuario->obtener_contra()));
        $Sql = "SELECT * FROM ".$Usuario->_tabla."
                WHERE usuario='". stripslashes($nomusuario)."' AND estado = ".InterfazGeneral::ACTIVO."
                LIMIT 1"; echo $Sql;
        $result = $bd->ejecutar($Sql);
        $row = mysqli_fetch_assoc($result);
        $UsuarioAux = $this->objetoUsuario($row);
        $UsuarioAux->ingresar_contra($row["contra"]);
        mysqli_free_result($result);
        if ($contra == $UsuarioAux->obtener_contra() && !esVacio($UsuarioAux->obtener_contra())) {
            return $UsuarioAux;
        } else {
            return NULL;
        }
    }
    
}


class DAOUsuarioException extends Exception{

}

<?php
/**
 * Archivo 'funcionesGeneralesBD.php'
 * Script que tiene funciones generales que conectan a la base de datos
 * 
 * ***   OSYS SYSTEM   ***
 *
 * @copyright  Todos los derechos reservados. Juan Esteban Pelaez. 2015.
 * @author     Juan Esteban Pelaez <jues30@gmail.com>
 * @version    1.0.0 - 21/06/2015
 * @since      Archivo disponible desde 21/06/2015
 */

error_reporting(E_ALL);
require_once 'clases/singleton.class.php';
require_once 'clases/singletonPruebas.class.php';
require_once 'clases/Conf.class.php';
require_once 'clases/ConfPrueba.class.php';
require_once 'clases/objeto.class.php';

/**
* Función que compara el modelo con la base de datos
*/ 
function compararModelo($base_datos, $tabla, $modelo){
	$bd = Db::getInstance();
 	$Sql = "SHOW COLUMNS FROM $tabla";
 	$result = $bd->ejecutar($Sql);
 	$consulta = array();
 	while($row = mysqli_fetch_assoc($result)){
            foreach ($row as $atributobd => $campobd) {
                    foreach ($modelo as $atributo => $campo) {
                        if($campobd == $atributo) {
                        if($row['Type'] != $campo['tipo'] || $row['Field'] != $campo['nombre']) {
                            throw new Exception('El modelo no corresponde con la base de datos. Campo: '.$campo['nombre']);
                        }
                    }
                }
            }
  	}
	return true; 
 	mysqli_free_result($result);
 	unset($bd);
}

/**
* Función que cuenta cuantos campos existen en la bd a partir de un parámetro
*/
function contadorCamposExistentes($tabla, $parametro, $campo, $pruebas = false){
	$bd = validarConexionPruebas($pruebas);
 	$Sql = "SELECT * FROM ".$tabla." WHERE ".$campo." = '".$parametro."'";
 	$consulta = $bd->cantidad_registros($Sql);
 	unset($bd);
 	return $consulta;
}

/**
* Función que cuenta cuantos campos existen en la bd a partir de dos par�metros
*/
function contadorCamposExistentesDosParametros($tabla, $parametro, $campo, $parametro2, $campo2){
	$bd = Db::getInstance();
	$Sql = "SELECT * FROM ".$tabla." WHERE ".$campo." = '".$parametro."' AND ". $campo2." = '".$parametro2."'";
	$consulta = $bd->cantidad_registros($Sql);
	unset($bd);
	return $consulta;
}

/**
* Función que cuenta cuantos campos existen en la bd a partir de dos par�metro pero uno que no es igual al enviado
*/
function contadorCamposExistentesUnoDiferente($tabla, $parametro, $campo, $campo_diferente, $parametro_diferente){
	$bd = Db::getInstance();
	$Sql = "SELECT * FROM ".$tabla." WHERE ".$campo." = '".$parametro."' AND ".$campo_diferente." <> '".$parametro_diferente."'";
	$consulta = $bd->cantidad_registros($Sql);
	unset($bd);
	return $consulta;
}

/**
* Función que cuenta cuantos campos hay en una tabla
*/
function contadorCamposTabla($tabla){
	$bd = Db::getInstance();
	$Sql = sprintf("SELECT COUNT(*) FROM $tabla");
	$consulta = $bd->ejecutar($Sql);
	$valor = mysql_result($consulta,0);
	unset($bd);
	return $valor;
}

/**
* Función para eliminar un registro a partir de un par�metro
*/
function eliminarConUnParametro($tabla, $parametro_restriccion, $restriccion, $pruebas = false){
	$bd = validarConexionPruebas($pruebas);
	$Sql = "DELETE FROM ".$tabla." WHERE ".$parametro_restriccion." ='$restriccion'";
	if($bd->ejecutar($Sql)){
		unset($bd);
		return true;
	}
	else{
	unset($bd);
	return false;
	}
}
/**
 * Función para modificar un parámetro en la base de datos
 * @param type $tabla
 * @param type $parametro
 * @param type $campo
 * @param type $parametro_restriccion
 * @param type $restriccion
 * @return boolean
 */
function modificarUnParametro($tabla, $parametro, $campo, $parametro_restriccion, $restriccion, $pruebas = false){
    $bd = validarConexionPruebas($pruebas);
    $Sql = "UPDATE ".$tabla." SET ".$parametro." = '$campo' WHERE ".$parametro_restriccion." ='".$bd->limpiar($restriccion)."'";
    if($bd->ejecutar($Sql)){
        unset($bd);
        return true;
    }
    else{
        unset($bd);
        return false;
    }
}

/**
* Función para obtener el Último ID registrado
*/
function obtenerIdFinal($pruebas = false){
	$bd = validarConexionPruebas($pruebas);
	$id = $bd->ultimoID();
	unset($bd);
	return $id;
}

/**
* Función para obtener el máxiimo ID de una tabla en la bd
*/
function obtenerMaximo($tabla, $campo){
	$bd = Db::getInstance();
	$Sql = sprintf("SELECT MAX($campo) AS $campo FROM $tabla");
	$result = $bd->ejecutar($Sql);
	while($row = mysql_fetch_assoc($result)) {
		$maximo = $row[$campo];
	}
	mysql_free_result($result); 
	unset($bd);
	return $maximo;
}

/**
* Función para obtener un campo específico de una tabla
*/
function obtenerUnCampo($tabla, $campo, $condicion, $parametro){
	$bd = Db::getInstance();
	$valor = "";
	$Sql = "SELECT $campo FROM $tabla WHERE $condicion = '".$parametro."' LIMIT 1";
	$result = $bd->ejecutar($Sql);
	while($row = mysqli_fetch_assoc($result)) {
            $valor = $row[$campo];
	} 
	mysqli_free_result($result);
	unset($bd);
	return $valor;
}

/**
 * Función para obtener los registros totales de una tabla
 * @param type $tabla
 * @return type
 */
function obtenerTotalTabla($tabla){
    $bd = Db::getInstance();
    $Sql = "SELECT * FROM ".$tabla."";
    $result = $bd->cantidad_registros($Sql);
    return $result;
}

function obtenerTotalRegistros($Sql){
    $bd = Db::getInstance();
    $result = $bd->cantidad_registros($Sql);
    return $result;
}

function validarConexionPruebas($pruebas = false){
    if($pruebas) {
        $bd = DbPruebas::getInstance();
    } else {
        $bd = Db::getInstance();
    }
    return $bd;
}

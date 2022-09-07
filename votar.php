<?php
error_reporting(E_ALL);
header('Content-Type: text/html; charset=UTF-8');
date_default_timezone_set('America/Bogota');
require_once 'funciones/funcionesBasicas.php';
require_once 'funciones/convertir_fecha.php';
require_once 'InterfazGeneral.php';
require_once 'funciones/recargarLibrerias.php';
$DAOObra = new DAOObra();
$likes = $DAOObra->actualizarLikes($_GET["id_obra"]);
$data["id_obra"] = $_GET["id_obra"];
$data["votos"] = $likes;
setcookie("cookie_obra", $_GET["id_obra"], time() + 3600);     
        
echo json_encode($data);

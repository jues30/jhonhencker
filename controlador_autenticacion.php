<?php
ob_start();
error_reporting(E_ALL);
header('Content-Type: text/html; charset=UTF-8');
date_default_timezone_set('America/Bogota');
require_once 'clases/objeto.class.php';
require_once 'clases/singleton.class.php';
require_once 'clases/Conf.class.php';
require_once 'funciones/funcionesBasicas.php';
require_once 'InterfazGeneral.php';
require_once 'funciones/recargarLibrerias.php';
require_once 'autenticacion.php';

if(!filter_has_var(INPUT_POST, 'nomusuario')){ $_POST["nomusuario"] = ""; }
controladorAutenticacion::run($_POST["nomusuario"], $_POST["contra"]);
ob_end_flush();
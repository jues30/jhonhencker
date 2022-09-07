<?php
error_reporting(E_ALL);

function fechaHoy() {
    return date("d/m/Y", time());
}

function fechaHoraHoy() {
    return date("d/m/Y H:i:s", time());
}

function horaHoy() {
    return date("G:H:s");
}

function convertir_fecha($fecha){
    $nueva_fecha = "";
    $piezas = array();
    $piezas = explode("/",$fecha);
    if(count($piezas)>2)
    {
       $nueva_fecha = $piezas[2]."-".$piezas[1]."-".$piezas[0];
    }
    return $nueva_fecha;
}

function convertir_fecha2($fecha){
    $nueva_fecha = "";
    $piezas = array();
    $piezas = explode("-",$fecha);
    if(count($piezas)>2)
    {
       $nueva_fecha = $piezas[2]."/".$piezas[1]."/".$piezas[0];
    }
    return $nueva_fecha;
}

function cambiar_fecha($fecha)
{
    $var = str_replace("/","-",$fecha);
    return $var;
}
function cambiar_fecha2($fecha)
{
    $var = str_replace("-","/",$fecha);
    return $var;
}

function cambiaFechaAMysql($fecha, $conHora = false, $default = '0000-00-00') {
    $exp1 = '/([0-9]{1,2})\/([0-9]{1,2})\/([0-9]{2,4})/';
    $exp2 = '/^([0-9]{1,2})\/([0-9]{1,2})\/([0-9]{2,4}) ([0-9]{1,2}:[0-9]{1,2}:?[0-9]{0,2})$/';
    if (preg_match($exp1, $fecha, $mifecha) && !$conHora) {
        $lafecha = $mifecha[3] . "-" . $mifecha[2] . "-" . $mifecha[1];
    } elseif (preg_match($exp2, $fecha, $mifecha)) {
        $lafecha = $mifecha[3] . "-" . $mifecha[2] . "-" . $mifecha[1] . " " . $mifecha[4];
    } else {
        if($conHora){
            $default .= " 00:00:00";
        }
        $lafecha = $default;
    }
    return $lafecha;
}

function cambiaFechaANormal($fecha, $conHora = false, $default = '00/00/0000', $ampm = false) {
    $exp1 = '/([0-9]{2,4})-([0-9]{1,2})-([0-9]{1,2})/';
    $exp2 = '/^([0-9]{2,4})-([0-9]{1,2})-([0-9]{1,2}) ([0-9]{1,2}:[0-9]{1,2}:?[0-9]{0,2})$/';
    if (preg_match($exp1, $fecha, $mifecha) && !$conHora) {
        $lafecha = $mifecha[3] . "/" . $mifecha[2] . "/" . $mifecha[1];
    } elseif (preg_match($exp2, $fecha, $mifecha)) {
        if($ampm)
        {
            $mifecha[4] = date('g:i:s a', strtotime($mifecha[4]));
        }
        $lafecha = $mifecha[3] . "/" . $mifecha[2] . "/" . $mifecha[1] . " " . $mifecha[4];
        
    } else {
        if($conHora){
            if(!esVacio($default))
            {
                $default .= " 00:00:00";
            }
        }
        $lafecha = $default;
    }
    return $lafecha;
}

function fechaHoyTexto($conHora = false) {
    $_lisMeses = array(1 => "Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
    $_lisDias = array(0 => 'Domingo', 'Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado');
    $_dia = date("j", time());
    $_numDiaSemana = date("w", time());
    $_numMes = date("n", time());
    $_ano = date("Y", time());
    $_mes = $_lisMeses[$_numMes];
    $_diaSemana = $_lisDias[$_numDiaSemana];
    $_textoHora = '';
    if ($conHora) {
        $_textoHora = date("H:i:s");
    }
    $_texto = "$_diaSemana $_dia de $_mes de $_ano $_textoHora";
    return $_texto;
}

function principio_semana($semana_inicial)
{
    $unix = date("U"); 
    switch ($semana_inicial) 
    {        
        case 0:
            $dia = 518400;
        break;
        case 1:
            $dia = 0;
        break;
        case 2:
            $dia = 86400;
        break;
        case 3:
            $dia = 172800;
        break;
        case 4:
            $dia = 259200;
        break;
        case 5:
            $dia = 345600;
        break;
        case 6:
            $dia = 432000;
        break;
    }
    $inicio_semana = ($unix - $dia); 
    $lunes_pasado = date("j-n-Y",$inicio_semana); 
    return $lunes_pasado;
}

function formato_hora($hora)
{
    switch ($hora) 
    {        
        case 0:
            $descripcion_hora = "7:00 AM - 8:00 AM";
        break;
        case 1:
            $descripcion_hora = "8:00 AM - 9:00 AM";
        break;
        case 2:
            $descripcion_hora = "9:00 AM - 10:00 AM";
        break;
        case 3:
            $descripcion_hora = "10:00 AM - 11:00 AM";
        break;
        case 4:
            $descripcion_hora = "11:00 AM - 12:00 M";
        break;
        case 5:
            $descripcion_hora = "12:00 M - 1:00 PM";
        break;
        case 6:
            $descripcion_hora = "1:00 PM - 2:00 PM";
        break;
        case 7:
            $descripcion_hora = "2:00 PM - 3:00 PM";
        break;
        case 8:
            $descripcion_hora = "3:00 PM - 4:00 PM";
        break;
        case 9:
            $descripcion_hora = "4:00 PM - 5:00 PM";
        break;
        case 10:
            $descripcion_hora = "5:00 PM - 6:00 PM";
        break;
    }
    return $descripcion_hora;
}

function formato_hora_cita($hora)
{
    switch ($hora) 
    {        
        case 0:
            $descripcion_hora = "7:00 AM";
        break;
        case 1:
            $descripcion_hora = "7:30 AM";
        break;
        case 2:
            $descripcion_hora = "8:00 AM";
        break;
        case 3:
            $descripcion_hora = "8:30 AM";
        break;
        case 4:
            $descripcion_hora = "9:00 AM";
        break;
        case 5:
            $descripcion_hora = "9:30 AM";
        break;
        case 6:
            $descripcion_hora = "10:00 AM";
        break;
        case 7:
            $descripcion_hora = "10:30 AM";
        break;
        case 8:
            $descripcion_hora = "11:00 AM";
        break;
        case 9:
            $descripcion_hora = "11:30 AM";
        break;
        case 10:
            $descripcion_hora = "12:00 M";
        break;
        case 11:
            $descripcion_hora = "12:30 PM";
        break;
        case 12:
            $descripcion_hora = "1:00 PM";
        break;
        case 13:
            $descripcion_hora = "1:30 PM";
        break;
        case 14:
            $descripcion_hora = "2:00 PM";
        break;
        case 15:
            $descripcion_hora = "2:30 PM";
        break;
        case 16:
            $descripcion_hora = "3:00 PM";
        break;
        case 17:
            $descripcion_hora = "3:30 PM";
        break;
        case 18:
            $descripcion_hora = "4:00 PM";
        break;
        case 19:
            $descripcion_hora = "4:30 PM";
        break;
        case 20:
            $descripcion_hora = "5:00 PM";
        break;
        case 21:
            $descripcion_hora = "5:30 PM";
        break;
        case 22:
            $descripcion_hora = "6:00 PM";
        break;
        case 23:
            $descripcion_hora = "6:30 PM";
        break;
        case 24:
            $descripcion_hora = "7:00 PM";
        break;
    }
    return $descripcion_hora;
}

function listaHoras()
{
    $listaHoras = array();
    $listaHoras[0] = "7:00 AM";
    $listaHoras[1] = "7:30 AM";
    $listaHoras[2] = "8:00 AM";
    $listaHoras[3] = "8:30 AM";
    $listaHoras[4] = "9:00 AM";
    $listaHoras[5] = "9:30 AM";
    $listaHoras[6] = "10:00 AM";
    $listaHoras[7] = "10:30 AM";
    $listaHoras[8] = "11:00 AM";
    $listaHoras[9] = "11:30 AM";
    $listaHoras[10] = "12:00 M";
    $listaHoras[11] = "12:30 PM";
    $listaHoras[12] = "1:00 PM";
    $listaHoras[13] = "1:30 PM";
    $listaHoras[14] = "2:00 PM";
    $listaHoras[15] = "2:30 PM";
    $listaHoras[16] = "3:00 PM";
    $listaHoras[17] = "3:30 PM";
    $listaHoras[18] = "4:00 PM";
    $listaHoras[19] = "4:30 PM";
    $listaHoras[20] = "5:00 PM";
    $listaHoras[21] = "5:30 PM";
    $listaHoras[22] = "6:00 PM";
    $listaHoras[23] = "6:30 PM";
    $listaHoras[24] = "7:00 PM";
    return $listaHoras;
}

function primerDiaMes()
{
    $fecha = new DateTime();
    $fecha->modify('first day of this month');
    return $fecha->format('d/m/Y');
}

function ultimoDiaMes()
{
    $fecha = new DateTime();
    $fecha->modify('last day of this month');
    return $fecha->format('d/m/Y');
}

function calculaEdad( $fechaActual ) {
    list($Y,$m,$d) = explode("-",$fechaActual);
    $edad = (date("md") < $m.$d ? date("Y")-$Y-1 : date("Y")-$Y);
    switch($edad) {
        case 0:
            $fechainicial = new DateTime($fechaActual);
            $fechafinal = new DateTime('NOW');
            $diferencia = $fechainicial->diff($fechafinal);
            $meses = ( $diferencia->y * 12 ) + $diferencia->m;
            $desc_edad = $meses." meses";
        break;
        case 1:
            $desc_edad = $edad." año";
        break;
        case $edad > 20:
            $desc_edad = "";
        break;
        default:
            $desc_edad = $edad." años";
        break;
    }
    return $desc_edad;
}

function descripcionFechaHoras() {
        $desc_horas = array();
        $hora1 = 7;
        $hora2 = '00';
        for($i=0;$i<=24;$i++) {
            if($hora1 == 12 && $hora2 == '00') {
                $m = 'M';
            } else {
                $m = ($i < 12) ? 'AM' : 'PM';
            }
            if($hora1 > 12) {
                $hora1 = $hora1 - 12;
            }
            if(($hora1 == 12 && $hora2 == '30') || ($hora1 == 1 && $hora2 == '00')) {
                $m = 'PM';
            }
            $desc_horas[$i] = $hora1.':'.$hora2.' '.$m;
            if($hora2 == '30') {
                ++$hora1;
                $hora2 = '00';
            } else {
                $hora2 = '30';
            }
            if($hora1 > 12) {
                $hora1 = $hora1 - 12;
            }
            $desc_horas[$i] .= ' - '.$hora1.':'.$hora2.' '.$m;
        }
        return $desc_horas;
    }
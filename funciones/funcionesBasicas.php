<?php
function esVacio($valor) {
    if ($valor == "" || is_null($valor))
        return true;
    return false;
}

function esVacioOCero($valor) {
    if ($valor == "" || is_null($valor)|| $valor == 0)
        return true;
    return false;
}

function quitarPuntos($numero)
{
	$numero = str_replace('"','', $numero);
	$numero = str_replace(':','', $numero); 
	$numero = str_replace('.','', $numero); 
	$numero = str_replace(',','', $numero); 
	$numero = str_replace(';','', $numero); 
	return $numero;
}

function quitarTildes($cadena) {
    $no_permitidas= array ("á","é","í","ó","ú","Á","É","Í","Ó","Ú","ñ","À","Ã","Ì","Ò","Ù","Ã™","Ã ","Ã¨","Ã¬","Ã²","Ã¹","ç","Ç","Ã¢","ê","Ã®","Ã´","Ã»","Ã‚","ÃŠ","ÃŽ","Ã”","Ã›","ü","Ã¶","Ã–","Ã¯","Ã¤","«","Ò","Ã","Ã„","Ã‹");
    $permitidas= array ("a","e","i","o","u","A","E","I","O","U","n","N","A","E","I","O","U","a","e","i","o","u","c","C","a","e","i","o","u","A","E","I","O","U","u","o","O","i","a","e","U","I","A","E");
    $texto = str_replace($no_permitidas, $permitidas ,$cadena);
    return $texto;
}

function mayusculas($variable) {
    $variable = strtr(strtoupper($variable),"àèìòùáéíóúçñäëïöü","ÀÈÌÒÙÁÉÍÓÚÇÑÄËÏÖÜ");
    return $variable;
}

function minusculas($variable) {
    $variable = strtr(strtolower($variable),"ÀÈÌÒÙÁÉÍÓÚÇÑÄËÏÖÜ","àèìòùáéíóúçñäëïöü");
    return $variable;
}

function printR($var) {
    echo '<pre>';
    die(print_r($var));
    echo '</pre>';
}

function printVar($var, $html = false) {
    ob_start();
    var_dump($var);
    $_dump = ob_get_clean();
    if ($html) {
        $_dump = nl2br(str_replace("  ", "&nbsp;&nbsp;", htmlentities($_dump)));
    }
    return $_dump;
}

function obtenerExtension($archivo) {
    $arreglo = explode(".", $archivo);
    if (count($arreglo) > 1)
        return $arreglo[count($arreglo) - 1];
    return "";
}

function validarExtension($extension){
    $extension = strip_tags(strtolower($extension));
    if(strcmp(strtolower($extension),"exe") == 0 || strcmp(strtolower($extension),"bat") == 0 || 
        strcmp(strtolower($extension),"com") == 0 || strcmp(strtolower($extension),"pif") == 0 || 
        strcmp(strtolower($extension),"scr") == 0 || strcmp(strtolower($extension),"php") == 0 || 
        strcmp(strtolower($extension),"asp") == 0 || strcmp(strtolower($extension),"aspx") == 0 || 
        strcmp(strtolower($extension),"jar") == 0 || strcmp(strtolower($extension),"jad") == 0 || 
        strcmp(strtolower($extension),"jsp") == 0)
    {
        return false;
    }
    else
    {
        return true;
    }
}

function validarExtensionImagen($extension){
    $extension = strip_tags(strtolower($extension));
    if(strcmp(strtolower($extension),"jpg") == 0 || strcmp(strtolower($extension),"jpeg") == 0 || 
        strcmp(strtolower($extension),"gif") == 0 || strcmp(strtolower($extension),"png") == 0 || 
        strcmp(strtolower($extension),"bmp") == 0 || strcmp(strtolower($extension),"ai") == 0 || 
        strcmp(strtolower($extension),"psd") == 0)
    {
        return true;
    }
    else
    {
        return false;
    }
}

function validarExtensionDocumento($extension){
    $extension = strip_tags(strtolower($extension));
    if(strcmp(strtolower($extension),"doc") == 0 || strcmp(strtolower($extension),"docx") == 0 || 
        strcmp(strtolower($extension),"xls") == 0 || strcmp(strtolower($extension),"xlsx") == 0 || 
        strcmp(strtolower($extension),"pdf") == 0 || strcmp(strtolower($extension),"ppt") == 0 || 
        strcmp(strtolower($extension),"pptx") == 0)
    {
        return true;
    }
    else
    {
        return false;
    }
}

function esCorreo($direccion)
{
   $Sintaxis='#^[\w.-]+@[\w.-]+\.[a-zA-Z]{2,6}$#';
   if(preg_match($Sintaxis,$direccion))
      return true;
   else
     return false;
}

function horas()
{
   $horas = array();
   $horas['08:00 AM'] = '08:00 AM';
   $horas['09:00 AM'] = '09:00 AM';
   $horas['10:00 AM'] = '10:00 AM';
   $horas['11:00 AM'] = '11:00 AM';
   $horas['12:00 PM'] = '12:00 PM';
   $horas['01:00 PM'] = '01:00 PM';
   $horas['02:00 PM'] = '02:00 PM';
   $horas['03:00 PM'] = '03:00 PM';
   $horas['04:00 PM'] = '04:00 PM';
   $horas['05:00 PM'] = '05:00 PM';
   $horas['06:00 PM'] = '06:00 PM';
   
   return $horas;
   
}

function dias() {
    $dias = array();
    $dias[1] = 'LUNES';
    $dias[2] = 'MARTES';
    $dias[3] = 'MIÉRCOLES';
    $dias[4] = 'JUEVES';
    $dias[5] = 'VIERNES';
    $dias[6] = 'SÁBADO';
    $dias[7] = 'DOMINGO';
    return $dias;
}

function meses() {
    $meses = array();
    $meses[1] = 'ENERO';
    $meses[2] = 'FEBRERO';
    $meses[3] = 'MARZO';
    $meses[4] = 'ABRIL';
    $meses[5] = 'MAYO';
    $meses[6] = 'JUNIO';
    $meses[7] = 'JULIO';
    $meses[8] = 'AGOSTO';
    $meses[9] = 'SEPTIEMBRE';
    $meses[10] = 'OCTUBRE';
    $meses[11] = 'NOVIEMBRE';
    $meses[12] = 'DICIEMBRE';
    return $meses;
}

function anios($inicio = null) {
    $anios = array();
    $anio_final = (int)date ("Y");
    $anio_final++;
    $anio_inicial = !esVacioOCero($inicio) ? $inicio : (int)date ("Y");
    for($i=$anio_inicial; $i<=$anio_final; $i++) {
       $anios[$i] = $i; 
    }
    return $anios;
}

function encriptar($cadena){
    $llave = 'encoded';
    $encriptar = base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_256, md5($llave), $cadena, MCRYPT_MODE_CBC, md5(md5($llave))));
    return $encriptar;
 
}
 
function desencriptar($cadena){
     $llave = 'encoded';
     $desencriptar = rtrim(mcrypt_decrypt(MCRYPT_RIJNDAEL_256, md5($llave), base64_decode($cadena), MCRYPT_MODE_CBC, md5(md5($llave))), "\0");
    return $desencriptar;
}

function limpiarInput($input) {
 
    $search = array(
      '@<script[^>]*?>.*?</script>@si',   // Elimina javascript
      '@<[\/\!]*?[^<>]*?>@si',            // Elimina las etiquetas HTML
      '@<style[^>]*?>.*?</style>@siU',    // Elimina las etiquetas de estilo
      '@<![\s\S]*?--[ \t\n\r]*>@'         // Elimina los comentarios multi-línea
    );
    $output = preg_replace($search, '', $input);
    return $output;
  }
 
function evitarInyeccion($input) {
    $output = stripslashes($input);
    $output  = limpiarInput($input);
    return $output;
}

function generarCodigo($longitud = 10)
{
    $codigo = "";
    $caracteres="abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
    $max = strlen($caracteres)-1;
    for($i=0;$i < $longitud;$i++)
    {
        $codigo .= $caracteres[rand(0,$max)];
    }
    return $codigo;
}

function linkVenta($precio_pleno, $porcentaje) {
    return "<div id='promocion' class='promocion'>-".$porcentaje." %</div> Precio anterior <strike>$".$precio_pleno."</strike>";
}

function obtenerDescripcionHoras($hora) {
    define("HORAS", 24);
    $desc_horas = "";
    $hora1 = 7;
    $hora2 = '00';
    for($i=0;$i<=HORAS;$i++) {
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
        $desc_horas = ' - '.$hora1.':'.$hora2.' '.$m;
        if($hora == $i) {
            return $desc_horas;
        }
        if($hora2 == '30') {
            ++$hora1;
            $hora2 = '00';
        } else {
            $hora2 = '30';
        }
        if($hora1 > 12) {
            $hora1 = $hora1 - 12;
        }
        
    }
}
    

function esProduccion() {
    $fp = fopen("petfocus.ini", "r");
    $produccion = false;
    while (!feof($fp)){
        $servidor = fgets($fp);
        if(strcmp($servidor, "PRODUCCIONPETFOCUS") == 0) {
            $produccion = true;
        }
    }
    fclose($fp);
    return $produccion;
}

function linkManual($id_manual = 0) {
    $manual = "formatos/manuales/".$id_manual.".pdf";
    if(file_exists($manual)) {
        $manual = "formatos/manuales/".$id_manual.".pdf";
    } else {
        $manual = "formatos/manual.pdf";
    }
    $manual = "<div style='float: right; padding-right: 5px;'><a href='$manual' target='_blank'>
       <div class='tooltips' align='center'><input type='image' src='imagenes/interrogacion.png' width='40' height='40'></input>
        <div style='block: right;' >Manual de usuario</div></div></a></div>";
    return $manual;
    
}
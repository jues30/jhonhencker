<?php 
error_reporting(E_ALL & ~E_NOTICE);
include("funciones/geoiploc.php"); 
  //$ip = $_SERVER["REMOTE_ADDR"];
  $ip = '200.122.253.129';

echo "Tu dirección IP es: (".$ip.") <br>";
echo "Tu País es: (";
echo getCountryFromIP($ip, ' NamE');
echo ") - (";
echo getCountryFromIP($ip, 'code');
echo ")";
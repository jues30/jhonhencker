<?php
session_start();
if(isset($_SESSION["autenticado"])) {
    if($_SESSION["autenticado"] !== sha1("SI")) {
        header("Location: index.php");
        exit();
    }
}
if(empty($_SESSION["autenticado"])) {
    header("Location: index.php");
    exit();
}
if(empty($_SESSION["Tipos"])) {
    header("Location: index.php");
    exit();
}

<?php
$host = "http://201.241.184.59/";
$user = "root";
$pw = "";
$bd = "gestionusuario";

$link = mysql_connect($host, $user, $pw)or die ("Ups! Falló conexión: " . mysql_error());
mysql_select_db($bd)or die ("Ouch! Error al seleccionar la BD: " . mysql_error());

?>
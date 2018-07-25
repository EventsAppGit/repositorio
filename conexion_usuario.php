<?php

$servername = "rds-mysql-eventapp.c15lh7ap1emq.eu-west-3.rds.amazonaws.com";
$username = "MasterUserName";
$password = "07263694h";


$conexion = mysqli_connect($db_host, $username, $db_contra);
if (!$conexion) {
die('No es pot conectar: ' . mysql_error());
}

//mysql_close($conexion);

?>
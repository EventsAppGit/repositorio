<?php
/*
$db_host="localhost";
$db_nombre="eventapp";
$db_usuario="root";
$db_contra="";
*/

$servername="rds-mysql-eventapp.c15lh7ap1emq.eu-west-3.rds.amazonaws.com:3306";
$dbname="EventsActividades";
$username="MasterUserName";
$password="07263694h";

$conexion = mysqli_connect($servername, $username, $password);
if (!$conexion) {
die('No es pot conectar: ' . mysql_error());
}

//mysql_close($conexion);

?>
<?php
/*
$db_host="localhost";
$db_nombre="eventapp";
$db_usuario="root";
$db_contra="";
*/

$db_host="rds-mysql-eventapp.c15lh7ap1emq.eu-west-3.rds.amazonaws.com:3306";
$db_nombre="EventsActividades";
$db_usuario="MasterUserName";
$db_contra="07263694h";

$conexion = mysqli_connect($db_host, $db_usuario, $db_contra);
if (!$conexion) {
die('No es pot conectar: ' . mysql_error());
}
//echo '<script>console.log("Connected successfully")</script>';

//mysql_close($conexion);

?>
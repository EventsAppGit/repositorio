<?php

?><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title></title>
    <meta name="viewport" content="width=device-width, user-scalable=no">
</head>
<body>
<?php 

    session_start();

    if (!isset($_SESSION["usuario"])){
    
    header("location:login.php");

    }
    


?>
<?php
//$insert_id_actividad=$_GET["id_act"];
//$id_propietario_user = $_GET[""];
$insert_nombre_actividad=$_GET["nom_act"];
$insert_resumen_actividad=$_GET["res_act"];
$insert_localizacion_actividad=$_GET["loc_act"];
$insert_fecha_actividad=$_GET["fec_act"];
$insert_descripcion_actividad=$_GET["des_act"];
$insert_imagen_actividad=$_GET["ima_act"];
require("datos_conexion.php");

//$conexion=mysqli_connect($db_host, $db_usuario, $db_contra/*, $db_nombre*/);

$conexion = mysqli_connect($servername, $username, $password);
if (!$conexion) {
die('No es pot conectar: ' . mysql_error());
}
echo '<script>console.log("Connected successfully")</script>';

if(mysqli_connect_errno()){
    echo "Fallo al conectar con la BBDD";
    exit();  
};

mysqli_select_db($conexion, $dbname) or die ("No se encuentra la BBDD");

mysqli_set_charset($conexion, "utf8");



$query="INSERT INTO actividades (nombre, resumen, localizacion, fecha, descripcion, imagen) VALUES ('$insert_nombre_actividad','$insert_resumen_actividad', '$insert_localizacion_actividad', '$insert_fecha_actividad', '$insert_descripcion_actividad', '$insert_imagen_actividad')";

$resultados=mysqli_query($conexion, $query);

if($resultados==false){
echo "error en la consulta";
} else{
echo "registro guardado";

//echo "<table><tr><td>$insert_id_actividad<td><tr><table>";
echo "<table><tr><td>$insert_nombre_actividad<td><tr><table>";
echo "<table><tr><td>$insert_resumen_actividad<td><tr><table>";
echo "<table><tr><td>$insert_localizacion_actividad<td><tr><table>";
echo "<table><tr><td>$insert_fecha_actividad<td><tr><table>";
echo "<table><tr><td>$insert_descripcion_actividad<td><tr><table>";
};

mysqli_close($conexion); //cierra la conexion de la bbdd

?>
</body>
</html>
<?php

require("datos_conexion.php");

//$conexion=mysqli_connect($db_host, $db_usuario, $db_contra/*, $db_nombre*/);

$conexion = mysqli_connect($servername, $username, $password);
if (!$conexion) {
die('No es pot conectar: ' . mysql_error());
}
//echo '<script>console.log("Connected successfully")</script>';


if(mysqli_connect_errno()){
    echo "Fallo al conectar con la BBDD";
    exit();  
};

mysqli_select_db($conexion, $dbname) or die ("No se encuentra la BBDD");

mysqli_set_charset($conexion, "utf8");

//$query="SELECT * FROM actividades";
$query="SELECT * FROM ACTIVIDADES";

$resultados=mysqli_query($conexion, $query);//crea una tabla virtual de los datos

$to_encode = array();
while($row = mysqli_fetch_assoc($resultados)) {
  $to_encode[] = $row;
}

$myJSON = json_encode($to_encode);

echo $myJSON;

mysqli_close($conexion); //cierra la conexion de la bbdd
?>

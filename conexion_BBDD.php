<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title></title>
</head>
<body>


<?php

require("datos_conexion.php");

$conexion=mysqli_connect($db_host, $db_usuario, $db_contra/*, $db_nombre*/); //se puede prescindir del nombre de a BD

if (mysqli_connect_errno())
{
	echo ("fallo al conectar");
    echo "<script>console.log( 'Debug Objects: " . $output . "' );</script>";
    exit();
}

mysqli_select_db($conexion, $db_nombre) or die("No se encuentra la BBDD"); //descriptivo

mysqli_set_charset($conexion,"utf8"); //corrige los caracteres "acentos ..etc"


$consulta="SELECT * FROM PRODUCTOS WHERE PAISDEORIGEN='ESPANA'";   //SELECT NOMBRE, NIF, EDAD FROM DATOSPERSONALES -> nombre de la tabla //sentencia SQL

$resultados=mysqli_query($conexion, $consulta);

while ($fila=mysqli_fetch_assoc($resultados)){

echo "<table><tr><td>";

echo $fila["CODIGOARTICULO"]."</td><td>";
echo $fila["NOMBREARTICULO"]."</td><td>";
echo $fila["SECCION"]."</td><td>";
echo $fila["IMPORTADO"]."</td><td>";
echo $fila["PRECIO"]."</td><td>";
echo $fila["PAISDEORIGEN"]."</td><td></tr></table>";
};

mysqli_close($conexion); //cierra la conexion de la bbdd

?>











</body>
</html>

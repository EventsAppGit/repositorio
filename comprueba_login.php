<?php

try{

$base = new PDO("mysql: host=localhost; dbname=eventapp", "root", "");

$base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$sql="SELECT * FROM REGISTRO WHERE USUARIO= :login AND PASSWORD= :password";

$resultado=$base->prepare($sql);

$login=htmlentities (addslashes($_POST["login"]));
$password=htmlentities (addslashes($_POST["password"]));

$resultado->bindValue(":login", $login);
$resultado->bindValue(":password", $password);

$resultado->execute();

$numero_registro = $resultado->rowCount();

if ($numero_registro !=0){
	//echo "<h2>adelante</h2>";

    session_start();

    $_SESSION["usuario"]=$_POST["login"];

    header("location:usuarios_registrados.php");
}else{
    header("location:login.php");
}


} catch(Exception $e){

die ("Error: " . $e->getMessage());

}

?>
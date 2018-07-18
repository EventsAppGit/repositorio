<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
<style>

h1{
	text-align:center;
	color:#00F;
	
	width:50%;
	margin:auto;
	
	
}

table{
	
	padding:20px 50px;
	margin-top:50px;
}

body{
	
}


</style>
</head>

<body>
<?php 

    session_start();

    if (!isset($_SESSION["usuario"])){
    
    header("location:login.php");

    }
    


?>
<h1>Registre d'EVENTS <br> Prova funcional </h1>
<form name="form1" method="get" action="Insertar.php">
  <table border="0" align="center">
    <tr>
      <td>NOMBRE ACTIVDAD</td>
      <td><label for="nom_act"></label>
      <input type="text" name="nom_act" id="nom_act" autocomplete="off"></td>
    </tr>
    <tr>
      <td>RESUMEN ACTIVIDAD</td>
      <td><label for="res_act"></label>
      <input type="text" name="res_act" id="res_act" autocomplete="off"></td>
    </tr>
    <tr>
      <td>LOCALIZACIÓN</td>
      <td><label for="loc_act"></label>
      <input type="text" name="loc_act" id="loc_act" autocomplete="off"></td>
    </tr>
    <tr>
      <td>FECHA</td>
      <td><label for="fec_act"></label>
      <input type="text" name="fec_act" id="fec_act" autocomplete="off"></td>
    </tr>
    <tr>
      <td>DESCRIPCION</td>
      <td><label for="des_act"></label>
      <textarea type="text" name="des_act" id="des_act" autocomplete="off"></textarea></td>
    </tr>
    <tr>
      <td>IMAGEN</td>
      <td><label for="ima_act"></label>
      <input type="text" name="ima_act" id="ima_act" autocomplete="off"></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td align="center"><input type="submit" name="enviar" id="enviar" value="Enviar"></td>
      <td align="center"><input type="reset" name="Borrar" id="Borrar" value="Borrar"></td>
    </tr>
  </table>
</form>
</body>
</html>
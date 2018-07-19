<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title></title>
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <link href="css/general.css" rel="stylesheet" type="text/css" />
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="javascript/general.js"></script>
    <script src="javascript/ajustar.js"></script>
    <script src="javascript/funcional.js"></script>
</head>
<body>
<?php

require("datos_conexion.php");

$conexion=mysqli_connect($db_host, $db_usuario, $db_contra /*$db_nombre*/);

//$conexion = mysqli_connect($_SERVER['RDS_HOSTNAME'], $_SERVER['RDS_USERNAME'], $_SERVER['RDS_PASSWORD'], $_SERVER['RDS_DB_NAME'], $_SERVER['RDS_PORT']);

if(mysqli_connect_errno()){
    echo "Fallo al conectar con la BBDD";
    exit();  
};

mysqli_select_db($conexion, $db_nombre) or die ("No se encuentra la BBDD");

mysqli_set_charset($conexion, "utf8");

$query="SELECT * FROM actividades";

$resultados=mysqli_query($conexion, $query);//crea una tabla virtual de los datos

$to_encode = array();
while($row = mysqli_fetch_assoc($resultados)) {
  $to_encode[] = $row;
}

?> 
<script>
        var lista_eventos = <?php echo json_encode($to_encode);?>;
        obj = JSON.toString(lista_eventos);
</script>
<div class="header">
        <div class="atras_principal">
            <div id="atras_p">
                atras
            </div>
        </div>
    </div>
<div class="contenedor">
        <div class="contenido">

        </div>  
</div>
<div class="footer">
        <div id="home_butt">
            <div>
                <img src="images/home.svg" alt="Alternate Text" />
            </div>
        </div>
        <div id="find_butt">
            <div>
                <img src="images/busqueda.svg" alt="Alternate Text" />
            </div>
        </div>
        <div style="display: none;">
            <div>
                <img src="images/notificacion.svg" alt="Alternate Text" />
            </div>
        </div>
        <div style="display: none;">
            <div>
                <img src="images/perfil.svg" alt="Alternate Text" />
            </div>
        </div>
    </div>

<?php
mysqli_close($conexion); //cierra la conexion de la bbdd
?>
</body>
</html>
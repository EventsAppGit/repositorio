<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    
    <title></title>
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="javascript/registrado.js"></script>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
<?php 

    session_start();

    if (!isset($_SESSION["usuario"])){
    
    header("location:login.php");

    }
    


?>

    <h1>bienvenidos usuarios</h1>
    <p>Info solo usuarios registradossssssssss</p>
    
    <div>Apreta <p id="formulario" style="cursor: pointer; color: blue;">AQUÍ<p> para ir al formulario</div>


</body>
</html>

<?php

include("Concesionario.php");

Compra_vehiculo::descuento_gobierno();

$compra_Antonio = new Compra_vehiculo("Compacto");

$compra_Antonio->Climatizador();

$compra_Antonio->Tapiceria("");

echo $compra_Antonio->Precio_final() ,"<br>";

$semana[]="Lunes";
$semana[]="Martes";
$semana[]="Miercoles";
$semana[]="Jueves";

for ($i = 0; $i <count($semana); $i++)    //count cuenta los elementos del array
{
	echo $semana[$i]. "<br>";
}


echo "<br>", $semana[1];

$meses=array("Enero","Febrero","Marzo");

echo "<br>", $meses[2];

$datos=array("Nombre"=>"Albert","Apellido"=>"Ortes"); //clave => Valor

$datos["Pais"]="Espanya"; //Añadir clave y valor nuevos en un array

foreach($datos as $clave=>$valor){//recorre todo el array

echo "<br>", "A $clave le corresponde $valor <br>";

}



echo "<br>","<br>";

//Array multidimensional
$alimentos=array("fruta"=>array("tropical"=>"kiwi",
                                "citrico"=>"mandarina",
                                "otro"=>"manzana"),
                 "leche"=>array("animal"=>"vaca",
                                "vegetal"=>"coco"),
                 "carne"=>array("vacuno"=>"lomo",
                                "porcino"=>"pata")
);

//echo $alimentos["carne"]["vacuno"];

foreach($alimentos as $clave_alim=>$alim){  //clave_alim "fruta leche carne, alim lo demas

echo "$clave_alim:<br>";

while(list($clave,$valor)=each($alim))
{
echo "$clave=$valor <br>";
}
echo "<br>";
}


?>
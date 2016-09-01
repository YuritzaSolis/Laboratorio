<?php
$a = $_REQUEST['Lado1'];
$b = $_REQUEST['Lado2'];

if ($_REQUEST['operador'] =="Area"){
	$r_Area = calcular ($a, $b);
	echo "El area es: $r_Area";
}
function calcular ($a,$b){
	$Area =$a*$b;
	return $Area;
}
?>
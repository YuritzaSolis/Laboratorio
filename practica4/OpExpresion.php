<?php
$a = $_REQUEST['valor1'];
$b = $_REQUEST['valor2'];
$c = $_REQUEST['valor3'];

if ($_REQUEST['operador'] =="expresion"){
	$r_expresion = expresar ($a, $b, $c);
	echo "La expresion es: $r_expresion";
}
function expresar ($a, $b, $c){
	$expresion = ($a+7*$c)/($b+2-$a)+(2*$b);
	return $expresion;
}
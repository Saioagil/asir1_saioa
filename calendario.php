<?php
function mes($n){
	$a=[
	['Mes'=>'Enero',
	'Días'=>'31',
	'Estacion'=>'Verano'],
	['Mes'=>'Febrero',
	'Días'=>'28 ò 29',
	'Estacion'=>'Verano'],
	['Mes'=>'Marzo',
	'Dias'=>'31',
	'Estacion'=>'Primavera'],
	['Mes'=>'Abril',
	'Días'=>'30',
	'Estacion'=>'Otoño'],
	['Mes'=>'Mayo',
	'Días'=>'31',
	'Estacion'=>'Otoño'],
	['Mes'=>'Junio',
	'Días'=>'30',
	'Estacion'=>'Verano'],
	['Mes'=>'Julio',
	'Días'=>'31',
	'Estacion'=>'Verano'],
	['Mes'=>'Agosto',
	'Días'=>'31',
	'Estacion'=>'Verano'],
	['Mes'=>'Septiembre',
	'Días'=>'30',
	'Estacion'=>'Verano'],
	['Mes'=>'Octubre',
	'Días'=>'31',
	'Estacion'=>'Invierno'],
	['Mes'=>'Noviembre',
	'Días'=>'30',
	'Estacion'=>'Invierno'],
	['Mes'=>'Diciembre',
	'Días'=>'31',
	'Estacion'=>'Invierno']
	];
	$r=null;
	$r=$r.'Mes ='.' '. $a[$n-1]['Mes'].'<br>';
	$r=$r.'Días= '.' '.$a[$n-1]['Días'].'<br>';
	$r=$r.'Estacion='.' '.$a[$n-1]['Estacion'].'<br>';
	'<br>';
	return $r;
	
} 
echo mes (11).'<br>';
echo mes (1).'<br>';
echo mes (5).'<br>';
?>
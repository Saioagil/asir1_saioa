<?php
function mes($n){
	$a=[
	['Mes'=>'Enero',
	'Días'=>'31',
	'Estacion'=>'Invierno'],
	['Mes'=>'Febrero',
	'Días'=>'28 ò 29',
	'Estacion'=>'Invierno'],
	['Mes'=>'Marzo',
	'Dias'=>'31',
	'Estacion'=>'Primavera'],
	['Mes'=>'Abril',
	'Días'=>'30',
	'Estacion'=>'Primavera'],
	['Mes'=>'Mayo',
	'Días'=>'31',
	'Estacion'=>'Primavera'],
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
	'Estacion'=>'Otoño'],
	['Mes'=>'Octubre',
	'Días'=>'31',
	'Estacion'=>'Otoño'],
	['Mes'=>'Noviembre',
	'Días'=>'30',
	'Estacion'=>'Otoño'],
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
echo 'Noviembre tiene 30 dias y la estación es Otoño','<br>';
echo mes (11),'<br>';
echo 'Enero tiene 31 dias y la estacion es Invierno','<br>';
echo mes (1),'<br>';
echo 'Mayo tiene 31 dias y la estacion es Primavera','<br>';
echo mes (5),'<br>';
echo 'Julio tiene 31 dias y la estacion es Verano','<br>';
echo mes (7),'<br>';

?>
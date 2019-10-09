<?php

$meses = [
'Enero',
'Febrero',
'Marzo',
'Abril',
'Mayo',
'Junio',
'Julio',
'Agosto',
'Septiembre',
'Octubre',
'Noviembre',
'Diciembre',
];
	  	
for($a=0;$a<=11;$a++){
echo $meses[$a];
	echo "<br>";	
}
	echo "<br>";
foreach($meses as $mes){
	echo $mes;
	echo "<br>";
}
?>
<?php

function longitud($a,$b,$c){
	
	$r="Escaleno";
	if($a==$b or $b==$c or $c==$a)
		$r="Isósceles";
	if($a==$b and $b==$c)
		$r="Equilatero";

return $r;}
echo 'El triángulo va a ser Escaleno;','<br>';
echo longitud(1,2,3),'<br>';
echo '<br>';
echo 'El triángulo va a ser Equilatero;','<br>';
echo longitud(2,2,2),'<br>';
echo '<br>';
echo 'El triángulo va a ser Isosceles;','<br>';
echo longitud(1,1,2),'<br>';
echo '<br>';
echo 'El triángulo va a ser Isosceles;','<br>';
echo longitud(1,2,1),'<br>';
echo '<br>';
echo 'El triángulo va a ser Equilatero;','<br>';
echo longitud(3,3,3),'<br>';
echo '<br>';
echo 'El triángulo va a ser Isosceles;','<br>';
echo longitud(1,2,2),'<br>';
echo '<br>';
echo 'El triángulo va a ser Escaleno;','<br>';
echo longitud(1,3,2),'<br>';

?>
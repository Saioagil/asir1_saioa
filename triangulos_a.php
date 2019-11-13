<?php

function longitud($a,$b,$c){
	
	$r="Escaleno";
	if($a==$b or $b==$c or $c==$a)
		$r="Isósceles";
	if($a==$b and $b==$c)
		$r="Equilatero";

return $r;}

echo longitud(1,2,3);
echo '<br>';
echo longitud(2,2,2);
echo '<br>';
echo longitud(1,1,4);
echo '<br>';

?>
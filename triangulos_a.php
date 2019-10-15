<?php

function longitud($a,$b,$c){
	
	$r="Escaleno";
	if($a==$b or $b==$c or $c==$a)
		$r="Isósceles";
	if($a==$b and $b==$c)
		$r="Equilatero";
	
echo $r;
echo '<br>';
}
longitud(1,2,3);
longitud(2,2,2);
longitud(1,1,4);

?>
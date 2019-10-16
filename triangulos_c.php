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

function angulos($a,$b,$c){

	$r="Obstusángulo";
	if($a==90 or $b==90 or $c==90)
		$r="Rectángulo";
	if($a<90 and $b<90 and $c<90)
		$r="Acutángulo";
echo $r;
echo '<br>';
}

longitud(2,5,2);
angulos(45,90,60);
echo '<br>';
longitud(1,1,1);
angulos(190,85,65);
echo '<br>';
longitud(1,2,3);
angulos(75,45,60);

?>
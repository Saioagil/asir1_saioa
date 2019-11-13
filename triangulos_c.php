<?php

function longitud($a,$b,$c){
	
	$r="Escaleno";
	if($a==$b or $b==$c or $c==$a)
		$r="Isósceles";
	if($a==$b and $b==$c)
		$r="Equilatero";
	
echo $r;
echo'<br>';
}

function angulos($a,$b,$c){

	$r="Obstusángulo";
	if($a==90 or $b==90 or $c==90)
		$r="Rectángulo";
	if($a<90 and $b<90 and $c<90)
		$r="Acutángulo";
	
echo $r;
echo'<br>';
}

function triangulo($a,$b,$c,$d,$e,$f){
	longitud($a,$b,$c);
	angulos($d,$e,$f);
}

triangulo(1,1,1,60,60,90);
echo'<br>';
triangulo(1,2,3,75,45,60);
echo'<br>';
triangulo(1,1,2,190,85,95);
?>
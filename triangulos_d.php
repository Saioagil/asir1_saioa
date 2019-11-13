<?php


function longitud($a,$b,$c){
	
	$r="Escaleno";
	if($a==$b or $b==$c or $c==$a)
		$r="Isósceles";
	if($a==$b and $b==$c)
		$r="Equilatero";
	
return $r;

}

function angulos($a,$b,$c){

	$r="Obstusángulo";
	if($a==90 or $b==90 or $c==90)
		$r="Rectángulo";
	if($a<90 and $b<90 and $c<90)
		$r="Acutángulo";
return $r;

}

function triangulo($a){
	
	longitud($a['lados'][0],$a[1],$a[2]);
	angulos($a['angulos'][0],$a[1],$a[2]);
}

triangulo(
		['lados'[1,1,1];
		'angulos'[60,60,60];]
	return $r;
echo triangulo(1,2,3,75,45,60);
?>
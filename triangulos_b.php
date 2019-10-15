<?php

function angulos($a,$b,$c){

$r="Obstusángulo";
	if($a==90 or $b==90 or $c==90)
		$r="Rectángulo";
	
	if($a<90 and $b<90 and $c<90)
		$r="Acutángulo";
echo $r;
echo '<br>';
}
angulos(90,50,190);
angulos(45,45,190);
angulos(30,30,30);
?>
	

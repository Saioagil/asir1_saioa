<?php

function angulos($a,$b,$c){

$r="Obstusángulo";
	if($a==90 or $b==90 or $c==90)
		$r="Rectángulo";
	
	if($a<90 and $b<90 and $c<90)
		$r="Acutángulo";
		
return $r;
}
echo angulos(90,50,190);
echo '<br>';
echo angulos(45,45,190);
echo '<br>';
echo angulos(30,30,30);
echo '<br>';
?>
	

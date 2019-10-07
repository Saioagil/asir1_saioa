<?php
function calcula($a,$b){
	
	$r=null;
	$r=$r.'<br/>';

	$r=$r.("Suma de $a y $b= ");
	$r=$r.($a+$b);
	$r=$r.'<br/>';
	$r=$r.'<br/>';

	$r=$r.("Resta de $a y $b= ");
	$r=$r.($a-$b);
	$r=$r.'<br/>';
	$r=$r.'<br/>';

	$r=$r.("Cociente de $a y $b= ");
	if($b!=0){
	$r=$r.($a/$b);
	$r=$r.'<br/>';
	$r=$r.'<br/>';
	}
		$r=$r.'<br/>';
	$r=$r.("Producto de $a y $b= ");
	$r=$r.($a*$b);
	$r=$r.'<br/>';
	return $r;


}
echo calcula(50,25);
echo calcula(280,0);

?>
<?php

function nota($a)

{
	$r=' Pendiente';
	
if ($a>=5)
	$r=' Aprobado';
	

if ($a>=7)
	$r=' Notable';
	
if ($a>=8.5)
	$r=' Sobresaliente';

  
return $r;
}
echo '3'.'='.nota (3).'<br>';
echo "<br>";
echo '7.8'.'='. nota (7.8).'<br>';
echo "<br>";
echo '8.8'.'='. nota (8.8).'<br>';
echo "<br>";
echo '5'.'='.nota (5).'<br>';
?>
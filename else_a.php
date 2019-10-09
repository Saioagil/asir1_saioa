<?php

function nota($a)

{
	if ($a<5){
	$r=' No apto';
	}
	
	else{ 
	$r=' Apto';
	}
	
	return $r;
}
echo '4'.'='.nota (4).'<br>';
echo "<br>";
echo '9'.'='.nota(9).'<br>';
echo "<br>";
echo '2.3'.'='.nota (2.3);

?>
<table>
<tr>
	<td>Días año</td>
	<td>Semana</td>
	<td>Fecha</td>
	<td>Día</td>
</tr>

<?php
$r=[];
for($i=1;$i<286;$i++){
	$r[]=[
	'n'=>$i,
	's'=>round($i/7)+1,
	'fecha'=>date('Y-m-d',strtotime('2019-09-09')+($i-1)*24*60*60),
	'D'=>date('D',strtotime('2019-09-09')+($i-1)*24*60*60),
	];
}

foreach($r as $f){
	echo '<tr>';
	//día año
	echo '<td>';
	echo $f['n'];
	echo '</td>';	
	//día semana
	echo '<td>';
	echo $f['s'];
	echo '</td>';
	//fecha
	echo '<td>';
	echo $f['fecha'];
	echo '</td>';	
	//día semana
	echo '<td>';
	echo $f['D'];
	echo '</td>';	
	echo '</tr>';
}
?>

</table>
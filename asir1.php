<a>saioa</a>
</br>
<a href="http://192.168.0.89/asir1_ruben/asir1.php">ruben</a>
<a hred="http://192.168.0.98/asir1_kevin/asir1.php">kevin</a>
<?php
$f=fopen('visitas.txt','a');
fwrite($f,$_SERVER['REMOTE_ADDR']."\r\n");
fclose($f)
?>$datos="La ip es:".$ip." y fecha: ".$hoy."\r\n";

<a>SaioaGil<a/>
</br>
<a href="http://192.168.0.89/Asir1_ruben/asir1.php">ruben</a>
<?php
$f=fopen('visitas.txt','a');
fwrite($f,$_SERVER['REMOTE_ADDR']."\r\n");
fclose($f)
?>

<?php
if(isset($_POST['submit']))
{$name = $_POST['name'];
 
echo "Registo completado : <b> $name </b><br><br>";
  $archivo="suscriptores.txt";
  $proceso=fopen($archivo,"a") or die("basura");
  $datos="Registro suscriptor:".$name."\r\n";
  fwrite($proceso,$datos);
  fclose($proceso);
 
}
?>

<html>
<head>
<title>Bicicleras Specialized</title>
</head>

<body bgcolor="black">
<center>
<table bgcolor="black" width="100%"  height="100%" >
<tr>
	<td width="15%"  height="100%" valign="top">
	<font color="white">
	<table border="2" width="100%" >
	<br>
			
			<tr><td><font color="white"><center>*TODO LO QUE DEBES SABER*</center></font></td></tr>
			<tr><td><font color="white"><center>-Calidad de las bicicletas asegurada.</center></font></td></tr>
			<tr><td><font color="white"><center>-Garantía de por vida.</center></font></td></tr>
			<tr><td><font color="white"><center>-Tanto para hombres como para mujeres.</center></font></td></tr>
			<tr><td><font color="white"><center>-En todos los modelos, tallas XS, S, M, L, XL, XXL.</center></font></td></tr>
			
	</table>
</font>
<br>
<br>
<font color="white" size="5">
<p>¿Quieres una <br> specialized?<br>No dudes en ponerte en contacto con nosotros!!</p>


<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">

 <br>Teléfono/Correo electrónico: 

<input type="text" name="name"><br><br>


<input type="submit" name="submit" value="Enviar"><br>

 
</font>
</form>


	</td>
	<td width="85%"  height="100%" bgcolor="#EB0A0A" > 
	<center>

	<font color="white">
	<h1><u>Bicicletas Specialized</u></h1>
	</font>
	</center>
	<center>
	<img src="specialized.jpg"  width="500"  height="230" >

	<font color="white">
	<h1><u>Diferentes modelos:</u></h1>
	<h2>-S-Works Turbo Creo SL</h2>
	<h3>Finales de 2019</h3>
	<h3>12.499,00 €</h3>
	<h2>-S-Works Roubaix - Sagan Collection.</h2>
	<h3>2018</h3>
	<h3>11.199,00 €</h3>
	<h2>--Works Roubaix - SRAM Red eTap AXS</h2>
	<h3>2007-2010</h3>
	<h3>2010-2012</h3>

	<h2>Cuarta generación</h2>
	<h3>2012- 2015</h3>
	<h3>2015- 2017</h3>
	<h2>Quinta generación</h2>
	<h3>2018- Actualidad</h3>
	
	</center>
	</td></tr>
	
</table>
</center>

</body>
</html>



<?php 
$dato001= $_SESSION['usuario_login'];
if (!isset($codigo))
 
$dbh=mysql_connect ($hostname,$username,$password) or die ('I cannot connect to the database because: ' . mysql_error());
mysql_select_db ($database); 



//Ejecutamos la sentencia SQL
$result1 = mysql_query("SELECT * FROM usuarios WHERE usuario  LIKE '$dato001'");
$result2 = mysql_query("SELECT * FROM usuarios WHERE usuario  LIKE '$dato001'");
$result3 = mysql_query("SELECT * FROM usuarios WHERE usuario  LIKE '$dato001'");
$result4 = mysql_query("SELECT * FROM usuarios WHERE usuario  LIKE '$dato001'");
      
	  

?>
<?php  while ($row=mysql_fetch_array($result1)) { $cliente1= "".$row["ag_cli"].""; }
mysql_free_result($result1)?>
<?php  while ($row=mysql_fetch_array($result2)) { $cliente2= "".$row["bus_cli"].""; }
mysql_free_result($result2)?>
<?php  while ($row=mysql_fetch_array($result3)) { $cliente3= "".$row["eli_cli"].""; }
mysql_free_result($result3)?>
<?php  while ($row=mysql_fetch_array($result4)) { $cliente4= "".$row["mod_cli"].""; }
mysql_free_result($result4)?>
<style type="text/css">
<!--
.Estilo1 {font-size: 12px}
a:link {
	text-decoration: none;
}
a:visited {
	text-decoration: none;
}
a:hover {
	text-decoration: none;
}
a:active {
	text-decoration: none;
}
-->
</style>
<link href="Level2_Verdana_Text.css" rel="stylesheet" type="text/css" />
<table width="140" border="0" cellspacing="0" bordercolor="#666600">
  <tr>
    <th width="113" bgcolor="#FFFFFF" scope="col"><a href="portada.php" target="frame"><img src="imagenes/banner_inicio.jpg" alt="Inicio" width="139" height="17" border="0" longdesc="imagenes/banner_inicio.jpg" /></a></th>
  </tr>
  <tr>
    <th bgcolor="#FFFFFF" scope="col"><div align="left"><a href="quienes.php" target="frame" class="small">Quienes Somos </a></div></th>
  </tr>
  <tr>
    <th bgcolor="#FFFFFF" scope="col"><div align="left"><a href="mision.php" target="frame" class="small">Misi&oacute;n</a></div></th>
  </tr>
  <tr>
    <th bgcolor="#FFFFFF" scope="col"><div align="left"><a href="vision.php" target="frame" class="small">Vision</a></div></th>
  </tr>
  <tr>
    <th bgcolor="#FFFFFF" scope="col"><div align="left"><a href="contactos.php" target="frame" class="small">Contactos</a></div></th>
  </tr>
  <tr>
    <th bgcolor="#FFFFFF" scope="col"><div align="left"><a href="tarifas.php" target="frame" class="small">Tarifas</a></div></th>
  </tr>
  <tr>
    <th bgcolor="#FFFFFF" class="small" scope="col"><div align="left"><a href="visualizador.php" target="frame">Reservaciones</a> ONLINE </div></th>
  </tr>
</table>

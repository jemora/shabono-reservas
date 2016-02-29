

<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
-->
</style></head>

<body>
<p>
  <?php include("buscar_cliente2.php");?>
  <br>
  <?php include("logo.php");?>
  <br>
  <?php require_once('conector/conector.php');
if (!isset($buscar))
//Conexion con la base
mysql_connect($hostname,$username,$password);

//Creamos la sentencia SQL y la ejecutamos
$sSQL="Update clientes Set  
doc2='$doc2',
  nombre='$nombre',
  apellido= '$apellido',
pais='$pais',
ciudad='$ciudad',
direccion='$direccion',
telefono='$telefono',
correo='$correo',
cliente='$cliente',
vehiculo='$vehiculo',
fecha='$fecha'
  
Where doc2='$buscar'";

mysql_db_query($database,$sSQL);

		echo ' <p align="center"><b><font face="Arial" color="#000066" size="4">El Cliente se ha Actualizado Correctamente</font></b><font color="#000066"></font></b></font></p>
<p align="center" class="Estilo2">
  <font face="Arial" size="2"> </font></p>
';		
?>&nbsp;</p>
</body>
</html>

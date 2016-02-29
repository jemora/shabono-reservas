   <?php require_once('conector/conector.php');?> 
<?
if (!isset($codigo))
 
$dbh=mysql_connect ($hostname,$username,$password) or die ('I cannot connect to the database because: ' . mysql_error());
mysql_select_db ($database); 

$result1 = mysql_query("SELECT * FROM clientes WHERE doc2  LIKE '$codigo'");
$result2 = mysql_query("SELECT * FROM clientes WHERE doc2  LIKE '$codigo'");
$result3 = mysql_query("SELECT * FROM clientes WHERE doc2  LIKE '$codigo'");
$result4 = mysql_query("SELECT * FROM clientes WHERE doc2  LIKE '$codigo'");
$result5 = mysql_query("SELECT * FROM clientes WHERE doc2  LIKE '$codigo'");
$result6 = mysql_query("SELECT * FROM clientes WHERE doc2  LIKE '$codigo'");
$result7 = mysql_query("SELECT * FROM clientes WHERE doc2  LIKE '$codigo'");
$result8 = mysql_query("SELECT * FROM clientes WHERE doc2  LIKE '$codigo'");
$result9 = mysql_query("SELECT * FROM clientes WHERE doc2  LIKE '$codigo'");
$result10 = mysql_query("SELECT * FROM clientes WHERE doc2  LIKE '$codigo'");
$result11 = mysql_query("SELECT * FROM clientes WHERE doc2  LIKE '$codigo'");
$result12 = mysql_query("SELECT * FROM clientes WHERE doc2  LIKE '$codigo'");



?>





<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
<script type="text/JavaScript">
<!--



function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}
//-->
</script>
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
.Estilo2 {	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 12px;
	color: #000000;
}
.Estilo11 {color: #666666; font-weight: bold; font-size: 12; }
.Estilo12 {color: #666666}
.Estilo14 {color: #666666; font-size: 12px; }
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
</style></head>

<body onLoad="MM_preloadImages('ver.php?titulo=<?php echo $row_rsArticulo['titulo']; ?>')">
<?php include("buscar_cliente2.php");?>
<br>
<?php include("detalles.php");?>
</body>
</html>

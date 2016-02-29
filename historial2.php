<?
require("aut_verifica.inc2.php");
$nivel_acceso=10; // Nivel de acceso para esta página.
if ($nivel_acceso <= $_SESSION['usuario_nivel']){
header ("Location: $redir?error_login=5");
exit;
}
?>
<?php require_once('conector/conector.php');?> 

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"><style type="text/css">
<!--
body,td,th {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 12px;
}
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
-->
</style>



<link href="Level2_Verdana_Text.css" rel="stylesheet" type="text/css">
</head>

<body>
<img src="imagenes/banne19.gif" width="190" height="30" /><br>
<table width="351" border="0" align="center" cellspacing="0">
  <tr>
    <td width="349"><?php include("menu_reservacion.php");?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><?php include("detalles_clientes.php");?></td>
  </tr>
  <tr>
    <td><?php include("menu_historial.php");?></td>
  </tr>
  <tr>
    <td>
	
  
  <?php 
  require_once('conector/conector.php');
if (!isset($codigo))
$usuario= $_SESSION['usuario_login']; 
$link = mysql_connect($hostname, $username , $password); 
mysql_select_db($database ); 
$feha=date("d-m-Y");
$test11a = mysql_query("SELECT COUNT(*) from habitacion_reservas_web where doc2 like '$codigo' and  banco like '0' ");
$test1 = mysql_fetch_row($test11a);

if ( $test1[0] >= '1' )
			  { 
			   
             include("lista_clientes.php"); 
                 } 
	
else 
           if ( $test1[0] == '0' )
			  { 
			 
			  echo "<p><p><p><table width=\"613\" border=\"0\" align=\"center\" cellspacing=\"0\">
  <tr>
    <th width=\"549\" scope=\"col\"><div align=\"left\"><strong>No hay Reservaciones realizadas</strong></div>    </th>
  </tr>
</table>";
			  
	
                 } 
	
	?>
	
	</td>
  </tr>
</table>

</center>
<p>&nbsp;</p>
<p>&nbsp;</p>
</body>
</html> 

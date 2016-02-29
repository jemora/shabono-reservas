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
    <td>   <?php require_once('conector/conector.php'); ?>
  
  <?php
include("lista_clientes_historial.php");
		 ?>
		 </td>
  </tr>
</table>

</center>
</body>
</html> 

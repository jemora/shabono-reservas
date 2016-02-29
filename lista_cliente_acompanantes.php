<?php 	require_once('conector/conector.php');?>
<?php
$currentPage = $_SERVER["PHP_SELF"];

$maxRows_Recordset2 = 2000;
$pageNum_Recordset2 = 0;
if (isset($_GET['pageNum_Recordset2'])) {
  $pageNum_Recordset2 = $_GET['pageNum_Recordset2'];
}
$startRow_Recordset2 = $pageNum_Recordset2 * $maxRows_Recordset2;

mysql_select_db($database, $connFlashblog);
$query_Recordset2 = "SELECT * FROM acompanantes  WHERE  multi LIKE '$multi'";
$query_limit_Recordset2 = sprintf("%s LIMIT %d, %d", $query_Recordset2, $startRow_Recordset2, $maxRows_Recordset2);
$Recordset2 = mysql_query($query_limit_Recordset2, $connFlashblog) or die(mysql_error());
$row_Recordset2 = mysql_fetch_assoc($Recordset2);

?>
<head>

<title>lista de habitaciones</title>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">







<script language="JavaScript" type="text/JavaScript">
<!--

function GP_popupConfirmMsg(msg) { //v1.0
  document.MM_returnValue = confirm(msg);
}
//-->
</script>
<script language="Javascript">
function imprSelec(nombre)
{
  var ficha = document.getElementById(nombre);
  var ventimp = window.open(' ', 'popimpr');
  ventimp.document.write( ficha.innerHTML );
  ventimp.document.close();
  ventimp.print( );
  ventimp.close();
}
</script>
<link href="Level2_Verdana_Text.css" rel="stylesheet" type="text/css">
<style type="text/css">
<!--
.Estilo1 {
	color: #FFFFFF;
	font-weight: bold;
}
-->
</style>
</head>

<body>
<br>
<DIV ID="seleccion">
<table width="601" border="0" align="center" cellspacing="2" bordercolor="#666666">
  <tr>
    <td height="8" colspan="5" bgcolor="#000000" ><div align="left"><span class="Estilo5 Estilo9 Estilo1">Acompa&ntilde;antes  </span></div></td>
  </tr>
  <tr>
    <td height="8" bgcolor="#7794AE" ><strong>Cedula</strong></td>
    <td width="173" height="8" bgcolor="#7794AE" ><span class="Estilo11"><strong>Nombre</strong></span></td>
    <td width="117" height="8" bgcolor="#7794AE" ><span class="Estilo11"><strong>Telefono</strong></span></td>
    <td height="8" bgcolor="#7794AE" ><span class="Estilo11"><strong>Correo </strong></span></td>
    <td height="8" bgcolor="#7794AE" ><strong>Eliminar</strong></td>
  </tr>
  <?php do { ?>
  <tr>
    <td width="114" height="18" bgcolor="#E3E9F1" ><div align="left"><span class="small"><?php echo $row_Recordset2['cedula']; ?></span></div></td>
    <td height="18" bgcolor="#E3E9F1" ><div align="left"><span class="small"><?php echo $row_Recordset2['nombre']; ?></span></div></td>
    <td bgcolor="#E3E9F1" ><div align="left" class="small"><?php echo $row_Recordset2['telefono']; ?></div></td>
    <td width="156" bgcolor="#E3E9F1" ><div align="left"><span class="small"><?php echo $row_Recordset2['correo']; ?></span></div>      </td>
    <td width="19" bgcolor="#FFFFFF" ><div align="center"><font face="Arial" size="1"><a href="?id=borrar&codigo=<?php echo $codigo ?>&multi=<?php echo $multi; ?>&codigo2=<?php echo $row_Recordset2['id']; ?>"><img src="imagenes/ico_10.gif" alt="eliminar" width="16" height="12" border="0"></a><a href="borrar_empresas.php?&codigo=<?php echo $row_Recordset3['ID']; ?>"></a><a href="borrar_consumos.php?&amp;codigo2=<?php echo $row_Recordset2['ref']; ?>&amp;codigo3=<?php echo $row_Recordset2['id']; ?>&amp;codigo=<?php echo $row_Recordset2['cliente']; ?>"></a></font></div></td>
  </tr>
  
  
  
  <?php } while ($row_Recordset2 = mysql_fetch_assoc($Recordset2)); ?>
</table>
</DIV>

</body>
</html>


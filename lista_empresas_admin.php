<?php require_once('conector/conector.php');?> 
<?
if (!isset($codigo))
 
$dbh=mysql_connect ($hostname,$username,$password) or die ('I cannot connect to the database because: ' . mysql_error());
mysql_select_db ($database); 
//Ejecutamos la sentencia SQL
$resultcaja = mysql_query("SELECT * FROM empresas ");


?>





<?php 	require_once('conector/conector.php');?>
<?php
$currentPage = $_SERVER["PHP_SELF"];

$maxRows_Recordset3 = 9000;
$pageNum_Recordset3 = 0;
if (isset($_GET['pageNum_Recordset3'])) {
  $pageNum_Recordset3 = $_GET['pageNum_Recordset3'];
}
$startRow_Recordset3 = $pageNum_Recordset3 * $maxRows_Recordset3;

mysql_select_db($database, $connFlashblog);
$query_Recordset3 = "SELECT * FROM empresas";
$query_limit_Recordset3 = sprintf("%s LIMIT %d, %d", $query_Recordset3, $startRow_Recordset3, $maxRows_Recordset3);
$Recordset3 = mysql_query($query_limit_Recordset3, $connFlashblog) or die(mysql_error());
$row_Recordset3 = mysql_fetch_assoc($Recordset3);

if (isset($_GET['totalRows_Recordset3'])) {
  $totalRows_Recordset3 = $_GET['totalRows_Recordset3'];
} else {
  $all_Recordset3 = mysql_query($query_Recordset3);
  $totalRows_Recordset3 = mysql_num_rows($all_Recordset3);
}
$totalPages_Recordset3 = ceil($totalRows_Recordset3/$maxRows_Recordset3)-1;

$queryString_Recordset3 = "";
if (!empty($_SERVER['QUERY_STRING'])) {
  $params = explode("&", $_SERVER['QUERY_STRING']);
  $newParams = array();
  foreach ($params as $param) {
    if (stristr($param, "pageNum_Recordset3") == false && 
        stristr($param, "totalRows_Recordset3") == false) {
      array_push($newParams, $param);
    }
  }
  if (count($newParams) != 0) {
    $queryString_Recordset3 = "&" . htmlentities(implode("&", $newParams));
  }
}
$queryString_Recordset3 = sprintf("&totalRows_Recordset3=%d%s", $totalRows_Recordset3, $queryString_Recordset3);
?>
<head>

<title>Empresas Registradas</title>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">






<style type="text/css">
<!--
.Estilo1 {font-size: 12px}
.Estilo3 {color: #FFFFFF}
.Estilo4 {font-size: 12px; color: #FFFFFF; }
.Estilo5 {
	color: #FFCC00;
	font-weight: bold;
}
body,td,th {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 10px;
}
-->
</style>
<script language="JavaScript" type="text/JavaScript">
<!--

function GP_popupConfirmMsg(msg) { //v1.0
  document.MM_returnValue = confirm(msg);
}
//-->
</script>
</head>

<body>
<table width=600 height=69 align="center" cellpadding=2 cellspacing=2 class="estilotabla">
<tr>
  <td class="estilocelda">Empresas Registradas </td>
</tr>
<tr><td height="45"><table width="601" border="0" align="center" cellspacing="2" bordercolor="#CCCCCC">
  <tr>
    <td height="8" bgcolor="#000000" ><div align="left" class="Estilo1 Estilo3"><span class="Estilo4">Empresa</span></div>      </td>
    <td width="50" height="8" bgcolor="#000000" ><span class="Estilo4">Rif</span></td>
    <td width="50" height="8" bgcolor="#000000" ><span class="Estilo4">Telefono </span></td>
    <td width="50" height="8" colspan="3" bgcolor="#000000" ><span class="Estilo4">Correo</span></td>
  </tr>
  <?php do { ?>
  <tr>
    <td height="19" bgcolor="#B1C3D9" ><span class="Estilo1"><?php echo $row_Recordset3['empresa']; ?></span></td>
    <td width="50" bgcolor="#E3E9F1" ><div align="left"><span class="Estilo1"><?php echo $row_Recordset3['rif']; ?></span></div></td>
    <td width="50" bgcolor="#E3E9F1" ><div align="left" class="Estilo1"><?php echo $row_Recordset3['telefono']; ?></div></td>
    <td width="50" bgcolor="#E3E9F1" ><span class="Estilo1"><?php echo $row_Recordset3['correo']; ?></span></td>
    <td width="25" bgcolor="#FFFFFF" ><div align="center"><a href="detalles_empresa.php?&id=detalles2&codigo=<?php echo $row_Recordset3['ID']; ?>" class="Estilo1"><img src="imagenes/edit.gif" alt="Editar" width="17" height="17" border="0"></a></div></td>
    <td width="50" bgcolor="#FFFFFF" ><a href="borrar_empresas.php?&codigo=<?php echo $row_Recordset3['ID']; ?>"><img src="imagenes/ico_10.gif" alt="eliminar" width="16" height="12" border="0"></a></td>
  </tr>
  <?php } while ($row_Recordset3 = mysql_fetch_assoc($Recordset3)); ?>
</table></td></tr>
</table> 
</body>
</html>


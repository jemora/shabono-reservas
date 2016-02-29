<?php 	require_once('conector/conector.php');?>
<?php
$fecha=date("Y-m-d");
$currentPage = $_SERVER["PHP_SELF"];

$maxRows_Recordset2 = 2000;
$pageNum_Recordset2 = 0;
if (isset($_GET['pageNum_Recordset2'])) {
  $pageNum_Recordset2 = $_GET['pageNum_Recordset2'];
}
$startRow_Recordset2 = $pageNum_Recordset2 * $maxRows_Recordset2;

mysql_select_db($database, $connFlashblog);
$query_Recordset2 = "SELECT * FROM habitacion2 WHERE fecha2 LIKE '$fecha' and status LIKE 'ocupada' and opc LIKE '0' ORDER BY id ASC";
$query_limit_Recordset2 = sprintf("%s LIMIT %d, %d", $query_Recordset2, $startRow_Recordset2, $maxRows_Recordset2);
$Recordset2 = mysql_query($query_limit_Recordset2, $connFlashblog) or die(mysql_error());
$row_Recordset2 = mysql_fetch_assoc($Recordset2);

if (isset($_GET['totalRows_Recordset2'])) {
  $totalRows_Recordset2 = $_GET['totalRows_Recordset2'];
} else {
 // $all_Recordset2 = mysql_query($query_Recordset2);
//  $totalRows_Recordset2 = mysql_num_rows($all_Recordset2);
}
$totalPages_Recordset2 = ceil($totalRows_Recordset2/$maxRows_Recordset2)-1;

$queryString_Recordset2 = "";
if (!empty($_SERVER['QUERY_STRING'])) {
  $params = explode("&", $_SERVER['QUERY_STRING']);
  $newParams = array();
  foreach ($params as $param) {
    if (stristr($param, "pageNum_Recordset2") == false && 
        stristr($param, "totalRows_Recordset2") == false) {
      array_push($newParams, $param);
    }
  }
  if (count($newParams) != 0) {
    $queryString_Recordset2 = "&" . htmlentities(implode("&", $newParams));
  }
}
$queryString_Recordset2 = sprintf("&totalRows_Recordset2=%d%s", $totalRows_Recordset2, $queryString_Recordset2);
?>
<head>

<title>lista de habitaciones</title>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">






<style type="text/css">
<!--
.Estilo1 {font-size: 12px}
.Estilo9 {font-size: 10; font-family: Verdana, Arial, Helvetica, sans-serif; }
.Estilo14 {font-size: 12px; font-family: Verdana, Arial, Helvetica, sans-serif; }
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
.Estilo16 {color: #FFFFFF}
.Estilo18 {font-size: 10; font-family: Verdana, Arial, Helvetica, sans-serif; color: #FFFFFF; }
.Estilo20 {font-size: 10px; font-family: Verdana, Arial, Helvetica, sans-serif; }
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
<table width="495" border="0" align="left" cellspacing="2" bordercolor="#CCCCCC">
  <!--DWLayoutTable-->
  <tr>
    <td width="196" height="20" bgcolor="#000000" class="Estilo1 Estilo16" ><span class="Estilo9">Cliente</span>
        <div align="left" class="Estilo9"></div></td>
    <td width="135" height="20" bgcolor="#000000" class="Estilo1" ><span class="Estilo18">Habitaci&oacute;n</span></td>
    <td width="155" height="20" bgcolor="#000000" class="Estilo1" ><span class="Estilo18">Fecha</span></td>
  </tr>
  <?php do { ?>
  <tr bgcolor="#E3E9F1">
    <td width="196" height="38" ><div align="left" class="Estilo20"><strong><?php echo $row_Recordset2['doc2']; ?></strong> <?php echo $row_Recordset2['nombre']; ?> <?php echo $row_Recordset2['apellido']; ?></div>
        <div align="left" class="Estilo14"></div></td>
    <td width="135" height="38" ><span class="Estilo20"><?php echo $row_Recordset2['habitacion']; ?> <?php echo $row_Recordset2['nom_hab']; ?></span></td>
    <td height="38" ><span class="Estilo20"><strong>Desde:</strong><?php echo $row_Recordset2['fecha1']; ?><br>
          <strong>Hasta:</strong><?php echo $row_Recordset2['fecha2']; ?></span></td>
  </tr>
  <?php } while ($row_Recordset2 = mysql_fetch_assoc($Recordset2)); ?>
</table>
<p></p>
<p>&nbsp;</p>
</body>
</html>


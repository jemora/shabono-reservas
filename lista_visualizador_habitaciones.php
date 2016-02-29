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
$query_Recordset2 = "SELECT * FROM habitacion2 WHERE status LIKE 'ocupada' and '$fecha' BETWEEN fecha1 and fecha2 ORDER BY id ASC";
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
<style type="text/css">
<!--
body,td,th {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 9px;
}
.Estilo1 {font-family: Geneva, Arial, Helvetica, sans-serif}
-->
</style>
<title>lista de habitaciones</title>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">



</head>

<body>
<a href="detalles_factura2.php?&codigo2=<?php echo $row_Recordset2['id']; ?>&codigo=<?php echo $row_Recordset2['doc2']; ?>"></a>
<table width="120" height="25" border="1" align="center" cellspacing="0" bordercolor="#99CCFF">
  <!--DWLayoutTable-->
  <?php do { ?>
  <tr>
    <td width="93" height="23" bgcolor="#E3E9F1" ><span class="Estilo1"><?php echo $row_Recordset2['habitacion']; ?><?php echo $row_Recordset2['nom_hab']; ?></span></td>
    <td width="8" bgcolor="#FFFFFF" ><a href="detalles_factura2.php?&codigo2=<?php echo $row_Recordset2['id']; ?>&codigo=<?php echo $row_Recordset2['doc2']; ?>"><img src="imagenes/view.gif" alt="Detalles" width="17" height="17" border="0" longdesc="imagenes/view.gif"></a></td>
    <td width="9" bgcolor="#FFFFFF" ><?php $datox=$row_Recordset2['id'];include("det2.php"); ?>
    </td>
  </tr>
  <?php } while ($row_Recordset2 = mysql_fetch_assoc($Recordset2)); ?>
</table>
</body>
</html>


<?php 	require_once('conector/conector.php');?>
<?php
$currentPage = $_SERVER["PHP_SELF"];

$maxRows_Recordset2 = 20000;
$pageNum_Recordset2 = 0;
if (isset($_GET['pageNum_Recordset2'])) {
  $pageNum_Recordset2 = $_GET['pageNum_Recordset2'];
}
$startRow_Recordset2 = $pageNum_Recordset2 * $maxRows_Recordset2;

mysql_select_db($database, $connFlashblog);
$query_Recordset2 = "SELECT * from clientes  WHERE doc2 LIKE '$codigo'";
$query_limit_Recordset2 = sprintf("%s LIMIT %d, %d", $query_Recordset2, $startRow_Recordset2, $maxRows_Recordset2);
$Recordset2 = mysql_query($query_limit_Recordset2, $connFlashblog) or die(mysql_error());
$row_Recordset2 = mysql_fetch_assoc($Recordset2);

if (isset($_GET['totalRows_Recordset2'])) {
  $totalRows_Recordset2 = $_GET['totalRows_Recordset2'];
} else {
  $all_Recordset2 = mysql_query($query_Recordset2);
  $totalRows_Recordset2 = mysql_num_rows($all_Recordset2);
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

<title>lista de clientes</title>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">






<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
body,td,th {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 10px;
}
-->
</style>
</head>

<body>
<table width="601" border="0" cellspacing="0">
  <tr>
    <td width="92"><strong>Cliente:</strong></td>
    <td width="204"><?php echo $row_Recordset2['nombre']; ?> <?php echo $row_Recordset2['apellido']; ?></td>
    <td width="299"><strong>Pais:</strong><?php echo $row_Recordset2['pais']; ?> <strong>Ciudad:</strong> <?php echo $row_Recordset2['ciudad']; ?></td>
  </tr>
  <tr>
    <td><strong>Direcci&ograve;n:</strong></td>
    <td colspan="2"><?php echo $row_Recordset2['direccion']; ?></td>
  </tr>
  <tr>
    <td><strong>Razon Social:</strong></td>
    <td><?php echo $row_Recordset2['doc2']; ?></td>
    <td><strong>Telefono:</strong> <?php echo $row_Recordset2['telefono']; ?></td>
  </tr>
</table>
<p></p>
</body>
</html>
<?php
mysql_free_result($Recordset2);
?>


<?php 
require_once('conector/conector.php'); ?>
				  <?php
$currentPage = $_SERVER["PHP_SELF"];

$maxRows_Recordset22logo = 20000;
$pageNum_Recordset22logo = 0;
if (isset($_GET['pageNum_Recordset22logo'])) {
  $pageNum_Recordset22logo = $_GET['pageNum_Recordset22logo'];
}
$startRow_Recordset22logo = $pageNum_Recordset22logo * $maxRows_Recordset22logo;

mysql_select_db($database, $connFlashblog);
$query_Recordset22logo = "SELECT * FROM facturas_configurar WHERE opc LIKE '0'";
$query_limit_Recordset22logo = sprintf("%s LIMIT %d, %d", $query_Recordset22logo, $startRow_Recordset22logo, $maxRows_Recordset22logo);
$Recordset22logo = mysql_query($query_limit_Recordset22logo, $connFlashblog) or die(mysql_error());
$row_Recordset22logo = mysql_fetch_assoc($Recordset22logo);

if (isset($_GET['totalRows_Recordset22logo'])) {
  $totalRows_Recordset2 = $_GET['totalRows_Recordset22logo'];
} else {
  $all_Recordset22logo = mysql_query($query_Recordset22logo);
  $totalRows_Recordset22logo = mysql_num_rows($all_Recordset22logo);
}
$totalPages_Recordset22logo = ceil($totalRows_Recordset2/$maxRows_Recordset22logo)-1;

$queryString_Recordset22logo = "";
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
    $queryString_Recordset22logo = "&" . htmlentities(implode("&", $newParams));
  }
}
$queryString_Recordset22logo = sprintf("&totalRows_Recordset2=%d%s", $totalRows_Recordset22logo, $queryString_Recordset22logo);
?>





</head><style type="text/css">
<!--
body,td,th {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 10px;
}
-->
</style>

<img src="ver_logo.php?id=28" width="<?php echo $row_Recordset22logo['ancho']; ?>" height="<?php echo $row_Recordset22logo['alto']; ?>" border="0" align="middle";width="359" />


<?php
mysql_free_result($Recordset22logo);
?>
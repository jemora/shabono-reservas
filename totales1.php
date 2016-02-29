<?php 	require_once('conector/conector.php');?>
<?php
$currentPage = $_SERVER["PHP_SELF"];

$maxRows_Recordset2 = 100;
$pageNum_Recordset2 = 0;
if (isset($_GET['pageNum_Recordset2'])) {
  $pageNum_Recordset2 = $_GET['pageNum_Recordset2'];
}
$startRow_Recordset2 = $pageNum_Recordset2 * $maxRows_Recordset2;

mysql_select_db($database, $connFlashblog);
$query_Recordset2 = "SELECT * from habitacion2  WHERE doc2 LIKE '$codigo' and status like 'ocupada' and multi like '$multi'";
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

<title>lista de habitaciones</title>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
   <?php require_once('conector/conector.php');?> 
<?
if (!isset($codigo))
 
$dbh=mysql_connect ($hostname,$username,$password) or die ('I cannot connect to the database because: ' . mysql_error());
mysql_select_db ($database); 


$result_nota= mysql_query("SELECT * FROM habitacion2 WHERE  multi  LIKE '$multi' ");
?>



<style type="text/css">
<!--
.Estilo1 {font-size: 12px}
.Estilo4 {font-size: 12px; color: #FFFFFF; }
.Estilo5 {font-size: 12px; color: #FFCC00; font-weight: bold; }
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
<link href="Level2_Verdana_Text.css" rel="stylesheet" type="text/css">
</head>

<body>
<table width="643" border="0" align="center">
  <tr>
    <th width="479" bgcolor="#E3E9F1" scope="col"><div align="right" class="small">Monto Subtotal </div></th>
    <th width="154" bgcolor="#E3E9F1" scope="col"> <?php
    ////////////notas creditos
$link = mysql_connect($hostname, $username , $password); 
mysql_select_db($database ); 
$feha=date("d-m-Y");
$test11n = mysql_query("SELECT SUM(nota) from habitacion2 WHERE opc like '0'  and multi like '$multi' ");
$test1n = mysql_fetch_row($test11n);

$test1n[0];
?>

<?php
    ////////////creditos
if (!isset($codigo))
$link = mysql_connect($hostname, $username , $password); 
mysql_select_db($database ); 
$feha=date("d-m-Y");
$test11a = mysql_query("SELECT SUM(subt) from consumo WHERE opc like '0'  and multi like '$multi' ");
$test1c = mysql_fetch_row($test11a);

$test1c[0];
?>


      <?php
  ///////////facturas
if (!isset($codigo))
$link = mysql_connect($hostname, $username , $password); 
mysql_select_db($database ); 
$feha=date("d-m-Y");
$test11a = mysql_query("SELECT SUM(subtotal1) from habitacion2 WHERE opc like '0' and  multi LIKE '$multi' ");
$test1 = mysql_fetch_row($test11a);
 $test1[0];
?>
  
      <?php echo  $test1[0] + $test1c[0]; ?> </th>
  </tr>
  <tr>
    <th bgcolor="#E3E9F1" scope="col"><div align="right" class="small">Anticipos</div></th>
    <th bgcolor="#E3E9F1" scope="col"><span class="Estilo26"><?php echo  $test1n[0]; ?></span></th>
  </tr>
</table>
</body>
</html>


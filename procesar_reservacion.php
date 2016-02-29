<?php 	require_once('conector/conector.php');?>
<?php
if (!isset($buscar))
$dato=date("Y-m-d");
$cliente=$_SESSION['usuario_login'];
$dbh=mysql_connect ($hostname,$username,$password) or die ('I cannot connect to the database because: ' . mysql_error());
mysql_select_db ($database); 
$result_tipo = mysql_query("SELECT * FROM hab_tipo    WHERE  tipo  LIKE '$nombre_tipo'");
////////////////////
while ($row=mysql_fetch_array($result_tipo))  {$tipo= "".$row["id_tipo"].""; }mysql_free_result($result_tipo);	
mysql_select_db($database, $connFlashblog);
$query_rsCategorias = "SELECT * from habitacion where tipo like '$tipo'";
$rsCategorias = mysql_query($query_rsCategorias, $connFlashblog) or die(mysql_error());
$row_rsCategorias = mysql_fetch_assoc($rsCategorias);
$totalRows_rsCategorias = mysql_num_rows($rsCategorias);

$maxRows_rsListadoCat = 1000;
$pageNum_rsListadoCat = 0;
if (isset($HTTP_GET_VARS['pageNum_rsListadoCat'])) {
  $pageNum_rsListadoCat = $HTTP_GET_VARS['pageNum_rsListadoCat'];
}
$startRow_rsListadoCat = $pageNum_rsListadoCat * $maxRows_rsListadoCat;

mysql_select_db($database, $connFlashblog);
$query_rsListadoCat = "SELECT * from habitacion  where tipo like '$tipo'";
$query_limit_rsListadoCat = sprintf("%s LIMIT %d, %d", $query_rsListadoCat, $startRow_rsListadoCat, $maxRows_rsListadoCat);
$rsListadoCat = mysql_query($query_limit_rsListadoCat, $connFlashblog) or die(mysql_error());
$row_rsListadoCat = mysql_fetch_assoc($rsListadoCat);

if (isset($HTTP_GET_VARS['totalRows_rsListadoCat'])) {
  $totalRows_rsListadoCat = $HTTP_GET_VARS['totalRows_rsListadoCat'];
} else {
  $all_rsListadoCat = mysql_query($query_rsListadoCat);
  $totalRows_rsListadoCat = mysql_num_rows($all_rsListadoCat);
}
$totalPages_rsListadoCat = ceil($totalRows_rsListadoCat/$maxRows_rsListadoCat)-1;

$queryString_rsListadoCat = "";
if (!empty($HTTP_SERVER_VARS['QUERY_STRING'])) {
  $params = explode("&", $HTTP_SERVER_VARS['QUERY_STRING']);
  $newParams = array();
  foreach ($params as $param) {
    if (stristr($param, "pageNum_rsListadoCat") == false && 
        stristr($param, "totalRows_rsListadoCat") == false) {
      array_push($newParams, $param);
    }
  }
  if (count($newParams) != 0) {
    $queryString_rsListadoCat = "&" . implode("&", $newParams);
  }
}
$queryString_rsListadoCat = sprintf("&totalRows_rsListadoCat=%d%s", $totalRows_rsListadoCat, $queryString_rsListadoCat);

$MM_paramName = ""; 

// *** Go To Record and Move To Record: create strings for maintaining URL and Form parameters
// create the list of parameters which should not be maintained
$MM_removeList = "&index=";
if ($MM_paramName != "") $MM_removeList .= "&".strtolower($MM_paramName)."=";
$MM_keepURL="";
$MM_keepForm="";
$MM_keepBoth="";
$MM_keepNone="";
// add the URL parameters to the MM_keepURL string
reset ($HTTP_GET_VARS);
while (list ($key, $val) = each ($HTTP_GET_VARS)) {
	$nextItem = "&".strtolower($key)."=";
	if (!stristr($MM_removeList, $nextItem)) {
		$MM_keepURL .= "&".$key."=".urlencode($val);
	}
}
// add the URL parameters to the MM_keepURL string
if(isset($HTTP_POST_VARS)){
	reset ($HTTP_POST_VARS);
	while (list ($key, $val) = each ($HTTP_POST_VARS)) {
		$nextItem = "&".strtolower($key)."=";
		if (!stristr($MM_removeList, $nextItem)) {
			$MM_keepForm .= "&".$key."=".urlencode($val);
		}
	}
}
// create the Form + URL string and remove the intial '&' from each of the strings
$MM_keepBoth = $MM_keepURL."&".$MM_keepForm;
if (strlen($MM_keepBoth) > 0) $MM_keepBoth = substr($MM_keepBoth, 1);
if (strlen($MM_keepURL) > 0)  $MM_keepURL = substr($MM_keepURL, 1);
if (strlen($MM_keepForm) > 0) $MM_keepForm = substr($MM_keepForm, 1);
?>
<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0"  >
<table width="99" border="0" align="center" cellpadding="0" cellspacing="2" bgcolor="#FFFFFF" class="tabla">
   <?php do { ?>
  <tr valign="middle" bgcolor="#E9E9E9">
    <td width="95" height="21" bgcolor="#FFFFFF" class="titulos"><div align="left" class="Estilo16">
      <div align="center"><font face="Arial">
        <?php echo $row_rsListadoCat['habitacion']; ?>
        </font>
        <?php
require_once('conector/conector.php');
$dbh=mysql_connect ($hostname,$username,$password) or die ('I cannot connect to the database because: ' . mysql_error());
mysql_select_db ($database); 
//Ejecutamos la sentencia SQL

$result_tipo = mysql_query("SELECT * FROM hab_tipo    WHERE  tipo  LIKE '$nombre_tipo'");
////////////////////
while ($row=mysql_fetch_array($result_tipo))  {$tipo= "".$row["id_tipo"].""; }mysql_free_result($result_tipo);	
/////////////////////////////////	
require_once('conector/conector.php');
$link = mysql_connect($hostname, $username , $password); 
mysql_select_db($database ); 
$test11bb = mysql_query("SELECT COUNT(*) from habitacion  where tipo like '$tipo'");
$test1b = mysql_fetch_row($test11bb);
 $test1b[0];
///////////////////////////////	
$hab=$row_rsListadoCat['habitacion'];
require_once('conector/conector.php');
$link = mysql_connect($hostname, $username , $password); 
mysql_select_db($database ); 
$test11a = mysql_query("SELECT COUNT(*) from habitacion2 where tipo like '$tipo' and  habitacion like '$hab' and '$fecha1' BETWEEN fecha1 and fecha2 ");
$test1 = mysql_fetch_row($test11a);
$test1[0];
  if ( $test1[0] >= '1' )
{ 
	   echo "1";
	  
                 } 
else 
 if ( $test1[0] == '0' )
			  { 
		echo "0";
 }
?>
      </div>
    </div></td>
    </tr>
  <?php } while ($row_rsListadoCat = mysql_fetch_assoc($rsListadoCat)); ?>
</table>
<p> 
  <?php echo $test1b[0];
mysql_free_result($rsCategorias);
mysql_free_result($rsListadoCat);
?>
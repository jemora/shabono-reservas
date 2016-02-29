<?php require_once('conector/conector.php');?> 
<?php						 
          	
           if ( $id3  == 'borrar' )
			  { 
			  
				if (!isset($codigo))

mysql_connect($hostname,$username,$password);
 
mysql_select_db($database); 

$sSQL="Delete From imagen Where id like '$codigo'";
mysql_query($sSQL);
								
                 } 
							
		 ?>
<?php


mysql_select_db($database, $connFlashblog);
$query_rsCategorias = "SELECT * from imagen WHERE ref LIKE '$dato' ORDER BY id DESC ";
$rsCategorias = mysql_query($query_rsCategorias, $connFlashblog) or die(mysql_error());
$row_rsCategorias = mysql_fetch_assoc($rsCategorias);
$totalRows_rsCategorias = mysql_num_rows($rsCategorias);

$maxRows_rsListadoCat = 20;
$pageNum_rsListadoCat = 0;
if (isset($HTTP_GET_VARS['pageNum_rsListadoCat'])) {
  $pageNum_rsListadoCat = $HTTP_GET_VARS['pageNum_rsListadoCat'];
}
$startRow_rsListadoCat = $pageNum_rsListadoCat * $maxRows_rsListadoCat;

mysql_select_db($database, $connFlashblog);
$query_rsListadoCat = "SELECT * from imagen WHERE ref LIKE '$dato' ORDER BY id DESC";
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


<title>villaurb_urbe.com</title><script type="text/javascript" language="JavaScript1.2" src="stm317.js"></script>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<script language="JavaScript" type="text/JavaScript">
<!--

function GP_popupConfirmMsg(msg) { //v1.0
  document.MM_returnValue = confirm(msg);
}
//-->
</script>

<link href="../admin.css" rel="stylesheet" type="text/css">

<script type="text/javascript" language="JavaScript1.2" src="stm31.js"></script>

<?php 	require_once('css.php');?>

<style type="text/css">
<!--
body {
	background-color: #FFFFFF;
}
.Estilo14 {color: #666666; font-size: 12px; }
.Estilo16 {color: #666666; font-size: 12px; font-family: Verdana, Arial, Helvetica, sans-serif; }
body,td,th {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 9px;
}
-->
</style><body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0"  >
<div align="center"><img src="imagenes/banne11.gif" width="607" height="30"><br>
</div>
<table width="601" border="1" align="center" cellspacing="0" bordercolor="#999999" bgcolor="#F4F4F4">
  <!--DWLayoutTable-->
  <tr>
    <td width="560" height="25" valign="top"><table width="601" border="0" align="center" cellspacing="0">
      <!--DWLayoutTable-->
      <tr>
        <td width="19" bgcolor="#F4F4F4"><span class="Estilo14"><a href="lista_habitaciones_creadas.php"><img src="imagenes/ico_3.gif" alt="Regresar" width="18" height="18" border="0" /></a></span></td>
        <td width="136" bgcolor="#F4F4F4"><span class="Estilo16">Regresar</span></td>
        <td width="364" bgcolor="#F4F4F4"><!--DWLayoutEmptyCell-->&nbsp;</td>
        <td width="23" bgcolor="#F4F4F4"><div align="right"></div></td>
      </tr>
    </table></td>
  </tr>
</table>
<table width=600 height=121 align="center" cellpadding=2 cellspacing=2 class="estilotabla">
  <tr>
    <td width="165" class="estilocelda">Habitaciones Disponibles    </td>
  </tr>
  <tr>
    <td height="90"><table width="600" border="0" align="center" cellpadding="0" cellspacing="2" class="tabla">
      <!--DWLayoutTable-->
      <?php do { ?>
      <tr valign="middle" >
        <td width="161" height="24"  class="titulos"><table width="600" border="0">
            <tr>
              <th width="82" rowspan="2" bgcolor="#E3E9F1" scope="col"><img src="ver1.php?id=<?php echo $row_rsListadoCat['id']; ?>" width="80" height="80" border="1" align="right";width="359" /></th>
              <th width="508" bgcolor="#FFFFFF""><div align="left"><font face="Arial" size="1"><a href="?&amp;id3=borrar&amp;dato=<?php echo $dato; ?>&amp;codigo=<?php echo $row_rsListadoCat['id']; ?>"><img src="imagenes/ico_10.gif" alt="Borrar " width="16" height="12" border="0" onClick="GP_popupConfirmMsg('&iquest;Est&aacute;s seguro que quieres borrar esta Imagen?');return document.MM_returnValue" /></a></font>Eliminar<span class="estilocelda">
                
              </span></div></th>
            </tr>
            <tr>
              <th bgcolor="#FFFFFF"">&nbsp;</th>
            </tr>
        </table></td>
      </tr>
      <?php } while ($row_rsListadoCat = mysql_fetch_assoc($rsListadoCat)); ?>
    </table>      </td>
  </tr>
</table>
<table width="50%" height="20" border="0" align="center" cellpadding="0" cellspacing="2">
  <tr  class="textos">
    <td width="23%" align="center" bgcolor="#FFFFFF" class="Estilo13"><span class="titulos"> <font face="Arial" size="1">
      <?php if ($pageNum_rsListadoCat > 0) { // Show if not first page ?>
      <a href="<?php printf("%s?pageNum_rsListadoCat=%d%s", $currentPage, 0, $queryString_rsListadoCat); ?>">Primero</a>
      <?php } // Show if not first page ?>
    </font> </span></td>
    <td width="31%" align="center" bgcolor="#FFFFFF" class="Estilo13"><span class="titulos"> <font face="Arial" size="1">
      <?php if ($pageNum_rsListadoCat > 0) { // Show if not first page ?>
      <a href="<?php printf("%s?pageNum_rsListadoCat=%d%s", $currentPage, max(0, $pageNum_rsListadoCat - 1), $queryString_rsListadoCat); ?>">Anterior</a>
      <?php } // Show if not first page ?>
    </font> </span></td>
    <td width="23%" align="center" bgcolor="#FFFFFF" class="Estilo13"><span class="titulos"> <font face="Arial" size="1">
      <?php if ($pageNum_rsListadoCat < $totalPages_rsListadoCat) { // Show if not last page ?>
      <a href="<?php printf("%s?pageNum_rsListadoCat=%d%s", $currentPage, min($totalPages_rsListadoCat, $pageNum_rsListadoCat + 1), $queryString_rsListadoCat); ?>">Siguiente</a>
      <?php } // Show if not last page ?>
    </font> </span></td>
    <td width="23%" align="center" bgcolor="#FFFFFF" class="Estilo13"><span class="titulos"> <font face="Arial" size="1">
      <?php if ($pageNum_rsListadoCat < $totalPages_rsListadoCat) { // Show if not last page ?>
      <a href="<?php printf("%s?pageNum_rsListadoCat=%d%s", $currentPage, $totalPages_rsListadoCat, $queryString_rsListadoCat); ?>">&Uacute;ltimo</a>
      <?php } // Show if not last page ?>
    </font></span></td>
  </tr>
</table>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>
  <?php


mysql_free_result($rsCategorias);

mysql_free_result($rsListadoCat);
?>
</p>

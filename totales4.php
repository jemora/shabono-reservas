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
$query_Recordset2 = "SELECT * from habitacion2  WHERE id LIKE '$codigo3'";
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






<style type="text/css">
<!--
.Estilo1 {font-size: 12px}
.Estilo20 {color: #FF0000}
#apDiv1 {
	position:absolute;
	left:80px;
	top:64px;
	width:300px;
	height:253px;
	z-index:1;
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
<table width="601" border="0" align="center">
  <!--DWLayoutTable-->
  <tr>
    <td colspan="2" bgcolor="#B1C3D9"><div align="right">Subtotal</div></td>
    <td width="114" bgcolor="#B1C3D9"><div align="left"><span class="Estilo1"><?php echo $row_Recordset2['subtotal']; ?></span></div></td>
  </tr>
  <tr>
    <td width="337" rowspan="6" bgcolor="#FFFFFF"><table width="334" border="0" cellspacing="0">
        <tr>
          <td width="324"><strong>Descripcion:</strong></td>
        </tr>
        <tr>
          <td height="51"><span class="Estilo1"><?php echo $row_Recordset2['descripcion']; ?></span></td>
        </tr>
      </table></td>
    
  </tr>
  <tr>
    <td width="136" bgcolor="#FFFFFF"><div align="right">I.V.A (<?php echo  $iva; ?>) </div></td>
    <td width="114"><div align="left"><span class="Estilo1"><?php echo $row_Recordset2['iva']; ?></span></div></td>
  </tr>
  <tr>
    <td bgcolor="#FFFFFF"><div align="right">Nota Credito</div></td>
    <td width="114"><div align="left"><span class="Estilo1"><?php echo $row_Recordset2['nota']; ?></span></div></td>
  </tr>
  <tr>
    <td bgcolor="#FFFFFF"><div align="right">Nota Credito:</div></td>
    <td width="114"><div align="left" class="Estilo20"><span class="Estilo1"><?php echo $row_Recordset2['nota2']; ?></span></div></td>
  </tr>
  <tr>
    <td bgcolor="#FFFFFF"><div align="right">Retencion Iva</div></td>
    <td width="114"><div align="left" class="Estilo20"><span class="Estilo1"><?php echo $row_Recordset2['reten_iva']; ?></span></div></td>
  </tr>
  <tr>
    <td bgcolor="#FFFFFF"><div align="right">Retencion I.S.R.L</div></td>
    <td width="114"><div align="left" class="Estilo20"><span class="Estilo1"><?php echo $row_Recordset2['reten_isrl']; ?></span></div></td>
  </tr>
  <tr>
    <td height="21" colspan="2" bgcolor="#E3E9F1"><div align="right"><strong><font face="Arial" size="1"><span class="Estilo1"><?php	  $totales2= $row_Recordset2['nota'] + $row_Recordset2['nota2'] + $row_Recordset2['reten_iva'] +$row_Recordset2['reten_isrl']; ?>
      <?php $totales1= $row_Recordset2['subtotal'] + $row_Recordset2['iva']; ?>
      <?php $totales3= $totales1 - $totales2; ?> </span>
      <input name="total2" type="hidden" id="total2" value="<?php echo  $total; ?>" size="25" />
    </font>Total:</strong></div></td>
    <td width="114" height="21" bordercolor="#B1C3D9"><div align="left">
      <table width="116" border="1" cellspacing="0" bordercolor="#000000">
        <tr>
          <td width="110"><div align="center"><span class="Estilo1"><?php echo $totales3; ?></span></div></td>
        </tr>
      </table>
    </div></td>
  </tr>
</table>
</body>
</html>


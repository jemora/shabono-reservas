<?php 	require_once('conector/conector.php');?>
<?php
$currentPage = $_SERVER["PHP_SELF"];
$usuario= $_SESSION['usuario_login']; 
$maxRows_Recordset2 = 200000;
$pageNum_Recordset2 = 0;
if (isset($_GET['pageNum_Recordset2'])) {
  $pageNum_Recordset2 = $_GET['pageNum_Recordset2'];
}
$startRow_Recordset2 = $pageNum_Recordset2 * $maxRows_Recordset2;
$usuario2= $_SESSION['doc2'];
mysql_select_db($database, $connFlashblog);
$query_Recordset2 = "SELECT * FROM habitacion_reservas_web where usuario like '$usuario' and banco like '1' ORDER BY id DESC";
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
.Estilo4 {color: #FFFFFF}
-->
</style>
<link href="Level2_Verdana_Text.css" rel="stylesheet" type="text/css">
</head>

<body>
<br>
<table width="200" border="1" align="center" cellspacing="0" bordercolor="#000000">
  <tr>
    <td><table width="616" border="0" align="center" cellspacing="1" bordercolor="#CCCCCC">
      <tr>
        <td width="50" rowspan="2" bgcolor="#000000" class="small" ><div align="left" class="small Estilo4">
            <div align="center">N&ordm;</div>
        </div>N1</td>
        <td height="16" colspan="2" bgcolor="#000000" class="small Estilo4" ><div align="center">Fechas de Reservacion</div></td>
        <td width="20" height="16" rowspan="2" bgcolor="#000000" class="small" ><div align="left" class="small Estilo4">
          <div align="center">Dias</div>
        </div></td>
        <td width="25" height="16" rowspan="2" bgcolor="#000000" class="small"><div align="left" class="small Estilo4">
            <div align="center">Monto </div>
        </div></td>
        <td height="16" rowspan="2" bgcolor="#000000" class="small" ><div align="left" class="small Estilo4">
          <div align="center">Deposito </div>
        </div></td>
        <td width="48" height="16" rowspan="2" bgcolor="#000000"><div align="left" class="small Estilo4">
          <div align="center">Estado</div>
        </div></td>
        <td width="49" height="16" rowspan="2" bgcolor="#000000"><div align="center"><img src="../hotel/imagenes/print.gif" width="16" height="11"></div></td>
      </tr>
      <tr>
        <td width="150" height="8" bgcolor="#000000" class="small" ><div align="center"><span class="small Estilo4">Desde</span></div></td>
        <td width="150" height="8" bgcolor="#000000" class="small" ><div align="center"><span class="small Estilo4">Hasta</span></div></td>
      </tr>
      <?php do { ?>
      <tr>
        <td width="50" height="34" bgcolor="#E3E9F1" class="small" ><div align="center"><?php echo $row_Recordset2['num_web']; ?></div></td>
        <td width="150" bgcolor="#E3E9F1" class="small" ><div align="center"><?php echo $row_Recordset2['fecha1']; ?></div></td>
        <td width="107" bgcolor="#E3E9F1" class="small" ><div align="center"><?php echo $row_Recordset2['fecha2']; ?></div></td>
        <td width="20" bgcolor="#E3E9F1" class="small" ><div align="left" class="small">
          <div align="center"><?php echo $row_Recordset2['cant_dia']; ?></div>
        </div></td>
        <td width="25" bgcolor="#E3E9F1" class="small" ><div align="left" class="small"><?php echo $row_Recordset2['subtotal1']; ?></div></td>
        <td width="48" bgcolor="#E3E9F1" class="small" ><div align="center"><?php echo $row_Recordset2['monto_dep']; ?></div></td>
        <td c"><?php 
		$opc=$row_Recordset2['opc'];
           if ( $opc  == '0' )
			  { 
			    echo '<P align="center"><FONT face="Arial" color="#000066"><FONT color="#000000" 
size="1"><B> Por Aprobar</B> </FONT></FONT></P>'; 
                 } 
				 else
				   if ( $opc  == '1' )
			  { 
			    echo '<P align="center"><FONT face="Arial"><FONT color="#009900"><B>Aprobado</B> 
</FONT></FONT></P>'; 
                 } 
				 	 else
				   if ( $opc  == '2' )
			  { 
			    echo '<P align="center"><FONT face="Arial"><FONT color="#009900"><B><FONT 
color="#ff0000">Anulado</FONT></B> </FONT></FONT></P>'; 
                 }  
?></td>
        <td class="small" c"><div align="center"><a href="ticket.php?codigo=<? echo $_SESSION['doc2'] ?>&codigo2=<?php echo $row_Recordset2['id']; ?>">Imprimir Ticket </a></div></td>
      </tr>
      <?php } while ($row_Recordset2 = mysql_fetch_assoc($Recordset2)); ?>
    </table></td>
  </tr>
</table>

</body>
</html>
<?php
mysql_free_result($Recordset2);
?>

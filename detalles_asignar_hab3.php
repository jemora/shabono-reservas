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
$query_Recordset3 = "SELECT * FROM habitacion_reservas_web   where id like '$codigo2'";
$query_limit_Recordset3 = sprintf("%s LIMIT %d, %d", $query_Recordset3, $startRow_Recordset3, $maxRows_Recordset3);
$Recordset3 = mysql_query($query_limit_Recordset3, $connFlashblog) or die(mysql_error());
$row_Recordset3 = mysql_fetch_assoc($Recordset3);


?>
<head>

<title>lista de habitaciones</title>



<style type="text/css">
<!--
.Estilo1 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 12px;
	color: #000000;
}
.Estilo9 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 10px; }
.Estilo13 {font-family: Verdana, Arial, Helvetica, sans-serif}
-->
</style><script language="Javascript">
function imprSelec(nombre)
{
  var ficha = document.getElementById(nombre);
  var ventimp = window.open(' ', 'popimpr');
  ventimp.document.write( ficha.innerHTML );
  ventimp.document.close();
  ventimp.print( );
  ventimp.close();
}
</script>
<link href="Level2_Verdana_Text.css" rel="stylesheet" type="text/css">
<style type="text/css">
<!--
.Estilo14 {
	color: #FF0000;
	font-weight: bold;
}
.Estilo17 {font-size: 14}
-->
</style>
</head>

<body>

<table width="601" border="1" align="center" cellspacing="0" bordercolor="#999999" bgcolor="#F4F4F4">
  <!--DWLayoutTable-->
  <tr>
    <td width="560" height="24" valign="top"><table width="601" border="0" align="center" cellspacing="0">
      <!--DWLayoutTable-->
      <tr>
        <td width="129" bgcolor="#FFFF00"><div align="center"><span class="Estilo14"><font size="2" face="Arial">Atenci&oacute;n</font></span> </div></td>
        <td width="285" bgcolor="#FFCC00"> <div align="center"><strong class="small">A su llegada debe Presentar el Siguiente comprobante </strong></div></td>
        <td width="151" bgcolor="#F4F4F4"><div align="right"><strong><a href="javascript:imprSelec('seleccion')" class="small">Imprimir Ticke Comprobante</a></strong></div></td>
        <td width="28" bgcolor="#F4F4F4"><div align="right"><a href="javascript:imprSelec('seleccion')"><img src="imagenes/print.gif" width="16" height="11" border="0" /></a></div></td>
      </tr>
    </table></td>
  </tr>
</table><DIV ID="seleccion"><br />
<table width="627" border="1" align="center" cellspacing="0" bordercolor="#000000">
  <tr bgcolor="#CBD1D9">
    <th width="425" bgcolor="#DDE4D7" scope="col"><div align="left"><span class="Estilo1">Ficha de Reservaci&oacute;n;</span></div></th>
    <th width="193" bgcolor="#CCCCCC" >Ticke N&ordm;<span class="small Estilo17"><?php echo $row_Recordset3['num_web']; ?></span> </span></th>
  </tr>
  <tr>
    <td colspan="2"><table width="622" border="0">

      <tr>
        <td width="102"><div align="left"><strong><span class="small">Cliente:</span></strong></div></td>
        <td colspan="3" class="Estilo9"><div align="left" class="Estilo13"><span class="small"><?php echo $row_Recordset3['doc2']; ?></span></div>          </td>
      </tr>
      <tr>
        <td><div align="left"><strong><span class="small">Tipo de Habitaci&oacute;n:</span></strong></div></td>
        <td width="119" class="Estilo9"><div align="left" class="Estilo13"><span class="small"><?php $tipo2= $row_Recordset3['tipo']; 
	require_once('conector/conector.php');
$currentPage = $_SERVER["PHP_SELF"];
$maxRows_Recordset33 = 2;
$pageNum_Recordset33 = 0;
if (isset($_GET['pageNum_Recordset33'])) {
  $pageNum_Recordset33 = $_GET['pageNum_Recordset33'];
}
$startRow_Recordset33 = $pageNum_Recordset33 * $maxRows_Recordset33;
mysql_select_db($database, $connFlashblog);
$query_Recordset33 = "SELECT * FROM hab_tipo  where  id_tipo like '$tipo2' ";
$query_limit_Recordset33 = sprintf("%s LIMIT %d, %d", $query_Recordset33, $startRow_Recordset33, $maxRows_Recordset33);
$Recordset3 = mysql_query($query_limit_Recordset33, $connFlashblog) or die(mysql_error());
$row_Recordset33 = mysql_fetch_assoc($Recordset3);	
		
		
		
		?><?php echo $row_Recordset33['tipo']; ?></span></div></td>
        <td width="94" class="Estilo9"><div align="right" class="small"><strong>Fecha Estadia</strong></div></td>
        <td width="289" class="Estilo9">Desde:<span class="small"><?php echo $row_Recordset3['fecha1']; ?></span> <span class="Estilo13">
          
        Hasta:<span class="small"><?php echo $row_Recordset3['fecha2']; ?></span> 
        
        </span></td>
      </tr>
      <tr>
        <td><div align="left"><strong><span class="small">N&ordm; de Personas:</span></strong></div></td>
        <td class="Estilo9"><div align="left" class="Estilo13"><span class="small"><?php echo $row_Recordset3['personas']; ?></span></div></td>
        <td class="Estilo9"><div align="right" class="small"><strong>Cantidad de dias</strong></div></td>
        <td class="Estilo9"><span class="small"><?php echo $row_Recordset3['cant_dia']; ?></span></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td colspan="3" class="Estilo9">&nbsp;</td>
        </tr>
    </table></td>
  </tr>
</table>
</DIV>
</body>
</html>

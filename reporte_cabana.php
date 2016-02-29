<?php 	require_once('conector/conector.php');?>
<?php
$currentPage = $_SERVER["PHP_SELF"];

$maxRows_Recordsetdato_1 = 100;
$pageNum_Recordsetdato_1 = 0;
if (isset($_GET['pageNum_Recordsetdato_1'])) {
  $pageNum_Recordsetdato_1 = $_GET['pageNum_Recordsetdato_1'];
}
$startRow_Recordsetdato_1 = $pageNum_Recordsetdato_1 * $maxRows_Recordsetdato_1;

mysql_select_db($database, $connFlashblog);
$query_Recordsetdato_1 = "SELECT * from habitacion2  WHERE multi LIKE '$multi'";
$query_limit_Recordsetdato_1 = sprintf("%s LIMIT %d, %d", $query_Recordsetdato_1, $startRow_Recordsetdato_1, $maxRows_Recordsetdato_1);
$Recordsetdato_1 = mysql_query($query_limit_Recordsetdato_1, $connFlashblog) or die(mysql_error());
$row_Recordsetdato_1 = mysql_fetch_assoc($Recordsetdato_1);

?>
<?php $cedula= $row_Recordsetdato_1['doc2']; ?>
<?php $tipo= $row_Recordsetdato_1['tipo']; ?>
<?php $tarifa= $row_Recordsetdato_1['habitacion']; ?>
<?php
$currentPage = $_SERVER["PHP_SELF"];

$maxRows_Recordsetdato_2 = 100;
$pageNum_Recordsetdato_2 = 0;
if (isset($_GET['pageNum_Recordsetdato_2'])) {
  $pageNum_Recordsetdato_2 = $_GET['pageNum_Recordsetdato_2'];
}
$startRow_Recordsetdato_2 = $pageNum_Recordsetdato_2 * $maxRows_Recordsetdato_2;

mysql_select_db($database, $connFlashblog);
$query_Recordsetdato_2 = "SELECT * from clientes  WHERE doc2 LIKE '$cedula'";
$query_limit_Recordsetdato_2 = sprintf("%s LIMIT %d, %d", $query_Recordsetdato_2, $startRow_Recordsetdato_2, $maxRows_Recordsetdato_2);
$Recordsetdato_1 = mysql_query($query_limit_Recordsetdato_2, $connFlashblog) or die(mysql_error());
$row_Recordsetdato_2 = mysql_fetch_assoc($Recordsetdato_1);

?>
<?php
$currentPage = $_SERVER["PHP_SELF"];

$maxRows_Recordsetdato_3 = 100;
$pageNum_Recordsetdato_3 = 0;
if (isset($_GET['pageNum_Recordsetdato_3'])) {
  $pageNum_Recordsetdato_3 = $_GET['pageNum_Recordsetdato_3'];
}
$startRow_Recordsetdato_3 = $pageNum_Recordsetdato_3 * $maxRows_Recordsetdato_3;

mysql_select_db($database, $connFlashblog);
$query_Recordsetdato_3 = "SELECT * from facturas  WHERE multi LIKE '$multi'";
$query_limit_Recordsetdato_3 = sprintf("%s LIMIT %d, %d", $query_Recordsetdato_3, $startRow_Recordsetdato_3, $maxRows_Recordsetdato_3);
$Recordsetdato_1 = mysql_query($query_limit_Recordsetdato_3, $connFlashblog) or die(mysql_error());
$row_Recordsetdato_3 = mysql_fetch_assoc($Recordsetdato_1);

?>
<?php
$currentPage = $_SERVER["PHP_SELF"];

$maxRows_Recordsetdato_4 = 100;
$pageNum_Recordsetdato_4 = 0;
if (isset($_GET['pageNum_Recordsetdato_4'])) {
  $pageNum_Recordsetdato_4 = $_GET['pageNum_Recordsetdato_4'];
}
$startRow_Recordsetdato_4 = $pageNum_Recordsetdato_4 * $maxRows_Recordsetdato_4;

mysql_select_db($database, $connFlashblog);
$query_Recordsetdato_4 = "SELECT * from hab_tipo    WHERE  id_tipo LIKE '$tipo'";
$query_limit_Recordsetdato_4 = sprintf("%s LIMIT %d, %d", $query_Recordsetdato_4, $startRow_Recordsetdato_4, $maxRows_Recordsetdato_4);
$Recordsetdato_1 = mysql_query($query_limit_Recordsetdato_4, $connFlashblog) or die(mysql_error());
$row_Recordsetdato_4 = mysql_fetch_assoc($Recordsetdato_1);

?>
<?php
$currentPage = $_SERVER["PHP_SELF"];

$maxRows_Recordsetdato_5 = 100;
$pageNum_Recordsetdato_5 = 0;
if (isset($_GET['pageNum_Recordsetdato_5'])) {
  $pageNum_Recordsetdato_5 = $_GET['pageNum_Recordsetdato_5'];
}
$startRow_Recordsetdato_5 = $pageNum_Recordsetdato_5 * $maxRows_Recordsetdato_5;

mysql_select_db($database, $connFlashblog);
$query_Recordsetdato_5 = "SELECT * from serv_asig    WHERE  id_serv LIKE '$tarifa'";
$query_limit_Recordsetdato_5 = sprintf("%s LIMIT %d, %d", $query_Recordsetdato_5, $startRow_Recordsetdato_5, $maxRows_Recordsetdato_5);
$Recordsetdato_1 = mysql_query($query_limit_Recordsetdato_5, $connFlashblog) or die(mysql_error());
$row_Recordsetdato_5 = mysql_fetch_assoc($Recordsetdato_1);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
<link href="Level2_Verdana_Text.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.Estilo7 {font-size: 10px}
-->
</style>
<script language="JavaScript" type="text/JavaScript">
<!--

function GP_popupConfirmMsg(msg) { //v1.0
  document.MM_returnValue = confirm(msg);
}
//-->
</script>
<script language="Javascript">
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
</head>

<body>
<table width="601" border="1" align="center" cellspacing="0" bordercolor="#999999" bgcolor="#F4F4F4">
  <!--DWLayoutTable-->
  <tr>
    <td width="560" height="24" valign="top"><table width="601" border="0" align="center" cellspacing="0">
      <!--DWLayoutTable-->
      <tr>
        <td width="19" bgcolor="#F4F4F4"><span class="Estilo14"><a href="javascript:history.back(1)"><img src="imagenes/ico_3.gif" alt="Regresar" width="18" height="18" border="0" /></a></span></td>
        <td width="136" bgcolor="#F4F4F4"><span class="small" >Regresar</span></td>
        <td width="364" bgcolor="#F4F4F4"><div align="right"><strong><a href="javascript:imprSelec('seleccion')" class="small">Imprimir Reporte</a></strong></div></td>
        <td width="23" bgcolor="#F4F4F4"><div align="right"><a href="javascript:imprSelec('seleccion')"><img src="imagenes/print.gif" width="16" height="11" border="0" /></a></div></td>
      </tr>
    </table></td>
  </tr>
</table>
<br />
<br />
<DIV ID="seleccion">
<table width="600" border="0" align="center" cellspacing="0">
  <tr>
    <td width="378"><strong>CABA&Ntilde;AS DE POZO AZUL </strong><br />
      FUNDACION PROMO AMAZONAS<br />
      RIF: J-306708090<br />
      Telefonos: 0416-2954246<br />
      Fax: 0248 - 521-56-36<br />
      PUERTO AYAUCHO. ESTADO AMAZONAS </td>
    <td width="220"><div align="center"><img src="ver_logo.php?id=26" width="80" height="80" border="0" align="middle";width="359" /></div></td>
  </tr>
  <tr>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2"><table width="600" border="1" cellspacing="0" bordercolor="#000000">
      <!--DWLayoutTable-->
      <tr>
        <td width="408" height="18" rowspan="2" valign="top"><?php include('lista_acompanantes.php'); ?></td>
        <td width="182" height="34" valign="top" class="small"><div align="center">Presente este comprobante al llegar a las caba&ntilde;as </div></td>
      </tr>
      <tr>
        <td valign="top"><div align="center">
          <p><br />
            Favor realizar deposito<br />
            <strong>EN EFECTIVO</strong><br />
            A NOMBRE DE CABA&Ntilde;AS POZO AZUL<br />
            <strong>O PROMO AMAZONAS</strong><br />
            NUMERO DE CUENTA<br />
            0008-0011-23-0008252211<br />
            <strong>BANCO GUAYANA </strong></p>
          <p>&nbsp;</p>
        </div></td>
      </tr>
    </table></td>
  </tr>
</table>
<table width="600" border="1" align="center" cellspacing="0" bordercolor="#000000">
  <tr>
    <td width="176">Hora Aproximada Llegada </td>
    <td width="230">&nbsp;</td>
    <td width="180" rowspan="6">&nbsp;</td>
  </tr>
  <tr>
    <td>Numero de Telefono Local </td>
    <td><span class="Estilo7"><?php echo $row_Recordsetdato_2['telefono']; ?></span></td>
  </tr>
  <tr>
    <td>Numero de Celular </td>
    <td><span class="Estilo7"><?php echo $row_Recordsetdato_2['telefono']; ?></span></td>
  </tr>
  <tr>
    <td>Nuemero de Fax </td>
    <td><span class="Estilo7"><?php echo $row_Recordsetdato_2['telefono']; ?></span></td>
  </tr>
  <tr>
    <td>Nombre de La Empresa </td>
    <td><span class="Estilo7"><?php echo $row_Recordsetdato_3['empresa']; ?></span></td>
  </tr>
  <tr>
    <td>Correo Electronico </td>
    <td><span class="Estilo7"><?php echo $row_Recordsetdato_2['correo']; ?></span></td>
  </tr>
</table>
<br />
<table width="600" border="1" align="center" cellspacing="0" bordercolor="#000000">
  <!--DWLayoutTable-->
  <tr>
    <td width="273" rowspan="4" valign="top">Observaciones:<span class="small"><span class="Estilo7"><?php echo $row_Recordsetdato_1['descripcion']; ?></span></span></td>
    <td width="133" height="18"><div align="right">Tipo de Caba&ntilde;a </div></td>
    <td width="180"><span class="Estilo7"><?php echo $row_Recordsetdato_4['tipo']; ?></span></td>
  </tr>
  <tr>
    <td><div align="right">Tarifa Aplicada </div></td>
    <td width="180"><span class="Estilo7"><?php echo $row_Recordsetdato_5['tipo2']; ?></span></td>
  </tr>
  <tr>
    <td><div align="right">Total de Noches </div></td>
    <td width="180"><span class="Estilo7"><?php echo $row_Recordsetdato_1['cant_dia']; ?></span></td>
  </tr>
  <tr>
    <td><div align="right">Total Prepago </div></td>
    <td width="180"><span class="Estilo7"><?php echo $row_Recordsetdato_1['subtotal']; ?></span></td>
  </tr>
</table>
<table width="600" border="0" align="center" cellspacing="0">
  <tr>
    <td><br />
      Envie esta planilla via Fax a cualquiera de nuestros numeros, acompa&ntilde;ados del deposito bancario para hacer efectiva (Gracias por seleccionar nuestros servicios) </td>
  </tr>
  <tr>
    <td>SU RESERVA FUE REALIZADA POR EL OPERADOR </td>
  </tr>
  <tr>
    <td><table width="296" border="1" cellspacing="0" bordercolor="#000000">
      <tr>
        <td width="286"><span class="Estilo7"><?php echo $row_Recordsetdato_1['usuario']; ?></span></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td>EN FECHA </td>
  </tr>
  <tr>
    <td><table width="296" border="1" cellspacing="0" bordercolor="#000000">
      <tr>
        <td width="286"><span class="Estilo7"><?php echo $row_Recordsetdato_1['fecha']; ?></span></td>
      </tr>
    </table></td>
  </tr>
</table>
</DIV>
<blockquote>
  <p><br />
  </p>
</blockquote>
</body>
</html>

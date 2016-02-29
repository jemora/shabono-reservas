  
   <?php require_once('conector/conector.php');?> 

<?php
$currentPage = $_SERVER["PHP_SELF"];

$maxRows_Recordset2 = 10;
$pageNum_Recordset2 = 0;
if (isset($_GET['pageNum_Recordset2'])) {
  $pageNum_Recordset2 = $_GET['pageNum_Recordset2'];
}
$startRow_Recordset2 = $pageNum_Recordset2 * $maxRows_Recordset2;

mysql_select_db($database, $connFlashblog);
$query_Recordset2 = "SELECT * from habitacion2  WHERE doc2 LIKE '$codigo' ";
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
<?php
  
  ////////////consumos
if (!isset($codigo))
$link = mysql_connect($hostname, $username , $password); 
mysql_select_db($database ); 
$feha=date("d-m-Y");
$test11a = mysql_query("SELECT SUM(subt) from consumo WHERE opc like '0' and  cliente LIKE '$codigo' ");
$test1c = mysql_fetch_row($test11a);

$test1c[0];
?>
      <?php
  ///////////facturas
if (!isset($codigo))
$link = mysql_connect($hostname, $username , $password); 
mysql_select_db($database ); 
$feha=date("d-m-Y");
$test11a = mysql_query("SELECT SUM(precio) from habitacion2 WHERE opc like '0' and  id LIKE '$codigo2' ");
$test1 = mysql_fetch_row($test11a);
 $test1[0];
?>
<?php $factura= $row_Recordset2['cant_dia'] * $test1[0]; ?>



<?

?>





<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
<script type="text/JavaScript">
<!--



function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}
//-->
</script>
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
.Estilo15 {color: #000000}
.Estilo16 {font-size: 12px; color: #000000; }
body,td,th {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 12px;
}
a:link {
	text-decoration: none;
}
a:visited {
	text-decoration: none;
}
a:hover {
	text-decoration: none;
}
a:active {
	text-decoration: none;
}
.Estilo21 {color: #000000; font-weight: bold; }
.Estilo22 {color: #FFCC00}
-->
</style>
<script language="JavaScript" type="text/JavaScript">
<!--

function GP_popupConfirmMsg(msg) { //v1.0
  document.MM_returnValue = confirm(msg);
}
//-->
</script>
<script>
function cerrarse(){
window.close()
}
</script> 

</head>

<body onLoad="MM_preloadImages('ver.php?titulo=<?php echo $row_rsArticulo['titulo']; ?>')">
<br>
<div align="center"><img src="imagenes/banne9.gif" width="607" height="30" /></div>
<table width="607" border="0" align="center" cellpadding="0" cellspacing="0">
  <!-- fwtable fwsrc="Untitled" fwbase="visor.jpg" fwstyle="Dreamweaver" fwdocid = "237802607" fwnested="0" -->
  <tr>
    <td><img src="imagenes/spacer.gif" width="5" height="1" border="0" alt=""></td>
    <td><img src="imagenes/spacer.gif" width="593" height="1" border="0" alt=""></td>
    <td><img src="imagenes/spacer.gif" width="9" height="1" border="0" alt=""></td>
    <td><img src="imagenes/spacer.gif" width="1" height="1" border="0" alt=""></td>
  </tr>
  <tr>
    <td colspan="3"><img name="visor_r1_c1" src="imagenes/visor_r1_c1.jpg" width="607" height="11" border="0" alt=""></td>
    <td><img src="imagenes/spacer.gif" width="1" height="11" border="0" alt=""></td>
  </tr>
  <tr>
    <td background="imagenes/visor_r2_c1.jpg">&nbsp;</td>
    <td><table width="593" height="28" border="0" align="center" cellspacing="0" bordercolor="#666666" bgcolor="#FF9900">
  <tr>
    <td width="591" height="28" bgcolor="#FFFFFF"><form action="separar_factura_resp.php?&codigo2=<? while ($row=mysql_fetch_array($result18)) { echo "".$row["id"].""; } mysql_free_result($result18)?>&codigo=<? while ($row=mysql_fetch_array($result19)) { echo "".$row["doc2"].""; } mysql_free_result($result19)?>" method="post">
      <div align="left">
        <table width="562" border="0" cellspacing="0">
          <tr>
            <th scope="col"><table width="552" border="0" align="center" cellspacing="0" bgcolor="#F4F4F4">
              <!--DWLayoutTable-->
              <tr>
                <td width="550" height="149" valign="top" bgcolor="#FFFFFF"><table width="536" border="0" align="center">
                      <!--DWLayoutTable-->
                      <tr bgcolor="#000000">
                        <td colspan="2" bgcolor="#000000"><div align="left" class="Estilo14 Estilo15">
                          <table width="0" border="0">
                            <tr>
                              <th width="104" scope="col"><strong><span class="Estilo22">Separar factura</span></strong></th>
                              <th width="406" scope="col"><div align="right">
                                <input name="button" type=button onClick="cerrarse()" value="Cerrar">
                              </div></th>
                            </tr>
                          </table>
                        </div></td>
                        </tr>
                      <tr>
                        <td width="199" bgcolor="#E3E9F1"><span class="Estilo21">Asignar factura a Cliente:</span></td>
                        <td width="327" bgcolor="#FFFFFF"><label>
                          <input name="doc2" type="text" id="doc2" value="<?php echo $row_Recordset2['doc2']; ?>">
                        </label></td>
                        </tr>
                      <tr>
                        <td bgcolor="#E3E9F1"><div align="left" ><strong><span class="Estilo15">Servicio:</span></strong></div></td>
                        <td valign="top" bgcolor="#FFFFFF"><font face="Verdana"><?php echo $row_Recordset2['servicio']; ?></font></td>
                      </tr>
                      <tr>
                        <td bgcolor="#E3E9F1"><div align="left"><span ><strong><span class="Estilo15">Habitacion:</span></strong></span></div></td>
                        <td valign="top" bgcolor="#FFFFFF"><span ><font face="Verdana"><?php echo $row_Recordset2['habitacion']; ?> <span ><font face="Verdana"><?php echo $row_Recordset2['nom_hab']; ?></font></span></font></span></td>
                      </tr>
                      <tr>
                        <td bgcolor="#E3E9F1"><strong>Estatus</strong></td>
                        <td valign="top" bgcolor="#FFFFFF"><span ><font face="Verdana"><?php echo $row_Recordset2['status']; ?></font></span></td>
                      </tr>
                      <tr>
                        <td bgcolor="#E3E9F1"><div align="left" ><strong>Tipo de Habitacion: </strong></div></td>
                        <td bgcolor="#FFFFFF"><span ><font face="Verdana"><?php echo $row_Recordset2['tipo']; ?></font></span>                          <div align="right" class="Estilo16">
                            <div align="right"></div>
                          </div></td>
                        </tr>
                      <tr>
                        <td bgcolor="#E3E9F1"><div align="left" ><strong><span class="Estilo15">Cantidad de Personas</span></strong></div></td>
                        <td bgcolor="#FFFFFF"></font></span><?php echo $row_Recordset2['personas']; ?></td>
                      </tr>
                      <tr>
                        <td bgcolor="#E3E9F1"><div align="left"><strong>Fecha</span> Inicio </strong></div></td>
                        <td bgcolor="#FFFFFF"></font></span><?php echo $row_Recordset2['fecha1']; ?></td>
                        </tr>
                      <tr>
                        <td bgcolor="#E3E9F1"><strong>Fecha Fin: </span></strong></td>
                        <td bgcolor="#FFFFFF"></font><?php echo $row_Recordset2['fecha2']; ?>                          <div align="center"></div></td>
                        </tr>
                      <tr>
                        <td bgcolor="#E3E9F1"><!--DWLayoutEmptyCell-->&nbsp;</td>
                        <td bgcolor="#FFFFFF"><!--DWLayoutEmptyCell-->&nbsp;</td>
                        </tr>
                      <tr>
                        <td bgcolor="#E3E9F1"><!--DWLayoutEmptyCell-->&nbsp;</td>
                        <td bgcolor="#FFFFFF"><input name="submit" type="submit" id="submit" value="   Modificar   " />
                          <font face="Arial" size="1"><a href="actualizar_reservacion.php?&amp;codigo=<?
	 //Mostramos los registros<br>
      while ($row=mysql_fetch_array($result9))
      {
echo "".$row["id"].""; 
}
mysql_free_result($result9)
?>"><span class="titulos">
                          <input name="fecha3" type="hidden" id="fecha3" value="<?php echo date("Y-m-d"); ?>" size="25" />
                          </span></a></font><font face="Arial" size="1"><a href="actualizar_reservacion.php?&amp;codigo=<?
	 //Mostramos los registros<br>
      while ($row=mysql_fetch_array($result9))
      {
echo "".$row["id"].""; 
}
mysql_free_result($result9)
?>"></a></font><font face="Arial" size="1">
                          <input name="codigo2" type="hidden" id="codigo2" value="<?php echo $codigo2; ?>" size="25" />
                          </font></td>
                        </tr>
                  </table></td>
              </tr>
            </table></th>
            </tr>
        </table>
      </div>
  </form>    </tr>
</table></td>
    <td background="imagenes/visor_r2_c3.jpg">&nbsp;</td>
    <td><img src="imagenes/spacer.gif" width="1" height="55" border="0" alt=""></td>
  </tr>
  <tr>
    <td colspan="3"><img name="visor_r3_c1" src="imagenes/visor_r3_c1.jpg" width="607" height="13" border="0" alt=""></td>
    <td><img src="imagenes/spacer.gif" width="1" height="13" border="0" alt=""></td>
  </tr>
</table>
<p align="center">&nbsp;</p>
</body>
</html>

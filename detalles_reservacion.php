   <?php require_once('conector/conector.php');?> 
<?
if (!isset($codigo))
 
$dbh=mysql_connect ($hostname,$username,$password) or die ('I cannot connect to the database because: ' . mysql_error());
mysql_select_db ($database); 



//Ejecutamos la sentencia SQL
$result1 = mysql_query("SELECT * FROM habitacion2 WHERE id  LIKE '$codigo'  ");
$result1n = mysql_query("SELECT * FROM habitacion2 WHERE id  LIKE '$codigo'  ");
$result1a = mysql_query("SELECT * FROM habitacion2 WHERE id  LIKE '$codigo'  ");
$result2 = mysql_query("SELECT * FROM habitacion2 WHERE id  LIKE '$codigo' ");
$result3 = mysql_query("SELECT * FROM habitacion2 WHERE id  LIKE '$codigo' ");
$result4 = mysql_query("SELECT * FROM habitacion2 WHERE id  LIKE '$codigo' ");
$result5 = mysql_query("SELECT * FROM habitacion2 WHERE id  LIKE '$codigo' ");
$result6 = mysql_query("SELECT * FROM habitacion2 WHERE id  LIKE '$codigo' ");
$result7 = mysql_query("SELECT * FROM habitacion2 WHERE id  LIKE '$codigo' ");
$result8 = mysql_query("SELECT * FROM habitacion2 WHERE id  LIKE '$codigo' ");
$result9 = mysql_query("SELECT * FROM habitacion2 WHERE id  LIKE '$codigo' ");
$result10 = mysql_query("SELECT * FROM habitacion2 WHERE id  LIKE '$codigo' ");
$result11 = mysql_query("SELECT * FROM habitacion2 WHERE id  LIKE '$codigo' ");
$result22 = mysql_query("SELECT * FROM habitacion2 WHERE id  LIKE '$codigo' ");
$result33 = mysql_query("SELECT * FROM habitacion2 WHERE id  LIKE '$codigo' ");
$result44 = mysql_query("SELECT * FROM habitacion2 WHERE id  LIKE '$codigo' ");
$result45 = mysql_query("SELECT * FROM habitacion2 WHERE id  LIKE '$codigo' ");
$resultnn = mysql_query("SELECT * FROM habitacion2 WHERE id  LIKE '$codigo' ");
$resultobser = mysql_query("SELECT * FROM habitacion2 WHERE id  LIKE '$codigo' ");

$resultcheck1 = mysql_query("SELECT * FROM habitacion2 WHERE id  LIKE '$codigo' ");
$resultcheck2 = mysql_query("SELECT * FROM habitacion2 WHERE id  LIKE '$codigo' ");
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

<script language="JavaScript" type="text/JavaScript">
<!--

function GP_popupConfirmMsg(msg) { //v1.0
  document.MM_returnValue = confirm(msg);
}
//-->
</script>
<style type="text/css">
<!--
body,td,th {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 10px;
}
-->
</style>
<?php 	require_once('css.php');?>
</head>

<body onLoad="MM_preloadImages('ver.php?titulo=<?php echo $row_rsArticulo['titulo']; ?>')">
<table width="601" border="0" align="center" cellspacing="0">
  <tr>
    <td width="535"><?php include("buscar_reservacion.php");?></td>
  </tr>
  <tr>
    <td><?php include("recursos.php");?></td>
  </tr>
</table>
<table width=280 height=18 align="center" cellpadding=2 cellspacing=2 class="estilotabla">
<tr>
  <td class="estilocelda">Datos de Habitaci&ograve;n reservada:</td>
</tr>
<tr><td><table width="601" height="15" border="0" align="center" cellspacing="0" bordercolor="#000000" bgcolor="#FF9900">
  <tr>
    <td width="591" height="28" bgcolor="#FFFFFF"><table width="601" border="0" align="center" cellspacing="0" bgcolor="#F4F4F4">
      <!--DWLayoutTable-->
      <tr>
        <td width="587" height="161" valign="top"><table width="599" border="0" align="center" cellspacing="0">
            <!--DWLayoutTable-->
            <tr>
              <td width="151" bgcolor="#E3E9F1"><div align="left" ><strong>Huesped:</span></strong></div></td>
              <td bgcolor="#FFFFFF">
                <? while ($row=mysql_fetch_array($result1n)){ echo "".$row["nombre"].""; }mysql_free_result($result1n)?>
              </font></td>
              <td bgcolor="#FFFFFF" >
                <? while ($row=mysql_fetch_array($result1a)){ echo "".$row["apellido"].""; }mysql_free_result($result1a)?>
              </font></td>
              <td bgcolor="#FFFFFF"><!--DWLayoutEmptyCell-->&nbsp;</td>
            </tr>
            <tr>
              <td bgcolor="#E3E9F1"><div align="left" ><strong>Habitacion:</span></strong></div></td>
              <td bgcolor="#FFFFFF"><span >
                <? while ($row=mysql_fetch_array($result1)){ echo "".$row["habitacion"].""; }mysql_free_result($result1)?>
                <? while ($row=mysql_fetch_array($result11)){echo "".$row["nom_hab"].""; }mysql_free_result($result11)?>
              </font></span></td>
              <td bgcolor="#E3E9F1" ><div align="right"><strong>Fecha</strong></div></td>
              <td bgcolor="#FFFFFF"><div align="right"><span >Desde:
                          <?
	 //Mostramos los registros<br>
      while ($row=mysql_fetch_array($result2))
      {
echo "".$row["fecha1"].""; 
}
mysql_free_result($result2)
?>
              </font></span></div></td>
            </tr>
            <tr>
              <td bgcolor="#E3E9F1"><div align="left" ><strong>Habitacion: </strong></div></td>
              <td colspan="3" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
                  <!--DWLayoutTable-->
                  <tr>
                    <td width="258" height="24" bgcolor="#FFFFFF" >
                      
                    </font>
                    <?
	 //Mostramos los registros<br>
      while ($row=mysql_fetch_array($result45))
      {
echo "".$row["habitacion"].""; 
}
mysql_free_result($result45)
?> 
                    <?
	 //Mostramos los registros<br>
      while ($row=mysql_fetch_array($result6))
      {
echo "".$row["nom_hab"].""; 
}
mysql_free_result($result6)
?></td>
                    <td width="154" bgcolor="#FFFFFF" ><div align="right">Hasta:</font></span>
                        <? while ($row=mysql_fetch_array($result22)) { echo "".$row["fecha2"].""; } mysql_free_result($result22)?>
                    </font></div></td>
                  </tr>
              </table></td>
            </tr>
            <tr>
              <td bgcolor="#E3E9F1"><div align="left" ><strong>Cantidad de Personas:</strong></div></td>
              <td width="104" bgcolor="#FFFFFF"><span ></font>
                <?
	 //Mostramos los registros<br>
      while ($row=mysql_fetch_array($result8))
      {
echo "".$row["personas"].""; 
}
mysql_free_result($result8)
?>
              </span></td>
              <td width="151" bgcolor="#E3E9F1"><div align="right" ><strong>Estatus de Habitacion :</strong></div></td>
              <td width="153" bgcolor="#FFFFFF"><span >
                <?
	 //Mostramos los registros<br>
      while ($row=mysql_fetch_array($result7))
      {
echo "".$row["status"].""; 
}
mysql_free_result($result7)
?>
              </font></span></td>
            </tr>
            <tr>
              <td bgcolor="#E3E9F1"><strong>Monto en Nota creditos:</strong></td>
              <td colspan="3" bgcolor="#FFFFFF"><span ></font>
                <?
	 //Mostramos los registros<br>
      while ($row=mysql_fetch_array($resultnn))
      {
echo "".$row["nota"].""; 
}
mysql_free_result($resultnn)
?>
              </span></td>
            </tr>
            <tr>
              <td bgcolor="#E3E9F1"><strong>Observaciones:</strong></td>
              <td colspan="3" bgcolor="#FFFFFF"></font>
                <?
	 //Mostramos los registros<br>
      while ($row=mysql_fetch_array($resultobser))
      {
echo "".$row["obsev"].""; 
}
mysql_free_result($resultobser)
?></td>
            </tr>
            <tr>
              <td colspan="3" bgcolor="#F4F4F4"><div align="right"><font face="Arial" size="1"><a href="factura_chequear2.php?&amp;codigo=<? while ($row=mysql_fetch_array($resultcheck1)){ echo "".$row["id"].""; } mysql_free_result($resultcheck1)
?>&amp;doc2=<? while ($row=mysql_fetch_array($resultcheck2)){ echo "".$row["doc2"].""; } mysql_free_result($resultcheck2)
?>"><img src="imagenes/check.gif" alt="Borrar " width="153" height="31" border="0" /></a></font></div></td>
              <td bgcolor="#F4F4F4"><font face="Arial" size="1"><a href="actualizar_reservacion.php?&amp;codigo=<? while ($row=mysql_fetch_array($result9))
      { echo "".$row["id"].""; } mysql_free_result($result9)
?>"><img src="imagenes/ocupar.gif" alt="Borrar " width="153" height="31" border="0" onClick="GP_popupConfirmMsg('&iquest;Est&aacute;s seguro que quieres Ocupar esta Habitaci&oacute;n ?');return document.MM_returnValue" /></a></font></td>
            </tr>
        </table></td>
      </tr>
    </table>
  </tr>
</table></td></tr>
</table> 
<p align="center">&nbsp;</p>
</body>
</html>

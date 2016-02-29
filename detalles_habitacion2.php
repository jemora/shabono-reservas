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
$resultnn = mysql_query("SELECT * FROM habitacion2 WHERE id  LIKE '$codigo' ");
$resultobser = mysql_query("SELECT * FROM habitacion2 WHERE id  LIKE '$codigo' ");
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
.Estilo1 {font-weight: bold}
body,td,th {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 10px;
}
.Estilo2 {
	font-size: 12px;
	font-weight: bold;
}
.Estilo14 {color: #666666; font-size: 12px; }
.Estilo16 {color: #666666; font-size: 12px; font-family: Verdana, Arial, Helvetica, sans-serif; }
-->
</style>
</head>

<body onLoad="MM_preloadImages('ver.php?titulo=<?php echo $row_rsArticulo['titulo']; ?>')">
<div align="center"><img src="imagenes/banne6.gif" width="607" height="30" />
  </div>
</div>
<table width="619" border="0" align="center" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr>
    <td width="619" height="28" valign="top"><table width="410" height="15" border="0" align="left" cellspacing="0" bgcolor="#FF9900">
  <tr>
    <td width="220" height="28" bgcolor="#FFFFFF"><form action="opcion6.php" method="post">
  
      <div align="left">
        <table width="562" border="0" cellspacing="0">
        <tr>
          <th width="230" scope="col"><span class="Estilo8">Buscar Habitaciones Asignadas</span></th>
          <th width="132" scope="col"><input name="codigo" type="text" id="codigo" size="22" maxlength="150" / style="background-color:e3e3e3; border: 1px solid #666666; font-size:8pt; color: #000099" /></th>
          <th width="54" scope="col"><input name="submit" type="submit" value="Buscar" /></th>
          <th width="69" scope="col"><span class="Estilo7">Busqueda de Clientes </span></th>
          <th width="69" scope="col"><span class="Estilo7">Clientes <a href="javascript:Abrir_ventana('buscador_cliente.php')"><img src="imagenes/view.gif" width="17" height="17" border="0" /></a></span></th>
        </tr>
      </table>
        </div>
    </form>
    <td width="186" height="28" bgcolor="#FFFFFF">&nbsp;</td>
  </tr>
</table></td>
  </tr>
  <tr>
    <td height="28" valign="top"><br />
      <table width="566" border="1" align="center" cellspacing="0" bordercolor="#999999" bgcolor="#F4F4F4">
        <!--DWLayoutTable-->
        <tr>
          <td width="560" height="26" valign="top"><table width="560" border="0" align="center" cellspacing="0">
            <tr>
              <td width="364" bgcolor="#F4F4F4"><table width="560" border="0" align="center" cellspacing="0">
                    <!--DWLayoutTable-->
                    <tr>
                      <td width="19" bgcolor="#F4F4F4"><span class="Estilo14"><a href="javascript:history.back(1)"><img src="imagenes/ico_3.gif" alt="Regresar" width="18" height="18" border="0" /></a></span></td>
                      <td width="136" bgcolor="#F4F4F4"><span class="Estilo16">Regresar</span></td>
                      <td width="364" bgcolor="#F4F4F4"><div align="right"></div></td>
                      <td width="23" bgcolor="#F4F4F4"><div align="right"></div></td>
                    </tr>
                </table></td>
            </tr>
          </table></td>
        </tr>
      </table></td>
  </tr>
</table>
<br>
<table width="601" height="15" border="1" align="center" cellspacing="0" bordercolor="#000000" bgcolor="#FF9900">
  <tr>
    <td width="591" height="28" bgcolor="#FFFFFF"><form action="opcion4.php" method="post">
      <div align="left">
        <table width="562" border="0" cellspacing="0">
          <tr>
            <th scope="col"><table width="589" border="0" align="center" cellspacing="0" bgcolor="#F4F4F4">
              <!--DWLayoutTable-->
              <tr>
                <td width="587" height="149" valign="top"><span class="Estilo2">Datos del habitacion Reservada:</span> <br>
                  <br>
                    <table width="601" border="0" align="center" cellspacing="0">
                      <!--DWLayoutTable-->
                      <tr>
                        <td width="151" bgcolor="#E3E9F1"><div align="left" class="Estilo14"><strong>Huesped:</span></strong></div></td>
                        <td bgcolor="#FFFFFF"><font face="Verdana">
                          <? while ($row=mysql_fetch_array($result1n)){ echo "".$row["nombre"].""; }mysql_free_result($result1n)?>
                        </font></td>
                        <td bgcolor="#FFFFFF" ><font face="Verdana">
                          <? while ($row=mysql_fetch_array($result1a)){ echo "".$row["apellido"].""; }mysql_free_result($result1a)?>
                        </font></td>
                        <td bgcolor="#FFFFFF"><!--DWLayoutEmptyCell-->&nbsp;</td>
                      </tr>
                      <tr>
                        <td bgcolor="#E3E9F1"><div align="left" class="Estilo14"><strong><span class="Estilo15">Habitacion:</span></strong></div></td>
                        <td bgcolor="#FFFFFF"><span class="Estilo14"><font face="Verdana">
                          <? while ($row=mysql_fetch_array($result1)){ echo "".$row["habitacion"].""; }mysql_free_result($result1)?>
                          <? while ($row=mysql_fetch_array($result11)){echo "".$row["nom_hab"].""; }mysql_free_result($result11)?>
                        </font></span></td>
                        <td bgcolor="#E3E9F1" class="Estilo16"><div align="right"><strong>Fecha</strong></div></td>
                        <td bgcolor="#FFFFFF"><div align="right"><span class="Estilo14"><font face="Verdana"><strong>Desde:</strong>
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
                        <td bgcolor="#E3E9F1"><div align="left" class="Estilo14"><strong><span class="Estilo15">Servicio:</span></strong></div></td>
                        <td colspan="3" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
                            <!--DWLayoutTable-->
                            <tr>
                              <td width="258" height="24" bgcolor="#FFFFFF" class="Estilo14"><font face="Verdana">
                                <?
	 //Mostramos los registros<br>
      while ($row=mysql_fetch_array($result5))
      {
echo "".$row["servicio"].""; 
}
mysql_free_result($result5)
?>
                              </font></td>
                              <td width="154" bgcolor="#FFFFFF" class="Estilo14"><div align="right"><span class="Estilo1"><font face="Verdana">Hasta:</font></span><font face="Verdana">
                                <? while ($row=mysql_fetch_array($result22)) { echo "".$row["fecha2"].""; } mysql_free_result($result22)?>
                              </font></div></td>
                            </tr>
                        </table></td>
                      </tr>
                      <tr>
                        <td bgcolor="#E3E9F1"><div align="left" class="Estilo14"><strong>Tipo de Habitacion: </strong></div></td>
                        <td width="104" bgcolor="#FFFFFF"><span class="Estilo14"><font face="Verdana">
                          <?
	 //Mostramos los registros<br>
      while ($row=mysql_fetch_array($result6))
      {
echo "".$row["tipo"].""; 
}
mysql_free_result($result6)
?>
                        </font></span></td>
                        <td width="151" bgcolor="#E3E9F1"><div align="right" class="Estilo16"><strong>Estatus de Habitacion</strong> :</div></td>
                        <td width="153" bgcolor="#FFFFFF"><span class="Estilo14"><font face="Verdana">
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
                        <td bgcolor="#E3E9F1"><div align="left" class="Estilo14"><strong><span class="Estilo15">Cantidad de Personas</span></strong>:</div></td>
                        <td colspan="3" bgcolor="#FFFFFF"><span class="Estilo14"><font face="Verdana">
                          <?
	 //Mostramos los registros<br>
      while ($row=mysql_fetch_array($result8))
      {
echo "".$row["personas"].""; 
}
mysql_free_result($result8)
?>
                        </font></span></td>
                      </tr>
                      <tr>
                        <td bgcolor="#E3E9F1"><strong><span class="Estilo15">Monto en Nota creditos:</span></strong></td>
                        <td colspan="3" bgcolor="#FFFFFF"><font face="Verdana">
                          <?
	 //Mostramos los registros<br>
      while ($row=mysql_fetch_array($resultnn))
      {
echo "".$row["nota"].""; 
}
mysql_free_result($resultnn)
?>
                        </font></td>
                      </tr>
                      <tr>
                        <td bgcolor="#E3E9F1"><strong><span class="Estilo15">Observaciones:</span></strong></td>
                        <td colspan="3" bgcolor="#FFFFFF"><font face="Verdana">
                          <?
	 //Mostramos los registros<br>
      while ($row=mysql_fetch_array($resultobser))
      {
echo "".$row["obsev"].""; 
}
mysql_free_result($resultobser)
?>
                        </font></td>
                      </tr>
                      <tr>
                        <td colspan="4" bgcolor="#F4F4F4"><div align="right"><font face="Arial" size="1"><a href="borrar_asignacion.php?&amp;codigo=<?
	 //Mostramos los registros<br>
      while ($row=mysql_fetch_array($result9))
      {
echo "".$row["doc2"].""; 
}
mysql_free_result($result9)
?>&amp;codigo2=<?
	 //Mostramos los registros<br>
      while ($row=mysql_fetch_array($result10))
      {
echo "".$row["id"].""; 
}
mysql_free_result($result10)
?>"><img src="imagenes/anular.gif" alt="Borrar " width="153" height="31" border="0" onClick="GP_popupConfirmMsg('&iquest;Est&aacute;s seguro que quieres borrar esta Habitacion asignada?');return document.MM_returnValue" /></a></font></div></td>
                      </tr>
                  </table></td>
              </tr>
            </table></th>
            </tr>
        </table>
      </div>
  </form>    </tr>
</table>
<p align="center">&nbsp;</p>
</body>
</html>

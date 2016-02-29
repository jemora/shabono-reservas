   <?php require_once('conector/conector.php');?> 
<?
if (!isset($codigo))
 
$dbh=mysql_connect ($hostname,$username,$password) or die ('I cannot connect to the database because: ' . mysql_error());
mysql_select_db ($database); 



//Ejecutamos la sentencia SQL
$result1 = mysql_query("SELECT * FROM habitacion2 WHERE doc2  LIKE '$codigo' and d like '$d' and a like '$a' and m like '$m' ");
$result2 = mysql_query("SELECT * FROM habitacion2 WHERE doc2  LIKE '$codigo' and d like '$d' and a like '$a' and m like '$m'");
$result3 = mysql_query("SELECT * FROM habitacion2 WHERE doc2  LIKE '$codigo' and d like '$d' and a like '$a' and m like '$m'");
$result4 = mysql_query("SELECT * FROM habitacion2 WHERE doc2  LIKE '$codigo' and d like '$d' and a like '$a' and m like '$m'");
$result5 = mysql_query("SELECT * FROM habitacion2 WHERE doc2  LIKE '$codigo' and d like '$d' and a like '$a' and m like '$m'");
$result6 = mysql_query("SELECT * FROM habitacion2 WHERE doc2  LIKE '$codigo' and d like '$d' and a like '$a' and m like '$m'");
$result7 = mysql_query("SELECT * FROM habitacion2 WHERE doc2  LIKE '$codigo' and d like '$d' and a like '$a' and m like '$m'");
$result8 = mysql_query("SELECT * FROM habitacion2 WHERE doc2  LIKE '$codigo' and d like '$d' and a like '$a' and m like '$m'");
$result9 = mysql_query("SELECT * FROM habitacion2 WHERE doc2  LIKE '$codigo' and d like '$d' and a like '$a' and m like '$m'");
$result10 = mysql_query("SELECT * FROM habitacion2 WHERE doc2  LIKE '$codigo' and d like '$d' and a like '$a' and m like '$m'");


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
.Estilo14 {font-size: 12px}
.Estilo15 {color: #000000}
.Estilo16 {font-size: 12px; color: #000000; }
.Estilo17 {color: #666666; font-size: 12px; }
-->
</style>
<script language="JavaScript" type="text/JavaScript">
<!--

function GP_popupConfirmMsg(msg) { //v1.0
  document.MM_returnValue = confirm(msg);
}
//-->
</script>
</head>

<body onLoad="MM_preloadImages('ver.php?titulo=<?php echo $row_rsArticulo['titulo']; ?>')">
<p>
  <?php include("buscar_cliente5.php");?></p>
<table width="566" border="1" align="center" cellspacing="0" bordercolor="#999999" bgcolor="#F4F4F4">
  <!--DWLayoutTable-->
  <tr>
    <td width="560" height="29" valign="top"><table width="560" border="0" align="center">
      <!--DWLayoutTable-->
      <tr>
        <td width="160" bgcolor="#F4F4F4"><span class="Estilo17"><a href="javascript:history.back(1)">&lt;<strong> Regresar</strong></a></span></td>
        <td width="390" bgcolor="#F4F4F4"><div align="right"><a href="javascript: window.print()"><img src="imagenes/print.gif" width="16" height="11" border="0"></a></div></td>
      </tr>
    </table></td>
  </tr>
</table>
<br>
<table width="601" height="15" border="0" align="center" cellspacing="0" bgcolor="#FF9900">
  <tr>
    <td width="220" height="28" bgcolor="#FFFFFF"><form action="opcion4.php" method="post">
      <div align="left">
        <table width="562" border="0" cellspacing="0">
          <tr>
            <th scope="col"><table width="589" border="0" align="center" cellspacing="0" bgcolor="#F4F4F4">
              <!--DWLayoutTable-->
              <tr>
                <td width="587" height="149" valign="top"><strong>Datos del habitacion:</strong> <br>
                    <table width="601" border="0" align="center">
                      <!--DWLayoutTable-->
                      <tr>
                        <td width="150" bgcolor="#F4F4F4"><div align="left" class="Estilo14"><span class="Estilo15">Habitacion:</span></div></td>
                        <td bgcolor="#FFFFFF"><span class="Estilo14"><font face="Verdana">
                          <?
	 //Mostramos los registros<br>
      while ($row=mysql_fetch_array($result1))
      {
echo "".$row["habitacion"].""; 
}
mysql_free_result($result1)
?>
                        </font></span></td>
                        <td bgcolor="#FFFFFF" class="Estilo16">Fecha</td>
                        <td bgcolor="#FFFFFF"><span class="Estilo14"><font face="Verdana">
<?
	 //Mostramos los registros<br>
      while ($row=mysql_fetch_array($result2))
      {
echo "".$row["d"].""; 
}
mysql_free_result($result2)
?>                        
/
<?
	 //Mostramos los registros<br>
      while ($row=mysql_fetch_array($result3))
      {
echo "".$row["m"].""; 
}
mysql_free_result($result3)
?>
/
<?
	 //Mostramos los registros<br>
      while ($row=mysql_fetch_array($result4))
      {
echo "".$row["a"].""; 
}
mysql_free_result($result4)
?>
                        </font></span></td>
                      </tr>
                      <tr>
                        <td bgcolor="#F4F4F4"><div align="left" class="Estilo14"><span class="Estilo15">Servicio:</span></div></td>
                        <td colspan="3" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
                            <!--DWLayoutTable-->
                            <tr>
                              <td width="252" height="24" bgcolor="#FFFFFF" class="Estilo14"><font face="Verdana">
                                <?
	 //Mostramos los registros<br>
      while ($row=mysql_fetch_array($result5))
      {
echo "".$row["servicio"].""; 
}
mysql_free_result($result5)
?>
                              </font></td>
                            </tr>
                        </table></td>
                      </tr>
                      <tr>
                        <td bgcolor="#F4F4F4"><div align="left" class="Estilo14">Tipo de Habitacion: </div></td>
                        <td width="142" bgcolor="#FFFFFF"><span class="Estilo14"><font face="Verdana">
                          <?
	 //Mostramos los registros<br>
      while ($row=mysql_fetch_array($result6))
      {
echo "".$row["tipo"].""; 
}
mysql_free_result($result6)
?>
                        </font></span></td>
                        <td width="155" bgcolor="#FFFFFF"><div align="right" class="Estilo16">Estatus de Habitacion :</div></td>
                        <td width="102" bgcolor="#FFFFFF"><span class="Estilo14"><font face="Verdana">
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
                        <td bgcolor="#F4F4F4"><div align="left" class="Estilo14"><span class="Estilo15">Cantidad de Personas</span></div></td>
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
                        <td colspan="4" bgcolor="#7794AE"><div align="right"><font face="Arial" size="1"><a href="borrar_asignacion.php?&amp;codigo=<?
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
?>"><img src="borrar.gif" alt="Borrar " width="24" height="24" border="0" onClick="GP_popupConfirmMsg('&iquest;Est&aacute;s seguro que quieres borrar esta Habitacion asignada?');return document.MM_returnValue" /></a></font></div></td>
                        </tr>
                  </table></td>
              </tr>
            </table></th>
            </tr>
        </table>
      </div>
    </form>
    <td width="186" height="28" bgcolor="#FFFFFF">&nbsp;</td>
  </tr>
</table>
<p align="center">&nbsp;</p>
</body>
</html>

   <?php require_once('conector/conector.php');?> 
<?
if (!isset($codigo))
 
$dbh=mysql_connect ($hostname,$username,$password) or die ('I cannot connect to the database because: ' . mysql_error());
mysql_select_db ($database); 



//Ejecutamos la sentencia SQL
$result1 = mysql_query("SELECT * FROM clientes WHERE doc2  LIKE '$codigo'");
$result2 = mysql_query("SELECT * FROM clientes WHERE doc2  LIKE '$codigo'");
$result3 = mysql_query("SELECT * FROM clientes WHERE doc2  LIKE '$codigo'");
$result4 = mysql_query("SELECT * FROM clientes WHERE doc2  LIKE '$codigo'");
$result5 = mysql_query("SELECT * FROM clientes WHERE doc2  LIKE '$codigo'");
$result6 = mysql_query("SELECT * FROM clientes WHERE doc2  LIKE '$codigo'");
$result7 = mysql_query("SELECT * FROM clientes WHERE doc2  LIKE '$codigo'");
$result8 = mysql_query("SELECT * FROM clientes WHERE doc2  LIKE '$codigo'");
$result9 = mysql_query("SELECT * FROM clientes WHERE doc2  LIKE '$codigo'");
$result10 = mysql_query("SELECT * FROM clientes WHERE doc2  LIKE '$codigo'");
$result11 = mysql_query("SELECT * FROM clientes WHERE doc2  LIKE '$codigo'");
$result12 = mysql_query("SELECT * FROM clientes WHERE doc2  LIKE '$codigo'");



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
.Estilo1 {font-size: 12px}
.Estilo5 {font-size: 12px; color: #FFCC00; font-weight: bold; }
.Estilo14 {color: #FFFFFF}
a:link {
	color: #FFCC00;
	text-decoration: none;
}
a:visited {
	text-decoration: none;
	color: #FF9900;
}
a:hover {
	text-decoration: none;
	color: #FFFFFF;
}
a:active {
	text-decoration: none;
	color: #FF9900;
}
-->
</style></head>

<body onLoad="MM_preloadImages('ver.php?titulo=<?php echo $row_rsArticulo['titulo']; ?>')">
<table width="593" border="1" align="center" cellspacing="0" bordercolor="#999999" bgcolor="#F4F4F4">
  <!--DWLayoutTable-->
  <tr>
    <td width="587" height="149" valign="top"><table width="643" border="0" align="center" cellspacing="0" bordercolor="#CCCCCC">
      <tr>
        <td width="120" height="8" bgcolor="#000000" ><div align="left" class="Estilo5">
          <p align="center" class="Estilo14">Prefactura</p>
        </div></td>
        <td width="120" height="8" bgcolor="#000000" >&nbsp;</td>
        <td width="171" height="8" bgcolor="#000000" ><div align="left" class="Estilo5">
          <div align="center"><a href="consumos_clientes.php?&codigo=<?php echo $codigo ?>" target="frame">Consumos</a></div>
        </div></td>
        <td width="107" height="8" bgcolor="#000000" ><div align="left" class="Estilo1">
          <div align="left" class="Estilo5"><a href="111">Cancelar Factura</a> </div>
        </div></td>
      </tr>


    </table>
      <br>
      <?php include("lista_facturas_pendientes.php");?>    <br>
      <?php include("lista_consumos_prefactura.php");?>
      <br>
      <table width="643" border="0" align="center" cellspacing="0" bordercolor="#CCCCCC">
        <tr>
          <td height="19" bgcolor="#CCCCCC" >&nbsp;</td>
        </tr>
        <tr>
          <td height="25" ><table width="299" border="00" align="right" cellspacing="0">
              <tr>
                <th width="226" scope="col">Total </th>
                <th width="69" scope="col"> <?php
if (!isset($codigo))
$link = mysql_connect($hostname, $username , $password); 
mysql_select_db($database ); 
$feha=date("d-m-Y");
$test11a = mysql_query("SELECT SUM(subt) from consumo WHERE opc like '0' and  cliente LIKE '$codigo' ");
$test1 = mysql_fetch_row($test11a);

echo $test1[0];
?></th>
              </tr>
            </table>
              <div align="right"></div></td>
      </table></td>
  </tr>
</table>
</body>
</html>

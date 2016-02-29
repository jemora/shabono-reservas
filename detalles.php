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
.Estilo1 {color: #FFCC00}
-->
</style>
<link href="Level2_Verdana_Text.css" rel="stylesheet" type="text/css">
<style type="text/css">
<!--
.Estilo2 {font-weight: bold}
-->
</style>
</head>

<body onLoad="MM_preloadImages('ver.php?titulo=<?php echo $row_rsArticulo['titulo']; ?>')">
<?php include("logo.php");?>
<br>
<?php include("recursos.php");?>
<br>
<table width="601" border="1" align="center" cellspacing="0" bordercolor="#000000" bgcolor="#F4F4F4">
  <!--DWLayoutTable-->
  <tr>
    <td width="560" height="24" bgcolor="#000000"><div align="left"><strong><span class="Estilo2"><span class="Estilo1">Datos del Cliente</span>es del Cliente </span></strong></div></td>
  </tr>
  <tr>
    <td height="218" valign="top"><table width="600" border="0" align="center">
      <!--DWLayoutTable-->
      <tr>
        <td width="160" bgcolor="#F4F4F4"><span class="small" ><strong>Nombre:</strong></span></td>
        <td width="390" bgcolor="#FFFFFF">
          <?
	 //Mostramos los registros<br>
      while ($row=mysql_fetch_array($result1))
      {
echo "".$row["nombre"].""; 
}
mysql_free_result($result1)
?>
          <?
	 //Mostramos los registros<br>
      while ($row=mysql_fetch_array($result5))
      {
echo "".$row["apellidos"].""; 
}
mysql_free_result($result5)
?>
        </font></td>
      </tr>
      <tr>
        <td bgcolor="#F4F4F4"><span class="small" ><strong>Nacionalidad:</strong></span></td>
        <td valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
          <!--DWLayoutTable-->
          <tr>
            <td width="252" height="24" bgcolor="#FFFFFF">
              <?
	 //Mostramos los registros<br>
      while ($row=mysql_fetch_array($result2))
      {
echo "".$row["nac"].""; 
}
mysql_free_result($result2)
?> <span class="small">Documento</span> 
              <?
	 //Mostramos los registros<br>
      while ($row=mysql_fetch_array($result3))
      {
echo "".$row["doc"].""; 
}
mysql_free_result($result3)
?>
              <?
	 //Mostramos los registros<br>
      while ($row=mysql_fetch_array($result4))
      {
echo "".$row["doc2"].""; 
}
mysql_free_result($result4)
?>
            </font></td>
          </tr>
        </table></td>
      </tr>
      
      <tr>
        <td bgcolor="#F4F4F4" class="small"><strong>Pais:</strong></td>
        <td bgcolor="#FFFFFF">
          <?
	 //Mostramos los registros<br>
      while ($row=mysql_fetch_array($result6))
      {
echo "".$row["pais"].""; 
}
mysql_free_result($result6)
?>
        </font></td>
      </tr>
      <tr>
        <td bgcolor="#F4F4F4" class="small"><strong>Ciudad:</strong></td>
        <td bgcolor="#FFFFFF">
          <?
	 //Mostramos los registros<br>
      while ($row=mysql_fetch_array($result7))
      {
echo "".$row["ciudad"].""; 
}
mysql_free_result($result7)
?>
        </font></td>
      </tr>
      <tr>
        <td bgcolor="#F4F4F4" class="small"><strong>Direccion</strong></td>
        <td bgcolor="#FFFFFF">
          <?
	 //Mostramos los registros<br>
      while ($row=mysql_fetch_array($result8))
      {
echo "".$row["direccion"].""; 
}
mysql_free_result($result8)
?>
        </font></td>
      </tr>
      <tr>
        <td bgcolor="#F4F4F4" class="small"><strong>Telefono</strong></td>
        <td bgcolor="#FFFFFF">
          <?
	 //Mostramos los registros<br>
      while ($row=mysql_fetch_array($result9))
      {
echo "".$row["telefono"].""; 
}
mysql_free_result($result9)
?>
        </font></td>
      </tr>
      <tr>
        <td bgcolor="#F4F4F4" class="small"><strong>Correo</strong></td>
        <td bgcolor="#FFFFFF">
          <?
	 //Mostramos los registros<br>
      while ($row=mysql_fetch_array($result10))
      {
echo "".$row["correo"].""; 
}
mysql_free_result($result10)
?>
        </font></td>
      </tr>
      <tr>
        <td bgcolor="#F4F4F4" class="small"><div align="left" ><strong>Tipo de Cliente </strong></div></td>
        <td bgcolor="#FFFFFF">
          <?
	 //Mostramos los registros<br>
      while ($row=mysql_fetch_array($result11))
      {
echo "".$row["cliente"].""; 
}
mysql_free_result($result11)
?>
        </font></td>
      </tr>
      <tr>
        <td bgcolor="#F4F4F4" class="small"><strong>Placa de Vehiculo: </strong></td>
        <td bgcolor="#FFFFFF">
          <?
	 //Mostramos los registros<br>
      while ($row=mysql_fetch_array($result12))
      {
echo "".$row["vehiculo"].""; 
}
mysql_free_result($result12)
?>
        </font></td>
      </tr>
    </table></td>
  </tr>
</table>
</body>
</html>

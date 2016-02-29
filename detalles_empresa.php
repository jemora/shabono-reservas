

<?php 
require_once('conector/conector.php');
?>
<?
if (!isset($codigo))

$dbh=mysql_connect ($hostname, $username, $password) or die ('I cannot connect to the database because: ' . mysql_error());
mysql_select_db ($database); 

$result1 = mysql_query("SELECT * FROM empresas WHERE ID  LIKE '$codigo'");
$result2 = mysql_query("SELECT * FROM empresas WHERE ID  LIKE '$codigo'");
$result3 = mysql_query("SELECT * FROM empresas WHERE ID  LIKE '$codigo'");
$result4 = mysql_query("SELECT * FROM empresas WHERE ID  LIKE '$codigo'");
$result5 = mysql_query("SELECT * FROM empresas WHERE ID  LIKE '$codigo'");
$result6 = mysql_query("SELECT * FROM empresas WHERE ID  LIKE '$codigo'");
$result7 = mysql_query("SELECT * FROM empresas WHERE ID  LIKE '$codigo'");
$result8 = mysql_query("SELECT * FROM empresas WHERE ID  LIKE '$codigo'");
$result9 = mysql_query("SELECT * FROM empresas WHERE ID  LIKE '$codigo'");
$result10 = mysql_query("SELECT * FROM empresas WHERE ID  LIKE '$codigo'");

?>
<html>
<head>
<title>Documento sin t&iacute;tulo</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
<!--
.Estilo1 {font-family: Arial, Helvetica, sans-serif}
.Estilo3 {font-family: Arial, Helvetica, sans-serif; font-size: 12px; }
.Estilo14 {color: #666666; font-size: 12px; }
body,td,th {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 10px;
}
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
-->
</style>
</head>

<body>
<table width="20" border="0" align="center" cellspacing="0">
  <tr>
    <th scope="col"><div align="left"><strong>
      <?php include("buscar_cliente2.php");?>
    </strong></div></th>
  </tr>
  <tr>
    <th scope="col"><div align="left">
      <?php include("logo.php");?>
    </div>    </th>
  </tr>
  <tr>
    <th scope="col"><div align="left"></div></th>
  </tr>
  <tr>
    <td><?php include("recursos.php");?></td>
  </tr>
  <tr>
    <td><strong>Actualizar Empresa: </strong></td>
  </tr>
  <tr>
    <td height="385"><form name="form1" method="post" action="actualizar_empresas.php?&amp;buscar=<?
	
      while ($row=mysql_fetch_array($result9))
      {
echo "".$row["ID"].""; 
}
mysql_free_result($result9)
?>">
      <table width="584" border="0" align="center" cellspacing="0" bordercolor="#000066">
        <tr>
          <th width="582" scope="col"><table width="582" border="0" cellspacing="0" cellpadding="4" align="center">
            <tr bgcolor="#FFFFCC">
              <td bgcolor="#EEF3F7"><div align="right" class="Estilo1">
                <div align="left"><font size="2">Empresa
                  : </font></div>
              </div></td>
              <td colspan="3" bgcolor="#EEF3F7"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2">
                <input name="empresa" class="formulario" id="empresa" value="<?
	
      while ($row=mysql_fetch_array($result1))
      {
echo "".$row["empresa"].""; 
}
mysql_free_result($result1)
?>" type="text">
              </font></b></td>
            </tr>
            <tr>
              <td width="147" bgcolor="#EEF3F7"><div align="left"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">rif
                : </font></div></td>
              <td colspan="3" bgcolor="#EEF3F7"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2">
                <input name="rif" class="formulario" id="rif" value="<?
	
      while ($row=mysql_fetch_array($result2))
      {
echo "".$row["rif"].""; 
}
mysql_free_result($result2)
?>" type="text">
              </font></b></td>
            </tr>
            <tr bgcolor="#FFFFCC">
              <td width="147" bgcolor="#EEF3F7"><div align="left"><font face="Verdana" size="2"><font face="Verdana" size="2"><font face="Verdana, Arial, Helvetica, sans-serif">Pais:</font> </font></font></div></td>
              <td width="145" bgcolor="#EEF3F7"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2">
                <input name="pais" class="formulario" id="pais" value="<?
	
      while ($row=mysql_fetch_array($result3))
      {
echo "".$row["pais"].""; 
}
mysql_free_result($result3)
?>" type="text">
              </font></b></td>
              <td width="97" bgcolor="#EEF3F7"><div align="left"><font face="Verdana" size="2"><font face="Verdana" size="2"><font face="Verdana, Arial, Helvetica, sans-serif">Ciudad:</font> </font></font></div></td>
              <td width="161" bgcolor="#EEF3F7"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">
                <input name="ciudad" class="formulario" id="ciudad" value="<?
	
      while ($row=mysql_fetch_array($result4))
      {
echo "".$row["ciudad"].""; 
}
mysql_free_result($result4)
?>" type="text">
              </font></td>
            </tr>
            <tr bgcolor="#FFFFCC">
              <td width="147" bgcolor="#EEF3F7"><div align="left"><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><font size="2">Direccion:</font> </font></div></td>
              <td colspan="3" bgcolor="#EEF3F7"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2">
                <textarea name="direccion" cols="50" rows="5" class="formulario" id="direccion"><?
	
      while ($row=mysql_fetch_array($result5))
      {
echo "".$row["direccion"].""; 
}
mysql_free_result($result5)
?>
          </textarea>
              </font></b></td>
              <input type="hidden" name="nivelacceso" value="0" />
              <input type="hidden" name="salir" value="salir" />
            </tr>
            <tr bgcolor="#FFFFCC">
              <td height="13" bgcolor="#EEF3F7"><div align="left"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Telefono :</font></div></td>
              <td height="13" colspan="3" bgcolor="#EEF3F7"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2">
                <input name="telefono" class="formulario" id="telefono" value="<?
	
      while ($row=mysql_fetch_array($result6))
      {
echo "".$row["telefono"].""; 
}
mysql_free_result($result6)
?>" type="text">
              </font></b></td>
            </tr>
            <tr bgcolor="#FFFFCC">
              <td height="7" bgcolor="#EEF3F7"><div align="left"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Correo Electronico:</font></div></td>
              <td height="7" colspan="3" bgcolor="#EEF3F7"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2">
                <input name="correo" class="formulario" id="correo" value="<?
	
      while ($row=mysql_fetch_array($result7))
      {
echo "".$row["correo"].""; 
}
mysql_free_result($result7)
?>" type="text">
              </font></b></td>
            </tr>
            <tr bgcolor="#FFFFCC">
              <td height="40" bgcolor="#EEF3F7">&nbsp;</td>
              <td height="40" colspan="3" bgcolor="#EEF3F7">&nbsp;</td>
            </tr>
            <tr bgcolor="#FFFFCC">
              <td height="40" colspan="4" bgcolor="#EEF3F7"><div align="center"><font face="Verdana" size="2"><font face="Verdana" size="2"><font face="Verdana" size="2"><span class="Estilo3">
                <input name="fecha" type="hidden" id="fecha" value="<?php echo date("d-m-Y"); ?>" size="25" />
                </span></font></font></font>
                          <input type="submit" name="Submit" value="Actualizar Cliente" class="botones" />
              </div></td>
            </tr>
          </table></th>
        </tr>
      </table>
    </form></td>
  </tr>
</table>
<p>&nbsp;</p>
</body>
</html>

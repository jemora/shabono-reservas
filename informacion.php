
<?php 
require_once('conector/conector.php');
?>
<?

$dbh=mysql_connect ($hostname, $username, $password) or die ('I cannot connect to the database because: ' . mysql_error());
mysql_select_db ($database); 

$result1 = mysql_query("SELECT * FROM informacion WHERE id  LIKE '1'");
$result2 = mysql_query("SELECT * FROM informacion WHERE id  LIKE '1'");
$result3 = mysql_query("SELECT * FROM informacion WHERE id  LIKE '1'");
$result4 = mysql_query("SELECT * FROM informacion WHERE id  LIKE '1'");
$result5 = mysql_query("SELECT * FROM informacion WHERE id  LIKE '1'");
$result6 = mysql_query("SELECT * FROM informacion WHERE id  LIKE '1'");


?>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title></title></head>

<style type="text/css">
body{font: 76 Arial, sans-serif;}
form{width:600px;padding:5px 0;border: 2px solid #71828A;
background: #C4CECF;}
fieldset{border: 0px solid #000;}
legend{font: bold 140% Arial,sans-serif;color: #27518A;}
Ahora definimos las medidas del div que contiene al formulario, tanto el margen, ancho y alto.
div.medidas,div.check{margin: 10px 0 10px 10px;}
div.medidas label{float:left;width:90px;line-height:23px;}
div.medidas input{width:120px;}

Finalmente, modificamos el botón de submit, fíjate como lo hacemos, al haberle dado una id (“login”) en el código html, ahora para referirnos solamente a ese botón precisamos su id.

input#login{margin-left: 100px;border: 1px solid #27518A;
background: #ccc url(fondoBoton.jpg) repeat-x;}
</style>

<body text="#000000"><div align="center">
<table width="81%" border="0" align="center" cellpadding="0" cellspacing="0">
    <!--DWLayoutTable-->
<tr>
      <td width="100%" height="305" valign="top"><div align="right" >
          <div align="left"><img src="imagenes/banne16.gif" width="607" height="30"><br />
        </div>
        </div>
        <form method="post" action="actualizar_informacion.php">
          <table width="597" border="0" align="center" cellspacing="0">
        <tr>
          <th width="591" scope="col"><table width="567" border="0" cellspacing="0" cellpadding="4" align="center">
            <tr >
              <td width="151"><div align="left">Titulo de Pagina: </font></div></td>
              <td ><div align="left"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2">
                <input name="nombre" type="text" class="imputbox" id="nombre" value="<?
	
      while ($row=mysql_fetch_array($result1))
      {
echo "".$row["nombre"].""; 
}
mysql_free_result($result1)
?>" /style="background-color:e3e3e3; border: 1px solid #666666; font-size:8pt; color: #000099" >
              </font></b></div></td>
            </tr>
            <tr>
              <td width="151"><div align="left">Telefono:</font></div></td>
              <td><div align="left"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2">
                <input name="telefono" type="text" class="imputbox" id="telefono" value="<?
	
      while ($row=mysql_fetch_array($result2))
      {
echo "".$row["telefono"].""; 
}
mysql_free_result($result2)
?>" /style="background-color:e3e3e3; border: 1px solid #666666; font-size:8pt; color: #000099" >
              </font></b></div></td>
            </tr>
            <tr>
              <td width="151"><div align="left">Correo:</font></div></td>
              <td><div align="left"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2">
                <input name="correo" type="text" class="imputbox" id="correo" value="<?
	
      while ($row=mysql_fetch_array($result3))
      {
echo "".$row["correo"].""; 
}
mysql_free_result($result3)
?>" /style="background-color:e3e3e3; border: 1px solid #666666; font-size:8pt; color: #000099" >
              </font></b></div></td>
              </tr>
            <tr >
              <td width="151"><div align="left">Rif:</font></div></td>
              <td><div align="left"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2">
              <input name="rif" type="text" class="imputbox" id="rif" value="<?
	
      while ($row=mysql_fetch_array($result4))
      {
echo "".$row["rif"].""; 
}
mysql_free_result($result4)
?>" /style="background-color:e3e3e3; border: 1px solid #666666; font-size:8pt; color: #000099" >
              </font></b></div></td>
              <input type="hidden" name="nivelacceso" value="0" />
              <input type="hidden" name="salir" value="salir" />
            </tr>
            <tr >
              <td height="13"><div align="left">Informacion:</font></div></td>
              <td height="13" ><div align="left"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2">
                <input name="info" type="text" class="imputbox" id="info" value="<?
	
      while ($row=mysql_fetch_array($result5))
      {
echo "".$row["info"].""; 
}
mysql_free_result($result5)
?>" size="50" style="background-color:e3e3e3; border: 1px solid #666666; font-size:8pt; color: #000099" >
              </font></b></div></td>
            </tr>
            <tr >
              <td height="7"><div align="left">Direcci&oacute;n</font></div></td>
              <td height="7" ><div align="left"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2">
                <textarea name="direccion" cols="50" rows="4" class="imputbox" id="direccion" style="background-color:e3e3e3; border: 1px solid #666666; font-size:8pt; color: #000099"><?
	
      while ($row=mysql_fetch_array($result6))
      {
echo "".$row["direccion"].""; 
}
mysql_free_result($result6)
?>
                </textarea>
              </font></b></div></td>
            </tr>
            <tr>
              <td height="40" colspan="2"><div align="center"><font face="Verdana" size="2"><font face="Verdana" size="2"><font face="Verdana" size="2"><span class="Estilo3">
                  <input name="fecha" type="hidden" id="fecha" value="<?php echo date("d-m-Y"); ?>" size="25" />
                  </span></font></font></font>
                      <input type="submit" name="Submit" value="Actualizar  " class="botones" />
              </div></td>
            </tr>
          </table></th>
        </tr>
      </table>
        </form>        </td>
    </tr>
</table>





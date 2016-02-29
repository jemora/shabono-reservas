   <?php require_once('conector/conector.php');?> 
      <?php require_once('mensajes.php');?> 
<?
if (!isset($codigo))
 
$dbh=mysql_connect ($hostname,$username,$password) or die ('I cannot connect to the database because: ' . mysql_error());
mysql_select_db ($database); 



//Ejecutamos la sentencia SQL
$result1 = mysql_query("SELECT * FROM usuarios WHERE ID  LIKE '$codigo'");



?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>cambio de clave</title>
<style type="text/css">
<!--
body,td,th {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 10px;
	color: #666666;
}
a:link {
	color: #999999;
}
a:visited {
	color: #000099;
}
a:hover {
	color: #000000;
}
a:active {
	color: #990000;
}
.Estilo3 {font-size: 10px}
-->
</style>
<style type="text/css">
<!--
body {
	background-color: #FFFFFF;
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
.Estilo14 {color: #666666; font-size: 12px; }
.Estilo16 {color: #666666; font-size: 12px; font-family: Verdana, Arial, Helvetica, sans-serif; }
-->
</style></head>

<body>
<table width="200" border="0" align="center" cellspacing="0">
  <tr>
    <td><img src="imagenes/banne14.gif" width="607" height="30" /></td>
  </tr>
  <tr>
    <td><table width="605" border="1" align="center" cellspacing="0" bordercolor="#999999" bgcolor="#F4F4F4">
      <!--DWLayoutTable-->
      <tr>
        <td width="560" height="24" valign="top"><table width="560" border="0" align="center" cellspacing="0">
            <!--DWLayoutTable-->
            <tr>
              <td width="19" bgcolor="#F4F4F4"><span class="Estilo14"><a href="javascript:history.back(1)"><img src="imagenes/ico_3.gif" alt="Regresar" width="18" height="18" border="0" /></a></span></td>
              <td width="136" bgcolor="#F4F4F4"><span class="Estilo16">Regresar</span></td>
              <td width="364" bgcolor="#F4F4F4"><div align="right"></div></td>
              <td width="23" bgcolor="#F4F4F4"><div align="right"><a href="javascript: window.print()"></a></div></td>
            </tr>
        </table></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><table width="350" border="0" align="left" cellpadding="0" cellspacing="0">
    <!--DWLayoutTable-->
<tr>
      <td width="350" valign="top"><p align="left" class="Estilo7"><strong>ACTUALIZACION DE CLAVE</strong> <br>
      
      <span class="Estilo3">
          <div align="center">
            <?php

 // incluir motor de autentificaci&oacute;n.
 // definir nivel de acceso para esta p&aacute;gina.

if (isset($_GET['error'])){

$error_accion_ms[0]= "No se puede borrar el Usuario, debe existir por lo menos uno.<br>Si desea borrarlo, primero cree uno nuevo.";
$error_accion_ms[1]= "Faltan Datos.";
$error_accion_ms[2]= "Passwords no coinciden.";
$error_accion_ms[3]= "El Nivel de Acceso ha de ser num&eacute;rico.";
$error_accion_ms[4]= "El Nombre de Usuario que ha seleccionado No esta  Disponible. Por favor selecione otro";

$error_cod = $_GET['error'];
echo "<div align='center'>$error_accion_ms[$error_cod]</div><br>";

}






if ($_GET['accion']=="hacernuevo"){


$pass=$_POST['password1'];
$pass2=$_POST['password2'];



if ($pass=="" or $pass2=="" ) {
echo '<font face="Arial" size="2" color="#FF0000">Faltan Datos</font>';
exit;
}

if ($pass != $pass2){
echo  '<font face="Arial" size="2" color="#FF0000">Passwords no coinciden.</font>';
exit;
}

mysql_connect($hostname,$username,$password);
mysql_select_db($database);


$usuario=stripslashes($usuario);
$pass = md5($pass);


$sSQL="Update usuarios Set  

  pass='$pass',
  pass2= '$pass2'
  
Where ID='$buscar'";

mysql_db_query($database,$sSQL);
				
echo $men[1];





}

?>
            </div>
        <form name=frm onSubmit="return Verificar()" method="post" action="?&accion=hacernuevo&buscar=<?
	 //Mostramos los registros<br>
      while ($row=mysql_fetch_array($result1))
      {
echo "".$row["ID"].""; 
}
mysql_free_result($result1)
?>" enctype="multipart/form-data">
          <table align="center" bgcolor="#f1f1f1" border="0" cellpadding="0" cellspacing="3" width="378">
        <!--DWLayoutTable-->
        <tbody>
          <tr>
            <td width="196" class="fuente">Clave:</td>
            <td width="174"><input name="password1" class="formulario" id="password1" value="" maxlength="32" type="password">
                <span class="asterisco">(*)</span></td>
          </tr>
          <tr>
            <td class="fuente"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Clave (repitalo) :</font></td>
            <td><input name="password2" class="formulario" id="password2" value="" maxlength="32" type="password"></td>
          </tr>
          <!--<tr>
	<td colspan="2">Confirmaci&oacute;n:</td>
	<td><input name="confirmacion" type="text" id="confirmacion" value="confirmado"></td>
</tr> -->
          <tr>
            <td colspan="2" align="right" height="11" valign="top">
              <div align="center">
                <font face="Verdana" size="2"><font face="Verdana" size="2"><font face="Verdana" size="2"><span class="Estilo3">
                </span></font></font></font>
                <input name="enviar" class="botonregistro" id="enviar" value="cambiar clave" type="submit">
            </div></td>
          </tr>
        </tbody>
      </table>
        </form>        
      </td>
    </tr>
    
    <tr>
      <td height="2" valign="top" bgcolor="#FFFFFF"></td>
  </tr>
</table></p>
<p>&nbsp;</p>
<p></td>
  </tr>
</table>
<p>&nbsp;</p>
</body>
</html>

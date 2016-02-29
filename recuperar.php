
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title></title>



<link href="Level2_Arial_Text.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.Estilo1 {color: #990000}
-->
</style>
<link href="Level2_Verdana_Text.css" rel="stylesheet" type="text/css" />
<blockquote>
  <table width="351" border="0" align="center" cellspacing="0">

    <tr>
      <td width="349">&nbsp;</td>
    </tr>
    <tr>
      <td><table width="200" border="1" align="center" cellspacing="0" bordercolor="#000000">
          <tr>
            <td><table width="610" border="1" align="center" cellspacing="0" bordercolor="#7895AF">
                <tr>
                  <td width="849" bgcolor="#7895AF"><strong>Recuperar contrase&ntilde;a</strong></td>
                </tr>
                <tr>
                  <td bgcolor="#FFFFFF"><div align="center">
  <table width="350" border="0" cellpadding="0" cellspacing="0">
      <!--DWLayoutTable-->
      <tr>
        <td valign="top">
          &nbsp;<br />
          <form method="post" action="?id=recuperar&accion=hacernuevo">
            <table width="350" border="0" cellspacing="0" cellpadding="4" align="center">
        
        
        
          <td colspan="2" bgcolor="#FFFFFF"><div align="center"><b>Escribe tu correo y recupera tu contrase&ntilde;a via Email </b></div></td>
          </tr>
        <tr bgcolor="#FFFFCC">
          <td width="158" bgcolor="#FFFFFF">
            <div align="right" class="small">Correo : </font></div>      </td>
          <td width="170" bgcolor="#FFFFFF"><b>
            <input type="text" name="email" class="small" size="20" maxlength="50" />
            </font></b></td>
		    <input type="hidden" name="nivelacceso" value="0">
          </tr>
        <tr bgcolor="#FFFFCC">
          <td height="40" colspan="2" bgcolor="#FFFFFF">
            <div align="center">
              <label>
              <input type="submit" name="Submit2" value="Enviar" />
              </label>
            </div>      </td>
        </tr>
        </table>
          </form>
          <p>
            <?php require_once('conector/conector.php');  ?>
            <?php

$currentPage = $_SERVER["PHP_SELF"];

$maxRows_Recordset2info22 = 50;
$pageNum_Recordset2info22 = 0;
if (isset($_GET['pageNum_Recordset2info22'])) {
  $pageNum_Recordset2info22 = $_GET['pageNum_Recordset2info22'];
}
$startRow_Recordset2info22 = $pageNum_Recordset2info22 * $maxRows_Recordset2info22;

mysql_select_db($database, $connFlashblog);
$query_Recordset2info22 = "SELECT * FROM informacion WHERE cod  LIKE '0'";
$query_limit_Recordset2info22 = sprintf("%s LIMIT %d, %d", $query_Recordset2info22, $startRow_Recordset2info22, $maxRows_Recordset2info22);
$Recordset2 = mysql_query($query_limit_Recordset2info22, $connFlashblog) or die(mysql_error());
$row_Recordset2info22 = mysql_fetch_assoc($Recordset2);

$url=$row_Recordset2info22['url'];
$correo_web=$row_Recordset2info22['correo'];

if (isset($_GET['error'])){

$error_accion_ms[0]= "No se puede borrar el Usuario, debe existir por lo menos uno.<br>Si desea borrarlo, primero cree uno nuevo.";
$error_accion_ms[1]= "Faltan Datos.";
$error_accion_ms[2]= "Passwords no coinciden.";
$error_accion_ms[3]= "El Nivel de Acceso ha de ser numérico.";
$error_accion_ms[4]= "El Usuario ya está registrado.";

$error_cod = $_GET['error'];
echo "<div align='center'>$error_accion_ms[$error_cod]</div><br>";

}






if ($_GET['accion']=="hacernuevo"){


$email=$_POST['email'];



mysql_connect($hostname,$username,$password);
mysql_select_db($database);

$usuarios_consulta = mysql_query("SELECT * from usuarios2 WHERE  email='$email'") or die(mysql_error());
$total_encontrados = mysql_num_rows ($usuarios_consulta);
mysql_free_result($usuarios_consulta);
$result = mysql_query("SELECT * from usuarios2 WHERE email='$email'");

	 $sql = "SELECT * FROM usuarios2 WHERE email='$email'"; 
$result = mysql_query($sql); 
if ($row = mysql_fetch_array($result)){ 

//Mostramos los nombres de las tablas 
mysql_field_seek($result,0); 
while ($field = mysql_fetch_field($result)){ 
}{ 

$rcon = rand(1000000,10000000);
//esto es un simple mensaje
$sms = ' Recuerda que con tu nombre de usuario (seudónimo) y tu clave, puedes acceder a tu cuenta personal y disfrutar de los servicios que te ofrecemos.
.<br><br><b>Datos de acceso:</b><br> Usuario:'.$row["usuario"].' <br>Clave:'.$row["pass2"].'<br>




';

        //headers del mail
         $headers = "MIME-Version: 1.0\r\n";
         $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
         $headers .= "From: correo <".$correo_web.">\r\n";
         $headers .= "Reply-To: ".$correo_web."\r\n";
//enviamos el email
mail($email, 'Recuperar datos', $sms,$headers);
echo "Tus Datos han sido enviados a tu Correo!</p>\n"; 
  }
 while ($row = mysql_fetch_array($result)); 


echo "</table> \n"; 

} else { 

echo "<p>&iexcl;No se ha encontrado ning&uacute;n registro!</p>\n"; 
} }
?>
          </p>
          <p>&nbsp;</p>        </td>
      </tr>
  </table>
</div></td>
                </tr>
            </table></td>
          </tr>
      </table></td>
    </tr>
  </table>
  <p>&nbsp;</p>
</blockquote>

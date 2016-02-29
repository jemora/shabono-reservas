

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>.....:::..</title>
<style type="text/css">
<!--
body {
	background-image: url();
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
.Estilo1 {font-family: Arial, Helvetica, sans-serif}
.Estilo3 {font-family: Arial, Helvetica, sans-serif; font-size: 12px; }
.Estilo5 {
	color: #000000;
	font-weight: bold;
}
body,td,th {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 10px;
}
-->
</style></head>

<?php 	require_once('css.php');?>

<div align="center">
<div align="center"><img src="imagenes/banne14.gif" width="607" height="30" /></div>
<br />
<table width="280" height="165" align="center" cellpadding="2" cellspacing="2" class="estilotabla">
  <tr>
    <td class="estilocelda">Registro de Usuarios </td>
  </tr>
  <tr>
    <td height="135"><table width="600" border="0" align="center" cellpadding="0" cellspacing="0">
    <!--DWLayoutTable-->
    <tr>
      <td width="350" height="279" valign="top"><p align="center">
        <?php		require_once('conector/conector.php'); ?>
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

$usuario=$_POST['usuarionombre'];
$nombre=$_POST['usuarionombre1'];
$apellido=$_POST['usuarioapellido'];
$pass=$_POST['password1'];
$pass2=$_POST['password2'];

$email=$_POST['email'];


if ($pass=="" or $pass2=="" or $usuario=="" ) {
echo '<font face="Arial" size="2" color="#FF0000">Faltan Datos</font>';
exit;
}

if ($pass != $pass2){
echo  '<font face="Arial" size="2" color="#FF0000">Passwords no coinciden.</font>';
exit;
}

mysql_connect($hostname,$username,$password);
mysql_select_db($database);

$usuarios_consulta = mysql_query("SELECT ID FROM usuarios WHERE usuario='$usuario'") or die(mysql_error());
$total_encontrados = mysql_num_rows ($usuarios_consulta);
mysql_free_result($usuarios_consulta);

if ($total_encontrados != 0) {
echo '<font face="Arial" size="2" color="#FF0000">El Nombre de Usuario que ha seleccionado No esta  Disponible. Por favor selecione otro.</font>';
exit;
}

$usuario=stripslashes($usuario);
$pass = md5($pass);
mysql_query("INSERT INTO usuarios values('','$usuario','$nombre','$apellido','$pass','$pass2','$email','$nivel_acceso','$ag_cli','$bus_cli','$eli_cli','$mod_cli','$asi_hab','$eli_hab','$asi_con','$con_rea','$ver_cal','$adm_1','$adm_2','$adm_3','$adm_4','$adm_5','$adm_6','$fact')") or die(mysql_error());
mysql_close();













echo '

<p align="center"><font color="#000099"><b><font face="Arial" size="4">El Usuario se Agrego Corrctamente</font></b></font></b></font></p>





';


}

?></p>
        <form method="post" action="?&id=registro&accion=hacernuevo">
        <table width="600" border="0" cellspacing="0" cellpadding="4" align="center">
      <tr bgcolor="#FFFFCC">
        
        <td width="183" bgcolor="#EEF3F7">
          <div align="right" class="Estilo1">
            <div align="left"><font size="2">Nombre
              : </font></div>
          </div>      </td>
        <td width="401" bgcolor="#EEF3F7"><b>
          <input type="text" name="usuarionombre1" class="imputbox" maxlength="15">
          </font></b></td>
      </tr>
      <td width="183" bgcolor="#EEF3F7">
        <div align="left">Apellido
          : </font></div></td>
        <td width="401" bgcolor="#EEF3F7"><b>
          <input type="text" name="usuarioapellido" class="imputbox" maxlength="15">
          </font></b></td>
      </tr>
      
      
      
      <td width="183" bgcolor="#EEF3F7">
        <div align="left">Nombre de Usuario
          : </font></div></td>
        <td width="401" bgcolor="#EEF3F7"><b>
          <input type="text" name="usuarionombre" class="imputbox" maxlength="15">
          </font></b></td>
      </tr>
      <tr bgcolor="#FFFFCC">
        <td width="183" bgcolor="#EEF3F7">
          <div align="left">Clave
            : </font></div></td>
        <td width="401" bgcolor="#EEF3F7"><b>
          <input type="password" name="password1" class="imputbox" maxlength="15">
          </font></b></td>
      </tr>
      <tr bgcolor="#FFFFCC">
        <td width="183" bgcolor="#EEF3F7">
          <div align="left">Clave
            (repitalo) : </font></div></td>
        <td width="401" bgcolor="#EEF3F7"><b>
          <input type="password" name="password2" class="imputbox" maxlength="15">
          </font></b></td>
      </tr>
      <tr bgcolor="#FFFFCC">
        <td width="183" bgcolor="#EEF3F7">
          <div align="left">Correo : </font></div></td>
        <td width="401" bgcolor="#EEF3F7"><b>
          <input type="text" name="email" class="imputbox" size="20" maxlength="50">
          </font></b></td>
		  <input type="hidden" name="nivelacceso" value="0">
        <input type="hidden" name="salir" value="salir">
        </tr>
      <tr bgcolor="#FFFFCC">
        <td width="183" bgcolor="#EEF3F7"><div align="left">Tipo de Uusario : </font></div></td>
        <td bgcolor="#EEF3F7"><label>
          <select name="adm_1" id="adm_1">
            <option value="1">Administrador</option>
            <option value="0">recepcionista</option>
          </select>
        </label></td>
      </tr>
      <tr bgcolor="#FFFFCC">
        <td height="40" colspan="2" bgcolor="#EEF3F7">
          <div align="center">
            <font face="Verdana" size="2"><font face="Verdana" size="2"><font face="Verdana" size="2"><span class="Estilo3">
            <input name="nivel_acceso" type="hidden" id="nivel_acceso" value="0" size="25" />
            </span><font face="Verdana" size="2"><font face="Verdana" size="2"><span class="Estilo3">
            <input name="ag_cli" type="hidden" id="ag_cli" value="0" size="25" />
            <input name="bus_cli" type="hidden" id="bus_cli" value="0" size="25" />
            <input name="eli_cli" type="hidden" id="eli_cli" value="0" size="25" />
            <input name="mod_cli" type="hidden" id="mod_cli" value="0" size="25" />
            <input name="asi_hab" type="hidden" id="asi_hab" value="0" size="25" />
            <input name="eli_hab" type="hidden" id="eli_hab" value="0" size="25" />
            <input name="asi_con" type="hidden" id="asi_con" value="0" size="25" />
            <input name="con_rea" type="hidden" id="con_rea" value="0" size="25" />
            <input name="ver_cal" type="hidden" id="ver_cal" value="0" size="25" />
            <input name="adm_2" type="hidden" id="adm_2" value="0" size="25" />
            <input name="adm_3" type="hidden" id="adm_3" value="0" size="25" />
            <input name="adm_4" type="hidden" id="adm_4" value="0" size="25" />
            <input name="adm_5" type="hidden" id="adm_5" value="0" size="25" />
            <input name="adm_6" type="hidden" id="adm_6" value="0" size="25" />
            <input name="fact" type="hidden" id="fact" value="0" size="25" />
            <span class="Estilo3">
            <input type="submit" name="Submit" value="  Registrar  " class="botones" >
          </div>      </td>
      </tr>
      </table>
      </form>        <div align="center"></td>
    </tr>
</table></td>
  </tr>
</table>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>

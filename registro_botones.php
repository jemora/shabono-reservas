

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
    <td class="estilocelda"><strong>Registro de Botones:</strong>      <?
require_once('conector/conector.php');

$link=mysql_connect($hostname,$username,$password);
mysql_select_db($database,$link);

if ($userfile!="none" && $userfile!="")
{
	if ($userfile_type=="image/jpeg" || $userfile_type=="image/pjpeg" || $userfile_type=="image/gif" || $userfile_type=="image/bmp")
	{
		$info=getimagesize($userfile);
		$x=addslashes(fread(fopen($userfile,"r"),filesize($userfile)));
		
	
$result=mysql_query("INSERT INTO botones (anchura,altura,tipo,nombre,apellido,cedula,telefono,correo,direccion,imagen)
 VALUES (".$info[0].",".$info[1].",'$userfile_type','$nombre','$apellido','$cedula','$telefono','$correo','$direccion','$x')",$link);



		$id=mysql_insert_id();
		
		echo "Registro Agregado Correctamente";
	}else{
		$error="El tipo de archivo tienes que ser JPG, GIF o BMP.";
	}
}else{
	if ($userfile!="")
		$error="No ha seleccionado ninguna imagen...";
}
mysql_close($link);
if ($error!="")
{
	echo "</center><P><font face='Arial' size=2 color='#ff0000'> Error: ".$error."</font><br>";
}
?></td>
  </tr>
  <tr>
    <td height="135"><table width="600" border="0" align="center" cellpadding="0" cellspacing="0">
    <!--DWLayoutTable-->
    <tr>
      <td width="350" height="279" valign="top">
      <form ENCTYPE="multipart/form-data" action="registro_botones.php" method="POST">
    <table width="600" border="0" cellspacing="0" cellpadding="4" align="center">
      <tr bgcolor="#FFFFCC">
        <td width="183" bgcolor="#EEF3F7"><div align="right" class="Estilo1">
            <div align="left"><font size="2">Nombre
              : </font></div>
        </div></td>
        <td width="401" bgcolor="#EEF3F7"><b>
          <input type="text" name="nombre" class="imputbox" maxlength="15" id="nombre" />
        </b></td>
      </tr>
<td width="183" bgcolor="#EEF3F7"><div align="left">Apellido
  : </div></td>
    <td width="401" bgcolor="#EEF3F7"><b>
      <input type="text" name="apellido" class="imputbox" maxlength="15" id="apellido" />
    </b></td>
</tr><tr>
  <td width="183" bgcolor="#EEF3F7">Cedula: </td>
  <td bgcolor="#EEF3F7"><b>
    <input type="text" name="cedula" class="imputbox" maxlength="15" id="cedula" />
  </b></td>
</tr>
<td width="183" bgcolor="#EEF3F7"><div align="left">Telefono:</div></td>
    <td width="401" bgcolor="#EEF3F7"><b>
      <input type="text" name="telefono" class="imputbox" maxlength="15" id="telefono" />
    </b></td>
</tr>
<tr bgcolor="#FFFFCC">
  <td width="183" bgcolor="#EEF3F7"><div align="left">Correo : </div></td>
  <td width="401" bgcolor="#EEF3F7"><b>
    <input type="text" name="correo" class="imputbox" size="20" maxlength="50" id="correo" />
  </b></td>
  <input type="hidden" name="nivelacceso" value="0" />
  <input type="hidden" name="salir" value="salir" />
</tr>
<tr bgcolor="#FFFFCC">
  <td width="183" bgcolor="#EEF3F7"><div align="left">Direccion : </div></td>
  <td bgcolor="#EEF3F7"><label></label>
      <b>
      <textarea name="direccion" cols="20" class="imputbox" id="direccion"></textarea>
    </b></td>
</tr>
<tr bgcolor="#FFFFCC">
  <td height="40" colspan="2" bgcolor="#EEF3F7"><input name="userfile"  type="file" /></td>
</tr>
<tr bgcolor="#FFFFCC">
  <td height="40" colspan="2" bgcolor="#EEF3F7"><input type="submit" name="Submit" value="  Registrar  " class="botones" /></td>
</tr>
<tr bgcolor="#FFFFCC"></tr>
  </table>
      </form>        <div align="center"></td>
    </tr>
</table></td>
  </tr>
</table>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>

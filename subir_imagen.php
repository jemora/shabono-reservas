<html><style type="text/css">
<!--
body,td,th {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 9px;
}
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
}
-->
</style>

<?php 	require_once('css.php');?>
<body><div align="center"><img src="imagenes/banne11.gif" width="607" height="30"><br>
</div>
<table width="601" border="1" align="center" cellspacing="0" bordercolor="#999999" bgcolor="#F4F4F4">
  <!--DWLayoutTable-->
  <tr>
    <td width="560" height="25" valign="top"><table width="601" border="0" align="center" cellspacing="0">
      <!--DWLayoutTable-->
      <tr>
        <td width="19" bgcolor="#F4F4F4"><span class="Estilo14"><a href="lista_habitaciones_creadas.php"><img src="imagenes/ico_3.gif" alt="Regresar" width="18" height="18" border="0" /></a></span></td>
        <td width="136" bgcolor="#F4F4F4"><span class="Estilo16">Regresar</span></td>
        <td width="364" bgcolor="#F4F4F4"><!--DWLayoutEmptyCell-->&nbsp;</td>
        <td width="23" bgcolor="#F4F4F4"><div align="right"></div></td>
      </tr>
    </table></td>
  </tr>
</table>
<table width=601 height=123 align="center" cellpadding=2 cellspacing=2 class="estilotabla">
  <tr>
    <td width="165" class="estilocelda">Agregar una Imagen</td>
  </tr>
  <tr>
    <td height="92"><table width="165" border="0" align="center" cellpadding="0" cellspacing="2" class="tabla">
      <!--DWLayoutTable-->
      <tr valign="middle" > </tr>
    </table>
    <form ENCTYPE="multipart/form-data" action="subir_imagen.php?&dato=<?  echo  $dato; ?>" method="POST">
	<p>
	  <INPUT NAME="userfile" TYPE="file">
  </p>
	<p>
	  <input type="submit" value="Guardar Imagen" class="boton"><input name="ref" type="hidden" id="ref" value="<?  echo  $dato; ?>" />
	
    </form></td>
  </tr>
</table>
<p>&nbsp;</p>

<?
require_once('conector/conector.php');

$link=mysql_connect($hostname,$username,$password);
mysql_select_db($database,$link);

if ($userfile!="none" && $userfile!="")
{
	if ($userfile_type=="image/jpeg" || $userfile_type=="image/pjpeg" || $userfile_type=="image/gif" || $userfile_type=="image/bmp")
	{
		$info=getimagesize($userfile);
		$x=addslashes(fread(fopen($userfile,"r"),filesize($userfile)));
		
		$result=mysql_query("INSERT INTO imagen (anchura,altura,tipo,ref,imagen) VALUES (".$info[0].",".$info[1].",'$userfile_type','$ref','$x')",$link);
		$id=mysql_insert_id();
		echo "Imagen agregada con el id ".$id."<BR>";
		echo "<img src='imagen_mostrar.php?id=".$id."'>";
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
?>
</body>
</html>
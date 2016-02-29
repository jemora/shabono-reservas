<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0014)about:internet -->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title></title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<!--Fireworks 8 Dreamweaver 8 target.  Created Wed Jan 24 20:44:51 GMT-0400 2007-->
<style type="text/css">
<!--
#Layer1 {
	position:absolute;
	left:431px;
	top:182px;
	width:51px;
	height:29px;
	z-index:1;
	visibility: inherit;
}
#Layer2 {
	position:absolute;
	left:516px;
	top:70px;
	width:61px;
	height:21px;
	z-index:2;
}
body,td,th {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 12px;
}
-->
</style>
</head>
<body leftmargin="0" marginwidth="0">
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<form action="habitacion_reservacion_actualizar.php?&amp;codigo=<?php echo $codigo; ?>" method="post">
  <table width="20" border="1" align="center" cellspacing="0" bordercolor="#CCCCCC">
    <tr>
      <th scope="col"><table width="176" border="0" align="center">
    <tr>
      <th colspan="2" bgcolor="#FFFFFF" scope="col"><img src="imagenes/acceso.gif" width="172" height="22" /></th>
    </tr>
    <tr>
      <th width="74" scope="col"><div align="right">
        <input name="codigo" type="hidden" id="codigo" value="<?php echo $codigo; ?>" />
        Usuario</div></th>
      <th width="86" scope="col"><div align="left">
        <input type="text" name="usuario" size="8" class="imputbox" id="usuario" />
      </div></th>
    </tr>
    <tr>
      <td><div align="right">Clave</div></td>
      <td><div align="left">
        <input type="password" name="pass2" size="8" class="imputbox" id="pass2" />
      </div></td>
    </tr>
    <tr>
      <td><div align="center">
        <p><img src="imagenes/ssl-secure-forms.gif" width="49" height="51" /></p>
      </div></td>
      <td><div align="center">
        <input type="submit" value="Entrar" name="B1" />
      </div></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
        <?
                          // Mostrar error de Autentificación.
                          include ("aut_mensaje_error.inc.php");
                          if (isset($_GET['error_login'])){
                              $error=$_GET['error_login'];
                          echo "<font face='Verdana, Arial, Helvetica, sans-serif' size='1' color='#000000'>Error: $error_login_ms[$error]";
                          }
                         ?>
      </div></td>
    </tr>
  </table></th>
    </tr>
  </table>
</form>
</body>
</html>
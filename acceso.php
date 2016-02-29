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
-->
</style>
<link href="Level2_Verdana_Text.css" rel="stylesheet" type="text/css" />
</head>
<body leftmargin="0" marginwidth="0">
<form action="prueba.php" method="post">
  <table width="126" border="0" align="center" cellspacing="0" bordercolor="#CCCCCC">
    <tr>
      <th width="120" scope="col"><table width="120" border="0" align="center">
    <tr>
      <th width="52" scope="col"><div align="right">
        <input type="hidden" name="VTI-GROUP" value="0" />
        <span class="small">Usuario</span></div></th>
      <th width="58" scope="col"><div align="left">
        <input type="text" name="user" size="8" class="imputbox" />
      </div></th>
    </tr>
    <tr>
      <td><div align="right" class="small">Clave</div></td>
      <td><div align="left">
        <input type="password" name="pass" size="8" class="imputbox" />
      </div></td>
    </tr>
    <tr>
      <td><div align="center">
        <p>&nbsp;</p>
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
    <tr>
      <td colspan="2"><a href="formulario_registro_clientes.php" target="frame" class="small">Registrate</a></td>
    </tr>
    <tr>
      <td colspan="2" class="small"><a href="recuperar.php" target="frame">Olvido su contrase&ntilde;a </a></td>
    </tr>
  </table></th>
    </tr>
  </table>
</form>
</body>
</html>
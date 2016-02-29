<?
require("aut_verifica.inc2.php");
$nivel_acceso=10; // Nivel de acceso para esta página.
if ($nivel_acceso <= $_SESSION['usuario_nivel']){
header ("Location: $redir?error_login=5");
exit;
}
?>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title></title>
<style type="text/css">
<!--
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
<script language="JavaScript" type="text/JavaScript">
<!--

function GP_popupConfirmMsg(msg) { //v1.0
  document.MM_returnValue = confirm(msg);
}
//-->
</script>



</head>

<body>
<table width="625" border="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr>
    <th width="623" height="35" valign="top" scope="col"><div align="left">
      <p><img src="imagenes/banne19.gif" width="190" height="30" /></p>
    </div></th>
  </tr>
  <tr>
    <th height="20" valign="top" scope="col"><div align="left">
      <?php include("menu_reservacion.php");?>
    </div></th>
  </tr>
  <tr>
    <td height="14" valign="top"><!--DWLayoutEmptyCell-->&nbsp;</td>
  </tr>
  <tr>
    <td height="14" valign="top"><!--DWLayoutEmptyCell-->&nbsp;</td>
  </tr>
</table>
</body>
</html>

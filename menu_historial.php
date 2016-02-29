<?
require("aut_verifica.inc.php");
$nivel_acceso=10; // Nivel de acceso para esta página.
if ($nivel_acceso <= $_SESSION['usuario_nivel']){
header ("Location: $redir?error_login=5");
exit;
}
?>
<?php 
require_once('conector/conector.php');
?>

<script language="JavaScript">
function Abrir_ventana (pagina) {
var opciones="toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=yes, width=860, height=400, top=85, left=140";
window.open(pagina,"",opciones);
}
</script>
<link href="Level2_Verdana_Text.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
a:link {
	color: #000000;
	text-decoration: none;
}
a:visited {
	text-decoration: none;
	color: #663300;
}
a:hover {
	text-decoration: none;
	color: #006600;
}
a:active {
	text-decoration: none;
}
-->
</style>
<table width="600" border="1" align="center" cellspacing="0" bordercolor="#000000">
  <tr>
    <td><table width="610" border="1" cellspacing="0" bordercolor="#7895AF">
      <!--DWLayoutTable-->
      <tr>
        <th width="150" height="22" valign="top" bgcolor="#FFCC00" scope="col"><div align="center"><span class="small">- <a href="historial.php?codigo=<? echo $_SESSION['doc2'] ?>" target="frame">Estado de Reservaciones </a></span></div></th>
        <th width="150" valign="top" bgcolor="#FFCC00" scope="col"><div align="center"><span class="small"> - <a href="historial2.php?codigo=<? echo $_SESSION['doc2'] ?>">Historial de Reservaciones</a></span></div></th>
        <th valign="top" bgcolor="#CCD8E6" scope="col"><!--DWLayoutEmptyCell-->&nbsp;</th>
        </tr>

    </table></td>
  </tr>
</table>

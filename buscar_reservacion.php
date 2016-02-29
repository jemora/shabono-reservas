
<?php 
require_once('conector/conector.php');
?>



<script language="JavaScript">
function Abrir_ventana (pagina) {
var opciones="toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=yes, width=860, height=400, top=85, left=140";
window.open(pagina,"",opciones);
}
</script>

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



<link href="Level2_Verdana_Text.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.Estilo7 {font-size: xx-small}
-->
</style>
<div align="center"><img src="imagenes/banne17.gif" width="607" height="30" /><br />
  <?php include("logo.php");?>
</div>
<table width="607" border="0" align="center" cellpadding="0" cellspacing="0">
  <!-- fwtable fwsrc="Untitled" fwbase="visor.jpg" fwstyle="Dreamweaver" fwdocid = "237802607" fwnested="0" -->
  <tr>
    <td><img src="imagenes/spacer.gif" width="5" height="1" border="0" alt="" /></td>
    <td><img src="imagenes/spacer.gif" width="593" height="1" border="0" alt="" /></td>
    <td><img src="imagenes/spacer.gif" width="9" height="1" border="0" alt="" /></td>
    <td><img src="imagenes/spacer.gif" width="1" height="1" border="0" alt="" /></td>
  </tr>
  <tr>
    <td colspan="3"><img src="imagenes/visor_r1_c1.jpg" alt="" name="visor_r1_c1" width="607" height="11" border="0" id="visor_r1_c1" /></td>
    <td><img src="imagenes/spacer.gif" width="1" height="11" border="0" alt="" /></td>
  </tr>
  <tr>
    <td background="imagenes/visor_r2_c1.jpg">&nbsp;</td>
    <td><table width=562 height=62 align="center" cellpadding=2 cellspacing=2 class="estilotabla">
<tr><td width="552" class="estilocelda"><table width="552" border="0" align="center" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr>
    <td width="552" height="28" valign="top"><table width="547" height="15" border="0" align="left" cellspacing="0" bgcolor="#FF9900">
      <tr bgcolor="#C4CECF">
        <td width="541" height="28"><form action="opcion9.php" method="post">
          <div align="left">
            <table width="541" border="0" cellspacing="0">
              <tr>
                <th width="163" height="20" scope="col"><span class="small"> Buscar por codigo de Cliente</span></th>
                <th width="97" scope="col"><input name="codigo" type="text" id="codigo" size="22" maxlength="150" / style="background-color:e3e3e3; border: 1px solid #666666; font-size:8pt; color: #000099" /></th>
                <th width="58" scope="col"><input name="submit2" type="submit" value="Buscar" /></th>
                <th width="68" scope="col"><div align="right"><span class="small">Clientes</span><span class="Estilo7"> <a href="javascript:Abrir_ventana('buscador_cliente.php')"><img src="imagenes/view.gif" width="17" height="17" border="0" /></a></span></div></th>
                <th width="145" scope="col"><span class="small">Planning <a href="javascript:Abrir_ventana('buscar_calendario.php')"><img src="imagenes/show-calendar.gif" width="18" height="16" border="0" /></a></span></th>
              </tr>
            </table>
          </div>
        </form></td>
        <td width="8" height="28">&nbsp;</td>
      </tr>
    </table></td>
  </tr>
</table></td></tr>
<tr><td height="22"><?php include("buscador_reservaciones.php");?></td>
</tr>
</table></td>
    <td background="imagenes/visor_r2_c3.jpg">&nbsp;</td>
    <td><img src="imagenes/spacer.gif" width="1" height="55" border="0" alt="" /></td>
  </tr>
  <tr>
    <td colspan="3"><img src="imagenes/visor_r3_c1.jpg" alt="" name="visor_r3_c1" width="607" height="13" border="0" id="visor_r3_c1" /></td>
    <td><img src="imagenes/spacer.gif" width="1" height="13" border="0" alt="" /></td>
  </tr>
</table>
<p>&nbsp;</p>

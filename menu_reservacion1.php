
<?php 
require_once('conector/conector.php');
?>


<style type="text/css">
body{font: 75% Arial, sans-serif;}
form{width:600px;padding:5px 0;border: 2px solid #71828A;
background: #C4CECF;}
fieldset{border: 0px solid #000;}
legend{font: bold 140% Arial,sans-serif;color: #27518A;}
Ahora definimos las medidas del div que contiene al formulario, tanto el margen, ancho y alto.
div.medidas,div.check{margin: 10px 0 10px 10px;}
div.medidas label{float:left;width:90px;line-height:23px;}
div.medidas input{width:120px;}

Finalmente, modificamos el botón de submit, fíjate como lo hacemos, al haberle dado una id (“login”) en el código html, ahora para referirnos solamente a ese botón precisamos su id.

input#login{margin-left: 100px;border: 1px solid #27518A;
background: #ccc url(fondoBoton.jpg) repeat-x;}
a:link {
	text-decoration: none;
}
a:visited {
	text-decoration: none;
}
a:hover {
	text-decoration: none;
}
a:active {
	text-decoration: none;
}
.Estilo1 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-weight: bold;
	color: #FF0000;
}
.Estilo3 {font-family: Verdana, Arial, Helvetica, sans-serif; font-weight: bold; color: #666666; font-size: x-small; }
</style>


<script language="JavaScript">
function Abrir_ventana (pagina) {
var opciones="toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=yes, width=860, height=400, top=85, left=140";
window.open(pagina,"",opciones);
}
</script>
<table width="619" border="0" align="center" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr>
    <td width="619" height="28" valign="top"><table width="410" height="15" border="0" align="left" cellspacing="0" bgcolor="#FF9900">
  <tr>
    <td width="220" height="28" bgcolor="#FFFFFF"><div align="center" class="Estilo1"><img src="imagenes/no_registrado.gif" alt="No registrado" width="150" height="36" /><br />
        <br />
          <br />
    </div>
      <form action="opcion2.php" method="post">
  
      <div align="left">
        <table width="313" border="1" align="center" cellspacing="0" bordercolor="#71828A">
        <tr>
          <th width="311" height="28" bgcolor="#FFFFFF" scope="col"><div align="center"><a href="formulario_registro_clientes.php" class="Estilo3"> </a>
            <table width="177" border="0">
              <tr>
                <th width="32" scope="col"><div align="right"><img src="imagenes/ico_1.gif" width="18" height="18" /></div></th>
                <th width="135" scope="col"><div align="left"><a href="formulario_registro_clientes2.php?&codigo=<?php echo $_POST[codigo]; ?>" class="Estilo3">Agregar Cliente </a></div></th>
              </tr>
            </table>
            </div>
            <div align="right"></div></th>
          </tr>
      </table>
        </div>
    </form>
    <td width="186" height="28" bgcolor="#FFFFFF">&nbsp;</td>
  </tr>
</table>

   

</td>
  </tr>
</table>

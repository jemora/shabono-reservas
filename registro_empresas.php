<?php require('verificar.php'); ?>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title></title>
<style type="text/css">
<!--
.Estilo3 {font-size: 12px;
	font-family: Arial, Helvetica, sans-serif;
}
-->
</style>
</head>
<script>
function Verificar() {
	if(document.frm.nombre.value == "") {
		alert("Debe Colocar Los Nombres del Cliente");
		document.frm.nombre.focus();
		return false;
		}

	if(document.frm.apellido.value == "") {
		alert("Debe colocar Los Apellidos del Cliente");
		document.frm.apellido.focus();
		return false;	
		
		
	}
	if(document.frm.nac.value == "0") {
		alert("Falta nacionalidad del Cliente");
		document.frm.nac.focus();
		return false;
	}
	if(document.frm.doc.value == "0") {
		alert("Falta Señalar tipo de Documentacion");
		document.frm.doc.focus();
		return false;
	}
	if(document.frm.doc2.value == "") {
		alert("Falta por completar Numero de Identificacion");
		document.frm.doc2.focus();
		return false;
	}

if(document.frm.pais.value == "") {
		alert("Debe Colocar el Pais ");
		document.frm.pais.focus();
		return false;
	}
if(document.frm.ciudad.value == "") {
		alert("Debe Colocar la Ciudad");
		document.frm.ciudad.focus();
		return false;
	}
if(document.frm.direccion.value == "") {
		alert("Debe colocar la Direccion");
		document.frm.direccion.focus();
		return false;
	}
	if(document.frm.correo.value == "") {
		alert("Debe colocar el Correo");
		document.frm.correo.focus();
		return false;
	}
if(document.frm.cliente.value == "0") {
		alert("Debe señalar el tipo de cliente");
		document.frm.cliente.focus();
		return false;
	}
	if(document.frm.vehiculo.value == "") {
		alert("Debes Señalar una placa de Vehiculo ");
		document.frm.vehiculo.focus();
		return false;
	}
	// Quita sólo la siguiente línea para que se envíe el formulario
	alert("Estimado"+document.frm.dato1.value+".\nEl formulario se enviaría a partir de este punto sin problema");
	return true;	// Cambia "false" por "true" para que funcione el formulario
}
</script>


<body text="#000000" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0"><div align="center">
<table width="81%" border="0" align="center" cellpadding="0" cellspacing="0">
    <!--DWLayoutTable-->
    <tr>
      <td width="100%" valign="top"><div align="right" >
          <div align="left"><img src="imagenes/banne1.gif" width="607" height="30"><br />
            <?php include("logo.php");?>
            <br />
        </div>
        </div>
		
		<form name=frm onSubmit="return Verificar()" method="post" action="guardar_empresa.php" enctype="multipart/form-data">
     
          <table width="597" border="1" align="center" cellspacing="0" bordercolor="#000033">
        <tr>
          <th width="591" scope="col"><table width="567" border="0" cellspacing="0" cellpadding="4" align="center">
            <tr >
              <td width="151"><div align="left"><font size="1" face="Verdana, Arial, Helvetica, sans-serif"><strong>Nombre de la Empresa </strong></font></div></td>
              <td ><div align="left">
                <input name="empresa" type="text" id="empresa" size="22" maxlength="150" / style="background-color:e3e3e3; border: 1px solid #666666; font-size:8pt; color: #000099" />
              </div></td>
            </tr>
            <tr>
              <td width="151"><div align="left"><strong><font size="1" face="Verdana, Arial, Helvetica, sans-serif">R.I.F</font></strong></div></td>
              <td><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2">
                <input name="rif" type="text" id="rif" size="22" maxlength="150" / style="background-color:e3e3e3; border: 1px solid #666666; font-size:8pt; color: #000099" />
              </font></b></td>
            </tr>
            <tr>
              <td width="151"><div align="left"><strong><font size="1" face="Verdana, Arial, Helvetica, sans-serif">Persona  Contacto</font></strong></div></td>
              <td><div align="left"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2">
                <input name="nac" type="text" id="nac" size="22" maxlength="150" / style="background-color:e3e3e3; border: 1px solid #666666; font-size:8pt; color: #000099" />
              </font></b></div></td>
              </tr>
            <tr>
              <td width="151"><div align="left"><strong><font size="1" face="Verdana, Arial, Helvetica, sans-serif">Pais:</font></strong></div></td>
              <td><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2">
                <input name="pais" type="text" id="pais" size="22" maxlength="150" / style="background-color:e3e3e3; border: 1px solid #666666; font-size:8pt; color: #000099" />
              </font></b></td>
            </tr>
            <tr>
              <td width="151"><div align="left"><strong><font size="1" face="Verdana, Arial, Helvetica, sans-serif">Ciudad:</font></strong></div></td>
              <td><div align="left">
                <input name="ciudad" type="text" id="ciudad" size="22" maxlength="150" / style="background-color:e3e3e3; border: 1px solid #666666; font-size:8pt; color: #000099" />
              </div></td>
              </tr>
            <tr >
              <td width="151"><div align="left"><strong><font size="1" face="Verdana, Arial, Helvetica, sans-serif">Direccion:</font></strong></div></td>
              <td><div align="left">
                <textarea name="direccion" cols="50" rows="5" id="direccion" style="background-color:e3e3e3; border: 1px solid #666666; font-size:8pt; color: #000099"></textarea>
              </div></td>
              <input type="hidden" name="nivelacceso" value="0" />
              <input type="hidden" name="salir" value="salir" />
            </tr>
            <tr >
              <td height="13"><div align="left"><strong><font size="1" face="Verdana, Arial, Helvetica, sans-serif">Telefono:</font></strong></div></td>
              <td height="13" ><div align="left">
                <input name="telefono" type="text" id="telefono" size="22" maxlength="150" / style="background-color:e3e3e3; border: 1px solid #666666; font-size:8pt; color: #000099" />
              </div></td>
            </tr>
            <tr >
              <td height="7"><div align="left"><strong><font size="1" face="Verdana, Arial, Helvetica, sans-serif">Correo</font></strong></div></td>
              <td height="7" ><div align="left">
                <input name="correo" type="text" id="correo" size="22" maxlength="150" / style="background-color:e3e3e3; border: 1px solid #666666; font-size:8pt; color: #000099" />
              </div></td>
            </tr>
            <tr >
              <td height="7"><div align="left"><strong><font size="1" face="Verdana, Arial, Helvetica, sans-serif">Tipo de Empresa: </font></strong></div></td>
              <td height="7" ><div align="left">
                <select name="cliente" id="cliente" style="background-color:e3e3e3; border: 1px solid #666666; font-size:8pt; color: #000099">
                  <option value="0">Tipo de Empresa</option>
                  <option value="Privada">Privada</option>
                  <option value="Publica">Publica</option>
                </select>
              </div></td>
            </tr>
            <tr>
              <td height="40" colspan="2"><div align="center"><font face="Verdana" size="2"><font face="Verdana" size="2"><font face="Verdana" size="2"><span class="Estilo3">
                  <input name="usuario" type="hidden" id="usuario" value="<? echo $_SESSION['usuario_login'] ?>" />
                  <input name="fecha" type="hidden" id="fecha" value="<?php echo date("d-m-Y"); ?>" size="25" />
                  </span></font></font></font>
                      <input type="submit" name="Submit" value="  Registrar  " class="botones" />
              </div></td>
            </tr>
          </table></th>
        </tr>
      </table>
        </form>        <div align="center"></td>
    </tr>
    
    <tr>
      <td height="25" valign="top" bgcolor="#FFFFFF"><p></td>
    </tr>
</table>




<p>&nbsp;</p>

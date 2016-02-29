<?
require("aut_verifica.inc2.php");
$nivel_acceso=10; // Nivel de acceso para esta página.
if ($nivel_acceso <= $_SESSION['usuario_nivel']){
header ("Location: $redir?error_login=5");
exit;
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
<style type="text/css">
<!--
.Estilo3 {font-size: 12px;
	font-family: Arial, Helvetica, sans-serif;
}
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	background-image: url();
}
-->
</style>
<link href="Level2_Verdana_Text.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.Estilo4 {color: #FFFFFF}
-->
</style>
<script>
function Verificar() {
	if(document.frm.nombre.value == "") {
		alert("Debe Colocar el Nombre y Apellido del Acompañante");
		document.frm.nombre.focus();
		return false;
		}

	if(document.frm.cedula.value == "") {
		alert("Debe colocar LA cadula del Acompañante");
		document.frm.acedula.focus();
		return false;	
		
		
	}
	if(document.frm.telefono.value == "") {
		alert("Debe señalar un numero Telefonico");
		document.frm.telefono.focus();
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
	alert("Estimado"+document.frm.nombre.value+".\nEl formulario se enviaría a partir de este punto sin problema");
	return true;	// Cambia "false" por "true" para que funcione el formulario
}
</script>
</head>

<body>
<table width="631" border="0" align="center" cellspacing="0" bordercolor="#000000">
  <tr>
    <td width="625"><table width="351" border="0" align="center" cellspacing="0">
      <tr>
        <td width="349"><?php include("menu_reservacion.php");?></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td height="16">
          <form id="form1" name="form1" method="post" action="historial2.php?codigo=<? echo $_SESSION['doc2'] ?>">
          
            <div align="right">
              <div align="right">
                <input type="submit" name="Submit2" value="   Procesar  Reservacion   " />
              </div>
          </form>          </td>
      </tr>
    </table>
      <table width="607" border="0" align="center">
        <tr>
          <th width="601" height="213" bgcolor="#FFFFFF" scope="col"><table width="601" border="0" align="center" cellpadding="0" cellspacing="0">
              <!--DWLayoutTable-->
              <tr>
                <td width="100%" valign="top">
		
				
				<form action="?id=agregar&amp;codigo=<?php echo $codigo ?>&amp;multi=<?php echo $multi; ?>" method="post" enctype="multipart/form-data" name="frm" id="frm" onsubmit="return Verificar()">
                    <table width="601" border="0" align="center" cellspacing="0">
                      <tr>
                        <th width="552" height="131" scope="col"><table width="597" border="0" cellspacing="0" cellpadding="4" align="center">
                            <tr >
                              <td colspan="3" bgcolor="#000000"><div align="left" class="Estilo4">Registro de Acompa&ntilde;antes: </div>
                                  <div align="left"></div></td>
                            </tr>
                            <tr >
                              <td bgcolor="#B1C3D9"><div align="left" class="small"><font size="1" face="Verdana, Arial, Helvetica, sans-serif"><strong>Nombre y Apelliddo </strong></font></div></td>
                              <td colspan="2" bgcolor="#E3E9F1" ><div align="left"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2">
                                  <input name="nombre" type="text" class="small" id="nombre" / style="background-color:e3e3e3; border: 1px solid #666666; font-size:8pt; color: #000099" value="<?php echo $nombre; ?>" />
                              </font></b></div></td>
                            </tr>
                            <tr>
                              <td width="127" bgcolor="#B1C3D9"><div align="left"><strong><font size="1" face="Verdana, Arial, Helvetica, sans-serif">Cedula</font></strong></div></td>
                              <td colspan="2" bgcolor="#E3E9F1"><div align="left"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2">
                                <input name="cedula" type="text" class="small" id="cedula" / style="background-color:e3e3e3; border: 1px solid #666666; font-size:8pt; color: #000099" value="<?php echo $cedula; ?>" />
                              </font></b></div></td>
                            </tr>
                            <tr>
                              <td height="26" bgcolor="#B1C3D9"><div align="left" class="small"><strong>Telefono</strong></div></td>
                              <td height="26" colspan="2" bgcolor="#E3E9F1"><div align="left"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2">
                                  <input name="telefono" type="text" class="small" id="telefono" / style="background-color:e3e3e3; border: 1px solid #666666; font-size:8pt; color: #000099" value="<?php echo $telefono; ?>" />
                              </font></b></div></td>
                            </tr>
                            <tr>
                              <td height="26" bgcolor="#B1C3D9"><div align="left" class="small"><strong>Email</strong></div></td>
                              <td width="273" height="26" bgcolor="#E3E9F1"><div align="left"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2">
                                  <input name="correo" type="text" class="small" id="correo" / style="background-color:e3e3e3; border: 1px solid #666666; font-size:8pt; color: #000099" />
                              </font></b></div></td>
                              <td width="173" bgcolor="#E3E9F1"><div align="right">
                                <input name="Submit" type="submit" class="botones" id="Submit" value="    Agregar Acompa&ntilde;ante   " />
                              </div></td>
                            </tr>
                          </table>
                            <font face="Verdana" size="2"><font face="Verdana" size="2"><font face="Verdana" size="2"><font face="Verdana" size="2"><font face="Verdana" size="2"><span class="Estilo3">
                            <input name="usuario" type="hidden" id="usuario" value="<? echo $_SESSION['usuario_login'] ?>" />
                            </span><font face="Verdana" size="2"><font face="Verdana" size="2"><font face="Verdana" size="2"><font face="Verdana" size="2"><span class="Estilo3">
                            <input name="multi" type="hidden" id="multi" value="<?php echo $multi; ?>" />
                          </span></font></font></font></font></font></font></font></font></font></th>
                      </tr>
                    </table>
                </form>
                    <div align="center">
                      <?php

           if ( $id  == 'agregar' )
			  { 
			    require_once('conector/conector.php');
			mysql_connect($hostname,$username,$password);
 
mysql_select_db($database); 
$ref5="";
$sSQL="Delete From acompanantes Where multi like '$multi' and  nombre like '$ref5' ";
mysql_query($sSQL);			
				
				
				
				mysql_connect($hostname,$username,$password);
                mysql_select_db($database);
				mysql_query("INSERT INTO acompanantes(nombre,cedula,telefono,correo,multi,usuario) VALUES ('$nombre','$cedula','$telefono','$correo','$multi','$usuario')");


mysql_close();

echo ' 
<P align="center"><B><FONT face="Arial" color="#000066" size="2"><FONT color="#000000">El 
Acompañante '.$nombre.' se Ha registrado Correctamente<BR></FONT>Puede Continuar agregando 
Acompañantes</FONT></B></P>
  
  
';
		         } 

				else  if ( $id  == 'borrar' )
			  {  
			  require_once('conector/conector.php');


if (!isset($codigo))

mysql_connect($hostname,$username,$password);
 
mysql_select_db($database); 

$sSQL="Delete From acompanantes Where id like '$codigo2'";
mysql_query($sSQL);
			   } 
		 ?>
                    </div></td>
              </tr>
              <tr>
                <td height="18" valign="top" bgcolor="#FFFFFF"><p>
                    <?php include("lista_cliente_acompanantes.php");?>
                </p></td>
              </tr>
          </table></th>
        </tr>
      </table>
    </td>
  </tr>
</table>
<p>&nbsp;</p>
</body>
</html>

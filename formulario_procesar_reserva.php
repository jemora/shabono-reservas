<?
require("aut_verifica.inc2.php");
$nivel_acceso=10; // Nivel de acceso para esta página.
if ($nivel_acceso <= $_SESSION['usuario_nivel']){
header ("Location: $redir?error_login=5");
exit;
}
?>
<?php 	require_once('conector/conector.php');?>
<?php
$currentPage = $_SERVER["PHP_SELF"];
$usuario= $_SESSION['usuario_login']; 
$maxRows_Recordset2 = 200000;
$pageNum_Recordset2 = 0;
if (isset($_GET['pageNum_Recordset2'])) {
  $pageNum_Recordset2 = $_GET['pageNum_Recordset2'];
}
$startRow_Recordset2 = $pageNum_Recordset2 * $maxRows_Recordset2;

mysql_select_db($database, $connFlashblog);
$query_Recordset2 = "SELECT * FROM habitacion_reservas_web where id like '$ref' ";
$query_limit_Recordset2 = sprintf("%s LIMIT %d, %d", $query_Recordset2, $startRow_Recordset2, $maxRows_Recordset2);
$Recordset2 = mysql_query($query_limit_Recordset2, $connFlashblog) or die(mysql_error());
$row_Recordset2 = mysql_fetch_assoc($Recordset2);

if (isset($_GET['totalRows_Recordset2'])) {
  $totalRows_Recordset2 = $_GET['totalRows_Recordset2'];
} else {
  $all_Recordset2 = mysql_query($query_Recordset2);
  $totalRows_Recordset2 = mysql_num_rows($all_Recordset2);
}
$totalPages_Recordset2 = ceil($totalRows_Recordset2/$maxRows_Recordset2)-1;

$queryString_Recordset2 = "";
if (!empty($_SERVER['QUERY_STRING'])) {
  $params = explode("&", $_SERVER['QUERY_STRING']);
  $newParams = array();
  foreach ($params as $param) {
    if (stristr($param, "pageNum_Recordset2") == false && 
        stristr($param, "totalRows_Recordset2") == false) {
      array_push($newParams, $param);
    }
  }
  if (count($newParams) != 0) {
    $queryString_Recordset2 = "&" . htmlentities(implode("&", $newParams));
  }
}
$queryString_Recordset2 = sprintf("&totalRows_Recordset2=%d%s", $totalRows_Recordset2, $queryString_Recordset2);
?>
<title></title>
<style type="text/css">
<!--
.Estilo3 {font-size: 12px;
	font-family: Arial, Helvetica, sans-serif;
}
-->
</style>
<link href="Level2_Verdana_Text.css" rel="stylesheet" type="text/css">
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
.Estilo4 {color: #FFFFFF}
-->
</style></head>
<script>
function Verificar() {
	if(document.frm.fecha_depo.value == "") {
		alert("Debe Colocar la fecha del deposito");
		document.frm.fecha_depo.focus();
		return false;
		}

	if(document.frm.banco_dep.value == "") {
		alert("Debe señalar el banco");
		document.frm.banco_dep.focus();
		return false;	
		
		
	}
	if(document.frm.numero_dep.value == "") {
		alert("Falta señalar el numero de Deposito");
		document.frm.numero_dep.focus();
		return false;
	}
	if(document.frm.monto_dep.value == "") {
		alert("Debe señalar el Monto depositado");
		document.frm.monto_dep.focus();
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


<body text="#000000">
<img src="imagenes/banne19.gif" width="190" height="30" /><br>
<table width="351" border="0" align="center" cellspacing="0">
  <tr>
    <td width="349"><?php include("menu_reservacion.php");?></td>
  </tr>
  <tr>
    <td><?php include("menu_historial.php");?></td>
  </tr>
  <tr>
    <td height="16"><table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
      <!--DWLayoutTable-->
      <tr>
        <td width="100%" valign="top"><div align="right" >
            <div align="left"><br />
                <br />
            </div>
        </div>
            <div align="center">
            <table width="200" border="1" align="center" cellspacing="0" bordercolor="#000000">
              <tr>
                <td><table width="610" border="1" align="center" cellspacing="0" bordercolor="#7895AF">
                    <tr>
                      <td bgcolor="#7895AF"><strong>Reservaciones</strong></td>
                    </tr>
                    <tr>
                      <td bgcolor="#FFFFFF"><form name=frm onSubmit="return Verificar()" method="post" action="procesar_reserva.php?codigo=<?php echo $row_Recordset2['id']; ?>" enctype="multipart/form-data">
                        <table width="619" border="0" align="center" cellspacing="0" bordercolor="#000033">
                          <tr>
                            <th width="613" bgcolor="#000000" scope="col"><div align="left"><span class="Estilo4">Pago de Reservacion </span></div></th>
                          </tr>
                          <tr>
                            <th scope="col"><table width="567" border="0" cellspacing="0" cellpadding="4" align="center">
                                <tr >
                                  <td width="191"><span class="small"><strong>Fecha de Deposito </strong></span></td>
                                  <td width="360" ><input name="fecha_depo" type="text" id="fecha_depo" / style="background-color:e3e3e3; border: 1px solid #666666; font-size:8pt; color: #000099" value="<?php echo date("Y-m-d"); ?>" size="22" maxlength="10" /></td>
                                </tr>
                                <tr >
                                  <td><strong class="small">Banco</strong></td>
                                  <td ><input name="banco_dep" type="text" id="banco_dep" size="22" / style="background-color:e3e3e3; border: 1px solid #666666; font-size:8pt; color: #000099" /></td>
                                </tr>
                                <tr >
                                  <td><span class="small"><strong>Numero de Deposito </strong></span> </font></td>
                                  <td ><input name="numero_dep" type="text" id="numero_dep" size="22" / style="background-color:e3e3e3; border: 1px solid #666666; font-size:8pt; color: #000099" /></td>
                                </tr>
                                <tr >
                                  <td><font size="1" face="Verdana, Arial, Helvetica, sans-serif" class="small"><strong>Monto depositado </strong></font></td>
                                  <td ><input name="monto_dep" type="text" id="monto_dep" size="22" / style="background-color:e3e3e3; border: 1px solid #666666; font-size:8pt; color: #000099" /></td>
                                </tr>
                                <tr>
                                  <td height="40" colspan="2"><div align="center"><font face="Verdana" size="2"><font face="Verdana" size="2"><font face="Verdana" size="2"><span class="Estilo3"> </span><font face="Verdana" size="2"><font face="Verdana" size="2"><span class="Estilo3"> </span></font></font><span class="Estilo3">
                                      <input name="banco" type="hidden" id="banco" value="1" size="25" />
                                      </span></font></font></font>
                                      <input type="submit" name="Submit2" value="   Pagar Reservacion    " class="botones" />
                                  </div></td>
                                </tr>
                            </table></th>
                          </tr>
                        </table>
                      </form>                      </td>
                    </tr>
                </table></td>
              </tr>
            </table>
            <p></td>
      </tr>
    </table></td>
  </tr>
</table>
<p>&nbsp;</p>
<p>&nbsp;</p>

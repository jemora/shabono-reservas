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
$query_Recordset2 = "SELECT * FROM habitacion_reservas_web where usuario like '$usuario' ORDER BY fecha DESC";
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
<link href="Level2_Verdana_Text.css" rel="stylesheet" type="text/css">
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
.Estilo5 {color: #FF0000}
-->
</style></head>
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


<body text="#000000">
<img src="imagenes/banne19.gif" width="190" height="30" /><br>
<table width="351" border="0" align="center" cellspacing="0">
  <tr>
    <td width="349"><?php include("menu_reservacion.php");?></td>
  </tr>
  <tr>
    <td><?php include("menu_historial.php");?></td>
  </tr><?php
  require_once('conector/conector.php');
$link = mysql_connect($hostname, $username , $password); 
mysql_select_db($database ); 
$test11bb = mysql_query("SELECT COUNT(*) from contador1  ");
$test1b = mysql_fetch_row($test11bb);
$num_web= $test1b[0]; 
  
  
  
  require_once('conector/conector.php');
if (!isset($buscar))
//Conexion con la base
mysql_connect($hostname,$username,$password);

//Creamos la sentencia SQL y la ejecutamos
$sSQL="Update habitacion_reservas_web   Set  
fecha_depo='$fecha_depo',
  banco_dep='$banco_dep',
  numero_dep= '$numero_dep',
monto_dep='$monto_dep',
banco='$banco',
num_web='$num_web'  
Where id='$codigo'";

mysql_db_query($database,$sSQL);
  
    ?>
  <tr>
    <td height="73"><table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
      <!--DWLayoutTable-->
      <tr>
        <td width="100%" height="45" valign="top"><div align="center">
          <div align="center">Su reservacion sera Procesada y confirmada durante las Proximas Horas <br>
          Gracias por Utilizar nuestros servicios </div></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="20" class="small Estilo5"><strong>Nota</strong>: El Hotel no hara devoluciones de Dinero en caso de no ocupar la Habitaci&oacute;n en la fecha seleccionada por el cliente </td>
  </tr>
</table>
<br>
<?php include('detalles_asignar_hab.php'); ?>
<p>&nbsp;</p>

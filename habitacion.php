<?
require("aut_verifica.inc2.php");
$nivel_acceso=10; // Nivel de acceso para esta página.
if ($nivel_acceso <= $_SESSION['usuario_nivel']){
header ("Location: $redir?error_login=5");
exit;
}
?>
<?php require_once('conector/conector.php');?> 
<?php
$currentPage = $_SERVER["PHP_SELF"];

$maxRows_Recordset223 = 100;
$pageNum_Recordset223 = 0;
if (isset($_GET['pageNum_Recordset223'])) {
  $pageNum_Recordset223 = $_GET['pageNum_Recordset223'];
}
$startRow_Recordset223 = $pageNum_Recordset223 * $maxRows_Recordset223;

mysql_select_db($database, $connFlashblog);
$query_Recordset223 = "SELECT * FROM clientes WHERE doc2  LIKE '$codigo'";
$query_limit_Recordset223 = sprintf("%s LIMIT %d, %d", $query_Recordset223, $startRow_Recordset223, $maxRows_Recordset223);
$Recordset2 = mysql_query($query_limit_Recordset223, $connFlashblog) or die(mysql_error());
$row_Recordset223 = mysql_fetch_assoc($Recordset2);

?>


<?
if (!isset($codigo))
$dbh=mysql_connect ($hostname,$username,$password) or die ('I cannot connect to the database because: ' . mysql_error());
mysql_select_db ($database); 
//Ejecutamos la sentencia SQL
$resultdatocod = mysql_query("SELECT * FROM clientes WHERE doc2  LIKE '$codigo'");
$resultdato = mysql_query("SELECT * FROM clientes WHERE doc2  LIKE '$codigo'");
$result1101 = mysql_query("SELECT * FROM clientes WHERE doc2  LIKE '$codigo'");
$result1102 = mysql_query("SELECT * FROM clientes WHERE doc2  LIKE '$codigo'");
////////////para  contar  cuantas  facturas  hay  y asignarle unam consecutivo al multi
$link = mysql_connect($hostname, $username , $password); 
mysql_select_db($database ); 
$test11a = mysql_query("SELECT COUNT(*) from contador1 ");
$test1 = mysql_fetch_row($test11a);
$test1[0];
$ref3=$test1[0]+1;
$ref4= 're';
$multi= "r$ref3";
 
?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"><style type="text/css">
<!--
body,td,th {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 12px;
}
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
-->
</style>

<script>
function Verificar() {
	if(document.frm.d.value == "0") {
		alert("Seleccionar el Dia de Inicio");
		document.frm.d.focus();
		return false;
		}

	if(document.frm.m.value == "0") {
		alert("Seleccionar el Mes de Inicio");
		document.frm.m.focus();
		return false;	
		
		
	}
	if(document.frm.a.value == "0") {
		alert("Seleccionar el Año de Inicio");
		document.frm.a.focus();
		return false;
	}
	if(document.frm.personas.value == "") {
		alert("Falta dato por completar");
		document.frm.personas.focus();
		return false;
	}
	if(document.frm.m1.value == "0") {
		alert("Seleccionar el Mes final");
		document.frm.m1.focus();
		return false;
	}

if(document.frm.d1.value == "0") {
		alert("Seleccionar el Dia final");
		document.frm.d1.focus();
		return false;
	}
if(document.frm.a2.value == "0") {
		alert("Seleccionar el Año final");
		document.frm.a2.focus();
		return false;
	}
if(document.frm.dato8.value == "") {
		alert("Falta dato por completar");
		document.frm.dato8.focus();
		return false;
	}
	if(document.frm.dato9.value == "") {
		alert("Falta dato por completar");
		document.frm.dato9.focus();
		return false;
	}
if(document.frm.dato10.value == "") {
		alert("Falta dato por completar");
		document.frm.dato10.focus();
		return false;
	}
	if(document.frm.imagen.value == "") {
		alert("Debes Subir Una Imagen ");
		document.frm.imagen.focus();
		return false;
	}
	// Quita sólo la siguiente línea para que se envíe el formulario
	alert("Estimado"+document.frm.dato1.value+".\nEl formulario se enviaría a partir de este punto sin problema");
	return true;	// Cambia "false" por "true" para que funcione el formulario
}
</script>


<link href="Level2_Verdana_Text.css" rel="stylesheet" type="text/css">
</head>

<body>
<img src="imagenes/banne19.gif" width="190" height="30" /><br>
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
        <td><?php include("detalles_clientes.php");?></td>
      </tr>
      <tr>
        <td height="352"></p>
            <div id="resultado">
              <?php include('registro_demo.php');?>
            </div>
          <form name=calform onSubmit="return Verificar()"  method="post" action="?&amp;id=guardar2&amp;id3=<?php echo $dia; ?>" enctype="multipart/form-data">
            <?php 

require_once('conector/conector.php');
$hostname_Conn = $hostname;
$database_Conn = $database;
$username_Conn = $username;
$password_Conn = $password;
$Conn = mysql_connect($hostname_Conn, $username_Conn, $password_Conn) or die(mysql_error());





 ?>
            <script language="JavaScript" type="text/javascript" src="date-picker.js"></script>
            <script language="JavaScript" type="text/javascript" src="ajax.js"></script>
            <?php 	require_once('conector/conector.php');?>
            <?php
$currentPage = $_SERVER["PHP_SELF"];

$maxRows_Recordset2 = 20000;
$pageNum_Recordset2 = 0;
if (isset($_GET['pageNum_Recordset2'])) {
  $pageNum_Recordset2 = $_GET['pageNum_Recordset2'];
}
$startRow_Recordset2 = $pageNum_Recordset2 * $maxRows_Recordset2;

mysql_select_db($database, $connFlashblog);
$query_Recordset2 = "SELECT * FROM habitacion2 ";
$query_limit_Recordset2 = sprintf("%s LIMIT %d, %d", $query_Recordset2, $startRow_Recordset2, $maxRows_Recordset2);
$Recordset2 = mysql_query($query_limit_Recordset2, $connFlashblog) or die(mysql_error());
$row_Recordset2 = mysql_fetch_assoc($Recordset2);


?>
          <?php
mysql_free_result($Recordset2);
?>
            <?php
//NeXTenesio Special List Recordset
mysql_select_db($database_Conn, $Conn);

$query_Paises = "SELECT * FROM hab_tipo_web ORDER BY id ASC";
$Paises = mysql_query($query_Paises, $Conn) or die(mysql_error());
$row_Paises = mysql_fetch_assoc($Paises);
$totalRows_Paises = mysql_num_rows($Paises);
//End NeXTenesio Special List Recordset

//NeXTenesio Special List Recordset
$colname_Provincias = "-1";
if (isset($_POST['id_tipo'])) {
  $colname_Provincias = $_POST['id_tipo'];
}
mysql_select_db($database_Conn, $Conn);

/// dato





////////////////////////////////////////




$query_Provincias = sprintf("SELECT * FROM habitacion WHERE tipo = '%s' and habitacion != '$dato1'  ORDER BY id_hab ASC   

 ", $colname_Provincias);
$Provincias = mysql_query($query_Provincias, $Conn) or die(mysql_error());
$row_Provincias = mysql_fetch_assoc($Provincias);
$totalRows_Provincias = mysql_num_rows($Provincias);
//End NeXTenesio Special List Recordset

//NeXTenesio Special List Recordset
$colname_Ciudades = "-1";
if (isset($_POST['habitacion'])) {
  $colname_Ciudades = $_POST['habitacion'];
}
mysql_select_db($database_Conn, $Conn);

$query_Ciudades = sprintf("SELECT * FROM serv_asig WHERE  id_serv= '%s' ", $colname_Ciudades);
$Ciudades = mysql_query($query_Ciudades, $Conn) or die(mysql_error());
$row_Ciudades = mysql_fetch_assoc($Ciudades);
$totalRows_Ciudades = mysql_num_rows($Ciudades);
//End NeXTenesio Special List Recordset
?>
            <style type="text/css">
<!--
.Estilo3 {font-family: Verdana, Arial, Helvetica, sans-serif; font-weight: bold; font-size: 12px; }
-->
      </style>
            <link href="Level2_Verdana_Text.css" rel="stylesheet" type="text/css" />
            <form name="form1" onSubmit="enviarDatosEmpleado1(); return false" method="post" action="combo.php" enctype="multipart/form-data" >
            
             
              <table width="200" border="1" cellspacing="0" bordercolor="#000000">
                <tr>
                  <td><table width="610" border="1" align="center" cellspacing="0" bordercolor="#7895AF">
                    <tr>
                      <td bgcolor="#7895AF"><strong>Reservaciones</strong></td>
                    </tr>
                    <tr>
                      <td bgcolor="#FFFFFF"><table width="609" border="0">
                        <!--DWLayoutTable-->
                        <tr>
                          <td width="603" height="157"><table width="597" border="0" align="left" cellspacing="2">
                            <tr>
                              <td width="149" bgcolor="#C8D5E4"><div align="left" class="small"><strong>Fecha Inicio </strong></div></td>
                              <td colspan="2"><div align="left">
                                  <input name="fecha1" type="text" class="small" id="fecha1" value="<?  echo  $fecha1; ?>" size="15" />
                              <a href="javascript:show_calendar('calform.fecha1');" onMouseOver="window.status='Date Picker';return true;" onMouseOut="window.status='';return true;"><img src="show-calendar.gif" width="24" height="22" border="0" align="absmiddle" /></a></div></td>
                            </tr>
                            <tr>
                              <td width="149" bgcolor="#C8D5E4"><div align="left" class="small"><strong>Fecha Final </strong></div></td>
                              <td colspan="2"><input name="fecha2" type="text" class="small" id="fecha2" value="<?  echo  $fecha2; ?>" size="15" />
                                <a href="javascript:show_calendar('calform.fecha2');" onMouseOver="window.status='Date Picker';return true;" onMouseOut="window.status='';return true;"><img src="show-calendar.gif" width="24" height="22" border="0" align="absmiddle" /></a></td>
                            </tr>
                            <tr>
                              <td width="149" bgcolor="#C8D5E4"><div align="left" class="small"><strong>Tipo de Habitaci&oacute;n </strong></div></td>
                              <td colspan="2"><table width="437" border="0" cellspacing="0">
                                  <tr>
                                    <td width="99"><select name="nombre_tipo" class="small" id="nombre_tipo" onChange="submit()">
                                      <option value="" <?php if (!(strcmp("", $_POST['nombre_tipo']))) {echo "SELECTED";} ?>>Seleccionar</option>
                                      <?php
do {  
?>
                                      <option value="<?php echo $row_Paises['nombre_tipo']?>"<?php if (!(strcmp($row_Paises['nombre_tipo'], $_POST['nombre_tipo']))) {echo "SELECTED";} ?>><?php echo $row_Paises['nombre_tipo']?></option>
                                      <?php
} while ($row_Paises = mysql_fetch_assoc($Paises));
  $rows = mysql_num_rows($Paises);
  if($rows > 0) {
      mysql_data_seek($Paises, 0);
	  $row_Paises = mysql_fetch_assoc($Paises);
  }
?>
                                    </select></td>
                                    <td width="334"><?php   
								
$result_tipo = mysql_query("SELECT * FROM hab_tipo    WHERE  tipo  LIKE '$nombre_tipo'");
////////////////////
while ($row=mysql_fetch_array($result_tipo))  { $tipo=  "".$row["id_tipo"].""; }mysql_free_result($result_tipo);	
require_once('conector/conector.php');
$link = mysql_connect($hostname, $username , $password); 
mysql_select_db($database ); 
$test11bb = mysql_query("SELECT COUNT(*) from habitacion  where tipo like '$tipo'");
$test1b = mysql_fetch_row($test11bb);
  $test1b[0]; 
 //////////////////////////////////
 require_once('conector/conector.php');
$link = mysql_connect($hostname, $username , $password); 
mysql_select_db($database ); 
$test11a = mysql_query("SELECT COUNT(*) from habitacion2 where tipo like '$tipo' and '$fecha1' BETWEEN fecha1 and fecha2 ");
$test1 = mysql_fetch_row($test11a);
 $test1[0];
 
 if ( $test1[0] >= 1 )
			  { 
			  if ( $test1[0] >= $test1b[0])  
				{
				
				
				
				echo '<P><FONT color="#ff0000"><B> Habitaciones no Disponible</B> </FONT></P>';
            }
                 } 
 
 
 
 ?>
                                      <input name="valor1" type="hidden" id="valor1" value="<?php echo $test1[0]; ?>" />
                                      <input name="valor2" type="hidden" id="valor2" value="<?php echo $test1b[0]; ?>" /></td>
                                  </tr>
                                </table></td>
                              </tr>
                            <tr>
                              <td bgcolor="#C8D5E4"><div align="left" class="small"><strong>N&ordm; de personas </strong></div></td>
                              <td colspan="2"><div align="left">
                                  <input name="personas" type="text" class="small" id="personas" size="5" />
                                  <input name="nombre" type="hidden" id="nombre" value="<?php echo $row_Recordset223['nombre']; ?>" />
                                  <input name="apellido" type="hidden" id="apellido" value="<?php echo $row_Recordset223['apellido']; ?>" />
                                  <input name="usuario" type="hidden" id="usuario" value="<? echo $_SESSION['usuario_login'] ?>" />
                                  <input name="multi" type="hidden" id="multi" value="<?php echo $multi; ?>" />
                                  <input name="opc2" type="hidden" id="opc2" value="1" />
                                  <input name="doc2" type="hidden" id="doc2" value="<? echo $_SESSION['doc2'] ?>" />
                                  <input name="codigo" type="hidden" id="codigo" value="<?php echo $row_Recordset223['doc2']; ?>" />
                                  <input name="status" type="hidden" id="status" value="reservada" />
                                  <input name="fecha" type="hidden" id="fecha" value="<?php echo date("Y-m-d"); ?>" />
                              </div></td>
                            </tr>
                            <tr>
                              <td bgcolor="#C8D5E4"><div align="left" class="small"><strong>Observaciones</strong></div></td>
                              <td width="217"><label>
                                <textarea name="obsev" cols="40" class="small" id="obsev"></textarea>
                              </label></td>
                              <td width="217"><div align="center">
                                  <input type="submit" name="Submit" value="   Reservar   " />
                              </div></td>
                            </tr>
                            <tr>
                              <td colspan="3"><div align="center"></div></td>
                            </tr>
                          </table></td>
                          </tr>
                      </table>
                      <p>&nbsp;</p>
                      </td>
                    </tr>
                  </table></td>
                </tr>
              </table>
            </form>
          <p>
            <?php
mysql_free_result($Paises);

mysql_free_result($Provincias);

mysql_free_result($Ciudades);
?>
              <label></label>
          </td>
      </tr>
    </table></td>
  </tr>
</table>
<p>&nbsp;</p>
</body>
</html> 

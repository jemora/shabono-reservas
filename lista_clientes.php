<?php 	require_once('conector/conector.php');?>

<?php 
$usuario= $_SESSION['usuario_login']; 
mysql_connect($hostname,$username,$password);
mysql_select_db($database); 
$fecha_hoy=date("Y-m-d"); 
$sSQL="Delete From habitacion_reservas_web where usuario like '$usuario' and fecha1 <= '$fecha_hoy' and banco like '0'";
mysql_query($sSQL);

 ?>
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
$query_Recordset2 = "SELECT * FROM habitacion_reservas_web where usuario like '$usuario' and  banco like '0' ORDER BY id DESC";
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
<head>

<title>lista de clientes</title>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">






<style type="text/css">
<!--
.Estilo1 {font-size: 12px}
.Estilo2 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 12px;
	font-weight: bold;
}
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
.Estilo4 {color: #FFFFFF}
-->
</style>
<link href="Level2_Verdana_Text.css" rel="stylesheet" type="text/css">
<style type="text/css">
<!--
.Estilo3 {font-size: 12px;
	font-family: Arial, Helvetica, sans-serif;
}
-->
</style>
</head>

<body>
<br>
<table width="200" border="1" align="center" cellspacing="0" bordercolor="#000000">
  <tr>
    <td><table width="601" border="0" align="center" cellspacing="1" bordercolor="#CCCCCC">
      <tr>
        <td rowspan="2" bgcolor="#000000" class="small" ><div align="left" class="small Estilo4">
            <div align="center">N&ordm;</div>
        </div>          </td>
        <td height="16" colspan="2" bgcolor="#000000" class="small" ><div align="left" class="small Estilo4">
          <div align="center">Fechas de Reservaciones </div>
        </div></td>
        <td height="16" rowspan="2" bgcolor="#000000" class="small" ><div align="left" class="small Estilo4">
            <div align="center">Dias</div>
        </div></td>
        <td width="100" height="16" rowspan="2" bgcolor="#000000" class="small"><div align="left" class="small Estilo4">
            <div align="center">Monto </div>
        </div></td>
        <td height="16" rowspan="2" bgcolor="#000000" class="small" ><div align="left" class="small Estilo4">Aconpa&ntilde;antes</div></td>
        <td width="65" height="16" colspan="2" rowspan="2" bgcolor="#000000"><span class="Estilo4"></span></td>
      </tr>
      <tr>
        <td height="8" bgcolor="#000000" class="small" ><div align="center"><span class="small Estilo4">Desde</span></div></td>
        <td height="8" bgcolor="#000000" class="small" ><div align="center"><span class="small Estilo4">Hasta</span></div></td>
      </tr>
      <?php do { ?>
      <tr>
        <td width="45" height="34" bgcolor="#E3E9F1" class="small" ><?php echo $row_Recordset2['num_web']; ?></td>
        <td width="46" bgcolor="#E3E9F1" class="small" ><?php echo $row_Recordset2['fecha1']; ?></td>
        <td width="132" bgcolor="#E3E9F1" class="small" ><?php echo $row_Recordset2['fecha2']; ?></td>
        <td width="89" bgcolor="#E3E9F1" class="small" ><div align="left" class="small"><?php echo $row_Recordset2['cant_dia']; ?></div></td>
        <td bgcolor="#E3E9F1" class="small" ><div align="left" class="small"><?php echo $row_Recordset2['subtotal1']; ?></div></td>
        <td width="111" bgcolor="#E3E9F1" class="small" ><div align="center" class="small">
            <div align="center"><a href="detalles_clientes.php?&id=detalles2&codigo=<?php echo $row_Recordset2['doc2']; ?>" class="Estilo1"></a>
                <table width="20" border="0">
                  <tr>
                    <th scope="col"><img src="imagenes/edit.gif" alt="Detalles" width="17" height="17"></th>
                    <th scope="col"><a href="formulario_acompanante.php?&id=detalles2&multi=<?php echo $row_Recordset2['multi']; ?>" class="small">Agregar</a></th>
                  </tr>
                </table>
            </div>
        </div></td>
        <td c"><form name="form1" method="post" action="formulario_procesar_reserva.php?ref=<?php echo $row_Recordset2['id']; ?>">
            <label>
            <input type="submit" name="Submit" value="Procesar">
           <span class="Estilo3">
            <input name="multi" type="hidden" id="multi" value="<?php echo $row_Recordset2['multi']; ?>" />
            </span><span class="Estilo3">
            <input name="fecha1" type="hidden" id="fecha1" value="<?php echo $row_Recordset2['fecha1']; ?>" />
            </span><span class="Estilo3">
            <input name="ref" type="hidden" id="ref" value="<?php echo $row_Recordset2['id']; ?>" />
          <font face="Verdana" size="2"><span class="Estilo3">
            <input name="cant_dia" type="hidden" id="cant_dia" value="<?php echo $row_Recordset2['cant_dia']; ?>" />
         <span class="Estilo3">
            <input name=" subtotal1" type="hidden" id=" subtotal1" value="<?php echo $row_Recordset2['subtotal1']; ?>" />
            </span></font></font></font></font></font></font></font></font></font></font></font></font></font></font></font></font></font>
        </form></td>
        <td c"><form name="form1" method="post" action="borrar_cliente.php?id=borrar&codigo=<? echo $_SESSION['doc2'] ?>">
            <label>
            <input type="submit" name="Submit2" value="Eliminar">
         <span class="Estilo3">
            <input name="codigo2" type="hidden" id="codigo2" value="<?php echo $row_Recordset2['id']; ?>" />
            </span>           </label>
        </form></td>
      </tr>
      <?php } while ($row_Recordset2 = mysql_fetch_assoc($Recordset2)); ?>
    </table></td>
  </tr>
</table>

</body>
</html>
<?php
mysql_free_result($Recordset2);
?>

<?php require_once('Connections/hotel.php'); ?>
<?php
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  $theValue = (!get_magic_quotes_gpc()) ? addslashes($theValue) : $theValue;

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? "'" . doubleval($theValue) . "'" : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_update"])) && ($_POST["MM_update"] == "form1")) {
  $updateSQL = sprintf("UPDATE usuarios SET usuario=%s, nombre=%s, apellido=%s, email=%s WHERE ID=%s",
                       GetSQLValueString($_POST['usuario'], "text"),
                       GetSQLValueString($_POST['nombre'], "text"),
                       GetSQLValueString($_POST['apellido'], "text"),
                       GetSQLValueString($_POST['email'], "text"),
                       GetSQLValueString($_POST['ID'], "int"));

  mysql_select_db($database_hotel, $hotel);
  $Result1 = mysql_query($updateSQL, $hotel) or die(mysql_error());

  $updateGoTo = "registro_actualizar2.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $updateGoTo .= (strpos($updateGoTo, '?')) ? "&" : "?";
    $updateGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $updateGoTo));
}

mysql_select_db($database_hotel, $hotel);
$query_Recordset1 = "SELECT * FROM  usuarios WHERE ID  LIKE '$codigo'";
$Recordset1 = mysql_query($query_Recordset1, $hotel) or die(mysql_error());
$row_Recordset1 = mysql_fetch_assoc($Recordset1);
$totalRows_Recordset1 = mysql_num_rows($Recordset1);
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
<style type="text/css">
<!--
.Estilo14 {color: #666666; font-size: 12px; }
.Estilo16 {color: #666666; font-size: 12px; font-family: Verdana, Arial, Helvetica, sans-serif; }
.Estilo17 {font-family: Verdana, Arial, Helvetica, sans-serif}
.Estilo19 {font-family: Verdana, Arial, Helvetica, sans-serif; font-weight: bold; }
-->
</style>
</head>

<body>
<div align="center"><img src="imagenes/banne14.gif" width="607" height="30" /> <br />
</div>
<table width="601" border="1" align="center" cellspacing="0" bordercolor="#999999" bgcolor="#F4F4F4">
  <!--DWLayoutTable-->
  <tr>
    <td width="560" height="25" valign="top"><table width="560" border="0" align="center" cellspacing="0">
      <!--DWLayoutTable-->
      <tr>
        <td width="19" bgcolor="#F4F4F4"><span class="Estilo14"><a href="javascript:history.back(1)"><img src="imagenes/ico_3.gif" alt="Regresar" width="18" height="18" border="0" /></a></span></td>
        <td width="136" bgcolor="#F4F4F4"><span class="Estilo16">Regresar</span></td>
        <td width="364" bgcolor="#F4F4F4"><div align="right"></div></td>
        <td width="23" bgcolor="#F4F4F4"><div align="right"><a href="javascript: window.print()"></a></div></td>
      </tr>
    </table></td>
  </tr>
</table>
<form method="post" name="form1" action="<?php echo $editFormAction; ?>">
  <p>&nbsp;  </p>
  <table width="0" border="1" align="center" cellspacing="0" bordercolor="#B1C3D9">
    <tr>
      <th width="18" scope="col"><img src="imagenes/ico_1.gif" width="18" height="18" /></th>
      <th width="581" bgcolor="#B1C3D9" scope="col"><span class="Estilo17">Actualizar  Usuario</span></th>
    </tr>
    <tr>
      <td height="140" colspan="2"><table width="600" align="center">
    <tr valign="baseline">
      <td align="right" nowrap class="Estilo16"><span class="Estilo17">Usuario</span></td>
      <td><input type="text" name="usuario" value="<?php echo $row_Recordset1['usuario']; ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td align="right" nowrap class="Estilo16"><span class="Estilo17">Nombre:</span></td>
      <td><input type="text" name="nombre" value="<?php echo $row_Recordset1['nombre']; ?>" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td align="right" nowrap class="Estilo16"><span class="Estilo17">Apellido:</span></td>
      <td><input type="text" name="apellido" value="<?php echo $row_Recordset1['apellido']; ?>" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td align="right" nowrap class="Estilo16"><span class="Estilo17">Email:</span></td>
      <td><input type="text" name="email" value="<?php echo $row_Recordset1['email']; ?>" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td align="right" nowrap>&nbsp;</td>
      <td><input type="submit" value="Actualizar registro"></td>
    </tr>
  </table></td>
    </tr>
  </table>
  <p>
    <input type="hidden" name="MM_update" value="form1">
    <input type="hidden" name="ID" value="<?php echo $row_Recordset1['ID']; ?>">
    </p>
</form>
<p>&nbsp;</p>
</body>
</html>
<?php
mysql_free_result($Recordset1);
?>

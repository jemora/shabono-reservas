
<?php 
require_once('conector/conector.php'); ?>
<?php  
if (!isset($codigo))
if (!isset($cat))
if (!isset($lugar))


$dbh=mysql_connect ($hostname,$username,$password) or die ('I cannot connect to the database because: ' . mysql_error());
mysql_select_db ($database);

$result_imagen = mysql_query("SELECT * FROM informacion WHERE cod LIKE '0'");

?>

<?php require_once('conector/conector.php');?> 

<?
$dbh=mysql_connect ($hostname,$username,$password) or die ('I cannot connect to the database because: ' . mysql_error());
mysql_select_db ($database); 

$resultinfo = mysql_query("SELECT * FROM informacion WHERE cod  LIKE '0'");
$resultinfo1 = mysql_query("SELECT * FROM informacion WHERE cod  LIKE '0'");
$resultinfo2 = mysql_query("SELECT * FROM informacion WHERE cod  LIKE '0'");
$resultinfo3 = mysql_query("SELECT * FROM informacion WHERE cod  LIKE '0'");
$resultinfo4 = mysql_query("SELECT * FROM informacion WHERE cod  LIKE '0'");
$resultinfo5 = mysql_query("SELECT * FROM informacion WHERE cod  LIKE '0'");
$resultinfo6 = mysql_query("SELECT * FROM informacion WHERE cod  LIKE '0'");
?>





</head><style type="text/css">
<!--
body,td,th {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 10px;
}
-->
</style>

<table width="607" border="0" align="center" cellspacing="0" bordercolor="#000000">
  <tr background="ver_logo.php?id=28">
    <td width="601"><table width="593" border="0" align="center" cellpadding="0" cellspacing="0">
      <!--DWLayoutTable-->
      <tr>
        <td width="509" height="28" valign="top"><p>&nbsp;</p>
          <p>
            <? while ($row=mysql_fetch_array($resultinfo1))  { echo "".$row["nombre"].""; }
mysql_free_result($resultinfo1)?>
            <br />
            <? while ($row=mysql_fetch_array($resultinfo2))  { echo "".$row["info"].""; }
mysql_free_result($resultinfo2)?>
            Telefono:
            <? while ($row=mysql_fetch_array($resultinfo4))  { echo "".$row["telefono"].""; }
mysql_free_result($resultinfo4)?>
Correos
<? while ($row=mysql_fetch_array($resultinfo5))  { echo "".$row["correo"].""; }
mysql_free_result($resultinfo5)?>
<br />
            <? while ($row=mysql_fetch_array($resultinfo3))  { echo "".$row["direccion"].""; }
mysql_free_result($resultinfo3)?>
          </p></td>
        <td width="84" valign="top"><img src="ver_logo.php?id=26" width="80" height="80" border="0" align="middle";width="359" /></td>
      </tr>
    </table></td>
  </tr>
</table>

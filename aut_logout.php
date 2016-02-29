<?

require ("aut_config.inc.php");
session_name($usuarios_sesion);
session_start();
session_destroy();
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

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script language="JavaScript" type="text/JavaScript">
function click(){
if(event.button==2){
alert(' No Autorizado');
}
}
document.onmousedown=click
//-->
</script>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title><? while ($row=mysql_fetch_array($resultinfo))  { echo "".$row["nombre"].""; }
mysql_free_result($resultinfo)?></title>

<style type="text/css">
<!--
body,td,th {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 9px;
	color: #666666;
}
a:link {
	color: #000000;
	text-decoration: none;
}
a:visited {
	color: #666666;
	text-decoration: none;
}
a:hover {
	color: #999999;
	text-decoration: none;
}
a:active {
	color: #990000;
	text-decoration: none;
}
-->
</style>
<style type="text/css">
<!--
body {
	background-image: url(bg_grad.jpg);
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
-->
</style></head>

<body>
<table width="874" border="0" align="center" cellpadding="0" cellspacing="0">
  <!-- fwtable fwsrc="web02.png" fwbase="web02.gif" fwstyle="Dreamweaver" fwdocid = "2056200678" fwnested="0" -->
  <tr>
    <td width="10"><img src="spacer.gif" width="10" height="1" border="0" alt="" /></td>
    <td width="851"><img src="spacer.gif" width="851" height="1" border="0" alt="" /></td>
    <td width="12"><img src="spacer.gif" width="12" height="1" border="0" alt="" /></td>
    <td width="10"><img src="spacer.gif" width="1" height="1" border="0" alt="" /></td>
  </tr>
  <tr>
    <td bgcolor="#003300">&nbsp;</td>
    <td bgcolor="#FFFFFF"><table width="770" border="0" align="center" cellpadding="0" cellspacing="0">
      <!--DWLayoutTable-->
      <tr>
        <td height="19" colspan="3" valign="top"><?php include("banner.php");?></td>
      </tr>


      <tr>
        <td width="141" height="25" valign="top" bgcolor="#FFFFFF"><?php include("menu.php");?>
          <br /></td>
        <td width="601" valign="top" bgcolor="#FFFFFF"><table border="0" cellpadding="0" cellspacing="0" width="688">
            <!--DWLayoutTable-->
            <!-- fwtable fwsrc="web01.png" fwbase="web01.jpg" fwstyle="Dreamweaver" fwdocid = "2056200678" fwnested="0" -->
            <tr>
              <td><img src="spacer.gif" width="10" height="1" border="0" alt="" /></td>
              <td width="668"><img src="spacer.gif" width="668" height="1" border="0" alt="" /></td>
              <td><img src="spacer.gif" width="10" height="1" border="0" alt="" /></td>
              <td><img src="spacer.gif" width="1" height="1" border="0" alt="" /></td>
            </tr>
            <tr>
              <td colspan="3"><img src="web01_r1_c1.jpg" alt="" name="web01_r1_c1" width="688" height="19" border="0" id="web01_r1_c1" /></td>
              <td><img src="spacer.gif" width="1" height="19" border="0" alt="" /></td>
            </tr>
            <tr>
              <td height="293" background="images/web01_r2_c1.jpg"><!--DWLayoutEmptyCell-->&nbsp;</td>
              <td valign="top"><iframe width="665" id="iframecont" onload="resize(false);" src="portada.php" scrolling="Auto" frameborder="0" height="850" marginheight="0" marginwidth="0" name="frame"></iframe></td>
              <td background="images/web01_r2_c3.jpg"><!--DWLayoutEmptyCell-->&nbsp;</td>
              <td><img src="spacer.gif" width="1" height="293" border="0" alt="" /></td>
            </tr>
            <tr>
              <td colspan="3"><img src="images/web01_r3_c1.jpg" alt="" name="web01_r3_c1" width="688" height="23" border="0" id="web01_r3_c1" /></td>
              <td><img src="spacer.gif" width="1" height="23" border="0" alt="" /></td>
            </tr>
          </table>          </td>
        <td width="28" valign="top" bgcolor="#FFFFFF"><p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
         
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p></td>
      </tr>
      <tr>
        <td height="9" colspan="3" valign="top" bgcolor="#FFFFFF"><?php include("banner2.php");?></td>
      </tr>
      <tr>
        <td height="9" colspan="3" valign="top" bgcolor="#FFFFFF"><table width="658" border="0" align="center" cellspacing="3">
          <tr>
            <td width="80"><img src="images/adodb.png" width="80" height="15" /></td>
            <td width="80"><img src="images/apache.png" width="80" height="15" /></td>
            <td width="80"><img src="images/debian.png" width="80" height="15" /></td>
            <td width="80"><img src="images/firefox.png" width="80" height="15" /></td>
            <td width="80"><img src="images/php.png" width="80" height="15" /></td>
            <td width="80"><img src="images/ubuntu.png" width="80" height="15" /></td>
            <td width="80"><img src="images/valid-css.png" width="80" height="15" /></td>
            <td width="82"><img src="images/valid-html.png" width="80" height="15" /></td>
          </tr>
        </table></td>
      </tr>
    </table></td>
    <td bgcolor="#003300">&nbsp;</td>
    <td><img src="spacer.gif" width="1" height="41" border="0" alt="" /></td>
  </tr>
</table>
</body>
</html>

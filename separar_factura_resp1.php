   <?php require_once('conector/conector.php');?> 

<?php
$currentPage = $_SERVER["PHP_SELF"];

$maxRows_Recordset2 = 10;
$pageNum_Recordset2 = 0;
if (isset($_GET['pageNum_Recordset2'])) {
  $pageNum_Recordset2 = $_GET['pageNum_Recordset2'];
}
$startRow_Recordset2 = $pageNum_Recordset2 * $maxRows_Recordset2;

mysql_select_db($database, $connFlashblog);
$query_Recordset2 = "SELECT * from clientes  WHERE doc2 LIKE '$doc2' ";
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
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
<script type="text/JavaScript">
<!--



function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}
//-->
</script>
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
.Estilo15 {color: #000000}
body,td,th {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 12px;
}
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
.Estilo22 {color: #FFCC00}
.Estilo23 {font-size: 10px}
-->
</style>
<script language="JavaScript" type="text/JavaScript">
<!--

function GP_popupConfirmMsg(msg) { //v1.0
  document.MM_returnValue = confirm(msg);
}
//-->
</script>
<script>
function cerrarse(){
window.close()
}
</script>
</head>

<body onLoad="MM_preloadImages('ver.php?titulo=<?php echo $row_rsArticulo['titulo']; ?>')">
<br>
<div align="center"><img src="imagenes/banne9.gif" width="607" height="30" /></div>
<table width="607" border="0" align="center" cellpadding="0" cellspacing="0">
  <!-- fwtable fwsrc="Untitled" fwbase="visor.jpg" fwstyle="Dreamweaver" fwdocid = "237802607" fwnested="0" -->
  <tr>
    <td><img src="imagenes/spacer.gif" width="5" height="1" border="0" alt=""></td>
    <td><img src="imagenes/spacer.gif" width="593" height="1" border="0" alt=""></td>
    <td><img src="imagenes/spacer.gif" width="9" height="1" border="0" alt=""></td>
    <td><img src="imagenes/spacer.gif" width="1" height="1" border="0" alt=""></td>
  </tr>
  <tr>
    <td colspan="3"><img name="visor_r1_c1" src="imagenes/visor_r1_c1.jpg" width="607" height="11" border="0" alt=""></td>
    <td><img src="imagenes/spacer.gif" width="1" height="11" border="0" alt=""></td>
  </tr>
  <tr>
    <td background="imagenes/visor_r2_c1.jpg">&nbsp;</td>
    <td><table width="565" height="223" border="0" align="center" cellspacing="0" bordercolor="#666666" bgcolor="#FF9900">
      <tr>
        <td width="563" height="10" bgcolor="#FFFFFF"><div align="left">
            <table width="562" border="0" cellspacing="0">
              <tr>
                <th height="194" scope="col"><table width="561" border="0" align="center" cellspacing="0" bgcolor="#F4F4F4">
                    <!--DWLayoutTable-->
                    <tr>
                      <td width="559" height="92" valign="top" bgcolor="#FFFFFF"><table width="559" border="0" align="center">
                          <!--DWLayoutTable-->
                          <tr bgcolor="#000000">
                            <td width="553" bgcolor="#000000"><div align="left" class="Estilo14 Estilo15"><strong><span class="Estilo22">Configuracion de Factura </span>: </strong></div></td>
                          </tr>
                          <tr bgcolor="#000000">
                            <td bgcolor="#FFFFFF"><table width="552" border="1" align="center" cellspacing="0" bordercolor="#999999" bgcolor="#F4F4F4">
                                <!--DWLayoutTable-->
                                <tr>
                                  <td width="546" height="24" valign="top"><table width="541" border="0" align="center" cellspacing="0">
                                      <!--DWLayoutTable-->
                                      <tr>
                                        <td width="19" bgcolor="#F4F4F4"><span class="Estilo14"><a href="javascript:history.back(1)"><img src="imagenes/ico_3.gif" alt="Regresar" width="18" height="18" border="0" /></a></span></td>
                                        <td width="146" bgcolor="#F4F4F4"><span class="Estilo23" >Regresar</span></td>
                                        <td width="357" bgcolor="#F4F4F4"><div align="right">
                                          <input name="button" type=button onClick="cerrarse()" value="Cerrar">
                                        </div></td>
                                        <td width="11" bgcolor="#F4F4F4"><!--DWLayoutEmptyCell-->&nbsp;</td>
                                      </tr>
                                  </table></td>
                                </tr>
                            </table></td>
                          </tr>
                          <tr>
                            <td height="38" bgcolor="#FFFFFF"><label>
                              <?php require_once('conector/conector.php'); ?>
                              <?php
if (!isset($codigo))
$link = mysql_connect($hostname, $username , $password); 
mysql_select_db($database ); 
$feha=date("d-m-Y");
$test11a = mysql_query("SELECT COUNT(*) from habitacion2  WHERE id LIKE '$codigo2' and opc2 LIKE '1' ");
$test1 = mysql_fetch_row($test11a);

$link = mysql_connect($hostname, $username , $password); 
mysql_select_db($database ); 
$test11a = mysql_query("SELECT SUM(multi) from habitacion2");
$test12 = mysql_fetch_row($test11a);
$test12[0];
$multi=$test12[0]+1;

?>
                              <?php		
				 
           if ( $test1[0] >= '1' )
			  { 
			   
              echo '
<P align="center"><FONT color="#ff0000"><B>No es posible aislar esta Factura ya que es la Principal</B> </FONT></P>';
                 } 
		else 
           if ( $test1[0] == '0' )
			  { 
			 $opc2='1';
$sSQL="Update habitacion2 Set  
opc2='$opc2',
 doc2='$doc2',
 nombre='$nombre',
 apellido='$apellido',
multi='$multi'
 
Where id='$codigo2'";
mysql_db_query($database,$sSQL);  
			  
	$sSQL="Update consumo Set  
multi='$multi'
 
Where ref='$codigo2'";
mysql_db_query($database,$sSQL);  	  
			  
			    echo '
<P align="center"><B><FONT color="#0000ff"><BR>Procesado 
Correctamente</FONT></B></P> ';
				

	
                 } 
				 else 
           if ( $id  == 'procesar' )
			  { 
			    echo "procesado";
				
                 } 

				 
		 ?>
                              <br>
                            </label></td>
                          </tr>
                      </table></td>
                    </tr>
                </table></th>
              </tr>
            </table>
        </div>        </tr>
    </table></td>
    <td background="imagenes/visor_r2_c3.jpg">&nbsp;</td>
    <td><img src="imagenes/spacer.gif" width="1" height="55" border="0" alt=""></td>
  </tr>
  <tr>
    <td colspan="3"><img name="visor_r3_c1" src="imagenes/visor_r3_c1.jpg" width="607" height="13" border="0" alt=""></td>
    <td><img src="imagenes/spacer.gif" width="1" height="13" border="0" alt=""></td>
  </tr>
</table>

</body>
</html>

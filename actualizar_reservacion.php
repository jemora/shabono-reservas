   <?php require_once('conector/conector.php');?> 
<?
if (!isset($codigo))
  
$dbh=mysql_connect ($hostname,$username,$password) or die ('I cannot connect to the database because: ' . mysql_error());
mysql_select_db ($database); 



//Ejecutamos la sentencia SQL
$result1 = mysql_query("SELECT * FROM habitacion2 WHERE id  LIKE '$codigo'  ");
$result2 = mysql_query("SELECT * FROM habitacion2 WHERE id  LIKE '$codigo' ");
$result3 = mysql_query("SELECT * FROM habitacion2 WHERE id  LIKE '$codigo' ");
$result4 = mysql_query("SELECT * FROM habitacion2 WHERE id  LIKE '$codigo' ");
$result5 = mysql_query("SELECT * FROM habitacion2 WHERE id  LIKE '$codigo' ");
$result6 = mysql_query("SELECT * FROM habitacion2 WHERE id  LIKE '$codigo' ");
$result7 = mysql_query("SELECT * FROM habitacion2 WHERE id  LIKE '$codigo' ");
$result8 = mysql_query("SELECT * FROM habitacion2 WHERE id  LIKE '$codigo' ");
$result9 = mysql_query("SELECT * FROM habitacion2 WHERE id  LIKE '$codigo' ");
$result10 = mysql_query("SELECT * FROM habitacion2 WHERE id  LIKE '$codigo' ");


?>
  <?  while ($row=mysql_fetch_array($result1)) { $fecha1 ="".$row["fecha1"].""; } mysql_free_result($result1)?>
   <?  while ($row=mysql_fetch_array($result2)) { $fecha2 ="".$row["fecha2"].""; } mysql_free_result($result2)?>
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

<script language="JavaScript" type="text/JavaScript">
<!--

function GP_popupConfirmMsg(msg) { //v1.0
  document.MM_returnValue = confirm(msg);
}
//-->
</script>
<style type="text/css">
<!--
.Estilo1 {font-family: Verdana, Arial, Helvetica, sans-serif}
.Estilo3 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 10px; }
-->
</style>
</head>

<body >
<table width="537" border="0" align="center" cellspacing="0">
  <tr>
    <td width="535"><?php include("buscar_reservacion.php");?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><table width="601" border="1" align="center" cellspacing="0" bordercolor="#999999" bgcolor="#F4F4F4">
      <!--DWLayoutTable-->
      <tr>
        <td width="560" height="24" valign="top"><table width="601" border="0" align="center" cellspacing="0">
            <!--DWLayoutTable-->
            <tr>
              <td width="19" bgcolor="#F4F4F4"><span class="Estilo14"><a href="lista_reservaciones.php"><img src="imagenes/ico_3.gif" alt="Regresar" width="18" height="18" border="0" /></a></span></td>
              <td width="136" bgcolor="#F4F4F4" class="Estilo1"><span class="Estilo3" >Regresar</span></td>
              <td width="364" bgcolor="#F4F4F4" class="Estilo1"><div align="right" class="Estilo3">Imprimir</div></td>
              <td width="23" bgcolor="#F4F4F4"><div align="right"><a href="javascript: window.print()"><img src="imagenes/print.gif" width="16" height="11" border="0" /></a></div></td>
            </tr>
        </table></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td><?php require_once('conector/conector.php');
  require('mensajes.php');
  
 
  
  
  
  

//Conexion con la base
mysql_connect($hostname,$username,$password);

$status='ocupada';

$sSQL="Update habitacion2 Set  
status='$status'  
  
Where id='$codigo'";

mysql_db_query($database,$sSQL);

	


  

	
?></td>
  </tr>
  <tr>
    <td><?php include("detalles_asignar_hab3.php");?></td>
  </tr>
</table>
<br>
<p align="center">&nbsp;</p>
</body>
</html>

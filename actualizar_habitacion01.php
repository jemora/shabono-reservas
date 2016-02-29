 <?php						 
          	
           if ( $id3  == 'agregar' )
			  { 
			  
require_once('conector/conector.php');
 

mysql_connect($hostname,$username,$password);
mysql_select_db($database);

$sSQL="Update habitacion Set  

habitacion='$habitacion',observaciones='$observaciones',detalles='$detalles'

  
Where id_hab='$dato'";

mysql_db_query($database,$sSQL);



 {
echo ' <p align="center"><b><font face="Arial" color="#000066" size="2">La habitacion se Ha registrado Correctamente</font></b><font color="#000066"></font></b></font></p>
<p align="center" class="Estilo2">
  <font face="Arial" size="2"> </font></p>
';
exit;
}





                 } 
							
		 ?>
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
$query_Recordset2 = "SELECT * FROM habitacion WHERE id_hab LIKE '$dato'";
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






<style type="text/css">
body{font: 75% Arial, sans-serif;}
form{width:600px;padding:5px 0;border: 2px solid #71828A;
background: #C4CECF;}
fieldset{border: 0px solid #000;}
legend{font: bold 140% Arial,sans-serif;color: #27518A;}
Ahora definimos las medidas del div que contiene al formulario, tanto el margen, ancho y alto.
div.medidas,div.check{margin: 10px 0 10px 10px;}
div.medidas label{float:left;width:90px;line-height:23px;}
div.medidas input{width:120px;}

Finalmente, modificamos el botón de submit, fíjate como lo hacemos, al haberle dado una id (“login”) en el código html, ahora para referirnos solamente a ese botón precisamos su id.

input#login{margin-left: 100px;border: 1px solid #27518A;
background: #ccc url(fondoBoton.jpg) repeat-x;}
.Estilo7 {
	font-size: xx-small;
	font-weight: bold;
}
.Estilo1 {font-size: 12px}
.Estilo14 {color: #666666; font-size: 12px; }
.Estilo16 {color: #666666; font-size: 12px; font-family: Verdana, Arial, Helvetica, sans-serif; }
</style>


<?php 	require_once('css.php');?>

<p align="center"><img src="imagenes/banne10.gif" width="607" height="30" /></p>
<table width="600" border="1" align="center" cellspacing="0" bordercolor="#999999" bgcolor="#F4F4F4">
  <!--DWLayoutTable-->
  <tr>
    <td width="560" height="26" valign="top"><table width="560" border="0" align="center" cellspacing="0">
      <tr>
        <td width="364" bgcolor="#F4F4F4"><table width="560" border="0" align="center" cellspacing="0">
          <!--DWLayoutTable-->
          <tr>
            <td width="19" height="20" bgcolor="#F4F4F4"><span class="Estilo14"><a href="javascript:history.back(1)"><img src="imagenes/ico_3.gif" alt="Regresar" width="18" height="18" border="0" /></a></span></td>
            <td width="136" bgcolor="#F4F4F4"><span class="Estilo16">Regresar</span></td>
            <td width="364" bgcolor="#F4F4F4"><!--DWLayoutEmptyCell-->&nbsp;</td>
            <td width="23" bgcolor="#F4F4F4"><div align="right"></div></td>
          </tr>
        </table></td>
      </tr>
    </table></td>
  </tr>
</table>
<br />
<table width="280" height="165" align="center" cellpadding="2" cellspacing="2" class="estilotabla">
  <tr>
    <td class="estilocelda">Actualizar Habitaci&ograve;n</td>
  </tr>
  <tr>
    <td height="135"><form action="?id3=agregar&dato=<?  echo  $dato; ?>" method="post">
        <div align="left">
              <table width="471" border="0" cellspacing="0">
                <tr>
                  <th width="144" class="Estilo7" scope="col"><div align="left">Numero de Habitacion</div></th>
                  <th width="318" scope="col"><div align="left"><input name="habitacion" type="text" id="habitacion" / style="background-color:e3e3e3; border: 1px solid #666666; font-size:8pt; color: #000099" value="<?php echo $row_Recordset2['habitacion']; ?>" size="5" maxlength="50" >
                      </div>
                  </label></th>
                </tr>
                <tr>
                  <th class="Estilo7" scope="col"><div align="left">Nombre de la habitaci&oacute;n </div></th>
                  <th scope="col"><div align="left"><input name="observaciones" type="text" id="observaciones" value="<?php echo $row_Recordset2['observaciones']; ?>" / style="background-color:e3e3e3; border: 1px solid #666666; font-size:8pt; color: #000099" >
                      </div>
                  </label></th>
                </tr>
                <tr>
                  <th class="Estilo7" scope="col"> <div align="left">Detalles de la Habitaci&oacute;n </div></th>
                  <th scope="col"><div align="left">
                    <textarea name="detalles" id="detalles" style="background-color:e3e3e3; border: 1px solid #666666; font-size:8pt; color: #000099"><?php echo $row_Recordset2['detalles']; ?></textarea>
                  </div></th>
                </tr>
              </table>
      <input name="submit2" type="submit" value="Agregar" />
        </div>
        </form></td>
  </tr>
</table>
<p><br /> 
  <br />
</p>
<table width="528" border="0" align="center" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr>
    <td width="528" height="277" valign="top"><table width="664" height="15" border="0" align="left" cellspacing="0" bgcolor="#FF9900">
     
        <td width="600" height="28" bgcolor="#FFFFFF"></td>
        <td width="68" height="28" bgcolor="#FFFFFF">&nbsp;</td>


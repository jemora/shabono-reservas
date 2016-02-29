<style type="text/css">
<!--
body,td,th {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 9px;
}
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
-->
</style><?php require('mensajes.php'); ?>
<?php require_once('conector/conector.php'); ?>
  
  <?php
if (!isset($codigo))
$link = mysql_connect($hostname, $username , $password); 
mysql_select_db($database ); 
$test11a = mysql_query("SELECT COUNT(*) from imagen WHERE ref LIKE '$dato'");
$test1 = mysql_fetch_row($test11a);


?>
  
  <?php		
				 
           if ( $test1[0] >= '1' )
			  { 
			   
             include("lista_galerias.php"); 
                 } 
		else 
           if ( $test1[0] == '0' )
			  { 
			 
			  echo '<div align="center"><img src="imagenes/banne11.gif" width="607" height="30"><br>
</div>
<table width="601" border="1" align="center" cellspacing="0" bordercolor="#999999" bgcolor="#F4F4F4">
  <!--DWLayoutTable-->
  <tr>
    <td width="560" height="25" valign="top"><table width="601" border="0" align="center" cellspacing="0">
      <!--DWLayoutTable-->
      <tr>
        <td width="19" bgcolor="#F4F4F4"><span class="Estilo14"><a href="lista_habitaciones_creadas.php"><img src="imagenes/ico_3.gif" alt="Regresar" width="18" height="18" border="0" /></a></span></td>
        <td width="136" bgcolor="#F4F4F4"><span class="Estilo16">Regresar</span></td>
        <td width="364" bgcolor="#F4F4F4"><!--DWLayoutEmptyCell-->&nbsp;</td>
        <td width="23" bgcolor="#F4F4F4"><div align="right"></div></td>
      </tr>
    </table></td>
  </tr>
</table>
<p align="center">No tiene Fotografias registradas</p>
<p>&nbsp;</p>
<p>&nbsp;</p>';

			  	
                 } 
				

				 
		 ?>

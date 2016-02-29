<?php require('verificar.php'); ?>
<?php require('mensajes.php'); ?>
<?php require_once('conector/conector.php'); ?>
  
  <?php
if (!isset($codigo))
$link = mysql_connect($hostname, $username , $password); 
mysql_select_db($database ); 
$feha=date("Y-m-d");
$test11a = mysql_query("SELECT COUNT(*) from habitacion2 WHERE status LIKE 'reservada'  AND  '$feha' BETWEEN fecha1 and fecha2 ORDER BY id ASC");
$test1 = mysql_fetch_row($test11a);


?>
  
  <?php		
				 
           if ( $test1[0] >= '1' )
			  { 
			   
             include("visualizador_reservas.php"); 
                 } 
		else 
           if ( $test1[0] == '0' )
			  { 
			 
			  echo $mensaje_reservacion1;

			  	
                 } 
				

				 
		 ?>
</p><style type="text/css">
<!--
body,td,th {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 10px;
}
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
-->
</style>
<p>&nbsp;</p>

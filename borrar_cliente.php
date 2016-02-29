<?php 
require_once('conector/conector.php');
       if ( $id  == 'borrar' )
			  { 
			  
				require_once('conector/conector.php');


if (!isset($codigo))

mysql_connect($hostname,$username,$password);
 
mysql_select_db($database); 

$sSQL="Delete From habitacion_reservas_web Where id like '$codigo2'";
mysql_query($sSQL);
				 
                 } 
					
		 ?>



<?php include('historial2.php'); ?>

<?php 
require_once('conector/conector.php');
?>






<p><?php require_once('conector/conector.php');


if (!isset($codigo))

mysql_connect($hostname,$username,$password);
 
mysql_select_db($database); 

$sSQL="Delete From habitacion2 Where id like '$codigo2'";
mysql_query($sSQL);
				
  require('buscar_cliente5.php'); ?>
</p>

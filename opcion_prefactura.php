 
   <?php require_once('conector/conector.php'); ?>
  
  <?php
if (!isset($codigo))
$link = mysql_connect($hostname, $username , $password); 
mysql_select_db($database ); 
$feha=date("d-m-Y");
$test11a = mysql_query("SELECT COUNT(*) from habitacion2  WHERE doc2 LIKE '$codigo' and status like 'ocupada' ");
$test1 = mysql_fetch_row($test11a);


?>
  
  <?php		
				 
           if ( $test1[0] >= '1' )
			  { 
			   	  include("buscar_prefactura.php");
             include("prefacturacion.php"); 
                 } 
		else 
           if ( $test1[0] == '0' )
			  { 
			  include("buscar_prefactura.php");
			  echo "El Cliente no tiene Prefacturacion";
 
			  
	
                 } 
				 else 
           if ( $id  == 'detalles' )
			  { 
			    include("detalles_venta.php"); 
                 } 

				 
		 ?>
</p>
<p>&nbsp;</p>

 
   <?php require_once('conector/conector.php'); ?>
  
  <?php
if (!isset($codigo))
$link = mysql_connect($hostname, $username , $password); 
mysql_select_db($database ); 
$feha=date("d-m-Y");
$test11a = mysql_query("SELECT COUNT(*) from clientes  WHERE doc2 LIKE '$codigo' ");
$test1 = mysql_fetch_row($test11a);


?>
  
  <?php		
				 
           if ( $test1[0] >= '1' )
			  { 
			   
             include("lista_clientes.php"); 
                 } 
		else 
           if ( $test1[0] == '0' )
			  { 
			  include("buscar_cliente.php");
			  echo "<table width=\"613\" border=\"0\" align=\"center\" cellspacing=\"0\">
  <tr>
    <th width=\"549\" scope=\"col\"><div align=\"left\"><strong>Cliente No Registrado</strong></div>    </th>
  </tr>
</table>";
			  
	
                 } 
				 else 
           if ( $id  == 'detalles' )
			  { 
			    include("detalles_venta.php"); 
                 } 

				 
		 ?>
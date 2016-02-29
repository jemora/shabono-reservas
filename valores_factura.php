<?php 	require_once('conector/conector.php');?>
<?php
$currentPage = $_SERVER["PHP_SELF"];

$maxRows_Recordset2_iva = 100;
$pageNum_Recordset2_iva = 0;
if (isset($_GET['pageNum_Recordset2_iva'])) {
  $pageNum_Recordset2_iva = $_GET['pageNum_Recordset2_iva'];
}
$startRow_Recordset2_iva = $pageNum_Recordset2_iva * $maxRows_Recordset2_iva;

mysql_select_db($database, $connFlashblog);
$query_Recordset2_iva = "SELECT * from iva  WHERE cod LIKE '0'";
$query_limit_Recordset2_iva = sprintf("%s LIMIT %d, %d", $query_Recordset2_iva, $startRow_Recordset2_iva, $maxRows_Recordset2_iva);
$Recordset2_iva = mysql_query($query_limit_Recordset2_iva, $connFlashblog) or die(mysql_error());
$row_Recordset2_iva = mysql_fetch_assoc($Recordset2_iva);

if (isset($_GET['totalRows_Recordset2_iva'])) {
  $totalRows_Recordset2_iva = $_GET['totalRows_Recordset2_iva'];
} else {
  $all_Recordset2_iva = mysql_query($query_Recordset2_iva);
  $totalRows_Recordset2_iva = mysql_num_rows($all_Recordset2_iva);
}
$totalPages_Recordset2_iva = ceil($totalRows_Recordset2_iva/$maxRows_Recordset2_iva)-1;

$queryString_Recordset2_iva = "";
if (!empty($_SERVER['QUERY_STRING'])) {
  $params = explode("&", $_SERVER['QUERY_STRING']);
  $newParams = array();
  foreach ($params as $param) {
    if (stristr($param, "pageNum_Recordset2_iva") == false && 
        stristr($param, "totalRows_Recordset2_iva") == false) {
      array_push($newParams, $param);
    }
  }
  if (count($newParams) != 0) {
    $queryString_Recordset2_iva = "&" . htmlentities(implode("&", $newParams));
  }
}
$queryString_Recordset2_iva = sprintf("&totalRows_Recordset2_iva=%d%s", $totalRows_Recordset2_iva, $queryString_Recordset2_iva);
?>

<?php
$currentPage = $_SERVER["PHP_SELF"];

$maxRows_Recordsetnota_cred = 100;
$pageNum_Recordsetnota_cred = 0;
if (isset($_GET['pageNum_Recordsetnota_cred'])) {
  $pageNum_Recordsetnota_cred = $_GET['pageNum_Recordsetnota_cred'];
}
$startRow_Recordsetnota_cred = $pageNum_Recordsetnota_cred * $maxRows_Recordsetnota_cred;

mysql_select_db($database, $connFlashblog);
$query_Recordsetnota_cred = "SELECT * from habitacion2  WHERE multi LIKE '$multi'";
$query_limit_Recordsetnota_cred = sprintf("%s LIMIT %d, %d", $query_Recordsetnota_cred, $startRow_Recordsetnota_cred, $maxRows_Recordsetnota_cred);
$Recordsetnota_cred = mysql_query($query_limit_Recordsetnota_cred, $connFlashblog) or die(mysql_error());
$row_Recordsetnota_cred = mysql_fetch_assoc($Recordsetnota_cred);

if (isset($_GET['totalRows_Recordsetnota_cred'])) {
  $totalRows_Recordsetnota_cred = $_GET['totalRows_Recordsetnota_cred'];
} else {
  $all_Recordsetnota_cred = mysql_query($query_Recordsetnota_cred);
  $totalRows_Recordsetnota_cred = mysql_num_rows($all_Recordsetnota_cred);
}
$totalPages_Recordsetnota_cred = ceil($totalRows_Recordsetnota_cred/$maxRows_Recordsetnota_cred)-1;

$queryString_Recordsetnota_cred = "";
if (!empty($_SERVER['QUERY_STRING'])) {
  $params = explode("&", $_SERVER['QUERY_STRING']);
  $newParams = array();
  foreach ($params as $param) {
    if (stristr($param, "pageNum_Recordsetnota_cred") == false && 
        stristr($param, "totalRows_Recordsetnota_cred") == false) {
      array_push($newParams, $param);
    }
  }
  if (count($newParams) != 0) {
    $queryString_Recordsetnota_cred = "&" . htmlentities(implode("&", $newParams));
  }
}
$queryString_Recordsetnota_cred = sprintf("&totalRows_Recordsetnota_cred=%d%s", $totalRows_Recordsetnota_cred, $queryString_Recordsetnota_cred);
?>
<head>

<title>lista de habitaciones</title>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">







<style type="text/css">
<!--
.Estilo1 {font-size: 12px}
-->
</style>
<link href="Level2_Verdana_Text.css" rel="stylesheet" type="text/css">
</head>

<body>
<table width="<?php echo $row_Recordset2['ancho']; ?>" border="0" align="center" cellspacing="2" bordercolor="#CCCCCC">
  <tr>
    <td bgcolor="#7794AE" >&nbsp;</td>
  </tr>
</table>
<table width="<?php echo $row_Recordset2['ancho']; ?>" border="0" align="right" cellspacing="2" bordercolor="#CCCCCC">
  <!--DWLayoutTable-->
 
  <tr>
    <td width="100" height="17" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="50" height="17" bgcolor="#FFFFFF" ><div align="center"></div></td>
    <td width="50" bgcolor="#FFFFFF" ><div align="center"></div></td>
    <td width="50" bgcolor="#FFFFFF" >
   
        <div align="left">
          <?php $dato_subtotal_apro= $row_Recordset22['subtotal_apro']; ?>
          <?php		
				 if ( $dato_subtotal_apro == '1' )
			  {  
		require_once('conector/conector.php');	 
		///////////////// calculos de habitaciones
$link = mysql_connect($hostname, $username , $password); 
mysql_select_db($database ); 
$test11a1 = mysql_query("SELECT SUM(subtotal1) from habitacion2 WHERE  multi LIKE '$multi' ");
$test11a = mysql_fetch_row($test11a1);
$test11a[0];  
 
 ////////////////////////////// calculos de  consumos
 $link = mysql_connect($hostname, $username , $password); 
mysql_select_db($database ); 
$test11a12 = mysql_query("SELECT SUM(subt) from consumo WHERE  multi LIKE '$multi' ");
$test11a2 = mysql_fetch_row($test11a12);
 $test11a2[0];
			  
			  
			 $subtotal= $test11a[0]+$test11a2[0];  
			  
			  
			  
			  
			  
			   echo  '
			   
			   <table width="0" border="0">
  <tr>
    <th  width="50" >SubTotal:</th>
    <th  width="50" >'; echo $subtotal;
	echo '</th>
  </tr>
</table>  
	';   } 
 		 ?>
      </div>
    </div></td>
  </tr>
  <tr>
    <td colspan="3" rowspan="3" valign="top" bgcolor="#FFFFFF" ><?php $dato_observacion= $row_Recordset22['observaciones']; ?>
    <?php		
				 if ( $dato_observacion == '1' )
			  {  
	
			 echo ' <strong>Observaciones: </strong>'; echo $row_Recordsetnota_cred['descripcion'];
	

	
			    } 
		
               

				 
		 ?></td>
    <td height="20" bgcolor="#FFFFFF" ><div align="left">
      <?php $dato_subtotal_iva_apro= $row_Recordset22['iva_apro']; ?>
      <?php		
				 if ( $dato_subtotal_iva_apro == '1' )
			  {  
	
$iva= $row_Recordset2_iva['iva']; 
 $iva1=$subtotal*$iva;
 $iva2=$iva1/100;
 
			   echo  '
			  <table width="0" border="0">
  <tr>
    <th  width="50" >I.V.A:</th>
    <th  width="50" >'; echo $iva2;
	echo '</th>
  </tr>
</table>  
	'; 
	

	
			    } 
		
               

				 
		 ?>
    </div></td>
  </tr>
  <tr>
    <td height="17" bgcolor="#FFFFFF" ><div align="left">
      <?php $dato_subtotal_nota_credito_apro= $row_Recordset22['nota_credito_apro']; ?>
      <?php		
				
$nota1= $row_Recordsetnota_cred['nota'];
$nota2= $row_Recordsetnota_cred['nota2'];
$nota3=$nota1+$nota2;
				
				
				 if ( $dato_subtotal_nota_credito_apro == '1' )
			  {  
	

			   echo  '
			  <table width="0" border="0">
  <tr>
    <th  width="50" >Anticipos:</th>
    <th  width="50" >'; echo $nota3;
	echo '</th>
  </tr>
</table>  
	'; 
	
	
	
	
			    } 
		
               

				 
		 ?>
    </div></td>
  </tr>
  <tr>
    <td height="17" bgcolor="#FFFFFF" ><div align="left">
      <?php		
				 if ( $dato_subtotal_iva_apro == '1')
			  {  
	
	$total_general1=$subtotal+$iva2-$nota3;
			   echo  '
			  <table width="0" border="0">
  <tr>
    <th  width="50" >Total:</th>
    <th  width="50" >'; echo $total_general1;
	echo '</th>
  </tr>
</table>  
	';  } else if ( $dato_subtotal_iva_apro == '0')
			  {  
	
	$total_general12=$subtotal-$nota3;
			   echo  '
			  <table width="0" border="0">
  <tr>
    <th  width="50" >Total:</th>
    <th  width="50" >'; echo $total_general12;
	echo '</th>
  </tr>
</table>  
	';  } 
		
               

				 
		 ?>
    </div></td>
  </tr>
</table>
<br>
<br>
<table width="<?php echo $row_Recordset2['ancho']; ?>" height="95" border="0" align="center" cellspacing="2" bordercolor="#CCCCCC">
  <tr>
    <td height="74" bgcolor="#FFFFFF" ><div align="center">___________<br>
    firma</div></td>
    <td bgcolor="#FFFFFF" >&nbsp;</td>
    <td bgcolor="#FFFFFF" ><div align="center">___________<br>
    firma</div></td>
  </tr>
</table>
<?php $dato_pie= $row_Recordset22['pie_factura']; ?>
<?php		
				 if ( $dato_pie == '1' )
			  {  

	echo ' <strong>Nota: </strong>';	  
	echo $row_Recordset22['pie_factura_info'];
		   
	
			    } 
		
               

				 
		 ?>
</body>
</html>


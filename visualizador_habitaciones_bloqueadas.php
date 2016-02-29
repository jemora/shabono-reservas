
<head>
<style type="text/css">
<!--
body,td,th {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 9px;
}
.Estilo1 {font-family: Geneva, Arial, Helvetica, sans-serif}
-->
</style>
<title>lista de habitaciones</title>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">



</head>

<body>
<table width="0" border="0">
  <tr>
    <th scope="col"><img src="imagenes/banne23.gif" width="141" height="30"></th>
  </tr>
  <tr>
    <td><?php require_once('conector/conector.php'); ?><?php
 $fecha=date("Y-m-d");
if (!isset($codigo))
$link = mysql_connect($hostname, $username , $password); 
mysql_select_db($database ); 
$feha=date("d-m-Y");
$test11a = mysql_query("SELECT COUNT(*) FROM habitacion2 WHERE status LIKE 'bloqueada' and '$fecha' BETWEEN fecha1 and fecha2 ORDER BY id ASC");
$test1 = mysql_fetch_row($test11a);
?>
<?php		
		    if ( $test1[0] >= '1' )
			  { 
			   
             include("lista_visualizador_habitaciones_bloqueadas.php"); 
                 } 
		else 
           if ( $test1[0] == '0' )
			  { 
			   echo "<strong> No Hay Habitaciones Ocupadas</strong>";
			  
	
                 } 
				
				 
		 ?></td>
  </tr>
</table>
</body>
</html>





<?php 
$dato001= $_SESSION['usuario_login'];
if (!isset($codigo))
 
$dbh=mysql_connect ($hostname,$username,$password) or die ('I cannot connect to the database because: ' . mysql_error());
mysql_select_db ($database); 

//Ejecutamos la sentencia SQL
$result1 = mysql_query("SELECT * FROM usuarios WHERE usuario  LIKE '$dato001'");
$result2 = mysql_query("SELECT * FROM usuarios WHERE usuario  LIKE '$dato001'");
$result3 = mysql_query("SELECT * FROM usuarios WHERE usuario  LIKE '$dato001'");
$result4 = mysql_query("SELECT * FROM usuarios WHERE usuario  LIKE '$dato001'");
      
	  

?>
<?php  while ($row=mysql_fetch_array($result1)) { $habitacion1= "".$row["asi_hab"].""; }
mysql_free_result($result1)?>
<?php  while ($row=mysql_fetch_array($result2)) { $habitacion2= "".$row["eli_hab"].""; }
mysql_free_result($result2)?>

<style type="text/css">
<!--
.Estilo1 {font-size: 12px}
a:link {
	text-decoration: none;
}
a:visited {
	text-decoration: none;
}
a:hover {
	text-decoration: none;
}
a:active {
	text-decoration: none;
}
-->
</style>
<table width="140" border="0" cellspacing="0" bordercolor="#666600">
  <tr>
    <th width="113" bgcolor="#FFFFFF" scope="col"><img src="imagenes/banner_clientes.jpg" alt="Clientes" width="139" height="17" longdesc="imagenes/banner_clientes.jpg" /></th>
  </tr>
  <tr>
    <th bgcolor="#FFFFFF" scope="col"><?php include('acceso.php'); ?></th>
  </tr>
  <?php 
  if ( $habitacion1 == '1' )
			  { 
  
    echo "<tr>  
    <th scope='col'><div align='left'><a href='formulario_registro_clientes.php' target='frame' >Registro de Clientes</a></div></th>
  </tr>" ;   }?>
    <?php 
  if ( $habitacion1 == '1' )
			  { 
  
    echo "<tr>  
    <th scope='col'><div align='left'><a href='buscar_cliente.php' target='frame' >Buscar Clientes</a></div></th>
  </tr>" ;   }?>
  
  
  
      <?php 
  if ( $habitacion1 == '1' )
			  { 
  
    echo "<tr>  
    <th scope='col'><div align='left'><a href='buscar_cliente2.php' target='frame' >Actualizar Clientes</a></div></th>
  </tr>" ;   }?>
      <?php 
  if ( $habitacion1 == '1' )
			  { 
  
    echo "<tr>  
    <th scope='col'><div align='left'><a href='registro_empresas.php' target='frame' >Registro de Empresas</a></div></th>
  </tr>" ;   }?>
</table>

<?php 
require_once('Connections/connFlashblog.php');
$titulo = $_GET['titulo'];
// Configurar las dos lineas siguientes 
@mysql_connect($hostname_connFlashblog,$username_connFlashblog,$password_connFlashblog); 
@mysql_select_db($database_connFlashblog); 
$query = "SELECT imagen FROM botones WHERE id='$id'"; 
$result = @mysql_query($query); 
$imagen = @mysql_result($result,0); 
header( "Content-type: image/jpeg");  
echo $imagen; 
?>
   


<head>

<title>lista de habitaciones</title>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">






<style type="text/css">
<!--
.Estilo1 {font-size: 12px}
.Estilo9 {font-size: 10; font-family: Verdana, Arial, Helvetica, sans-serif; }
.Estilo10 {font-size: 10}
.Estilo14 {font-size: 12px; font-family: Verdana, Arial, Helvetica, sans-serif; }
.Estilo15 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-weight: bold;
	font-size: 12px;
}
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
body,td,th {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 12px;
}
-->
</style>
<script language="JavaScript" type="text/JavaScript">
<!--

function GP_popupConfirmMsg(msg) { //v1.0
  document.MM_returnValue = confirm(msg);
}
//-->
</script>
</head>

<body>
<table width="537" border="0" align="center" cellspacing="0">
  <tr>
    <td width="535"><?php if ( $id == 'borrar' )
			  { 
			  require_once('conector/conector.php');
			   
            mysql_connect($hostname,$username,$password);
 
mysql_select_db($database); 

$sSQL="Delete From habitacion2 Where id like '$codigo'";
mysql_query($sSQL);
			
			echo '<table width="342" border="2" align="center" cellspacing="0">
  <tr>
    <td width="334"><div align="center"><img src="imagenes/ico_5.gif" width="18" height="18"> El registro se Elimino Correctamente</div></td>
  </tr>
</table>
<div align="center"><br>
  <a href="javascript:window.close();">Cerrar ventana</a></div>';
			exit;
			
                 } ?></td>
  </tr>
  <tr>
    <td><?php						 
          	
          require_once('conector/conector.php');




mysql_connect($hostname,$username,$password);
mysql_select_db($database);

$usuarios_consulta = mysql_query("SELECT ID FROM usuarios WHERE usuario LIKE'$usuario' and  pass2 LIKE '$pass2' and  adm_1 LIKE '1' ") or die(mysql_error());
$total_encontrados = mysql_num_rows ($usuarios_consulta);
mysql_free_result($usuarios_consulta);

if ($total_encontrados != 0) {

 include('detalles_reservacion2.php');

exit;
}
else 	  
		  {
echo '<div align="center"><img src="imagenes/atencion.jpg" width="63" height="55" /><br />
  No Autorizado para realizar esta Opcion</div>';

}
		  
		  
		  
			
			  
				




				 
            
		 ?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
</table>
<p><br>
</p>
</body>
</html>


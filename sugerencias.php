<?
require("aut_verifica.inc2.php");
$nivel_acceso=10; // Nivel de acceso para esta página.
if ($nivel_acceso <= $_SESSION['usuario_nivel']){
header ("Location: $redir?error_login=5");
exit;
}
?>
<?php require_once('conector/conector.php');?> 

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"><style type="text/css">
<!--
body,td,th {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 12px;
}
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
-->
</style>



<link href="Level2_Verdana_Text.css" rel="stylesheet" type="text/css">
<style type="text/css">
<!--
.Estilo3 {font-size: 12px;
	font-family: Arial, Helvetica, sans-serif;
}
-->
</style>
</head>

<body>

<table width="351" border="0" align="center" cellspacing="0">
  <tr>
    <td width="349"><?php include("menu_reservacion.php");?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><?php include("detalles_clientes.php");?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><table width="200" border="1" align="center" cellspacing="0" bordercolor="#000000">
      <tr>
        <td><table width="610" border="1" align="center" cellspacing="0" bordercolor="#7895AF">
            <tr>
              <td bgcolor="#7895AF"><strong>Comentarios y Sugerencias </strong></td>
            </tr>
            <tr>
              <td bgcolor="#FFFFFF"><form name="form1" method="post" action="sugerencias.php?codigo=<? echo $_SESSION['doc2'] ?>&id=sugerencias">
                <table width="593" border="0" cellspacing="0">
                  <!--DWLayoutTable-->
                  <tr>
                    <td width="107" class="small"><!--DWLayoutEmptyCell-->&nbsp;</td>
                    <td width="482"><!--DWLayoutEmptyCell-->&nbsp;</td>
                  </tr>
                  <tr>
                    <td class="small"><!--DWLayoutEmptyCell-->&nbsp;</td>
                    <td width="482"><label>
                      <?php	
				 
           if ( $id== 'sugerencias' )
			  { 
 require_once('conector/conector.php');
$dbh=mysql_connect ($hostname,$username,$password) or die ('I cannot connect to the database because: ' . mysql_error());
mysql_select_db ($database); 
			  
			  mysql_query("INSERT INTO comentarios
 (fecha,titulo,mensaje,usuario)VALUES ('$fecha','$titulo','$mensaje','$usuario')");
 echo '<P><B><FONT color="#000099">Gracias por sus Comentarios y 
Sugerencias</FONT></B></P>';
//////////////////////////// Acumulador
mysql_close();
exit;
			    
           
                 } 
		else 
           if ( $test1[0] == '0' )
			  { 
						  echo  $mensaje_reservacion1;
			  	
                 } 
			
						 ?>
                    </label></td>
                  </tr>
                </table>
                            <table width="593" border="0" cellspacing="0">
                    <tr>
                        <td width="102" height="42" valign="top" class="small">Titulo:</td>
                        <td width="487" valign="top"><input name="titulo" type="text" class="small" id="titulo"></td>
                    </tr>
                    <tr>
                      <td height="42" valign="top" class="small">Mensaje:</td>
                      <td width="487" valign="top"><textarea name="mensaje" cols="50" rows="8" class="small" id="mensaje"></textarea>
                        <span class="Estilo3">
                        <input name="usuario" type="hidden" id="usuario" value="<?php echo $_SESSION['usuario_login']; ?>" />
                        <input name="fecha" type="hidden" id="fecha" value="<?php echo date("Y-m-d"); ?>" />
                        </span></td>
                    </tr>
                              <tr>
                                <td>&nbsp;</td>
                      <td><label>
                        
                          <div align="left">
                            <input type="submit" name="Submit" value="   Enviar Mensaje   ">
                          </div>
                      </label></td>
                    </tr>
                                            </table>
              </form>
              </td>
            </tr>
        </table></td>
      </tr>
    </table></td>
  </tr>
</table>

</center>
</body>
</html> 

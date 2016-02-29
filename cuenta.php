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
              <td width="849" bgcolor="#7895AF"><strong>Mi cuenta  </strong></td>
            </tr>
            <tr>
              <td bgcolor="#FFFFFF"><table width="609" border="0" cellspacing="0">
                <tr>
                  <td width="156"><form name="form1" method="post" action="cuenta.php?codigo=<? echo $_SESSION['doc2'] ?>&id=datos">
                    <label>
                    <input type="submit" name="Submit" value="    Actualizar DATOS    ">
                    </label>
                                    </form>
                  </td>
                  <td width="449"><form name="form1" method="post" action="cuenta.php?codigo=<? echo $_SESSION['doc2'] ?>&id=clave">
                    <label>
                    <input type="submit" name="Submit2" value="    Actualizar CLAVE    ">
                    </label>
                  </form></td>
                </tr>
                <tr>
                  <td colspan="2"><?php 
				  
				   if ( $id== 'datos' )
			  { 
			include( 'formulario_actualizar_clientes.php');    }
				else 
				 if ( $id== 'clave' )
			  { 
			include( 'formulario_actualizar_clave.php');    }  
				  ?>&nbsp;</td>
                </tr>
                <tr>
                  <td colspan="2">&nbsp;</td>
                </tr>
              </table></td>
            </tr>
        </table></td>
      </tr>
    </table></td>
  </tr>
</table>

</center>
</body>
</html> 

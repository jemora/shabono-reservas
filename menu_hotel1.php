<?php 
function fecha(){ $mes = date("n"); $mesArray = array( 1 => "Enero", 2 => "Febrero", 3 => "Marzo", 4 => "Abril", 5 => "Mayo", 6 => "Junio", 7 => "Julio", 8 => "Agosto", 9 => "Septiembre", 10 => "Octubre", 11 => "Noviembre", 12 => "Diciembre" ); $semana = date("D"); $semanaArray = array( "Mon" => "Lunes", "Tue" => "Martes", "Wed" => "Miercoles", "Thu" => "Jueves", "Fri" => "Viernes", "Sat" => "Sábado", "Sun" => "Domingo", ); $mesReturn = $mesArray[$mes]; $semanaReturn = $semanaArray[$semana]; $dia = date("d"); $año = date ("Y"); return $semanaReturn." ".$dia." de ".$mesReturn." de ".$año; }


?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
.Estilo333 {color: #FFFFFF}
-->
</style>
<link href="Level2_Verdana_Text.css" rel="stylesheet" type="text/css">
</head>

<body>
<table width="853" border="0" cellspacing="0">
  <tr>
    <th width="297" scope="col"><div align="left">
      <?=fecha() ?>
  </div></th>
    <th width="117" scope="col">&nbsp;</th>
    <th width="433" scope="col"><table width="374" border="0" align="right" cellpadding="0" cellspacing="0">
      <!-- fwtable fwsrc="web03.png" fwbase="web03.gif" fwstyle="Dreamweaver" fwdocid = "440810686" fwnested="0" -->
      <tr>
        <td><img src="spacer.gif" width="13" height="1" border="0" alt=""></td>
        <td><img src="spacer.gif" width="250" height="1" border="0" alt=""></td>
        <td><img src="spacer.gif" width="111" height="1" border="0" alt=""></td>
        <td><img src="spacer.gif" width="1" height="1" border="0" alt=""></td>
      </tr>
      <tr>
        <td rowspan="3"><img name="web03_r1_c1" src="images/web03_r1_c1.gif" width="13" height="41" border="0" alt=""></td>
        <td><img name="web03_r1_c2" src="images/web03_r1_c2.gif" width="250" height="5" border="0" alt=""></td>
        <td rowspan="3"><img name="web03_r1_c3" src="images/web03_r1_c3.gif" width="111" height="41" border="0" alt=""></td>
        <td><img src="spacer.gif" width="1" height="5" border="0" alt=""></td>
      </tr>
      <tr>
        <td><div align="left"><span class="small">Bienvenido:<? echo $_SESSION['usuario_login'] ?></span>
          <?php 
$dato=$_SESSION['opc'];	
  if ( $dato == '1' )
{ echo '<A HREF="aut_logout.php" ><FONT size="1">Cerrar Sesión</FONT></A>';}

?>
        </div></td>
        <td><img src="spacer.gif" width="1" height="30" border="0" alt=""></td>
      </tr>
      <tr>
        <td><img name="web03_r3_c2" src="images/web03_r3_c2.gif" width="250" height="6" border="0" alt=""></td>
        <td><img src="spacer.gif" width="1" height="6" border="0" alt=""></td>
      </tr>
    </table></th>
  </tr>
</table>
</body>
</html>

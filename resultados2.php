<?php require_once('conector/conector.php');?> 
<?
$dbh=mysql_connect ($hostname,$username,$password) or die ('I cannot connect to the database because: ' . mysql_error());
mysql_select_db ($database); 

$resultinfo = mysql_query("SELECT * FROM informacion WHERE cod  LIKE '0'");
$resultinfo1 = mysql_query("SELECT * FROM informacion WHERE cod  LIKE '0'");
$resultinfo2 = mysql_query("SELECT * FROM informacion WHERE cod  LIKE '0'");
$resultinfo3 = mysql_query("SELECT * FROM informacion WHERE cod  LIKE '0'");
$resultinfo4 = mysql_query("SELECT * FROM informacion WHERE cod  LIKE '0'");
$resultinfo5 = mysql_query("SELECT * FROM informacion WHERE cod  LIKE '0'");
$resultinfo6 = mysql_query("SELECT * FROM informacion WHERE cod  LIKE '0'");
?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title><? while ($row=mysql_fetch_array($resultinfo))  { echo "".$row["nombre"].""; }
mysql_free_result($resultinfo)?></title>
<style type="text/css">
<!--
body,td,th {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 10px;
}
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
-->
</style>
<script language='javascript' src="popcalendar.js"></script> 
<script language='javascript' src="popcalendar2.js"></script> 
<script language="Javascript">
function imprSelec(nombre)
{
  var ficha = document.getElementById(nombre);
  var ventimp = window.open(' ', 'popimpr');
  ventimp.document.write( ficha.innerHTML );
  ventimp.document.close();
  ventimp.print( );
  ventimp.close();
}
</script>
</head>

<body>

<div align="center"><img src="imagenes/banne9.gif" width="607" height="30" /><br />
</div>
  <br />
</div>
<table width="607" border="0" align="center" cellpadding="0" cellspacing="0">
  <!-- fwtable fwsrc="Untitled" fwbase="visor.jpg" fwstyle="Dreamweaver" fwdocid = "237802607" fwnested="0" -->
  <tr>
    <td><img src="imagenes/spacer.gif" width="5" height="1" border="0" alt="" /></td>
    <td><img src="imagenes/spacer.gif" width="593" height="1" border="0" alt="" /></td>
    <td><img src="imagenes/spacer.gif" width="9" height="1" border="0" alt="" /></td>
    <td><img src="imagenes/spacer.gif" width="1" height="1" border="0" alt="" /></td>
  </tr>
  <tr>
    <td colspan="3"><img src="imagenes/visor_r1_c1.jpg" alt="" name="visor_r1_c1" width="607" height="11" border="0" id="visor_r1_c1" /></td>
    <td><img src="imagenes/spacer.gif" width="1" height="11" border="0" alt="" /></td>
  </tr>
  <tr>
    <td background="imagenes/visor_r2_c1.jpg">&nbsp;</td>
    <td><table width="582" border="0" align="center" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr>
    <td width="582" height="18" valign="top">
    <form name="form1" action="buscar_cliente_alojados.php?id2=calend1" method="post">
    
    

    <div align="left">
              <table width="572" border="0" align="right" cellspacing="0">
                <tr>
                  <th width="358" class="Estilo7" scope="col"><div align="right"><span class="Estilo1">Reportes Clientes Alojados por Fecha </span></div></th>
                  <th width="63" class="Estilo7" scope="col"><div align="right" class="Estilo2">Desde</div></th>
                  <th width="89" scope="col"><input name="fecha1" type="text" id="dateArrival" onClick="popUpCalendar(this, form1.dateArrival, 'yyyy-mm-dd');" size="10" style="background-color:e3e3e3; border: 1px solid #666666; font-size:8pt; color: #000099" ></th>
                  <th width="54" scope="col"><input name="submit2" type="submit" value="Buscar" /></th>
                </tr>
                <tr>
                  <th colspan="2" class="Estilo7" scope="col"><div align="right" class="Estilo2">Hasta</div></th>
                  <th scope="col"><input name="fecha2" type="text" id="dateArrival2" onclick="popUpCalendar2(this, form1.dateArrival2, 'yyyy-mm-dd');" size="10" style="background-color:e3e3e3; border: 1px solid #666666; font-size:8pt; color: #000099" /></th>
                  <th scope="col">&nbsp;</th>
                </tr>
                <tr>
                  <th colspan="4" class="Estilo7" scope="col"><hr /></th>
                  </tr>
          </table>
        </div>
    </form></td>
  </tr>
</table>
   <?php include('buscador_cliente2.php'); ?></td>
    <td background="imagenes/visor_r2_c3.jpg">&nbsp;</td>
    <td><img src="imagenes/spacer.gif" width="1" height="55" border="0" alt="" /></td>
  </tr>
  <tr>
    <td colspan="3"><img src="imagenes/visor_r3_c1.jpg" alt="" name="visor_r3_c1" width="607" height="13" border="0" id="visor_r3_c1" /></td>
    <td><img src="imagenes/spacer.gif" width="1" height="13" border="0" alt="" /></td>
  </tr>
  <tr>
    <td colspan="4"><table width="601" border="1" align="center" cellspacing="0" bordercolor="#999999" bgcolor="#F4F4F4">
      <!--DWLayoutTable-->
      <tr>
        <td width="560" height="24" valign="top"><table width="601" border="0" align="center" cellspacing="0">
            <!--DWLayoutTable-->
            <tr>
              <td width="19" bgcolor="#F4F4F4"><span class="Estilo14"><a href="javascript:history.back(1)"><img src="imagenes/ico_3.gif" alt="Regresar" width="18" height="18" border="0" /></a></span></td>
              <td width="136" bgcolor="#F4F4F4"><span >Regresar</span></td>
              <td width="364" bgcolor="#F4F4F4"><div align="right"><strong><a href="javascript:imprSelec('seleccion')">Imprimir Reporte</a></strong></div></td>
              <td width="23" bgcolor="#F4F4F4"><div align="right"><a href="javascript:imprSelec('seleccion')"><img src="imagenes/print.gif" width="16" height="11" border="0" /></a></div></td>
            </tr>
        </table></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td colspan="4"><?php require_once('conector/conector.php');?>
      <? 
//conecto con la base de datos
$conn = mysql_connect($hostname,$username,$password);
mysql_select_db($database,$conn);

//inicializo el criterio y recibo cualquier cadena que se desee buscar
$criterio = "";
if ($_GET["criterio"]!=""){
	$txt_criterio = $_GET["criterio"];
	$criterio = " where $tipo like '%" . $txt_criterio . "%'";
}

//Limito la busqueda
$TAMANO_PAGINA = 15;

//examino la p&aacute;gina a mostrar y el inicio del registro a mostrar
$pagina = $_GET["pagina"];
if (!$pagina) {
		$inicio = 0;
		$pagina=1;
}
else {
	$inicio = ($pagina - 1) * $TAMANO_PAGINA;
}

//miro a ver el n&uacute;mero total de campos que hay en la tabla con esa b&uacute;squeda
$ssql = "select * from habitacion2 " . $criterio;
$rs = mysql_query($ssql,$conn);
$num_total_registros = mysql_num_rows($rs);
//calculo el total de p&aacute;ginas
$total_paginas = ceil($num_total_registros / $TAMANO_PAGINA);

//pongo el n&uacute;mero de registros total, el tama&ntilde;o de p&aacute;gina y la p&aacute;gina que se muestra
echo "N&uacute;mero de registros encontrados: " . $num_total_registros . "<br><br>";


//construyo la sentencia SQL
$ssql = "select * from habitacion2 " . $criterio . " limit " . $inicio . "," . $TAMANO_PAGINA;
$ssql1 = "select * from habitacion2 ";


$rs = mysql_query($ssql);
$rs1 = mysql_query($ssql1);

while ($row=mysql_fetch_array($rs1))
while ($fila = mysql_fetch_object($rs)){








//echo $fila->doc2. "";

	
	
	echo '<DIV ID="seleccion"><table width="601" border="0" align="center" cellspacing="2" bordercolor="#666666">
  <tr>
    <td height="8" bgcolor="#7794AE" ><span class="Estilo7">N&ordm; Codigo </span></td>
    <td bgcolor="#7794AE" ><span class="Estilo11">Nombre</span></td>
    <td height="8" bgcolor="#7794AE" ><span class="Estilo11">Apellido</span></td>
    <td width="160" height="8" bgcolor="#7794AE" ><span class="Estilo11">Fecha </span></td>
    <td width="79" height="8" bgcolor="#7794AE" ><span class="Estilo11">Nombre de Habitaci&oacute;n </span></td>
    <td width="78" height="8" bgcolor="#7794AE" ><span class="Estilo11">Numero </span></td>
  </tr>
  <tr>';
   echo  '<td width="92" height="30" bgcolor="#E3E9F1" ><span class="Estilo1">'; 
   echo $fila->doc2.  "";
    echo '</span></td>';
    echo  '<td width="105" height="30" bgcolor="#E3E9F1" ><span class="Estilo1">';
	echo $fila->nombre.  "";
	echo '</span></td>';
    echo '<td width="107" bgcolor="#E3E9F1" ><span class="Estilo1">';
	echo $fila->apellido.  "";
	echo '</span></td>';
        echo '<td bgcolor="#E3E9F1" ><div align="left"><span class="Estilo1">Desde:';
		echo $fila->fecha1.  "";
		echo '</span>Hasta<span class="Estilo1">:';
		echo $fila->fecha2.  "";
		echo '</span></div></td>';
        echo '<td bgcolor="#E3E9F1" ><span class="Estilo1">';
		echo $fila->nom_hab.  "";
		echo '</span></td>';
        echo '<td bgcolor="#E3E9F1" ><span class="Estilo1">';
		echo $fila->habitacion.  "";
		echo '</span></td>
  </tr>
</table></DIV>';
	
	
	
	
	
	
}
//cerramos el conjunto de resultados y la conexi&oacute;n con la base de datos
mysql_free_result($rs);





mysql_close($conn);


echo "<p>";

//muestro los distintos &iacute;ndices de las p&aacute;ginas, si es que hay varias p&aacute;ginas
if ($total_paginas >= 1){
	
			//si muestro el &iacute;ndice de la p&aacute;gina actual, no coloco enlace
		echo "P&aacute;gina " . $pagina . " de " . $total_paginas . "<p><b>";
}

if ($total_paginas > 1){
	for ($i=1;$i<=$total_paginas;$i++){
		if ($pagina == $i) 
			//si muestro el &iacute;ndice de la p&aacute;gina actual, no coloco enlace
			echo $pagina . " ";
		else
			//si el &iacute;ndice no corresponde con la p&aacute;gina mostrada actualmente, coloco el enlace para ir a esa p&aacute;gina
			echo "<a href='resultados1.php?pagina=" . $i . "&criterio=" . $txt_criterio . "'>" . $i . "</a> ";
	}
}

//muestro un formulario para marcar el criterio?></td>
  </tr>
</table>
<br />
<br>
</body>
</html>

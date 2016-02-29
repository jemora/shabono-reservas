   <?php require_once('conector/conector.php');?> 
<?
if (!isset($codigo))
 
$dbh=mysql_connect ($hostname,$username,$password) or die ('I cannot connect to the database because: ' . mysql_error());
mysql_select_db ($database); 



//Ejecutamos la sentencia SQL
$resultserv002 = mysql_query("SELECT * FROM clientes WHERE doc2  LIKE '$codigo'");
$resultserv003 = mysql_query("SELECT * FROM clientes WHERE doc2  LIKE '$codigo'");
$resultserv0033 = mysql_query("SELECT * FROM habitacion2 WHERE multi  LIKE '$multi'");
$resultserv001 = mysql_query("SELECT * FROM clientes WHERE doc2  LIKE '$codigo'");
$resultserv0011 = mysql_query("SELECT * FROM habitacion2 WHERE multi  LIKE '$multi' and opc like '1'");
?>






<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
<script type="text/JavaScript">
<!--



function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}
//-->
</script>
<script>
function Verificar() {
	if(document.frm.canti.value == "") {
		alert("Debe Señalar la Cantidad");
		document.frm.canti.focus();
		return false;
		}

	if(document.frm.apellido.value == "") {
		alert("Debe colocar Los Apellidos del Cliente");
		document.frm.apellido.focus();
		return false;	
		
		
	}
	
	// Quita sólo la siguiente línea para que se envíe el formulario
	alert("Estimado"+document.frm.dato1.value+".\nEl formulario se enviaría a partir de este punto sin problema");
	return true;	// Cambia "false" por "true" para que funcione el formulario
}
</script></head>

<body>
<?php echo $tipo; ?>


<form name=frm onSubmit="return Verificar()" method="post" action="?&id1=adicionar&codigo3=<?
      while ($row=mysql_fetch_array($resultserv001))  { echo "".$row["doc2"].""; } mysql_free_result($resultserv001)?>&multi=<?
      while ($row=mysql_fetch_array($resultserv0011))  { echo "".$row["multi"].""; } mysql_free_result($resultserv0011)?>" enctype="multipart/form-data">

<div align="left">
<table width="264" border="0" cellspacing="0">
              <tr>
                <td width="58"><span class="Estilo14">Consumo</span></td>
                    <td width="29"><span class="Estilo14">
                      <label>Cant</label>
                </span></td>
                    <td width="171"><font face="Verdana" size="2"><font face="Verdana" size="2"><font face="Verdana" size="2"><font face="Verdana" size="2"><font face="Verdana" size="2"><span class="Estilo3">
                      <input name="cliente" type="hidden" id="cliente" value="<?
	 //Mostramos los registros<br>
      while ($row=mysql_fetch_array($resultserv002))
      {
echo "".$row["doc2"].""; 
}
mysql_free_result($resultserv002)
?>" size="25" />
                      </span></font></font></font><font face="Verdana" size="2"><font face="Verdana" size="2"><font face="Verdana" size="1"><span class="Estilo3">
                        <input name="fecha" type="hidden" id="fecha" value="<?php echo date("d-m-Y"); ?>" />
                        </span></font></font></font><font face="Verdana" size="2"><font face="Verdana" size="2"><font face="Verdana" size="2"><font face="Verdana" size="2"><font face="Verdana" size="2"><font face="Verdana" size="1"><span class="Estilo3">
                          <input name="ref" type="hidden" id="ref" value="<?php echo $codigo2 ?>" />
                          </span></font></font></font></font><font face="Verdana" size="2"><font face="Verdana" size="2"><font face="Verdana" size="2"><font face="Verdana" size="2"><font face="Verdana" size="1"><span class="Estilo3">
                            <input name="codigo2" type="hidden" id="codigo2" value="<?php echo $codigo2 ?>" />
                            </span></font><font face="Verdana" size="2"><font face="Verdana" size="2"><font face="Verdana" size="2"><font face="Verdana" size="2"><font face="Verdana" size="2"><span class="Estilo3">
                              <input name="codigo" type="hidden" id="codigo" value="<?
	 //Mostramos los registros<br>
      while ($row=mysql_fetch_array($resultserv003))
      {
echo "".$row["doc2"].""; 
}
mysql_free_result($resultserv003)
?>" size="25" />
                              </span><font face="Verdana" size="2"><font face="Verdana" size="2"><font face="Verdana" size="2"><font face="Verdana" size="2"><font face="Verdana" size="2"><font face="Verdana" size="2"><font face="Verdana" size="2"><font face="Verdana" size="1"><span class="Estilo3">
                              <input name="multi" type="hidden" id="multi" value="<?php echo $multi; ?>" />
                              </span></font></font></font></font></font></font></font></font></font></font></font></font></font></font></font></font></font></font></font></font></font></td>
              </tr>
              <tr>
                <td><font 
                                face="Arial, Helvetica, sans-serif"><font 
                                face="Arial, Helvetica, sans-serif" size="1"><span class="titulos">
                  <select name="consumo" id="consumo" style="background-color:e3e3e3; border: 1px solid #666666; font-size:8pt; color: #000099">
                    <?php
					require_once('conector/conector.php');
					 mysql_select_db($database, $connFlashblog);
$query_rsCategorias = "SELECT * FROM servicios01 WHERE tipo  LIKE '$tipo' ORDER BY id ASC";
$rsCategorias = mysql_query($query_rsCategorias, $connFlashblog) or die(mysql_error());
$row_rsCategorias = mysql_fetch_assoc($rsCategorias);
$totalRows_rsCategorias = mysql_num_rows($rsCategorias);
	  
	  
	  
	  
do {  
?>
                    <option value="<?php echo $row_rsCategorias['nombre']?>" ><?php echo $row_rsCategorias['nombre']?></option>
                    <?php
} while ($row_rsCategorias = mysql_fetch_assoc($rsCategorias));
?>
                </select>
                  </span></font></font></td>
                    <td><input name="canti" type="text" id="canti" style="background-color:e3e3e3; border: 1px solid #666666; font-size:8pt; color: #000099" size="5" maxlength="10"></td>
                    <td><input id="Submit22" type="submit" value="Asignar consumo" name="Submit2" /></td>
              </tr>
    </table>
  </div>
</form>
</body>
</html>

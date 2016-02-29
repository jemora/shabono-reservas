<?php 	require_once('conector/conector.php');?>

<?php
$currentPage = $_SERVER["PHP_SELF"];
$usuario= $_SESSION['doc2']; 
$maxRows_Recordset2 = 200000;
$pageNum_Recordset2 = 0;
if (isset($_GET['pageNum_Recordset2'])) {
  $pageNum_Recordset2 = $_GET['pageNum_Recordset2'];
}
$startRow_Recordset2 = $pageNum_Recordset2 * $maxRows_Recordset2;

mysql_select_db($database, $connFlashblog);
$query_Recordset2 = "SELECT * FROM clientes where doc2 like '$usuario'";
$query_limit_Recordset2 = sprintf("%s LIMIT %d, %d", $query_Recordset2, $startRow_Recordset2, $maxRows_Recordset2);
$Recordset2 = mysql_query($query_limit_Recordset2, $connFlashblog) or die(mysql_error());
$row_Recordset2 = mysql_fetch_assoc($Recordset2);


?>





<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title></title>
<style type="text/css">
<!--
.Estilo3 {font-size: 12px;
	font-family: Arial, Helvetica, sans-serif;
}
-->
</style>
<link href="Level2_Verdana_Text.css" rel="stylesheet" type="text/css"></head>

</head>
<script>
function Verificar() {
	if(document.frm.nombre.value == "") {
		alert("Debe Colocar Los Nombres del Cliente");
		document.frm.nombre.focus();
		return false;
		}

	if(document.frm.apellido.value == "") {
		alert("Debe colocar Los Apellidos del Cliente");
		document.frm.apellido.focus();
		return false;	
		
		
	}
	if(document.frm.nac.value == "0") {
		alert("Falta nacionalidad del Cliente");
		document.frm.nac.focus();
		return false;
	}
	if(document.frm.doc.value == "0") {
		alert("Falta Señalar tipo de Documentacion");
		document.frm.doc.focus();
		return false;
	}
	if(document.frm.doc2.value == "") {
		alert("Falta por completar Numero de Identificacion");
		document.frm.doc2.focus();
		return false;
	}

if(document.frm.pais.value == "") {
		alert("Debe Colocar el Pais ");
		document.frm.pais.focus();
		return false;
	}
if(document.frm.ciudad.value == "") {
		alert("Debe Colocar la Ciudad");
		document.frm.ciudad.focus();
		return false;
	}
if(document.frm.direccion.value == "") {
		alert("Debe colocar la Direccion");
		document.frm.direccion.focus();
		return false;
	}
	if(document.frm.correo.value == "") {
		alert("Debe colocar el Correo");
		document.frm.correo.focus();
		return false;
	}
if(document.frm.cliente.value == "0") {
		alert("Debe señalar el tipo de cliente");
		document.frm.cliente.focus();
		return false;
	}
	if(document.frm.vehiculo.value == "") {
		alert("Debes Señalar una placa de Vehiculo ");
		document.frm.vehiculo.focus();
		return false;
	}
	// Quita sólo la siguiente línea para que se envíe el formulario
	alert("Estimado"+document.frm.dato1.value+".\nEl formulario se enviaría a partir de este punto sin problema");
	return true;	// Cambia "false" por "true" para que funcione el formulario
}
</script>


<body text="#000000" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<div align="center">
<table width="78%" border="0" align="center" cellpadding="0" cellspacing="0">
    <!--DWLayoutTable-->
    <tr>
      <td width="100%" valign="top"><div align="right" >
          <div align="left"><span class="xbig">Actualizar Clave de Usuario </span><br />
          <br />
        </div>
        </div>
		
<form name=frm onSubmit="return Verificar()" method="post" action="cuenta.php?codigo=<? echo $_SESSION['doc2'] ?>&id=clave&id2=actualizar" enctype="multipart/form-data">
     
          <table width="597" border="1" align="center" cellspacing="0" bordercolor="#000033">
        <tr>
          <th width="591" scope="col"><table width="567" border="0" cellspacing="0" cellpadding="4" align="center">
            <tr >
              <td colspan="2">
                <div align="center">
                  <?php require_once('conector/conector.php');
				  
				   if ( $id2== 'actualizar' )
  
 { 
$pass=$_POST['password1'];
$pass2=$_POST['password2'];



if ($pass=="" or $pass2==""  ) {
echo '<P align="center"><IMG height="55" src="imagenes/atencion.jpg" width="63"><BR><FONT 
color="#ff0000"><B> Faltan Datos</B> </FONT> </P>';
exit;
}

if ($pass != $pass2){
echo  '<P align="center"><IMG height="55" 
src="imagenes/atencion.jpg" 
width="63"><BR><FONT face="Arial" color="#ff0000"><B> Passwords no 
coinciden.</B> </FONT></P>';
exit;
}
		  
			  
			  
			  
			  
mysql_connect($hostname,$username,$password);
mysql_select_db($database);

$pass = md5($pass);
$sSQL="Update clientes  Set  
pass='$pass',
pass2='$pass2'
 
Where doc2='$codigo'";

mysql_db_query($database,$sSQL);




echo '
<B> Su informacion se Actualizo Correctamente</B>

';
exit;

}
			  
							  
				  ?>
                  </div></td>
              </tr>
            <tr >
              <td><div align="left" class="small"><strong>Nueva Clave </strong>:</div></td>
              <td width="271" ><div align="left">
                <input name="password1" type="password" id="password1" / style="background-color:e3e3e3; border: 1px solid #666666; font-size:8pt; color: #000099" size="22" maxlength="150" />
              </div></td>
            </tr>
            <tr>
              <td width="151"><div align="left"><strong><font size="1" face="Verdana, Arial, Helvetica, sans-serif">Repetir Nueva Clave: </font></strong></div></td>
              <td><div align="left">
                <input name="password2" type="password" id="password2" / style="background-color:e3e3e3; border: 1px solid #666666; font-size:8pt; color: #000099" size="22" maxlength="150" />
              </div></td>
            </tr>
            <tr>
              <td height="40" colspan="2"><div align="center"><font face="Verdana" size="2"><font face="Verdana" size="2"><font face="Verdana" size="2"><span class="Estilo3">
                </span><font face="Verdana" size="2"><font face="Verdana" size="2"><span class="Estilo3">
                </span><font face="Verdana" size="2"><font face="Verdana" size="2"><font face="Verdana" size="2"><font face="Verdana" size="2"><span class="Estilo3">
                </span><font face="Verdana" size="2"><font face="Verdana" size="2"><span class="Estilo3">
                <input name="usuario" type="hidden" id="usuario" value="registro web" />
                </span></font></font><span class="Estilo3">
                <input name="nivel_acceso" type="hidden" id="nivel_acceso" value="0" size="25" />
                <input name="cliente" type="hidden" id="cliente" value="Normal" />
                </span></font></font></font></font></font></font><span class="Estilo3">
                <input name="fecha" type="hidden" id="fecha" value="<?php echo date("d-m-Y"); ?>" size="25" />
                  </span></font></font></font>
                  <input type="submit" name="Submit" value="    ACTUALIZAR     " class="botones" />
              </div></td>
            </tr>
          </table></th>
        </tr>
      </table>
        </form>        <div align="center"></td>
    </tr>
    
    <tr>
      <td height="25" valign="top" bgcolor="#FFFFFF"><p></td>
    </tr>
</table>




<p>&nbsp;</p>

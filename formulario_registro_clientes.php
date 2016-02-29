<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title></title>
<style type="text/css">
<!--
.Estilo3 {font-size: 12px;
	font-family: Arial, Helvetica, sans-serif;
}
-->
</style>
<link href="Level2_Verdana_Text.css" rel="stylesheet" type="text/css">
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


<body text="#000000" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0"><div align="center">
<table width="81%" border="0" align="center" cellpadding="0" cellspacing="0">
    <!--DWLayoutTable-->
    <tr>
      <td width="100%" valign="top"><div align="right" >
          <div align="left"><img src="imagenes/banne1.gif" width="607" height="30"><br />
          <br />
        </div>
        </div>
		
		<form name=frm onSubmit="return Verificar()" method="post" action="?accion=hacernuevo" enctype="multipart/form-data">
     
          <table width="597" border="1" align="center" cellspacing="0" bordercolor="#000033">
        <tr>
          <th width="591" scope="col"><table width="567" border="0" cellspacing="0" cellpadding="4" align="center">
            <tr >
              <td colspan="3"><div align="left" class="small">
                <div align="center">
                  <?php		require_once('conector/conector.php'); ?>
                  <?php
		

$currentPage = $_SERVER["PHP_SELF"];

$maxRows_Recordset2info22 = 50;
$pageNum_Recordset2info22 = 0;
if (isset($_GET['pageNum_Recordset2info22'])) {
  $pageNum_Recordset2info22 = $_GET['pageNum_Recordset2info22'];
}
$startRow_Recordset2info22 = $pageNum_Recordset2info22 * $maxRows_Recordset2info22;

mysql_select_db($database, $connFlashblog);
$query_Recordset2info22 = "SELECT * FROM informacion WHERE cod  LIKE '0'";
$query_limit_Recordset2info22 = sprintf("%s LIMIT %d, %d", $query_Recordset2info22, $startRow_Recordset2info22, $maxRows_Recordset2info22);
$Recordset2 = mysql_query($query_limit_Recordset2info22, $connFlashblog) or die(mysql_error());
$row_Recordset2info22 = mysql_fetch_assoc($Recordset2);

$url=$row_Recordset2info22['url'];
$correo_web=$row_Recordset2info22['correo'];
if (isset($_GET['error'])){

$error_accion_ms[0]= "No se puede borrar el Usuario, debe existir por lo menos uno.<br>Si desea borrarlo, primero cree uno nuevo.";
$error_accion_ms[1]= "Faltan Datos.";
$error_accion_ms[2]= "Passwords no coinciden.";
$error_accion_ms[3]= "El Nivel de Acceso ha de ser num&eacute;rico.";
$error_accion_ms[4]= "El Nombre de Usuario que ha seleccionado No esta  Disponible. Por favor selecione otro";

$error_cod = $_GET['error'];
echo "<div align='center'>$error_accion_ms[$error_cod]</div><br>";

}






if ($_GET['accion']=="hacernuevo"){

$usuario=$_POST['usuarionombre'];
$nombre=$_POST['usuarionombre1'];
$apellido=$_POST['usuarioapellido'];
$pass=$_POST['password1'];
$pass2=$_POST['password2'];

$email=$_POST['email'];


if ($pass=="" or $pass2=="" or $usuario=="" ) {
echo '<font face="Arial" size="2" color="#FF0000">Faltan Datos</font>';
exit;
}

if ($pass != $pass2){
echo  '<font face="Arial" size="2" color="#FF0000">Passwords no coinciden.</font>';
exit;
}

mysql_connect($hostname,$username,$password);
mysql_select_db($database);

$usuarios_consulta = mysql_query("SELECT ID FROM usuarios2 WHERE usuario='$usuario'") or die(mysql_error());
$total_encontrados = mysql_num_rows ($usuarios_consulta);
mysql_free_result($usuarios_consulta);

if ($total_encontrados != 0) {
echo '<font face="Arial" size="2" color="#FF0000">El Nombre de Usuario que ha seleccionado No esta  Disponible. Por favor selecione otro.</font>';
exit;
}
$email=$correo;
$usuario=stripslashes($usuario);
$pass = md5($pass);
			  mysql_query("INSERT INTO usuarios2
 (usuario,nombre,apellido,pass,pass2,email,doc2)VALUES ('$usuario','$nombre','$apellido','$pass','$pass2','$email','$doc2')");
 
 mysql_query("INSERT INTO clientes (nombre,apellido,nac,doc,doc2,pais,ciudad,direccion,telefono,correo,cliente,vehiculo,fecha,usuario) VALUES ('$nombre','$apellido','$nac','$doc','$doc2','$pais','$ciudad','$direccion','$telefono','$correo','$cliente','$vehiculo','$fecha','$usuario')");













echo '

<P align="center"><FONT color="#000099"><B><FONT face="Arial" size="4">El Usuario se 
Agrego Correctamente<BR><BR><FONT color="#0000ff" size="3">Te hemos enviado un 
correo para que confirmes tu registro</FONT></FONT></B></FONT></P>










';



// para  enviar  el correo
$rcon = rand(1000000,10000000);
$sms = ' 
<P class="Estilo2" align="center"><FONT size="2"><FONT size="4">Gracias por 
registrarte</FONT> </FONT><FONT face="Arial" size="2"><BR><BR><B>Tus Datos de 
acceso:</B><BR>Usuario:'.$usuario.' <BR>Clave:'.$pass2.'<BR></FONT><FONT 
face="Arial" size="2">
<P class="Estilo2" align="center"><FONT color="#800000"><B>Recuerda confirmar tu 
registro en el siguiente Link <BR></B></FONT></FONT>'.$url.'/confirmar.php?&amp;codigo2='.$correo.'">CONFIRMAR REGISTRO</A><BR><BR></P>


';
$asunto1="registro de usuarios";
//headers del mail
         $headers = "MIME-Version: 1.0\r\n";
         $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
         $headers .= "From: portal <".$correo_web.">\r\n";
         $headers .= "Reply-To: ".$correo_web."\r\n";
//enviamos el email
mail($correo, $asunto1, $sms,$headers);





exit;

}

?>
                </div>
              </div>                <div align="left"></div></td>
              </tr>
            <tr >
              <td width="151"><span class="small"><strong>Nombre de Usuario </strong></span></td>
              <td colspan="2" ><input name="usuarionombre" type="text" id="usuarionombre" size="22" maxlength="10" / style="background-color:e3e3e3; border: 1px solid #666666; font-size:8pt; color: #000099" /></td>
            </tr>
            <tr >
              <td><strong class="small">Clave:</strong></td>
              <td colspan="2" ><input name="password1" type="password" id="password1" size="22" maxlength="8" / style="background-color:e3e3e3; border: 1px solid #666666; font-size:8pt; color: #000099" /></td>
            </tr>
            <tr >
              <td><span class="small"><strong>Clave
            (repitalo) :</strong></span> </font></td>
              <td colspan="2" ><input name="password2" type="password" id="password2" size="22" maxlength="8" / style="background-color:e3e3e3; border: 1px solid #666666; font-size:8pt; color: #000099" /></td>
            </tr>
            <tr >
              <td><font size="1" face="Verdana, Arial, Helvetica, sans-serif" class="small"><strong>Nombre</strong></font></td>
              <td colspan="2" ><input name="usuarionombre1" type="text" id="usuarionombre1" size="22" maxlength="150" / style="background-color:e3e3e3; border: 1px solid #666666; font-size:8pt; color: #000099" /></td>
            </tr>
            <tr>
              <td width="151"><div align="left"><strong><font size="1" face="Verdana, Arial, Helvetica, sans-serif">Apellido:</font></strong></div></td>
              <td colspan="2"><div align="left">
                <input name="usuarioapellido" type="text" id="usuarioapellido" size="22" maxlength="150" / style="background-color:e3e3e3; border: 1px solid #666666; font-size:8pt; color: #000099" />
              </div></td>
            </tr>
            <tr>
              <td width="151"><div align="left"><strong><font size="1" face="Verdana, Arial, Helvetica, sans-serif">Nacionalidad</font></strong></div></td>
              <td colspan="2"><select name="nac" id="nac" style="background-color:e3e3e3; border: 1px solid #666666; font-size:8pt; color: #000099">
                <option value="0">Seleccionar</option>
                <option value="V">V - Venezolano</option>
                <option value="E">E - Extranjero</option>
              </select></td>
            </tr>
            <tr>
              <td width="151"><div align="left"><strong><font size="1" face="Verdana, Arial, Helvetica, sans-serif">Identificacion:</font></strong></div></td>
              <td><strong><font face="Verdana, Arial, Helvetica, sans-serif">
                <select name="doc" id="doc" style="background-color:e3e3e3; border: 1px solid #666666; font-size:8pt; color: #000099">
                  <option value="0">Seleccionar</option>
                  <option value="C.I">C.I</option>
                  <option value="R.I.F">R.I.F</option>
                  <option value="Pasaporte">Pasaporte</option>
                </select>
              N&ordm;</font></strong></td>
              <td width="271"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2">
                <input name="doc2" type="text" id="doc2" / style="background-color:e3e3e3; border: 1px solid #666666; font-size:8pt; color: #000099" value="<?php echo $codigo; ?>" size="22" maxlength="150" />
              </font></b></td>
            </tr>
            <tr>
              <td width="151"><div align="left"><strong><font size="1" face="Verdana, Arial, Helvetica, sans-serif">Pais:</font></strong></div></td>
              <td colspan="2"><div align="left">
                <select name="pais" style="background-color:e3e3e3; border: 1px solid #666666; font-size:8pt; color: #000099">
                  <option selected="selected" value="0">- Selecciona tu pa&iacute;s -</option>
                  <option value="Venezuela">Venezuela</option>
                  <option value="M&eacute;xico">M&eacute;xico</option>
                  <option value="Colombia">Colombia</option>
                  <option value="Guatemala">Guatemala</option>
                  <option value="Estados Unidos">Estados Unidos</option>
                  <option value="0">---------</option>
                  <option value="Afganist&aacute;n">Afganist&aacute;n</option>
                  <option value="Albania">Albania</option>
                  <option value="Alemania">Alemania</option>
                  <option value="Andorra">Andorra</option>
                  <option value="Angola">Angola</option>
                  <option value="Anguila">Anguila</option>
                  <option value="Ant&aacute;rtida">Ant&aacute;rtida</option>
                  <option value="Antigua y Barbuda">Antigua y Barbuda</option>
                  <option value="Antillas holandesas">Antillas holandesas</option>
                  <option value="Arabia Saud&iacute;">Arabia Saud&iacute;</option>
                  <option value="Argelia">Argelia</option>
                  <option value="Argentina">Argentina</option>
                  <option value="Armenia">Armenia</option>
                  <option value="Aruba">Aruba</option>
                  <option value="Australia">Australia</option>
                  <option value="Austria">Austria</option>
                  <option value="Azerbaiy&aacute;n">Azerbaiy&aacute;n</option>
                  <option value="Bahamas">Bahamas</option>
                  <option value="Bahrein">Bahrein</option>
                  <option value="Bangladesh">Bangladesh</option>
                  <option value="Barbados">Barbados</option>
                  <option value="B&eacute;lgica">B&eacute;lgica</option>
                  <option value="Belice">Belice</option>
                  <option value="Ben&iacute;n">Ben&iacute;n</option>
                  <option value="Bermudas">Bermudas</option>
                  <option value="Bhut&aacute;n">Bhut&aacute;n</option>
                  <option value="Bielorusia">Bielorrusia</option>
                  <option value="Birmania">Birmania</option>
                  <option value="Bolivia">Bolivia</option>
                  <option value="Bosnia y Herzegovina">Bosnia y Herzegovina</option>
                  <option value="Botsuana">Botsuana</option>
                  <option value="Brasil">Brasil</option>
                  <option value="Brunei">Brunei</option>
                  <option value="Bulgaria">Bulgaria</option>
                  <option value="Burkina Faso">Burkina Faso</option>
                  <option value="Burundi">Burundi</option>
                  <option value="Cabo Verde">Cabo Verde</option>
                  <option value="Camboya">Camboya</option>
                  <option value="Camer&uacute;n">Camer&uacute;n</option>
                  <option value="Canad&aacute;a">Canad&aacute;</option>
                  <option value="Chad">Chad</option>
                  <option value="Chile">Chile</option>
                  <option value="China">China</option>
                  <option value="Chipre">Chipre</option>
                  <option value="Comores">Comores</option>
                  <option value="Congo">Congo</option>
                  <option value="Corea">Corea</option>
                  <option value="Corea del Norte">Corea del Norte</option>
                  <option value="Costa de Marf&iacute;l">Costa del Marf&iacute;l</option>
                  <option value="Costa Rica">Costa Rica</option>
                  <option value="Croacia">Croacia</option>
                  <option value="Cuba">Cuba</option>
                  <option value="Dinamarca">Dinamarca</option>
                  <option value="Djibouri">Djibouri</option>
                  <option value="Dominicana">Dominica</option>
                  <option value="Ecuador">Ecuador</option>
                  <option value="Egipto">Egipto</option>
                  <option value="El Salvador">El Salvador</option>
                  <option value="Emiratos &Aacute;rabes Unidos">Emiratos &Aacute;rabes Unidos</option>
                  <option value="Eritrea">Eritrea</option>
                  <option value="Eslovaquia">Eslovaquia</option>
                  <option value="Eslovenia">Eslovenia</option>
                  <option value="Espa&ntilde;a">Espa&ntilde;a</option>
                  <option value="Estonia">Estonia</option>
                  <option value="Etiop&iacute;a">Etiop&iacute;a</option>
                  <option value="Filipinas">Filipinas</option>
                  <option value="Finlandia">Finlandia</option>
                  <option value="Francia">Francia</option>
                  <option value="Gab&oacute;n">Gab&oacute;n</option>
                  <option value="Gambia">Gambia</option>
                  <option value="Georgia">Georgia</option>
                  <option value="Ghana">Ghana</option>
                  <option value="Gibraltar">Gibraltar</option>
                  <option value="Granada">Granada</option>
                  <option value="Grecia">Grecia</option>
                  <option value="Groenlandia">Groenlandia</option>
                  <option value="Guadalupe">Guadalupe</option>
                  <option value="Guam">Guam</option>
                  <option value="Guyana">Guyana</option>
                  <option value="Guinea">Guinea</option>
                  <option value="Hait&iacute;">Hait&iacute;</option>
                  <option value="Holanda">Holanda</option>
                  <option value="Honduras">Honduras</option>
                  <option value="Hong Kong">Hong Kong</option>
                  <option value="Hungr&iacute;a">Hungr&iacute;a</option>
                  <option value="India">India</option>
                  <option value="Indonesia">Indonesia</option>
                  <option value="Irak">Irak</option>
                  <option value="Ir&aacute;n">Ir&aacute;n</option>
                  <option value="Irlanda">Irlanda</option>
                  <option value="Islandia">Islandia</option>
                  <option value="Caim&aacute;n">Islas Caim&aacute;n</option>
                  <option value="Islas Faroe">Islas Faroe</option>
                  <option value="Islas Fiyi">Islas Fiyi</option>
                  <option value="Islas Malvinas">Islas Malvinas</option>
                  <option value="Israel">Israel</option>
                  <option value="Italia">Italia</option>
                  <option value="Jamaica">Jamaica</option>
                  <option value="Jap&oacute;n">Jap&oacute;n</option>
                  <option value="Jordania">Jordania</option>
                  <option value="Kazajist&aacute;n">Kazajist&aacute;n</option>
                  <option value="Kenia">Kenia</option>
                  <option value="Kirguizist&aacute;n">Kirguizist&aacute;n</option>
                  <option value="Kiribati">Kiribati</option>
                  <option value="Kuwait">Kuwait</option>
                  <option value="Laos">Laos</option>
                  <option value="Lesoto">Lesoto</option>
                  <option value="Letonia">Letonia</option>
                  <option value="L&iacute;bano">L&iacute;bano</option>
                  <option value="Liberia">Liberia</option>
                  <option value="Libia">Libia</option>
                  <option value="Liechtenstein">Liechtenstein</option>
                  <option value="Lituania">Lituania</option>
                  <option value="Luxemburgo">Luxemburgo</option>
                  <option value="Macao">Macao</option>
                  <option value="Madagascar">Madagascar</option>
                  <option value="Malasia">Malasia</option>
                  <option value="Malawi">Malawi</option>
                  <option value="Maldivas">Maldivas</option>
                  <option value="Mal&iacute;">Mal&iacute;</option>
                  <option value="Malta">Malta</option>
                  <option value="Marruecos">Marruecos</option>
                  <option value="Martinica">Martinica</option>
                  <option value="Mauricio">Mauricio</option>
                  <option value="Mauritania">Mauritania</option>
                  <option value="Mayotte">Mayotte</option>
                  <option value="Micronesia">Micronesia</option>
                  <option value="Moldavia">Moldavia</option>
                  <option value="M&oacute;naco">M&oacute;naco</option>
                  <option value="Mongolia">Mongolia</option>
                  <option value="Montserrat">Montserrat</option>
                  <option value="Mozambique">Mozambique</option>
                  <option value="Namibia">Namibia</option>
                  <option value="Nepal">Nepal</option>
                  <option value="Nicaragua">Nicaragua</option>
                  <option value="N&iacute;ger">N&iacute;ger</option>
                  <option value="Nigeria">Nigeria</option>
                  <option value="Noruega">Noruega</option>
                  <option value="Nueva Zelanda">Nueva Zelanda</option>
                  <option value="Om&aacute;n">Om&aacute;n</option>
                  <option value="Panama">Panam&aacute;</option>
                  <option value="Papua Nueva Guinea">Papua Nueva Guinea</option>
                  <option value="Paquist&aacute;n">Paquist&aacute;n</option>
                  <option value="Paraguay">Paraguay</option>
                  <option value="Peru">Per&uacute;</option>
                  <option value="Polonia">Polonia</option>
                  <option value="Portugal">Portugal</option>
                  <option value="Puerto Rico">Puerto Rico</option>
                  <option value="Qatar">Qatar</option>
                  <option value="Reino Unido">Reino Unido</option>
                  <option value="Rep&uacute;blica Checa">Rep&uacute;blica Checa</option>
                  <option value="Sud&aacute;frica">Sud&aacute;frica</option>
                  <option value="Republica Dominicana">Rep&uacute;blica Dominicana</option>
                  <option value="Ruanda">Ruanda</option>
                  <option value="Rumania">Rumania</option>
                  <option value="Rusia">Rusia</option>
                  <option value="Samoa">Samoa</option>
                  <option value="San Kitts y Nevis">San Kitts y Nevis</option>
                  <option value="San Marino">San Marino</option>
                  <option value="Senegal">Senegal</option>
                  <option value="Serbia y Montenegro">Serbia y Montenegro</option>
                  <option value="Seychelles">Seychelles</option>
                  <option value="Sierra Leona">Sierra Leona</option>
                  <option value="Singapur">Singapur</option>
                  <option value="Siria">Siria</option>
                  <option value="Somalia">Somalia</option>
                  <option value="Sri Lanka">Sri Lanka</option>
                  <option value="Suazilandia">Suazilandia</option>
                  <option value="Sud&aacute;n">Sud&aacute;n</option>
                  <option value="Suecia">Suecia</option>
                  <option value="Suiza">Suiza</option>
                  <option value="Surinam">Surinam</option>
                  <option value="Tailandia">Tailandia</option>
                  <option value="Taiw&aacute;n">Taiw&aacute;n</option>
                  <option value="Tanzania">Tanzania</option>
                  <option value="Tayikist&aacute;n">Tayikist&aacute;n</option>
                  <option value="Timor Oriental">Timor Oriental</option>
                  <option value="Togo">Togo</option>
                  <option value="Tonga">Tonga</option>
                  <option value="Trinidad y Tobago">Trinidad y Tobago</option>
                  <option value="T&uacute;nez">T&uacute;nez</option>
                  <option value="Turkmenist&aacute;n">Turkmenist&aacute;n</option>
                  <option value="Turqu&iacute;a">Turqu&iacute;a</option>
                  <option value="Tuvalu">Tuvalu</option>
                  <option value="Ucrania">Ucrania</option>
                  <option value="Ugada">Uganda</option>
                  <option value="Uruguay">Uruguay</option>
                  <option value="Uzbekist&aacute;n">Uzbekist&aacute;n</option>
                  <option value="Vanuatu">Vanuatu</option>
                  <option value="Vietnam">Vietnam</option>
                  <option value="Yemen">Yemen</option>
                  <option value="Zambia">Zambia</option>
                  <option value="Zimbahue">Zimbahue</option>
                </select>
              </div></td>
            </tr>
            <tr>
              <td width="151"><div align="left"><strong><font size="1" face="Verdana, Arial, Helvetica, sans-serif">Ciudad:</font></strong></div></td>
              <td colspan="2"><div align="left">
                <input name="ciudad" type="text" id="ciudad" size="22" maxlength="150" / style="background-color:e3e3e3; border: 1px solid #666666; font-size:8pt; color: #000099" />
              </div></td>
              </tr>
            <tr >
              <td width="151"><div align="left"><strong><font size="1" face="Verdana, Arial, Helvetica, sans-serif">Direccion:</font></strong></div></td>
              <td colspan="2"><div align="left">
                <textarea name="direccion" cols="50" rows="5" id="direccion" style="background-color:e3e3e3; border: 1px solid #666666; font-size:8pt; color: #000099"></textarea>
              </div></td>
              <input type="hidden" name="nivelacceso" value="0" />
              <input type="hidden" name="salir" value="salir" />
            </tr>
            <tr >
              <td height="13"><div align="left"><strong><font size="1" face="Verdana, Arial, Helvetica, sans-serif">Telefono:</font></strong></div></td>
              <td height="13" colspan="2" ><div align="left">
                <input name="telefono" type="text" id="telefono" size="22" maxlength="150" / style="background-color:e3e3e3; border: 1px solid #666666; font-size:8pt; color: #000099" />
              </div></td>
            </tr>
            <tr >
              <td height="7"><div align="left"><strong><font size="1" face="Verdana, Arial, Helvetica, sans-serif">Correo</font></strong></div></td>
              <td height="7" colspan="2" ><div align="left">
                <input name="correo" type="text" id="correo" size="22" maxlength="150" / style="background-color:e3e3e3; border: 1px solid #666666; font-size:8pt; color: #000099" />
              </div></td>
            </tr>
            <tr>
              <td height="30" ><div align="left"><strong><font size="1" face="Verdana, Arial, Helvetica, sans-serif">Placa de Vehiculo: </font></strong></div></td>
              <td height="30" colspan="2"><div align="left">
                <input name="vehiculo" type="text" id="vehiculo" size="22" maxlength="150" / style="background-color:e3e3e3; border: 1px solid #666666; font-size:8pt; color: #000099" />
              *opcional</div></td>
            </tr>
            <tr>
              <td height="40" colspan="3"><div align="center"><font face="Verdana" size="2"><font face="Verdana" size="2"><font face="Verdana" size="2"><span class="Estilo3">
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
                      <input type="submit" name="Submit" value="  Registrar  " class="botones" />
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

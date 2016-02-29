<head>

<title>lista de habitaciones</title>



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
<link href="Level2_Verdana_Text.css" rel="stylesheet" type="text/css">
</head>

<body>
<table width="200" border="1" align="center" cellspacing="0" bordercolor="#000000">
  <tr>
    <td><table width="610" border="1" align="center" cellspacing="0" bordercolor="#7895AF">
      <!--DWLayoutTable-->
      <tr>
        <td bgcolor="#7895AF"><strong>Reservaciones</strong></td>
      </tr>
      <tr>
        <td><table width="200" border="1" align="center" cellspacing="0" bordercolor="#000000">
          <tr>
            <td><table width="601" border="1" align="center" cellspacing="0" bordercolor="#999999" bgcolor="#F4F4F4">
                <!--DWLayoutTable-->
                <tr>
                  <td width="560" height="24" valign="top"><table width="601" border="0" align="center" cellspacing="0">
                      <!--DWLayoutTable-->
                      <tr>
                        <td height="30" bgcolor="#FFFFFF"><strong>Datos enviados para Reservar: </strong></td>
                        </tr>
                      <tr>
                        <td height="30" bgcolor="#FFFFFF"><table width="577" border="0" cellspacing="2">
                          <!--DWLayoutTable-->
                          <tr>
                            <td width="135" bgcolor="#E3E9F1"><strong>Fecha desde: </strong></td>
                            <td width="132"><?php echo $fecha1; ?></td>
                            <td width="99" bgcolor="#E3E9F1"><strong>Cant. de Dias:</strong> </td>
                            <td width="203"><?php echo $cant_dia; ?></td>
                          </tr>
                          <tr>
                            <td bgcolor="#E3E9F1"><strong>Fecha Hasta:</strong></td>
                            <td colspan="3"><?php echo $fecha2; ?></td>
                          </tr>
                          <tr>
                            <td bgcolor="#E3E9F1"><strong>Tipo de Habitaci&oacute;n:</strong></td>
                            <td colspan="3"><?php echo $nombre_tipo; ?></td>
                          </tr>
                          <tr>
                            <td bgcolor="#E3E9F1"><strong>N&ordm; de Personas: </strong></td>
                            <td colspan="3"><?php echo $personas; ?></td>
                          </tr>
                          <tr>
                            <td height="16" valign="top" bgcolor="#E3E9F1"><strong>Observaciones:</strong></td>
                            <td colspan="3" rowspan="2" valign="top"><?php echo $obsev; ?></td>
                          </tr>
                          <tr>
                            <td height="24" valign="top"><!--DWLayoutEmptyCell-->&nbsp;</td>
                          </tr>
                          <tr>
                            <td bgcolor="#E3E9F1"><strong>Monto a Cancelar: </strong></td>
                            <td colspan="3"><?php echo $subtotal1; ?></td>
                          </tr>
                        </table></td>
                        </tr>
                  </table></td>
                </tr>
            </table></td>
          </tr>
          <tr>
            <td><table width="481" border="0" cellspacing="0">
                <tr>
                  <td width="471"><?php  if ( $personas >= '2' )
 { 	 include('info1.php'); } 
 ?></td>
                </tr>
                <tr>
                  <td><form name="form1" method="post" action="historial2.php?codigo=<? echo $_SESSION['doc2'] ?>">
                    <label>
                    <input type="submit" name="Submit" value="     Procesar RESERVACION    ">
                    </label>
                                                      </form>                  </td>
                </tr>
              </table></td>
          </tr>
        </table></td>
      </tr>
    </table></td>
  </tr>
</table>
<p>&nbsp;</p>
</body>
</html>

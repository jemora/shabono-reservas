<?php 
$dato001= $_SESSION['usuario_nivel'];



?>
<?php require_once('conector/conector.php');?> 

<?
$dbh=mysql_connect ($hostname,$username,$password) or die ('I cannot connect to the database because: ' . mysql_error());
mysql_select_db ($database); 

$resultinfo = mysql_query("SELECT * FROM informacion WHERE cod  LIKE '0'");

?>
<table border="0" cellpadding="0" cellspacing="0" width="154">
  <!--DWLayoutTable-->
  <!-- fwtable fwsrc="Sin t&iacute;tulo" fwbase="web4.jpg" fwstyle="Dreamweaver" fwdocid = "28318223" fwnested="0" -->
  <tr>
    <td width="148"><img src="spacer.gif" width="148" height="1" border="0" alt="" /></td>
    <td><img src="spacer.gif" width="6" height="1" border="0" alt="" /></td>
    <td><img src="spacer.gif" width="1" height="1" border="0" alt="" /></td>
  </tr>
  <tr>
    <td colspan="2"><img src="images/web4_r1_c1.jpg" alt="" name="web4_r1_c1" width="154" height="13" border="0" id="web4_r1_c1" /></td>
    <td><img src="spacer.gif" width="1" height="13" border="0" alt="" /></td>
  </tr>
  <tr>
    <td height="224" valign="top"><table width="140" border="0" cellspacing="0" bordercolor="#666600">
      <tr>
        <th width="113" scope="col"><div align="left">
            <?php include("admin_cliente.php");?>
        </div></th>
      </tr>
      <tr>
        <th scope="col"><div align="left">
            <?php include("admin_habitacion.php");?>
        </div></th>
      </tr>
      <tr>
        <th scope="col"><div align="left"></div></th>
      </tr>
      <tr>
        <th scope="col"><div align="left"></div></th>
      </tr>
      <tr>
        <th scope="col"><div align="left"></div></th>
      </tr>
      <tr>
        <th height="20" scope="col"><div align="left"></div></th>
      </tr>
      <tr>
        <th height="21" scope="col"><div align="left"></div>          </th>
      </tr>
      <?php 
		if ( $dato001 == '1' )
			  { 
			   	
		echo "<tr>
          <th scope='col'><div align='left'><a href='modificar_clientes.php' class='Estilo1'>Actualizar Cliente</a></div></th>
        </tr>";   } ?>
    </table></td>
    <td background="images/web4_r2_c2.jpg"><!--DWLayoutEmptyCell-->&nbsp;</td>
    <td><img src="spacer.gif" width="1" height="224" border="0" alt="" /></td>
  </tr>
  <tr>
    <td colspan="2"><img src="images/web4_r3_c1.jpg" alt="" name="web4_r3_c1" width="154" height="14" border="0" id="web4_r3_c1" /></td>
    <td><img src="spacer.gif" width="1" height="14" border="0" alt="" /></td>
  </tr>
</table>
<p>&nbsp;</p>
<p>&nbsp;</p>

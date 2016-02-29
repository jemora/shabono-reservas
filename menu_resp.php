<?php 
$dato001= $_SESSION['usuario_nivel'];



?>
<?php require_once('conector/conector.php');?> 

<?
$dbh=mysql_connect ($hostname,$username,$password) or die ('I cannot connect to the database because: ' . mysql_error());
mysql_select_db ($database); 

$resultinfo = mysql_query("SELECT * FROM informacion WHERE cod  LIKE '0'");

?>

<table width="155" border="0" cellspacing="0">
  <tr>
    <th background="imagenes/fondito.gif" scope="col"><table width="126" height="666" border="0" cellpadding="0" cellspacing="0">
      <!--DWLayoutTable-->
      <tr>
        <td width="126" height="361" valign="top" bgcolor="#FFFFFF"><table width="140" border="0" cellspacing="0" bordercolor="#666600">
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
              <th scope="col"><div align="left">
                <?php include("admin_facturas.php");?>
              </div></th>
            </tr>
            <tr>
              <th scope="col"><div align="left">
                <?php include("admin_consumos.php");?>
</div></th>
            </tr>
            <tr>
              <th scope="col"><div align="left">
                <?php include("admin_admin.php");?>
              </div></th>
            </tr>
            <?php 
		if ( $dato001 == '1' )
			  { 
			   	
		echo "<tr>
          <th scope='col'><div align='left'><a href='modificar_clientes.php' class='Estilo1'>Actualizar Cliente</a></div></th>
        </tr>";   } ?>
          </table>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
          <p>&nbsp;</p></td>
      </tr>
    </table></th>
  </tr>
</table>
<p>&nbsp;</p>

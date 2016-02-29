 <?php 
{
require_once('conector/conector.php');
require('mensajes.php');
$dato=$_POST['doc2'];


/////////////////////////////////////////////////////////--------------------------------------
mysql_connect($hostname,$username,$password);
mysql_select_db($database);

//////////////////////////////// consulta si la fecha es  mayor  a  la del dia
if ($fecha2 < $fecha1) {

 
echo $mensaje11;
exit;
}
//////////////////////////////// consulta si la fecha es  menor  a  la del dia
$fecha=date("Y-m-d");
$dato22=$_POST['fecha1'];
if ($dato22 < $fecha and $personas != 0) {
echo $mensaje11;
exit;
}
/////////////////////////////////////////////////////////--------------------------------------


/////////////////////////////////////////////////////////--------------------------------------
$habitacion;	

require_once('conector/conector.php');
$dbh=mysql_connect ($hostname,$username,$password) or die ('I cannot connect to the database because: ' . mysql_error());
mysql_select_db ($database); 
//Ejecutamos la sentencia SQL
$result_precio = mysql_query("SELECT * FROM hab_tipo_web   WHERE  nombre_tipo  LIKE '$nombre_tipo'");
$result_tipo = mysql_query("SELECT * FROM hab_tipo    WHERE  tipo  LIKE '$nombre_tipo'");
////////////////////
while ($row=mysql_fetch_array($result_precio))  {$precio1 = "".$row["precio"].""; }mysql_free_result($result_precio);
while ($row=mysql_fetch_array($result_tipo))  {$tipo= "".$row["id_tipo"].""; }mysql_free_result($result_tipo);

///////////////////////////////////////////// cantidad de dias
function diff_days($fecha1, $fecha2)
{
        return floor(abs(strtotime($fecha1) - strtotime($fecha2))/86400);
}
$dias = diff_days($fecha1, $fecha2);
$cant_dia = $dias;
///////////////////////////////////////////////////////////
$id_tipo=$nombre_tipo;
$precio=$precio1;
$subtotal1=$precio * $cant_dia;
if ($personas != 0) {

if ($nombre_tipo=="" or $personas==""  ) {
 include('info2.php'); 
exit;
}

if ($valor1 >= $valor2 ) {
 include('info3.php'); 
exit;
}



mysql_query("INSERT INTO habitacion_reservas_web
 (doc2,tipo,subtotal1,obsev,status,personas,fecha,precio,cant_dia,fecha1,fecha2,multi,nombre,apellido,usuario)VALUES ('$doc2','$tipo','$subtotal1','$obsev','$status','$personas','$fecha','$precio',
 '$cant_dia','$fecha1','$fecha2','$multi','$nombre','$apellido','$usuario')");
/////////////////////////////////////////////////////////--------------pantallas de resultados


mysql_query("INSERT INTO contador1
 (fecha)VALUES ('$fecha')");
require('detalles_asignar_hab2.php'); 
//////////////////////////// Acumulador
mysql_close();
exit;
}
}
?>

<?php 
require_once('conector/conector.php'); ?>
<?php  



$dbh=mysql_connect ($hostname,$username,$password) or die ('I cannot connect to the database because: ' . mysql_error());
mysql_select_db ($database);

$result_imagen2 = mysql_query("SELECT * FROM informacion WHERE cod LIKE '0'");

?>

<?php require_once('conector/conector.php');?> 







</head><style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
body,td,th {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 10px;
}
-->
</style>

<img src="ver_banner.php?id=29" width="856" height="92" border="0" align="middle";width="359" />
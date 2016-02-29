<?
$link=mysql_connect("localhost","root","");
mysql_select_db("hotel",$link);


$result=mysql_query("SELECT * FROM logo WHERE id=$id",$link);
$row=mysql_fetch_array($result);
header("Content-type:".$row["tipo"]); 
echo $row["imagen"];
?>

   

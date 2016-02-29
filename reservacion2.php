<? require("aut_verifica.inc.php");
$nivel_acceso=10; 
if ($nivel_acceso <= $_SESSION['usuario_nivel']){
header ("Location: $redir?error_login=5");
exit;
}
?>
<?php include("reservacion1.php");?>
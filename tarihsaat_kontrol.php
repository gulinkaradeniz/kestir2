
<?php

$gun=$_POST['gun'];
$ay=$_POST['ay'];
$saat=$_POST['saat'];
$_SESSION["secilentarih"]=date('Y')."-".$ay."-".$gun." ".$saat;
$_SESSION['sistemmesaji']="TARİH SEÇİLDİ.";
$_SESSION['sistemmesajicss']="is-link is-light";
header('Location: randevu_al.php');

?>
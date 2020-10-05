
<?php
include "baglanti.php";

$gun=$_POST['gun'];
$ay=$_POST['ay'];
$saat=$_POST['saat'];
$_SESSION["secilentarih"]=date('Y')."-".$ay."-".$gun." ".$saat;

$tarih=$_SESSION["secilentarih"];
$tarih2=date("Y-m-d H:i:s",strtotime($tarih));
//$tarih2=date("d/m/Y",strtotime($tarih));
$saat= date("H:i:s",strtotime($tarih));

$sql="SELECT * FROM kestir2db.tasks WHERE taskdate = '$tarih2'";
$sonuc2=mysqli_query($mysqli,$sql);

if ($sonuc2->num_rows==0){
    $_SESSION['sistemmesaji']="TARİH SEÇİLDİ.";
    $_SESSION['sistemmesajicss']="is-link is-light";
    header('Location: randevu_al.php');

    

}else{
    $_SESSION['sistemmesaji']="BAŞKA BİR SAATE RANDEVU ALINIZ.";
    $_SESSION['sistemmesajicss']="is-danger is-light";
    header('Location: tarihsaat.php');
  
    


}



?>
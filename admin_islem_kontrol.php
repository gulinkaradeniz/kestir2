<?php
include "baglanti.php";

$isim=$_POST['isim'];
$sure=$_POST['sure'];

$sqlekle3="INSERT INTO `kestir2db`.`islemler` (`isim`, `sure`) VALUES ('$isim','$sure')";
$sonuc=mysqli_query($mysqli,$sqlekle3);

session_start();
$_SESSION['login'] = true;
$_SESSION['isadmin'] = true;
$_SESSION['sistemmesaji']="İŞLEM EKLENDİ";
$_SESSION['sistemmesajicss']="is-link is-light";
header('Location: admin_islem_ekle.php');

?>
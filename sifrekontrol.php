
<?php
include "baglanti.php";

if(isset($_POST['telefon']) && isset($_POST['sifre']) ) {
    $telefon=$_POST['telefon'];
    $sifre=$_POST['sifre'];

    $sorgu = $mysqli->prepare("UPDATE `kestir2db`.`users` SET `sifre`='$sifre' WHERE `telefon`='$telefon';");

    if ($baglanti->errno > 0) {
        die("<b>Sorgu Hatası:</b> " . $baglanti->error);
    }

    $sorgu->bind_param("sifre",$sifre, $telefon);
    $sorgu->execute();

    if ($sorgu->affected_rows > 0) {
        header("Location:index.php");
    } else {
        echo "Herhangi bir kayıt güncellenemedi.";
    }

    $sorgu->close();
    $baglanti->close();

}
?>
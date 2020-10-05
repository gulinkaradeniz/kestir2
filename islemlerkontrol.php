<?php
if(isset($_POST['islemler'])) {
    $islemler = $_POST['islemler'];
    foreach($islemler as $islem) {
        session_start();
        $_SESSION['islem'] = $islem;
        $_SESSION['sistemmesaji']="İŞLEM SEÇİLDİ.";
        $_SESSION['sistemmesajicss']="is-link is-light";
        header('Location: randevu_al.php');
    }
} else {
    session_start();
    $_SESSION['sistemmesaji']="BİR İŞLEM SEÇİNİZ.";
    $_SESSION['sistemmesajicss']="is-danger is-light";
    header('Location: islemler.php');
}
?>
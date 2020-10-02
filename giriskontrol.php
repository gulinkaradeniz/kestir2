
<?php
include "baglanti.php";

if(isset($_POST['telefon']) && isset($_POST['sifre']) ) {
    $telefon=$_POST['telefon'];
    $sifre=$_POST['sifre'];

    $sql="SELECT telefon,sifre FROM kestir2db.users where telefon='$telefon' and sifre='$sifre'";
    $sonuc=mysqli_query($mysqli,$sql);

    if ($sonuc->num_rows==0){
        session_start();
        $_SESSION['telefon'] = $telefon;
        $_SESSION['login'] = false;
        header('Location: index.php');
    }
    else{
        session_start();
        $_SESSION['telefon'] = $telefon;
        $_SESSION['login'] = true;
        header('Location: index.php');
    }
}
?>
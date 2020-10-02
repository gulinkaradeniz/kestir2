<?php
include "baglanti.php";
if(isset($_POST['telefon']) && isset($_POST['sifre']) && isset($_POST['adsoyad']) && isset($_POST['email']) ) {
    $telefon=$_POST['telefon'];
    $sifre=$_POST['sifre'];
    $adsoyad=$_POST['adsoyad'];
    $email=$_POST['email'];

    $sql="SELECT telefon,sifre FROM kestir2db.users where telefon='$telefon'";
    $sonuc2=mysqli_query($mysqli,$sql);

    if ($sonuc2->num_rows==0){
        $sqlekle="INSERT INTO `kestir2db`.`users` (`adsoyad`, `telefon`, `email`, `sifre`) VALUES ('$adsoyad', '$telefon', '$email', '$sifre')";
        $sonuc=mysqli_query($mysqli,$sqlekle);
        if ($sonuc==0){
            echo "<script>alert('Eklenemedi);</script>";
            }
        else{
            session_start();
            $_SESSION['telefon'] = $telefon;
            $_SESSION['login'] = true;
            header('Location: index.php');
        }
    }
    else{
        session_start();
        $_SESSION['telefon'] = $telefon;
        $_SESSION['login'] = false;
        header('Location: kayit_ol.php');
    }



}
?>

<html>
    <head>
        <title>Kayıt Ol</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.0/css/bulma.min.css">
        <script defer="" src="https://use.fontawesome.com/releases/v5.14.0/js/all.js"></script>
    </head>
    <body>
        <div class="container">
            <div class="columns">
                <div class="column is-6 is-offset-3">
                    <div class="card">
                        <div class="has-text-centered">
                            <div class="card-content">
                            <p class="subtitle is-3">
                                KAYIT OL
                            </p>
                                <p class="subtitle">
                                    <form   method="POST">
                                        <div class="field giris">
                                            <p class="control has-icons-left">
                                            <input class="input" placeholder="Ad Soyad" name="adsoyad" required>
                                            <span class="icon is-small is-left">
                                                <i class="fas fa-user"></i>
                                            </span>
                                            </p>
                                        </div>
                                        <div class="field giris">
                                            <p class="control has-icons-left">
                                            <input class="input" type="phone"placeholder="Telefon numarası" name="telefon" required>
                                            <span class="icon is-small is-left">
                                                <i class="fas fa-phone"></i>
                                            </span>
                                            </p>
                                        </div>
                                        <div class="field giris">
                                            <p class="control has-icons-left">
                                            <input class="input" type="mailuid"placeholder="E-mail" name="email" required>
                                            <span class="icon is-small is-left">
                                                <i class="fas fa-envelope"></i>
                                            </span>
                                            </p>
                                        </div>
                                        <div class="field giris">
                                            <p class="control has-icons-left">
                                            <input class="input" type="password"placeholder="Şifre" name="sifre" required>
                                            <span class="icon is-small is-left">
                                                <i class="fas fa-lock"></i>
                                            </span>
                                            </p>
                                        </div>
                                        <div class="field">
                                            <button class="button is-success is-fullwidth" >
                                                Kayıt Ol
                                            </button>
                                        </div>
                                    </form>
                                </p>
                            </div>
                        </div>
                        <nav class="navbar" role="navigation" aria-label="main navigation">
                        
                            <div id="navbarBasicExample" class="navbar-menu">
                                <div class="navbar-start">
                                <a class="navbar-item" href="index.php">
                                    <i class="fas fa-chevron-left"></i>
                                </a>
                                
                            </div>
                            
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
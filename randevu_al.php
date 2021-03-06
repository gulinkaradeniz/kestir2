<?php
include "loginkontrol.php";
include "baglanti.php";
?>
<html>
    <head>
        <title>Randevu Al</title>
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
                                RANDEVU AL
                            </p>
                            <?php include "sistemmesaji.php" ?>
                            <p class="subtitle">
                            <?php 
                            if ($_SESSION["isadmin"]){?>
                                <div class="field">
                                    <p class="control">
                                    <button class="button is-success is-fullwidth" onclick="javascript:location.href='uye_sec.php'">
                                        ÜYELER
                                    </button>
                                    </p>
                                </div>
                            <?php
                            }
                            ?>

                                <div class="field">
                                    <p class="control">
                                    <button class="button is-success is-fullwidth" onclick="javascript:location.href='islemler.php'">
                                        İŞLEMLER
                                    </button>
                                    </p>
                                </div>
                                <div class="field">
                                    <p class="control">
                                    <button class="button is-success is-fullwidth" onclick="javascript:location.href='tarihsaat.php'">
                                        TARİH/SAAT
                                    </button>
                                    </p>
                                </div>
                                <hr>
                                <?php
                                if(isset($_POST['uyeler'])) {
                                    $_SESSION['userid']=intval($_POST['uyeler']);
                                    echo "Seçilen üye=".($_POST['uyeler'])."<br>";
                                }

                                if(isset($_SESSION["secilenislemler"])){
                                    $islemler=$_SESSION["secilenislemler"];
                                
                                    foreach($islemler as $islem){
                                    $islem=intval($islem);
                                    $sorgu = $mysqli->query("SELECT * FROM islemler where id=$islem");
                                    while($satir=$sorgu->fetch_assoc()){
                                       
                                        echo "Seçilen işlem=".$satir["isim"]."<br>";
                                    }

                                }

                                }

                                if(isset($_SESSION["secilentarih"])){
                                    echo "Seçilen tarih=".($_SESSION["secilentarih"]);
                                }
                                ?>
                            
                                <div class="field">
                                    <p class="control">
                                    <button class="button is-info is-fullwidth" onclick="javascript:location.href='randevu_kaydet.php'">
                                        RANDEVUYU ONAYLA
                                    </button>
                                    </p>
                                </div>
                            </p>
                            </div>
                        </div>
                        <nav class="navbar" role="navigation" aria-label="main navigation">
                            
                            <div id="navbarBasicExample" class="navbar-menu">
                               <div class="navbar-start">
                                <a class="navbar-item" href="uye_anasayfa.php">
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
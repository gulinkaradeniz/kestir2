<?php
include "loginkontrol.php";
include "baglanti.php";
unset($_SESSION['secilenuyeler']);
?>
<html>
    <head>
        <title>Üye Seçimi</title>
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
                                ÜYELER
                            </p>
                            <?php include "sistemmesaji.php"; ?>
                            <p class="subtitle">
                                <form action="randevu_al.php" method="POST">
                                    <?php
                                    $sorgu3 = $mysqli->query("SELECT * FROM users WHERE isadmin='0'");
                                    ?>
                                    <div class="select is-success">
                                        <select name="uyeler">
                                            <?php 
                                            while($satir3=$sorgu3->fetch_assoc()){
                                                $dizi=array($satir3["adsoyad"]."-".$satir3["telefon"]);
                                                foreach ($dizi as $i) { 
                                                    echo "<option value=". $i .">".$i."</option>";
                                                }
                                            }
                                            ?>
                                        </select>
                                    </div><hr>
                                        <div class="field">
                                            <button class="button is-success is-fullwidth">
                                                Onayla
                                            </button>
                                        </div>
                                </form>
                            </p>
                            </div>
                        </div>
                        <nav class="navbar" role="navigation" aria-label="main navigation">
                            
                            <div id="navbarBasicExample" class="navbar-menu">
                               <div class="navbar-start">
                                <a class="navbar-item" href="randevu_al.php">
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
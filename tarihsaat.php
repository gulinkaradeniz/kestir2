<?php
include "loginkontrol.php";
include "baglanti.php";
unset($_SESSION['secilentarih']);
?>
<html>
    <head>
        <title>Tarih/Saat Seçimi</title>
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
                                TARİH/SAAT
                            </p>
                            <?php include "sistemmesaji.php"; ?>
                            <p class="subtitle">
                                <form action="tarihsaat_kontrol.php" method="POST">
                                    <div class="control">
                                        <label>Tarih:</label>
                                        <div class="select is-success">
                                            <select name="gun">
                                              <?php 
                                              for ($i=1; $i < 32; $i++) { 
                                                  echo "<option value=". $i .">".$i."</option>";
                                              }
                                                ?>
                                            </select>
                                        </div>
                                        <div class="select is-warning">
                                            <select name="ay">
                                                <option value="01">Ocak</option>
                                                <option value="02">Şubat</option>
                                                <option value="03">Mart</option>
                                                <option value="04">Nisan</option>
                                                <option value="05">Mayıs</option>
                                                <option value="06">Haziran</option>
                                                <option value="07">Temmuz</option>
                                                <option value="08">Ağustos</option>
                                                <option value="09">Eylül</option>
                                                <option value="10">Ekim</option>
                                                <option value="11">Kasım</option>
                                                <option value="12">Aralık</option>
                                            </select>
                                        </div>
                                    </div></br>
                                
                                    <div class="control">
                                        <label>Saat:</label>
                                        <div class="select is-danger">
                                            <select name="saat">
                                                <option value="10:00">10:00</option>
                                                <option value="11:00">11:00</option>
                                                <option value="12:00">12:00</option>
                                                <option value="13:00">13:00</option>
                                                <option value="14:00">14:00</option>
                                                <option value="15:00">15:00</option>
                                                <option value="16:00">16:00</option>
                                                <option value="17:00">17:00</option>
                                                <option value="18:00">18:00</option>
                                            </select>
                                        </div>
                                    </div></br>
                                    <div class="field">
                                        <button class="button is-success is-fullwidth">
                                            Onayla
                                        </button>
                                    </div>
                                </form>
                                <?php
                                if ($_POST) {
                                $gelengun=$_POST['gun'];
                                $gelenay=$_POST['ay'];
                                $gelensaat=$_POST['saat'];
                                echo $gelengun;
                                echo $gelenay;
                                echo $gelensaat;


                                }
                                ?>
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
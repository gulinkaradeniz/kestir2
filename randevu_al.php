<?php
include "loginkontrol.php";
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
                            <p class="subtitle">
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

                                <div class="field">
                                    <p class="control">
                                    <button class="button is-info is-fullwidth" onclick="javascript:location.href='randevu_basarili.php'">
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
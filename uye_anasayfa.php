<?php
include "loginkontrol.php";
?>
<html>
    <head>
        <title>Üye Anasayfa</title>
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
                                ANASAYFA
                            </p>
                            <?php include "sistemmesaji.php" ?>
                            <p class="subtitle">
                                <div class="field">
                                    <p class="control">
                                    <button class="button is-success is-fullwidth" onclick="javascript:location.href='randevu_basarili.php'">
                                        RANDEVULAR
                                    </button>
                                    </p>
                                </div>
                                <div class="field">
                                    <p class="control">
                                    <button class="button is-success is-fullwidth" onclick="javascript:location.href='randevu_al.php'">
                                        RANDEVU AL
                                    </button>
                                    </p>
                                </div>
                                <div class="field">
                                    <p class="control">
                                    <button class="button is-success is-fullwidth" onclick="document.getElementById('iletisim_modal').classList.add('is-active');" >
                                        İLETİŞİM
                                    </button>       
                                    </p>
                                </div> 
                                <div class="modal" id="iletisim_modal">
                                    <div class="modal-background"></div>
                                    <div class="modal-content">
                                        <article class="message is-danger">
                                            <div class="message-header">
                                              <p>İletişim</p>
                                              <button class="delete" aria-label="delete" onclick="document.getElementById('iletisim_modal').classList.remove('is-active');"></button>
                                            </div>
                                            <div class="message-body">
                                              0555 861 03 17
                                            </div>
                                          </article>
                                    </div>
                                   
                                </div>
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
                                <div id="navbarBasicExample" class="navbar-menu">
                                <div class="navbar-start">
                                    <a class="navbar-item" href="cikis.php">
                                        <i class="fas fa-times"></i>
                                    </a>
                                    
                                </div>
                                </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
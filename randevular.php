<?php
include "loginkontrol.php";
?>
<html>
    <head>
        <title>Randevularım</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.0/css/bulma.min.css">
        <script defer="" src="https://use.fontawesome.com/releases/v5.14.0/js/all.js"></script>
    </head>
    <body>
        <div class="container">
            <div class="columns">
                <div class="column is-6 is-offset-3">
                    <div class="card">
                        <div class="card-content">
                            <div class="has-text-centered">
                                <p class="subtitle is-3">
                                    RANDEVULAR
                                </p>
                            </div>
                        <p class="subtitle">
                            <div class="box">
                                <article class="media">
                                <div class="media-left">
                                    <!--<figure class="image is-64x64">
                                    <img src="https://bulma.io/images/placeholders/128x128.png" alt="Image">
                                    </figure>-->
                                </div>
                                <div class="media-content">
                                    <div class="content">
                                    <p>
                                        <strong>Ad Soyad</strong> <small>Telefon Numarası</small>
                                        <br>
                                            İşlem - Tarih - Saat
                                    </p>
                                    </div>
                                    <nav class="level is-mobile">
                                    <div class="level-left">
                                        <a class="level-item" aria-label="reply">
                                        <span class="icon has-text-success">
                                            <i class="fas fa-check-square"></i>
                                        </span>
                                        </a>
                                        <a class="level-item" aria-label="retweet">
                                        <span class="icon is-small">
                                            <i class="fas fa-trash-alt"></i>
                                        </span>
                                        </a>
                                        <a class="level-item" aria-label="like">
                                        <span class="icon has-text-danger">
                                            <i class="fas fa-ban"></i>
                                        </span>
                                        </a>
                                    </div>
                                    </nav>
                                </div>
                                </article>
                            </div>
                        </p>
                        </div>
                        <nav class="navbar" role="navigation" aria-label="main navigation">
                            
                            <div id="navbarBasicExample" class="navbar-menu">
                               <div class="navbar-start">
                                <a class="navbar-item" href="">
                                    <i class="fas fa-chevron-left"></i>
                                </a>
                                
                            </div>
                            <div id="navbarBasicExample" class="navbar-menu">
                                <div class="navbar-end">
                                 
                                 <a class="navbar-item">
                                     <i class="fas fa-chevron-right"></i>
                                 </a>
                             </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
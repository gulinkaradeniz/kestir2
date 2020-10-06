
<?php
if(isset($_SESSION['login'])){
    if($_SESSION['login'] == true){
        header('Location: uye_anasayfa.php');
        die();
    }
}
include "baglanti.php";

?>
<html>
    <head>
        <title>Anasayfa</title>
        <meta charset="utf-8">
        <script defer="" src="https://use.fontawesome.com/releases/v5.14.0/js/all.js"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.0/css/bulma.min.css">
    </head>
    <body>

            <div class="container">
                <div class="columns">
                    <div class="column is-6 is-offset-3">
                        <div class="card">
                            <div class="has-text-centered">
                                <div class="card-content">
                                    <p class="subtitle is-3">
                                        <img src="img\hair.png" width="200" height="200">
                                    </p>
                                    <?php include "sistemmesaji.php" ?>
                                    <form action="giriskontrol.php" method="POST">
                                        <p class="subtitle">
                                            <div class="field giris">
                                                <p class="control has-icons-left has-icons-right">
                                                <input class="input" type="phone" placeholder="Telefon numaranız" name="telefon" required>
                                                <span class="icon is-small is-left">
                                                    <i class="fas fa-phone"></i>
                                                </span>
                                                <span class="icon is-small is-right">
                                                    <i class="fas fa-check"></i>
                                                </span>
                                                </p>
                                            </div>
                                            <div class="field giris">
                                                <p class="control has-icons-left">
                                                <input class="input" type="password" placeholder="Şifre" name="sifre" required>
                                                <span class="icon is-small is-left">
                                                    <i class="fas fa-lock"></i>
                                                </span>
                                                </p>
                                            </div>

                                            <div class="field">
                                                <button class="button is-success is-fullwidth">
                                                    Giriş Yap
                                                </button>
                                            </div>
                                    </form>
                                    <div class="field">
                                        <button class="button is-success is-fullwidth" onclick="javascript:location.href='kayit_ol.php'">
                                            Kayıt Ol
                                        </button>
                                    </div>
                                    <div class="column has-text-centered">
                                        <a href="sifremi_unuttum.php">Şifremi Unuttum</a>
                                    </div>
                                    <nav class="navbar" role="navigation" aria-label="main navigation">
                                        <div id="navbarBasicExample" class="navbar-menu">
                                            <div class="navbar-end">
                                             
                                             <a class="navbar-item" onclick="document.getElementById('iletisim_modal').classList.add('is-active');">
                                                <i class="fas fa-phone"></i>
                                             </a>
                                         </div>
                                    </nav>
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
                        
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>


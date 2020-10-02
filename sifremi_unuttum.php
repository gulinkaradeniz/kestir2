<?php
   $telefon = $_POST['telefon'];
   $sifre = $_POST['sifre'];
?>
<html>
    <head>
        <title>Şifremi Unuttum</title>
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
                                    ŞİFREMİ UNUTTUM
                                </p>
                                <form action="sifrekontrol.php" method="POST">
                                    <p class="subtitle">
                                        <div class="container">
                                            <div class="field giris">
                                                <p class="control has-icons-left">
                                                <input class="input" type="phone" placeholder="Telefon numarası" name="telefon" required>
                                                <span class="icon is-small is-left">
                                                    <i class="fas fa-phone"></i>
                                                </span>
                                                </p>
                                            </div>
                                            
                                            <div class="field giris">
                                                <p class="control has-icons-left">
                                                <input class="input" type="password"placeholder="Yeni Şifre" name="sifre" required> 
                                                <span class="icon is-small is-left">
                                                    <i class="fas fa-lock"></i>
                                                </span>
                                                </p>
                                            </div>
                                            <div class="field">
                                                <button class="button is-success is-fullwidth">
                                                    Şifre Yenile
                                                </button>
                                            </div>
                                    
                                        
                                        </div>
                                    </p>
                                </form>
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
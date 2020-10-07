<?php include "baglanti.php";?>
<html>
    <head>
        <title>Üye Düzenle</title>
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
                                ÜYELERİ DÜZENLE
                            </p>
                            <?php include "sistemmesaji.php" ?>
                                <p class="subtitle">
                                    <form  action="admin_islem_kontrol.php" method="POST">
                                        
                                        <div class="has-text-centered">
                                            <div class="card-content">
                                            
                                            <p class="subtitle">
                                                <div class="content">
                                                <?php
                                               
                                                $sorgu = $mysqli->query("SELECT * FROM users");
                                                if($sorgu->num_rows>0){
                                                    while($satir=$sorgu->fetch_assoc()){?>
                                                    <p class="subtitle">
                                                        <div class="box">   
                                                            <div class="level-left">
                                                                <?php
                                                                $id = $satir['id']; 
                                                                echo $satir["id"]."-";
                                                                echo $satir["adsoyad"]."-";
                                                                echo $satir["telefon"];?>
                                                            </div>
                                                            <div class="level-right">
                                                                <a href="uye_sil.php?id=<?php echo $id; ?>" class="level-item" aria-label="retweet">
                                                                <span class="icon has-text-danger">
                                                                    <i class="fas fa-trash-alt"></i>
                                                                </span>
                                                                </a>
                                                                <a href="uye_duzenle.php?id=<?php echo $id; ?>" class="level-item" aria-label="like">
                                                                <span class="icon is-small">
                                                                    <i class="fas fa-pencil-alt"></i>
                                                                </span>
                                                                </a>
                                                            </div>
                                                                
                                                            
                                                        </div>
                                                    </p>
                                                        
                                                        <?php
                                                    }
                                                }
                                                ?>
                                                </div>
                                            </p>
                                            </div>
                                        </div>
                                    </form>
                                </p>
                            </div>
                        </div>
                        <nav class="navbar" role="navigation" aria-label="main navigation">
                        
                            <div id="navbarBasicExample" class="navbar-menu">
                                <div class="navbar-start">
                                <a class="navbar-item" href="admin_islem_ekle.php">
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
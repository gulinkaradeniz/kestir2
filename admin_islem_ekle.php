<?php include "baglanti.php";?>
<html>
    <head>
        <title>İşlem Düzenle</title>
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
                                İŞLEMLERİ DÜZENLE
                            </p>
                            <?php include "sistemmesaji.php" ?>
                                <p class="subtitle">
                                    <form  action="admin_islem_kontrol.php" method="POST">
                                        <div class="field giris">
                                            <p class="control has-icons-left">
                                            <input class="input" placeholder="İşlem" name="isim" required>
                                            <span class="icon is-small is-left">
                                                <i class="fas fa-plus"></i>
                                            </span>
                                            </p>
                                        </div>
                                        <div class="field giris">
                                            <p class="control has-icons-left">
                                            <input class="input"placeholder="..saat" name="sure" required>
                                            <span class="icon is-small is-left">
                                                <i class="fas fa-hourglass-start"></i>
                                            </span>
                                            </p>
                                        </div>
                                        <div class="field">
                                            <button class="button is-success is-warning is-fullwidth" >
                                                İşlem Ekle
                                            </button>
                                        </div>
                                        
                                        <div class="has-text-centered">
                                            <div class="card-content">
                                            <p class="subtitle is-3">
                                                İŞLEMLER
                                            </p>
                                            <p class="subtitle">
                                                <div class="content">
                                                <?php
                                               
                                                $sorgu = $mysqli->query("SELECT * FROM islemler");
                                                if($sorgu->num_rows>0){
                                                    while($satir=$sorgu->fetch_assoc()){?>
                                                    <p class="subtitle">
                                                        <div class="box">   
                                                            <div class="level-left">
                                                                <?php
                                                                $id = $satir['id']; 
                                                                echo $satir["id"]."-";
                                                                echo $satir["isim"]."-";
                                                                echo $satir["sure"]."&nbsp;"."saat"." ";?>
                                                            
                                                                <a href="sil.php?id=<?php echo $id; ?>" class="level-item" aria-label="retweet">
                                                                <span class="icon has-text-danger">
                                                                    <i class="fas fa-trash-alt"></i>
                                                                </span>
                                                                </a>
                                                                <a href="duzenle.php?id=<?php echo $id; ?>" class="level-item" aria-label="like">
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
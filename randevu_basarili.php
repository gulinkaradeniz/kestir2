<?php
include "loginkontrol.php";
include "baglanti.php";
?>
<html>
    <head>
        <title>Randevu Başarılı</title>
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
                                RANDEVULARINIZ
                            </p>
                            <?php include "sistemmesaji.php"; ?>
                            <p class="subtitle">
                                <div class="content">
                                <?php
                                $userid=intval($_SESSION['userid']);     
                                $sorgu = $mysqli->query("SELECT * FROM tasks WHERE user=$userid");
                                    if($sorgu->num_rows>0){
                                        while($satir=$sorgu->fetch_assoc()){?>
                                            <p class="subtitle">
                                                <div class="box">   
                                                    <div class="level-left">
                                                        <?php
                                                        echo $satir["taskdate"]."<br>";
                                                        
                                                        $dizi=array($satir["operations"]);
                                                        foreach($dizi as $islem){
                                                            $islem=intval($islem);
                                                            
                                                            $sorgu = $mysqli->query("SELECT * FROM islemler where id=$islem");
                                                            while($satir=$sorgu->fetch_assoc()){
                                                               
                                                                echo "Seçilen işlem=".$satir["isim"]."<br>";
                                                            }
                                                        }
                                                        
                                                        ?>

                                                        
                                                            
                                                                
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
                        <nav class="navbar" role="navigation" aria-label="main navigation">
                            
                            <div id="navbarBasicExample" class="navbar-menu">
                               <div class="navbar-start">
                                <a class="navbar-item" href="uye_anasayfa.php">
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
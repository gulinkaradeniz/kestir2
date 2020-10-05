<?php
include "loginkontrol.php";
include "baglanti.php";
if(isset($_POST['islemler'])) {
    $islemler = $_POST['islemler'];
    echo 'Seçtiğiniz islemler: <br/>';
    foreach($islemler as $islem) {
        echo ' * ' . $islem . ' <br/>';
    }
} 
?>
<html>
    <head>
        <title>İşlem Seçimi</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.0/css/bulma.min.css">
        <script defer="" src="https://use.fontawesome.com/releases/v5.14.0/js/all.js"></script>
    </head>
    <body>
        <div class="container">
            <div class="columns">
                <div class="column is-6 is-offset-3">
                    <div class="card">
                        <form action="islemlerkontrol.php" method="POST">
                            <div class="has-text-centered">
                                
                                <p class="subtitle is-3">
                                    İŞLEMLER
                                </p>
                               
                                <?php include "sistemmesaji.php" ?>
                                
                                <?php
                                
                                $sorgu = $mysqli->query("SELECT * FROM islemler");
                                if($sorgu->num_rows>0){
                                    while($satir=$sorgu->fetch_assoc()){?>

                                    <input type="checkbox"name="islemler[]" value="<?php echo $satir["isim"]; ?>">
                                
                                    <?php
                                    $id = $satir['id']; 
                                    echo $satir["isim"];?><br>
                                    </input>
                                    <?php
                                    }
                                }
                                ?>
                                 <div class="field">
                                        <button class="button is-success is-fullwidth" onclick="javascript:location.href='randevu_al.php'">
                                            Onayla
                                        </button>
                                    </div>
                               
                            </div>
                        </form>
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
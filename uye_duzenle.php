<?php 
include "baglanti.php";

$sorgu = $mysqli->query("SELECT * FROM users WHERE id =".(int)$_GET['id']); 
$sonuc = $sorgu->fetch_assoc(); 

?>
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
                                DÜZENLE
                            </p>
                            <?php include "sistemmesaji.php" ?>
                                <p class="subtitle">
                                    <form  action="" method="POST">
                                        <div class="field giris">
                                            <p class="control has-icons-left">
                                            <input class="input" placeholder="Ad Soyad" name="adsoyad" required value="<?php echo $sonuc['adsoyad']; ?>">
                                            <span class="icon is-small is-left">
                                                <i class="fas fa-user-edit"></i>
                                            </span>
                                            </p>
                                        </div>
                                        <div class="field giris">
                                            <p class="control has-icons-left">
                                            <input class="input"placeholder="Telefon" name="telefon" required value="<?php echo $sonuc['telefon']; ?>">
                                            <span class="icon is-small is-left">
                                                <i class="fas fa-phone"></i>
                                            </span>
                                            </p>
                                        </div>
                                       
                                        <div class="field">
                                            <button class="button is-success is-warning is-fullwidth" >
                                                Düzenlemeyi Kaydet
                                            </button>
                                        </div>
                                        
                                    </form>
                                </p>
                            </div>
                        </div>
                        <nav class="navbar" role="navigation" aria-label="main navigation">
                        
                            <div id="navbarBasicExample" class="navbar-menu">
                                <div class="navbar-start">
                                <a class="navbar-item" href="admin_uyeler.php">
                                    <i class="fas fa-chevron-left"></i>
                                </a>
                                
                            </div>
                            
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <?php 

        if ($_POST) {
            
            $adsoyad = $_POST['adsoyad'];
            $telefon = $_POST['telefon'];

            if ($adsoyad<>"" && $telefon<>"") { 
               
                if ($mysqli->query("UPDATE users SET adsoyad = '$adsoyad', telefon = '$telefon' WHERE id =".$_GET['id'])) 
                {
                    $_SESSION['sistemmesaji']="ÜYE DÜZENLENDİ.";
                    $_SESSION['sistemmesajicss']="is-link is-light";
                    header("location:admin_uyeler.php"); 
                
                }
                else
                {
                    echo "Hata oluştu"; 
                }
            }
        }
        ?>
    </body>
</html>

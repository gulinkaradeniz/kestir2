<?php 
include "baglanti.php";

$sorgu = $mysqli->query("SELECT * FROM islemler WHERE id =".(int)$_GET['id']); 
$sonuc = $sorgu->fetch_assoc(); 

?>
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
                                DÜZENLE
                            </p>
                            <?php include "sistemmesaji.php" ?>
                                <p class="subtitle">
                                    <form  action="" method="POST">
                                        <div class="field giris">
                                            <p class="control has-icons-left">
                                            <input class="input" placeholder="İşlem" name="isim" required value="<?php echo $sonuc['isim']; ?>">
                                            <span class="icon is-small is-left">
                                                <i class="fas fa-plus"></i>
                                            </span>
                                            </p>
                                        </div>
                                        <div class="field giris">
                                            <p class="control has-icons-left">
                                            <input class="input"placeholder="..saat" name="sure" required value="<?php echo $sonuc['sure']; ?>">
                                            <span class="icon is-small is-left">
                                                <i class="fas fa-hourglass-start"></i>
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
                                <a class="navbar-item" href="admin_islem_ekle.php">
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
            
            $isim = $_POST['isim'];
            $sure = $_POST['sure'];

            if ($isim<>"" && $sure<>"") { 
               
                if ($mysqli->query("UPDATE islemler SET isim = '$isim', sure = '$sure' WHERE id =".$_GET['id'])) 
                {
                    session_start();
                    $_SESSION['sistemmesaji']="İŞLEM DÜZENLENDİ.";
                    $_SESSION['sistemmesajicss']="is-link is-light";
                    header("location:admin_islem_ekle.php"); 
                
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

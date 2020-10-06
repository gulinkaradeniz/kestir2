<?php
include "loginkontrol.php";
include "baglanti.php";
if($_SESSION['isadmin'] == false){
    header('Location: index.php');
    die();
}
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
                                </p></br>
                            
                            <?php include "sistemmesaji.php" ?>
                            </div>
                            <button class="button is-success is-warning is-fullwidth" onclick="javascript:location.href='randevu_al.php'">
                                RANDEVU OLUŞTUR
                            </button></br>
                            <div class="control">
                                <div class="select is-danger">
                                    <select name="mySelect" onchange="myFunction(this)">
                                        <option value="bekleyen" <?= $_GET["sorgu"] == "bekleyen" ? "selected" : "" ?>>BEKLEYEN İŞLEMLER</option>
                                        <option value="iptal" <?= $_GET["sorgu"] == "iptal" ? "selected" : "" ?>>İPTAL OLAN İŞLEMLER</option>
                                        <option value="tamamlanan" <?= $_GET["sorgu"] == "tamamlanan" ? "selected" : "" ?> >TAMAMLANAN İŞLEMLER</option>
                                    </select>
                                </div>
                            </div>
                            <script>
                            function myFunction(m) {
                            window.location = '?sorgu=' + m.value;
                            }
                            </script>

                        <p class="subtitle" id="demo">
                            
                                <article class="media">
                                <div class="media-left">
                                    <!--<figure class="image is-64x64">
                                    <img src="https://bulma.io/images/placeholders/128x128.png" alt="Image">
                                    </figure>-->
                                </div>
                                <div class="media-content">
                                    <div class="content">
                                    <p>
                                    
                                    <div class="content">
                                    <?php
                                    $userid=intval($_SESSION['userid']);    
                                    $query = "SELECT * FROM tasks WHERE status=1 and iptal=0";
                                    if(isset($_GET['sorgu'])) {
                                        if($_GET['sorgu'] == "iptal") $query = "SELECT * FROM tasks WHERE iptal=1";
                                        if($_GET['sorgu'] == "bekleyen") $query = "SELECT * FROM tasks WHERE status=1 and iptal=0";
                                        if($_GET['sorgu'] == "tamamlanan") $query = "SELECT * FROM tasks WHERE  status=0";
                                    }

                                    $sorgu =$mysqli->query($query);
                                        if($sorgu->num_rows>0){
                                            while($satir=$sorgu->fetch_assoc()){?>
                                                <p class="subtitle">
                                                    <div class="box">   
                                                        <div class="level-relative">
                                                            <?php
                                                        
                                                            $tarih=date("d/m/Y ",strtotime($satir["taskdate"]));
                                                            $saat=date("H:i",strtotime($satir["taskdate"]));
                                                            $id=$satir["id"];
                                                            

                                                            $userid3=intval($satir["user"]);
                                                            $sorgu3 = $mysqli->query("SELECT * FROM users WHERE id='$userid3'");
                                                            while($satir3=$sorgu3->fetch_assoc()){
                                                                echo $satir3["adsoyad"]."-";
                                                                echo $satir3["telefon"]."<br>";

                                                            }
                                                            echo "Tarih:".$tarih."&nbsp;";
                                                            echo "Saat:".$saat."<br>";

                                                            
                                                            
                                                            $islem = $satir["operations"];
                                                            $dizi = explode (",",$islem);
                                                            
                                                            foreach($dizi as $anahtar => $deger){
                                                                $deger=intval($deger);
                                                                $sorgu2 = $mysqli->query("SELECT * FROM islemler WHERE id=$deger");
                                                                
                                                                while($s = $sorgu2->fetch_assoc()){
                                                                    echo $s["isim"]."&nbsp;";
                                                                   
                                                                }   
                                                            }
                                                            
                                                            
                                                            ?>   
                                                            <form method="POST">
                                                                <nav class="level is-mobile">
                                                                <div class="level-left">
                                                                    <a  href="islemtamam.php?id=<?php echo $id; ?>"class="level-item" aria-label="reply">
                                                                    <span class="icon has-text-success">
                                                                        <i class="fas fa-check-square"></i>
                                                                    </span>
                                                                    </a>
                                                                    
                                                                    <a class="level-item" aria-label="like">
                                                                    <span class="icon has-text-danger">
                                                                        <i class="fas fa-ban"></i>
                                                                    </span>
                                                                    </a>
                                                                </div>
                                                                </nav>
                                                            </form>     
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
                                </article>
                            
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
                                 
                                 <a class="navbar-item" href="admin_islem_ekle.php">
                                     <i class="fas fa-chevron-right"></i>
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
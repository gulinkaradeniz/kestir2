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
                        <form action="tarihsaat.php">
                            <div class="has-text-centered">
                                <div class="card-content">
                                <p class="subtitle is-3">
                                    İŞLEMLER
                                </p>
                                <p class="subtitle">
                                    <label class="checkbox">
                                        <input type="checkbox">
                                        1.İşlem 
                                    </label></br>
                                    <label class="checkbox">
                                        <input type="checkbox">
                                        2.İşlem 
                                    </label></br>
                                    <label class="checkbox">
                                        <input type="checkbox">
                                        3.İşlem 
                                    </label>
                                    <div class="field">
                                        <button class="button is-success is-fullwidth" onclick="javascript:location.href='tarihsaat.php'">
                                            Onayla
                                        </button>
                                    </div>
                                </p>
                                </div>
                            </div>
                        </form>
                        <nav class="navbar" role="navigation" aria-label="main navigation">
                            
                            <div id="navbarBasicExample" class="navbar-menu">
                               <div class="navbar-start">
                                <a class="navbar-item" href="uye_anasayfa.php">
                                    <i class="fas fa-chevron-left"></i>
                                </a>
                                
                            </div>
                            <div id="navbarBasicExample" class="navbar-menu">
                                <div class="navbar-end">
                                 
                                 <a class="navbar-item" href="tarihsaat.php">
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
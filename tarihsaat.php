<?php
include "loginkontrol.php";
?>
<html>
    <head>
        <title>Tarih/Saat Seçimi</title>
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
                                TARİH/SAAT
                            </p>
                            <p class="subtitle">
                                <form action="randevu_al.php">
                                    <div class="control">
                                        <label>Tarih:</label>
                                        <div class="select is-success">
                                            <select name="gun">
                                              <?php 
                                              for ($i=1; $i < 32; $i++) { 
                                                  echo "<option value=". $i .">".$i."</option>";
                                              }
                                              ?>
                                            </select>
                                        </div>
                                        <div class="select is-warning">
                                            <select>
                                                <option value="Ocak">Ocak</option>
                                                <option value="Şubat">Şubat</option>
                                                <option value="Mart">Mart</option>
                                                <option value="Nisan">Nisan</option>
                                                <option value="Mayıs">Mayıs</option>
                                                <option value="Haziran">Haziran</option>
                                                <option value="Temmuz">Temmuz</option>
                                                <option value="Ağustos">Ağustos</option>
                                                <option value="Eylül">Eylül</option>
                                                <option value="Ekim">Ekim</option>
                                                <option value="Kasım">Kasım</option>
                                                <option value="Aralık">Aralık</option>
                                            </select>
                                        </div>
                                    </div></br>
                                
                                    <div class="control">
                                        <label>Saat:</label>
                                        <div class="select is-danger">
                                            <select>
                                                <option value="10:00">10:00</option>
                                                <option value="11:00">11:00</option>
                                                <option value="12:00">12:00</option>
                                                <option value="13:00">13:00</option>
                                                <option value="14:00">14:00</option>
                                                <option value="15:00">15:00</option>
                                                <option value="16:00">16:00</option>
                                                <option value="17:00">17:00</option>
                                                <option value="18:00">18:00</option>
                                            </select>
                                        </div>
                                    </div></br>
                                    <div class="field">
                                        <button class="button is-success is-fullwidth" onclick="javascript:location.href='randevu_al.php'">
                                            Onayla
                                        </button>
                                    </div>
                                </form>
                            </p>
                            </div>
                        </div>
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
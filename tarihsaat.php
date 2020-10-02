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
                                <form action="randevu_basarili.php">
                                    <div class="control">
                                        <label>Tarih:</label>
                                        <div class="select is-success">
                                            <select>
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                                <option>6</option>
                                                <option>7</option>
                                                <option>8</option>
                                                <option>9</option>
                                                <option>10</option>
                                                <option>11</option>
                                                <option>12</option>
                                                <option>13</option>
                                                <option>14</option>
                                                <option>15</option>
                                                <option>16</option>
                                                <option>17</option>
                                                <option>18</option>
                                                <option>19</option>
                                                <option>20</option>
                                                <option>21</option>
                                                <option>22</option>
                                                <option>23</option>
                                                <option>24</option>
                                                <option>25</option>
                                                <option>26</option>
                                                <option>27</option>
                                                <option>28</option>
                                                <option>29</option>
                                                <option>30</option>
                                                <option>31</option>
                                            </select>
                                        </div>
                                        <div class="select is-warning">
                                            <select>
                                                <option>Ocak</option>
                                                <option>Şubat</option>
                                                <option>Mart</option>
                                                <option>Nisan</option>
                                                <option>Mayıs</option>
                                                <option>Haziran</option>
                                                <option>Temmuz</option>
                                                <option>Ağustos</option>
                                                <option>Eylül</option>
                                                <option>Ekim</option>
                                                <option>Kasım</option>
                                                <option>Aralık</option>
                                            </select>
                                        </div>
                                    </div></br>
                                
                                    <div class="control">
                                        <label>Saat:</label>
                                        <div class="select is-danger">
                                            <select>
                                                <option>10:00</option>
                                                <option>11:00</option>
                                                <option>12:00</option>
                                                <option>13:00</option>
                                                <option>14:00</option>
                                                <option>15:00</option>
                                                <option>16:00</option>
                                                <option>17:00</option>
                                                <option>18:00</option>
                                            </select>
                                        </div>
                                    </div></br>
                                    <div class="field">
                                        <button class="button is-success is-fullwidth" onclick="javascript:location.href='randevu_basarili.html'">
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
                                <a class="navbar-item" href="islemler.php">
                                    <i class="fas fa-chevron-left"></i>
                                </a>
                                
                            </div>
                            <div id="navbarBasicExample" class="navbar-menu">
                                <div class="navbar-end">
                                 
                                 <a class="navbar-item" href="randevu_basarili.php">
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
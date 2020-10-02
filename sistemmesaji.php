<?php 
session_start();
if(isset($_SESSION['sistemmesaji'])){
    ?>
    <div class="notification <?php echo $_SESSION['sistemmesajicss'] ?>">
    <?php echo $_SESSION['sistemmesaji'] ?>

    </div>

    <?php
    unset($_SESSION['sistemmesaji']);
}
?>

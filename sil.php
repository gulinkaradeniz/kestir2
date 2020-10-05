<?php 

if ($_GET) 
{

include("baglanti.php");

if ($mysqli->query("DELETE FROM islemler WHERE id =".(int)$_GET['id'])) 
{
    header("location:admin_islem_ekle.php");
}
}

?>
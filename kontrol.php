<?php


if(isset($_POST['telefon']) && isset($_POST['sifre'])) { // form gönderilmiş mi
   $telefon = $_POST['telefon'];
   $sifre = $_POST['sifre'];
 
   if(empty($telefon) || empty($sifre)) { // gönderilenler boş mu
      echo 'Lütfen boş bırakmayın';
   } else {
      if($telefon == '5558610317' && $sifre == 'admin1') { // bilgiler doğru mu
         session_start();
         $_SESSION['telefon'] = '5558610317';
         $_SESSION['login'] = true;
         header('Location: index.php');
        
      } else {
         echo 'Yanlış kullanıcı adı ya da şifre';
      }
   }
}
?>
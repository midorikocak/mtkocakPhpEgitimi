<?php
/**  
*
*               Mtkocak PHP Eğitimi
*           Bilişim ve İletişim Çalışanları
*                   Dayanışma Ağı
*           
*       Makine Mühendisleri Odası Beyoğlu Şubesi
*                   15.06.2012
*   
**/

// PHP değişkenlerin tiplerini önceden belirtmeye gerek yoktur.

$isim ="Mutlu Tevfik"; // Tırnak içinde değer verilen değişkenler string olarak algılanır
$soyad ="Koçak";
$dogumYili = 1984; //Tırnak kullanılmazsa PHP Derleyicisi değişkeni sayı kabul eder
$telefon = "05337428708";
$yas = 2012 - $dogumYili; //Değişkenler ile veri tipi doğruysa matematiksel işlem yapılabilir 

// Şimdi ekrana bir mesaj yazdıralım

$mesaj = "Merhaba $isim $soyad, $yas yaşındasınız.<br />"; // PHP derleyicisi mesajın içerisindeki değişkenleri gösterir.

#echo $mesaj;

// Merhaba Mutlu Tevfik Koçak, 2012-1984 yaşındasınız


$degiskensiz = 'Merhaba $isim $soyad, $yas yaşındasınız<br/>'; // Tek tırnak kullanıldığında içerideki değişkenler görülmezler.

// PHP degiskenleri html tagları yazdırmak için kullanılabilir

#echo $degiskensiz;

$islem = "Merhaba ".$isim." ".$soyad.", ".$yas." yaşındasınız.<br />";

echo $islem;

?>
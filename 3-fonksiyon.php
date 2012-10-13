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

// Bu örnekte Fonksiyonları anlayacağız.

// Girilen doğum yılından yaş hesaplayan bir fonksiyon yazalım.

function yasHesapla($dogumYili,$gecerliYil) 
{
    $sonuc = $gecerliYil-$dogumYili;
    return $sonuc;
}

$yas = yasHesapla(1984,2012); // Fonksiyonu bu şekilde çağırıyoruz, ürettiği değeri değişkene atıyoruz.

echo "Merhaba, ".$yas." yaşındasınız."; // Sonuçları bu şekilde ekrana yansıtıyoruz.

?>
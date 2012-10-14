<?php
/**  
*                    Merakli Bilişimci
*                   meraklibilisimci.com
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
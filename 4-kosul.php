<?php
/**  
*                    Merakli Bilişimci
*                   meraklibilisimci.com
**/
// Bu örnekte koşula bağlı çalışan ifadeleri ve dizileri anlayacağız.
// Dizi bir çok değişkeni bir arada tutan veri tipidir. Çekmeceye benzetebiliriz.

$ogrenciler = array('Mahir', 'Deniz', 'Yusuf', 'Hüseyin', 'Cevahir', 'Sinan', 'Erdal', 'Ulaş');

$ogrenciSayisi = sizeof($ogrenciler); // Bu default fonksiyon bize dizinin boyutunu verir, PHP'de bunun gibi bir çok default fonksiyonlar vardır. Biz bu eğitim son örneğinde zaman fonksiyonlarını kullanacağız.

if($ogrenciSayisi <= 10)
{
    // For döngüsünde $i adında bir sayaç oluşturduk. Portakalı soydum gibi :)
    // İlk değer sayacın başlangıcını
    // İkinci değer sayacın ulaşacağı değeri
    // Üçüncü değer ise sayacın kaçar kaçar artacağını söyler. Eğer tek tek artırmak istersek $i++ da yazabilirdik.
    // Benzer işlermi yapan while ve do while döngüleri de vardır.
    for($i=0;$i<$ogrenciSayisi;$i = $i+1)
    {
        echo $ogrenciler[$i]."<br/>";
    }
}
else 
{
    echo "Ogrencilerin sayisi 10'dan küçüktür.";
}

?>
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

// Bu biraz daha ileri fonksiyon örneğimizde PHP'nin zaman fonksiyonlarını kullanarak, herhangi bir tarihten, örneğin doğum tarihinizden bu yana, kabaca kaç yıl, kaç saat, kaç dakika, kaç saniye geçtiğini hesaplayacağız.

//Öncelikle fonksiyonumuzu oluşturalım

function neKadarZamanGecti($gun,$ay,$yil)
{
    $ilkTarihSaniye = mktime(0,0,0,$ay,$gun,$yil); // Girilen tarih ile 1 Ocak 1970 arasındaki saniye farkını söyler. Bu fonksiyonla ilgili daha fazla bilgi http://www.koodla.com/2008/11/23/php-mktime-ile-zaman-islemleri/
    
    $simdikiTarihSaniye = time(); // Şu andaki saniye ile 1 Ocak 1970 arasındaki saniye farkını söyler
    
    //Bu iki değeri birbirinden çıkardığımızda, verilen tarihten bu zamana kadar ne kadar saniye geçtiğini hesaplayabiliriz.
    
    $saniyeMiktari = $simdikiTarihSaniye-$ilkTarihSaniye;
    
    //Geçen gün ay yıl saniye ve dakikayı bulmamız gerekiyor.
    
    //Önce yılı hesaplayalım.
    
    $birYilSaniye = (365*24*60*60);
    $birAySaniye = (30*24*60*60); // Kolaylık olması açısından Ayları 30 gün olarak alıyoruz
    $birGunSaniye = (24*60*60);
    $birSaatSaniye = (60*60);
    $birDakikaSaniye = 60;
    
    $yil = floor($saniyeMiktari / $birYilSaniye); // Verilen saniyeyi yıllara böldük ve küsüratı attık.
    
    $saniyeMiktari = $saniyeMiktari - ($yil*$birYilSaniye); //Şimdi Elimizde Aylar var
    
    $ay = floor($saniyeMiktari / $birAySaniye);
    
    $saniyeMiktari = $saniyeMiktari - ($ay*$birAySaniye); //Şimdi Elimizde Günler var
    
    $gun = floor($saniyeMiktari / $birGunSaniye);
    
    $saniyeMiktari = $saniyeMiktari - ($gun*$birGunSaniye); //Şimdi Elimizde Saatler var
    
    $saat = floor($saniyeMiktari / $birSaatSaniye);
    
    $saniyeMiktari = $saniyeMiktari - ($saat*$birSaatSaniye); //Şimdi Elimizde Dakikalar var
    
    $dakika = floor($saniyeMiktari / $birDakikaSaniye);
    
    $saniyeMiktari = $saniyeMiktari - ($dakika*$birDakikaSaniye); //Şimdi Elimizde Saniyeler var
    
    //Kalan miktar sadece saniyelerdir.
    
    $saniye = $saniyeMiktari;
    
    $sonuc = array(
        'yil'=>$yil,
        'ay'=>$ay,
        'gun'=>$gun,
        'saat'=>$saat,
        'dakika'=>$dakika,
        'saniye'=>$saniye
        );
        
    return $sonuc;
}

//var_dump(neKadarZamanGecti(10,05,1984));

?>
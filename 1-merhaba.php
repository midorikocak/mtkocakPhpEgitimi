<?php

// PHP Derleyicisine Programın başladığını bildirir.
// Değişik türleri de vardır. 

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

//Örnek 1 - Merhaba Dünya

// Yorumlar istenirse bu şekilde girilirse PHP derleyicisi tarafından okunmazlar.

/*

    Ya da bu şekilde girilirse PHP  Derleyicisi tarafından okunmazlar

*/

$degisken ="Merhaba Dayanışma!"; // Bu bir değişkendir. Bellekte geçici olarak veri tutar. Program çalışıp bittiğinde hafızadan temizlenir. 

echo $degisken; // echo komutu değişkenin program tarafından ekrana yansıtılmasına yarar.

// PHP derleyicisine programın bittiğini bildirir
// Eğer karakterler bozuk görünüyorsa, browserin encoding ayarı UTF8'e çevirilecek
// Bunu daha sonra html kodlarıyla ayarlayacağız.

?>
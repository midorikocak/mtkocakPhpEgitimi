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

// Başka bir dosyadaki kodu çağırmak istediğimiz zaman include kullanırız. Şimdi bir önceki örnekte yazdığımız fonksiyonu kullanalım

include '6-gecenZaman.php';

?>
<!-- Html'de Tarayıcının okumasını istemediğimiz bölümleri bu şekilde belirtiyoruz. Yorum yapısına benzer -->
<!doctype HTML>
<html>
<head>
    <title>Mtkocak PHP Eğitimi</title>
    <!-- Karakter kodlaması burada yapılır. En güvenilir çözüm UTF-8 kullanmaktır. Çünkü evrensel kodlamayı araçlar. Çince sayfayı da, Türkçe sayfayı'da çözer.' -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <!-- Html'de Meta tagları kullanımı çok önemlidir. Arama motorları önce meta taglarını kontrol ederler. En iyi ve tek SEO yöntemi meta taglarinin olması ve kod ağacının hatasız olmasıdır. W3C Checker ile kod kontrol edilebilir. -->
</head>
<body>
    <section name="aciklama">
        <h1>Form ile veri işleme</h1>
        <p>Bu örnekte form üzerinden verileri alacak, hesaplayıp ekrana basacağız.</p>
        <section>
            <form method="post" action="<?php echo $PHP_SELF?>">
            <!-- GET ile POST arasındaki fark, get kullanırsak degiskenleri adres çubuğundan iletebiliriz. Ancak güvenli olduğu kesinlikle söylenemez. Genellikle POST kullanılır.-->
            <label for="ad">Ad: </label>
            <input type="text" id="1" name="ad">
            <br />
            <label for="soyad">Soyad: </label>
            <input type="text" id="2" name="soyad">
            <br />
            <label for="ad">Doğduğunuz gün: </label>
            <input type="text" id="3" name="gun">
            <br />
            <label for="ay">Doğduğunuz Ay: </label>
            <input type="text" id="4" name="ay">
            <br />
            <label for="yil">Doğduğunuz Yıl </label>
            <input type="text" id="5" name="yil">
            <br />
            
            <input type="submit" value="Gönder" name="submit">
        </form>
        <p><?php
    if(isset($_POST['submit'])) //Eğer formdan veriler gönderildiyse
    {
        $sure = neKadarZamanGecti($_POST['gun'],$_POST['ay'],$_POST['yil']);
        echo "Merhaba ".$_POST['ad']." ".$_POST['soyad']."<br/>";
        echo "Girdiğiniz tarihten bu yana ".$sure['yil']." yıl, ".$sure['ay']." ay, ".$sure['gun']." gün, ".$sure['saat']." saat, ".$sure['dakika']." dakika, ".$sure['saniye']." saniye geçmiş.";
    }
    ?>
</p>
</body>
</html>
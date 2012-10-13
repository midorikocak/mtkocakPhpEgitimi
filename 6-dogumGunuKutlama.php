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

// Burada Kullanıcıdan adını ve doğum tarihini isteyeceğiz. Eğer bu hafta içinde doğum günü varsa, belirteceğiz. Doğum günü bu gün ise kutlayacağız.

// Bunun için PHP içinde hazır bulunan zaman fonksiyonlarını kullanacağız.

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
        <p>Bu örnekte form üzerinden doğum tarihini alacak, doğum günü ise kutlayacağız.</p>
        <section>
            <form method="post" action="<?php echo $PHP_SELF?>">
            <!-- GET ile POST arasındaki fark, get kullanırsak degiskenleri adres çubuğundan iletebiliriz. Ancak güvenli olduğu kesinlikle söylenemez. Genellikle POST kullanılır.-->
            <label for="ad">Ad: </label>
            <input type="text" id="1" name="ad">
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
        echo "Merhaba ".$_POST['ad']."<br/>";
        // Bugünün tarihini alalım. Gün ve Ay şeklinde olsun.
        // Bunun için PHP'nin date fonksiyonunu kullanacağız.
        // date fonksiyonunun içine farklı opsiyonlar girerek tarih bilgisini istediğimiz gibi şekillendirebiliriz.
        $gun = date('j'); // Bu şekilde bu ayın içindeki günü aldık
        
        $ay = date('n'); // Bu şekilde yılın kaçıncı ayında olduğumuzu bulduk.
        
        // Bugünün tarihini gelen tarihle karşılaştıralım
        // Eğer iki tarih eşit ise doğum gününü kutlayalım
        
        $kalanAy = $_POST['ay']-$ay;
        $kalanGun = $_POST['gun']-$gun;
        
        if(($_POST['ay']==$ay) && ($_POST['gun']==$gun))
        {
            echo "Doğum gününüz kutlu olsun!";
        }
        
        // Eğer doğum gününe 7 günden az bir süre kaldıysa, bu hafta içinde doğum günü var mesajı yazdıralım.
        else if(($_POST['ay']==$ay) && ($kalanGun>0) && ($kalanGun<8))
        {
            echo "Doğum gününüz bu hafta içinde";
        }
        // iki durum da yoksa, doğum gününe kaç gün kaldığını söyleyelim.
        else
        {
            if($kalanAy<0)
            {
                $kalanAy = $kalanAy+12;
            }
            if($kalanGun<0)
            {
                $kalanGun = $kalanGun+30; // Kolaylık olması açısından bir ayı 30 gün olarak alıyoruz. Normalde hata olmaması için ayda kaç gün olduğunun kontrol edilmesi gerekir.
            }
            echo "Doğum gününüze ".$kalanAy." ay, ".$kalanGun." gün var.";
        }
    }
    ?>
</p>
</body>
</html>
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
        <h1>Form ile veri girişi</h1>
        <p>Bu örnekte form üzerinden verileri alarak, ekrana yazmayı öğreneceğiz.</p>
        <section>
            <form method="post" action="<?php echo $PHP_SELF?>">
            <!-- GET ile POST arasındaki fark, get kullanırsak degiskenleri adres çubuğundan iletebiliriz. Ancak güvenli olduğu kesinlikle söylenemez. Genellikle POST kullanılır.-->
            <label for="ad">Lütfen adınızı giriniz: </label>
            <input type="text" id="1" name="ad">
            <br />
            <input type="submit" value="Gönder" name="submit">
        </form>
        <p><?php
    if(isset($_POST['submit'])) //Eğer formdan veriler gönderildiyse
    {
        echo "Merhaba ".$_POST['ad']."!";
    }
    ?>
</p>
</body>
</html>
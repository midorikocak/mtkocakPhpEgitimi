<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js ie6" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8" lang="en"> <![endif]-->
<!--[if gt IE 8]><!-->  <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	
	<title>Social.ism: A Social Public Cloud Integration for Masses</title>
	
	<meta name="description" content="Bilgi Üniversity, 2012">
	<meta name="author" content="Mutlu Tevfik Koçak">
	<meta name="viewport" content="width=1024, user-scalable=no">
	
	<!-- Core and extension CSS files -->
	<link rel="stylesheet" href="../core/deck.core.css">
	<link rel="stylesheet" href="../extensions/goto/deck.goto.css">
	<link rel="stylesheet" href="../extensions/menu/deck.menu.css">
	<link rel="stylesheet" href="../extensions/navigation/deck.navigation.css">
	<link rel="stylesheet" href="../extensions/status/deck.status.css">
	<link rel="stylesheet" href="../extensions/hash/deck.hash.css">
	<link rel="stylesheet" href="../extensions/scale/deck.scale.css">
	
	<!-- Style theme. More available in /themes/style/ or create your own. -->
	<link rel="stylesheet" href="../themes/style/swiss.css">
	
	<!-- Transition theme. More available in /themes/transition/ or create your own. -->
	<link rel="stylesheet" href="../themes/transition/horizontal-slide.css">
	
	<script src="../modernizr.custom.js"></script>
</head>

<body class="deck-container">

<!-- Begin slides -->
<section class="slide" id="hosgeldiniz">
	<h2>Social.ism</h2>
</section>

<section class="slide" id="bilgi">
	<h2>İnernet Programlamaya Giriş</h2>
	<ul>
	    <li>
			<p>Mtkocak PHP Eğitimi 1. Seviye</p>
		</li>
		<li>
			<p>Mutlu Tevfik Koçak</p>
		</li>
		<li>
			<p>Bilişim ve İletişim Çalışanları Dayanışma Ağı</p>
		</li>
		<li>
			<p>Makine Mühendisleri Odası Beyoğlu Şubesi</p>
		</li>
	</ul>
</section>

<section class="slide" id="egitmen">
	<h2>Mtkocak Hakkında</h2>
	<ul>
	    <li>
			<p>Sabancı Üniversitesi Bilgisayar Mühendisliği</p>
		</li>
		<li>
			<p>2001 yılında ortaokulda HTML, lisede PHP</p>
		</li>
		<li>
			<p>7milyarinciinsan.com</p>
		</li>
		<li>
			<p>CakePHP</p>
		</li>
		<li>
			<p>Zumbara</p>
		</li>
		<li>
			<p>E-TimeCapsule</p>
		</li>
		<li>
			<p>Facebook'u tamamen tek başına 3 ayda yazmak</p>
		</li>
		<li>
			<p>Özgeçmiş: <a href="http://mtkocak.net/cv.pdf">http://mtkocak.net/cv.pdf</a></p>
		</li>
	</ul>
</section>

<section class="slide" id="1.seviye">
	<h2>1.Seviye</h2>
	<p>İlk aşamada PHP'ye yavaş ve kayarak giriş yapacağız. Buz patenini ilk defa öğrenir gibi. Önce ayakta durmayı öğreneceğiz. (Gerçi bilişim çalışanlarına basit gelebilir ama eğitimi herkes için planladım.) <strong>Bu ilk eğitimin sonunda PHP dilini tanıyacak ve kendi basit programcıklarınızı yazabilir hale geleceksiniz.</strong>
    <ul>
    	<li>PHP hakkında genel bir bilgi vermek, nedir ne işe yarar anlatmak.</li>
    	<li>PHP'nin syntax yapısından başlayarak dil hakkında bilgi vermek.</li>
    	<li>Örnek fonksiyonlarla çalışan bir kaç basit uygulama yapmak.</li>
    </ul>
</section>

<section class="slide" id="phpnedir">
	<h2>PHP Nedir?</h2>
	<p>PHP bir Programlama dilidir. Web üzerindeki sayfalar, sunucu üzerinde HTML formatında bulunurlar. HTML'yi gazete kağıdına benzetebiliriz. Statiktir. PHP ise dinamik sayfalar oluşturmaya yarar. PHP ile kullanıcıdan aldığımız bilgiyi işleyerek, geri iletebiliriz. Yazdığımız kodlar sunucu üzerindeki PHP derleyici programı tarafından okunur ve HTML sayfası oluşur. PHP ile masaüstü yazılımları dahi yapılabilir.</p>
</section>

<section class="slide" id="kimkullanır">
	<h2>PHP'yi kimler kullanır? Güvenli midir?</h2>
	<p>PHP güvenlidir, açık kaynaklıdır ve dünyanın heryerindeki geliştiriciler tarafından her gün güncellenmektedir.</p>
    <ul>
    	<li><strong>Facebook (400M Kullanıcı)</strong></li>
    	<li><strong>Wikipedia</strong></li>
    	<li><strong>Zynga (Farmwille)</strong></li>
    	<li><strong>Wordpress</strong></li>
    	<li><strong>Digg</strong></li>
    </ul>
</section>

<section class="slide" id="xampp">
	<h2>Xampp Kurulumu</h2>
	<p>XAMPP, açık kaynaklı bir çok uygulamayı bir arada kolayca yüklemeye yarayan bir programdır. İçinde Apache Web sunucusu, PHP, MySQL gibi bir çok teknolojiyi barındırır.</p>
	<p><a href="http://www.apachefriends.org/en/xampp.html">http://www.apachefriends.org/en/xampp.html</a> adresinden indirip kuralım</p>
</section>

<section class="slide" id="degiskenler">
	<h2>Değişkenler</h2>
    <ul>
    	<li>PHP dosyalarının uzantıları .php ile biter.</li>
    	<li>PHP Derleyicisi <?php ?> işaretleri arasındaki kodları okur</li>
    	<li>Yorumlar // /* */</li>
    	<li>Değişken</li>
    	<li>Echo</li>
    	<li>1-merhaba.php</li>
    </ul>
    
    	<pre><code><?php highlight_string('
<?php
    $degisken = "Deniz";
    echo $degisken;
?>
    	    ');?></code></pre>
</section>

<section class="slide" id="veritipleri">
	<h2>Yazı ve Sayı Tipleri</h2>
    <ul>
    	<li>PHP veri tipini otomatik tanır</li>
    	<li>Tırnak içindekiler metin</li>
    	<li>Sayıya eşit olanlar sayı olarak tanınır</li>
    	<li>Değişkene veri atanırken işlem yapılabilir</li>
    	<li>2-islem.php</li>
    </ul>
	<pre><code><?php highlight_string('
	<?php
        $degisken = 15*(60-20);
        echo $degisken;
    ?>
	'); ?></code></pre>
</section>

<section class="slide" id="fonksiyonlar">
	<h2>Fonksiyonlar</h2>
	<p>Fonksiyonlar belli bir kod bloğunu tekrar kullanmak amacıyla kullanılır</p>
    <ul>
    	<li>Veri alabilirler</li>
    	<li>Veri döndürebilirler</li>
    </ul>
	<pre><code><?php highlight_string('
<?php
    function fonksiyonum($girdi)
    {
        $cikti = $girdi*2;
        return $cikti;
    }
?>
	    ');?></code></pre>
</section>

<section class="slide" id="kosulluifadeler">
	<h2>Koşullu ifadeler</h2>
	<p>Farklı durumlara farklı tepkiler verebilmeyi sağlar</p>
    <ul>
    	<li>if, else</li>
    	<li>Veri döndürebilirler</li>
    </ul>
	<pre><code><?php highlight_string('
<?php
    if(4>5)
    {
        echo "Dört Beşten büyüktür."
    }
    else
    {
        echo "Değildir";
    }
?>
	    ');?></code></pre>
</section>

<section class="slide" id="diziler">
	<h2>Diziler</h2>
	<p>Dizi bir çok değişkeni bir arada tutan veri tipidir. Çekmeceye benzetebiliriz.</p>
    <ul>
    	<li>Dizi birden çok eleman alabilir.</li>
    	<li>Dizi elemanlarına örneğin $dizi[0] şeklinde erişilebilir.</li>
    </ul>
	<pre><code><?php highlight_string("
<?php
    \$dizi = array('eleman1','eleman2');
?>
	    "); ?></code></pre>
</section>

<section class="slide" id="donguler">
	<h2>Döngüler</h2>
	<p>Aynı kod parçasının belli bir koşula göre birden çok kez tekrarlanmasını sağlar</p>
    <ul>
    	<li>for, while, do-while şeklinde türleri vardır.</li>
    	<li>Aşağıdaki program 0'dan 100'e kadar ekrana sayıları basar</li>
	<pre><code><?php highlight_string('
<?php
    for($i=0;$i<=100;$i = $i+2)
    {
        echo $i."<br/>";
    }
?>
	    ');?></code></pre>
</section>

<section class="slide" id="formveri">
	<h2>Form ile veri girmek</h2>
	<p>HTML sayfasından inputları alıp ekrana yazacağız</p>
    <ul>
    	<li>5-formVeriGirisi.php</li>
    </ul>
</section>

<section class="slide" id="dogumgunu">
	<h2>Doğum günü kutlama</h2>
	<p>HTML sayfasından aldığımız doğum tarihini işleyecek ve doğum günü kutlayacağız.</p>
    <ul>
    	<li>6-dogumGunuKutlama.php</li>
    </ul>
</section>

<section class="slide" id="kutuphane">
	<h2>Fonksiyon Kütüphanesi</h2>
	<p>Aldığı tarihten bu yana ne kadar yıl, ay ve gün geçtiğini hesaplayan fonksiyon.</p>
    <ul>
    	<li>7-gecenZaman.php</li>
    </ul>
</section>

<section class="slide" id="formveriisleme">
	<h2>Formdan gelen veriyi işlemek</h2>
	<p>Bir önceki örnekteki kütüphaneyi kullanarak bilgileri alıp, işleyip, yanıt vereceğiz.</p>
    <ul>
    	<li>8-formVeriIsleme.php</li>
    </ul>
</section>

<section class="slide" id="siniflar">
	<h2>Sınıf Nedir?</h2>
	<p>Sınıflar, kavramsal veya gerçek hayatta kullanılan varlıkların bilgisayar ile modellenmesine yarar. Örneğin Arkadaşlarımızın doğum tarihlerini bilgisayarda tutan bir program yazmak istiyoruz. O zaman Bir adet Arkadaş Listesine ve bu listeye üye olacak arkadaşlara ihtiyacımız var. Öncelikle Arkadaş sınıfını modelleyerek işe başlayabiliriz.</p>
    <ul>
    	<li>9-siniflar.php</li>
    </ul>
</section>

<section class="slide" id="sinifornek">
	<h2>Örnek Sınıf</h2>
    <pre><code><?php highlight_string('
<?php
    class Arkadas
    {
        public $adi;
        public $soyadi;
        private $anneKizlikSoyadi;
        
        function isimVer($isim)
        {
            $this->adi = $isim;
        }
            
        function adiniSoyle()
        {
            return $this->adi;
        }
    }
    
    $yeniArkadas = new Arkadas;
    $yeniArkadas->isimVer("Deniz");
    echo $yeniArkadas->adiniSoyle();
    
?>');?></code></pre>
</section>

<section class="slide" id="tesekkurler">
	<h1>Teşekkürler</h1>
</section>

<section class="slide" id="iletisim">
	<h2>İletişim</h2>	
	<ul>
		<li>
			<strong>E-posta</strong>: mtkocak@gmail.com
		</li>
		
		<li>
			<strong>Blog</strong>: <a href="http://www.mtkocak.net">http://www.mtkocak.net</a>
		</li>
		
		<li>
			<strong>Yazılım harici çalışmalar</strong>: <a href="http://www.mtkocak.com">http://www.mtkocak.com</a>
		</li>

		<li>
			<strong>Twitter</strong>: <a href="http://www.twitter.com/mtkocak">http://www.twitter.com/mtkocak</a>
		</li>
		
		<li>
			<strong>Facebook</strong>: <a href="http://www.facebook.com/mtkocak">http://www.facebook.com/mtkocak</a>
		</li>

		<li>
			<strong>Linkedin</strong>: <a href="http://www.linkedin.com/pub/mutlu-tevfik-kocak/9/151/766">http://www.linkedin.com/pub/mutlu-tevfik-kocak/9/151/766</a>
		</li>
	</ul>
</section>

<!-- deck.navigation snippet -->
<a href="#" class="deck-prev-link" title="Previous">&#8592;</a>
<a href="#" class="deck-next-link" title="Next">&#8594;</a>

<!-- deck.status snippet -->
<p class="deck-status">
	<span class="deck-status-current"></span>
	/
	<span class="deck-status-total"></span>
</p>

<!-- deck.goto snippet -->
<form action="." method="get" class="goto-form">
	<label for="goto-slide">Go to slide:</label>
	<input type="text" name="slidenum" id="goto-slide" list="goto-datalist">
	<datalist id="goto-datalist"></datalist>
	<input type="submit" value="Go">
</form>

<!-- deck.hash snippet -->
<a href="." title="Permalink to this slide" class="deck-permalink">#</a>


<!-- Grab CDN jQuery, with a protocol relative URL; fall back to local if offline -->
<script src="//ajax.aspnetcdn.com/ajax/jQuery/jquery-1.7.min.js"></script>
<script>window.jQuery || document.write('<script src="../jquery-1.7.min.js"><\/script>')</script>

<!-- Deck Core and extensions -->
<script src="../core/deck.core.js"></script>
<script src="../extensions/hash/deck.hash.js"></script>
<script src="../extensions/menu/deck.menu.js"></script>
<script src="../extensions/goto/deck.goto.js"></script>
<script src="../extensions/status/deck.status.js"></script>
<script src="../extensions/navigation/deck.navigation.js"></script>
<script src="../extensions/scale/deck.scale.js"></script>

<!-- Initialize the deck -->
<script>
$(function() {
	$.deck('.slide');
});
</script>

</body>
</html>

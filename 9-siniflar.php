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

// Bu en son örneğimizde Sınıf yapısını anlayacak, bir sınıf oluşturacağız.
// Sınıflar, kavramsal veya gerçek hayatta kullanılan varlıkların bilgisayar ile modellenmesine yarar. Örneğin Arkadaşlarımızın doğum tarihlerini bilgisayarda tutan bir program yazmak istiyoruz. O zaman Bir adet Arkadaş Listesine ve bu listeye üye olacak arkadaşlara ihtiyacımız var. Öncelikle Arkadaş sınıfını modelleyerek işe başlayabiliriz.

class Arkadas
{
    public $id; // Aynı isimli arkadaşlarımızı karıştırmamak için numara belirliyoruz.
    public $adi; // Öncelikle bu sınıfın özelliklerini belirliyoruz.
    public $dogumTarihi; // Doğum tarihi olarak timestamp kullanacağız.
    //private $anneKizlikSoyadi;
    
    function setAdi($isim) // get set fonksiyonları sınıflarda sık sık karşımıza çıkarlar
    {
        $this->adi = $isim; // set fonsiyonu üyenin özelliğini değiştirirken, (This kelimesi bu sınıfın kendi özelliğine erişmeye yarıyor.)
    }
    
    function __construct($isim) // Yeni bir liste oluşturulduğu anda çalışacak olan fonksiyon
    {
        $this->setAdi($isim); // This kelimesi burada sınıfın kendi metodunu kullanağımızı belirtiyor.
    }
    
// Public demek bu sınıfın üyelerinin bu bilgilerine başka sınıflardan da erişim olabileceğini belirtir. Eğer private özelliğini kullansaydık bu özelliğe sadece bu sınıfın içerisindeki foksiyonlar erişebilirdi.
    
    // Sınıfların bir de metodları vardır. Bu metodlar sınıflar ile yapılabilecek işlemleri belirlerler.
    

    
    function getAdi() // get fonksiyonu üyenin özelliğini çekmeye yarar.
    {
        return $this->adi;
    }
    
    function setDogumTarihi($gun,$ay,$yil)
    {
        $this->dogumTarihi = mktime(0,0,0,$ay,$gun,$yil);
    }
    
    function getDogumTarihi()
    {
        return $this->dogumTarihi;
    }
    
    function setId($numara)
    {
        $this->id = $numara;
    }
    
    function getId($numara)
    {
        return $this->id;
    }
    
}

class ArkadasListesi
{
    public $listeAdi; // Listemize isim verelim
    public $liste; // Arkadaşlarımızı üye yapacağımız liste için değişken yarattık
    public $sonId; // Üye eklerken kolaylık olması açısından, id için bu sayıya ihtiyacımız var.
        
    function __construct($isim) // Yeni bir liste oluşturulduğu anda çalışacak olan fonksiyon
    {
        $this->liste = array();
        $this->sonId = 0;
        $this->setListeAdi($isim);
    }
    
    function setListeAdi($isim)
    {
        $this->listeAdi = $isim;
    }
    
    function getListeAdi()
    {
        return $this->listeAdi;
    }
    
    function getListe()
    {
        return $this->liste;
    }
    
    function getSonId()
    {
        return $this->sonId;
    }
    
    function addArkadas($arkadas) // Bu fonksiyonla listemize yeni arkadaş ekliyoruz. 
    {
        // İlk başta oluşturduğumuz listeye arkadaşımızı ekleyelim
        array_push($this->liste,$arkadas);
        
        // Ekledikten sonra sonId'yi 1 artıralım;
        $this->sonId++;
        
        $arkadas->setId($this->sonId); //Id bilgisini arkadasa ekleyelim
    }
    
}
$liste = new ArkadasListesi("Okul Arkadaşlarım"); // Yeni liste oluşturalım

$mahir = new Arkadas("Mahir");
$mahir->setDogumTarihi(14,8,1945);
$liste->addArkadas($mahir);

$deniz = new Arkadas("Deniz");
$deniz->setDogumTarihi(22,2,1947);
$liste->addArkadas($deniz);

$yusuf = new Arkadas("Yusuf");
$yusuf->setDogumTarihi(1,1,1947);
$liste->addArkadas($yusuf);

$huseyin = new Arkadas("Hüseyin");
$huseyin->setDogumTarihi(1,1,1949);
$liste->addArkadas($huseyin);

$cevahir = new Arkadas("Cevahir");
$cevahir->setDogumTarihi(1,1,1947);
$liste->addArkadas($cevahir);

$sinan = new Arkadas("Sinan");
$sinan->setDogumTarihi(15,11,1944);
$liste->addArkadas($sinan);

$erdal = new Arkadas("Erdal");
$erdal->setDogumTarihi(25,9,1964);
$liste->addArkadas($erdal);

$ulas = new Arkadas("Ulaş");
$ulas->setDogumTarihi(1,1,1947);
$liste->addArkadas($ulas);

var_dump($liste);

?>
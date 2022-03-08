<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anasayfa</title>
    <link rel="stylesheet" href="css/style.css">

    <script src="https://kit.fontawesome.com/c20485228a.js" crossorigin="anonymous"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300&display=swap" rel="stylesheet">


<link rel="stylesheet" href="ovl/owl.carousel.min.css">
<link rel="stylesheet" href="ovl/owl.theme.default.min.css">

</head>
<body>
    
<section id="menu">
    <div id="logo">RİTECH</div>
    <nav>
        <a href=""><i class="fas fa-home  ikon"></i>Anasayfa</a>
        <a href=""><i class="fas fa-info  ikon"></i>Hakkımızda</a>
        <a href=""><i class="fas fa-briefcase  ikon"></i>Portfolyo</a>
        <a href=""><i class="fas fa-user-friends  ikon"></i>Ekip</a>
        <a href=""><i class="fas fa-headphones-alt  ikon"></i>İletişim</a>        
    </nav>
</section>

<section id="Anasayfa">
    <div id="black">

    </div>
    <div id="icerik">
        <h2>Ritech</h2>
        <hr width=300 align=left>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Enim deserunt numquam labore, iusto nesciunt delectus voluptas similique modi sed dolorem at, placeat corrupti.
             Explicabo architecto, nesciunt nobis consequatur cupiditate recusandae.</p>

    </div>
</section>
<section id="Hakkimizda">
    <h3>Hakkımızda</h3>
    <div class="container">
        <div id="sol">
            <h5 id="h5sol">Lorem ipsum dolor sit amet consectetur, 
                adipisicing elit. Possimus esse mollitia dolore eius
            </h5>
        </div>
        <div id="sag">
            <span>L</span>
            <p id="psag">orem ipsum dolor sit amet consectetur adipisicing elit.
                 Beatae labore omnis itaque amet aliquid? Fugit nobis esse soluta,
                  eius sequi facere aliquid? Natus, 
                minus! Culpa corrupti sed accusamus voluptates ea?</p>
        </div>

        <img src="img/about.jpg" alt=""
        class="img-fluid mt100">
        <p id="pson">Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            Fuga placeat earum ipsa adipisci alias, 
            similique mollitia iste provident nulla delectus corrupti amet quas veniam rerum asperiores!
             Explicabo impedit cupiditate esse.</p>

    </div>

</section>

<section id="Portfolyo">
    <div class="container">
        <h3>Portfolyo</h3>
        <div class="owl-carousel owl-theme">
            <div class="card item" data-merge=1.5>
                <img src="img/r2.jpg" alt="" class="img-fluid">
                <h5 class="baslikis">İşler</h5>
                <p class="isp">Lorem ipsum dolor,
                     sit amet consectetur adipisicing elit. Sint, fugiat.</p>
                     
            </div>
            <div class="card item" data-merge=1.5>
                <img src="img/r2.jpg" alt="" class="img-fluid">
                <h5 class="baslikis">İşler</h5>
                <p class="isp">Lorem ipsum dolor,
                     sit amet consectetur adipisicing elit. Sint, fugiat.</p>
                     
            </div>
            <div class="card item" data-merge=1.5>
                <img src="img/r2.jpg" alt="" class="img-fluid">
                <h5 class="baslikis">İşler</h5>
                <p class="isp">Lorem ipsum dolor,
                     sit amet consectetur adipisicing elit. Sint, fugiat.</p>
                     
            </div>
        </div>
    </div>
</section>
<section id="Ekip">
    <div class="container">
        <h3 id="Ekiph3">Ekip</h3>

        <div class="sutun-sol-sag">
            <img src="img/ekip1.jpg" alt="" class="img-fluid oval">
            <h4 class="ekipisim">MUSTAFA AY</h4>
            <p class="ekipp">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Voluptatem, placeat.
            </p>
            <div class="ekip-ikon">
                <a href="#"><i class="fab fa-facebook-square social"></i></a>
                <a href="#"><i class="fab fa-instagram social"></i></a>
                <a href="#"><i class="fab fa-twitter social"></i></a>
            </div>
        </div>

        <div class="sutun-sol-sag">
            <img src="img/ekip2.jpg" alt="" class="img-fluid oval">
            <h4 class="ekipisim">isa cetin</h4>
            <p class="ekipp">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Voluptatem, placeat.
            </p>
            <div class="ekip-ikon">
                <a href="#"><i class="fab fa-facebook-square social"></i></a>
                <a href="#"><i class="fab fa-instagram social"></i></a>
                <a href="#"><i class="fab fa-twitter social"></i></a>
            </div>
        </div>

        <div class="sutun-sol-sag">
            <img src="img/ekip3.jpg" alt="" class="img-fluid oval">
            <h4 class="ekipisim">memet hatay</h4>
            <p class="ekipp">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Voluptatem, placeat.
            </p>
            <div class="ekip-ikon">
                <a href="#"><i class="fab fa-facebook-square social"></i></a>
                <a href="#"><i class="fab fa-instagram social"></i></a>
                <a href="#"><i class="fab fa-twitter social"></i></a>
            </div>

        </div>

    </div>

</section>

<section id="İletisim">
    <div class="container">
        <h3 id="h3İletisim">İletişim</h3>
        <form action="index.php" method="post">
        <div id="İletisimopak">
            <div id="formgroup">
                <div id="solform">
                    <input type="text" name="isim" placeholder="Ad Soyad" required class="form-control">
                    <input type="text" name="tel" placeholder="Telefon Numarası"required class="form-control">
                </div>
                <div id="sagform">
                    <input type="email" name="mail" placeholder="Email Adresiniz" required class="form-control">
                    <input type="text" name="konu" placeholder="Konu Başlığı"required class="form-control">
                </div>
                <textarea name="mesaj" id="" cols="30" placeholder="Mesaj Girin" rows="10" required class="form-control"></textarea>

                <input type="submit" 
                value="Gönder">

            </div>

            <div id="adres">
                <h4 id="Adresbaslik">Adres : </h4>
                <p class="adresp">Narlıca Mah.</p>
                <p class="adresp">Atatürk Caddesi</p>
                <p class="adresp">18. Sokak No:1/2</p>
                <p class="adresp">03262344444</p>
                <p class="adresp">Email : mustafa@hotmail.com</p>
            </div>
        </div>
        </form>
        <footer>

            <div id="copyright">2021 Tüm Hakları Saklıdır</div>

            <div id="socialfooter">
                <a href="#"><i class="fab fa-facebook-square social"></i></a>
                <a href="#"><i class="fab fa-instagram social"></i></a>
                <a href="#"><i class="fab fa-twitter social"></i></a>
            </div>
            <a href="#menu"><i class="fas fa-angle-up" id="up"></i></a>
        </footer>
    </div>
</section>
<script
  src="https://code.jquery.com/jquery-3.6.0.slim.min.js"
  integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI="
  crossorigin="anonymous"></script>
<script src="ovl/owl.carousel.min.js"></script>
<script src="ovl/script.js"></script>
</body>
</html>


<?php

include("baglanti.php");
if(isset($_POST["isim"],$_POST["tel"],$_POST["mail"],$_POST["konu"],$_POST["mesaj"]))
{
    $adsoyad=$_POST["isim"];
    $telefon=$_POST["tel"];
    $mail=$_POST["mail"];
    $konu=$_POST["konu"];
    $mesaj=$_POST["mesaj"];


    $ekle="INSERT INTO iletisim( adsoyad, telefon, email, konu, mesaj) 
    VALUES ('".$adsoyad."','".$telefon."','".$mail." ','".$konu." ','".$mesaj."')";

    if($baglan->query($ekle)===true)
    {
        echo "<script>alert('mesajınız başarı ile gönderilmiştir')</script>";
    }

    else{
        echo "<script>alert('mesajınız gönderilirken hata oluştu')</script>";
    }

}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <title>MEDICORIUM</title>
</head>

<body>
    <div class="top-bar container">
        <div class="d-inline-flex p-2 bd-highlight"><i class="fa-solid fa-bullhorn"></i></div>
        <div class="d-inline-flex p-2 bd-highlight first-text"><a href="#">DUYURULARIMIZ:</a> </div>
        <div class="d-inline-flex p-2 bd-highlight second-text">Çocuk Obezitesi ile Mücadele Edin!..</div>
        <div class="d-inline-flex p-2 bd-highlight"> <i class="fa-solid fa-clock"></i></div>
        <div class="d-inline-flex p-2 bd-highlight third-text">24-12-2014</div>
        <div class="d-inline-flex p-2 bd-highlight fourth-text"> TEL: +90 (212) 234 00 01 | GSM: +90 (552) 413 11 43</div>
        <div class="d-inline-flex p-2 bd-highlight fifth-text">SOSYAL AĞLAR: </div>
        <div class="d-inline-flex p-2 bd-highlight text-6"><a href="#"><i class="fa-brands fa-facebook"></i></a></div>
        <div class="d-inline-flex p-2 bd-highlight text-7"><a href="#"><i class="fa-brands fa-twitter"></i></a></div>
        <div class="d-inline-flex p-2 bd-highlight text-8"><a href="#"><i class="fa-brands fa-google-plus"></i></a></div>
    </div>
    <!-- topbarend -->

    <div class="progress container" style="height: 2px;">
        <div class="progress-bar" role="progressbar" style="width: 5%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
    </div>
    <!-- progressbarend -->
    @yield('section')

    <footer>
        <div class="container footer-section">
            <div class="row">
                <div class="col-4 mt-3">
                    <div class="footer-menu-1">
                        <h6>NAVİGASYON MENÜ</h6>
                        <div class="div d-flex">
                            <span>line</span>
                            <span>line</span>
                        </div>

                        <li style="margin-top:-15px"><a href="#">Ana Sayfa</a></li>
                        <li class="active"><a href="#">Kurumsal</a></li>
                        <li><a href="#">Doktorunuza Soru Sorun!</a></li>
                        <li><a href="#">Obezite Cerrahisi Uygunluk Formu</a></li>
                        <li><a href="#">Vücut Kitle Endeksi Hesaplama</a></li>
                        <li><a href="#">Güncel Sağlık Rehberi</a></li>
                        <li><a href="#">Belgeler</a></li>
                        <li><a href="#">Video Galeri</a></li>
                        <li><a href="#">İletişim</a></li>
                    </div>
                </div>
                <div class="col-4 mt-4">
                    <div class="footer-menu-1">
                        <h6>TEDAVİLERİMİZ VE TETKİKLERİMİZ</h6>
                        <div class="div d-flex">
                            <span>line</span>
                            <span>line</span>
                        </div>

                        <li style="margin-top:-15px"><a href="#">Genel Cerrahi</a></li>
                        <li><a href="#">Obezite & Metabolizma Cerrahisi</a></li>
                        <li><a href="#">Endoskopi</a></li>
                    </div>
                </div>
                <div class="col-4 mt-4 contact-menu text-white">
                    <div class="footer-menu-1">
                        <h6>İLETİŞİM BİLGİLERİMİZ</h6>
                        <div class="div d-flex">
                            <span>line</span>
                            <span>line</span>
                        </div>
                        <div class="div" style="font-size: 15px;">
                            <p style="margin-top:-15px">+90 (212) 234 00 01 <i class="fa-solid fa-phone"></i></p>
                            <p>+90 (552) 413 11 43 <i class="fa-solid fa-mobile"></i></p>
                            <p>info@medicorium.com <i class="fa-solid fa-at"></i></p>
                            <p>Murat Üstün Obezite ve Metabolik Cerrahi <i class="fa-solid fa-house"></i> <br>Merkezi Mim Kemal Öke cad. No:11 K:2 <br> Nişantaşı /Şişli İSTANBUL</p>
                            <p class="mt-3">COPYRIGHT <i class="fa-solid fa-copyright"></i> 2014</p>
                        </div>
                    </div>
                </div>
            </div>


        </div>
        <div class="div" style="background-color: #226fb3; ">
            <p style="color: 
            #ccccccbb; margin-top: 10px; padding-bottom: 10px; margin-left: 80px; font-size: 13px; padding-top: 10px;">Bu sitede yer alan görsel, içerik ve bilgi anlamında ki tüm yazı ve makaleler bilgilendirme amaçlıdır. Herhangi bir şekilde asla tedavi unsuru ve tedavi önerisi taşımaz. Site içeriğini tanı ve tedavi aracı olarak kullanımından doğacak tüm<br>sorumluluk
                ve sonuçlar kişiye aittir. Zira, tanı ve tedavi, hastanın durumuna bağlı olmakla birlikte her hasta için farklılıklar gösterebilir. Bunun yanında, tıpta tanı ve tedavi, teknolojinin gelişmesi ile her geçen gün farklılaşmaktadır ve
                <br>gelişmektedir. Sitemizde verilen bilgiler her gün yenilenmediğinden, tüm bilgiler kişinin doktoruna danışılarak kontrol edilmelidir. İçerik görsel v.b. içeriklerin tümünün Tüm Hakları Saklıdır.
            </p>
        </div>
    </footer>
    <!-- footer end -->
    @yield('script')

</body>

</html>
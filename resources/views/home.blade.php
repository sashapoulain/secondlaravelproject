@extends('layouts.app') @section('section')
<section class="header-section">
    <div class="container mt-4 header">
        <div class="row">
            <div class="col-8 d-flex">
                <div class="col">
                    <img src="{{asset('assets/img/logo.jpeg')}}" alt="">
                </div>
                <div class="col image-text">
                    <h2>Medicorium</h2>
                    <p>Obezite ve Metabolik Cerrahi Merkezi</p>
                </div>
            </div>
            <div class="col-4">
                <form id="form" role="search" class="search">
                    <input type="search" id="query" name="search" placeholder="Aranacak kelimeyi yazınız" aria-label="Search through site content">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- header-section end -->

<section class="content-section">
    <nav class="navbar navbar-rd">
        <div class="hamburger">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
        </div>
        <ul class="nav-links">
            <li><a href="#"><i class="fa-solid fa-house"></i> ANA SAYFA</a></li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" href="#">KURUMSAL</a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" href="#">GENEL CERRAHİ</a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" href="#">OBEZİTE & METABOLİZMA CERRAHİSİ</a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" href="#">ENDOSKOPİ</a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
            </li>
            <li><a href="#">GÜNCEL SAĞLIK REHBERİ</a></li>
            <li><a href="#">BELGELER</a></li>
            <li><a href="#">İLETİŞİM</a></li>
        </ul>
    </nav>
    <!-- navbarend -->
    <div class="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#"><i class="fa-solid fa-house"></i> Ana Sayfa</a></li>
            <li class="breadcrumb-item active" aria-current="page">Obezite & Metabolizma Cerrahisi</li>
            <li class="breadcrumb-item active" aria-current="page">Obezite Vegal Siniri Harap Ediyor!</li>
        </ol>
    </div>
    <!-- breadcrumbend -->
</section>
<!-- content-section end -->
<section class="content-1">
    <div class="row section-3">
        <div class="col">
            <a href="#">
                <div class="card">
                    <img src="{{asset('assets/img/uf.png')}}" class="card-img-top c-i-t" alt="...">
                    <div class="card-body">
                        <a class="card-text">Obezite Cerrahisi Uygunluk Formu</a>
                    </div>
                </div>
            </a>
        </div>
        <div class="col">
            <a href="#">
                <div class="card">
                    <img src="{{asset('assets/img/vki.pn')}}g" class="card-img-top c-i-t" alt="...">
                    <div class="card-body">
                        <a class="card-text">Vücut Kitle Endeksi Hesaplama</a>
                    </div>
                </div>
            </a>
        </div>
        <div class="col">
            <a href="#">
                <div class="card">
                    <img src="{{asset('assets/img/ss.png')}}" class="card-img-top c-i-t" alt="...">
                    <div class="card-body">
                        <a class="card-text">Dr. Murat Üstün Sorularınızı Yanıtlıyor!</a>
                    </div>
                </div>
            </a>
        </div>
        <div class="col">
            <a href="#">
                <div class="card">
                    <img src="{{asset('assets/img/vg.png')}}" class="card-img-top c-i-t" alt="...">
                    <div class="card-body">
                        <a class="card-text">Video Galerisine Hemen Göz Atın!</a>
                    </div>
                </div>
            </a>
        </div>
    </div>
    <!-- content-1 end -->
</section>
<!-- content-1 end -->
<section class="slider-section">
    <script type="module" src="https://cdn.jsdelivr.net/gh/darkwiiplayer/components@088a4a4/ImageCarousel.js"></script>
    <!-- source: https://codepen.io/darkwiiplayer/pen/YzERZbR -->
    <div class="container-fluid mt-5 content-2">
        <div class="row">
            <div class="col-6 slider-part">
                <image-carousel interval="5e3">
                    <img slot="image" src="{{asset('assets/img/bg.png')}}">
                    <!-- <img slot="image" src="{{asset('assets/img/bg.png')}}">
                    <img slot="image" src="{{asset('assets/img/bg.png')}}">
                    <img slot="image" src="{{asset('assets/img/bg.png')}}">
                    <img slot="image" src="{{asset('assets/img/bg.png')}}">
                    <img slot="image" src="{{asset('assets/img/bg.png')}}"> -->
                </image-carousel>
            </div>
            <div class="col-4 side-slider">
                <div class="col" style="border-bottom: 1px solid #dddddd; padding-bottom:10px;">
                    <div class="col" style="display: flex;">
                        <img src="{{asset('assets/img/1.png')}}" class="card-img-top" alt="...">
                        <p class="card-text">Hızlı, kolay ve yan etkisiz zayıflama hayali ve sömürüsü.. <br>
                            <a href="#" class="btn btn-görüntü">GÖRÜNTÜLE <i class="fa-solid fa-angles-right"></i> </a></p>

                    </div>
                </div>
                <div class="col" style="border-bottom: 1px solid #dddddd; padding-bottom:10px;">
                    <div class="col" style="display: flex; margin-top: 15px;">
                        <img src="{{asset('assets/img/2.png')}}" class="card-img-top" alt="...">
                        <p class="card-text">Obezite cerrahisinden sonra vitamin ve mineraller! <br>
                            <a href="#" class="btn btn-görüntü">GÖRÜNTÜLE <i class="fa-solid fa-angles-right"></i> </a>
                        </p>

                    </div>
                </div>
                <div class="col" style="border-bottom: 1px solid #dddddd; padding-bottom:10px;">
                    <div class="col" style="display: flex; margin-top: 15px;">
                        <img src="{{asset('assets/img/3.png')}}" class="card-img-top" alt="...">
                        <p class="card-text">Obeziteyi Engellemek İçin Okullar Artık Devreye Girdi! <br>
                            <a href="#" class="btn btn-görüntü">GÖRÜNTÜLE <i class="fa-solid fa-angles-right"></i> </a>
                        </p>
                    </div>
                </div>
                <div class="col" style=" padding-bottom:10px;">
                    <div class="col" style="display: flex; margin-top: 15px;">
                        <img src="{{asset('assets/img/4.png')}}" class="card-img-top last-im" alt="...">
                        <p class="card-text">İlk Kez Sitemizde: Organik <br> Şelale Diyeti <br>
                            <a href="#" class="btn btn-görüntü">GÖRÜNTÜLE <i class="fa-solid fa-angles-right"></i> </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- slider-section end -->
<section>
    <div class="div mt-5 video-gallery">
        <h2 class="text-center" style="color:#3b85c6; font-weight:bold;">Video Galerimize Hemen Göz Atabilirsiniz</h2>
        <h6 class="text-center mt-4 mb-4" style="color: black; font-weight: bold;">Medicorium' a ait videolara hemen ulaşabilirsiniz. Tüm videoları görüntülemek için hemen buraya <a style="text-decoration: none;" href="#">tıklayın</a>...</h6>
        <div class="row">
            <div class="col ml-1 text-center">
                <iframe width="300" height="245" src="https://www.youtube.com/embed/hkLzsfwgdFM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <p>Obezite Destek Semineri: <br> Geleneksel Ortaköy Buluşması
                </p>
            </div>
            <div class="col text-center">
                <iframe width="300" height="245" src="https://www.youtube.com/embed/KK2fIXOv7eQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <p>Metabolizmanızı Sağlıklı Bir Şekilde <br> Hızlandırabilme Yöntemleri
                </p>
            </div>
            <div class="col text-center">
                <iframe width="300" height="245" src="https://www.youtube.com/embed/dGqHTqGyDn8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <p>Besin Takviyeleri ve Diyet <br> Listelerinin Önem Durumları
                </p>
            </div>
            <div class="col text-center">
                <iframe width="300" height="245" src="https://www.youtube.com/embed/FTO94k84Jf0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <p>Folik Asit Metabolizma ve Spor <br> Egzersiz Yöntemleri
                </p>
            </div>
        </div>
    </div>
</section>
<section class="blog-section">
    <div class="row">
        <div class="col-5 blog">
            <a href="#">
                <div class="col">
                    <div class="col d-flex blog-s-1" style="border-bottom: 1px solid #e9ecef; padding-bottom:20px;">
                        <img src="{{asset('assets/img/blog1.png')}}" class="card-img-top" alt="...">
                        <div class="div body-section">
                            <h6>Obeziteyi Engellemek İçin <br> Okullar Artık Devrede!</h6>
                            <p>Beslenme alışkanlığının çocukluktan itibaren
                                <br> oluştuğunu, çocukların uygun menülerle yeterli ve <br> dengeli beslenmeleri gerektiğini vurgulayan...
                            </p>
                        </div>
                    </div>
                </div>
            </a>
            <a href="#">
                <div class="col">
                    <div class="col d-flex blog-s-1" style="border-bottom: 1px solid #e9ecef; padding-bottom:20px;">
                        <img src="{{asset('assets/img/blog2.png')}}" class="card-img-top" alt="...">
                        <div class="div body-section">
                            <h6>Yeni Bir Şarlatanlık Örneği: <br> Beta HCG Diyetleri</h6>
                            <p class="card-text">Beslenme alışkanlığının çocukluktan itibaren <br> oluştuğunu, çocukların uygun menülerle yeterli ve <br> dengeli beslenmeleri gerektiğini vurgulayan...
                            </p>
                        </div>
                    </div>
                </div>
            </a>
            <a href="#">
                <div class="col">
                    <div class="col d-flex blog-s-1" style="border-bottom: 1px solid #e9ecef; padding-bottom:20px;">
                        <img src="{{asset('assets/img/blog3.png')}}" class="card-img-top" alt="...">
                        <div class="div body-section">
                            <h6>Gastrik Bypass ve Diabetik <br> Retinopati ve Tedavisi</h6>
                            <p class="card-text">Beslenme alışkanlığının çocukluktan itibaren <br> oluştuğunu, çocukların uygun menülerle yeterli ve <br> dengeli beslenmeleri gerektiğini vurgulayan...
                            </p>
                        </div>
                    </div>
                </div>
            </a>
            <a href="#">
                <div class="col">
                    <div class="col d-flex blog-s-1" style="border-bottom: 1px solid #e9ecef; padding-bottom:20px;">
                        <img src="{{asset('assets/img/blog4.png')}}" class="card-img-top" alt="...">
                        <div class="div body-section">
                            <h6>İlk kez sitemizde: Kilo Kaybı <br>İçin Şelale Diyeti</h6>
                            <p class="card-text">Beslenme alışkanlığının çocukluktan itibaren <br> oluştuğunu, çocukların uygun menülerle yeterli ve <br> dengeli beslenmeleri gerektiğini vurgulayan...
                            </p>
                        </div>
                    </div>
                </div>
            </a>
            <a href="#">
                <div class="col">
                    <div class="col d-flex blog-s-1" style="border-bottom: 1px solid #e9ecef; padding-bottom:20px;">
                        <img src="{{asset('assets/img/blog5.png')}}" class="card-img-top" alt="...">
                        <div class="div body-section">
                            <h6>Obeziteyi Engellemek İçin <br> Okullar Artık Devrede</h6>
                            <p class="card-text">Beslenme alışkanlığının çocukluktan itibaren <br> oluştuğunu, çocukların uygun menülerle yeterli ve <br> dengeli beslenmeleri gerektiğini vurgulayan...
                            </p>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-3 advertisement-section">
            <div class="col">
                <a href="#">
                    <div class="col" style="border-bottom:2px solid #e9ecef; padding-bottom:5px;">
                        <div class="col">
                            <img src="{{asset('assets/img/ads1.png')}}" class="card-img-top image-section-1" alt="...">
                            <div class="div">
                                <h6 class="sec-fir">BİZİ FACEBOOK' TA TAKİP EDİN</h6>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="#">
                    <div class="col" style="border-bottom:2px solid #e9ecef; padding-bottom:5px;">
                        <div class="col">
                            <img src="{{asset('assets/img/ads2.png')}}" class="card-img-top image-section-2" alt="...">
                            <div class="div mt-2">
                                <h6 class="sec-sec">TIP TERİMLER SÖZLÜĞÜ</h6>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="#">
                    <div class="col" style="border-bottom:2px solid #e9ecef; padding-bottom:15px;">
                        <div class="col">
                            <img src="{{asset('assets/img/ads3.png')}}" class="card-img-top image-section-3" alt="...">
                            <div class="div mt-2">
                                <h6 class="sec-third">E-BÜLTEN' E HEMEN KAYIT OLUN!</h6>
                            </div>
                        </div>
                    </div>
                </a>
                <div class="col mt-4 text-center">
                    <p style="font-size: 13px; font-weight: bold;">Duyurularımızdan ilk siz haberdar olabilirsiniz. <br> Bunun için yapmanız gereken tek şey aşağıda <br>bulunan e-bülten formunu doldurmak.</p>
                    <form id="form" role="submit" class="submit-form">
                        <input type="search" id="name" name="name" placeholder="Adınız ve Soyadınız">
                        <input type="email" name="email" id="e-mail" placeholder="E-posta Adresiniz">
                        <br>
                        <button class="btn sendandsubmit" type="submit">GÖNDER & KAYIT OL</button>
                    </form>

                </div>
            </div>
        </div>
        <!-- source: https://codepen.io/muhammad_mabrouk/pen/qBVqEmN -->
        <div class="col-3 news">
            <h6 class="mt-2 mb-2">GENEL CERRAHİ</h6>
            <div class="select-menu float-right mt-3">
                <div dir="rtl">
                    <select>
                        <option class="items" value="">Sindirim Sistemi Hastalıkları</option>
                        <option class="items" value="item-01">1</option>
                        <option class="items" value="item-02">2</option>
                    </select>
                </div>
                <div dir="rtl">
                    <select>
                        <option value="" class="active style="color: #3b85c6;">Endokrin Sistem Hastalıkları</option>
                        <option value="item-01">1</option>
                        <option value="item-02">2</option>
                    </select>
                </div>
                <div dir="rtl">
                    <select>
                        <option value="">Batın ve Batın Duvarı Hastalıkları</option>
                        <option value="item-01">1</option>
                        <option value="item-02">2</option>
                    </select>
                </div>
                <div dir="rtl">
                    <select>
                        <option value="">Meme Hastalıkları</option>
                        <option value="item-01">1</option>
                        <option value="item-02">2</option>
                    </select>
                </div>
                <div dir="rtl">
                    <select>
                        <option value="">Cerrahide Son Gelişmeler</option>
                        <option value="item-01">1</option>
                        <option value="item-02">2</option>
                    </select>
                </div>
                <div dir="rtl">
                    <select>
                        <option value="">Tıp Sözlüğü</option>
                        <option value="item-01">1</option>
                        <option value="item-02">2</option>
                    </select>
                </div>

            </div>
            <h6 class="mt-2 mb-2">OBEZİTE VE METABOLİZMA CERRAHİSİ</h6>
            <div class="select-menu float-right mt-3" style="height: 300px;">
                <div dir="rtl">
                    <select>
                        <option class="items" value="">Obezite Hakkında Genel Bilgiler</option>
                        <option class="items" value="item-01">1</option>
                        <option class="items" value="item-02">2</option>
                    </select>
                </div>
                <div dir="rtl">
                    <select>
                        <option value="" class="active style="color: #3b85c6;">Diyetle İlgili Yazılar</option>
                        <option value="item-01">1</option>
                        <option value="item-02">2</option>
                    </select>
                </div>
                <div dir="rtl">
                    <select>
                        <option value="">Diyet Örnekleri</option>
                        <option value="item-01">1</option>
                        <option value="item-02">2</option>
                    </select>
                </div>
                <div dir="rtl">
                    <select>
                        <option value="">Mide Balonu</option>
                        <option value="item-01">1</option>
                        <option value="item-02">2</option>
                    </select>
                </div>
                <div dir="rtl">
                    <select>
                        <option value="">Mide Kelepçesi</option>
                        <option value="item-01">1</option>
                        <option value="item-02">2</option>
                    </select>
                </div>
                <div dir="rtl">
                    <select>
                        <option value="">Sleeve Gastrektomi</option>
                        <option value="item-01">1</option>
                        <option value="item-02">2</option>
                    </select>
                </div>
                <div dir="rtl">
                    <select>
                        <option value="">Gastrik Bypass</option>
                        <option value="item-01">1</option>
                        <option value="item-02">2</option>
                    </select>
                </div>
                <div dir="rtl">
                    <select>
                        <option value="">Diğer Metodlar</option>
                        <option value="item-01">1</option>
                        <option value="item-02">2</option>
                    </select>
                </div>
                <div dir="rtl">
                    <select>
                        <option value="">Basında Obezite</option>
                        <option value="item-01">1</option>
                        <option value="item-02">2</option>
                    </select>
                </div>
                <div dir="rtl">
                    <select>
                        <option value="">Obezite Cerrahisi Makaleleri</option>
                        <option value="item-01">1</option>
                        <option value="item-02">2</option>
                    </select>
                </div>

            </div>
            <h6 class="mt-2 mb-2">ENDOSKOPİ</h6>
            <div class="select-menu float-right">
                <div dir="rtl">
                    <select>
                        <option value="">Tanısal Endoskopi</option>
                        <option value="item-01">1</option>
                        <option value="item-02">2</option>
                    </select>
                </div>
                <div dir="rtl">
                    <select>
                        <option value="">Endoskopik Tedaviler</option>
                        <option value="item-01">1</option>
                        <option value="item-02">2</option>
                    </select>
                </div>
                <div dir="rtl">
                    <select>
                        <option value="">Endoskopi Videoları</option>
                        <option value="item-01">1</option>
                        <option value="item-02">2</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- blog-section end -->

@endsection @section('script') @endsection
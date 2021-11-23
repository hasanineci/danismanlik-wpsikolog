<!-- header area start -->
<header>
    <div class="header__top header__top-3 d-none d-md-block box-105">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-xl-3 col-lg-4 col-md-5 col-sm-7 col-8">
                    <div class="header__top-left">
                        <div class="social text-center">
                            <ul>
                                <li><a href="{{ url("#") }}"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="{{ url("#") }}"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="{{ url("#") }}"><i class="fab fa-pinterest-p"></i></a></li>
                                <li><a href="{{ url("#") }}"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="{{ url("#") }}"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-19 col-lg-8 col-md-7 col-sm-5 col-4">
                    <div class="header__top-right d-flex justify-content-end">
                        <div class="header__info d-none d-lg-flex">
                            <div class="header__info-icon">
                                <span class="icon flaticon-history"></span>
                            </div>
                            <div class="header__info-text">
                                <span>Açılış: Pazartesi - Cumartesi</span>
                            </div>
                        </div>
                        <div class="header__info d-none d-md-flex">
                            <div class="header__info-icon">
                                <span class="icon flaticon-24-hours-support"></span>
                            </div>
                            <div class="header__info-text">
                                <span>Bizi Arayın: (+90) 541 234 56 78</span>
                            </div>
                        </div>
                        <div class="header__info d-none d-md-flex">
                            <div class="header__info-icon">
                                <span class="icon flaticon-envelope"></span>
                            </div>
                            <div class="header__info-text">
                                <span>e-mail: <a href="{{ url (" #") }}" class="__cf_email__"
                                        data-cfemail="c7aea9a1a887b4bea4afa8f5f3e9a4a8aa">info@wsikoloji.com</a>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="header-sticky" class="header-area navbar-color box-105">
        <div class="container">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-xl-2 col-lg-2 col-md-3 col-sm-6 col-6">
                        <div class="logo">
                            <a href="index.html"><img src="{{ asset ('assets/img/logo/logo.png')}}" alt="logo"
                                    style="max-width: 180px;"></a>
                        </div>
                    </div>
                    <div class="col-xl-10 col-lg-10 d-none d-lg-block">
                        <!-- menu area start -->
                        <div class="main-menu">
                            <nav>
                                <ul>
                                    <li><a href="{{ url('/')}}">Anasayfa</a></li>
                                    <li><a href="{{ url("/onlineterapi") }}">Online Terapi</a></li>
                                    <li><a href="{{ url('/hakimizda')}}">Hakkımızda</a></li>
                                    <li><a href="{{ url('/ekibimiz')}}">Ekibimiz</a></li>
                                    <li><a href="{{ url('/hizmetlerimiz')}}">Hizmetlerimiz</a></li>
                                    <li><a href="{{ url('/egitimlerimiz')}}">Eğitimlerimiz</a></li>
                                    <li><a href="{{ url('/randevual')}}">Randevu Al</a></li>
                                    <li><a href="{{ url('/iletisim')}}">iletişim</a></li>
                                </ul>
                            </nav>
                        </div>
                        <!-- menu area end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- header area start -->

<!-- info area start -->
<section class="info__area transition-3">
    <div class="info__area-inner">
        <div class="info__area-wrapper">
            <div class="info__close-icon text-right">
                <button class="info-close-btn"><i class="fal fa-times"></i></button>
            </div>
            <div class="info__wrapper">
                <div class="info__logo mt-25 mb-30">
                    <a href="index.html"><img src="{{ asset ('assets/img/logo/logo.png')}}" alt="logo"
                            style="max-width: 180px;"></a>
                </div>

                <div class="info__content">
                    <h4>About Us</h4>
                    <p>We must explain to you how all seds this mistakens idea off denouncing pleasures and praising
                        pain was born and I will give you a completed accounts of the system and expound.</p>

                    <a href="contact.html" class="s-btn s-btn__white">Contact us</a>
                </div>
                <div class="info__contact">
                    <h3>contact info</h3>
                    <ul>
                        <li>
                            <div class="icon">
                                <i class="fal fa-map-marker-alt"></i>
                            </div>
                            <div class="text">
                                <span>123/A, Miranda City Likaoli Prikano, Dope United States </span>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <i class="fal fa-phone"></i>
                            </div>
                            <div class="text">
                                <span>+0989 7876 9865 9</span>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <i class="fal fa-envelope-open"></i>
                            </div>
                            <div class="text">
                                <span><a href="http://themepure.net/cdn-cgi/l/email-protection" class="__cf_email__"
                                        data-cfemail="20494e464f604558414d504c450e434f4d">[email&#160;protected]</a></span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- side-mobile-menu start -->
        <nav class="side-mobile-menu">
            <div class="info__close-icon text-right mb-20">
                <button class="info-close-btn"><i class="fal fa-times"></i></button>
            </div>
            <ul id="mobile-menu-active">
                <li><a href="{{ url('/')}}">Anasayfa</a></li>
                <li><a href="{{ url("/onlineterapi") }}">Online Terapi</a></li>
                <li><a href="{{ url('/hakimizda')}}">Hakkımızda</a></li>
                <li><a href="{{ url('/ekibimiz')}}">Ekibimiz</a></li>
                <li><a href="{{ url('/hizmetlerimiz')}}">Hizmetlerimiz</a></li>
                <li><a href="{{ url('/egitimlerimiz')}}">Eğitimlerimiz</a></li>
                <li><a href="{{ url('/randevual')}}">Randevu Al</a></li>
                <li><a href="{{ url('/iletisim')}}">iletişim</a></li>
            </ul>
        </nav>
        <!-- side-mobile-menu end -->
    </div>
</section>
<div class="body-overlay transition-3"></div>
<!-- info area end -->

<!-- scroll up area start -->
<div class="scroll-up" id="scroll" style="display: none;">
    <a href="javascript:void(0);"><i class="far fa-angle-up"></i></a>
</div>
<!-- scroll up area end -->
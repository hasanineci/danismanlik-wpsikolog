<!-- header area start -->
<header>
    <div class="header__top header__top-3 d-none d-md-block box-105">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-xl-3 col-lg-4 col-md-5 col-sm-7 col-8">
                    <div class="header__top-left">
                        <div class="social text-center">
                            <ul>
                                <li><a href="{{ iletisim()->facebook }}" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="{{ iletisim()->twitter }}" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="{{ iletisim()->instagram }}" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="{{ iletisim()->linkedin }}" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
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
                                <span>Açılış: {{ yonetim()->calisma_gunleri }}</span>
                            </div>
                        </div>
                        <div class="header__info d-none d-md-flex">
                            <div class="header__info-icon">
                                <span class="icon flaticon-24-hours-support"></span>
                            </div>
                            <div class="header__info-text">
                                <a href="tel:{{ iletisim()->telefon }}"><span>Bizi Arayın: {{ iletisim()->telefon }}</span></a>
                            </div>
                        </div>
                        <div class="header__info d-none d-md-flex">
                            <div class="header__info-icon">
                                <span class="icon flaticon-envelope"></span>
                            </div>
                            <div class="header__info-text">
                                <span>e-mail: <a href="mailto:{{ iletisim()->email }}" class="__cf_email__">{{ iletisim()->email }}</a>
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
                    <div class="col-xl-9 col-lg-9 d-none d-lg-block">
                        <!-- menu area start -->
                        <div class="main-menu">
                            <nav>
                                <ul>
                                    <li><a href="{{ url('/')}}">Anasayfa</a></li>
                                    <li><a href="{{ url("/online-terapi") }}">Online Terapi</a></li>
                                    <li> <a href="" style="pointer-events: none; cursor: default;">Kurumsal</a>
                                        <ul class="submenu">
                                            <li><a href="{{ url('/ekibimiz')}}">Ekibimiz</a></li>
                                            <li><a href="{{ url('/hakkimizda')}}">Hakkımızda</a></li>
                                            <li><a href="{{ url('/anlasmali-kurumlar')}}">Analşamalı Kurumlar</a></li>
                                            <li><a href="{{ url('/gizlilik-politikamiz')}}">Gizlilik Politikası</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="{{ url('/hizmetlerimiz')}}">Hizmetlerimiz</a></li>
                                    <li><a href="{{ url('/randevu-al')}}">Randevu Al</a></li>
                                    <li><a href="{{ url('/iletisim')}}">İletişim</a></li>
                                </ul>
                            </nav>
                        </div>
                        <!-- menu area end -->
                    </div>
                    <div class="col-xl-1 col-lg-1 col-md-1 col-sm-6 col-6">
                        <div class="header-bar info-toggle-btn f-right">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
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
        <!-- side-mobile-menu start -->
        <nav class="side-mobile-menu">
            <div class="info__close-icon text-right">
                <button class="info-close-btn"><i class="fal fa-times"></i></button>
            </div>
            <ul id="mobile-menu-active">
                <li><a href="{{ url('/')}}">Anasayfa</a></li>
                <li><a href="{{ url("/online-terapi") }}">Online Terapi</a></li>
                <li> <a href="" style="pointer-events: none; cursor: default;">Kurumsal</a>
                    <ul class="submenu">
                        <li><a href="{{ url('/ekibimiz')}}">Ekibimiz</a></li>
                        <li><a href="{{ url('/hakkimizda')}}">Hakkımızda</a></li>
                        <li><a href="{{ url('/anlasmali-kurumlar')}}">Analşamalı Kurumlar</a></li>
                        <li><a href="{{ url('/gizlilik-politikamiz')}}">Gizlilik Politikası</a></li>
                    </ul>
                </li>
                <li><a href="{{ url('/hizmetlerimiz')}}">Hizmetlerimiz</a></li>
                <li><a href="{{ url('/randevu-al')}}">Randevu Al</a></li>
                <li><a href="{{ url('/iletisim')}}">İletişim</a></li>
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
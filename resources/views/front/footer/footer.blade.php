<!-- footer area start -->
<footer>
    <div class="footer__area pt-40 footer-bg box-105">
        <div class="container-fluid">
            <div class="container">
                <div class="footer__bottom pt-40 pb-50">
                    <div class="row">
                        <div class="col-xl-3 col-lg-6 col-md-6 mb-50">
                            <div class="footer__widget">
                                <div class="footer__widget-title mb-30">
                                    <div class="logo text-center">
                                        <a href="{{url('/')}}"><img src="{{ asset('assets/img/logo/logo.png') }}"
                                                alt="logo" style="max-width: 250px;"></a>
                                    </div>
                                </div>
                                <div class="footer__widget-content">
                                    <div class="footer__logo-area">
                                        <p style="text-align: justify">Lorem ipsum, dolor sit amet consectetur
                                            adipisicing elit. Laudantium illum
                                            dolores consectetur esse error facere voluptatem, ad animi possimus corporis
                                            accusamus necessitatibus saepe vitae ipsam quidem itaque commodi repellat
                                            laborum.</p>

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
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-6 col-md-6 offset-xl-1 mb-50">
                            <div class="footer__widget">
                                <div class="footer__widget-title mb-25">
                                    <h2><small>HİZMETLERİMİZ</small></h2>
                                </div>
                                <div class="footer__widget-content">
                                    <div class="footer__services">
                                        <ul>
                                            <li><a href="{{ url('/')}}">Anasayfa</a></li>
                                            <li><a href="{{ url("/onlineterapi") }}">Online Terapi</a></li>
                                            <li> <a href="" style="pointer-events: none; cursor: default;">Kurumsal</a>
                                                <ul class="submenu">
                                                    <li><a href="{{ url('/ekibimiz')}}">Ekibimiz</a></li>
                                                    <li><a href="{{ url('/hakkimizda')}}">Hakkımızda</a></li>
                                                    <li><a href="{{ url('/anlasmalikurumlar')}}">Analşamalı Kurumlar</a></li>
                                                    <li><a href="{{ url('/gizlilikpolitikamiz')}}">Gizlilik Politikası</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="{{ url('/hizmetlerimiz')}}">Hizmetlerimiz</a></li>
                                            <li><a href="{{ url('/randevual')}}">Randevu Al</a></li>
                                            <li><a href="{{ url('/iletisim')}}">İletişim</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 offset-xl-1 mb-50">
                            <div class="footer__widget">
                                <div class="footer__widget-title mb-25">
                                    <h2><small>TERAPİ HİZMETLERİMİZ</small></h2>
                                </div>
                                <div class="footer__widget-content">
                                    <div class="footer__services">
                                        <ul>
                                            <li><a href="{{ url('/hizmetlerimiz') }}">Aile Terapisi</a></li>
                                            <li><a href="{{ url('/hizmetlerimiz') }}">Çift Terapisi</a></li>
                                            <li><a href="{{ url('/hizmetlerimiz') }}">Danışmanlık</a></li>
                                            <li><a href="{{ url('/hizmetlerimiz') }}">Deprasyon Sorunu</a></li>
                                            <li><a href="{{ url('/hizmetlerimiz') }}">Flört & İlişki Terapisi</a></li>
                                            <li><a href="{{ url('/hizmetlerimiz') }}">Aile Danışmanlığı</a></li>
                                            <li><a href="{{ url('/hizmetlerimiz') }}">Oyun Terapisi</a></li>
                                            <li><a href="{{ url('/hizmetlerimiz') }}">Kliniğimizde Uygulanan testler</a></li>
                                            <li><a href="{{ url('/hizmetlerimiz') }}">Konuşma Bozukluğu Tedavisi</a></li>
                                            <li><a href="{{ url('/hizmetlerimiz') }}">Psikolog Hizmetleri</a></li>
                                            <li><a href="{{ url('/hizmetlerimiz') }}">Psikoterapiler</a></li>
                                            <li><a href="{{ url('/hizmetlerimiz') }}">Psikiyatrik Tedaviler</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-6 col-md-6 mb-50">
                            <div class="footer__widget">
                                <div class="footer__widget-title mb-25">
                                    <h2><small>İLETİŞİM</small></h2>
                                </div>
                                <div class="footer__widget-content">
                                    <div class="footer__contact-info">
                                        <ul>
                                            <li>
                                                <div class="footer__contact-address">
                                                    <span>{{ iletisim()->adres }}</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="footer__contact-item">
                                                    <h6>Email:</h6>
                                                    <p><a href="mailto:{{ iletisim()->email }}" class="__cf_email__">{{ iletisim()->email }}</a>
                                                    </p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="footer__contact-item">
                                                    <h6>Telefon:</h6>
                                                    <p><a href="tel:{{ iletisim()->telefon }}">{{ iletisim()->telefon }}</a></p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer__copyright">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="footer__copyright-text">
                                <p>Copyright © @php echo date('Y'); @endphp <a href="{{url('/')}}"> wpsikoloji</a> her
                                    hakkı
                                    saklıdır. &#9478; <small>Tema: <a href="http://hasanineci.com/" target="_blank" >Hasan İNECİ</a></small>
                                </p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="footer__policy ">
                                <a href="{{ url ("/kvkk") }}">KVKK</a>
                                <a href="{{ url ("/gizlilikpolitikamiz") }}"> Gizlilik Politikamız</a>
                                <a href="{{ url ("/musterimemnuniyeti") }}">Müşteri Memnuniyeti</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer area end -->
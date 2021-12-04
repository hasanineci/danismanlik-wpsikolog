<!-- sidebar  -->
<nav class="sidebar">
    <div class="logo d-flex text-center">
        <a class="large_logo" href="{{ url ('/admin') }}">
            <img src="{{ asset ('assets/admin/img/logo.png') }}" alt="logo">
        </a>
    </div>
    <ul id="sidebar_menu">
        <li>
            <a href="{{ url ('/admin') }}" aria-expanded="false" class="@yield('home-active')">
                <div class="nav_icon_small">
                    <img src="{{ asset ('assets/admin/img/menu-icon/dashboard.svg') }}" alt="">
                </div>
                <div class="nav_title">
                    <span>Anasayfa</span>
                </div>
            </a>
        </li>
        <li>
            <a href="{{ url ('/admin/ekip') }}" aria-expanded="false"  class="@yield('ekip-active')">
                <div class="nav_icon_small">
                    <img src="{{ asset ('assets/admin/img/menu-icon/2.svg') }}" alt="">
                </div>
                <div class="nav_title">
                    <span>Ekip</span>
                </div>
            </a>
        </li>
        <h4 class="menu-text"><span>MAİLLER</span> <i class="fas fa-ellipsis-h"></i> </h4>
        <li>
            <a href="{{ url ('/admin/yeni-gelen-mailler') }}" aria-expanded="false"  class="@yield('yeni-gelen-mailler-active')">
                <div class="nav_icon_small">
                    <i class="ti-email"></i>
                </div>
                <div class="nav_title">
                    <span>Yeni Gelen</span>
                </div>
            </a>
        </li>
        <li>
            <a href="{{ url ('/admin/gelen-mailler') }}" aria-expanded="false" class="@yield('gelen-mailler-active')">
                <div class="nav_icon_small">
                    <i class="ti-folder"></i>
                </div>
                <div class="nav_title">
                    <span>Gelenler</span>
                </div>
            </a>
        </li>

        <h4 class="menu-text"><span>RANDEVULAR</span> <i class="fas fa-ellipsis-h"></i> </h4>
        <li>
            <a href="{{ url ('/admin/bekleyen-randevular') }}" aria-expanded="false" class="@yield('bekleyen-randevular-active')">
                <div class="nav_icon_small">
                    <i class="ti-alarm-clock"></i>
                </div>
                <div class="nav_title">
                    <span>Bekleyen</span>
                </div>
            </a>
        </li>
        <li>
            <a href="{{ url ('/admin/onaylanan-randevular') }}" aria-expanded="false" class="@yield('onaylanan-randevular-active')">
                <div class="nav_icon_small">
                    <i class="ti-comments"></i>
                </div>
                <div class="nav_title">
                    <span>Onaylanan</span>
                </div>
            </a>
        </li>


        <h4 class="menu-text"><span>AYARLAR</span> <i class="fas fa-ellipsis-h"></i> </h4>
        <li>
            <a href="{{ url ('/admin/yonetim-ayarlari') }}" aria-expanded="false" class="@yield('yonetim-ayarlari-active')">
                <div class="nav_icon_small">
                    <img src="{{ asset ('assets/admin/img/menu-icon/15.svg') }}" alt="">
                </div>
                <div class="nav_title">
                    <span>Yönetim Ayaları</span>
                </div>
            </a>
        </li>
        <li>
            <a href="{{ url ('/admin/iletisim-ayarlari') }}" aria-expanded="false" class="@yield('contact-active')">
                <div class="nav_icon_small">
                    <i class="ti-announcement"></i>
                </div>
                <div class="nav_title">
                    <span>İletişim Ayaları</span>
                </div>
            </a>
        </li>
        <li>
            <a href="{{ url ('/admin/anlasmali-kurumlar') }}" aria-expanded="false" class="@yield('anlasmali-kurumlar-active')">
                <div class="nav_icon_small">
                    <i class="ti-bookmark-alt"></i>
                </div>
                <div class="nav_title">
                    <span>Anlaşmalı Kurumlar</span>
                </div>
            </a>
        </li>
        <h4 class="menu-text"><span>SİSTEM</span> <i class="fas fa-ellipsis-h"></i> </h4>
        <li>
            <a href="{{ url ('logout') }}" aria-expanded="false">
                <div class="nav_icon_small">
                    <i class="ti-direction"></i>
                </div>
                <div class="nav_title">
                    <span>Oturumu Kapat</span>
                </div>
            </a>
        </li>


    </ul>
</nav>
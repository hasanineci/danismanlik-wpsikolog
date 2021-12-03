<!-- hakkımda alanı start -->
<div class="about-area p-relative pt-100 pb-80 box-105">
    <div class="about-bg-img" data-background="{{ asset('assets/img/bg/pattern-2.jpg') }}"></div>
    <div class="container">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-7">
                    <div class="about-image w-img mr-65 mb-30">
                        <img src="{{ asset('assets/img/about/about.jpg') }}" alt="">
                        <div class="about-content" data-background="{{ asset('assets/img/about/ab-pattern.png') }}">
                            <h4><?php $date=date('Y'); $date2=2019; $toplam=$date - $date2; echo $toplam;?> Yıllık <br> Meslek <br> Deneyimi
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5">
                    <div class="about-wrapper">
                        <div class="section__title mb-45">
                            <div class="section__icon mb-2">
                                <img src="{{ asset ('assets/img/icon/sec-icon-1.png') }}" alt=""> <span
                                    class="section__sub-title ml-15">WPSİKOLOJİ'ye Hoşgeldiniz</span>
                            </div>
                            <h1 class="mb-5">İhtiyaca Göre Terapi</h1>
                        </div>
                        <div class="about-inner pt-50">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed dole there eiusmod tempor
                                incididub labore dolore magna aliqua denim ads minim veniam, quis nostrud exerctation to
                                ullamco laibor nisi</p>

                            <div class="about-info mb-30">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="about-info-list d-flex mb-30">
                                            <div class="abot-icon">
                                                <i class="fal fa-check"></i>
                                            </div>
                                            <div class="about-text"><span>Psikodinamik Terapi</span></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="about-info-list d-flex mb-30">
                                            <div class="abot-icon">
                                                <i class="fal fa-check"></i>
                                            </div>
                                            <div class="about-text"><span>Danışmanlık</span></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="about-info-list d-flex mb-30">
                                            <div class="abot-icon">
                                                <i class="fal fa-check"></i>
                                            </div>
                                            <div class="about-text"><span>Çift Terapisi</span></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="about-info-list d-flex mb-30">
                                            <div class="abot-icon">
                                                <i class="fal fa-check"></i>
                                            </div>
                                            <div class="about-text"><span>Sağlık Terapisi</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="about-bottom d-block d-sm-flex">
                                <div class="about-btn mr-40 mb-30">
                                    <a href="{{ url('/') }}" class="s-btn" tabindex="0">Hakkımızda</a>
                                </div>
                                <div class="about-author mb-30">
                                    <img src="{{ asset('assets/img/about/author.png') }}" alt="">
                                    <div class="ab-author">
                                        <h3>Ayşe Barkın</h3>
                                        <span>Uzman Psikolog</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- hakkımda alanı start -->
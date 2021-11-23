@extends('front.index')
@section('title') iletişim - @endsection
@section('header-iletisim-active') active @endsection

@section('content')


<main>

    <!-- page title area start -->
    <section class="page__title p-relative pt-50 pb-50" data-background="{{ asset ("assets/img/page-title/banner.jpg")
        }}">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12">
                    <div class="page__title-inner text-center">
                        <div class="page__title-breadcrumb">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ url("/") }}">Anasayfa</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Randevu Al</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- page title area end -->

    <!-- iletişim alanı start -->
    <section class="contact__area pt-120 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-5">
                    <div class="container">
                        <div class="contact__info-inner green-bg-2">
                            <div class="row">
                                <div class="col-12">
                                    <div class="contact__info-item text-center text-sm-left d-sm-flex mb-45">
                                        <div class="contact__icon mr-20">
                                            <span class="icon flaticon-house"></span>
                                        </div>
                                        <div class="contact__info-content">
                                            <h3>Adresimiz</h3>
                                            <span>Bahçelievler Mah. 1020 Sok. Barkın Apt. No:12/1</span>
                                            <span> Haliliye - Şanlıurfa</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="contact__info-item text-center text-sm-left d-sm-flex mb-45">
                                        <div class="contact__icon mr-20">
                                            <span class="icon flaticon-support-1"></span>
                                        </div>
                                        <div class="contact__info-content">
                                            <h3>Telefon Numarası</h3>
                                            <span>(+90) 541 123 45 67 </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="contact__info-item text-center text-sm-left d-sm-flex mb-45">
                                        <div class="contact__icon mr-20">
                                            <span class="icon flaticon-email"></span>
                                        </div>
                                        <div class="contact__info-content">
                                            <h3>Email</h3>
                                            <span>
                                                <a href="#" class="__cf_email__"
                                                    data-cfemail="7a0a1b0e131f140e3a181b091319171f54191517">info@wpisikoloji.com</a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 offset-xl-1 col-lg-6 offset-lg-1">
                    <div class="contact__info-head mb-25">
                        <div class="section__title mb-25">
                            <div class="section__icon mb-15">
                                <span class="section__sub-title section__sub-title-2 section__sub-title-3">Randevu
                                    Oluştur</span>
                            </div>
                        </div>
                    </div>
                    <div class="contact__form">
                        <form id="contact-form" action="" method="POST">
                            <div class="row">
                                <div class="col-xl-12">
                                    <select class="contact__input contact__input-3 contact__input-4">
                                        <option value="">Doktorunuzu Seçin</option>
                                        <option value="">Klinik Psikolog İbrahim Halil Barkın</option>
                                        <option value="">Klinik Psikolog Abdülselam Altıntaş</option>
                                        <option value="">Klinik Psikolog Ayşe Barkın</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-6">
                                    <input name="name" class="contact__input contact__input-3 contact__input-4"
                                        type="text" placeholder="Adınız Soyadınız">
                                </div>
                                <div class="col-xl-6">
                                    <input name="subject" class="contact__input contact__input-3 contact__input-4"
                                        type="text" placeholder="Telefon Numaranız">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-6">
                                    <input type="date" id="date" control-id="ControlID-10"
                                        class="contact__input contact__input-3 contact__input-4">

                                </div>
                                <div class="col-xl-6">
                                    <input type="time" id="time" control-id="ControlID-11"
                                        class="contact__input contact__input-3 contact__input-4">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-12">
                                    <textarea name="message"
                                        class="contact__input contact__input-3 contact__input-4 txt-area " cols="30"
                                        rows="10" placeholder="Şikayetiniz..."></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-12">
                                    <button class="s-btn s-btn__square" type="submit">Gönder</button>
                                </div>
                            </div>
                        </form>
                        <p class="ajax-response"></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- iletişim alanı end -->

    <!-- Referans alanı start -->
    @include('front.ekler.referanslar')
    <!-- Referans alanı end -->

    <!-- Harita alanı start -->
    <section class="contact__map-area mt-120">
        <div class="container-fluid p-0">
            <div class="row no-gutters">
                <div class="col-xl-12">
                    <div class="contact__map">
                        <iframe
                            src="https://maps.google.com/maps?hl=tr&amp;q=şanlıurfa,haliliye,Halide Nusret Zorlutuna,Cd.,No:10, Sultan Fatih+()&amp;ie=UTF8&amp;t=&amp;z=18&amp;iwloc=B&amp;output=embed"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Harita alanı end -->
</main>


@endsection
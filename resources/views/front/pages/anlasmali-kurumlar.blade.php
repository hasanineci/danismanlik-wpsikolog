@extends('front.index')
@section('title') Anlaşmalı Kurumlar @endsection
@section('header-ekibimiz-active') active @endsection

@section('content')


<main>

    <!-- page title area start -->
    @include('front.ekler.kurumsal-breadcrump')
    <!-- page title area end -->


    <!--  Anlaşmalı Kurumlar Alanı start -->
    <section class="case__area pt-40 pb-80">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="case__head w-img mb-40">
                        <img src="{{ asset("assets/img/case/details/case-details-img.jpg") }}" alt="case-details" class="mb-40">
                        <p>Aşağıda bulunan kurumlarla olan anlaşmalarımızla ilgili detaylı bilgiyi 0541 123 45 67 numaralı telefondan ayrıntılı olarak öğrenebilirsiniz.</p>
                        
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12">
                    <div class="case__details-item  mb-35">
                        <div class="why__area-3">
                            <div class="section__title mb-45">
                                <div class="section__icon mb-10">
                                    <span class="section__sub-title section__sub-title-2 section__sub-title-3">
                                        Anlaşmalı Kurumlar
                                    </span>
                                </div>
                                <h1>SGK İLE ANLAŞMAMIZ BULUNMAMAKTADIR.</h1>
                            </div>
                            <div class="why__list">
                                <ul>
                                    <li>
                                        <h3>Şanlıurfa mehmet Akif İnan Eğitim ve Araştırma Hastanesi</h3>
                                    </li>
                                    <li>
                                        <h3>Şanlıurfa Eğitim ve Araştırma Hastanesi</h3>
                                    </li>
                                    <li>
                                        <h3>Özel Urfa Lotus Hastanesi</h3>
                                    </li>
                                    <li>
                                        <h3>Metrolife Hastanesi</h3>
                                    </li>
                                    <li>
                                        <h3>Özel Meydan Hastanesi</h3>
                                    </li>
                                    <li>
                                        <h3>Özel Academia Hastanesi</h3>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Anlaşmalı Kurumlar Alanı end -->


    <!-- referanslar alanı start -->
    @include('front.ekler.referanslar');
    <!-- referanslar alanı end -->

</main>

@endsection
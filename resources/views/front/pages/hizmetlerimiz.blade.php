@extends('front.index')
@section('title') Hizmetlerimiz @endsection
@section('header-ekibimiz-active') active @endsection

@section('content')


<main>

    <!-- page title area start -->
    @include('front.ekler.breadcrump')
    <!-- page title area end -->

    <!-- hizmetlerimiz area start -->
    <section class="case__area pt-110 ">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 offset-xl-2">
                    <div class="section__title mb-60 pl-50 pr-50 text-center">
                        <h1>Professional Psychologist Team Ready to Serve you</h1>
                        <div class="section__icon mb-10">
                            <span
                                class="section__sub-title section__sub-title-2 section__sub-title-3 section__sub-title-4">
                                Expert member</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="masonary-menu case__menu filter-button-group text-center mb-20">
                        <button class="active" data-filter="*">All Department</button>
                        <button data-filter=".cat1">Family Problem </button>
                        <button data-filter=".cat2">Depression</button>
                        <button data-filter=".cat3">Personal</button>
                        <button data-filter=".cat4">Breakup</button>
                        <button data-filter=".cat5">Frustation</button>
                    </div>
                </div>
            </div>
            <div class="row grid">
                <div class="col-xl-4 col-lg-4 col-md-6 grid-item cat1 cat4 cat3">
                    <div class="case__item-2 p-relative mb-30">
                        <div class="case__thumb-2 w-img">
                            <img src="assets/img/case/02/case-04.jpg" alt="case-01">
                        </div>
                        <div class="case__content-2 transition-3 grey-bg-3 p-relative">
                            <h3><a href="case-details.html">Personality Disorder</a></h3>
                            <p>Fames nostra nascetur dis id pellentree at ligula auctor metus semper convalis ligula
                                augue natoque </p>
                            <a href="case-details.html" class="link-btn">explore more</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 grid-item cat2 cat5">
                    <div class="case__item-2 p-relative mb-30">
                        <div class="case__thumb-2 w-img">
                            <img src="assets/img/case/02/case-05.jpg" alt="case-01">
                        </div>
                        <div class="case__content-2 transition-3 grey-bg-3 p-relative">
                            <h3><a href="case-details.html">Dysmorphic Disorder</a></h3>
                            <p>Fames nostra nascetur dis id pellentree at ligula auctor metus semper convalis ligula
                                augue natoque </p>
                            <a href="case-details.html" class="link-btn">explore more</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 grid-item cat3 cat4 cat1">
                    <div class="case__item-2 p-relative mb-30">
                        <div class="case__thumb-2 w-img">
                            <img src="assets/img/case/02/case-06.jpg" alt="case-01">
                        </div>
                        <div class="case__content-2 transition-3 grey-bg-3 p-relative">
                            <h3><a href="case-details.html">Behavioral Symptoms</a></h3>
                            <p>Fames nostra nascetur dis id pellentree at ligula auctor metus semper convalis ligula
                                augue natoque </p>
                            <a href="case-details.html" class="link-btn">explore more</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 grid-item  cat3 cat5">
                    <div class="case__item-2 p-relative mb-30">
                        <div class="case__thumb-2 w-img">
                            <img src="assets/img/case/02/case-01.jpg" alt="case-01">
                        </div>
                        <div class="case__content-2 transition-3 grey-bg-3 p-relative">
                            <h3><a href="case-details.html">Children Disorder</a></h3>
                            <p>Fames nostra nascetur dis id pellentree at ligula auctor metus semper convalis ligula
                                augue natoque </p>
                            <a href="case-details.html" class="link-btn">explore more</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 grid-item cat4 cat3">
                    <div class="case__item-2 p-relative mb-30">
                        <div class="case__thumb-2 w-img">
                            <img src="assets/img/case/02/case-02.jpg" alt="case-01">
                        </div>
                        <div class="case__content-2 transition-3 grey-bg-3 p-relative">
                            <h3><a href="case-details.html">Depression Problem</a></h3>
                            <p>Fames nostra nascetur dis id pellentree at ligula auctor metus semper convalis ligula
                                augue natoque </p>
                            <a href="case-details.html" class="link-btn">explore more</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 grid-item cat3 cat5">
                    <div class="case__item-2 p-relative mb-30">
                        <div class="case__thumb-2 w-img">
                            <img src="assets/img/case/02/case-03.jpg" alt="case-01">
                        </div>
                        <div class="case__content-2 transition-3 grey-bg-3 p-relative">
                            <h3><a href="case-details.html">Couple Counseling</a></h3>
                            <p>Fames nostra nascetur dis id pellentree at ligula auctor metus semper convalis ligula
                                augue natoque </p>
                            <a href="case-details.html" class="link-btn">explore more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hizmetlerimiz alanı end -->

    <!-- referanslar alanı start -->
    @include('front.ekler.referanslar')
    <!-- referanslar alanı end -->

</main>

@endsection
@extends('front.index')
@section('title') Hakkımızda @endsection
@section('header-hakkimizda-active') active @endsection

@section('content')


<main>

    <!-- page title area start -->
    @include('front.ekler.kurumsal-breadcrump')
    <!-- page title area end -->

    <!-- about area start -->
    <section class="about__area-2 pt-120 pb-120 box-105 p-relative">
        <div class="container-fluid">
            <div class="about__inner about__inner-3 p-relative">
                <div class="about__bg-img p-absolute" data-background="{{ asset ("assets/img/about/about-2.jpg") }}"></div>
                <div class="row">
                    <div class="col-xl-6 offset-xl-6">
                        <div class="about__content-wrapper pt-20 pl-85">
                            <div class="section__title mb-30">
                                <div class="section__icon mb-10">
                                    <span class="section__sub-title section__sub-title-2">wpsikoloji</span>
                                </div>
                                <h1 class="mb-100">Hastalar Mutludur, Uygun Mental Tedavi Desteğine Neden Olur</h1>
                            </div>

                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed dole there eiusmod tempor
                                incididub labore dolore magna aliqua denim ads minim veniam, quis nostrud exerctation
                                ullamco nisi above murli aliquip commodo imperdet</p>

                            <div class="about__info-2 d-sm-flex mb-60">
                                <div class="about__info-experience white-bg mr-40">
                                    <h1>2 Yıllık Mesleki Deneyim</h1>
                                </div>
                                <p>Lobortis facilisis potenti dictumst auctor at semper amet dis elit, neque nulla
                                    lectus. Nascetur habitasse dignissim class ac vehicula ultricies conubia suspendisse
                                    aenean suscipit nulla verra volutpat velit orci montes maece nas lorem porttitor
                                    tortor dise montes fames nascetur auctor dui rhoncus phasellus id sagittis a
                                    praesent dui rhoncus porttitor nullam commodo ultricess</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about area start -->

    <!-- testimonial area start -->
    <section class="testimonial__area pt-120 pb-120 grey-bg-3 box-105">
        <div class="testimonial__inner p-relative">
            <div class="testimonial__img testimonial__img-2 border-radius-8 p-absolute fix"
                data-background="{{ asset ("assets/img/testimonial/testimonial-img.jpg") }}">
                <div class="testimonial__video p-absolute fix">
                    <div class="testimonial__shape p-absolute">
                        <img src="{{ asset ("assets/img/testimonial/shape-1.png") }}" alt="">
                    </div>
                    <div class="testimonial__shape testimonial__shape-2 p-absolute">
                        <img src="{{ asset ("assets/img/testimonial/shape-2.png") }}" alt="">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-7 col-lg-7">
                        <div class="testimonial__wrapper testimonial__wrapper-3 pt-50 pb-35">
                            <div class="section__title mb-20">
                                <div class="section__icon mb-10">
                                    <span class="section__sub-title section__sub-title-2 section__sub-title-3">
                                        Hasta beslemesi
                                    </span>
                                </div>
                                <h1>Hizmetimiz Hakkında Mutlu Hasta Geribildirimi</h1>
                                
                                <p>Malesuada imperdiet commodo nostra taciti neque arcu in sem a vivamus tempor ac
                                    sem convallis ullamcorper ac enim Massa massa porta interdum to nullam nis augue
                                    donec leo ut fermentum senectus eget. Metus lacinia turpis. Potenti in aliquet
                                    ipsum primis a pede volutpat. Feugiat hymenaeos facilisis erat morbi libero to
                                    sociosqu inte dum justo sagittis feugiat facilisis morb.</p>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- testimonial area end -->

    
    <!-- team alanı start -->
    @include('front.ekler.ekip')
    <!-- team alanı end -->

    
    <!-- soru sor alanı start -->
    @include('front.ekler.sorusor')
    <!-- soru sor alanı end -->
    

    <!-- client area start -->
    @include('front.ekler.referanslar')
    <!-- client area end -->

</main>


@endsection
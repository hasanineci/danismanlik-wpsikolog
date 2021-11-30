

    <!-- page title area start -->
    <section class="page__title p-relative pt-50 pb-40" data-background="{{ asset ("assets/img/page-title/banner.jpg") }}">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12">
                    <div class="page__title-inner text-center">
                        <div class="page__title-breadcrumb">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ url("/") }}">Anasayfa</a></li>
                                    <li class="breadcrumb-item" aria-current="page">Kurumsal</li>
                                    <li class="breadcrumb-item active" aria-current="page">@yield('title')</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- page title area end -->
@extends('admin.index')
@section('title') Yönetim Paneli @endsection
@section('header') Yönetim Paneli @endsection
@section('home-active') active @endsection
@section('content')


<section class="main_content dashboard_part large_header_bg">
    <!-- header  -->
    @include('admin.widgets.header')
    <!-- header end  -->


    <div class="main_content_iner ">
        <div class="container-fluid p-0">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card mb-3 widget-chart">
                        <div class="icon-wrapper rounded-circle">
                            <div class="icon-wrapper-bg bg-primary"></div>
                            <i class="ti-bookmark-alt text-primary"></i>
                        </div>
                        <div class="widget-numbers"><span>50</span></div>
                        <div class="widget-subheading">Toplam Gelen Mailler</div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card mb-3 widget-chart">
                        <div class="icon-wrapper rounded-circle">
                            <div class="icon-wrapper-bg bg-danger"></div>
                            <i class="ti-email text-danger"></i>
                        </div>
                        <div class="widget-numbers"><span>12</span></div>
                        <div class="widget-subheading">Okunmayan Mail Sayısı</div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card mb-3 widget-chart">
                        <div class="icon-wrapper rounded-circle">
                            <div class="icon-wrapper-bg bg-info"></div>
                            <i class="ti-comments text-info"></i>
                        </div>
                        <div class="widget-numbers"><span>130</span></div>
                        <div class="widget-subheading">Toplam Gelen Randevu</div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card mb-3 widget-chart">
                        <div class="icon-wrapper rounded-circle">
                            <div class="icon-wrapper-bg bg-dark"></div>
                            <i class="ti-comment text-dark"></i>
                        </div>
                        <div class="widget-numbers"><span>10</span></div>
                        <div class="widget-subheading">Okunmayan Randevu Sayısı</div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- footer part -->
    @include('admin.widgets.footer')
</section>

@endsection
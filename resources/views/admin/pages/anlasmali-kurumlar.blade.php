@extends('admin.index')
@section('title')Anlaşmalı Olduğumuz Kurumlar @endsection
@section('header')Anlaşmalı Kurumlar @endsection
@section('anlasmali-kurumlar-active')active @endsection
@section('content')


<section class="main_content dashboard_part large_header_bg">
    <!-- header  -->
    @include('admin.widgets.header')
    <!-- header end  -->

    <div class="main_content_iner">
        <div class="container-fluid p-0">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="white_card card_height_100 mb_30 mt-5">
                        <div class="white_card_body">
                            <div class="QA_section">
                                <div class="white_box_tittle list_header">
                                    <h4>Anlaşmalı Kurumlar</h4>
                                    <div class="box_right d-flex lms_block">
                                        <div class="add_button ml-10">
                                            <a href="#" data-toggle="modal" data-target="#addcategory" class="btn_1">Ekle</a>
                                        </div>
                                    </div>
                                </div>
        
                                <div class="QA_table mb_30">
                                    <!-- table-responsive -->
                                    <table class="table lms_table_active ">
                                        <thead>
                                            <tr>
                                                <th scope="col">Kurum Adı</th>
                                                <th scope="col">Yetkili Ad Soyad</th>
                                                <th scope="col">Telefon</th>
                                                <th scope="col">Birim</th>
                                                <th scope="col">Bulunduğu Yer</th>
                                                <th scope="col">Durum</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row"> <a href="#" class="question_content">Harran Üniversitesi Tıp Fakültesi</a></th>
                                                <td>Dr. Ayşe Barkın</td>
                                                <td>0541 234 56 78</td>
                                                <td>Psikiyatri</td>
                                                <td>Şanlıurfa Osman Bey Kampüsü</td>
                                                <td><a href="#" class="status_btn">Active</a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

    <!-- footer part -->
    @include('admin.widgets.footer')
</section>

@endsection
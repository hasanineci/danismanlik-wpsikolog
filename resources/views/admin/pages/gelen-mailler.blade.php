@extends('admin.index')
@section('title')Tüm Mailler @endsection
@section('header')Gelenler @endsection
@section('gelen-mailler-active')active @endsection
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
                                    <h4>Onaylanan Randevular</h4>
                                </div>

                                <div class="QA_table mb_30">
                                    <!-- table-responsive -->
                                    <table class="table lms_table_active ">
                                        <thead>
                                            <tr>
                                                <th scope="col">Adı Soyadı</th>
                                                <th scope="col">Telefon</th>
                                                <th scope="col">E-mail</th>
                                                <th scope="col">Konu</th>
                                                <th scope="col">Mail</th>
                                                <th scope="col">Durumu</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row"> <a href="#" class="question_content">Deneme deneme</a>
                                                </th>
                                                <td>0541 234 56 78</td>
                                                <td>deneme@example.com</td>
                                                <td>Terapi Almak İstiyorum</td>
                                                <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis
                                                    aut quaerat dicta, ad, aliquam odio omnis, at sunt dolore dolor illo
                                                    eius placeat quas esse! Rerum quidem magnam corrupti fuga.</td>
                                                <td><a href="#" class="status_btn">Oku</a></td>
                                            </tr>
                                            <tr>
                                                <th scope="row"> <a href="#" class="question_content">Deneme deneme</a>
                                                </th>
                                                <td>0541 234 56 78</td>
                                                <td>deneme@example.com</td>
                                                <td>Terapi Almak İstiyorum</td>
                                                <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis
                                                    aut quaerat dicta, ad, aliquam odio omnis, at sunt dolore dolor illo
                                                    eius placeat quas esse! Rerum quidem magnam corrupti fuga.</td>
                                                <td><a href="#" class="status_btn">Oku</a></td>
                                            </tr>
                                            <tr>
                                                <th scope="row"> <a href="#" class="question_content">Deneme deneme</a>
                                                </th>
                                                <td>0541 234 56 78</td>
                                                <td>deneme@example.com</td>
                                                <td>Terapi Almak İstiyorum</td>
                                                <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis
                                                    aut quaerat dicta, ad, aliquam odio omnis, at sunt dolore dolor illo
                                                    eius placeat quas esse! Rerum quidem magnam corrupti fuga.</td>
                                                <td><a href="#" class="status_btn">Oku</a></td>
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
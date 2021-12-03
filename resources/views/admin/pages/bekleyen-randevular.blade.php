@extends('admin.index')
@section('title')Bekleyen Okunmayan Randevular @endsection
@section('header')Bekleyen @endsection
@section('bekleyen-randevular-active')active @endsection
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
                                                <th scope="col">Randevu Tarihi</th>
                                                <th scope="col">Randevu Saati</th>
                                                <th scope="col">Durumu</th>
                                                <th scope="col">İstediği Psikolog</th>
                                                <th scope="col">Şikayeti</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row"> <a href="#" class="question_content">Deneme deneme</a>
                                                </th>
                                                <td>0541 234 56 78</td>
                                                <td>deneme@example.com</td>
                                                <td>12/12/2021</td>
                                                <td>14:20</td>
                                                <td><a href="#" class="status_btn">Okunmadı</a></td>
                                                <td>Dr. Abdülselam Altuntaş</td>
                                                <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis
                                                    aut quaerat dicta, ad, aliquam odio omnis, at sunt dolore dolor illo
                                                    eius placeat quas esse! Rerum quidem magnam corrupti fuga.</td>
                                            </tr>
                                            <tr>
                                                <th scope="row"> <a href="#" class="question_content">Deneme deneme</a>
                                                </th>
                                                <td>0541 234 56 78</td>
                                                <td>deneme@example.com</td>
                                                <td>12/12/2021</td>
                                                <td>14:20</td>
                                                <td><a href="#" class="status_btn">Okunmadı</a></td>
                                                <td>Dr. ibrahim Halil Barkın</td>
                                                <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis
                                                    aut quaerat dicta, ad, aliquam odio omnis, at sunt dolore dolor illo
                                                    eius placeat quas esse! Rerum quidem magnam corrupti fuga.</td>
                                            </tr>
                                            <tr>
                                                <th scope="row"> <a href="#" class="question_content">Deneme deneme</a>
                                                </th>
                                                <td>0541 234 56 78</td>
                                                <td>deneme@example.com</td>
                                                <td>12/12/2021</td>
                                                <td>14:20</td>
                                                <td><a href="#" class="status_btn">Okunmadı</a></td>
                                                <td>Dr. Ayşe Barkın</td>
                                                <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis
                                                    aut quaerat dicta, ad, aliquam odio omnis, at sunt dolore dolor illo
                                                    eius placeat quas esse! Rerum quidem magnam corrupti fuga.</td>
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
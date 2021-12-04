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
                                            <a href="#" data-toggle="modal" data-target="#AnlasmaliKurumlar" class="btn_1">Ekle</a>
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
                                            @foreach ($anlasmaliKurumlar as $anlasmaliKurumlar)

                                            <tr>
                                                <th scope="row">{{ $anlasmaliKurumlar->kurum_adi }}</th>
                                                <td>{{ $anlasmaliKurumlar->yetkili_adi }}</td>
                                                <td>{{ $anlasmaliKurumlar->telefon }}</td>
                                                <td>{{ $anlasmaliKurumlar->birim }}</td>
                                                <td>{{ $anlasmaliKurumlar->bulundugu_yer }}</td>
                                                <td><span type="submit" class="status_btn">{{ $anlasmaliKurumlar->durum }}</span></td>
                                            </tr>
                                                
                                            @endforeach
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

    <!-- Modal Abdulselam-->
    <div class="modal fade" id="AnlasmaliKurumlar" tabindex="-1" role="dialog"
        aria-labelledby="AnlasmaliKurumlarTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="AnlasmaliKurumlarTitle">Anlaşmalı Kurum Ekle</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-row">
                            <div class="form-group col-xl-12 col-lg-12">
                                <label for="inputSifre">Kurum Adı:</label>
                                <input type="text" name="Sifre" class="form-control" id="inputSifre" placeholder="">
                            </div>
                            <div class="form-group col-xl-12 col-lg-12">
                                <label for="inputSifre">Yetkili Ad Soyad:</label>
                                <input type="text" name="Sifre" class="form-control" id="inputSifre" placeholder="">
                            </div>
                            <div class="form-group col-xl-12 col-lg-12">
                                <label for="inputSifre">Telefon:</label>
                                <input type="text" name="Sifre" class="form-control" id="inputSifre" placeholder="">
                            </div>
                            <div class="form-group col-xl-12 col-lg-12">
                                <label for="inputSifre">Birim:</label>
                                <input type="text" name="Sifre" class="form-control" id="inputSifre" placeholder="">
                            </div>
                            <div class="form-group col-xl-12 col-lg-12">
                                <label for="inputSifre">Bulunduğu Yer:</label>
                                <input type="text" name="Sifre" class="form-control" id="inputSifre" placeholder="">
                            </div>
                            <div class="form-group col-xl-12 col-lg-12">
                                <label for="inputSifre">Durumu:</label>
                                <input type="text" name="Sifre" class="form-control" id="inputSifre" placeholder="">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Kapat</button>
                    <button type="button" class="btn btn-primary">Kaydet</button>
                </div>
            </div>
        </div>
    </div>
    

    <!-- footer part -->
    @include('admin.widgets.footer')
</section>

@endsection
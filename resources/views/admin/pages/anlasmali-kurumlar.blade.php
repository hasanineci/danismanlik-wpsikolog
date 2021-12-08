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
                                            <button type="button" class="btn btn-sm btn-success btn-anlasmali-kurumlar-ekle" data-anlasmali-kurumlar-ekle="">Ekle</button>
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
                                                <th scope="col">Düzenle</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach (anlasmaliKurumlar(); as $anlasmaliKurumlar)

                                            <tr>
                                                <th scope="row">{{ $anlasmaliKurumlar->kurum_adi }}</th>
                                                <td>{{ $anlasmaliKurumlar->yetkili_adi }}</td>
                                                <td>{{ $anlasmaliKurumlar->telefon }}</td>
                                                <td>{{ $anlasmaliKurumlar->birim }}</td>
                                                <td>{{ $anlasmaliKurumlar->bulundugu_yer }}</td>
                                                <td>{{ $anlasmaliKurumlar->durum }}</td>
                                                <td><button type="button" class="btn btn-sm btn-success btn-anlasmali-kurumlar-oku" data-anlasmali-kurumlar-id="{{ $anlasmaliKurumlar->id }}"><i class="ti-pencil"></i></button></td>
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
    
    @include('admin.widgets.anlasmali-kurumlar.anlasmali-kurumlar-model-content')

    <!-- footer part -->
    @include('admin.widgets.footer')
</section>

@endsection

@section('js')
<script src="{{ asset('assets/admin/js/anlasmali-kurumlar/anlasmali-kurumlar.js') }}"></script>
@endsection
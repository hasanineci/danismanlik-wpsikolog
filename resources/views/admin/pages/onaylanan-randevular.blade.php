@extends('admin.index')
@section('title')Onaylanan Randevular @endsection
@section('header')Onaylanan @endsection
@section('onaylanan-randevular-active')active @endsection
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
                                                <th scope="col">Randevu Tarihi</th>
                                                <th scope="col">Randevu Saati</th>
                                                <th scope="col">İstediği Psikolog</th>
                                                <th scope="col">Şikayeti</th>
                                                <th scope="col">Durumu</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($onaylananrandevular as $randevu)
                                            <tr>
                                                <th scope="row">{{ $randevu->adi }}</th>
                                                <td>{{ $randevu->telefon }}</td>
                                                <td>{{ $randevu->randevu_tarihi }}</td>
                                                <td>{{ $randevu->randevu_saati }}</td>
                                                <td>{{ $randevu->istedigi_psikolog }}</td>
                                                <td style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-width:150px;">
                                                    {{ $randevu->sikayeti }}</td>
                                                    <td><button class="status_btn">OKU</button></td>
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

    <!-- footer part -->
    @include('admin.widgets.footer')
</section>

@endsection
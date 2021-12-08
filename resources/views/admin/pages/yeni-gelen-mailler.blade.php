@extends('admin.index')
@section('title')Yeni Mailler @endsection
@section('header')Yeni Gelen @endsection
@section('yeni-gelen-mailler-active')active @endsection
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
                                    <h4>Yeni Gelen Mailler</h4>
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
                                                <th scope="col">Mesaj</th>
                                                <th scope="col">Durumu</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($mail as $mail)
                                            <tr>
                                                <th scope="row">{{ $mail->adi }}</th>
                                                <td>{{ $mail->telefon }}</td>
                                                <td>{{ $mail->email }}</td>
                                                <td>{{ $mail->konu }}</td>
                                                <td
                                                    style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-width:200px;">
                                                    {{ $mail->mesaj }}</td>
                                                    <td><button type="button" class="btn btn-sm btn-success btn-mail-oku" data-mail-id="{{ $mail->id }}">OKU</button></td>
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


    @include('admin.widgets.mail.mail-content-modal')


    <!-- footer part -->
    @include('admin.widgets.footer')
</section>

@endsection

@section('js')
<script src="{{ asset('assets/admin/js/mail/mail.js') }}"></script>
@endsection
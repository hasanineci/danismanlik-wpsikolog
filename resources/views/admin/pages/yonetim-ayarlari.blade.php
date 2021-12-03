@extends('admin.index')
@section('title')Yönetim Ayarları @endsection
@section('header')Yönetim Ayarları @endsection
@section('yonetim-ayarlari-active')active @endsection
@section('content')


<section class="main_content dashboard_part large_header_bg">
    <!-- header  -->
    @include('admin.widgets.header')
    <!-- header end  -->

    <div class="main_content_iner overly_inner ">
        <div class="container-fluid p-0 ">
            <div class="row ">
                <div class="col-12">
                    <div class="white_card mb_30 ">
                        <div class="white_card_header">
                            <div class="bulder_tab_wrapper">
                                <ul class="nav" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="Referanslar-tab" data-toggle="tab"
                                            href="#Referanslar" role="tab" aria-controls="Referanslar"
                                            aria-selected="true">
                                            <i class="ti-unlock"></i> &nbsp;Referanslar</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="Sifre-Degistir-tab" data-toggle="tab"
                                            href="#Sifre-Degistir" role="tab" aria-controls="profile"
                                            aria-selected="false">
                                            <i class="ti-unlock"></i> &nbsp; Şifre Değiştir</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="Calisma-Saatleri-tab" data-toggle="tab"
                                            href="#Calisma-Saatleri" role="tab" aria-controls="Calisma-Saatleri"
                                            aria-selected="false">
                                            <i class="ti-alarm-clock"></i> &nbsp;Çalışma Saatleri</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="Sertifika-ve-Oduller-tab" data-toggle="tab"
                                            href="#Sertifika-ve-Oduller" role="tab" aria-controls="Sertifika-ve-Oduller"
                                            aria-selected="false">
                                            <i class="ti-medall-alt"></i> &nbsp;Sertifika ve Ödüller</a>
                                    </li>
                                </ul>

                            </div>
                        </div>
                        <div class="white_card_body">
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="Referanslar" role="tabpanel"
                                    aria-labelledby="Referanslar-tab">
                                    <div class="builder_select">
                                        <div class="white_card card_height_100 mb_30">
                                            <div class="white_card_body">
                                                <div class="QA_section">
                                                    <div class="white_box_tittle list_header">
                                                        <h4>Referanslar</h4>
                                                        <div class="box_right d-flex lms_block">
                                                            <div class="add_button ml-10">
                                                                <a href="#" data-toggle="modal"
                                                                    data-target="#addcategory"
                                                                    class="btn btn-success">Ekle</a>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="QA_table mb_30">
                                                        <!-- table-responsive -->
                                                        <table class="table lms_table_active ">
                                                            <thead>
                                                                <tr>
                                                                    <th scope="col">Referans Adı</th>
                                                                    <th scope="col">Kurum/İşletme Adı</th>
                                                                    <th scope="col">Tarih</th>
                                                                    <th scope="col">Telefon</th>
                                                                    <th scope="col">Fotoğraf</th>
                                                                    <th scope="col">Durumu</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <th scope="row">
                                                                        <a href="#" class="question_content">
                                                                            Hasan İNECİ
                                                                        </a>
                                                                    </th>
                                                                    <td>Şanlıurfa Eğitim ve Araştırma Hastanesi</td>
                                                                    <td>12/11/2019</td>
                                                                    <td>0541 444 55 55</td>
                                                                    <td>Şanlıurfa - Haliliye</td>
                                                                    <td><a href="#" class="status_btn">Aktif</a></td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">
                                                                        <a href="#" class="question_content">
                                                                            Hasan İNECİ
                                                                        </a>
                                                                    </th>
                                                                    <td>Şanlıurfa Eğitim ve Araştırma Hastanesi</td>
                                                                    <td>12/11/2019</td>
                                                                    <td>0541 444 55 55</td>
                                                                    <td>Şanlıurfa - Haliliye</td>
                                                                    <td><a href="#" class="status_btn">Aktif</a></td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">
                                                                        <a href="#" class="question_content">
                                                                            Hasan İNECİ
                                                                        </a>
                                                                    </th>
                                                                    <td>Şanlıurfa Eğitim ve Araştırma Hastanesi</td>
                                                                    <td>12/11/2019</td>
                                                                    <td>0541 444 55 55</td>
                                                                    <td>Şanlıurfa - Haliliye</td>
                                                                    <td><a href="#" class="status_btn">Aktif</a></td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">
                                                                        <a href="#" class="question_content">
                                                                            Hasan İNECİ
                                                                        </a>
                                                                    </th>
                                                                    <td>Şanlıurfa Eğitim ve Araştırma Hastanesi</td>
                                                                    <td>12/11/2019</td>
                                                                    <td>0541 444 55 55</td>
                                                                    <td>Şanlıurfa - Haliliye</td>
                                                                    <td><a href="#" class="status_btn">Aktif</a></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="Sifre-Degistir" role="tabpanel"
                                    aria-labelledby="Sifre-Degistir-tab">
                                    <div class="builder_select">
                                        <form>
                                            <div class="form-row">
                                                <div class="form-group col-xl-4 col-lg-6">
                                                    <label for="inputSifre">Eski Şifre</label>
                                                    <input type="text" name="Sifre" class="form-control" id="inputSifre"
                                                        placeholder="" readonly>
                                                </div>
                                                <div class="form-group col-xl-4 col-lg-6">
                                                    <label for="inputSifre">Yeni Şifre</label>
                                                    <input type="text" name="Sifre" class="form-control" id="inputSifre"
                                                        placeholder="">
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-success">Kaydet</button>
                                        </form>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="Calisma-Saatleri" role="tabpanel"
                                    aria-labelledby="Calisma-Saatleri-tab">
                                    <div class="builder_select">
                                        <form>
                                            <div class="form-row">
                                                <div class="form-group col-xl-4 col-lg-6">
                                                    <label for="inputSaat">Eski Çalışma Saati</label>
                                                    <input type="text" name="CalismaSaat" class="form-control"
                                                        id="inputSaat" placeholder="eski" readonly>
                                                </div>
                                                <div class="form-group col-xl-4 col-lg-6">
                                                    <label for="inputSaat">Yeni Çalışma Saatleri</label>
                                                    <input type="text" name="CalismaSaat" class="form-control"
                                                        id="inputSaat" placeholder="">
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-success">Kaydet</button>
                                        </form>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="Sertifika-ve-Oduller" role="tabpanel"
                                    aria-labelledby="Sertifika-ve-Oduller-tab">
                                    <div class="builder_select">
                                        <div class="white_card card_height_100 mb_30">
                                            <div class="white_card_body">
                                                <div class="QA_section">
                                                    <div class="white_box_tittle list_header">
                                                        <h4>Sertifikalar ve Ödüller</h4>
                                                        <div class="box_right d-flex lms_block">
                                                            <div class="add_button ml-10">
                                                                <a href="#" data-toggle="modal"
                                                                    data-target="#addcategory"
                                                                    class="btn btn-success">Ekle</a>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="QA_table mb_30">
                                                        <!-- table-responsive -->
                                                        <table class="table lms_table_active ">
                                                            <thead>
                                                                <tr>
                                                                    <th scope="col">Belge Adı</th>
                                                                    <th scope="col">Alındığı Yer</th>
                                                                    <th scope="col">Alan</th>
                                                                    <th scope="col">Eğitim Süresi</th>
                                                                    <th scope="col">Verildiği Yer</th>
                                                                    <th scope="col">Fotoğraf</th>
                                                                    <th scope="col">Durumu</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <th scope="row">
                                                                        <a href="#" class="question_content">
                                                                            Kurs Bitirme Belgesi
                                                                        </a>
                                                                    </th>
                                                                    <td>Milli Eğitim Bakanlığı</td>
                                                                    <td>Psiko Terapi</td>
                                                                    <td>100 saat</td>
                                                                    <td>Ankara - Çankaya</td>
                                                                    <td>Ankara - Çankaya</td>
                                                                    <td><a href="#" class="status_btn">Aktif</a></td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">
                                                                        <a href="#" class="question_content">
                                                                            Kurs Bitirme Belgesi
                                                                        </a>
                                                                    </th>
                                                                    <td>Milli Eğitim Bakanlığı</td>
                                                                    <td>Psiko Terapi</td>
                                                                    <td>100 saat</td>
                                                                    <td>Ankara - Çankaya</td>
                                                                    <td>Ankara - Çankaya</td>
                                                                    <td><a href="#" class="status_btn">Aktif</a></td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">
                                                                        <a href="#" class="question_content">
                                                                            Kurs Bitirme Belgesi
                                                                        </a>
                                                                    </th>
                                                                    <td>Milli Eğitim Bakanlığı</td>
                                                                    <td>Psiko Terapi</td>
                                                                    <td>100 saat</td>
                                                                    <td>Ankara - Çankaya</td>
                                                                    <td>Ankara - Çankaya</td>
                                                                    <td><a href="#" class="status_btn">Aktif</a></td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">
                                                                        <a href="#" class="question_content">
                                                                            Kurs Bitirme Belgesi
                                                                        </a>
                                                                    </th>
                                                                    <td>Milli Eğitim Bakanlığı</td>
                                                                    <td>Psiko Terapi</td>
                                                                    <td>100 saat</td>
                                                                    <td>Ankara - Çankaya</td>
                                                                    <td>Ankara - Çankaya</td>
                                                                    <td><a href="#" class="status_btn">Aktif</a></td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">
                                                                        <a href="#" class="question_content">
                                                                            Kurs Bitirme Belgesi
                                                                        </a>
                                                                    </th>
                                                                    <td>Milli Eğitim Bakanlığı</td>
                                                                    <td>Depresyon Terapi</td>
                                                                    <td>80 saat</td>
                                                                    <td>Ankara - Çankaya</td>
                                                                    <td>Ankara - Çankaya</td>
                                                                    <td><a href="#" class="status_btn">Aktif</a></td>
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
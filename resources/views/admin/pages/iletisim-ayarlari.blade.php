@extends('admin.index')
@section('title')İletişim Ayarları @endsection
@section('header')İletişim Ayarları @endsection
@section('iletisim-ayarlari-active')active @endsection
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
                                        <a class="nav-link active" id="Sosyal-Medya-Hesaplari-tab" data-toggle="tab" href="#Sosyal-Medya-Hesaplari"
                                            role="tab" aria-controls="Sosyal-Medya-Hesaplari" aria-selected="true">
                                            <i class="ti-bar-chart"></i> &nbsp;Sosyal Medya Hesapları</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="Adres-tab" data-toggle="tab" href="#Adres" role="tab"
                                            aria-controls="profile" aria-selected="false">
                                            <i class="ti-direction-alt"></i> &nbsp;Adres Güncelle</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="Telefon-tab" data-toggle="tab" href="#Telefon" role="tab"
                                            aria-controls="Telefon" aria-selected="false">
                                            <i class="ti-mobile"></i> &nbsp;Telefon Güncelle</a>
                                    </li>
                                </ul>

                            </div>
                        </div>
                        <div class="white_card_body">
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="Sosyal-Medya-Hesaplari" role="tabpanel"
                                    aria-labelledby="Sosyal-Medya-Hesaplari-tab">
                                    <div class="builder_select">
                                        <form>
                                            <div class="form-row">
                                                <div class="form-group col-xl-6 col-lg-6">
                                                    <label for="inputFacebook">Facebook:</label>
                                                    <input type="text" name="Facebook" class="form-control @error('facebook') is-invalid @enderror"
                                                        id="inputFacebook" placeholder="" value="{{ $iletisim->facebook ?? old('facebook') }}" required>
                                                </div>
                                                <div class="form-group col-xl-6 col-lg-6">
                                                    <label for="inputInstagram">İnstagram:</label>
                                                    <input type="text" name="Instagram" class="form-control @error('instagram') is-invalid @enderror"
                                                        id="inputInstagram" placeholder="" value="{{ $iletisim->instagram ?? old('instagram') }}" required>
                                                </div>
                                                <div class="form-group col-xl-6 col-lg-6">
                                                    <label for="inputTwitter">Twitter:</label>
                                                    <input type="text" name="Twitter" class="form-control @error('twitter') is-invalid @enderror"
                                                        id="inputTwitter" placeholder="" value="{{ $iletisim->twitter ?? old('twitter') }}" required>
                                                </div>
                                                <div class="form-group col-xl-6 col-lg-6">
                                                    <label for="inputLinkedin">Linkedin:</label>
                                                    <input type="text" name="Linkedin" class="form-control @error('linkedin') is-invalid @enderror"
                                                        id="inputLinkedin" placeholder="" value="{{ $iletisim->linkedin ?? old('linkedin') }}" required>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="Adres" role="tabpanel" aria-labelledby="Adres-tab">
                                    <div class="builder_select">
                                        <form>
                                            <div class="form-row">
                                                <div class="form-group col-xl-9 col-lg-9">
                                                    <label for="inputAdres">Adres Güncelle:</label>
                                                    <input type="text" name="Adres" class="form-control @error('adres') is-invalid @enderror"
                                                        id="inputAdres" placeholder="" value="{{ $iletisim->adres ?? old('adres') }}" required>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="Telefon" role="tabpanel" aria-labelledby="Telefon-tab">
                                    <div class="builder_select">
                                        <form>
                                            <div class="form-row">
                                                <div class="form-group col-xl-4 col-lg-4">
                                                    <label for="inputTelefon">Telefon Güncelle:</label>
                                                    <input type="text" name="Telefon" class="form-control @error('telefon') is-invalid @enderror"
                                                        id="inputTelefon" value="{{ $iletisim->telefon ?? old('telefon') }}" required>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="devices_btn justify-content-start">
                                <a class="btn btn-success" href="#">Kaydet</a>
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
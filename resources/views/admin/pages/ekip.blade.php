@extends('admin.index')
@section('title')Ekibimiz @endsection
@section('header')Ekip @endsection
@section('ekip-active')active @endsection
@section('content')


<section class="main_content dashboard_part large_header_bg">
    <!-- header  -->
    @include('admin.widgets.header')
    <!-- header end  -->


    <div class="main_content_iner ">
        <div class="container-fluid p-0">
            <div class="row">
                <div class="col-md-6 col-lg-6 col-xl-4 box-col-6">
                    <div class="card custom-card">
                        <div class="card-header"><img class="img-fluid"
                                src="{{ asset ('assets/admin/img/profilebox/1.jpg') }}" alt="" data-original-title=""
                                title=""></div>
                        <div class="card-profile"><img class="rounded-circle"
                                src="{{ asset ('assets/admin/img/profilebox/7.jpg') }}" alt="" data-original-title=""
                                title=""></div>
                        <ul class="card-social">
                            <li><a href="#" data-original-title="" title=""><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#" data-original-title="" title=""><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#" data-original-title="" title=""><i class="fab fa-instagram"></i></a></li>
                        </ul>
                        <div class="text-center profile-details">
                            <h4>Ayşe Barkın</h4>
                            <h6>Klinik Psikolog</h6>
                            <h6>info@wpsikoloji.com</h6>

                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                data-target="#AyseModalCenter">
                                Güncelle
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-4 box-col-6">
                    <div class="card custom-card">
                        <div class="card-header"><img class="img-fluid"
                                src="{{ asset ('assets/admin/img/profilebox/2.jpg') }}" alt="" data-original-title=""
                                title=""></div>
                        <div class="card-profile"><img class="rounded-circle"
                                src="{{ asset ('assets/admin/img/profilebox/8.jpg') }}" alt="" data-original-title=""
                                title=""></div>
                        <ul class="card-social">
                            <li><a href="#" data-original-title="" title=""><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#" data-original-title="" title=""><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#" data-original-title="" title=""><i class="fab fa-instagram"></i></a></li>
                        </ul>
                        <div class="text-center profile-details">
                            <h4>İbrahim Halil Barkın</h4>
                            <h6>Klinik Psikolog</h6>
                            <h6>info@wpsikoloji.com</h6>

                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                data-target="#ibrahimBarkinModalCenter">
                                Güncelle
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-4 box-col-6">
                    <div class="card custom-card">
                        <div class="card-header"><img class="img-fluid"
                                src="{{ asset ('assets/admin/img/profilebox/3.jpg') }}" alt="" data-original-title=""
                                title=""></div>
                        <div class="card-profile"><img class="rounded-circle"
                                src="{{ asset ('assets/admin/img/profilebox/8.jpg') }}" alt="" data-original-title=""
                                title=""></div>
                        <ul class="card-social">
                            <li><a href="#" data-original-title="" title=""><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#" data-original-title="" title=""><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#" data-original-title="" title=""><i class="fab fa-instagram"></i></a></li>
                        </ul>
                        <div class="text-center profile-details">
                            <h4>Abdülselam Altıntaş</h4>
                            <h6>Klinik Psikolog</h6>
                            <h6>info@wpsikoloji.com</h6>

                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                data-target="#AbdulselamModalCenter">
                                Güncelle
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Modal Abdulselam-->
    <div class="modal fade" id="AyseModalCenter" tabindex="-1" role="dialog" aria-labelledby="AyseModalCenterTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Modal Ayşe</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. A sed esse voluptates, minima neque
                        asperiores, fuga, explicabo amet repudiandae odio et architecto nihil quibusdam blanditiis eos
                        similique. Quisquam laboriosam modi eos tempore, dicta odit animi delectus provident consequatur
                        suscipit quae! Accusantium tempore magni ab reprehenderit at reiciendis impedit sequi illo. </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Kapat</button>
                    <button type="button" class="btn btn-primary">Kaydet</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Abdulselam-->
    <div class="modal fade" id="ibrahimBarkinModalCenter" tabindex="-1" role="dialog"
        aria-labelledby="ibrahimBarkinModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Modal İbrahim Barkın</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. A sed esse voluptates, minima neque
                        asperiores, fuga, explicabo amet repudiandae odio et architecto nihil quibusdam blanditiis eos
                        similique. Quisquam laboriosam modi eos tempore, dicta odit animi delectus provident consequatur
                        suscipit quae! Accusantium tempore magni ab reprehenderit at reiciendis impedit sequi illo. </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Kapat</button>
                    <button type="button" class="btn btn-primary">Kaydet</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Abdulselam-->
    <div class="modal fade" id="AbdulselamModalCenter" tabindex="-1" role="dialog"
        aria-labelledby="AbdulselamModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Modal Abdulselam</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. A sed esse voluptates, minima neque
                        asperiores, fuga, explicabo amet repudiandae odio et architecto nihil quibusdam blanditiis eos
                        similique. Quisquam laboriosam modi eos tempore, dicta odit animi delectus provident consequatur
                        suscipit quae! Accusantium tempore magni ab reprehenderit at reiciendis impedit sequi illo. </p>
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
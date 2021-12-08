<!DOCTYPE html>
<html lang="tr">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>WPSİKOLOJİ Giriş Sayfası</title>

    <!-- <link rel="icon" href="img/favicon.png" type="image/png"> -->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assets/admin/css/bootstrap.min.css') }}">
    <!-- themefy CSS -->
    <link rel="stylesheet" href="{{ asset('assets/admin/vendors/themefy_icon/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/vendors/font_awesome/css/all.min.css') }}">
    <!-- datatable CSS -->
    <!-- scrollabe  -->
    <link rel="stylesheet" href="{{ asset('assets/admin/vendors/scroll/scrollable.css') }}">

    <!-- menu css  -->
    <link rel="stylesheet" href="{{ asset('assets/admin/css/metisMenu.css') }}">
    <!-- style CSS -->
    <link rel="stylesheet" href="{{ asset('assets/admin/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/css/colors/default.css') }}" id="colorSkinCSS">
</head>

<body class="crm_body_bg">
    <section class="main_content dashboard_part large_header_bg MainContent">
        <div class="main_content_iner windowsPoint">
            <div class="container-fluid p-0">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="white_box mb_30">
                            <div class="row justify-content-center">
                                <div class="col-lg-6">
                                    <!-- sign_in  -->
                                    <div class="modal-content cs_modal">
                                        <div class="modal-header justify-content-center theme_bg_1">
                                            <h5 class="modal-title text_white">wpsikoloji</h5>
                                        </div>
                                        <div class="modal-body">
                                            <form action="" method="post">
                                                @csrf
                                                <div class="form-group">
                                                    <input type="text" name="email" class="form-control"
                                                        placeholder="Email" id="email" minlength="3"
                                                        value="{{ old('email') }}" required>
                                                </div>
                                                <div class="form-group">
                                                    <input type="password" name="password" class="form-control"
                                                        placeholder="Parola" id="password" minlength="6" required>
                                                </div>
                                                <button type="submit" class="btn btn-primary btn-block">Oturum
                                                    Aç</button>
                                                <div class="text-center">
                                                    <a href="{{ url('#') }}" data-toggle="modal"
                                                        data-target="#forgot_password" data-dismiss="modal"
                                                        class="pass_forget_btn">Şifremi Unuttum?</a>
                                                </div>
                                            </form>

                                            @if (session('success'))
                                            <div class="alert alert-success mt-4">
                                                {{ session('success') }}
                                            </div>
                                            @elseif ( session('error') )
                                            <div class="alert alert-danger mt-4">
                                                {{ session('error') }}
                                            </div>
                                            @endif
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- main content part end -->

    <!-- footer  -->
    <!-- jquery slim -->
    <script src="{{ asset('assets/admin/js/jquery-3.4.1.min.js') }}"></script>
    <!-- popper js -->
    <script src="{{ asset('assets/admin/js/popper.min.js') }}"></script>
    <!-- bootstarp js -->
    <script src="{{ asset('assets/admin/js/bootstrap.min.js') }}"></script>
    <!-- sidebar menu  -->
    <script src="{{ asset('assets/admin/js/metisMenu.js') }}"></script>

    <!-- scrollabe  -->
    <script src="{{ asset('assets/admin/vendors/scroll/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('assets/admin/vendors/scroll/scrollable-custom.js') }}"></script>

    <!-- custom js -->
    <script src="{{ asset('assets/admin/js/custom.js') }}"></script>


    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function() {
            'use strict'

            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.querySelectorAll('.needs-validation')

            // Loop over them and prevent submission
            Array.prototype.slice.call(forms)
                .forEach(function(form) {
                    form.addEventListener('submit', function(event) {
                        if (!form.checkValidity()) {
                            event.preventDefault()
                            event.stopPropagation()
                        }

                        form.classList.add('was-validated')
                    }, false)
                })
        })()
    </script>
</body>

</html>
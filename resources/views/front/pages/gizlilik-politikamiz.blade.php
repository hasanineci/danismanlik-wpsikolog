@extends('front.index')
@section('title') Gizlilik Politikamız @endsection
@section('header-ekibimiz-active') active @endsection

@section('content')


<main>

    <!-- page title area start -->
    @include('front.ekler.kurumsal-breadcrump')
    <!-- page title area end -->

    <!-- services details area start -->
    <section class="services__details pt-40 pb-40">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12">
                    <div class="services__des-wrapper">
                        <div class="services__details-img w-img mb-35">
                            <img src="{{ asset ("assets/img/services/details/services-details-img.jpg") }}" alt="gizlilik politikamız">
                        </div>
                        <div class="services__des-title mb-30">
                            <h1>Gizlilik Politikası</h1>
                            <p>Güvenliğiniz bizim için önemli. Bu sebeple bizimle paylaşacağınız kişisel verileriz
                                hassasiyetle korunmaktadır.</p>
                            <p>Biz, Şirket Adı, veri sorumlusu olarak, bu gizlilik ve kişisel verilerin korunması
                                politikası ile, hangi kişisel verilerinizin hangi amaçla işleneceği, işlenen verilerin
                                kimlerle ve neden paylaşılabileceği, veri işleme yöntemimiz ve hukuki sebeplerimiz ile;
                                işlenen verilerinize ilişkin haklarınızın neler olduğu hususunda sizleri aydınlatmayı
                                amaçlıyoruz.</p>
                        </div>
                        <div class="services__des-item">
                            <h3>Toplanan Kişisel Verileriniz, Toplanma Yöntemi ve Hukuki Sebebi</h3>
                            <p>IP adresiniz ve kullanıcı aracısı bilgileriniz, sadece analiz yapmak amacıyla ve çerezler
                                (cookies) vb. teknolojiler vasıtasıyla, otomatik veya otomatik olmayan yöntemlerle ve
                                bazen de analitik sağlayıcılar, reklam ağları, arama bilgi sağlayıcıları, teknoloji
                                sağlayıcıları gibi üçüncü taraflardan elde edilerek, kaydedilerek, depolanarak ve
                                güncellenerek, aramızdaki hizmet ve sözleşme ilişkisi çerçevesinde ve süresince, meşru
                                menfaat işleme şartına dayanılarak işlenecektir.</p>
                        </div>
                        <div class="services__des-item">
                            <div class="services__des-item services__des-list mb-15">
                                <h3>Kişisel Verilerinizin İşlenme Amacı</h3>
                                <ol type="A">
                                    <li>
                                        <p>Bizimle paylaştığınız kişisel verileriniz sadece analiz yapmak suretiyle;
                                            sunduğumuz hizmetlerin gerekliliklerini en iyi şekilde yerine getirebilmek,
                                            bu hizmetlere sizin tarafınızdan ulaşılabilmesini ve maksiumum düzeyde
                                            faydalanılabilmesini sağlamak, hizmetlerimizi, ihtiyaçlarınız doğrultusunda
                                            geliştirebilmek ve sizleri daha geniş kapsamlı hizmet sağlayıcıları ile
                                            yasal çerçeveler içerisinde buluşturabilmek ve kanundan doğan
                                            zorunlulukların (kişisel verilerin talep halinde adli ve idari makamlarla
                                            paylaşılması) yerine getirilebilmesi amacıyla, sözleşme ve hizmet süresince,
                                            amacına uygun ve ölçülü bir şekilde işlenecek ve güncellenecektir.</p>
                                    </li>
                                </ol>
                            </div>
                        </div>
                        <div class="services__des-item">
                            <h3>Toplanan Kişisel Verilerin Kimlere ve Hangi Amaçlarla Aktarılabileceği</h3>
                            <p>Bizimle paylaştığınız kişisel verileriniz; faaliyetlerimizi yürütmek üzere hizmet
                                aldığımız ve/veya verdiğimiz, sözleşmesel ilişki içerisinde bulunduğumuz,iş birliği
                                yaptığımız, yurt içi ve yurt dışındaki 3. şahıslar ile kurum ve kuruluşlara ve talep
                                halinde adli ve idari makamlara, gerekli teknik ve idari önlemler alınması koşulu ile
                                aktarılabilecektir.</p>

                            <div class="services__des-item services__des-list mb-15">
                                <h3>Kişisel Verileri İşlenen Kişi Olarak Haklarınız</h3>
                                <p>KVKK madde 11 uyarınca herkes, veri sorumlusuna başvurarak aşağıdaki haklarını
                                    kullanabilir:</p>
                                <ol type="A">
                                    <li>
                                        <p>Kişisel veri işlenip işlenmediğini öğrenme,</p>
                                    </li>
                                    <li>
                                        <p>Kişisel verileri işlenmişse buna ilişkin bilgi talep etme,</p>
                                    </li>
                                    <li>
                                        <p>Kişisel verilerin işlenme amacını ve bunların amacına uygun kullanılıp
                                            kullanılmadığını öğrenme,</p>
                                    </li>
                                    <li>
                                        <p>Yurt içinde veya yurt dışında kişisel verilerin aktarıldığı üçüncü kişileri
                                            bilme,</p>
                                    </li>
                                    <li>
                                        <p>Kişisel verilerin eksik veya yanlış işlenmiş olması hâlinde bunların
                                            düzeltilmesini isteme,</p>
                                    </li>
                                    <li>
                                        <p>Kişisel verilerin silinmesini veya yok edilmesini isteme,</p>
                                    </li>
                                    <li>
                                        <p>e ve f bentleri uyarınca yapılan işlemlerin, kişisel verilerin aktarıldığı
                                            üçüncü kişilere bildirilmesini isteme,</p>
                                    </li>
                                    <li>
                                        <p>İşlenen verilerin münhasıran otomatik sistemler vasıtasıyla analiz edilmesi
                                            suretiyle kişinin kendisi aleyhine bir sonucun ortaya çıkmasına itiraz etme,
                                        </p>
                                    </li>
                                    <li>
                                        <p>Kişisel verilerin kanuna aykırı olarak işlenmesi sebebiyle zarara uğraması
                                            hâlinde zararın giderilmesini talep etme, haklarına sahiptir.</p>
                                    </li>
                                </ol>
                                <p>Yukarıda sayılan haklarınızı kullanmak üzere email@site.com üzerinden bizimle
                                    iletişime geçebilirsiniz.</p>
                            </div>
                        </div>
                        <div class="services__des-item">
                            <h3>İletişim</h3>
                            <p>Sizlere hizmet sunabilmek amaçlı analizler yapabilmek için, sadece gerekli olan kişisel
                                verilerinizin, işbu gizlilik ve kişisel verilerin işlenmesi politikası uyarınca
                                işlenmesini, kabul edip etmemek hususunda tamamen özgürsünüz. Siteyi kullanmaya devam
                                ettiğiniz takdirde kabul etmiş olduğunuz tarafımızca varsayılacak olup, daha ayrıntılı
                                bilgi için bizimle info@wpsikoloji.com e-mail adresi üzerinden iletişime geçmekten
                                lütfen
                                çekinmeyiniz.</p>
                            <p>Bu gizlilik politikası, <a href="http://wpsikoloji.com" target="_blank" rel="noopener noreferrer">https://wpsikoloji.com</a> aracılığıyla oluşturulmuştur.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- services details area end -->
</main>

@endsection
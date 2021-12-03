@extends('front.index')
@section('title') Hizmetlerimiz @endsection
@section('header-ekibimiz-active') active @endsection

@section('content')


<main>

    <!-- page title area start -->
    @include('front.ekler.breadcrump')
    <!-- page title area end -->

    <!-- hizmetlerimiz area start -->
    <section class="case__area pt-50 pb-80">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="case__details-item  mb-35">
                        <h3>Psikiyatrik Tedaviler</h3>
                        <p>Alanlarında uzman psikolog danışmanlar eşliğinde psikiyatrik tedavi hizmeti sunuyoruz...</p>
                        <p>Tıbbi yaklaşımın özünde sorunun doğru tanımlanması çok önemlidir. Gerçekçi çözümler ancak
                            doğru tanımlar üzerinden üretilebilir. Psikiyatrinin tarihçesi ve gelişme sürecinin de
                            getirdiği özellikler nedeniyle tanı ve tedavi süreçlerinin bilimsel tıbbi süreçler üzerinden
                            yürümesi özellikle önemlidir. Tanı ve tedavi hizmetlerimiz uygulamalarında spekülatif
                            yöntemlerden uzak, kanıta dayalı çözümler üretme ilke edinilmiştir.</p>
                        <p>
                            <strong>Tedavi Alanları:</strong> Bipolar Bozukluk, Şizofreni ve benzeri bozukluklar,
                            Depresyon, Distimi, Obsesif Kompulsif Bozukluk, Panik Bozukluk, Dikkat Eksikliği
                            Hiperaktivite Bozukluğu, Uyku Bozuklukları, Travma Sonrası Stres Bozukluğu, Yaygın Anksiyete
                            Bozukluğu, Sosyal Fobi, Yeme Bozuklukları.
                        </p>
                    </div>
                    <div class="case__details-item process">
                        <h3>Psikoterapiler</h3>
                        <p>
                            <strong>Tedavi Alanları:</strong> <strong>EMDR Tedavisi</strong>,
                            <strong>Hipnoterapi</strong>, <strong>Cinsel Terapi</strong>, <strong>Ebeveyn
                                Danışmanlığı</strong>, <strong>Boşanma Danışmanlığı ve Süreci</strong>,
                            <strong>Şanlıurfa Analitik Çocuk Terapisi Hizmeti</strong>, <strong>Neurobiofeedback -
                                Nöroterapi şanlıurfa</strong>, <strong>Psikoterapi ile Sigarayı Bırakmak</strong>,
                            <strong>Bilişsel Davranışçı Terapi (Yetişkin ve Çocuk)</strong>
                        </p>
                    </div>
                    <div class="case__details-item process">
                        <h3>Psikolog Hizmetleri</h3>
                        <p>
                            <strong>Şanlıurfa</strong> da çevre il ve ilçeler genelinde her konuda Psikolog hizmeti
                            sağlamaktayız.
                        </p>
                        <p>
                            <strong>Tedavi Alanları:</strong> <strong>Yetişkinlere Yönelik Psikolojik Destek</strong>,
                            <strong>Çocuk Psikolog - Şanlıurfa Pedagog</strong>, <strong>Psikolojik Test
                                Uygulamaları</strong>.
                        </p>
                    </div>
                    <div class="case__details-item process">
                        <h3>Konuşma Bozukluğu Tedavisi</h3>
                        <p>
                            Konuşma Bozukluğu Tedavisi, Analitik Çocuk Terapisi ve Artikülasyon Problemleri Tedavisi ile
                            Akıcı Konuşma Bozuklukları, Kekemelik, Artikülasyon Problemleri, Fonolojik Problemler,
                            Gecikmiş Konuşma, Disleksi, Afazi rahatsızlıklarını uzman ekibimizle çözüyoruz.
                        </p>
                    </div>
                    <div class="case__details-item process">
                        <h3>Kliniğimizde Uygulanan Testler</h3>
                        <p>
                            Sık rastlanan psikiyatrik rahatsızlıklara karşın psikolojik testlerle ücretsiz hizmet
                            vermekteyiz. Buradaki asla tanı koyma amacı gütmemektedir.
                        </p>
                        <p>
                            Sadece rahatsızlıkların belirtilerinin olup olmadığını belirlemek için oluşturulmuştur.
                            Alacağınız puanlar başka rahatsızlıklardan kaynaklanıyor olabilir. Eğer bu belirtileri
                            gösteriyorsanız, mutlaka ama mutlaka bir psikiyatrist hekimden yardım alınız.
                        </p>
                        <p>
                            <strong>Testlerimiz:</strong> WISC-R (Çocuklar için zeka testi), WISC-4 (Çocuklar için zeka
                            testi), WAIR-R (Yetişkinler için zeka testi), MMPI (Çok yönlü kişilik envanteri), Özgül
                            Öğrenme Güçlülüğü Testi, Moxo Dikkat Testi, Ayrıntılı Nöropsikiyatrik Test, Beck Anksiyete
                            Ölçeği, Obsesif Kompulsif Belirti Ölçeği, Sosyal Fobi Belirti Ölçeği.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hizmetlerimiz alanı end -->

    <!-- referanslar alanı start -->
    @include('front.ekler.referanslar')
    <!-- referanslar alanı end -->

</main>

@endsection
@extends('front.index')
@section('title') Online Terapi @endsection
@section('header-iletisim-active') active @endsection

@section('content')


<main>

    <!-- page title area start -->
    @include('front.ekler.breadcrump')
    <!-- page title area end -->

    <!-- blog area start -->
    <section class="blog__area pt-120 pb-75">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-8 offset-xl-2 offset-lg-2">
                    <div class="blog__wrapper">
                        <article class="postbox mb-40">
                            <div class="postbox__thumb w-img">
                                <img src="{{ asset ("assets/img/blog/blog-big-1.jpg") }}" alt="blog image">
                            </div>
                            <div class="postbox__content grey-bg">
                                <h3 class="postbox__title postbox__title-2 mb-20">
                                    Online Terapi Neden Popüler Oldu?
                                </h3>
                                <div class="postbox__text mb-25">
                                    <p>
                                        <strong>Online terapi</strong>, yüz yüze olan terapi kadar etkili olmasa da,
                                        modern çağımızda önemli etkileri ile faydaları olduğu kanıtlanmıştır. Bazı
                                        insanlar için, <strong>geleneksel terapi</strong> çok daha etkili bir tercih
                                        olmasının sebebi henüz Online terapinin sunduğu özgürlüğü yaşamamış olmalarından
                                        kaynaklanmaktadır. Eğer siz de Online terapinin sizin için uygun olup olmadığı
                                        konusunda kararsızsanız, anlatacağımız bu olumlu etkenleri göz önünde
                                        bulundurarak karar verebilirsiniz.
                                    </p>
                                </div>
                                <h3 class="postbox__title postbox__title-2 mb-20">
                                    Rahat Bir İletişim Kurabilir miyim?
                                </h3>
                                <div class="postbox__text mb-25">
                                    <p>
                                        1800'lü yılların sonlarında psikoterapinin insanoğlunun hayatına girmesinden
                                        günümüze kadar olan süreçte <strong>geleneksel terapi</strong> ile deneyim
                                        neredeyse değişmeden aynı şekilde devam etmiştir. Geleneksel terapide bir uzman
                                        ile iletişime geçip işyerine giderek, bir kanepede oturuyorsunuz ve
                                        problemleriniz hakkında terapistinizle konuşuyorsunuz. Bir dahaki randevu
                                        hakkında karar verdikten sonra da günü gelince yine aynı mekanda aynı şekilde
                                        iletişim kuruyorsunuz. Ancak, <strong>Online terapi</strong>de, iletişim
                                        kurmanın çok farklı ve yeni yollarını kullanarak, evinizin veya ofisinizin
                                        rahatlığından ödün vermeden iletişime geçebilirsiniz. Pijamalarınızla, spor
                                        kıyafetinizle, dondurma yerken veya bir şeyler yudumlarken terapistinizle
                                        seanslarınızı gerçekleştirebilirsiniz.
                                    </p>
                                </div>
                                <h3 class="postbox__title postbox__title-2 mb-20">
                                    Online Terapi İle Yüz yüze Terapi Arasındaki Fark Nedir?
                                </h3>
                                <div class="postbox__text mb-25">
                                    <p>
                                        <strong> Metin tabanlı terapi (Text-based terapy)</strong>, terapi konunuzu
                                        terapistinizle gün veya hafta boyunca yapma özgürlüğü verir. Aklınıza takılan
                                        herhangi bir konuda zaman gözetmeksizin istediğiniz zaman terapistinize danışma
                                        özgürlüğünüz vardır. Ancak <strong> geleneksel terapi</strong> seanslarında,
                                        aklınıza takılan konularla ilgili haftalarca beklemek zorunda kalırsınız.
                                    </p>
                                </div>
                            </div>
                        </article>
                        <article class="postbox format-gallery mb-40">
                            <div class="postbox__gallery owl-carousel">
                                <img src="{{ asset ("assets/img/blog/gallery/blog-gallary-1.jpg") }}" alt="blog image">
                                <img src="{{ asset ("assets/img/blog/gallery/blog-gallary-2.jpg") }}" alt="blog image">
                                <img src="{{ asset ("assets/img/blog/gallery/blog-gallary-3.jpg") }}" alt="blog image">
                            </div>
                            <div class="postbox__content grey-bg">
                                <h3 class="postbox__title postbox__title-2 mb-20">
                                    Online Terapi Neden Daha Konforludur?
                                </h3>
                                <div class="postbox__text mb-25">
                                    <p>
                                        Geleneksel terapide insanlar haftada bir veya farklı aralıklarla terapisti
                                        ziyaret etmek için planlar yapmak zorundadırlar. Bulunduğunuz yere bağlı olarak
                                        belli bir süreyi terapistinizin ofisine gidip gelmek için planlamanız gerekir.
                                        Genellikle görüşme planlarınızı kendinize göre değil, terapistin çalışma
                                        çizelgesine göre ayarlamanız gerekir. Özellikle yoğun bir yaşam biçimi olan
                                        insanlar için geleneksel bir terapi seansı planlamak çok zahmetli
                                        olabilmektedir. Sonuç olarak terapiden istediğiniz sonucu alamayabilirsiniz.
                                    </p>
                                </div>
                                <h3 class="postbox__title postbox__title-2 mb-20">
                                    Çevrimiçi Terapi İle Başarı Elde Edilir mi?
                                </h3>
                                <div class="postbox__text mb-25">
                                    <p>
                                        Doğru terapist seçimi, terapinizin başarısı için kritik öneme sahiptir. Sosyal
                                        hayatta yaşadığımız zorluklar çoğu zaman yaşam tarzınız ve kariyerinize olumsuz
                                        etkide bulunabilir. Konuşma terapistleri birçok psikolojik ve sosyolojik
                                        problemin çözümü konusunda deneyimlidir. Ayrıca, <strong>Online terapi</strong>
                                        ile bulunduğunuz semt-ilçe veya şehirle sınırlı değilsinizdir. Yerel
                                        terapistler, kişisel problemlerinizi çözmek konusunda donanımlı olmayabilir.
                                        Ancak, <strong> Online terapi</strong> de herhangi bir bölgeye bağlı
                                        değilsinizdir. İstediğiniz şehirde istediğiniz terapistle iletişim
                                        kurabilirsiniz. Birkaç <strong>Online terapi</strong> seansından sonra terapist
                                        ile ilişkinizin uygun olmadığını görürseniz, kolayca yeni bir terapistle
                                        iletişim sağlayabilirsiniz.
                                    </p>
                                </div>
                            </div>
                        </article>
                        <article class="postbox format-quote mb-40">
                            <div class="postbox__quote">
                                <blockquote>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium, mollitia
                                        similique rerum nulla ducimus laudantium odio voluptas eius, vitae optio
                                        incidunt ipsa autem veritatis soluta natus accusamus rem laborum officia.</p>
                                    <footer>- İbrahim Halil Barkın</footer>
                                </blockquote>
                            </div>
                        </article>
                        <article class="postbox mb-40">
                            <div class="postbox__thumb w-img">
                                <img src="{{ asset ("assets/img/blog/blog-big-1.jpg") }}" alt="blog image">
                            </div>
                            <div class="postbox__content grey-bg">
                                <h3 class="postbox__title postbox__title-2 mb-20">
                                    Online Terapi Fiyatları
                                </h3>
                                <div class="postbox__text mb-25">
                                    <p>
                                        <strong>Online terapi</strong>, ek olarak herhangi bir ücret ödemeden
                                        terapistinizle iletişim için sınırsız fırsatlar sunar. Ayrıca problemlerinizi,
                                        sorunu yaşadığınız tarihten çok uzak bir tarihte görüşmek yerine, her an
                                        görüşebilmek hayatınıza dinamizm katacaktır.
                                    </p>
                                </div>
                                <h3 class="postbox__title postbox__title-2 mb-20">
                                    Online Terapi Mahremiyeti Nasıl Sağlar?
                                </h3>
                                <div class="postbox__text mb-25">
                                    <p>
                                        <strong>Online tedavi</strong> ye ilk başladığınızda, terapistinizle bir takma
                                        ad veya takma ad kullanma seçeneğiniz vardır. Çoğu zaman gerekli olmasa da daha
                                        rahat hissetmenizi sağlayacak bir seçenektir. Teknolojik açıdan bakıldığında,
                                        <strong>Online terapi</strong> görüşmeleri yüksek düzeyde güvenlik ve gizlilik
                                        sunmaktadır. Terapistler ile aradaki iletişim tamamen şifrelenmiştir. Online
                                        terapi ile, terapistinizle iletişiminizin zamanını, yerini ve başlangıç-bitim
                                        sürelerini kendinize göre ayarlayabilirsiniz. Psikolojik problemlerinize çözüm
                                        için ve sizi önem sırasında en öne koyması açısından Online terapi tercih
                                        edilmelidir. Tedavinin süresi uzadığında bir dahaki seansta kaldığı yerden
                                        başlayacaktır.
                                    </p>
                                </div>
                                <h3 class="postbox__title postbox__title-2 mb-20">
                                    Terapi Ne Kadar Sürer?
                                </h3>
                                <div class="postbox__text mb-25">
                                    <p>
                                        Gerek özel gerekse sigorta kapsamında yapılan terapiler <strong>Online
                                            terapi</strong> ye oranla daha maliyetlidir. Maliyet karşılaştırılabilir
                                        olsa bile, <strong>geleneksel terapi</strong> seansları haftada en fazla bir
                                        veya iki kez olmak üzere seansta 45-60 dakika ile sınırlıdır. Ancak Online
                                        Terapi ile istediğiniz anda hemen uzmanımız ile iletişime geçebilirsiniz.

                                    </p>
                                </div>
                            </div>
                        </article>
                        <article class="postbox mb-40">
                            <div class="postbox__thumb w-img">
                                <img src="{{ asset ("assets/img/blog/blog-big-1.jpg") }}" alt="blog image">
                            </div>
                            <div class="postbox__content grey-bg">
                                <h3 class="postbox__title postbox__title-2 mb-20">
                                    Terapisti Beğenmezsem Ne Olacak?
                                </h3>
                                <div class="postbox__text mb-25">
                                    <p>
                                        <strong>Online terapi</strong> ye hazır olduğunuzu düşünüyorsanız, zihinsel
                                        sağlıklarına öncelik vermek için zaten önemli bir karar vermiş olan milyonlarca
                                        insan arasına katılacaksınız demektir. Önemli olan terapi seanslarınıza
                                        başlamaya karar vermektir çünkü, sonraki adımlar çok daha kolaydır. Eğer
                                        Terapistimizin verdiği hizmet sizin ihtiyaçlarınızı karşılamıyorsa başka bir
                                        uzmanımızı danışman olarak seçebilirsiniz.
                                    </p>
                                </div>
                                <h3 class="postbox__title postbox__title-2 mb-20">
                                    Terapi Sonrası İlaç Verilir mi?
                                </h3>
                                <div class="postbox__text mb-25">
                                    <p>
                                        Bir terapisti görmek için zaman ayırmak bazen büyük zahmetlere katlanmamıza
                                        neden olabiliyor. <strong>Online terapi</strong> ile, terapinizi hafta boyunca
                                        yapabilirsiniz. Özellikle zor bir gün geçiriyorsanız, terapistinizden kısa bir
                                        süre içerisinde sorunların çözümü noktasında bir öneri ve düşüncelerinizi
                                        yeniden şekillendirme yollarını öğrenebilirsiniz. Bu önerilerin içerisinde ilaç
                                        tedavisi de bulunabilir.
                                    </p>
                                </div>
                                <h3 class="postbox__title postbox__title-2 mb-20">
                                    Görüntülü Görüşme Yapılıyor mu?
                                </h3>
                                <div class="postbox__text mb-25">
                                    <p>
                                        Evet. Anlattıklarınız karşısında terapistinizin tepkisini görmek ve vücut
                                        dilinize tepki vermesini görmek isteyenler için görüntülü sohbet oturumları daha
                                        iyi bir seçenek olacaktır.

                                    </p>
                                </div>
                            </div>
                        </article>
                        <div class="basic-pagination mb-40">
                            <ul>
                                <li><a href="#"><i class="fas fa-angle-double-left"></i></a></li>
                                <li class="active"><a href="#">01</a></li>
                                <li><a href="#">02</a></li>
                                <li><a href="#">03</a></li>
                                <li><a href="#"><i class="fas fa-ellipsis-h"></i></a></li>
                                <li><a href="#"><i class="fas fa-angle-double-right"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- blog area end -->

</main>


@endsection
@extends('frontend.layout.app')
@section('content')
    @include('frontend.layout.slider')
    <div class="container pt-5">
        <div class="row py-4 mb-2">
            <div class="col-md-7 order-2">
                <div class="overflow-hidden">
                    <h2 class="text-color-dark font-weight-bold text-12 mb-2 pt-0 mt-0 appear-animation animated maskUp appear-animation-visible"
                        data-appear-animation="maskUp"
                        data-appear-animation-delay="300"
                        style="animation-delay: 300ms;">Eskişehir Psyche Psikoloji
                    </h2>
                </div>
        
                <p class="lead appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="700" style="animation-delay: 700ms;">
                    PSYCHE PSİKOLOJİ, bireylerin mental sağlıklarını ve yaşam kalitelerini artırmayı amaçlayan profesyonel bir psikolojik hizmet sunumudur. Alanında uzman psikologlarımız ve diyetisyenimiz ile zengin deneyimleri ve çeşitli terapötik yaklaşımları ile danışanlarının ihtiyaçlarına özel çözümler sunmaktadır.
                </p>

                <p class="pb-3 appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="800" style="animation-delay: 800ms;">
                    Kuruluşumuz, bireylerin duygusal ve psikolojik sorunlarıyla başa çıkmalarına yardımcı olmak için bütünsel bir yaklaşım benimsemektedir. Depresyon, anksiyete, stres yönetimi, yas süreci, sınav kaygısı ve ilişki sorunları gibi konularda danışanlarımızla güven dolu bir ortamda çalışmaktayız. Her bireyin farklı bir hikayesi olduğunun bilinciyle, terapi sürecini kişisel hedeflere göre şekillendiriyoruz.

                </p>
                <p class="pb-3 appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="900" style="animation-delay: 800ms;">
                    Ekip üyelerimiz, sürekli eğitim ve gelişim süreçleriyle kendilerini güncelleyerek, danışanlarına en güncel ve etkili yöntemleri sunmaktadır. Psikoterapi sürecinde empati, anlayış ve gizlilik ilkelerine büyük önem veriyoruz.

                </p>

                <p class="pb-3 appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1000" style="animation-delay: 800ms;">
                    PSYCHE PSİKOLOJİ olarak, sağlıklı bir yaşam sürme yolunda yanınızda olmaktan mutluluk duyarız. Bizimle iletişime geçerek, destek almak için ilk adımı atabilirsiniz.


                </p>
                <hr class="solid my-4 appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1100" style="animation-delay: 900ms;">
                <div class="row align-items-center appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1200" style="animation-delay: 1000ms;">
                    <div class="col-lg-6">
                        <a href="{{ route('service') }}" class="btn btn-modern btn-dark mt-3">Çalışma Alanlarım</a>
                        <a href="{{ route('contactus') }}" class="btn btn-modern btn-primary mt-3">İletişime Geç</a>
                    </div>
                    <div class="col-sm-6 text-lg-end my-4 my-lg-0">
                        <strong class="text-uppercase text-1 me-3 text-dark">Takip Et</strong>
                        <ul class="social-icons float-lg-end">
                            <li class="social-icons-instagram"><a href="http://www.instagram.com/{{ config('settings.instagram')}}" target="_blank" title="instagram"><i class="fab fa-instagram"></i></a></li>
                            <li class="social-icons-youtube"><a href="https://www.youtube.com/{{ config('settings.youtube')}}" target="_blank" title="youtube"><i class="fab fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-5 order-md-2 mb-4 mb-lg-0 appear-animation animated fadeInRightShorter appear-animation-visible" data-appear-animation="fadeInRightShorter" style="animation-delay: 100ms;">
                <img src="/logo.png" class="img-fluid mb-2" alt="{{ config('settings.siteTitle')}}">
            </div>
        </div>
    </div>

    <div class="container container-fluid">

        <div class="row">
            <div class="col">
                <p class="text-uppercase mb-0 d-block text-center text-uppercase appear-animation animated fadeInUpShorter appear-animation-visible"
                   data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300" style="animation-delay: 300ms;">Psyche Psikoloji Kliniği</p>
                <h3 class="text-color-quaternary mb-2 mt-2 d-block text-center font-weight-bold text-capitalize appear-animation animated
                    fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400" style="animation-delay: 400ms;">HİZMETLERİMİZ</h3>
                    <hr/>
            </div>
        </div>

        <div class="row">
            @foreach($Service as $item)
                <div class="col-lg-4 mb-4">
                    <a href="{{ route('servicedetail' , $item->slug)}}" title="{{ $item->title }}">

                    <span class="thumb-info thumb-info-no-borders thumb-info-no-borders-rounded thumb-info-lighten thumb-info-bottom-info thumb-info-bottom-info-dark thumb-info-bottom-info-show-more thumb-info-no-zoom">
                        <span class="thumb-info-wrapper">
                            <img src="{{ (!$item->getFirstMediaUrl('page')) ? '/resimyok.jpg' : $item->getFirstMediaUrl('page', 'thumb') }}" class="img-fluid" alt="Eskişehir Psyche Psikoloji Kliniği - {{ $item->title }}">
                            <span class="thumb-info-title">
                                <span class="thumb-info-inner line-height-1">{{ $item->title }}</span>
                            </span>
                        </span>
                    </span>
                    </a>
                </div>

            @endforeach
        </div>
    </div>


    <div class="container py-5 my-5">
        <div class="row justify-content-center pb-3 mb-4">
            <div class="col-lg-9 col-xl-8 text-center">
                <div class="overflow-hidden">
                    <h2 class="font-weight-bold text-color-dark line-height-1 mb-0 appear-animation animated maskUp appear-animation-visible" data-appear-animation="maskUp" data-appear-animation-delay="250" style="animation-delay: 250ms;">Sıkça Sorulan Sorular</h2>
                </div>
                <div class="d-inline-block custom-divider divider divider-primary divider-small my-3">
                    <hr class="my-0 appear-animation animated customLineProgressAnim appear-animation-visible" data-appear-animation="customLineProgressAnim" data-appear-animation-delay="650" style="animation-delay: 650ms;">
                </div>
            </div>
        </div>
        <div class="row row-gutter-sm">
            <div class="col-md-8 col-lg-9 mb-5 mb-md-0">
                <svg class="custom-svg-2 overflow-visible" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 185 151">
                    <g data-plugin-float-element="" data-plugin-options="{'startPos': 'top', 'speed': 0.1, 'transition': true, 'transitionDuration': 2000, 'isInsideSVG': true}" style="top: 0px; transition: transform 2000ms ease-out;">
                        <path fill="#F4F4F4" class="appear-animation" data-appear-animation="fadeInLeftShorterPlus" data-appear-animation-delay="850" d="M34.81,102.81L5.18,73.18c-2.13-2.13-2.13-5.59,0-7.72l29.63-29.63c2.13-2.13,5.59-2.13,7.72,0l29.63,29.63
                            c2.13,2.13,2.13,5.59,0,7.72l-29.63,29.63C40.4,104.94,36.94,104.94,34.81,102.81z"></path>
                    </g>
                    <g data-plugin-float-element="" data-plugin-options="{'startPos': 'top', 'speed': 0.2, 'transition': true, 'transitionDuration': 2500, 'isInsideSVG': true}" style="top: 0px; transition: transform 2500ms ease-out;">
                        <path fill="#F4F4F4" class="appear-animation" data-appear-animation="fadeInLeftShorterPlus" data-appear-animation-delay="1000" d="M92.49,35.35L80.4,23.26c-1.75-1.75-1.75-4.59,0-6.34L92.49,4.83c1.75-1.75,4.59-1.75,6.34,0l12.09,12.09
                            c1.75,1.75,1.75,4.59,0,6.34L98.83,35.35C97.08,37.1,94.24,37.1,92.49,35.35z"></path>
                    </g>
                    <g data-plugin-float-element="" data-plugin-options="{'startPos': 'top', 'speed': 0.3, 'transition': true, 'transitionDuration': 3000, 'isInsideSVG': true}" style="top: 0px; transition: transform 3000ms ease-out;">
                        <path fill="#F4F4F4" class="appear-animation" data-appear-animation="fadeInLeftShorterPlus" data-appear-animation-delay="1150" d="M129.88,148.41l-43.21-43.21c-2.13-2.13-2.13-5.59,0-7.72l43.21-43.21c2.13-2.13,5.59-2.13,7.72,0l43.21,43.21
                            c2.13,2.13,2.13,5.59,0,7.72l-43.21,43.21C135.46,150.54,132.01,150.54,129.88,148.41z"></path>
                    </g>
                </svg>
                <div class="accordion custom-accordion-style-1 appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="750" id="accordion1" style="animation-delay: 750ms;">
                    @foreach ($Faq as $item)
                    <div class="card card-default">
                        <div class="card-header" id="collapse{{ $item->id}}HeadingOne">
                            <h4 class="card-title m-0">
                                <a class="accordion-toggle text-color-dark font-weight-bold collapsed" data-bs-toggle="collapse" data-bs-target="#collapse{{ $item->id}}One" aria-expanded="false" aria-controls="collapse{{ $item->id}}One">
                                    {{ $item->title}}
                                </a>
                            </h4>
                        </div>
                        <div id="collapse{{ $item->id}}One" class="collapse" aria-labelledby="collapse{{ $item->id}}HeadingOne" data-bs-parent="#accordion1">
                            <div class="card-body">
                                {!! $item->desc !!}
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="col-md-4 col-lg-3 text-center text-md-start">
                <div class="appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1000" style="animation-delay: 1000ms;">
                    <h3 class="font-weight-bold text-color-dark text-transform-none text-5-5 mb-3">Hakkımızda</h3>
                    <p class="pb-1 mb-2">Psyche Psikoloji çocuk, ergen ve yetişkinlere online veya yüz yüze danışmanlık hizmeti vermektedir. Kurumumuzda çocuk, ergen ve yetişkinlerin sorun alanlarının değerlendirilmesine yönelik testler, ölçekler ihtiyaca göre tespit edilip uygulanmaktadır.</p>
                    <a href="{{ route('corporatedetail','hakkimizda')}}" class="btn btn-primary custom-btn-border-radius font-weight-bold btn-px-5 py-3 mb-2">Devamı İçin</a>

                    <hr class="my-4">
                </div>
                <div class="appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1100" style="animation-delay: 1100ms;">
                    <h3 class="font-weight-bold text-color-dark text-transform-none text-5-5 pt-2 mb-3">Başka Sorunuz?</h3>
                    <p class="pb-1 mb-2">Sormak istediğiniz farklı sorular varsa bizimle iletişime geçiniz. </p>
                    <a href="{{ route('contactus')}}" class="btn btn-primary custom-btn-border-radius font-weight-bold btn-px-5 py-3">İLETİŞİME GEÇ</a>
                </div>
            </div>
        </div>
    </div>


    <div class="container py-5 my-5">
        <div class="row">
            <div class="col">
                <p class="text-uppercase mb-0 d-block text-center text-uppercase appear-animation animated fadeInUpShorter appear-animation-visible"
                   data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300" style="animation-delay: 300ms;">
                   Psyche Psikoloji Kliniği
                </p>
                <h3 class="text-color-quaternary mb-2 mt-2 d-block text-center font-weight-bold text-capitalize appear-animation animated
                    fadeInUpShorter appear-animation-visible" 
                    data-appear-animation="fadeInUpShorter" 
                    data-appear-animation-delay="400" 
                    style="animation-delay: 400ms;">
                    EKİBİMİZ
                </h3>
                <hr/>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="owl-carousel nav-outside nav-arrows-1 owl-theme" 
                    data-plugin-options="{
                        'responsive': {
                            '0': {'items': 1},
                            '479': {'items': 1},
                            '768': {'items': 2},
                            '979': {'items': 3},
                            '1199': {'items': 3}
                        },
                        'autoplay': false,
                        'autoplayTimeout': 5000,
                        'autoplayHoverPause': true,
                        'dots': false,
                        'nav': true,
                        'loop': false,
                        'margin': 20,
                        'stagePadding': 75
                    }">
                    <div class="owl-stage-outer">
                        <div class="owl-stage">
                            @foreach ($Pages->where('category', 2) as $item)
                            <div class="owl-item">
                                <div class="card custom-card-style-1">
                                    <div class="card-body text-center bg-color-light-scale-1 py-5">
                                        <div class="custom-card-style-1-image-wrapper bg-primary rounded-circle d-inline-block mb-3">
                                            <a href="{{ route('teamdetail', $item->slug)}}" title="{{ $item->title }}">
                                                <img src="{{ (!$item->getFirstMediaUrl('page')) ? '/resimyok.jpg' : $item->getFirstMediaUrl('page', 'thumb') }}" class="img-fluid rounded-circle" alt="{{ $item->title }}">
                                            </a>
                                        </div>
                                        <h4 class="text-color-secondary font-weight-bold text-5 mb-0">
                                            <a href="{{ route('teamdetail', $item->slug)}}" title="{{ $item->title }}" class="text-color-secondary text-color-hover-primary text-decoration-none">{{ $item->title }}</a>
                                        </h4>
                                        <p class="text-2 mb-2">{{ $item->short }}</p>
                                        <ul class="social-icons custom-social-icons social-icons-big">
                                            <li class="social-icons-instagram">
                                                <a href="{{ $item->seo_title }}<" target="_blank" title="Instagram">
                                                    <i class="fab fa-instagram"></i>
                                                </a>
                                            </li>
                                            <li class="social-icons-linkedin mx-2">
                                                <a href="{{ $item->seo_title }}" target="_blank" title="Linkedin">
                                                    <i class="fab fa-linkedin"></i>
                                                </a>
                                            </li>
                                            <li class="social-icons-envelope">
                                                <a href="{{ $item->seo_title }}" target="_blank" title="Mail Adresi">
                                                    <i class="fas fa-envelope"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            @endforeach
                            
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="our-blog pt-5 pt-lg-0 pb-lg-5 mb-5 p-relative bg-color-light">
        <div class="container">
            <div class="row">
                <div class="col">
                    <p class="text-uppercase mb-0 d-block text-center text-uppercase appear-animation animated fadeInUpShorter appear-animation-visible"
                       data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300" style="animation-delay: 300ms;">Psyche Psikoloji Kliniği</p>
                    <h3 class="text-color-quaternary mb-2 d-block text-center font-weight-bold text-capitalize appear-animation animated
                    fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400" style="animation-delay: 400ms;">MAKALELER</h3>
                </div>
            </div>
            <div class="row justify-content-center justify-lg-content-between">

                @foreach($Blog->take(3) as $item)
                <div class="col-sm-12 col-md-6 col-lg-4 mb-4 mb-lg-0">
                    <article>
                        <div class="card border-0 border-radius-0 box-shadow-1 appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500" style="animation-delay: 500ms;">
                            <div class="card-body p-4 z-index-1">
                                <a href="{{ route('blogdetail' , $item->slug)}}" title="{{ $item->title }}">
                                    <img src="{{ (!$item->getFirstMediaUrl('page')) ? '/resimyok.jpg' : $item->getFirstMediaUrl('page', 'thumb') }}" class="img-fluid" alt="{{ $item->title }}">
                                </a>
                                <p class="text-uppercase text-1 mb-3 pt-1 text-color-default">
                                    {{ $item->created_at->diffForHumans()  }}</time> <span class="opacity-3 d-inline-block px-2">|</span> Dr. Turan Çetin</p>
                                <div class="card-body p-0">
                                    <h4 class="card-title mb-3 text-5 font-weight-bold">
                                        <a href="{{ route('blogdetail' , $item->slug)}}" title="{{ $item->title }}">{{ $item->title }}</a>
                                    </h4>
                                    <a href="{{ route('blogdetail' , $item->slug)}}" title="{{ $item->title }}" class="font-weight-bold text-uppercase text-decoration-none d-block mt-3">DEvamını Oku+</a>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection

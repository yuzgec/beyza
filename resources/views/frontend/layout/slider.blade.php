<section class="section custom-section-background position-relative border-0 overflow-hidden m-0 p-0">
    <div class="position-absolute top-0 left-0 right-0 bottom-0 animated fadeIn" style="animation-delay: 600ms;">
        <div class="background-image-wrapper custom-background-style-1 position-absolute top-0 left-0 right-0 bottom-0 animated kenBurnsToRight" style="background-image: url('/banner-1.jpg'); background-position: center right; animation-duration: 30s;"></div>
    </div>
    <div class="container position-relative py-sm-5 my-5">
        <svg class="custom-svg-1 d-none d-sm-block" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 649 578">
            <path fill="#FFF" d="M-225.5,154.7l358.45,456.96c7.71,9.83,21.92,11.54,31.75,3.84l456.96-358.45c9.83-7.71,11.54-21.92,3.84-31.75
                L267.05-231.66c-7.71-9.83-21.92-11.54-31.75-3.84l-456.96,358.45C-231.49,130.66-233.2,144.87-225.5,154.7z"/>
            <path class="animated customLineAnim" fill="none" stroke="#e3017a" stroke-width="1.5" stroke-miterlimit="10" d="M416-21l202.27,292.91c5.42,7.85,3.63,18.59-4.05,24.25L198,603" style="animation-delay: 300ms; animation-duration: 5s;"/>
        </svg>
        <div class="row mb-5 p-relative z-index-1">
            <div class="col-md-8 col-lg-6 col-xl-5">
                <div class="overflow-hidden mb-1">
                    <h1 class="font-weight-bold text-color-grey text-4-5 line-height-2 line-height-sm-7 mb-0 appear-animation"
                        data-appear-animation="maskUp" 
                        data-appear-animation-delay="800">
                        {{config('settings.siteTitle')}}
                    </h1>
                </div>
                <h2 class="text-color-dark font-weight-bold text-8 pb-2 mb-2 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1100">
                    {{config('settings.siteSlogan')}}
                </h2>
                <p class="text-color-dark font-weight-normal text-3 pb-2 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1400">
                    Hayatın zorlukları, bazen duygusal ve psikolojik yükler getirebilir. 
                    Biz, bireylerin ruhsal sağlığını güçlendirmek ve yaşam kalitesini 
                    artırmak amacıyla profesyonel destek sunuyoruz.
                </p>
                <a href="{{ route('contactus')}}" title="İletişime Geç" class="btn btn-primary custom-btn-border-radius custom-btn-arrow-effect-1 font-weight-bold text-3 px-5 btn-py-3 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1300">
                    İLETİŞİME GEÇ
                    <svg class="ms-2" version="1.1" viewBox="0 0 15.698 8.706" width="17" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <polygon stroke="#FFF" stroke-width="0.1" fill="#FFF" points="11.354,0 10.646,0.706 13.786,3.853 0,3.853 0,4.853 13.786,4.853 10.646,8 11.354,8.706 15.698,4.353 "/>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>
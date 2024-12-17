<footer id="footer" class="border-0">
    <div class="container pb-5 pt-3">
        <div class="row text-center text-md-start py-4 my-5">
            <div class="col-md-6 col-lg-3 align-self-center text-center text-md-start text-lg-center mb-5 mb-lg-0">
                <a href="{{ route('home')}}" class="text-decoration-none" title="Eskişehir Psikoloji Kliniği">
                    <img src="/logobb.png" class="img-fluid" alt="Eskişehir Psikoloji Kliniği" width="200px"/>
                </a>
            </div>
            <div class="col-md-6 col-lg-3 mb-5 mb-lg-0">
                <h5 class="text-transform-none font-weight-bold text-color-light text-4-5 mb-4">İLETİŞİM</h5>
                <ul class="list list-unstyled">
                    <li class="pb-1 mb-2">
                        <span class="d-block font-weight-semibold line-height-1 text-color-grey text-3-5">ADRES</span> 
                        <p>{{ config('settings.adres1')}}</p>
                    </li>
                    <li class="pb-1 mb-2">
                        <span class="d-block font-weight-semibold line-height-1 text-color-grey text-3-5 mb-1">TELEFON</span>
                        <ul class="list list-unstyled font-weight-light text-3-5 mb-0">
                            <li class="text-color-light line-height-3 mb-0">
                                <a href="tel:{{ config('settings.telefon1')}}" class="text-decoration-none text-color-light text-color-hover-default">{{ config('settings.telefon1')}}</a>
                            </li>
                          
                        </ul>
                    </li>
                    <li class="pb-1 mb-2">
                        <span class="d-block font-weight-semibold line-height-1 text-color-grey text-3-5">EMAİL</span>
                        <a href="mailto:m{{ config('settings.email1')}}" class="text-decoration-none font-weight-light text-3-5 text-color-light text-color-hover-default">{{ config('settings.email1')}}</a>
                    </li>
                </ul>
                <ul class="social-icons social-icons-medium">
                    <li class="social-icons-instagram">
                        <a href="http://www.instagram.com/{{ config('settings.instagram')}}" class="no-footer-css" target="_blank" title="Instagram"><i class="fab fa-instagram"></i></a>
                    </li>
                  
                    <li class="social-icons-facebook">
                        <a href="http://www.youtube.com/{{ config('settings.youtube')}}" class="no-footer-css" target="_blank" title="youtube"><i class="fab fa-youtube"></i></a>
                    </li>

                    <li class="social-icons-spotify">
                        <a href="http://www.youtube.com/{{ config('settings.youtube')}}" class="no-footer-css" target="_blank" title="spotify"><i class="fab fa-spotify"></i></a>
                    </li>
                </ul>
            </div>
            <div class="col-md-6 col-lg-3 mb-5 mb-md-0">
                <h5 class="text-transform-none font-weight-bold text-color-light text-4-5 mb-4">HİZMETLERİMİZ</h5>
                <ul class="list list-unstyled mb-0">
                    @foreach($Service as $item)
                    <li class="mb-0"><a href="{{ route('servicedetail' , $item->slug)}}" title="{{ $item->title }}">{{ $item->title }}</a></li>
                    @endforeach
                </ul>
            </div>
            <div class="col-md-6 col-lg-2 offset-lg-1">
                <h5 class="text-transform-none font-weight-bold text-color-light text-4-5 mb-4">Mesai Saatleri</h5>
                <ul class="list list-unstyled list-inline custom-list-style-1 mb-0">
                    <li>Pazartesi - Cuma = 09:00 - 19:00</li>
                    <li>Cumartesi = 09:00 - 19:00</li>
                    <li>Pazar :  Kapalı</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="footer-copyright bg-light py-2">
        <div class="container py-2">
            <div class="row">
                <div class="col">
                    <p class="text-center text-3 mb-0">“Bu sitede yer alan içerikler yalnızca bilgilendirme amaçlıdır. Teşhis ve tedavi için mutlaka hekiminize danışınız.”</p>
                </div>
            </div>
        </div>
    </div>
</footer>
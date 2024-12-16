<header id="header" data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': false, 'stickyStartAt': 54, 'stickySetTop': '-54px', 'stickyChangeLogo': false}">
    <div class="header-body header-body-bottom-border-fixed box-shadow-none border-top-0">
        <div class="header-top header-top-small-minheight header-top-simple-border-bottom">
            <div class="container py-2">
                <div class="header-row justify-content-between">
                    <div class="header-column col-auto px-0">
                        <div class="header-row">
                            <div class="header-nav-top">
                                <ul class="nav nav-pills position-relative">
                                    <li class="nav-item ">
                                        <span class="d-flex align-items-center font-weight-medium ws-nowrap text-3 ps-0">
                                            <a href="mailto:{{ config('settings.email1')}}" class="text-decoration-none text-color-dark text-color-hover-primary">
                                                <i class="icons icon-envelope font-weight-bold position-relative text-4 top-3 me-1"></i> {{ config('settings.email1')}}
                                            </a>
                                        </span>
                                    </li>
                                    <li class="nav-item d-none d-sm-block nav-item-left-border nav-item-left-border-remove nav-item-left-border-sm-show">
                                        <span class="d-flex align-items-center font-weight-medium text-color-dark ws-nowrap text-3">
                                            <i class="icons icon-clock font-weight-bold position-relative text-3 top-1 me-2"></i> Çalışma Saatleri : 10:00 - 22:00
                                        </span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="header-column justify-content-end col-auto px-0 d-none d-md-flex">
                        <div class="header-row">
                            <nav class="header-nav-top">
                                <ul class="header-social-icons social-icons social-icons-clean social-icons-icon-gray social-icons-medium custom-social-icons-divider">
                                    <li class="social-icons-facebook">
                                        <a href="http://www.youtube.com/{{ config('settings.youtube')}}" target="_blank" title="youtube"><i class="fab fa-youtube"></i></a>
                                    </li>
                                    <li class="social-icons-twitter">
                                        <a href="http://www.instagram.com/{{ config('settings.instagram')}}" target="_blank" title="instagram"><i class="fab fa-instagram"></i></a>
                                    </li>
                                    <li class="social-icons-spotify">
                                        <a href="http://www.spotify.com/{{ config('settings.spotify')}}" target="_blank" title="v"><i class="fab fa-spotify"></i></a>
                                    </li>
                                   
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-container container">
            <div class="header-row">
                <div class="header-column w-100">
                    <div class="header-row justify-content-between">
                        <div class="header-logo z-index-2 col-lg-2 px-0">
                            <a href="{{ route('home')}}">
                                <img alt="{{config('settings.siteTitle')}}" width="125" src="/logo.png">
                            </a>
                        </div>
                        <div class="header-nav header-nav-links justify-content-end pe-lg-4 me-lg-3">
                            <div class="header-nav-main header-nav-main-arrows header-nav-main-dropdown-no-borders header-nav-main-effect-3 header-nav-main-sub-effect-1">
                                <nav class="collapse">
                                    <ul class="nav nav-pills" id="mainNav">
                                        <li><a href="{{ route('home')}}" class="nav-link">Anasayfa</a></li>
                                        <li><a href="{{ route('corporatedetail', 'hakkimizda')}}" class="nav-link active">Hakkımızda</a></li>
                                        <li class="dropdown">
                                            <a href="#" class="nav-link dropdown-toggle">Yetişkin</a>
                                            <ul class="dropdown-menu">
                                                @foreach ($Service->where('category',1) as $item)
                                                    <li><a href="{{ route('servicedetail', $item->slug)}}" class="dropdown-item">{{$item->title }}</a></li>
                                                @endforeach
                                             
                                            </ul>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#" class="nav-link dropdown-toggle">Ergen</a>
                                            <ul class="dropdown-menu">
                                                @foreach ($Service->where('category',4) as $item)
                                                    <li><a href="{{ route('servicedetail', $item->slug)}}" class="dropdown-item">{{$item->title }}</a></li>
                                                @endforeach
                                             
                                            </ul>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#" class="nav-link dropdown-toggle">Testler</a>
                                            <ul class="dropdown-menu">
                                                @foreach ($Service->where('category',2) as $item)
                                                    <li><a href="{{ route('servicedetail', $item->slug)}}" class="dropdown-item">{{$item->title }}</a></li>
                                                @endforeach
                                             
                                            </ul>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#" class="nav-link dropdown-toggle">Psikodiyet</a>
                                            <ul class="dropdown-menu">
                                                @foreach ($Service->where('category',3) as $item)
                                                    <li><a href="{{ route('servicedetail', $item->slug)}}" class="dropdown-item">{{$item->title }}</a></li>
                                                @endforeach
                                             
                                            </ul>
                                        </li>
                                        <li><a href="{{ route('team')}}" class="nav-link">Ekibimiz</a></li>
                                        <li><a href="{{ route('blog')}}" class="nav-link">Blog</a></li>
                                        <li><a href="{{ route('contactus')}}" class="nav-link">İletişim</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <ul class="header-extra-info custom-left-border-1 d-none d-xl-block">
                            <li class="d-none d-sm-inline-flex ms-0">
                                <div class="header-extra-info-icon">
                                    <i class="icons icon-phone text-3 text-color-dark position-relative top-3"></i>
                                </div>
                                <div class="header-extra-info-text line-height-2">
                                    <span class="text-1 font-weight-semibold text-color-default">Bizi Arayın</span>
                                    <strong class="text-4">
                                        <a href="tel: {{ config('settings.telefon1')}}" class="text-color-hover-primary text-decoration-none">
                                            {{ config('settings.telefon1')}}
                                        </a>
                                    </strong>
                                </div>
                            </li>
                        </ul>
                        
                        <button class="btn header-btn-collapse-nav ms-4" data-bs-toggle="collapse" data-bs-target=".header-nav-main nav">
                            <i class="fas fa-bars"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
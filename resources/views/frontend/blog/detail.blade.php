@extends('frontend.layout.app')
@section('content')

<section class="page-header page-header-modern bg-color-grey page-header-lg">
    <div class="container">
        <div class="row mt-3">
            <div class="col-md-8 order-2 order-md-1 align-self-center p-static">
                <h1 class="text-color-dark font-weight-bold">{{ $Detail->title }}</h1>
                <span class="d-block text-4">Eskişehir {{ config('settings.siteTitle')}}</span>
            </div>
            <div class="col-md-4 order-1 order-md-2 align-self-center">
                <ul class="breadcrumb d-flex justify-content-md-end text-3-5">
                    <li><a href="{{ route('home')}}" class="text-color-default text-color-hover-primary text-decoration-none">Anasayfa</a></li>
                    <li class="active">{{ $Detail->title }}</li>
                </ul>
            </div>
        </div>
    </div>
</section>

    <div class="container">
        <div class="row pb-4">
            <div class="col-lg-8 mb-5 mb-lg-0 appear-animation animated fadeInUpShorterPlus appear-animation-visible" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="200" style="animation-delay: 200ms;">
                <div class="card box-shadow-1 custom-border-radius-1 mb-5" id="form">
                    <div class="card-body z-index-1 py-4 my-3">
                        @if($Detail->getFirstMediaUrl('page'))
                            <img src="{{ $Detail->getFirstMediaUrl('page') }}" class="img-fluid mb-3" alt="{{ $Detail->title }}">
                        @endif
                        {!!  $Detail->desc !!}
                    </div>
                </div>
            </div>
            <div class="col-lg-4 position-relative mb-3">
                <aside class="sidebar" data-plugin-sticky="" data-plugin-options="{'minWidth': 991, 'containerSelector': '.container', 'padding': {'top': 120}}">
                    <div class="card bg-primary custom-border-radius-1">
                        <div class="card-body text-center py-5 my-2">
                            <h2 class="text-color-light font-weight-medium text-3 line-height-2 line-height-sm-1 mb-3 pb-1"> {{ config('settings.siteTitle')}}</h2>
                            <h3 class="font-weight-bold text-color-light text-transform-none text-8 line-height-3 mb-3">Kendinizi Daha İyi Hissetmeniz İçin Buradayız</h3>
                            <p class="font-weight-bold text-color-light text-2 opacity-7 mb-5">Biz, bireylerin ruhsal sağlığını güçlendirmek ve yaşam kalitesini artırmak amacıyla profesyonel destek sunuyoruz.</p>
                            <div class="feature-box custom-feature-box-justify-center align-items-center text-start mb-4">
                                <div class="feature-box-icon bg-transparent">
                                    <i class="icons icon-phone text-8 text-color-light"></i>
                                </div>
                                <div class="feature-box-info line-height-2 ps-1">
                                    <span class="d-block text-4 font-weight-medium text-color-light mb-1">Bize Ulaşın</span>
                                    <strong class="text-6">
                                        <a href="tel:{{ config('settings.telefon1')}}" class="text-color-light text-decoration-none">{{ config('settings.telefon1')}}</a>
                                    </strong>
                                </div>
                            </div>
                            <a href="{{ route('contactus')}}" class="btn btn-light btn-outline custom-btn-border-radius font-weight-bold text-color-light text-color-hover-dark bg-color-hover-light btn-px-5 btn-py-3">
                                Randevu Oluştur
                            </a>
                        </div>
                    </div>


                    <div class="card box-shadow-1 custom-border-radius-1 mb-5">
                        <div class="card-body z-index-1 py-4 my-3">
                            <h2 class="text-color-dark font-weight-bold text-6 mb-4">Hizmetlerimiz</h2>
                            <ul class="custom-nav-list-effect-1 list list-unstyled mb-0">
                                @foreach($Service as $item)
                                <li>
                                    <a  class="text-decoration-none text-color-dark text-color-hover-primary text-3-5" href="{{ route('servicedetail' , $item->slug)}}" title="{{ $item->title }}">
                                        <i class="icon-arrow-right icons"></i> {{ $item->title }}
                                    </a>
                                </li>
                                @endforeach
                               
                            </ul>
                        </div>
                    </div>
                    


                    @include('frontend.layout.form')

                   
                    
                </aside>
            </div>
        </div>
    </div>
@endsection

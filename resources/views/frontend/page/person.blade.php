@extends('frontend.layout.app')
@section('content')
<section class="page-header page-header-modern bg-color-grey page-header-lg">
    <div class="container">
        <div class="row mt-3">
            <div class="col-md-8 order-2 order-md-1 align-self-center p-static">
                <h1 class="text-color-dark font-weight-bold">{{ $Detail->title }}</h1>
                <span class="d-block text-4">{{ config('settings.siteTitle')}}</span>
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


<div class="container pt-5 mt-5">
    <div class="row py-4 mb-2">
        <div class="col-md-8 order-2">
            <div class="row mb-3 align-items-center appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1200" style="animation-delay: 1000ms;">
                <div class="col-lg-9">
                    <h2 class="text-color-dark font-weight-bold text-12 mb-2 pt-0 mt-0 appear-animation animated maskUp appear-animation-visible"
                        data-appear-animation="maskUp"
                        data-appear-animation-delay="300"
                        style="animation-delay: 300ms;">{{ $Detail->title }} <p style="font-size:20px;letter-spacing:1px;margin-top:7px">{{ $Detail->short }}</p>
                    </h2>
                </div>
                <div class="col-sm-3 text-lg-end my-4 my-lg-0">
                    <strong class="text-uppercase text-1 me-3 text-dark">Takip Et</strong>
                    <ul class="social-icons float-lg-end">
                        <li class="social-icons-instagram"><a href="http://www.instagram.com/{{ config('settings.instagram')}}" target="_blank" title="instagram"><i class="fab fa-instagram"></i></a></li>
                        <li class="social-icons-youtube"><a href="https://www.youtube.com/{{ config('settings.youtube')}}" target="_blank" title="youtube"><i class="fab fa-youtube"></i></a></li>
                    </ul>
                </div>
            </div>
            <hr class="mt-1 align-items-center appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1200" style="animation-delay: 1000ms;">
    
            <div class="lead appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="700" style="animation-delay: 700ms;">
                <div class="text-2">{!! $Detail->desc!!}</div> 
            </div>

           
        </div>
        <div class="col-md-4 order-md-2 mb-4 mb-lg-0 appear-animation animated fadeInRightShorter appear-animation-visible" data-appear-animation="fadeInRightShorter" style="animation-delay: 100ms;">
            @if($Detail->getFirstMediaUrl('page'))
                <img src="{{ $Detail->getFirstMediaUrl('page') }}" class="img-fluid mb-3" alt="{{ $Detail->title }}">
            @endif
        </div>
    </div>
</div>

@endsection
@extends('frontend.layout.app')
@section('content')
<section class="page-header page-header-modern bg-color-grey page-header-lg">
    <div class="container">
        <div class="row">
            <div class="col-md-8 order-2 order-md-1 align-self-center p-static">
                <h1 class="text-color-dark font-weight-bold">Ekibimiz</h1>
                <span class="d-block text-4">Eskişehir {{config('settings.siteTitle')}}</span>

            </div>
            <div class="col-md-4 order-1 order-md-2 align-self-center">
                <ul class="breadcrumb d-flex justify-content-md-end text-3-5">
                    <li><a href="{{ route('home')}}" class="text-color-default text-color-hover-primary text-decoration-none">Anasayfa</a></li>
                    <li class="active">Ekibimiz</li>
                </ul>
            </div>
        </div>
    </div>
</section>



<div class="container py-5 my-5">
    <div class="row appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600">
            
        @foreach ($Pages->where('category', 2) as $item)
            
        <div class="col-md-4 col-12">
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

@endsection
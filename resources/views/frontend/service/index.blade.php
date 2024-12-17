@extends('frontend.layout.app')
@section('content')

<section class="page-header page-header-modern bg-color-grey page-header-lg">
    <div class="container">
        <div class="row">
            <div class="col-md-8 order-2 order-md-1 align-self-center p-static">
                <h1 class="text-color-dark font-weight-bold">Çalışma Alanlarımız</h1>
                <span class="d-block text-4">{{ config('settings.siteTitle')}}</span>

            </div>
            <div class="col-md-4 order-1 order-md-2 align-self-center">
                <ul class="breadcrumb d-flex justify-content-md-end text-3-5">
                    <li><a href="{{ route('home')}}" class="text-color-default text-color-hover-primary text-decoration-none">Anasayfa</a></li>
                    <li class="active">Çalışma Alanlarımız</li>
                </ul>
            </div>
        </div>
    </div>
</section>
    <div class="container container-fluid">
        <div class="row">
            @foreach($Service as $item)
                <div class="col-lg-4 mb-4">
                    <a href="{{ route('servicedetail' , $item->slug)}}" title="{{ $item->title }}">

                    <span class="thumb-info thumb-info-no-borders thumb-info-no-borders-rounded thumb-info-lighten thumb-info-bottom-info thumb-info-bottom-info-dark thumb-info-bottom-info-show-more thumb-info-no-zoom">
                        <span class="thumb-info-wrapper">
                            <img src="{{ (!$item->getFirstMediaUrl('page')) ? '/resimyok.jpg' : $item->getFirstMediaUrl('page', 'thumb') }}" class="img-fluid" alt="Eskişehir {{ $item->title }}">
                            <span class="thumb-info-title">
                                <span class="thumb-info-inner line-height-1">{{ $item->title }}</span>
{{--
                                <span class="thumb-info-show-more-content opacity-7"><p class="mb-0 text-1 line-height-5">Buraya kısa bir açıklama yazısı gelebilir. 1 veya 2 cümlededen oluşan</p></span>
--}}
                            </span>
                        </span>
                    </span>
                    </a>
                </div>

            @endforeach
        </div>
    </div>
@endsection

@extends('layouts.main')

@section('style')

@endsection

@section('content')
    <div class="page__material">
        <div class="page__material-banner" style="background-image: url(/img/bg/bg-material.webp);">
            <div class="banner__content">
                <div class="general__history">
                    <a href="" class="">{{ __('asd.Главная') }}</a>
                    <a href="" class="">{{ __('asd.ПРОДУКЦИЯ') }}</a>
                    <a href="" class="active">{{ __('asd.Инертные материалы') }}</a>
                </div>
                <h2 class="general__title">{{ __('asd.Инертные материалы') }}</h2>
            </div>
            <div class="banner__bottom">
                <div class="banner__bottom-left">
                    <h2 class="general__title">{{ __('asd.Преимущества') }}</h2>
                    <p class="general__subtitle-second">
                        {{ __('asd.Соответствуют всем физико-механическим характеристикам ГОСТов; качество и свойства, соответствующие стандартам - прочность породы и лещадность; морозоустойчивость; не имеют посторонних вредных примесей;') }}
                    </p>
                </div>
                <a class="banner__bottom-right">
                    <svg width="56" height="56" viewBox="0 0 56 56" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="28" cy="28" r="28" fill="white"/>
                        <path d="M40 15.6667H31.76C31.2 14.12 29.7333 13 28 13C26.2667 13 24.8 14.12 24.24 15.6667H16.0004C16.0004 15.6667 16 16.8667 16 18.3333L16 42.3333C16 42.3333 17.2 42.3333 18.6667 42.3333H37.3333C38.8 42.3333 40 42.3333 40 42.3333L40 18.3818C40 16.9151 40 15.6667 40 15.6667ZM28 15.6667C28.7333 15.6667 29.3333 16.2667 29.3333 17C29.3333 17.7333 28.7333 18.3333 28 18.3333C27.2667 18.3333 26.6667 17.7333 26.6667 17C26.6667 16.2667 27.2667 15.6667 28 15.6667ZM37.3333 39.6667H18.6667C18.6667 39.6667 18.6667 39.0667 18.6667 38.3333V19.6667C18.6667 18.9333 18.6667 18.3333 18.6667 18.3333H21.3333V19.6667C21.3333 21.1333 22.5333 22.3333 24 22.3333H32C33.4667 22.3333 34.6667 21.1333 34.6667 19.6667V18.3333H37.3333C37.3333 18.3333 37.3333 18.9333 37.3333 19.6667V38.3333C37.3333 39.0667 37.3333 39.6667 37.3333 39.6667Z" fill="#141414"/>
                    </svg>
                    <span>{{ __('asd.Калькулятор расчета') }}</span>
                </a>
            </div>
        </div>
        <div class="page__material-container">
            <h2 class="general__title"><span>{{ __('asd.Все продукты') }}</span></h2>
           @foreach(\App\Models\Materials::where('class', 1)->get() as $data)
            <a href="/materials/{{ $data->id }}" class="box">
                <img src="{{ $data->photo }}" alt="">
                <div class="content">
                    <h4 class="title">{{ $data['header_'.$lan] }}</h4>
                    <div class="txt">{!! substr($data['description1_'.$lan], 3, 130) !!}...</div>
                </div>
            </a>
            @endforeach
        </div>
        <div class="general__feedback">
            <div class="top">
                <h2 class="general__title">{{ __('asd.свяжитесь с нами') }}</h2>
                <p class="general__subtitle-second">
                    {{ __('asd.Благодаря современной автоматизированной технологической линии обработки материалов компаний Aymak и Metso производятся следующие виды инертных материалов:') }}
                </p>
            </div>
            <a href="text:javascript" class="general__feedback-btn">{{ __('asd.Написать') }}</a>
        </div>
    </div>
    @include('layouts.footer')
@endsection


@section('script')
    <script>
        // $('.header').addClass('header__dark')

        $(window).on('scroll load', () => {
            ($(window).scrollTop() > 80) ?
                $('.header').addClass('header__dark') :
                $('.header').removeClass('header__dark');
        });
    </script>
@endsection

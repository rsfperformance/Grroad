@extends('layouts.main')

@section('style')

@endsection

@section('content')
    <div class="page__lab">
        <div class="page__lab-banner" style="background-image: url(/img/bg/bg-lab.webp);">
            <div class="banner__content">
                <div class="general__history">
                    <a href="" class="">{{ __('asd.Главная') }}</a>
                    <a href="" class="">{{ __('asd.ПРОДУКЦИЯ') }}</a>
                    <a href="" class="active">{{ __('asd.Лаборатория') }}</a>
                </div>
                <h2 class="general__title">{{ __('asd.СОВРЕМЕННАЯ ДОРОЖНО-СТРОИТЕЛЬНАЯ ЛАБОРАТОРИЯ') }}</h2>
                <p class="general__subtitle-second"></p>
            </div>
            <div class="banner__bottom">
                <div class="banner__bottom-left">
                    <p class="general__subtitle-second">{{ __('asd.Контроль качества материалов и работ является основным условием надежности нашей продукции.') }}</p>
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
        <div class="cluster">
            <h2 class="general__title"><span>{{ __('asd.Этапы работ') }}</span></h2>
            <div class="cluster__container">
                <div class="cluster__container-box">
                    <svg width="342" height="342" viewBox="0 0 342 342" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="171" cy="171" r="170.5" stroke="#888888" stroke-dasharray="15 15"/>
                        <path  pathLength="1" d="M171 0C265.475 0 342 76.5249 342 171C342 265.475 265.475 342 171 342C76.5249 342 0 265.475 0 171C0 76.5249 76.5249 0 171 0Z" fill="black"/>
                    </svg>
                    <h3>{{ __('asd.входной контроль качества и анализ инертных материалов;') }}
                    </h3>
                    <img src="/img/bg/arrow-cluster-1.webp" alt="arrow">
                </div>
                <div class="cluster__container-box">
                    <svg width="342" height="342" viewBox="0 0 342 342" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="171" cy="171" r="170.5" stroke="#888888" stroke-dasharray="15 15"/>
                        <path pathLength="1" d="M171 0C265.475 0 342 76.5249 342 171C342 265.475 265.475 342 171 342C76.5249 342 0 265.475 0 171C0 76.5249 76.5249 0 171 0Z" fill="black"/>
                    </svg>
                    <h3>
                        {{ __('asd.разработку составов асфальтобетонных и бетонных смесей;') }}
                    </h3>
                    <img src="/img/bg/arrow-cluster-1.webp" alt="arrow">
                </div>
                <div class="cluster__container-box">
                    <svg width="342" height="342" viewBox="0 0 342 342" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="171" cy="171" r="170.5" stroke="#888888" stroke-dasharray="15 15"/>
                        <path pathLength="1" d="M171 0C265.475 0 342 76.5249 342 171C342 265.475 265.475 342 171 342C76.5249 342 0 265.475 0 171C0 76.5249 76.5249 0 171 0Z" fill="black"/>
                    </svg>
                    <h3>
                        {{ __('asd.разработку и контроль технологического процесса производства;') }}
                    </h3>
                    <img src="/img/bg/arrow-cluster-1.webp" alt="arrow">
                </div>
                <div class="cluster__container-box">
                    <svg width="342" height="342" viewBox="0 0 342 342" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="171" cy="171" r="170.5" stroke="#888888" stroke-dasharray="15 15"/>
                        <path pathLength="1" d="M171 0C265.475 0 342 76.5249 342 171C342 265.475 265.475 342 171 342C76.5249 342 0 265.475 0 171C0 76.5249 76.5249 0 171 0Z" fill="black"/>
                    </svg>
                    <h3>{{ __('asd.контроль качества произведенной продукции;') }}
                    </h3>
                    <img src="/img/bg/arrow-cluster-1.webp" alt="arrow">
                </div>
                <div class="cluster__container-box">
                    <svg width="342" height="342" viewBox="0 0 342 342" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="171" cy="171" r="170.5" stroke="#888888" stroke-dasharray="15 15"/>
                        <path pathLength="1" d="M171 0C265.475 0 342 76.5249 342 171C342 265.475 265.475 342 171 342C76.5249 342 0 265.475 0 171C0 76.5249 76.5249 0 171 0Z" fill="black"/>
                    </svg>
                    <h3>{{ __('asd.полное сопровождение объектов дорожного строительства') }}</h3>
                    <img src="/img/bg/arrow-cluster-1.webp" alt="arrow">
                </div>
                <div class="cluster__container-box">
                    <svg width="342" height="342" viewBox="0 0 342 342" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="171" cy="171" r="170.5" stroke="#888888" stroke-dasharray="15 15"/>
                        <path pathLength="1" d="M171 0C265.475 0 342 76.5249 342 171C342 265.475 265.475 342 171 342C76.5249 342 0 265.475 0 171C0 76.5249 76.5249 0 171 0Z" fill="black"/>
                    </svg>
                    <h3>
                        {{ __('asd.оформление документов по лабораторным и полевым испытаниям;') }}
                    </h3>
                    <img src="/img/bg/arrow-cluster-1.webp" alt="arrow">
                </div>
                <div class="cluster__container-box">
                    <svg width="342" height="342" viewBox="0 0 342 342" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="171" cy="171" r="170.5" stroke="#888888" stroke-dasharray="15 15"/>
                        <path pathLength="1" d="M171 0C265.475 0 342 76.5249 342 171C342 265.475 265.475 342 171 342C76.5249 342 0 265.475 0 171C0 76.5249 76.5249 0 171 0Z" fill="black"/>
                    </svg>
                    <h3>
                        {{ __('asd.контроль качества выполненных работ на объектах строительства;') }}
                    </h3>
                </div>
            </div>
        </div>
        <div class="lab__info">
            <img src="/img/bg/bg-lab2.webp" alt="bg-mob" class="desc-off">
            <div class="content">
                <h2 class="general__title">
                    <span>
                        {{ __('asd.Контроль качества материалов и работ является основным условием надежности нашей продукции') }}
                    </span>
                </h2>
                <p class="general__subtitle-second">{{ __('asd.Наличие современного диагностического оборудования в собственных производственной и мобильной дорожной лабораториях в соответствии с международными стандартами ISO 9001, ISO 14001 и OHSAS 18001 позволяет оперативно и качественно провести испытания и определить физико-механические свойства материалов, применяемых при строительстве, ремонте и реконструкции автомобильных дорог, в том числе: грунтов, инертных материалов, асфальтобетонных смесей различных типов и марок;') }}</p>
            </div>
        </div>
        <div class="rig">
            <h2 class="general__title">{{ __('asd.НАШЕ ОБОРУДОВАНИЕ') }}</h2>
            <div class="rig__container">
                @foreach(\App\Models\Equipment::all() as $data)
                <div class="box"><img src="{{ $data->photo }}" alt="">
                    <h4>{{ $data['header_'.$lan] }}</h4>
                </div>
                @endforeach
            </div>
        </div>
        <div class="general__feedback">
            <div class="top">
                <h2 class="general__title">{{ __('asd.СВЯЖИТЕСЬ С НАМИ') }}</h2>
                <p class="general__subtitle-second">
                    {{ __('asd.Благодаря современной автоматизированной технологической линии обработки материалов компаний Aymak и Metso производятся следующие виды инертных материалов') }}
                </p>
            </div>
            <a href="" class="general__feedback-btn">{{ __('asd.Написать') }}</a>
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

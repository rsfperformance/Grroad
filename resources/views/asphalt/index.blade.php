@extends('layouts.main')

@section('style')

@endsection

@section('content')
    <div class="page__asphalt">
        <div class="page__asphalt-banner" style="background-image: url(/img/bg/bg-asphalt.webp);">
            <div class="banner__content">
                <div class="general__history">
                    <a href="" class="">{{ __('asd.Главная') }}</a>
                    <a href="" class="">{{ __('asd.Продукция') }}</a>
                    <a href="" class="active">{{ __('asd.Укладка асфальта') }}</a>
                </div>
                <h2 class="general__title">{{ __('asd.УКЛАДКА АСФАЛЬТА') }}</h2>
                <ul>
                    <li>
                        <p class="general__subtitle">{!! __('asd.Соответствуют всем физико-механическим характеристикам ГОСТов;') !!}
                        </p>
                    </li>
                    <li>
                        <p class="general__subtitle">{!! __('asd.Высокая прочность покрытия к механическим повреждениям и большим нагрузкам;') !!}
                        </p>
                    </li>
                    <li>
                        <p class="general__subtitle">{!! __('asd.Устойчивость к температурным перепадам и климатическим осадкам;') !!}
                        </p>
                    </li>
                    <li>
                        <p class="general__subtitle">{!! __('asd.Износостойкость и длительность эксплуатации;') !!}
                        </p>
                    </li>
                    <li>
                        <p class="general__subtitle">{!! __('asd.Применяются различные модифицирующие добавки, в т.ч. СБС полимер, для достижения высокого качества и продления срока службы асфальтового покрытия;') !!}
                        </p>
                    </li>
                    <li>
                        <p class="general__subtitle">{!! __('asd.сертификаты качества и полный пакет документов на отгружаемую продукцию;') !!}
                        </p>
                    </li>
                </ul>
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
                    <h3>{{ __('asd.Лабораторные исследования') }}</h3>
                    <img src="/img/bg/arrow-cluster-1.png" alt="arrow">
                </div>
                <div class="cluster__container-box">
                    <svg width="342" height="342" viewBox="0 0 342 342" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="171" cy="171" r="170.5" stroke="#888888" stroke-dasharray="15 15"/>
                        <path pathLength="1" d="M171 0C265.475 0 342 76.5249 342 171C342 265.475 265.475 342 171 342C76.5249 342 0 265.475 0 171C0 76.5249 76.5249 0 171 0Z" fill="black"/>
                    </svg>
                    <h3>{{ __('asd.Геодезические исследования') }}</h3>
                    <img src="/img/bg/arrow-cluster-1.png" alt="arrow">
                </div>
                <div class="cluster__container-box">
                    <svg width="342" height="342" viewBox="0 0 342 342" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="171" cy="171" r="170.5" stroke="#888888" stroke-dasharray="15 15"/>
                        <path pathLength="1" d="M171 0C265.475 0 342 76.5249 342 171C342 265.475 265.475 342 171 342C76.5249 342 0 265.475 0 171C0 76.5249 76.5249 0 171 0Z" fill="black"/>
                    </svg>
                    <h3>{{ __('asd.Подбор оптимального вида асфальта') }}</h3>
                    <img src="/img/bg/arrow-cluster-1.png" alt="arrow">
                </div>
                <div class="cluster__container-box">
                    <svg width="342" height="342" viewBox="0 0 342 342" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="171" cy="171" r="170.5" stroke="#888888" stroke-dasharray="15 15"/>
                        <path pathLength="1" d="M171 0C265.475 0 342 76.5249 342 171C342 265.475 265.475 342 171 342C76.5249 342 0 265.475 0 171C0 76.5249 76.5249 0 171 0Z" fill="black"/>
                    </svg>
                    <h3>{{ __('asd.Подбор оборудования и техники') }}</h3>
                    <img src="/img/bg/arrow-cluster-1.png" alt="arrow">
                </div>
                <div class="cluster__container-box">
                    <svg width="342" height="342" viewBox="0 0 342 342" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="171" cy="171" r="170.5" stroke="#888888" stroke-dasharray="15 15"/>
                        <path pathLength="1" d="M171 0C265.475 0 342 76.5249 342 171C342 265.475 265.475 342 171 342C76.5249 342 0 265.475 0 171C0 76.5249 76.5249 0 171 0Z" fill="black"/>
                    </svg>
                    <h3>{{ __('asd.Благоустройство и создание инфраструктуры') }}</h3>
                    <img src="/img/bg/arrow-cluster-1.png" alt="arrow">
                </div>
                <div class="cluster__container-box">
                    <svg width="342" height="342" viewBox="0 0 342 342" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="171" cy="171" r="170.5" stroke="#888888" stroke-dasharray="15 15"/>
                        <path pathLength="1" d="M171 0C265.475 0 342 76.5249 342 171C342 265.475 265.475 342 171 342C76.5249 342 0 265.475 0 171C0 76.5249 76.5249 0 171 0Z" fill="black"/>
                    </svg>
                    <h3>{{ __('asd.Укладка дорожного полотна') }}</h3>
                    <img src="/img/bg/arrow-cluster-1.png" alt="arrow">
                </div>
                <div class="cluster__container-box">
                    <svg width="342" height="342" viewBox="0 0 342 342" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="171" cy="171" r="170.5" stroke="#888888" stroke-dasharray="15 15"/>
                        <path pathLength="1" d="M171 0C265.475 0 342 76.5249 342 171C342 265.475 265.475 342 171 342C76.5249 342 0 265.475 0 171C0 76.5249 76.5249 0 171 0Z" fill="black"/>
                    </svg>
                    <h3>{{ __('asd.Определение сетевого графика') }}
                    </h3>
                </div>
            </div>
        </div>
        <div class="vantage">
            <div class="vantage__container"><img src="/img/asphalt/1.webp" alt="bg-1">
                <div class="content">
                    <h2 class="general__title"><span>{{ __('asd.Технология OKUR') }}</span></h2>
                    <p class="general__subtitle">{{ __('asd.основание, на котором уложены слои щебня, является несущим слоем «дорожной одежды», он воспринимает транспортную нагрузку и распределяет ее на земляное полотно') }}</p>
                </div>
            </div>
            <div class="vantage__container"><img src="/img/asphalt/3.webp" alt="bg-3">
                <div class="content">
                    <h2 class="general__title"><span>{{ __('asd.Финишная отделка') }}</span></h2>
                    <p class="general__subtitle">{{ __('asd.это верхний слой основания, основное назначение которого состоит в распределении эксплуатационных нагрузок. Применяется особый материал с высокими прочностными свойствами, который производится с оптимальной влажностью.') }}</p>
                </div>
            </div>
            <div class="vantage__container"><img src="/img/asphalt/4.webp" alt="bg-4">
                <div class="content">
                    <h2 class="general__title"><span>{{ __('asd.Разметка горячая термопластиком') }}</span></h2>
                    <p class="general__subtitle">{{ __('asd.способ нанесения дорожной разметки путем разогрева полимерного материала до жидкого состояния, с последующим нанесением его на размечаемую поверхность. Данный способ применяется в местах с повышенными требованиями к износостойкости и сроку службы разметки') }}</p>
                </div>
            </div>
            <div class="vantage__container"><img src="/img/asphalt/5.webp" alt="bg-5">
                <div class="content">
                    <h2 class="general__title">
                        <span>{{ __('asd.Инновационные технологии ирригационной системы') }}</span>
                    </h2>
                    <p class="general__subtitle">{{ __('asd.новая дренажная система с высокими техническими характеристиками препятствует разрушению дорожного покрытия и продлевает срок эксплуатации дороги') }}</p>
                </div>
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

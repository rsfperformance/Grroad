@extends('layouts.main')

@section('style')

@endsection

@section('content')
    <div class="page page__about">
        <div class="about__top">
            <div class="about__top-left"></div>
            <div class="about__top-right">
                <div class="content">
                    <span>{{ __('asd.Главная') }}</span>
                    <h2 class="general__title">{{ __('asd.КОМПАНИЯ «GRAND ROAD TASHKENT»') }}</h2>
                    <p class="general__subtitle">{{ __('asd.СП ООО Grand Road Tashkent является одним из крупнейших специализированных предприятий комплексного производства дорожно — строительных материалов, а также проектирования, строительства и ремонта дорог и мостов.') }}
                    </p>
                </div>
            </div>
        </div>
        <div class="about__leading">
            <h2 class="general__title">{{ __('asd.Ведущий производитель') }}</h2>
            <p class="general__subtitle">{{ __('asd.СП ООО Grand Road Tashkent является одним из крупнейших специализированных предприятий комплексного производства дорожно — строительных материалов, а также проектирования, строительства и ремонта дорог и мостов.') }}
            </p>
            <div class="about__leading-container">
                <div class="about__leading-numbers">
                    <h2>{{ \App\Models\About::find(1)->plant_area }}<span>га</span></h2>
                    <p>{{ __('asd.Общая площадь завода') }}</p>
                </div>
                <div class="about__leading-numbers">
                    <h2>{{ \App\Models\About::find(1)->workers }}+</h2>
                    <p>{{ __('asd.Количество работников') }}</p>
                </div>
                <div class="about__leading-numbers">
                    <h2>{{ \App\Models\About::find(1)->territory }}+</h2>
                    <p>{{ __('asd.Территория карьера') }}</p>
                </div>
                <div class="about__leading-numbers">
                    <h2>{{ \App\Models\About::find(1)->old }}+</h2>
                    <p>{{ __('asd.лет на рынке') }}</p>
                </div>
                <div class="about__leading-numbers">
                    <h2>{{ \App\Models\About::find(1)->projects }}<span>{{ __('asd.тонна') }}</span></h2>
                    <p>{{ __('asd.Производство инертных материалов') }}</p>
                </div>
            </div>
            <img src="/img/bg/bg-about-2.webp" alt="about-2">
            <div class="about__leading-txt">
                {!! \App\Models\About::find(1)['description_'.$lan] !!}
            </div>
        </div>
        <div class="about__history">
            <h2 class="general__title-second">{{ __('asd.ИСТОРИЯ КОМПАНИИ') }}</h2>
            <div class="timeline-event timeline-tab">
                <div class="timeline-years">
                    @foreach(\App\Models\Year::all() as $data)
                        <span>{{ $data->year }}</span>
                    @endforeach
                </div>
                    @foreach(\App\Models\Year::all() as $data)
                        <div class="timeline__year">
                            <div class="timeline-carousel owl-carousel">
                                @foreach(\App\Models\History::where('year', $data->id)->get() as $datum)
                                    <a href="" class="box">
                                        <img data-fancybox="gallery" src="{{ $datum->photo }}" alt="">
                                        <div class="content">
                                            <h4 class="title">{{ $datum['description_'.$lan] }}</h4>
                                        </div>
                                    </a>
                                @endforeach
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="about__products">
                <div class="titles">
                    <h4>{{ __('asd.Специализация предприятия') }}</h4>
                    <h2 class="general__title"><span>{{ __('asd.Асфальтирование, прокладка дорог') }}</span></h2>
                    <ul>
                        <li><span></span>
                            <p>{{ __('asd.Применение материалов, покрытий и слоев, способных выдержать поток и тяжесть автомобилей.') }}</p>
                        </li>
                        <li><span></span>
                            <p>{{ __('asd.Высокая прочность покрытия к механическим повреждениям и большим нагрузкам;') }}</p>
                        </li>
                        <li><span></span>
                            <p>{{ __('asd.Устойчивость к температурным перепадам и климатическим осадкам;') }}</p>
                        </li>
                        <li><span></span>
                            <p>{{ __('asd.Износостойкость и длительность эксплуатации;') }}</p>
                        </li>
                        <li><span></span>
                            <p>{{ __('asd.Равномерное покрытие;') }}</p>
                        </li>
                        <li><span></span>
                            <p>{{ __('asd.Шероховатая фактура покрытия обеспечивает безопасное движение;') }}</p>
                        </li>
                        <li><span></span>
                            <p>{{ __('asd.Применяются различные модифицирующие добавки, в т.ч. СБС полимер, для достижения высокого качества и продления срока службы асфальтового покрытия;') }}</p>
                        </li>
                        <li><span></span>
                            <p>{{ __('asd.Сертификаты качества и полный пакет документов на отгружаемую продукцию;') }}</p>
                        </li>
                        <li><span></span>
                            <p>{{ __('asd.Выгодная цена за счет прямых поставок от самого производителя, без посредников.') }}</p>
                        </li>
                    </ul>
                    <div id="about__products-dots"></div>
                </div>
                <div class="right">
                    <img src="/img/about/p-1.jpg" alt="p-1.jpg">
                    <a href="/materials/asphalt" class="right__links">
                        <svg width="120" height="120" viewBox="0 0 120 120" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M51.0606 45.8839L50.1767 45L51.9444 43.2322L52.8283 44.1161L51.0606 45.8839ZM67.5 60.5556L68.3839 59.6717L69.2678 60.5556L68.3839 61.4394L67.5 60.5556ZM52.8283 76.995L51.9444 77.8789L50.1767 76.1111L51.0606 75.2272L52.8283 76.995ZM52.8283 44.1161L68.3839 59.6717L66.6161 61.4394L51.0606 45.8839L52.8283 44.1161ZM68.3839 61.4394L52.8283 76.995L51.0606 75.2272L66.6161 59.6717L68.3839 61.4394Z" fill="white"/>
                            <rect x="-0.5" y="0.5" width="119" height="119" rx="59.5" transform="matrix(-1 0 0 1 119 0)" stroke="white"/>
                        </svg>
                    </a>
                </div>
            </div>
            <div class="about__products about__products-second">
                <div class="right">
                    <img src="/img/about/p-2.jpg" alt="p-2.jpg">
                    <a href="/materials/inert" class="right__links">
                        <svg width="120" height="120" viewBox="0 0 120 120" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M51.0606 45.8839L50.1767 45L51.9444 43.2322L52.8283 44.1161L51.0606 45.8839ZM67.5 60.5556L68.3839 59.6717L69.2678 60.5556L68.3839 61.4394L67.5 60.5556ZM52.8283 76.995L51.9444 77.8789L50.1767 76.1111L51.0606 75.2272L52.8283 76.995ZM52.8283 44.1161L68.3839 59.6717L66.6161 61.4394L51.0606 45.8839L52.8283 44.1161ZM68.3839 61.4394L52.8283 76.995L51.0606 75.2272L66.6161 59.6717L68.3839 61.4394Z" fill="white"/>
                            <rect x="-0.5" y="0.5" width="119" height="119" rx="59.5" transform="matrix(-1 0 0 1 119 0)" stroke="white"/>
                        </svg>
                    </a>
                </div>
                <div class="titles">
                    <h4>{{ __('asd.Специализация предприятия') }}</h4>
                    <h2 class="general__title"><span>{{ __('asd.Производство инертных материалов') }}</span></h2>
                    <ul>
                        <li><span></span>
                            <p>{{ __('asd.Соответствуют всем физико-механическим характеристикам ГОСТов;') }}</p>
                        </li>
                        <li><span></span>
                            <p>{{ __('asd.Качество и свойства, соответствующие стандартам – прочность породы и лещадность;') }}</p>
                        </li>
                        <li><span></span>
                            <p>{{ __('asd.Морозоустойчивость;') }}</p>
                        </li>
                        <li><span></span>
                            <p>{{ __('asd.Не имеют посторонних вредных примесей;') }}</p>
                        </li>
                        <li><span></span>
                            <p>{{ __('asd.Практически отсутствуют глинистые и другие пылевидные частицы;') }}</p>
                        </li>
                        <li><span></span>
                            <p>{{ __('asd.Выгодная цена за счет прямых поставок материалов с собственного карьера, от самого производителя, без посредников.') }}</p>
                        </li>
                    </ul>
                    <div id="about__products-dots"></div>
                </div>
            </div>
            <div class="about__equipment">
                <img src="/img/about/eq-1.webp" alt="equipment-One" class="left">
                <div class="right">
                    <h2 class="general__title-second">{{ __('asd.ДОРОЖНАЯ ТЕХНИКА') }}</h2>
                    <p>{{ __('asd.Асфальтоукладчики, грунтовые катки, грунтовые катки, дорожно-разметочные автомашины с высокой производительностью.') }}
                    </p>
                    <div class="right__img">
                        <img src="/img/about/eq-2.webp" alt="equipment-Two">
                        <a href="/technics" class="right__links">
                            <svg width="120" height="120" viewBox="0 0 120 120" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M51.0606 45.8839L50.1767 45L51.9444 43.2322L52.8283 44.1161L51.0606 45.8839ZM67.5 60.5556L68.3839 59.6717L69.2678 60.5556L68.3839 61.4394L67.5 60.5556ZM52.8283 76.995L51.9444 77.8789L50.1767 76.1111L51.0606 75.2272L52.8283 76.995ZM52.8283 44.1161L68.3839 59.6717L66.6161 61.4394L51.0606 45.8839L52.8283 44.1161ZM68.3839 61.4394L52.8283 76.995L51.0606 75.2272L66.6161 59.6717L68.3839 61.4394Z" fill="white"/>
                                <rect x="-0.5" y="0.5" width="119" height="119" rx="59.5" transform="matrix(-1 0 0 1 119 0)" stroke="white"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <div class="about__partners">
                <h2 class="general__title-second">{{ __('asd.НАМ ДОВЕРЯЮТ') }}</h2>
                <div class="partners__slider-auto owl-carousel">
                    @foreach(\App\Models\Partners::all() as $data)
                    <a href="" class="partners__slider-box">
                        <img src="{{ $data->photo }}" alt="">
                    </a>
                    @endforeach
                </div>
            </div>
        </div>

    @include('layouts.footer')
@endsection


@section('script')
    <script>
        $('.header').addClass('header__dark')
    </script>
@endsection

@extends('layouts.main')

@section('style')

@endsection

@section('content')
    <div class="page__projects">
        <div class="page__projects-banner" style="background-image: url(/img/bg/bg-projects.webp);">
            <div class="banner__content">
                <div class="general__history">
                    <a href="" class="">{{ __('asd.Главная') }}</a>
                    <a href="" class="">{{ __('asd.Продукция') }}</a>
                    <a href="" class="active">{{ __('asd.Проектирование автомобильных....') }}</a>
                </div>
                <h2 class="general__title">{{ __('asd.О наших проектах') }}</h2>
            </div>
            <div class="banner__bottom">
                <div class="banner__bottom-left">
                    <h2 class="general__title">{{ __('asd.Преимущества') }}</h2>
                    <p class="general__subtitle-second">{{ __('asd.В структуру СП ООО Grand Road Tashkent входит проектная организация, которая занимается широким спектром проектно-изыскательских работ по обустройству и благоустройству автомобильных дорог и транспортных сооружений.') }}</p>
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
        <div class="boon">
            <div class="boon__box">
                <div class="pic"><img src="/img/projects/1.svg" alt="1"></div>
                <p>{{ __('asd.широкий спектр услуг в области проектно-изыскательских работ') }}</p>
            </div>
            <div class="boon__box">
                <div class="pic"><img src="/img/projects/2.svg" alt="2"></div>
                <p>{{ __('asd.индивидуальные проектные решения') }}</p>
            </div>
            <div class="boon__box">
                <div class="pic"><img src="/img/projects/3.svg" alt="3"></div>
                <p>{{ __('asd.Cовременное оборудование и новейшее программное обеспечение') }}</p>
            </div>
            <div class="boon__box">
                <div class="pic"><img src="/img/projects/4.svg" alt="4"></div>
                <p>{{ __('asd.высококвалифицированные специалисты') }}</p>
            </div>
        </div>
        @foreach(\App\Models\Project::where('id', 1)->get() as $data)
            <div class="project">
                <svg width="126" height="243" viewBox="0 0 126 243" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path opacity="0.1"
                          d="M0.0996094 243H125.8V205.2H83.1996V0.5H50.7996C47.1996 23 37.2996 61.2001 11.1996 63.3001V93.6001H43.8996V205.2H0.0996094V243Z"
                          fill="white"/>
                </svg>
                <div class="left">
                    <h2 class="general__title">{{ $data['header_'.$lan] }}</h2>
                    <div class="content">
                        <h4>{{ $data['description_'.$lan] }}</h4>
                        <div class="numbers">
                            <div class="box">
                                <h3 class="number">{{ $data->time }}</h3>
                                <p>{{ __('asd.месяца') }}</p>
                            </div>
                            <div class="box">
                                <h3 class="number">{{ $data->height }}<span>{{ __('asd.м') }}</span></h3>
                                <p>{{ __('asd.высота моста') }}</p>
                            </div>
                            <div class="box">
                                <h3 class="number">{{ $data->territory }}+ <span>га</span></h3>
                                <p>{{ __('asd.Территория') }}</p>
                            </div>
                            <div class="box">
                                <h3 class="number">{{ $data->number_of_lanes }}+</h3>
                                <p>{{ __('asd.полосная дорога') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <img src="/img/projects/p-1.jpg" alt="p-1">
            </div>
        @endforeach

        <div class="docked">
            <div class="left">
                <h3 class="general__title"><span>{{ __('asd.Перечень предоставляемых услуг') }}</span></h3>
                <ul>
                    <li>
                        <p>{{ __('asd.инженерные изыскания') }}</p>
                    </li>
                    <li>
                        <p>{{ __('asd.проектирование автомобильных дорог всех классов и категорий') }}</p>
                    </li>
                    <li>
                        <p>{{ __('asd.проектирование мостовых сооружений;') }}</p>
                    </li>
                    <li>
                        <p>{{ __('asd.проектирование подземных переходов;') }}</p>
                    </li>
                    <li>
                        <p>{{ __('asd.разработка проектов организации дорожного движения;') }}</p>
                    </li>
                    <li>
                        <p>{{ __('asd.разработка сметной документации; диагностика, обследование мостов и труб;') }}</p>
                    </li>
                    <li>
                        <p>{{ __('asd.авторский надзор;') }}</p>
                    </li>
                    <li>
                        <p>{{ __('asd.консультационные и экспертные услуги; трехмерное моделирование зданий и сооружений.') }}</p>
                    </li>
                </ul>
            </div>
            <img src="/img/projects/bg-3.webp" alt="" class="right">
        </div>

        @foreach(\App\Models\Project::where('id', 2)->get() as $data)
            <div class="project-second">
                <img src="/img/projects/p-2.jpg" alt="p-2">
                <div class="left">
                    <h2 class="general__title">{{ $data['header_'.$lan] }}</h2>
                    <div class="content">
                        <h4>{{ $data['description_'.$lan] }}</h4>
                        <div class="numbers">
                            <div class="box">
                                <h3 class="number">{{ $data->time }}</h3>
                                <p>{{ __('asd.месяца') }}</p>
                            </div>
                            <div class="box">
                                <h3 class="number">{{ $data->height }}<span>м</span></h3>
                                <p>{{ __('asd.высота моста') }}</p>
                            </div>
                            <div class="box">
                                <h3 class="number">{{ $data->territory }}+ <span>га</span></h3>
                                <p>{{ __('asd.Территория') }}</p>
                            </div>
                            <div class="box">
                                <h3 class="number">{{ $data->number_of_lanes }}+</h3>
                                <p>{{ __('asd.полосная дорога') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <svg width="171" height="218" viewBox="0 0 171 218" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path opacity="0.1"
                          d="M0.900391 218H170.4V181.7H46.8004C48.3004 168.8 59.4004 160.4 75.0004 152.3C83.1004 148.7 91.8004 144.5 100.5 140.6C117.3 133.1 134.1 124.7 148.2 113.3C162 101.6 170.7 86.6 170.7 65.3C170.7 40.1 158.1 20.3 134.1 8.89999C122.1 3.2 107.1 0.5 89.4004 0.5C33.9004 0.5 3.30039 26 3.30039 74.6V83.3H43.5004V76.4C43.5004 49.4 59.1004 34.4 88.8004 34.4C115.8 34.4 129.9 45.2 129.9 67.4C129.9 82.4 118.5 92.3 101.1 100.7C92.4004 105.2 83.7004 109.1 73.5004 113.6C56.1004 121.1 38.4004 129.5 24.3004 141.2C9.90039 152.9 0.900391 167.9 0.900391 189.2V218Z"
                          fill="white"/>
                </svg>
            </div>
        @endforeach
        <div class="tech">
            <div class="tech__top">
                <div class="left">
                    <h3 class="general__title"><span>{{ __('asd.наша ДОРОЖНАЯ ТЕХНИКА') }}</span></h3>
                    <p class="general__subtitle">{{ __('asd.Асфальтоукладчики, грунтовые катки, грунтовые катки, дорожно-разметочные автомашины с высокой производительностью. Стратегическими партнерами предприятия являются компании-поставщики оборудования всемирно известных западных марок: AMMANN (Швейцария), Aymak, Metso, Kal-Mak, Elkon, General Kazan, BAZ Makine, Jeotest (Турция), Nordimpianti (Италия), Wirtgen group (Германия), Power Curbers (США).') }}
                    </p>
                </div>
                <img src="/img/technics/banner.webp" alt="tech">
            </div>
            <div class="tech__slider owl-carousel">
                <?php for ($i = 1; $i <= 4; $i++):?>
                <a href="<?php echo '/img/projects/'.$i.'.webp'; ?>" class="box" data-fancybox="gallery">
                    <img src="<?php echo '/img/projects/'.$i.'.webp'; ?>" alt="">
                </a>
                <?php endfor ?>
            </div>
        </div>
        @foreach(\App\Models\Project::where('id', 21)->get() as $data)
            <div class="project">
                <svg width="175" height="223" viewBox="0 0 175 223" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path opacity="0.1" d="M86.7 222.2C124.2 222.2 150 211.1 164.1 191.3C171 181.7 174.3 170.6 174.3 157.7C174.3 131.3 162.3 115.7 141.9 108.5C161.1 100.4 170.7 85.4 170.7 62C170.7 25.4 141.3 0.5 88.5 0.5C33.3 0.5 3.3 28.1 3.3 71.6V76.4H42.9V73.1C42.9 50.6 58.8 35.6 87.3 35.6C115.8 35.6 129.6 47.9 129.6 66.5C129.6 85.4 118.2 95.3 92.4 95.3H67.2V126.2H92.4C118.5 126.2 132.3 131.6 132.3 153.2C132.3 173.6 114.6 186.8 86.1 186.8C54.3 186.8 40.2 175.1 40.2 148.1V144.2H0V150.2C0 199.1 25.5 222.2 86.7 222.2Z" fill="white"/>
                </svg>
                <div class="left">
                    <h2 class="general__title">{{ $data['header_'.$lan] }}</h2>
                    <div class="content">
                        <h4>{{ $data['description_'.$lan] }}</h4>
                        <div class="numbers">
                            <div class="box">
                                <h3 class="number">{{ $data->time }}</h3>
                                <p>{{ __('asd.месяца') }}</p>
                            </div>
                            <div class="box">
                                <h3 class="number">{{ $data->height }}<span>м</span></h3>
                                <p{{ __('asd.>высота моста') }}</p>
                            </div>
                            <div class="box">
                                <h3 class="number">{{ $data->territory }}+ <span>{{ __('asd.га') }}</span></h3>
                                <p>{{ __('asd.Территория') }}</p>
                            </div>
                            <div class="box">
                                <h3 class="number">{{ $data->number_of_lanes }}+</h3>
                                <p>{{ __('asd.полосная дорога') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <img src="/img/projects/p-3.jpg" alt="p-1">
            </div>
        @endforeach
{{--=======begin prokects foreach========--}}

{{--=======end prokects foreach========--}}
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

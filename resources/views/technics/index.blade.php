@extends('layouts.main')

@section('style')

@endsection

@section('content')
    <div class="page__technics">
        <div class="container__cycle container__cycle-ml container__cycle-first">
            <div class="left">
                <div class="general__history">
                    <a href="">{{ __('asd.Главная') }}</a>
                    <a class="active" href="">{{ __('asd.Дорожня техника') }}</a>
                </div>
                <h2 class="general__title-second">
                    {{ __('asd.ДОРОЖНАЯ ТЕХНИКА') }}
                </h2>
                <p class="general__subtitle-second">
                    {!! __('asd.Асфальтоукладчики, грунтовые катки, грунтовые катки, дорожно-разметочные автомашины с высокой производительностью. Стратегическими партнерами предприятия являются компании-поставщики <br> оборудования всемирно известных западных марок: AMMANN (Швейцария),<br> Aymak, Metso, Kal-Mak, Elkon, General Kazan, BAZ Makine, Jeotest (Турция), <br> Nordimpianti (Италия), Wirtgen group (Германия), Power Curbers (США).') !!}
                </p>
            </div>
            <div class="right">
                <img src="/img/technics/1.webp" alt="T-1">
            </div>
        </div>
        <div class="container__cycle container__cycle-second" style="background-color: #363435;">
            <div class="left">
                <img src="/img/technics/2.webp" alt="T-2">
            </div>
            <div class="right">
                <h2 class="general__title-second">VOGELE 1900-3</h2>
                <p class="general__subtitle-third">{{ __('asd.Асфальтоукладчик с высокой производительностью') }}</p>
                <ul class="technics__list">
                    <li class="li">
                        <p>{{ __('asd.Максимальная ширина укладки 11 м;') }}</p>
                    </li>
                    <li class="li">
                        <p>
                            {{ __('asd.Производительность укладки до 900 т/ч') }}
                        </p>
                    </li>
                    <li class="li">
                        <p>{{ __('asd.Мощный дизельный двигатель Deutz последнего поколения;') }}</p>
                    </li>
                    <li class="li">
                        <p>{{ __('asd.Пакет VÖGELE EcoPlus существенно сокращает расход топлива и снижает уровень шума;') }}</p>
                    </li>
                    <li class="li">
                        <p>{{ __('asd.Подрессоренные упорные ролики; PaveDock, надежно амортизирующие удары грузовика;') }}</p>
                    </li>
                </ul>
            </div>
        </div>
        <div class="container__cycle container__cycle-ml container__cycle-third" style="background-color: #fff;">
            <div class="left">
                <h2 class="general__title-second">VOGELE SUPER 800</h2>
                <p class="general__subtitle-third">{{ __('asd.асфальтоукладчик с высокой производительностью') }}</p>
                <ul class="technics__list">
                    <li class="li">
                        <p>{{ __('asd.Максимальная производительность укладки 300 т/ч') }}</p>
                    </li>
                    <li class="li">
                        <p>{{ __('asd.Габаритная ширина 2,2 м') }}
                        </p>
                    </li>
                    <li class="li">
                        <p>{{ __('asd.Компактные размеры позволяют работать на самых узких рабочих площадках') }}</p>
                    </li>
                    <li class="li">
                        <p>{{ __('asd.Простое управление благодаря интуитивно понятной и инновационной концепции управления ErgoBasic') }}</p>
                    </li>
                    <li class="li">
                        <p>{{ __('asd.Высокое предварительное уплотнение с помощью раздвижного рабочего органа AB 220 TV (трамбующий брус и вибратор)') }}</p>
                    </li>
                </ul>
            </div>
            <div class="right">
                <img src="/img/technics/3.webp" alt="T-3">
            </div>
        </div>
        <div class="container__cycle container__cycle-second firth" style="background-color: var(--main-color-yellow);">
            <div class="left">
                <img src="/img/technics/4.webp" alt="T-2">
            </div>
            <div class="right">
                <h2 class="general__title-second">HD+ 140 VV </h2>
                <p class="general__subtitle-third">{{ __('asd.Шарнирно сочлененный тандемный каток с 2 вибровальцами') }}</p>
                <ul class="technics__list">
                    <li class="li">
                        <p>{{ __('asd.3-точечное качающееся шарнирное соединение для равномерного распределения веса и непревзойденной курсовой устойчивост') }}</p>
                    </li>
                    <li class="li">
                        <p>{{ __('asd.Простая, интуитивная и понятная на любом языке концепция управления') }}
                        </p>
                    </li>
                    <li class="li">
                        <p>{{ __('asd.Отличный обзор машины и стройплощадки') }}</p>
                    </li>
                    <li class="li">
                        <p>{{ __('asd.Устройство управления перемещением и поворотным механизмом сиденья') }}</p>
                    </li>
                    <li class="li">
                        <p>{{ __('asd.Система смещения колеи для комфортного подъезда и отъезда, а также уплотнения вдоль бордюров') }}</p>
                    </li>
                </ul>
            </div>
        </div>
        <div class="container__cycle container__cycle-ml container__cycle-third fifth" style="background-color: #fff;">
            <div class="left">
                <h2 class="general__title-second">HAMM 3516</h2>
                <p class="general__subtitle-third">{{ __('asd.Грунтовый каток с гладким вибрационным бандажом') }}</p>
                <ul class="technics__list">
                    <li class="li">
                        <p>{{ __('asd.Простая, интуитивная и понятная на любом языке концепция управления') }}
                        </p>
                    </li>
                    <li class="li">
                        <p>{{ __('asd.3-точечное качающееся шарнирное соединение для отменного сцепления и проходимости на связном грунте') }}
                        </p>
                    </li>
                    <li class="li">
                        <p>{{ __('asd.Эргономичная платформа машиниста с устройством управления поворотным механизмом сиденья, регулируемым сиденьем машиниста и откидной рулевой колонкой') }}
                        </p>
                    </li>
                    <li class="li">
                        <p>{{ __('asd.Отличный обзор машины и стройплощадки') }}</p>
                    </li>
                    <li class="li">
                        <p>{{ __('asd.Высокая мощность уплотнения благодаря высокой линейной нагрузке и большим амплитудам') }}</p>
                    </li>
                </ul>
            </div>
            <div class="right">
                <img src="/img/technics/5.webp" alt="T-3">
            </div>
        </div>
        <div class="container__cycle container__cycle-second" style="background-color: #363435;">
            <div class="left">
                <img src="/img/technics/6.webp" alt="T-2">
            </div>
            <div class="right">
                <h2 class="general__title-second">HAMM GRW280-10</h2>
                <p class="general__subtitle-third">{{ __('asd.Пневмоколесный каток') }}</p>
                <ul class="technics__list">
                    <li class="li">
                        <p>{{ __('asd.Простая, интуитивная и понятная на любом языке концепция управления') }}
                        </p>
                    </li>
                    <li class="li">
                        <p>{{ __('asd.Высокое качество уплотнения и поверхности благодаря равномерному распределению веса и перекрытию следа передних и задних колесных пар') }}
                        </p>
                    </li>
                    <li class="li">
                            <p>{{ __('asd.Продуманная концепция балластировки для гибкой адаптации массы машины в соответствии с видом работ') }}</p>
                    </li>
                    <li class="li">
                        <p>{{ __('asd.Устройство управления перемещением и поворотным механизмом сиденья') }}</p>
                    </li>
                    <li class="li">
                        <p>{{ __('asd.Отличный обзор шин, машины и стройплощадки') }}</p>
                    </li>
                </ul>
            </div>
        </div>
        <div class="container__cycle container__cycle-ml container__cycle-third fifth" style="background-color: #fff;">
            <div class="left">
                <h2 class="general__title-second">WIRTGEN W200</h2>
                <p class="general__subtitle-third">{{ __('asd.мощные машины для снятия дорожного покрытия на больших площадях') }}
                </p>
                <ul class="technics__list">
                    <li class="li">
                        <p>{{ __('asd.Экологический класс ЕС стадия IIIa / США уровень 3') }}
                        </p>
                    </li>
                    <li class="li">
                        <p>{{ __('asd.Эксплуатационная масса CE * 27 750 кг') }}</p>
                    </li>
                    <li class="li">
                        <p>{{ __('asd.Глубина фрезерования 0 мм - 330 мм') }}</p>
                    </li>
                    <li class="li">
                        <p>{{ __('asd.Ширина фрезерования 2 000 мм') }}
                        </p>
                    </li>
                    <li class="li">
                        <p>{{ __('asd.Мощность двигателя 410 кВт / 558 л.с.') }}</p>
                    </li>
                </ul>
            </div>
            <div class="right">
                <img src="/img/technics/7.webp" alt="T-3">
            </div>
        </div>
        <div class="container__cycle container__cycle-second six" style="background-color: var(--main-color-yellow);">
            <div class="left">
                <img src="/img/technics/8.webp" alt="T-8">
            </div>
            <div class="right">
                <h2 class="general__title-second">POWER CURBERS</h2>
                <p class="general__subtitle-third">{{ __('asd.Бетоноукладчик самоходный, на гусеничном ходу') }}</p>
                <ul class="technics__list">
                    <li class="li">
                        <p>{{ __('asd.Объем бункера: 76,00 м3') }}
                        </p>
                    </li>
                    <li class="li">
                        <p>{{ __('asd.Скорость укладки 15 м/мин') }}
                        </p>
                    </li>
                </ul>
            </div>
        </div>
        <div class="container__cycle container__cycle-ml container__cycle-third fifth" style="background-color: #fff;">
            <div class="left">
                <h2 class="general__title-second">ALTEKMA </h2>
                <p class="general__subtitle-third">{{ __('asd.Термопластиковая дорожно-разметочная автомашина') }}
                </p>
                <ul class="technics__list">
                    <li class="li">
                        <p>{{ __('asd.С баком краски: 1000 кг + 1500 кг') }}
                        </p>
                    </li>
                    <li class="li">
                        <p>{{ __('asd.На базе шасси MERS ATEGO 1518 KK /42') }}</p>
                    </li>
                    <li class="li">
                        <p>{{ __('asd.Объем двигателя: 5,1 см3') }}</p>
                    </li>
                </ul>
            </div>
            <div class="right">
                <img src="/img/technics/9.jpg" alt="T-9">
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

@extends('layouts.main')

@section('style')

@endsection

@section('content')
    <div class="page__material-single">
        <div class="single__top">
            <button class="slideDown">
                {{ __('asd.Применение') }}
                <svg width="17" height="10" viewBox="0 0 17 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M14.3217 1.2652L15.0565 0.586916L16.4131 2.05652L15.6783 2.7348L14.3217 1.2652ZM8.5 8L9.17828 8.7348L8.5 9.36091L7.82172 8.7348L8.5 8ZM1.32172 2.7348L0.586917 2.05652L1.94348 0.586916L2.67828 1.2652L1.32172 2.7348ZM15.6783 2.7348L9.17828 8.7348L7.82172 7.2652L14.3217 1.2652L15.6783 2.7348ZM7.82172 8.7348L1.32172 2.7348L2.67828 1.2652L9.17828 7.2652L7.82172 8.7348Z" fill="#9D9D9D"/>
                </svg>
            </button>
            <div class="single__top-container">
                <div class="single__top-links">
                    @foreach(\App\Models\Materials::where('class', $data->class)->get() as $datum)
                        <a href="/materials/{{ $datum->id }}">{{ $datum['header_'.$lan] }}</a>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="material">
            <div class="content">
                <img src="{{ $data->photo }}" alt="Material-name" class="left">
                <div class="right">
                    <h2 class="general__title-second">{{ $data['header_'.$lan] }}</h2>
                    <div>{!! $data['description1_'.$lan] !!}</div>
                </div>
            </div>
            <div class="specifications">
                <h2 class="general__title-second">
                    {{ __('asd.Характеристики') }}
                </h2>
                {!! $data['description2_'.$lan] !!}
            </div>
            <div class="recommended">
                <h2 class="general__title-second">
                    {{ __('asd.Рекомендуемые') }}
                </h2>
                <div class="recommended__slider owl-carousel">
                    @foreach(\App\Models\Materials::where('class', $data->class)->get() as $datum)
                    <a href="/materials/{{ $datum->id }}" class="box">
                        <img src="{{ $datum->photo }}" alt="">
                        <div class="content">
                            <h4 class="title">{{ $datum['header_'.$lan] }}</h4>
                            <p class="txt">{!! substr($datum['description1_'.$lan], 3, 110) !!}...</p>
                        </div>
                    </a>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="general__feedback general__feedback-black">
            <div class="top">
                <h2 class="general__title">{{ __('asd.СВЯЖИТЕСЬ С НАМИ') }}</h2>
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
        $('.header').addClass('header__dark')
    </script>
@endsection

@extends('layouts.main')

@section('style')

@endsection

@section('content')
    <div class="page page__news">
        <div class="page__news-top">
            <div class="content">
                <div class="history"><a href="">{{ __('asd.Главная') }}</a><a class="active" href="">{{ __('asd.Новости') }}</a></div>
                <h2 class="general__title">{{ __('asd.Новости') }}</h2>
                <p class="general__subtitle">{{ __('asd.Мы всегда открыты для сотрудничества. Вы можете обратиться в пресс-центр группы компаний «GRAND ROAD TASHKENT»  по любым вопросам, связанным с деятельностью компании.') }}</p>
            </div>
        </div>
        <div class="general__container">
            <div class="page__news-container">
                @foreach(\App\Models\Report::orderBy('id', 'desc')->get() as $data)
                <a href="/reports/{{ $data->id }}" class="box" style="background-image: url({{ $data->photo_a }});">
                    <div class="content">
                        <span class="date">{{ $data->created_at }}</span>
                        <h4 class="title">{{ $data['header_'.$lan] }}</h4>
                    </div>
                </a>
               @endforeach
            </div>
            <button class="more">
                <svg width="89" height="88" viewBox="0 0 89 88" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="44.5" cy="44" r="43.5" transform="rotate(90 44.5 44)" stroke="#D7D7D7"/>
                    <path d="M33 44H55.5" stroke="black"/>
                    <path d="M44.25 55.252L44.25 32.752" stroke="black"/>
                </svg>
                <span>{{ __('asd.ЗАГРУЗИТЬ ЕЩЕ') }}</span>
            </button>
        </div>
    </div>
    @include('layouts.footer')
@endsection


@section('script')
    <script>
        $('.header').addClass('header__dark')
    </script>
@endsection

@extends('layouts.main')

@section('style')

@endsection

@section('content')
    <div class="page page__news-single">
        <div class="banner" style="background: linear-gradient(0deg, rgba(2, 2, 2, 0.2), rgba(2, 2, 2, 0.2)), url({{ $data->photo_a }});">
            <div class="content">
                <div class="history">
                    <a href="">{{ __('asd.Главная') }}</a>
                    <a href="">{{ __('asd.Новости') }}</a>
                    <a href="" class="active">{{ __('asd.Темп развития ...') }}</a>
                </div>
                <h2 class="title">{{ $data['header_'.$lan] }}</h2>
            </div>
        </div>
        <div class="article">
            <div class="article__main">
                <p>{!! $data['description1_'.$lan] !!}</p>
                <img src="{{ $data->photo_b }}" alt="">
                <img src="{{ $data->photo_c }}" alt="">
                <p>{!! $data['description2_'.$lan] !!}</p>
                <img src="{{ $data->photo_d }}" alt="">
                <p>{!! $data['description3_'.$lan] !!}</p>
                <div class="article__main-bottom">
                    <h5 class="date">{{ $data->created_at }}</h5>
                    <div class="messengers">
                        <a href="">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M21.9661 4.33142L18.3236 18.6511C18.1522 19.3255 17.3594 19.673 16.7095 19.3527L12.1026 17.0843L9.92428 20.4836C9.33156 21.4102 7.83173 21.0083 7.83173 19.925V16.1372C7.83173 15.8443 7.96022 15.565 8.18166 15.3606L17.1595 7.18571C17.1523 7.08352 17.038 6.99502 16.9238 7.06983L6.21071 14.182L2.61114 12.4108C1.76845 11.9952 1.80416 10.8302 2.67538 10.4692L20.4237 3.09157C21.2735 2.73726 22.1875 3.46631 21.9661 4.33142Z" fill="#8A8A8A"/>
                            </svg>
                        </a>
                        <a href="">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M22.3497 6.93576C21.7773 5.22117 21.0005 4.86405 18.9059 4.4822C17.4648 4.21938 14.9081 4 12.5 4C10.0919 4 7.53486 4.21956 6.09409 4.4822C3.99947 4.86405 3.22273 5.22133 2.65028 6.93576C2.1915 8.31053 2 9.78425 2 11.5C2 13.2158 2.19131 14.6895 2.65028 16.0642C3.22273 17.7788 3.99947 18.136 6.09409 18.5178C7.53499 18.7806 10.0919 19 12.5 19C14.9081 19 17.4651 18.7804 18.9059 18.5178C21.0005 18.136 21.7773 17.7787 22.3497 16.0642C22.8085 14.6895 23 13.2158 23 11.5C23 9.78425 22.8085 8.31045 22.3497 6.93576ZM16.5531 11.9115L10.4386 15.6408C10.0673 15.8672 9.76374 15.7096 9.76374 15.2906V7.70927C9.76374 7.29009 10.0674 7.13259 10.4386 7.359L16.5531 11.0883C16.9244 11.3148 16.9244 11.6851 16.5531 11.9115Z" fill="#8A8A8A"/>
                            </svg>
                        </a>
                        <a href="">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8.99994 8.97128C8.59994 1.77128 14.1667 1.58375 17 2.25042V5.75204C16.6667 5.75204 15.6552 5.64589 14.5 5.97079C13.5 6.25204 13 7.30412 13 7.97079V9.97079H17L16 13.9708H13V21.9708H9V13.9708H6V9.97079H8.99994V8.97128Z" fill="#8A8A8A"/>
                            </svg>
                        </a>
                        <a href="">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M17 2H7C4.23858 2 2 4.23858 2 7V17C2 19.7614 4.23858 22 7 22H17C19.7614 22 22 19.7614 22 17V7C22 4.23858 19.7614 2 17 2ZM16 12C16 14.2091 14.2091 16 12 16C9.79086 16 8 14.2091 8 12C8 9.79086 9.79086 8 12 8C14.2091 8 16 9.79086 16 12ZM18 7C18.5523 7 19 6.55228 19 6C19 5.44772 18.5523 5 18 5C17.4477 5 17 5.44772 17 6C17 6.55228 17.4477 7 18 7Z" fill="#8A8A8A"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <div class="article__another">
                <h3 class="article__another-title">{{ __('asd.РЕКОМЕНДУЕМЫЕ') }}</h3>
                @foreach(\App\Models\Report::orderBy('id', 'desc')->get() as $data)
                <a href="/reports/{{ $data->id }}" class="box" style="background: linear-gradient(0deg, rgba(2, 2, 2, 0.2), rgba(2, 2, 2, 0.2)), url({{ $data->photo_a }});;">
                    <div class="content">
                        <span class="date">{{ $data->created_at }}</span>
                        <h4 class="title">{{ $data->header_ru }}</h4>
                    </div>
                </a>
                @endforeach
            </div>
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

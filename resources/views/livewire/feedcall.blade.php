<div class="feedback" style="display: {{ $style }}">
    <div class="feedback__content">
        <span class="feedback__close">
            <img src="/img/close.svg" alt="ico">
        </span>
        <div class="feedback__logo">
            <img src="/img/logo.svg" alt="logo">
        </div>
        <form class="feedback__content-box" style="display: {{ $second_style }}">
            <div class="feedback-content__wrap">
                <h4 class="feedback__title">
                    {{ __('asd.Заказать обратный звонок') }}
                </h4>
                <p class="feedback__text">
                    {{ __('asd.Оставьте ваши координаты и мы свяжемся с вами в ближайшее время') }}
                </p>
                <span wire:click="event()"><input wire:model="name" required type="text" placeholder="{{ __('asd.Ваше имя') }}"
                       style="
                   width: 100%;
                   border: none;
                   border-bottom: 0.1rem solid #9A9A9A;
                   outline: none;
                   text-align: center;
                   padding: 0.5rem;
                   font-size: 1.8rem;
                   background: transparent;
                   font-family: 'EuclidSquare-B'; "></span>
                <input wire:model="phone" type="tel" required placeholder="{{ __('asd.Ваш телефон') }}" maxlength="19" pattern="^[0-9-+\s()]*$" inputmode="text" class="form__tel" name="phone"
                       style="
                   width: 100%;
                   border: none;
                   border-bottom: 0.1rem solid #9A9A9A;
                   outline: none;
                   text-align: center;
                   padding: 0.5rem;
                   font-size: 1.8rem;
                   background: transparent; font-family: 'EuclidSquare-B';">
                <button wire:click="save()" class="form__btn" type="button">{{ __('asd.Отправить') }}</button>
            </div>
        </form>
        <div class="feedback__success" style="display: {{ $first_style }}">
            <svg width="80" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M32.367 37.6331C31.7393 37.0055 30.888 36.6528 30.0003 36.6528C29.1126 36.6528 28.2613 37.0055 27.6336 37.6331C27.0059 38.2608 26.6533 39.1121 26.6533 39.9998C26.6533 40.8875 27.0059 41.7388 27.6336 42.3665L37.6336 52.3665C37.9451 52.6754 38.3145 52.9198 38.7206 53.0857C39.1267 53.2516 39.5616 53.3357 40.0003 53.3332C40.4566 53.3187 40.9051 53.2106 41.318 53.0157C41.7308 52.8207 42.0992 52.543 42.4003 52.1998L65.7336 25.5331C66.2724 24.8642 66.5322 24.0132 66.4588 23.1574C66.3854 22.3017 65.9845 21.5073 65.3397 20.9398C64.6949 20.3724 63.856 20.0758 62.9979 20.1118C62.1397 20.1478 61.3286 20.5137 60.7336 21.1331L40.0003 45.1332L32.367 37.6331Z" fill="#FFCD00"/>
                <path d="M70 36.6665C69.116 36.6665 68.2681 37.0177 67.643 37.6428C67.0179 38.2679 66.6667 39.1158 66.6667 39.9998C66.6667 47.0723 63.8572 53.8551 58.8562 58.856C53.8552 63.857 47.0725 66.6665 40 66.6665C34.7337 66.6641 29.5859 65.1024 25.2059 62.1783C20.8259 59.2542 17.4098 55.0987 15.3883 50.2357C13.3668 45.3728 12.8305 40.0202 13.847 34.8528C14.8635 29.6855 17.3872 24.9348 21.1 21.1998C23.569 18.6978 26.5123 16.7133 29.7576 15.3625C33.0028 14.0118 36.4849 13.3219 40 13.3332C42.1315 13.3465 44.2552 13.5924 46.3334 14.0665C46.7682 14.201 47.2261 14.245 47.6786 14.1958C48.1312 14.1466 48.5689 14.0053 48.9647 13.7804C49.3605 13.5556 49.7061 13.2521 49.9801 12.8886C50.2541 12.5251 50.4508 12.1093 50.558 11.6669C50.6652 11.2245 50.6806 10.7648 50.6033 10.3162C50.526 9.86756 50.3577 9.43953 50.1087 9.05848C49.8596 8.67742 49.5352 8.35141 49.1553 8.10054C48.7755 7.84968 48.3483 7.67927 47.9 7.59984C45.3105 6.99065 42.6602 6.67753 40 6.6665C33.4145 6.70072 26.9867 8.68491 21.5277 12.3687C16.0687 16.0525 11.8233 21.2707 9.32709 27.3649C6.83092 33.4592 6.19589 40.1563 7.50214 46.611C8.8084 53.0658 11.9974 58.989 16.6667 63.6332C22.8557 69.825 31.2455 73.3128 40 73.3332C48.8406 73.3332 57.319 69.8213 63.5703 63.5701C69.8215 57.3189 73.3334 48.8404 73.3334 39.9998C73.3334 39.1158 72.9822 38.2679 72.3571 37.6428C71.7319 37.0177 70.8841 36.6665 70 36.6665Z" fill="#FFCD00"/>
            </svg>
            <h3>{{ __('asd.Ваша заявка успешно отправлена') }}</h3>
            <p>{{ __('asd.Наши менеджеры обязательно свяжутся с Вами и ответят на все Ваши вопросы.') }}</p>
            <span class="feedback__close" wire:click="close()">{{ __('asd.На главную') }}</span>
        </div>
    </div>
</div>


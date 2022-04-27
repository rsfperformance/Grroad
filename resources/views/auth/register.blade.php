@extends('admin.auth.full')

@section('content')
    {{--<div class="row align-items-center justify-content-center">--}}
        {{--<div class="col-md-8 col-lg-6 col-xl-5">--}}
            {{--<div class="card">--}}

                {{--<div class="card-body p-4">--}}
                    {{--<div class="text-center mt-2">--}}
                        {{--<h5 class="text-primary">Добро пожаловать !</h5>--}}
                    {{--</div>--}}
                    {{--<div class="p-2 mt-4">--}}
                        {{--@if (session('status'))--}}
                            {{--<div class="mb-4 font-medium text-sm text-green-600">--}}
                                {{--{{ session('status') }}--}}
                            {{--</div>--}}
                        {{--@endif--}}

                        {{--<form method="POST" action="{{ route('register') }}">--}}
                            {{--@csrf--}}

                            {{--<div>--}}
                                {{--<x-jet-label for="name" value="{{ __('Имя') }}" />--}}
                                {{--<x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />--}}
                            {{--</div>--}}

                            {{--<div class="mt-4">--}}
                                {{--<x-jet-label for="email" value="{{ __('Email') }}" />--}}
                                {{--<x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />--}}
                            {{--</div>--}}

                            {{--<div class="mt-4">--}}
                                {{--<x-jet-label for="password" value="{{ __('Пароль') }}" />--}}
                                {{--<x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />--}}
                            {{--</div>--}}

                            {{--<div class="mt-4">--}}
                                {{--<x-jet-label for="password_confirmation" value="{{ __('Повторите пароль') }}" />--}}
                                {{--<x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />--}}
                            {{--</div>--}}

                            {{--@if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())--}}
                                {{--<div class="mt-4">--}}
                                    {{--<x-jet-label for="terms">--}}
                                        {{--<div class="flex items-center">--}}
                                            {{--<x-jet-checkbox name="terms" id="terms"/>--}}

                                            {{--<div class="ml-2">--}}
                                                {{--{!! __('I agree to the :terms_of_service and :privacy_policy', [--}}
                                                        {{--'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',--}}
                                                        {{--'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',--}}
                                                {{--]) !!}--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</x-jet-label>--}}
                                {{--</div>--}}
                            {{--@endif--}}

                            {{--<div class="flex items-center justify-end mt-4">--}}
                                {{--<a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">--}}
                                    {{--{{ __('У вас уже есть учетная запись?') }}--}}
                                {{--</a>--}}

                                {{--<x-jet-button class="ml-4">--}}
                                    {{--{{ __('Зарегистрироваться') }}--}}
                                {{--</x-jet-button>--}}
                            {{--</div>--}}
                        {{--</form>--}}
                    {{--</div>--}}

                {{--</div>--}}
            {{--</div>--}}

            {{--<div class="mt-5 text-center">--}}
                {{--<p>© <script>document.write(new Date().getFullYear())</script> Grand Road Tashkent.</p>--}}
            {{--</div>--}}

        {{--</div>--}}
    {{--</div>--}}
    <div class="row align-items-center justify-content-center">
        <div class="col-md-8 col-lg-6 col-xl-5">
            <div class="card">

                <div class="card-body p-4">
                    <div class="text-center mt-2">
                        <h5 class="text-primary">Добро пожаловать!</h5>
                    </div>
                    <div class="p-2 mt-4">
                        @if (session('status'))
                            <div class="mb-4 font-medium text-sm text-green-600">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div>
                                <x-jet-label for="email" value="{{ __('Email') }}" />
                                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                            </div>

                            <div class="mt-4">
                                <x-jet-label for="password" value="{{ __('Пароль') }}" />
                                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
                            </div>

                            {{--<div class="block mt-4">--}}
                            {{--<label for="remember_me" class="flex items-center">--}}
                            {{--<x-jet-checkbox id="remember_me" name="remember" />--}}
                            {{--<span class="ml-2 text-sm text-gray-600">{{ __('Запомнить меня') }}</span>--}}
                            {{--</label>--}}
                            {{--</div>--}}

                            <div class="flex items-center justify-end mt-4">
                                {{--@if (Route::has('password.request'))--}}
                                {{--<a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">--}}
                                {{--{{ __('Забыли пароль?') }}--}}
                                {{--</a>--}}
                                {{--@endif--}}

                                <x-jet-button class="ml-4">
                                    {{ __('Войти') }}
                                </x-jet-button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>

            <div class="mt-5 text-center">
                <p>© <script>document.write(new Date().getFullYear())</script> Grand Road Tashkent.</p>
            </div>

        </div>
    </div>
@endsection

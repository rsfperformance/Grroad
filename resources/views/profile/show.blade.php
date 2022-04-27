@extends('admin.full')

@section('style')
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
@endsection

@section('content')
    <div>&nbsp;
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">&nbsp;
            @if (Laravel\Fortify\Features::canUpdateProfileInformation())
                @livewire('profile.update-profile-information-form')
            @endif

            @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
                <div class="mt-10 sm:mt-0">
                    @livewire('profile.update-password-form')
                </div>
            @endif
        </div>
    </div>
    @endsection


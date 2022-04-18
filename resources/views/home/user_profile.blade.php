@extends('layouts.home')

@php
    $setting = App\Http\Controllers\HomeController::getSetting();
@endphp



@section('content')


    <div class="row">

        <!-- BEGIN SIDEBAR & CONTENT -->
        <div class="row margin-bottom-40 col-sm-offset-1">

            @include('home.user_sidebar')

            <!-- BEGIN CONTENT -->
            <div class="col-md-6 col-sm-6">
                <x-app-layout>

                        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
                            @if (Laravel\Fortify\Features::canUpdateProfileInformation())
                                @livewire('profile.update-profile-information-form')

                            @endif

                            @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
                                <div class="mt-10 sm:mt-0">
                                    @livewire('profile.update-password-form')
                                </div>


                            @endif

                            @if (Laravel\Fortify\Features::canManageTwoFactorAuthentication())
                                <div class="mt-10 sm:mt-0">
                                    @livewire('profile.two-factor-authentication-form')
                                </div>


                            @endif

                            <div class="mt-10 sm:mt-0">
                                @livewire('profile.logout-other-browser-sessions-form')
                            </div>

                            @if (Laravel\Jetstream\Jetstream::hasAccountDeletionFeatures())


                                <div class="mt-10 sm:mt-0">
                                    @livewire('profile.delete-user-form')
                                </div>
                            @endif
                        </div>
                       </div>
                  </x-app-layout>

            <!-- END CONTENT -->
          </div>
    </div>

@endsection

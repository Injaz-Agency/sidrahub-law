@extends('layouts.app')

@push('title')
  @lang('Sign In')
@endpush

@push('css')
@endpush

@section('content')
  <!-- Session Status -->
  <x-auth-session-status class="text-center" :status="session('status')" />

  <section>
    <div class="container ">
      <div class="w-full sm:max-w-lg mx-auto py-20">
        <div class="flex flex-col items-center py-6 lg:py-10 px-2 lg:px-8 rounded-xl shadow-login-box space-y-5 lg:space-y-8">
          <img class="w-36 lg:w-60 mx-auto" src="{{ asset('images/logo.png') }}" alt="logo">

          <h2 class="text-xl lg:text-2xl text-main font-semibold">{{ __('Log in to your account') }}</h2>

          <form class="flex flex-col w-full px-6 space-y-5 lg:space-y-8" method="post" action="{{ route('frontend.login.store') }}">
            @csrf
            <div>
              <label for="email" class="text-sm lg:text-base">@lang('Email')</label>
              <div class="mt-3">
                <input id="email" name="email" required type="email" autocomplete="email" value="{{ old('email') }}" placeholder="@lang('Email')"
                  class="@error('email') is-invalid @enderror w-full px-4 py-2.5 text-sm lg: transition duration-300 ease-in-out transform border border-sh-border rounded-lg text-dark-gary">
                @error('email')
                  <div class="text-red-600">{{ $message }}</div>
                @enderror
              </div>
            </div>


            <div>
              <label for="password" class="text-sm lg:text-base">@lang('Password')</label>
              <div class="mt-3">
                <input id="password" required name="password" type="password" autocomplete="current-password" placeholder="*********"
                  class="@error('password') is-invalid @enderror w-full px-4 py-2.5 text-sm lg: transition duration-300 ease-in-out transform border border-sh-border rounded-lg text-dark-gary">
                @error('password')
                  <div class="text-red-600">{{ $message }}</div>
                @enderror
              </div>
            </div>

            <div>
              <div class="flex items-start">
                <input id="remember_me" name="remember" type="checkbox" class="w-5 h-5 text-second border-sh-border rounded-md focus:ring-0 focus:outline-none focus:ring-offset-0">
                <label for="remember_me" class="block ms-4 text-xs lg:text-base">
                  {{ __('Remember Me') }}
                </label>
              </div>
            </div>

            <div>
              <button type="submit"
                class="flex items-center justify-center w-full px-10 py-2 lg:py-3 text-sm lg:text-base font-medium uppercase text-center text-white bg-second rounded-md transition duration-200 ease-in-out transform">
                @lang('Login')
              </button>
            </div>

            {{-- <div>
              <h3 class="text-sm lg:text-lg text-center">
                {{ __("Don't have an account?") }}<a href="{{ route('frontend.register') }}" class="text-second"> {{ __('Register') }}</a>
              </h3>
            </div> --}}

          </form>
        </div>
      </div>
    </div>
  </section>
@endsection

@push('js-vendor')
@endpush

@push('js')
@endpush



@section('meta_tags')
  <title>{{ __('main.company_name') }}</title>
@endsection

@section('content')
@endsection

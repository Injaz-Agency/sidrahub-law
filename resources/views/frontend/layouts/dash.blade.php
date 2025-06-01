<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>@stack('title') | @lang('Sidra Hub')</title>
  @stack('meta')

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200..1000&family=Montaga&display=swap" rel="stylesheet">

  <link rel="icon" type="image/svg" href="{{ asset('img/logo/logo-icon.svg') }}" />

  @stack('css')

  @vite('resources/css/app.css')
</head>

<body>

  <div id="app" class="">
    @include('frontend.layouts.dash-header')

    {{-- @include('frontend.layouts.aside-menu') --}}

    <div class=" ltr:lg:ml-72 rtl:lg:mr-72 pt-4 px-4 lg:px-10 bg-sh-background dash-height">
      @yield('content')
    </div>

    {{-- @include('frontend.layouts.footer') --}}
  </div>
  <form method="post" action="{{route('logout')}}" id="logout" style="display: inline;">
    @csrf
    <button class="sub__link">
      <i class="fa-solid fa-arrow-right-from-bracket"></i>{{__('main.logout')}}
    </button>
  </form>
  @stack('js-vendor')
  @vite('resources/js/app.js')
  @stack('js')
</body>

</html>

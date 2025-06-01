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

  <div id="app">

    @include('frontend.layouts.header')

    @yield('content')

    @include('frontend.layouts.footer')
  </div>

  @stack('js-vendor')
  @vite('resources/js/app.js')
  @stack('js')
</body>

</html>

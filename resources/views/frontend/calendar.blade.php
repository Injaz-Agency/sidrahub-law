@extends('frontend.layouts.app')

@push('title')
  @lang('Calendar')
@endpush

@push('css')
@endpush

@section('content')
  <section>
    <div style="background: url({{ asset('frontend/blog-bg.png') }});background-size: cover; background-position: center;">
      <div class="container py-16 md:py-28 text-center">
        <svg class="inline-flex mx-auto" width="91" height="12" viewBox="0 0 91 12" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M90.001 1L25.1051 1" stroke="white" stroke-width="2" stroke-linecap="round" />
          <path d="M75.167 11L1.00033 11" stroke="#FF8216" stroke-width="2" stroke-linecap="round" />
        </svg>

        <h1 class="my-6 text-2xl lg:text-5xl text-white font-semibold">{{ __('Calendar') }}</h1>

        <div class="flex items-center justify-center space-x-4 rtl:space-x-reverse mx-auto text-white">
          <span class="text-base lg:text-2xl ">@lang('Home')</span>

          @if (App::currentLocale() == 'ar')
            <svg class="inline-flex w-4 h-4 md:w-6 md:h-6 fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
              <path
                d="M41.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.3 256 246.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160zm352-160l-160 160c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L301.3 256 438.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0z" />
            </svg>
          @else
            <svg class="inline-flex w-4 h-4 md:w-6 md:h-6 fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
              <path
                d="M470.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L402.7 256 265.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160zm-352 160l160-160c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L210.7 256 73.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0z" />
            </svg>
          @endif

          <span class="text-sm lg:text-2xl">@lang('Calendar')</span>
        </div>
      </div>
    </div>
  </section>


  <section>
    <div class="container py-32 ">
      <div class="bg-sh-background rounded-3xl p-3 lg:p-6">
        <date-calender locale="{{ App::currentLocale() }}"></date-calender>
      </div>
    </div>
  </section>
@endsection


@push('js')
@endpush

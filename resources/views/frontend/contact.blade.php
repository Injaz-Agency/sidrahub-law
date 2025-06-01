@extends('frontend.layouts.app')

@push('title')
  @lang('Contact Us')
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

        <h1 class="my-6 text-2xl lg:text-5xl text-white font-semibold">{{ __('Contact Us') }}</h1>

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

          <span class="text-sm lg:text-2xl">@lang('Contact Us')</span>
        </div>
      </div>
    </div>
  </section>

  <section>
    <div class="container py-6 lg:py-14">
      <div class=" flex flex-wrap">
        <div class="w-full lg:w-5/12">
          <div class="flex flex-col justify-center mb-4">
            <h2 class="relative pt-8 pb-6 text-lg md:text-5xl font-medium text-second head-lines">@lang('Contact Us')</h2>
            <p class="text-base md:text-3xl md:leading-relaxed font-semibold text-main">@lang('يرجى الاتصال بنا باستخدام النموذج وسنقوم بالرد عليك في أقرب وقت ممكن.')</p>
          </div>
        </div>
      </div>
    </div>


    <div class="container py-6 lg:py-14">
      <form action="">

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 md:gap-14">
          <div>
            <label for="name" class="text-base lg:text-xl">@lang('Name')</label>
            <div class="mt-3">
              <input id="name" name="name" type="text" value="{{ old('name') }}" placeholder="@lang('Name')"
                class="@error('name') is-invalid @enderror w-full px-4 py-5 text-sm lg: transition duration-300 ease-in-out transform border border-sh-border rounded-lg text-dark-gary">
              @error('name')
                <div class="text-red-600">{{ $message }}</div>
              @enderror
            </div>
          </div>

          <div>
            <label for="phone" class="text-base lg:text-xl">@lang('Mobile')</label>
            <div class="mt-3">
              <input id="phone" name="phone" type="text" value="{{ old('phone') }}" placeholder="@lang('Mobile')"
                class="@error('phone') is-invalid @enderror w-full px-4 py-5 text-sm lg: transition duration-300 ease-in-out transform border border-sh-border rounded-lg text-dark-gary">
              @error('phone')
                <div class="text-red-600">{{ $message }}</div>
              @enderror
            </div>
          </div>

          <div>
            <label for="email" class="text-base lg:text-xl">@lang('Email')</label>
            <div class="mt-3">
              <input id="email" name="email" type="email" value="{{ old('email') }}" placeholder="@lang('Email')"
                class="@error('email') is-invalid @enderror w-full px-4 py-5 text-sm lg: transition duration-300 ease-in-out transform border border-sh-border rounded-lg text-dark-gary">
              @error('email')
                <div class="text-red-600">{{ $message }}</div>
              @enderror
            </div>
          </div>

          <div>
            <label for="name" class="text-base lg:text-xl">@lang('Subject')</label>
            <div class="mt-3">
              <input id="name" name="name" type="text" value="{{ old('name') }}" placeholder="@lang('ادخل عنوان الموضوع')"
                class="@error('name') is-invalid @enderror w-full px-4 py-5 text-sm lg: transition duration-300 ease-in-out transform border border-sh-border rounded-lg text-dark-gary">
              @error('name')
                <div class="text-red-600">{{ $message }}</div>
              @enderror
            </div>
          </div>

          <div class="col-span-1 lg:col-span-2">
            <label for="message" class="text-base lg:text-xl">@lang('Subject')</label>
            <div class="mt-3">
              <textarea
                class="@error('message') is-invalid @enderror w-full px-4 py-5 text-sm lg: transition duration-300 ease-in-out transform border border-sh-border rounded-lg text-dark-gary"
                name="message" id="message" cols="30" rows="10">@lang('اكتب هنا ......')</textarea>

              @error('name')
                <div class="text-red-600">{{ $message }}</div>
              @enderror
            </div>
          </div>
        </div>


        <div class="my-10">
          <button type="submit"
            class="inline-flex items-center justify-center px-20 py-2 lg:py-3 text-sm lg:text-lg font-medium text-center text-white bg-main rounded-lg transition duration-200 ease-in-out transform">
            @lang('Submit')
          </button>
        </div>

      </form>
    </div>
  </section>
@endsection


@push('js')
@endpush

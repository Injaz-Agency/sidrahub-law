@extends('layouts.app')

@push('title')
  @lang('Sidra Lawyers')
@endpush

@push('css')
@endpush

@section('content')
  <section>
    <div style="background: url({{ asset('page_bg.jpg') }});background-size: cover; background-position: center;">
      <div class="container py-16 text-center md:py-28">
        <svg class="mx-auto inline-flex" width="91" height="12" viewBox="0 0 91 12" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M90.001 1L25.1051 1" stroke="white" stroke-width="2" stroke-linecap="round" />
          <path d="M75.167 11L1.00033 11" stroke="#FF8216" stroke-width="2" stroke-linecap="round" />
        </svg>

        <h1 class="my-6 text-2xl font-semibold text-white lg:text-5xl">{{ __('Request a legal consultation') }}</h1>

        <div class="mx-auto flex items-center justify-center text-white space-x-4">
          <span class="text-base lg:text-2xl">@lang('Home')</span>
          @if (App::currentLocale() == 'ar')
            <svg class="inline-flex h-4 w-4 fill-white md:h-6 md:w-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
              <path
                d="M41.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.3 256 246.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160zm352-160l-160 160c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L301.3 256 438.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0z" />
            </svg>
          @else
            <svg class="inline-flex h-4 w-4 fill-white md:h-6 md:w-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
              <path
                d="M470.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L402.7 256 265.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160zm-352 160l160-160c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L210.7 256 73.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0z" />
            </svg>
          @endif

          <span class=" text-sm lg:text-2xl">@lang('Request a legal consultation')</span>
        </div>
      </div>
    </div>
  </section>

  <section>
    <div class="container py-16">
      <div class="mb-4 flex flex-col items-start justify-center">
        <h2 class="relative pb-6 pt-8 text-center text-2xl font-medium text-second md:text-5xl">@lang('Request a legal consultation')</h2>
        <p class="text-lg font-medium text-main md:text-2xl">
          يرجى إكمال البيانات بالأسفل لحجز استشارة قانونية
        </p>
      </div>

      <form action="">
        <div class="grid grid-cols-1 gap-8 lg:grid-cols-2 py-16">
          <div>
            <label for="name" class="text-sm lg:text-base">@lang('Full Name')</label>
            <div class="mt-3">
              <input id="name" name="name" required type="text" value="{{ old('name') }}" placeholder="@lang('Full Name')"
                class="@error('name') is-invalid @enderror w-full px-4 py-3 text-sm lg:text-base transition duration-300 ease-in-out transform border border-sh-border rounded-lg text-dark-gary">
              @error('name')
                <div class="text-red-600">{{ $message }}</div>
              @enderror
            </div>
          </div>
          <div>
            <label for="phone" class="text-sm lg:text-base">@lang('Phone')</label>
            <div class="mt-3">
              <input id="phone" name="phone" required type="text" value="{{ old('phone') }}" placeholder="@lang('Phone')"
                class="@error('phone') is-invalid @enderror w-full px-4 py-3 text-sm lg:text-base transition duration-300 ease-in-out transform border border-sh-border rounded-lg text-dark-gary">
              @error('phone')
                <div class="text-red-600">{{ $message }}</div>
              @enderror
            </div>
          </div>
          <div>
            <label for="email" class="text-sm lg:text-base">@lang('Email')</label>
            <div class="mt-3">
              <input id="email" name="email" required type="email" autocomplete="email" value="{{ old('email') }}" placeholder="@lang('Email')"
                class="@error('email') is-invalid @enderror w-full px-4 py-3 text-sm lg:text-base transition duration-300 ease-in-out transform border border-sh-border rounded-lg text-dark-gary">
              @error('email')
                <div class="text-red-600">{{ $message }}</div>
              @enderror
            </div>
          </div>
          <div>
            <label for="legal_specialization" class="text-sm lg:text-base">@lang('Legal specialization')</label>
            <div class="mt-3">
              <input id="legal_specialization" name="legal_specialization" required type="text" value="{{ old('legal_specialization') }}" placeholder="@lang('Legal specialization')"
                class="@error('legal_specialization') is-invalid @enderror w-full px-4 py-3 text-sm lg:text-base transition duration-300 ease-in-out transform border border-sh-border rounded-lg text-dark-gary">
              @error('legal_specialization')
                <div class="text-red-600">{{ $message }}</div>
              @enderror
            </div>
          </div>
          <div class="lg:col-span-2">
            <label for="subject" class="text-sm lg:text-base">@lang('Subject')</label>
            <div class="mt-3">
              <input id="subject" name="subject" required type="text" value="{{ old('subject') }}" placeholder="@lang('Subject')"
                class="@error('subject') is-invalid @enderror w-full px-4 py-3 text-sm lg:text-base transition duration-300 ease-in-out transform border border-sh-border rounded-lg text-dark-gary">
              @error('subject')
                <div class="text-red-600">{{ $message }}</div>
              @enderror
            </div>
          </div>
          <div class="lg:col-span-2">
            <label for="info" class="text-sm lg:text-base">@lang('Info')</label>
            <div class="mt-3">
              <textarea id="info" name="info" required rows="4" value="{{ old('info') }}" placeholder="@lang('Info')"
                class="@error('info') is-invalid @enderror w-full px-4 py-3 text-sm lg:text-base transition duration-300 ease-in-out transform border border-sh-border rounded-lg text-dark-gary"></textarea>
              @error('info')
                <div class="text-red-600">{{ $message }}</div>
              @enderror
            </div>
          </div>
        </div>
        <div class="flex justify-start mt-auto">
          <button type="submit" class="flex items-center justify-center min-w-full lg:min-w-72 lg:text-2xl rounded-xl bg-main px-8 py-4 text-white">
            @lang('Send')
          </button>
        </div>
      </form>
    </div>
  </section>
@endsection


@push('js')
@endpush

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

        <h1 class="my-6 text-2xl font-semibold text-white lg:text-5xl">{{ __('Join us') }}</h1>

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

          <span class=" text-sm lg:text-2xl">@lang('Join us')</span>
        </div>
      </div>
    </div>
  </section>

  <section>
    <div class="container py-16">
      <div class="mb-4 flex flex-col items-start justify-center">
        <h2 class="relative pb-6 pt-8 text-center text-2xl font-medium text-second md:text-5xl">@lang('Join us as a lawyer')</h2>
        <p class="text-lg font-medium text-main md:text-2xl">
          يرجى إكمال البيانات بالأسفل للانضمام الى منصة سيدرا القانونية.
        </p>
      </div>

      <form action="{{ route('lawyer.join.submit') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="grid grid-cols-1 gap-8 lg:grid-cols-2 py-16">
          <div>
            <label for="name" class="text-sm lg:text-base">@lang('Owner Name')</label>
            <div class="mt-3">
              <input id="name" name="name" type="text" value="{{ old('name') }}" placeholder="@lang('Owner Name')"
                class="@error('name') is-invalid @enderror w-full px-4 py-3 h-14 text-sm lg:text-base transition duration-300 ease-in-out transform border border-sh-border rounded-lg text-dark-gary">
              @error('name')
                <div class="text-red-600">{{ $message }}</div>
              @enderror
            </div>
          </div>
          <div>
            <label for="name_ar" class="text-sm lg:text-base">@lang('Company Name (Arabic)')</label>
            <div class="mt-3">
              <input id="name_ar" name="name_ar" type="text" value="{{ old('name_ar') }}" placeholder="@lang('Company Name (Arabic)')"
                class="@error('name_ar') is-invalid @enderror w-full px-4 py-3 h-14 text-sm lg:text-base transition duration-300 ease-in-out transform border border-sh-border rounded-lg text-dark-gary">
              @error('name_ar')
                <div class="text-red-600">{{ $message }}</div>
              @enderror
            </div>
          </div>
          <div>
            <label for="name_en" class="text-sm lg:text-base">@lang('Company Name (English)')</label>
            <div class="mt-3">
              <input id="name_en" name="name_en" type="text" value="{{ old('name_en') }}" placeholder="@lang('Company Name (English)')"
                class="@error('name_en') is-invalid @enderror w-full px-4 py-3 h-14 text-sm lg:text-base transition duration-300 ease-in-out transform border border-sh-border rounded-lg text-dark-gary">
              @error('name_en')
                <div class="text-red-600">{{ $message }}</div>
              @enderror
            </div>
          </div>
          <div>
            <label for="phone" class="text-sm lg:text-base">@lang('Phone')</label>
            <div class="mt-3">
              <input id="phone" name="phone" type="text" value="{{ old('phone') }}" placeholder="@lang('Phone')"
                class="@error('phone') is-invalid @enderror w-full px-4 py-3 h-14 text-sm lg:text-base transition duration-300 ease-in-out transform border border-sh-border rounded-lg text-dark-gary">
              @error('phone')
                <div class="text-red-600">{{ $message }}</div>
              @enderror
            </div>
          </div>
          <div>
            <label for="email" class="text-sm lg:text-base">@lang('Email')</label>
            <div class="mt-3">
              <input id="email" name="email" type="email" autocomplete="email" value="{{ old('email') }}" placeholder="@lang('Email')"
                class="@error('email') is-invalid @enderror w-full px-4 py-3 h-14 text-sm lg:text-base transition duration-300 ease-in-out transform border border-sh-border rounded-lg text-dark-gary">
              @error('email')
                <div class="text-red-600">{{ $message }}</div>
              @enderror
            </div>
          </div>
          <div>
            <label for="country_id" class="text-sm lg:text-base">@lang('Country')</label>
            <div class="mt-3">
              <select name="country_id" id="country_id"
                class="@error('country_id') is-invalid @enderror w-full px-4 py-3 h-14 text-sm lg:text-base transition duration-300 ease-in-out transform border border-sh-border rounded-lg text-dark-gary">
                <option value="">@lang('Select country')</option>
                @foreach ($countries as $country)
                  <option value="{{ $country->id }}" {{ old('country_id') == $country->id ? 'selected' : '' }}>
                    {{ App::currentLocale() == 'ar' ? $country->name_ar : $country->name_en }}</option>
                @endforeach
              </select>
              @error('country_id')
                <div class="text-red-600">{{ $message }}</div>
              @enderror
            </div>
          </div>
          <div>
            <label for="logo" class="text-sm lg:text-base">@lang('Logo')</label>
            <div class="mt-3">
              <input id="logo" name="logo" type="file" value="{{ old('logo') }}" placeholder="@lang('Logo')"
                class="@error('logo') is-invalid @enderror w-full px-4 py-3 h-14 text-sm lg:text-base transition duration-300 ease-in-out transform border border-sh-border rounded-lg text-dark-gary">
              @error('logo')
                <div class="text-red-600">{{ $message }}</div>
              @enderror
            </div>
          </div>
          <div>
            <label for="legal_entity" class="text-sm lg:text-base">@lang('Legal entity')</label>
            <div class="mt-3">
              <select name="legal_entity" id="legal_entity"
                class="@error('legal_entity') is-invalid @enderror w-full px-4 py-3 h-14 text-sm lg:text-base transition duration-300 ease-in-out transform border border-sh-border rounded-lg text-dark-gary">
                <option value="">@lang('Please select')</option>
                <option value="individual_lawyer" {{ old('legal_entity') == 'individual_lawyer' ? 'selected' : '' }}>@lang('Individual lawyer')</option>
                <option value="law_firm" {{ old('legal_entity') == 'law_firm' ? 'selected' : '' }}>@lang('Law firm')</option>
              </select>
              @error('legal_entity')
                <div class="text-red-600">{{ $message }}</div>
              @enderror
            </div>
          </div>
          <div>
            <label for="legal_specialization" class="text-sm lg:text-base">@lang('Legal specialization')</label>
            <div class="mt-3">
              <select name="legal_specialization" id="legal_specialization"
                class="@error('legal_specialization') is-invalid @enderror w-full px-4 py-3 h-14 text-sm lg:text-base transition duration-300 ease-in-out transform border border-sh-border rounded-lg text-dark-gary">
                <option value="">@lang('Please select')</option>
                @foreach ($services as $service)
                  <option value="{{ $service->id }}" {{ old('legal_specialization') == $service->id ? 'selected' : '' }}>
                    {{ App::currentLocale() == 'ar' ? $service->title_ar : $service->title_en }}</option>
                @endforeach
              </select>
              @error('legal_specialization')
                <div class="text-red-600">{{ $message }}</div>
              @enderror
            </div>
          </div>
          <div>
            <label for="registration_number" class="text-sm lg:text-base">@lang('Registration number')</label>
            <div class="mt-3">
              <input id="registration_number" name="registration_number" type="text" value="{{ old('registration_number') }}" placeholder="@lang('Registration number')"
                class="@error('registration_number') is-invalid @enderror w-full px-4 py-3 h-14 text-sm lg:text-base transition duration-300 ease-in-out transform border border-sh-border rounded-lg text-dark-gary">
              @error('registration_number')
                <div class="text-red-600">{{ $message }}</div>
              @enderror
            </div>
          </div>
          <div>
            <label for="license" class="text-sm lg:text-base">@lang('License')</label>
            <div class="mt-3">
              <input id="license" name="license" type="file" value="{{ old('license') }}" placeholder="@lang('License')"
                class="@error('license') is-invalid @enderror w-full px-4 py-3 h-14 text-sm lg:text-base transition duration-300 ease-in-out transform border border-sh-border rounded-lg text-dark-gary">
              @error('license')
                <div class="text-red-600">{{ $message }}</div>
              @enderror
            </div>
          </div>
          <div class="lg:col-span-2">
            <label for="info" class="text-sm lg:text-base">@lang('Info')</label>
            <div class="mt-3">
              <textarea id="info" name="info" rows="4" value="{{ old('info') }}" placeholder="@lang('Info')"
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

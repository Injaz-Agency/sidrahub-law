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

        <h1 class="my-6 text-2xl font-semibold text-white lg:text-5xl">{{ __('Sidra Lawyers') }}</h1>

        <div class="mx-auto flex items-center justify-center space-x-4 text-white">
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

          <span class="text-sm lg:text-2xl">@lang('Sidra Lawyers')</span>
        </div>
      </div>
    </div>
  </section>

  <section>
    <div class="container py-16">
      <div class="grid grid-cols-1 gap-6 lg:grid-cols-3 lg:gap-12">
        <div>
          <label for="legal" class="text-base lg:text-xl">@lang('Legal specialization')</label>
          <div class="mt-3">
            <input id="legal" name="legal" type="text" value="{{ old('legal') }}" placeholder="@lang('Legal specialization')"
              class="@error('legal') is-invalid @enderror lg: w-full transform rounded-lg border border-sh-border px-4 py-5 text-sm text-dark-gary transition duration-300 ease-in-out">
            @error('legal')
              <div class="text-red-600">{{ $message }}</div>
            @enderror
          </div>
        </div>
        <div>
          <label for="service" class="text-base lg:text-xl">@lang('Service type')</label>
          <div class="mt-3">
            <input id="service" name="service" type="text" value="{{ old('service') }}" placeholder="@lang('Service type')"
              class="@error('service') is-invalid @enderror lg: w-full transform rounded-lg border border-sh-border px-4 py-5 text-sm text-dark-gary transition duration-300 ease-in-out">
            @error('service')
              <div class="text-red-600">{{ $message }}</div>
            @enderror
          </div>
        </div>
        <div>
          <label for="object" class="text-base lg:text-xl">@lang('Lawyer / Office / Company')</label>
          <div class="mt-3">
            <input id="object" name="object" type="text" value="{{ old('object') }}" placeholder="@lang('Lawyer / Office / Company')"
              class="@error('object') is-invalid @enderror lg: w-full transform rounded-lg border border-sh-border px-4 py-5 text-sm text-dark-gary transition duration-300 ease-in-out">
            @error('object')
              <div class="text-red-600">{{ $message }}</div>
            @enderror
          </div>
        </div>
      </div>
    </div>
  </section>

  <section>
    <div class="container py-16">
      <div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-3 lg:gap-10 xl:grid-cols-4 xl:gap-14">
        @foreach ($professionals as $professional)
          <div class="group space-y-3">
            <div class="relative">
              <img class="w-full rounded-xl shadow-image transition-all duration-200 ease-linear group-hover:border-4 group-hover:border-second"
                src="{{ $professional->image && Storage::exists(path: $professional->image) ? Storage::url(path: $professional->image) : asset('avatar.png') }}" alt="">

              {{-- <ul class="absolute inset-x-0 bottom-8 flex items-center justify-center space-x-5 rtl:space-x-reverse" style="display: none;">
                <li>
                  <a href="" target="_balnk">
                    <svg class="h-6 w-6 fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                      <path
                        d="M459.4 151.7c.3 4.5 .3 9.1 .3 13.6 0 138.7-105.6 298.6-298.6 298.6-59.5 0-114.7-17.2-161.1-47.1 8.4 1 16.6 1.3 25.3 1.3 49.1 0 94.2-16.6 130.3-44.8-46.1-1-84.8-31.2-98.1-72.8 6.5 1 13 1.6 19.8 1.6 9.4 0 18.8-1.3 27.6-3.6-48.1-9.7-84.1-52-84.1-103v-1.3c14 7.8 30.2 12.7 47.4 13.3-28.3-18.8-46.8-51-46.8-87.4 0-19.5 5.2-37.4 14.3-53 51.7 63.7 129.3 105.3 216.4 109.8-1.6-7.8-2.6-15.9-2.6-24 0-57.8 46.8-104.9 104.9-104.9 30.2 0 57.5 12.7 76.7 33.1 23.7-4.5 46.5-13.3 66.6-25.3-7.8 24.4-24.4 44.8-46.1 57.8 21.1-2.3 41.6-8.1 60.4-16.2-14.3 20.8-32.2 39.3-52.6 54.3z">
                      </path>
                    </svg>
                  </a>
                </li>
                <li>
                  <a href="" target="_balnk">
                    <svg class="h-6 w-6 fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                      <path
                        d="M416 32H31.9C14.3 32 0 46.5 0 64.3v383.4C0 465.5 14.3 480 31.9 480H416c17.6 0 32-14.5 32-32.3V64.3c0-17.8-14.4-32.3-32-32.3zM135.4 416H69V202.2h66.5V416zm-33.2-243c-21.3 0-38.5-17.3-38.5-38.5S80.9 96 102.2 96c21.2 0 38.5 17.3 38.5 38.5 0 21.3-17.2 38.5-38.5 38.5zm282.1 243h-66.4V312c0-24.8-.5-56.7-34.5-56.7-34.6 0-39.9 27-39.9 54.9V416h-66.4V202.2h63.7v29.2h.9c8.9-16.8 30.6-34.5 62.9-34.5 67.2 0 79.7 44.3 79.7 101.9V416z">
                      </path>
                    </svg>
                  </a>
                </li>
                <li>
                  <a href="" target="_balnk">
                    <svg class="h-6 w-6 fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                      <path
                        d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z">
                      </path>
                    </svg>
                  </a>
                </li>
                <li>
                  <a href="" target="_balnk">
                    <svg class="h-6 w-6 fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                      <path
                        d="M512 256C512 114.6 397.4 0 256 0S0 114.6 0 256C0 376 82.7 476.8 194.2 504.5V334.2H141.4V256h52.8V222.3c0-87.1 39.4-127.5 125-127.5c16.2 0 44.2 3.2 55.7 6.4V172c-6-.6-16.5-1-29.6-1c-42 0-58.2 15.9-58.2 57.2V256h83.6l-14.4 78.2H287V510.1C413.8 494.8 512 386.9 512 256h0z">
                      </path>
                    </svg>
                  </a>
                </li>
              </ul> --}}
            </div>
            <h3 class="text-xl font-semibold text-second md:text-2xl ltr:ml-2 rtl:mr-2">
              @if (App::currentLocale() == 'ar')
                {{ $professional->name_ar }}
              @else
                {{ $professional->name_en }}
              @endif
            </h3>
            <p class="text-base font-medium md:text-xl ltr:ml-2 rtl:mr-2">
              @if (App::currentLocale() == 'ar')
                {{ $professional->job_title_ar }}
              @else
                {{ $professional->job_title_en }}
              @endif
            </p>
            <div class="py-4">
              <a href="{{ route('professionals.show', $professional) }}"
                class="inline-flex items-center justify-center border-b-2 border-second px-1 py-2 text-xl font-medium text-main">
                <span>@lang('Know him')</span>
                @if (App::currentLocale() == 'ar')
                  <span class="mr-2 inline-flex h-4 w-4 fill-main md:h-6 md:w-6">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                      <path
                        d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.2 288 416 288c17.7 0 32-14.3 32-32s-14.3-32-32-32l-306.7 0L214.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z" />
                    </svg>
                  </span>
                @else
                  <span class="ml-2 inline-flex h-4 w-4 fill-main md:h-6 md:w-6">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                      <path
                        d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" />
                    </svg>
                  </span>
                @endif
              </a>
            </div>
          </div>
        @endforeach
      </div>


      <ul class="flex items-center justify-center mt-6 lg:mt-12 space-x-4">
        <li>
          <a rel="@lang('Previous')" href="" rel="prev"
            class="@if ($professionals->currentPage() == 1) pagination-disabled-arrow @endif flex items-center justify-center w-11 h-11 p-2 text-main transition-colors duration-300 transform border rounded-lg hover:bg-second hover:border-second hover:text-white focus:outline-none">
            @if (App::currentLocale() == 'ar')
              <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                <path
                  d="M278.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-160 160c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L210.7 256 73.4 118.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l160 160z" />
              </svg>
            @else
              <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                <path
                  d="M41.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.3 256 246.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z" />
              </svg>
            @endif
          </a>
        </li>
        @for ($page = 1; $page <= $professionals->lastPage(); $page++)
          <li>
            <a href="{{ route('professionals', ['page' => $page]) }}" aria-label="Go to page 1"
              class="@if ($professionals->currentPage() == $page) pagination-active @endif flex items-center justify-center w-11 h-11 p-2 text-main text-lg transition-colors duration-300 transform border rounded-lg hover:bg-second hover:border-second hover:text-white focus:outline-none">
              {{ $page }}
            </a>
          </li>
        @endfor
        <li>
          <a title="@lang('Next')" href="{{ route('professionals', ['page' => $professionals->currentPage() + 1]) }}" rel="next"
            class="@if ($professionals->currentPage() == $professionals->lastPage()) pagination-disabled-arrow @endif flex items-center justify-center w-11 h-11 p-2 text-main transition-colors duration-300 transform border rounded-lg hover:bg-second hover:border-second hover:text-white focus:outline-none">
            @if (App::currentLocale() == 'ar')
              <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                <path
                  d="M41.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.3 256 246.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z" />
              </svg>
            @else
              <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                <path
                  d="M278.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-160 160c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L210.7 256 73.4 118.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l160 160z" />
              </svg>
            @endif
          </a>
        </li>
      </ul>
    </div>
  </section>
@endsection


@push('js')
@endpush

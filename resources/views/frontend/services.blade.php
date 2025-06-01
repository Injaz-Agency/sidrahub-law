@extends('frontend.layouts.app')
@push('title', __('Services'))

@push('css')
  <style>
    .page-header {
      height: 430px;
      background-image: url("{{ asset('frontend/service-bg-1.jpeg') }}")
    }

    .page-header>svg {
      margin: 0 auto 20px;
    }
  </style>
@endpush
@section('content')
  <section class="page-header content-center grid text-center items-center">
    <svg width="91" height="12" viewBox="0 0 91 12" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M90.001 1L25.1051 1" stroke="white" stroke-width="2" stroke-linecap="round" />
      <path d="M75.167 11L1.00033 11" stroke="#FF8216" stroke-width="2" stroke-linecap="round" />
    </svg>
    {{--        <img src="{{$service?->icon}}" > --}}
    <h1 class="text-white text-4xl bold">
      {{ $service?->name }}
    </h1>
    <nav class="flex items-center text-sm m-auto text-white space-x-2 mt-5">
      <a href="{{ route('frontend.home') }}" class="text-gray-300 text mx-2"> @lang('Home') </a>
      <span class="text-gray-200">
        <svg width="15" height="15" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
          <g clip-path="url(#clip0_601_83)">
            <path fill-rule="evenodd" clip-rule="evenodd"
              d="M19.6337 0.292192C19.4361 0.104594 19.1741 0 18.9017 0C18.6292 0 18.3672 0.104594 18.1697 0.292192L9.60668 8.55619C9.415 8.73835 9.26237 8.9576 9.15808 9.20059C9.05378 9.44359 9 9.70526 9 9.96969C9 10.2341 9.05378 10.4958 9.15808 10.7388C9.26237 10.9818 9.415 11.201 9.60668 11.3832L18.2317 19.7082C18.6317 20.0932 19.2797 20.0982 19.6857 19.7182C19.784 19.6277 19.8626 19.5179 19.9167 19.3957C19.9708 19.2735 19.9992 19.1415 20.0001 19.0079C20.0011 18.8742 19.9745 18.7418 19.9222 18.6189C19.8698 18.496 19.7927 18.3851 19.6957 18.2932L11.8027 10.6762C11.7068 10.5851 11.6304 10.4755 11.5782 10.3539C11.526 10.2324 11.4991 10.1015 11.4991 9.96919C11.4991 9.83691 11.526 9.70602 11.5782 9.58448C11.6304 9.46293 11.7068 9.35328 11.8027 9.26219L19.6327 1.70519C19.7286 1.61419 19.8049 1.50462 19.8571 1.38316C19.9093 1.2617 19.9362 1.13089 19.9362 0.998692C19.9362 0.866496 19.9093 0.735683 19.8571 0.614221C19.8049 0.49276 19.7296 0.383192 19.6337 0.292192Z"
              fill="white" />
          </g>
          <g clip-path="url(#clip1_601_83)">
            <path fill-rule="evenodd" clip-rule="evenodd"
              d="M10.6337 0.292192C10.4361 0.104594 10.1741 0 9.90168 0C9.62925 0 9.36722 0.104594 9.16968 0.292192L0.606677 8.55619C0.414997 8.73835 0.262371 8.9576 0.158076 9.20059C0.0537822 9.44359 0 9.70526 0 9.96969C0 10.2341 0.0537822 10.4958 0.158076 10.7388C0.262371 10.9818 0.414997 11.201 0.606677 11.3832L9.23168 19.7082C9.63168 20.0932 10.2797 20.0982 10.6857 19.7182C10.784 19.6277 10.8626 19.5179 10.9167 19.3957C10.9708 19.2735 10.9992 19.1415 11.0001 19.0079C11.0011 18.8742 10.9745 18.7418 10.9222 18.6189C10.8698 18.496 10.7927 18.3851 10.6957 18.2932L2.80268 10.6762C2.70676 10.5851 2.63038 10.4755 2.57819 10.3539C2.52599 10.2324 2.49908 10.1015 2.49908 9.96919C2.49908 9.83691 2.52599 9.70602 2.57819 9.58448C2.63038 9.46293 2.70676 9.35328 2.80268 9.26219L10.6327 1.70519C10.7286 1.61419 10.8049 1.50462 10.8571 1.38316C10.9093 1.2617 10.9362 1.13089 10.9362 0.998692C10.9362 0.866496 10.9093 0.735683 10.8571 0.614221C10.8049 0.49276 10.7296 0.383192 10.6337 0.292192Z"
              fill="white" />
          </g>
          <defs>
            <clipPath id="clip0_601_83">
              <rect width="11" height="20" fill="white" transform="translate(9)" />
            </clipPath>
            <clipPath id="clip1_601_83">
              <rect width="11" height="20" fill="white" />
            </clipPath>
          </defs>
        </svg>
      </span>
      <a href="{{ route('frontend.services') }}" class="text-gray-300 text mx-2"> @lang('Services') </a>
      {{--            <span class="text-gray-300  text">خدماتنا</span> --}}

    </nav>
  </section>

  <section>
    <div class="container">

      <h2 class="text-3xl mt-10 mb-6 text-orange-500 ">@lang('Service overview')</h2>
      <p>{!!  $firstDesc  !!}</p>

      <h2 class="text-3xl mt-32 mb-6 text-orange-500  ">@lang('Packages')</h2>



      <div class="grid grid-cols-4 gap-12 pb-32">
        @foreach ($packages as $package)
          <div class="group flex flex-col px-6 py-12 bg-sh-background shadow-pack-box rounded-xl pack-bg hover:text-white">
            <div class=" flex items-center justify-between">
              <h3 class="text-lg md:text-2xl">{{ $package->name }}</h3>
              <span class="inline-flex">
                  <svg width="80" height="80" viewBox="0 0 93 93" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                  <circle cx="46.5" cy="46.5" r="46.5" fill="white" />
                  <rect x="27.6484" y="26.8125" width="37.7027" height="38.5405" fill="url(#pattern0)" />
                  <defs>
                    <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                      <use xlink:href="#image0_551_7540" transform="scale(0.0222222 0.0217391)" />
                    </pattern>
                    <image id="image0_551_7540" width="45" height="46"
                           xlink:href="data:image/png;base64,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" />
                  </defs>
                </svg>

              </span>
            </div>

            <h3 class="text-2xl md:text-4xl text-main group-hover:text-white">
              {{ sprintf('%s %s', __('main.currency'), number_format($package->price)) }}
{{--              <span class="text-sm md:text-base">/ شهرياً</span>--}}
            </h3>

            <ul class="my-10 space-y-4 flex-1">
              @foreach ($service->contents as $content)
                @if ($package->contentExists($content->id)->exists())
                  <li class="flex justify-start">
                    <span class="inline-flex w-8">
                      <svg class="w-5 h-5 me-4 fill-main group-hover:fill-white" xmlns="http://www.w3.org/2000/svg" height="1em"
                        viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                        <path
                          d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z" />
                      </svg>
                    </span>
                    <p class="text-sm font-medium"> {{ $content->name }}</p>
                  </li>
                @endif
              @endforeach
            </ul>

            <a href="{{ route('client.package.buy', $package) }}"
              class="flex items-center justify-center px-10 py-3 text-main group-hover:text-second group-hover:bg-white border border-main group-hover:border-white rounded-xl ">
              @lang('Get the package')
            </a>
          </div>
        @endforeach
      </div>
    </div>
  </section>
@endsection

@push('js')
  @if ($secDesc !== '')
    <script>
      let readMore = document.getElementById('__more');
      let desc = document.getElementById('__sec')
      readMore.addEventListener('click', function(e) {
        e.preventDefault()
        if (desc.classList.contains('s-banner__hide')) {
          desc.classList.remove('s-banner__hide')
          desc.classList.add('s-banner__show')
          this.innerHTML = '{{ __('main.show_less') }}'
          return true
        }
        desc.classList.remove('s-banner__show')
        desc.classList.add('s-banner__hide')
        this.innerHTML = '...{{ __('main.read_more') }}'
      })
    </script>
  @endif
@endpush

@extends('frontend.layouts.app')

@push('title', __('Services'))

@push('css')
  <style>
    .page-header {
      height: 430px;
      background-image: url("{{ asset('frontend/category-bg.png') }}")
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
    <h1 class="text-white text-4xl bold">
      @lang('Services')
    </h1>
    <nav class="flex items-center text-sm m-auto text-white space-x-2 mt-5">
      <a href="{{ route('frontend.home') }}" class="text-gray-200 text-1xl mx-2"> @lang('Home') </a>
      <span class="text-gray-200">
        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
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
      <span class="text-gray-200  text-1xl">@lang('Services')</span>
    </nav>
  </section>

  <section>
    <div class="py-16">
      <div class="container">
        <div class="px-6 text-gray-500">
          <div class="mt-12 grid grid-cols-12 gap-10">
            <div class="col-span-3">
              <h2 class="text-3xl mb-6 text-orange-500 ">@lang('Filter by')</h2>
              {{--                        @foreach ($categories as $category) --}}
              {{--                            <div  class="rounded-xl mb-4 bg-gray-100 text-gray-900 p-3 pl-2 grid grid-cols-12"> --}}
              {{--                                <label class="text-2 col-span-11" for="{{$category->id}}"> --}}
              {{--                                    {{$category->name}} --}}
              {{--                                </label> --}}
              {{--                                <input --}}
              {{--                                        name="category[]" --}}
              {{--                                        type="checkbox" --}}
              {{--                                        id="{{$category->id}}" --}}
              {{--                                        form="__filters" --}}
              {{--                                        class="form-checkbox text-indigo-600 h-5 w-5 col-span-1 text-left __check" --}}
              {{--                                        value="{{$category->id}}" --}}
              {{--                                        {{in_array($category->id,request()->input('category',[]))?'checked':''}}> --}}


              {{--                            </div> --}}
              {{--                        @endforeach --}}

              <category-filter :categories='@json($categories)' :url='@json(route('frontend.services'))'
                :initial-selected-categories="{{ json_encode(request()->input('category', [])) }}"></category-filter>

            </div>
            <div class="col-span-9">
              <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-10">
                @foreach ($services as $service)
                  <div class="flex flex-col items-center justify-center py-6 px-4 text-center shadow-small-box rounded-lg">
                    <span class="inline-flex">
                      <img class="w-20 h-20" src="{{ $service->icon }}">
                    </span>

                    <h3 class="my-4 text-lg md:text-xl font-semibold text-main">{{ $service->name }}</h3>

                    <p class="text-sm md:text-lg md:leading-relaxed">{{ str_limit($service->description, 120) }}</p>

                    <a href="{{ route('frontend.services.show', $service?->id) }}" class="flex items-center justify-center mt-4 text-base md:text-lg text-main">
                      <svg class="w-4 h-4 ltr:mr-3 rtl:ml-3" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                        <path
                          d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.2 288 416 288c17.7 0 32-14.3 32-32s-14.3-32-32-32l-306.7 0L214.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z" />
                      </svg>
                      @lang('Read more')
                    </a>
                  </div>
                @endforeach

              </div>
            </div>
          </div>

        </div>
      </div>

    </div>
  </section>
@endsection

@push('js')

@endpush

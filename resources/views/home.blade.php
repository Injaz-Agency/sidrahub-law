@extends('layouts.app')

@push('title')
  @lang('Home')
@endpush

@push('css')
  <link href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css" rel="stylesheet">

  <style>
    #customersOpinions .splide__pagination {
      bottom: -2.75em
    }

    #customersOpinions .splide__pagination__page {
      background: #C6C6C6 !important;
      margin: 3px 8px;
      width: 16px;
      height: 16px;
    }

    #customersOpinions .splide__pagination__page.is-active {
      background: #FF8216 !important;
      transform: scale(1.1);
    }
  </style>
@endpush

@section('content')
  <section>
    <div id="homeSlider" class="splide">
      <div class="splide__track h-full">
        <ul class="splide__list">
          <li class="splide__slide">
            <div class="relative flex flex-col-reverse flex-wrap lg:flex-row">
              <div class="hero-border w-full py-8 lg:w-8/12 lg:py-28">
                <div class="flex h-full flex-col justify-center space-y-6 px-4 lg:space-y-14 lg:ltr:pl-32 lg:rtl:pr-32">
                  <h1 class="w-full text-2xl font-bold text-second md:text-6xl lg:w-11/12">@lang('Sidra platform for
                                                                                                                                                                                                                                                                                                                                                                                                                                      business services')</h1>

                  <p class="w-full text-base md:text-3xl md:leading-relaxed lg:w-9/12">@lang('Combine all your financial,
                                                                                                                                                                                                                                                                                                                                                                                                                                      legal, and PR services in one place and save on hiring costs')</p>

                  <div class="flex items-center space-x-4 lg:space-x-8 rtl:space-x-reverse">
                    <a href=""
                      class="flex min-w-[140px] items-center justify-center rounded-xl border-2 border-second bg-second px-8 py-3 text-base text-white lg:min-w-[180px]">@lang('Free
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  Consultation')</a>
                    <a href=""
                      class="flex min-w-[140px] items-center justify-center rounded-xl border-2 border-main px-8 py-3 text-base text-main transition-all duration-150 ease-linear hover:border-second hover:bg-second hover:text-white lg:min-w-[180px]">@lang('Our
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  services')</a>
                  </div>
                </div>
              </div>

              <div class="inset-y-0 end-0 -z-10 lg:absolute">
                <img class="object-cover object-center lg:h-full" src="{{ asset('home-hero1.png') }}" alt="">
              </div>

            </div>
          </li>
          <li class="splide__slide">
            <div class="relative flex flex-col-reverse flex-wrap lg:flex-row">
              <div class="hero-border w-full py-8 lg:w-8/12 lg:py-28">
                <div class="flex h-full flex-col justify-center space-y-6 px-4 lg:space-y-14 lg:ltr:pl-32 lg:rtl:pr-32">
                  <h1 class="w-full text-2xl font-bold text-second md:text-6xl lg:w-11/12">@lang('Sidra platform for
                                                                                                                                                                                                                                                                                                                                                                                                                                      business services')</h1>

                  <p class="w-full text-base md:text-3xl md:leading-relaxed lg:w-9/12">
                    كل ما تحتاجه في مكان واحد ، بوابتك إلى التميز لتأسيس شركتك وتطوير أعمالك التجارية وتقديم الدعم الكامل
                    لها.
                  </p>

                  <div class="flex items-center space-x-4 lg:space-x-8 rtl:space-x-reverse">
                    <a href=""
                      class="flex min-w-[140px] items-center justify-center rounded-xl border-2 border-second bg-second px-8 py-3 text-base text-white lg:min-w-[180px]">@lang('Free
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  Consultation')</a>
                    <a href=""
                      class="flex min-w-[140px] items-center justify-center rounded-xl border-2 border-main px-8 py-3 text-base text-main transition-all duration-150 ease-linear hover:border-second hover:bg-second hover:text-white lg:min-w-[180px]">@lang('Our
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  services')</a>
                  </div>
                </div>
              </div>

              <div class="inset-y-0 end-0 -z-10 lg:absolute">
                <img class="object-cover object-center lg:h-full" src="{{ asset('home-hero2.png') }}" alt="">
              </div>

            </div>
          </li>
        </ul>
      </div>
    </div>

  </section>

  <section>
    <div class="container pb-10 pt-24">
      <div class="mb-4 flex flex-col items-center justify-center">
        <h2 class="relative pb-6 pt-8 text-center text-lg font-medium text-second md:text-5xl">@lang('Legal Specialties')
        </h2>
        <p class="text-base font-semibold text-main md:text-3xl">@lang('Sidra Legal Services')</p>
      </div>

      <div class="mt-16 grid grid-cols-1 gap-20 md:grid-cols-3">
        <div class="flex flex-col items-center justify-center rounded-xl bg-sh-background px-20 py-12 text-center">
          <span class="inline-flex">
            <img class="h-32 w-32" src="{{ asset('images/icons/money.svg') }}" alt="">
          </span>

          <h3 class="my-10 text-lg font-bold text-main md:text-3xl">
            الأحوال الشخصية
          </h3>

          <p class="text-lg font-medium md:leading-relaxed">
            {{-- {{ str_limit($service->description, 130, '...') }} --}}
            يختص بكافة القضايا الجنائية ابتداءً بقضايا السب والشتم والقذف والنصب والاحتيال مروراً بجرائم الابتزاز والسرقة
            والاعتداء وصولاً إلى قضايا القتل والقصاص والدية.
          </p>
        </div>
        <div class="flex flex-col items-center justify-center rounded-xl bg-sh-background px-20 py-12 text-center">
          <span class="inline-flex">
            <img class="h-32 w-32" src="{{ asset('images/icons/money.svg') }}" alt="">
          </span>

          <h3 class="my-10 text-lg font-bold text-main md:text-3xl">
            الأحوال الشخصية
          </h3>

          <p class="text-lg font-medium md:leading-relaxed">
            {{-- {{ str_limit($service->description, 130, '...') }} --}}
            يختص بكافة القضايا الجنائية ابتداءً بقضايا السب والشتم والقذف والنصب والاحتيال مروراً بجرائم الابتزاز والسرقة
            والاعتداء وصولاً إلى قضايا القتل والقصاص والدية.
          </p>
        </div>
        <div class="flex flex-col items-center justify-center rounded-xl bg-sh-background px-20 py-12 text-center">
          <span class="inline-flex">
            <img class="h-32 w-32" src="{{ asset('images/icons/money.svg') }}" alt="">
          </span>

          <h3 class="my-10 text-lg font-bold text-main md:text-3xl">
            الأحوال الشخصية
          </h3>

          <p class="text-lg font-medium md:leading-relaxed">
            {{-- {{ str_limit($service->description, 130, '...') }} --}}
            يختص بكافة القضايا الجنائية ابتداءً بقضايا السب والشتم والقذف والنصب والاحتيال مروراً بجرائم الابتزاز والسرقة
            والاعتداء وصولاً إلى قضايا القتل والقصاص والدية.
          </p>
        </div>
        <div class="flex flex-col items-center justify-center rounded-xl bg-sh-background px-20 py-12 text-center">
          <span class="inline-flex">
            <img class="h-32 w-32" src="{{ asset('images/icons/money.svg') }}" alt="">
          </span>

          <h3 class="my-10 text-lg font-bold text-main md:text-3xl">
            الأحوال الشخصية
          </h3>

          <p class="text-lg font-medium md:leading-relaxed">
            {{-- {{ str_limit($service->description, 130, '...') }} --}}
            يختص بكافة القضايا الجنائية ابتداءً بقضايا السب والشتم والقذف والنصب والاحتيال مروراً بجرائم الابتزاز والسرقة
            والاعتداء وصولاً إلى قضايا القتل والقصاص والدية.
          </p>
        </div>
        <div class="flex flex-col items-center justify-center rounded-xl bg-sh-background px-20 py-12 text-center">
          <span class="inline-flex">
            <img class="h-32 w-32" src="{{ asset('images/icons/money.svg') }}" alt="">
          </span>

          <h3 class="my-10 text-lg font-bold text-main md:text-3xl">
            الأحوال الشخصية
          </h3>

          <p class="text-lg font-medium md:leading-relaxed">
            {{-- {{ str_limit($service->description, 130, '...') }} --}}
            يختص بكافة القضايا الجنائية ابتداءً بقضايا السب والشتم والقذف والنصب والاحتيال مروراً بجرائم الابتزاز والسرقة
            والاعتداء وصولاً إلى قضايا القتل والقصاص والدية.
          </p>
        </div>
        <div class="flex flex-col items-center justify-center rounded-xl bg-sh-background px-20 py-12 text-center">
          <span class="inline-flex">
            <img class="h-32 w-32" src="{{ asset('images/icons/money.svg') }}" alt="">
          </span>

          <h3 class="my-10 text-lg font-bold text-main md:text-3xl">
            الأحوال الشخصية
          </h3>

          <p class="text-lg font-medium md:leading-relaxed">
            {{-- {{ str_limit($service->description, 130, '...') }} --}}
            يختص بكافة القضايا الجنائية ابتداءً بقضايا السب والشتم والقذف والنصب والاحتيال مروراً بجرائم الابتزاز والسرقة
            والاعتداء وصولاً إلى قضايا القتل والقصاص والدية.
          </p>
        </div>
      </div>
    </div>
  </section>

  <section>
    <div class="container py-16">
      <div class="mb-4 flex flex-col items-center justify-center">
        <h2 class="relative pb-6 pt-8 text-center text-lg font-medium text-second md:text-5xl">@lang('Sidra Lawyers')</h2>
        <p class="text-base font-semibold text-main md:text-3xl">@lang('Lawyers of all specialties')</p>
      </div>

      @include('frontend.partial.home-teams')
    </div>
  </section>

  <section class="my-20 bg-sh-background">
    <div class="container py-8">
      <div class="mb-20 flex flex-col items-center justify-center">
        <h2 class="relative pb-6 pt-8 text-center text-base font-medium text-second md:text-3xl">@lang('Customers
                                                                                                                                                                                            Opinions')</h2>
        <p class="text-lg font-bold text-main md:text-4xl">@lang('What our clients said about Sidra Lawyers')</p>
      </div>

      <div id="testimonialSlider" class="splide">
        <div class="splide__track">
          <ul class="splide__list">
            <li class="splide__slide">
              <div class="flex items-start gap-6">
                <div class="flex-shrink-0 pe-10">
                  <div class="relative rounded-full p-2">
                    <img src="{{ asset('avatar.png') }}" alt="عزام ال تركي" class="h-52 w-52 rounded-full object-cover p-2.5 outline outline-dashed outline-second" />

                    <div class="absolute inset-x-0 -bottom-3.5 mx-auto flex items-center justify-center">
                      <div class="flex items-center justify-center space-x-2 rounded-full bg-main px-4 py-2.5">
                        <span class="inline-flex h-6 w-6 fill-second">
                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                            <!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                            <path
                              d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                          </svg>
                        </span>
                        <span class="inline-flex h-6 w-6 fill-second">
                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                            <!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                            <path
                              d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                          </svg>
                        </span>
                        <span class="inline-flex h-6 w-6 fill-second">
                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                            <!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                            <path
                              d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                          </svg>
                        </span>
                        <span class="inline-flex h-6 w-6 fill-second">
                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                            <!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                            <path
                              d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                          </svg>
                        </span>
                        <span class="inline-flex h-6 w-6 fill-second">
                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                            <!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                            <path
                              d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                          </svg>
                        </span>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="flex-1">
                  <p class="text-base leading-loose md:text-[26px]">
                    @if (app()->getLocale() == 'ar')
                      لوريم ايبسوم هو نموذج افتراضي يوضع في التصاميم لتعرض على العميل ليتصور طريقه وضع النصوص بالتصاميم سواء
                      كانت تصاميم مطبوعه لوريم ايبسوم هو نموذج افتراضي يوضع في
                      التصاميم لتعرض على العميل ليتصور طريقه وضع النصوص بالتصاميم سواء كانت تصاميم مطبوعه
                    @else
                      Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                      industry's standard dummy text ever since the 1500s, when an
                      unknown printer took a galley of type and scrambled it to make a type specimen book
                    @endif
                  </p>

                  <div class="mt-8 space-y-3">
                    <p class="text-lg font-semibold text-second md:text-3xl">عزام ال تركي</p>
                    <p class="text-accent text-base font-medium md:text-2xl">محامي نقد</p>
                  </div>

                  <div class="absolute bottom-0 end-0 flex items-center justify-center">
                    @if (app()->getLocale() == 'ar')
                      <img src="{{ asset('images/icons/quote_ar.svg') }}" alt="quote">
                    @else
                      <img src="{{ asset('images/icons/quote_en.svg') }}" alt="quote">
                    @endif
                  </div>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>
@endsection

@push('js-vendor')
  <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
@endpush

@push('js')
  <script>
    const dir = document.getElementsByTagName("html")[0].getAttribute("dir");

    document.addEventListener('DOMContentLoaded', function() {
      /*
      |--------------------------------------------------------------------------
      | Main Slider
      |--------------------------------------------------------------------------
      */
      var homeSlider = new Splide("#homeSlider", {
        direction: dir,
        type: "loop",
        rewind: true,
        arrows: true,
        autoplay: true,
        pagination: false,
        interval: 3000,
      });
      homeSlider.mount();

      /*
        |--------------------------------------------------------------------------
        | team Slider
        |--------------------------------------------------------------------------
        */
      var teamSplide = new Splide('#teamSplide', {
        direction: dir,
        type: "loop",
        arrows: false,
        autoplay: true,
        pagination: false,
        interval: 3000,
        type: 'loop',
        perPage: 4,
        perMove: 1,
        gap: "3rem",
        breakpoints: {
          1280: {
            // arrows: false,
            perPage: 3,
          },
          1024: {
            // arrows: false,
            perPage: 2,
          },
          640: {
            // arrows: false,
            perPage: 1,
          },
        },
      });
      teamSplide.mount();

      /*
        |--------------------------------------------------------------------------
        | Main Slider
        |--------------------------------------------------------------------------
        */
      var testimonialSlider = new Splide("#testimonialSlider", {
        direction: dir,
        type: "loop",
        rewind: false,
        arrows: false,
        autoplay: false,
        pagination: false,
        interval: 3000,
      });
      testimonialSlider.mount();
    });
  </script>
@endpush

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
  <!-- Hero Section -->
  <section class="relative max-h-11/12 h-11/12 overflow-hidden py-8 lg:py-16">
    <!-- Background Elements -->
    <img src="{{ asset('images/hero/img_group_1171276183.svg') }}" alt class="absolute bottom-0 left-10 w-44 z-10" />
    <img src="{{ asset('images/hero/img_group_1171276181.svg') }}" alt class="absolute top-80 right-[745px] w-[430px] h-[430px] z-10" />

    <!-- Hero Content -->
    <div class="container relative z-20 flex flex-col lg:flex-row items-center lg:justify-between gap-12 lg:gap-0">
      <!-- Left Side - Team Photo -->
      <div class="w-full lg:w-7/12 flex flex-col space-y-6 lg:space-y-12">
        <div class="relative">
          {{-- text-[72px] font-medium leading-[134px] --}}
          <h1 class="text-2xl lg:text-4xl xl:text-6xl font-medium leading-relaxed space-x-4">
            <img class="inline w-14 lg:w-24" src="{{ asset('images/hero/img_33976575xuou07bx221020_1.svg') }}" alt />
            <span class="inline text-main">استشارات قانونية</span>
            <span class="inline text-second">متميزة لحماية حقوقك وتحقيق العدالة</span>
          </h1>
        </div>

        <p class="w-full lg:w-9/12 lg:text-xl xl:text-3xl leading-relaxed">
          فريقنا من المحامين المتخصصين يقدم لك استشارات قانونية دقيقة وشاملة لمساعدتك في اتخاذ القرارات القانونية الصحيحة وحماية مصالحك.
        </p>

        <div class="flex justify-between lg:justify-start gap-6">
          <button class="flex items-center justify-center min-w-2/5 lg:min-w-48 xl:min-w-52 lg:text-2xl rounded-xl bg-second px-8 py-3 text-white">
            اكتشف خدماتنا
          </button>
          <a href="{{ route('lawyer.join') }}"
            class="flex items-center justify-center min-w-2/5 lg:min-w-48 xl:min-w-52 lg:text-2xl rounded-xl bg-white text-second px-8 py-3 border border-second hover:bg-second hover:text-white transition-colors">
            أنضم إلينا
          </a>
        </div>
      </div>

      <!-- Right Side - Content -->
      <div class="w-full lg:w-5/12 ">
        <div class="relative">
          <img src="{{ asset('images/hero/img_rectangle_41968.png') }}" alt="Legal Team" class="w-full shadow-image rounded-t-[397px]" />

          <!-- Experience Badge -->
          <div
            class="absolute hidden xl:block min-w-60 top-9 left-2 bg-sh-border/50 backdrop-blur-sm border-1 border-white rounded-full px-7 py-3 shadow-[0_4px_40px_rgba(136,136,136,1)]">
            <div class="flex items-center gap-4">
              <div class="bg-sh-border/40 rounded-full w-20 h-20 flex items-center justify-center">
                <img src="{{ asset('images/hero/img_group.svg') }}" alt="Experience" class="w-[51px] h-[44px]" />
              </div>
              <div class="space-y-1">
                <p class="text-xl text-white font-medium">الخبرة</p>
                <p class="text-xl text-white font-medium">+12 سنة خبرة عمل</p>
              </div>
            </div>
          </div>

          <!-- Success Badge -->
          <div
            class="absolute hidden xl:block min-w-60 bottom-9 -right-20 bg-sh-border/50 backdrop-blur-sm border-1 border-white rounded-full px-7 py-3 shadow-[0_4px_8px_rgba(136,136,136,1)]">
            <div class="flex items-center gap-4">
              <div class="relative w-20 h-20">
                <img src="{{ asset('images/hero/img_ellipse_1762.svg') }}" alt class="w-full h-full" />
                <img src="{{ asset('images/hero/img_prize.svg') }}" alt="Success" class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-12 h-12" />
              </div>
              <div class="text-right">
                <p class="text-xl text-white font-medium">نجاحنا</p>
                <p class="text-xl text-white font-medium">نجاح وثقة من عملائنا</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Hero Section -->

  <!-- Service Section -->
  <section>
    <div class="container pb-10 pt-12 lg:pt-24">
      <div class="mb-4 flex flex-col items-center justify-center">
        <h2 class="relative pb-6 pt-8 text-center text-2xl font-medium text-second md:text-5xl">@lang('Legal Specialties')
        </h2>
        <p class="text-xl font-semibold text-main md:text-3xl">@lang('Sidra Legal Services')</p>
      </div>

      <div class="mt-16 grid grid-cols-1 gap-10 lg:gap-20 md:grid-cols-2 xl:grid-cols-3">
        @foreach ($homeServices as $service)
          <div class="flex flex-col items-center justify-center rounded-xl bg-sh-background shadow px-8 lg:px-20 py-12 text-center">
            <span class="inline-flex">
              <img class="h-24 w-24 lg:h-32 lg:w-32" src="{{ Storage::url($service->icon) }}" alt="">
            </span>

            <h3 class="my-6 lg:my-10 text-lg font-bold text-main md:text-2xl lg:text-3xl">
              @if (App::currentLocale() == 'ar')
                {{ $service->title_ar }}
              @else
                {{ $service->title_en }}
              @endif
            </h3>

            <p class="text-base lg:text-lg font-medium md:leading-relaxed">
              @if (App::currentLocale() == 'ar')
                {{ Str::limit($service->description_ar, 130, '...') }}
              @else
                {{ Str::limit($service->description_en, 130, '...') }}
              @endif
            </p>
          </div>
        @endforeach
      </div>
    </div>
  </section>
  <!-- End Service Section -->

  <!-- Team Section -->
  <section>
    <div class="container py-10 md:py-16">
      <div class="mb-4 flex flex-col items-center justify-center">
        <h2 class="relative pb-6 pt-8 text-center text-2xl font-medium text-second md:text-5xl">@lang('Sidra Lawyers')</h2>
        <p class="text-xl font-semibold text-main md:text-3xl">@lang('Lawyers of all specialties')</p>
      </div>

      @include('frontend.partial.home-teams')

      <div class="flex justify-center mt-14">
        <a href="{{ route('professionals') }}" class="flex items-center justify-center min-w-48 lg:min-w-52 lg:text-2xl rounded-xl bg-second px-8 py-3 text-white">
          عرض الكل
        </a>
      </div>
    </div>
  </section>
  <!-- End Team Section -->

  <!-- Testimonial Section -->
  <section class="my-10 md:my-20 bg-sh-background">
    <div class="container py-4 md:py-8">
      <div class="mb-20 flex flex-col items-center justify-center">
        <h2 class="relative pb-6 pt-8 text-center text-2xl font-medium text-second md:text-3xl">@lang('Customers
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            Opinions')</h2>
        <p class="text-xl font-bold text-main md:text-4xl">@lang('What our clients said about Sidra Lawyers')</p>
      </div>

      <div id="testimonialSlider" class="splide">
        <div class="splide__track">
          <ul class="splide__list">
            <li class="splide__slide">
              <div class="flex items-start gap-6">
                <div class="hidden md:block flex-shrink-0 md:pe-6 lg:pe-10">
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
                  <p class="text-base leading-loose md:text-xl lg:text-3xl">
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
                    <p class="text-lg font-semibold text-second md:text-2xl lg:text-3xl">عزام ال تركي</p>
                    <p class="text-accent text-base font-medium md:text-xl lg:text-2xl">محامي نقد</p>
                  </div>

                  <div class="absolute bottom-0 end-0 flex items-center justify-center">
                    @if (app()->getLocale() == 'ar')
                      <img class="h-16 w-16 md:w-20 md:h-20 lg:w-28 lg:h-28" src="{{ asset('images/icons/quote_ar.svg') }}" alt="quote">
                    @else
                      <img class="h-16 w-16 md:w-20 md:h-20 lg:w-28 lg:h-28" src="{{ asset('images/icons/quote_en.svg') }}" alt="quote">
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
  <!-- End Testimonial Section -->
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
      /*
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
      */
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

@extends('frontend.layouts.app')

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
      <div class="splide__track  h-full">
        <ul class="splide__list">
          <li class="splide__slide">
            <div class="relative flex flex-col-reverse lg:flex-row flex-wrap">
              <div class="w-full lg:w-8/12 py-8 lg:py-28 hero-border">
                <div class="flex flex-col justify-center h-full px-4 lg:ltr:pl-32 lg:rtl:pr-32 space-y-6 lg:space-y-14">
                  <h1 class="w-full lg:w-11/12 text-2xl md:text-6xl text-second font-bold">@lang('Sidra platform for business services')</h1>

                  <p class="w-full lg:w-9/12 text-base md:text-3xl md:leading-relaxed">@lang('Combine all your financial, legal, and PR services in one place and save on hiring costs')</p>

                  <div class=" flex items-center space-x-4 lg:space-x-8 rtl:space-x-reverse">
                    <a href="{{ route('frontend.consulting.register') }}"
                      class="flex items-center justify-center min-w-[140px]  lg:min-w-[180px] py-3 px-8 text-base text-white bg-second border-2 border-second rounded-xl">@lang('Free Consultation')</a>
                    <a href="{{ route('frontend.services') }}"
                      class="flex items-center justify-center min-w-[140px]  lg:min-w-[180px] py-3 px-8 text-base text-main border-2 border-main rounded-xl hover:text-white hover:bg-second hover:border-second transition-all duration-150 ease-linear">@lang('Our services')</a>
                  </div>
                </div>
              </div>

              <div class=" lg:absolute -z-10 inset-y-0 end-0">
                <img class="lg:h-full object-cover object-center" src="{{ asset('home-hero1.png') }}" alt="">
              </div>

            </div>
          </li>
          <li class="splide__slide">
            <div class="relative flex flex-col-reverse lg:flex-row flex-wrap">
              <div class="w-full lg:w-8/12 py-8 lg:py-28 hero-border">
                <div class="flex flex-col justify-center h-full px-4 lg:ltr:pl-32 lg:rtl:pr-32 space-y-6 lg:space-y-14">
                  <h1 class="w-full lg:w-11/12 text-2xl md:text-6xl text-second font-bold">@lang('Sidra platform for business services')</h1>

                  <p class="w-full lg:w-9/12 text-base md:text-3xl md:leading-relaxed">
                    كل ما تحتاجه في مكان واحد ، بوابتك إلى التميز لتأسيس شركتك وتطوير أعمالك التجارية وتقديم الدعم الكامل لها.
                  </p>

                  <div class=" flex items-center space-x-4 lg:space-x-8 rtl:space-x-reverse">
                    <a href="{{ route('frontend.consulting.register') }}"
                      class="flex items-center justify-center min-w-[140px]  lg:min-w-[180px] py-3 px-8 text-base text-white bg-second border-2 border-second rounded-xl">@lang('Free Consultation')</a>
                    <a href="{{ route('frontend.services') }}"
                      class="flex items-center justify-center min-w-[140px]  lg:min-w-[180px] py-3 px-8 text-base text-main border-2 border-main rounded-xl hover:text-white hover:bg-second hover:border-second transition-all duration-150 ease-linear">@lang('Our services')</a>
                  </div>
                </div>
              </div>

              <div class=" lg:absolute -z-10 inset-y-0 end-0">
                <img class="lg:h-full object-cover object-center" src="{{ asset('home-hero2.png') }}" alt="">
              </div>

            </div>
          </li>
        </ul>
      </div>
    </div>

  </section>

  {{-- style="background: url({{ asset('hero-border.svg') }}) center center / cover;"  --}}
  <!--
              <section>
                <div class="relative flex flex-col-reverse lg:flex-row flex-wrap">

                  <div class="w-full lg:w-8/12 py-8 lg:py-28 hero-border">
                    <div class="flex flex-col justify-center h-full px-4 lg:ltr:pl-32 lg:rtl:pr-32 space-y-6 lg:space-y-14">
                      <h1 class="w-full lg:w-11/12 text-2xl md:text-6xl text-second font-bold">@lang('Sidra platform for business services')</h1>

                      <p class="w-full lg:w-9/12 text-base md:text-3xl md:leading-relaxed">@lang('Combine all your financial, legal, and PR services in one place and save on hiring costs')</p>

                      <div class=" flex items-center space-x-4 lg:space-x-8 rtl:space-x-reverse">
                        <a href="{{ route('frontend.consulting.register') }}"
                          class="flex items-center justify-center min-w-[140px]  lg:min-w-[180px] py-3 px-8 text-base text-white bg-second border-2 border-second rounded-xl">@lang('Free Consultation')</a>
                        <a href="{{ route('frontend.services') }}"
                          class="flex items-center justify-center min-w-[140px]  lg:min-w-[180px] py-3 px-8 text-base text-main border-2 border-main rounded-xl hover:text-white hover:bg-second hover:border-second transition-all duration-150 ease-linear">@lang('Our services')</a>
                      </div>
                    </div>
                  </div>

                  <div class=" lg:absolute -z-10 inset-y-0 end-0">
                    <img class="lg:h-full object-cover object-center" src="{{ asset('home-hero.png') }}" alt="">
                  </div>

                </div>
              </section>
            -->

  <section>
    <div class="container pt-24 pb-10">
      <div class="flex flex-col items-center justify-center mb-4">
        <h2 class="relative pt-8 pb-6 text-lg md:text-5xl font-medium text-center text-second head-lines">@lang('Services')</h2>
        <p class="text-base md:text-3xl font-semibold text-main">@lang('What we can do for your business')</p>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-4 gap-10 mt-16">
        @foreach ($categories as $service)
          <div class="flex flex-col items-center justify-center py-6 px-4 text-center shadow-small-box rounded-lg">
            <span class="inline-flex">
              <img class="w-20 h-20" src="{{ $service->icon }}" alt="">
            </span>

            <h3 class="my-4 text-lg md:text-xl font-semibold text-main">{{ $service->name }}</h3>

            <p class="text-sm md:leading-relaxed">{{ str_limit($service->description, 130, '...') }}</p>

            <a href="{{ route('frontend.services') }}?category={{ $service->id }}" class="flex items-center justify-center mt-4 text-base md:text-lg text-main">
              @if (app()->getLocale() == 'ar')
                @lang('Read more')
                <svg class="w-4 h-4 mr-3 mt-1" xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                  <path
                    d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.2 288 416 288c17.7 0 32-14.3 32-32s-14.3-32-32-32l-306.7 0L214.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z" />
                </svg>
              @else
                @lang('Read more')

                <svg class="w-4 h-4 ltr:ml-3 mt-1" xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                  <path
                    d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" />
                </svg>
              @endif

            </a>
          </div>
        @endforeach
      </div>
    </div>
  </section>

  <section>
    <div class="container pt-16 pb-8">
      <div class="relative flex justify-center after:absolute after:content-[''] after:-z-10 after:top-1/2 after:w-full after:h-[1px] after:bg-sh-border">
        <h2 class="p-4 text-lg md:text-2xl text-center font-semibold text-second bg-white border border-sh-border rounded-full">@lang('Join us with +1300 companies that trust us around the world')
        </h2>
      </div>
      @include('frontend.partial.home-clients')
    </div>
  </section>

  <section style="" class="counter-bg">
    <div class="relative after:absolute after:content-[''] after:inset-0 after:bg-main/80">
      <div class="container py-16 md:py-28 relative z-10">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 md:gap-8 text-white">
          <div class="flex items-center">
            <div class="me-4 p-2 md:p-3 rounded-lg bg-second">
              <svg class="w-14 h-14" width="80" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M73.7358 34.0156H54.9095C54.3297 34.0156 53.9844 34.6613 53.9844 35.2445V76.9014C53.9844 77.4816 54.3297 77.9219 54.9095 77.9219H73.7358C74.3156 77.9219 74.6094 77.4816 74.6094 76.9014V35.2445C74.6094 34.6613 74.3156 34.0156 73.7358 34.0156Z"
                  fill="white" />
                <path
                  d="M48.7706 56.7433C48.8749 56.7433 48.9709 56.7879 49.0517 56.8825C49.1365 56.982 49.1942 57.1286 49.1942 57.2888V77.0544C49.1942 77.2068 49.1426 77.3051 49.0832 77.3642C49.0237 77.4236 48.9243 77.4754 48.7706 77.4754H29.7863C29.6255 77.4754 29.4796 77.4179 29.3812 77.334C29.2878 77.2544 29.2433 77.1593 29.2433 77.0544V57.2888C29.2433 57.0202 29.521 56.7433 29.7863 56.7433H48.7706Z"
                  fill="white" stroke="white" stroke-width="1.14286" />
                <path
                  d="M24.7656 68.0778C24.7656 67.4952 24.3531 66.9609 23.7706 66.9609H4.78625C4.20375 66.9609 3.67188 67.4953 3.67188 68.0778V76.9059C3.67188 77.4883 4.20375 77.8984 4.78625 77.8984H23.7706C24.3531 77.8984 24.7656 77.4883 24.7656 76.9059V68.0778Z"
                  fill="white" />
                <path
                  d="M9.29688 61.7938C9.83062 61.7938 10.3906 61.3608 10.3906 60.8269V56.0213C10.3906 48.9583 16.0002 43.0501 23.0631 43.0501H29.4441C29.9781 43.0501 30.3906 42.7791 30.3906 42.2454V35.7655C30.3906 28.2774 36.5031 21.9565 43.9913 21.9565H44.1406V24.2622C44.1406 24.6004 44.3164 24.8997 44.6302 25.0258C44.7303 25.0662 44.8211 25.0857 44.9242 25.0857C45.1439 25.0857 45.3516 24.9972 45.5106 24.8305L48.4152 21.7873C48.7197 21.4683 48.7181 20.9688 48.4133 20.6502L45.505 17.6066C45.2709 17.3619 44.9439 17.2855 44.6305 17.4113C44.3164 17.5371 44.1406 17.8368 44.1406 18.1749V20.2377H43.9913C35.4369 20.2377 28.2031 27.2112 28.2031 35.7655V41.3315H23.0631C14.9339 41.3315 8.20312 47.8924 8.20312 56.0215V60.8271C8.20313 61.3608 8.76313 61.7938 9.29688 61.7938Z"
                  fill="white" />
                <path
                  d="M64.1406 6.31234C64.6744 6.31234 65.2344 5.87953 65.2344 5.34547V2.99813C65.2344 2.46406 64.6744 2.03125 64.1406 2.03125C63.6069 2.03125 63.0469 2.46406 63.0469 2.99813V5.34547C63.0469 5.87953 63.6069 6.31234 64.1406 6.31234Z"
                  fill="white" />
                <path
                  d="M68.6287 7.24577C68.7697 7.31843 68.9205 7.35264 69.0687 7.35264C69.42 7.35264 69.7587 7.16046 69.93 6.82655L71.017 4.70499C71.2603 4.22983 71.0723 3.64718 70.597 3.40374C70.1219 3.15952 69.5392 3.34827 69.2958 3.82343L68.2091 5.94468C67.9656 6.41983 68.1536 7.00249 68.6287 7.24577Z"
                  fill="white" />
                <path
                  d="M58.6623 6.67109C58.8268 7.02172 59.1746 7.22781 59.538 7.22781C59.6757 7.22781 59.8151 7.19828 59.9479 7.13625C60.4313 6.90922 60.6394 6.33359 60.4127 5.85L59.4029 3.69672C59.1765 3.21359 58.6008 3.00609 58.1171 3.23187C57.6337 3.4589 57.4255 4.03422 57.6523 4.51781L58.6623 6.67109Z"
                  fill="white" />
                <path
                  d="M73.5517 12.5781H71.6166L71.7533 10.3778C71.7898 9.78187 71.3163 9.29688 70.7191 9.29688H57.6133C57.0161 9.29688 56.5423 9.78187 56.5794 10.3778L56.7158 12.5781H55.0983C53.5864 12.5781 52.3594 13.8378 52.3594 15.3495C52.3594 16.1545 52.7109 16.9338 53.3298 17.4538L55.7306 19.4938L55.7309 19.5023L57.2848 20.8173C57.2845 20.8155 57.2842 20.8141 57.2839 20.8123L57.2848 20.8131L57.2891 20.8188C57.8002 23.3725 59.6853 25.4086 62.1252 26.1489C62.6098 26.2963 62.9436 26.7413 62.9791 27.2466L63.3383 30.8823C63.3527 31.0856 63.1916 31.1719 62.9877 31.1719H59.8855C59.6911 31.1719 59.6097 31.5033 59.6097 31.697V32.4002C59.6097 32.5945 59.6911 32.5781 59.8855 32.5781H68.4469C68.6409 32.5781 68.6722 32.5945 68.6722 32.4002V31.697C68.6722 31.5033 68.6409 31.1719 68.4469 31.1719H65.345C65.1411 31.1719 64.98 31.0859 64.9941 30.8827L65.3536 27.2039C65.3891 26.6986 65.7225 26.288 66.2072 26.1405C68.5397 25.4322 70.3642 23.5156 70.9673 21.1719H70.9713L70.9722 21.158C70.9719 21.1598 70.9688 21.1555 70.9681 21.157L72.5786 19.7836V19.7814L75.3169 17.4691C75.9322 16.9491 76.285 16.1538 76.285 15.3486C76.2852 13.8372 75.0598 12.5781 73.5517 12.5781ZM54.2367 16.398C53.938 16.145 53.7655 15.7397 53.7655 15.3497C53.7655 14.6145 54.3633 13.9845 55.0981 13.9845H55.3889H55.3931H56.803H56.7988H56.802L57.0956 18.782L55.6109 17.563L54.2367 16.398ZM64.1263 21.4589C61.9742 21.4589 60.2295 19.7139 60.2295 17.5619C60.2295 15.4092 61.9742 13.6645 64.1263 13.6645C66.2789 13.6645 68.0236 15.4092 68.0236 17.5619C68.0238 19.7139 66.2791 21.4589 64.1263 21.4589ZM74.4095 16.398L72.7045 17.8394L71.2192 19.0603L71.5298 13.9845H71.5344H71.5302H72.94H72.9442H73.5516C74.2864 13.9845 74.8806 14.6145 74.8806 15.3497C74.8806 15.7395 74.7083 16.145 74.4095 16.398Z"
                  fill="white" />
                <path
                  d="M64.126 19.5156C65.1939 19.5156 66.0596 18.6499 66.0596 17.582C66.0596 16.5141 65.1939 15.6484 64.126 15.6484C63.0581 15.6484 62.1924 16.5141 62.1924 17.582C62.1924 18.6499 63.0581 19.5156 64.126 19.5156Z"
                  fill="white" />
              </svg>
            </div>
            <div class="space-y-1 md:space-y-2">
              <span class="text-xl md:text-4xl font-montaga">+28</span>
              <p class="text-lg md:text-3xl font-semibold">@lang('Year of experience.')</p>
            </div>
          </div>
          <div class="flex items-center">
            <div class="me-4 p-2 md:p-3 rounded-lg bg-second">
              <svg class="w-14 h-14" width="84" height="80" viewBox="0 0 84 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M37.5242 80.0053C16.8337 80.0053 0 63.1724 0 42.4831C0 21.7937 16.8337 4.96094 37.5242 4.96094C46.3934 4.96094 55.0001 8.11169 61.7584 13.8346C62.2898 14.2844 62.355 15.0782 61.9067 15.6096C61.4568 16.141 60.6614 16.2062 60.1316 15.7579C53.8281 10.4197 45.8 7.48089 37.5258 7.48089C18.2242 7.48089 2.52172 23.1825 2.52172 42.4831C2.52172 61.7837 18.2242 77.4853 37.5258 77.4853C56.8274 77.4853 72.5299 61.7837 72.5299 42.4831C72.5299 35.81 70.6455 29.3226 67.0806 23.7188C66.7073 23.132 66.8801 22.3528 67.4669 21.9796C68.0521 21.6063 68.8329 21.7791 69.2062 22.3659C73.0287 28.374 75.05 35.3291 75.05 42.4815C75.0484 63.1724 58.2146 80.0053 37.5242 80.0053Z"
                  fill="white" />
                <path
                  d="M37.525 74.1745C20.0457 74.1745 5.82666 59.9561 5.82666 42.4779C5.82666 24.9996 20.0457 10.7812 37.525 10.7812C44.8717 10.7812 52.0326 13.3517 57.6889 18.02C58.2252 18.4633 58.3018 19.2572 57.8584 19.7934C57.4167 20.3297 56.6229 20.4063 56.0849 19.9629C50.8785 15.6663 44.2881 13.3012 37.525 13.3012C21.4362 13.3012 8.34512 26.3899 8.34512 42.4795C8.34512 58.569 21.4362 71.6561 37.525 71.6561C53.6137 71.6561 66.7048 58.5674 66.7048 42.4779C66.7048 37.1478 65.2541 31.9335 62.5123 27.3989C62.152 26.804 62.3428 26.0297 62.9377 25.6695C63.5327 25.3093 64.307 25.5016 64.6672 26.0949C67.6486 31.024 69.2249 36.6882 69.2249 42.4779C69.2233 59.9561 55.0042 74.1745 37.525 74.1745Z"
                  fill="white" />
                <path
                  d="M37.523 66.6068C24.22 66.6068 13.3979 55.7854 13.3979 42.4831C13.3979 29.1808 24.22 18.3594 37.523 18.3594C42.8859 18.3594 47.9635 20.0823 52.2082 23.3422C52.7592 23.766 52.8635 24.5566 52.4397 25.1091C52.0159 25.6601 51.2237 25.7627 50.6727 25.3406C46.873 22.4213 42.3268 20.8793 37.523 20.8793C25.6088 20.8793 15.9164 30.5712 15.9164 42.4847C15.9164 54.3966 25.6088 64.0885 37.523 64.0885C49.4355 64.0885 59.1279 54.3966 59.1279 42.4847C59.1279 39.0047 58.2819 35.5475 56.6812 32.488C56.3584 31.8719 56.5964 31.1107 57.2142 30.788C57.8287 30.4669 58.5916 30.7032 58.9143 31.321C60.7025 34.7391 61.648 38.6005 61.648 42.4847C61.648 55.7854 50.8259 66.6068 37.523 66.6068Z"
                  fill="white" />
                <path
                  d="M37.5247 59.4675C28.1567 59.4675 20.5361 51.8473 20.5361 42.4798C20.5361 33.1123 28.1583 25.4922 37.5247 25.4922C39.4808 25.4922 41.3994 25.8231 43.2267 26.4734C44.0352 26.7619 44.829 27.1156 45.587 27.5231C46.0467 27.7709 46.495 28.0398 46.9286 28.3284L47.2367 28.5386C47.8055 28.938 47.9441 29.7236 47.5431 30.2925C47.1454 30.8613 46.358 30.9999 45.7892 30.5989L45.5365 30.4261C45.1648 30.18 44.785 29.9502 44.3922 29.7383C43.7467 29.3895 43.0718 29.0896 42.3839 28.8434C40.8289 28.2892 39.1955 28.0089 37.528 28.0089C29.5488 28.0089 23.0578 34.4995 23.0578 42.4782C23.0578 50.457 29.5488 56.9476 37.528 56.9476C45.5055 56.9476 51.9981 50.457 51.9981 42.4782C51.9981 41.453 51.8905 40.4277 51.677 39.4318C51.5319 38.7521 51.9655 38.0822 52.6452 37.9371C53.3233 37.7904 53.9949 38.2256 54.14 38.9053C54.3894 40.074 54.5165 41.2769 54.5165 42.4782C54.5133 51.8473 46.8927 59.4675 37.5247 59.4675Z"
                  fill="white" />
                <path
                  d="M38.1073 53.3447C32.1119 53.3447 27.2363 48.4678 27.2363 42.4727C27.2363 37.4785 30.6155 33.1427 35.4519 31.9284C36.1251 31.7605 36.8113 32.168 36.9809 32.8428C37.1504 33.5176 36.7413 34.2022 36.0664 34.3717C32.3499 35.3041 29.7548 38.6358 29.7548 42.4727C29.7548 47.0791 33.5023 50.8248 38.1073 50.8248C40.5589 50.8248 42.8768 49.7539 44.4678 47.8859C44.9193 47.3545 45.7132 47.2926 46.2429 47.7441C46.7727 48.1956 46.8363 48.9894 46.3847 49.5191C44.3146 51.9511 41.2973 53.3447 38.1073 53.3447Z"
                  fill="white" />
                <path d="M69.3529 13.7764L75.5471 15.708L81.8734 9.38184L75.4656 7.66543L73.7491 1.25781L67.4229 7.58393L69.3529 13.7764Z" fill="white" />
                <path
                  d="M75.5458 16.969C75.4202 16.969 75.2947 16.9511 75.1708 16.9119L68.9782 14.9804C68.5837 14.8582 68.274 14.5485 68.1518 14.154L66.2201 7.96172C66.0799 7.51511 66.2006 7.02611 66.5315 6.69523L72.8578 0.36927C73.1756 0.0514235 73.6418 -0.074085 74.0738 0.0432736C74.509 0.159002 74.8481 0.499668 74.9638 0.933243L76.4912 6.63981L82.1981 8.1671C82.6333 8.28283 82.9723 8.62349 83.0881 9.05707C83.2054 9.49227 83.0799 9.95519 82.7621 10.273L76.4358 16.599C76.1962 16.8386 75.875 16.969 75.5458 16.969ZM70.3572 12.7718L75.1937 14.2795L79.4384 10.0351L75.1366 8.88266C74.7014 8.76693 74.3623 8.42627 74.2466 7.99269L73.0941 3.69117L68.8494 7.93564L70.3572 12.7718Z"
                  fill="white" />
                <path d="M46.802 36.3337L40.924 34.0859L36.9287 46.2068L49.0483 42.2116L46.802 36.3337Z" fill="white" />
                <path
                  d="M36.9278 47.4642C36.5985 47.4642 36.2774 47.3355 36.0378 47.0958C35.702 46.7601 35.583 46.2629 35.7313 45.8114L39.7266 33.6922C39.8342 33.3645 40.0706 33.0956 40.3819 32.9489C40.6932 32.8022 41.0519 32.7891 41.3713 32.9098L47.2494 35.1576C47.5835 35.2847 47.8476 35.5504 47.9764 35.8846L50.2242 41.7624C50.3465 42.0835 50.3335 42.4421 50.1851 42.7518C50.0368 43.0615 49.7695 43.2995 49.4418 43.4071L37.3223 47.4023C37.1935 47.4447 37.0598 47.4642 36.9278 47.4642ZM41.7071 35.733L38.9067 44.227L47.401 41.4266L45.8263 37.3076L41.7071 35.733Z"
                  fill="white" />
                <path
                  d="M43.4897 40.9242C43.1669 40.9242 42.8458 40.8019 42.5997 40.5558C42.1074 40.0635 42.1074 39.2665 42.5997 38.7742L74.5751 6.79888C75.0674 6.30662 75.8645 6.30662 76.3568 6.79888C76.849 7.29113 76.849 8.08819 76.3568 8.58045L44.3797 40.5541C44.1336 40.8003 43.8108 40.9242 43.4897 40.9242Z"
                  fill="white" />
              </svg>
            </div>
            <div class="space-y-1 md:space-y-2">
              <span class="text-xl md:text-4xl font-montaga">+750</span>
              <p class="text-lg md:text-3xl font-semibold">@lang('Success Story')</p>
            </div>
          </div>
          <div class="flex items-center">
            <div class="me-4 p-2 md:p-3 rounded-lg bg-second">
              <svg class="w-14 h-14" width="80" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0_2357_277)">
                  <path
                    d="M79.6146 56.0168C78.8314 53.8206 77.226 52.1124 75.094 51.1749C72.962 50.2374 70.6118 50.2245 68.4669 51.1364L54.0826 57.2112C54.0955 57.0442 54.1083 56.8516 54.1083 56.6717C54.1083 53.8719 51.8351 51.5988 49.0352 51.5988H38.658C38.2341 51.5988 37.8232 51.5088 37.438 51.329L28.6403 47.3604C27.2661 46.7311 25.7377 46.3972 24.2223 46.3972H16.7732V45.678C16.7732 44.2653 15.6303 43.1094 14.2046 43.1094H0V75.5255H14.2046C15.6303 75.5255 16.7732 74.3696 16.7732 72.9568V70.9405H20.8958L36.2435 75.8723C37.5149 76.2704 38.825 76.4759 40.1477 76.4759C42.2284 76.4759 44.3089 75.975 46.1584 74.9861L80 57.0571L79.6146 56.0168ZM9.02876 70.7607C8.03981 70.7607 7.23085 69.9516 7.23085 68.9626C7.23085 67.9609 8.03981 67.1518 9.02876 67.1518C10.0177 67.1518 10.8268 67.9609 10.8268 68.9626C10.8268 69.9516 10.0177 70.7607 9.02876 70.7607ZM44.9639 72.7129C42.5366 74.01 39.6469 74.254 37.0269 73.4192L21.4867 68.4232L16.7732 68.3719V48.9659H24.2223C25.3781 48.9659 26.5341 49.2227 27.5744 49.6979L36.3719 53.6794C37.0912 54.0004 37.8617 54.1674 38.658 54.1674H49.0352C50.4222 54.1674 51.5397 55.2975 51.5397 56.6717C51.5397 58.0588 50.4222 59.1762 49.0352 59.1762H35.6013V61.7448H49.0352C49.9729 61.7448 50.8461 61.5008 51.5911 61.0513L69.4687 53.4995C70.9584 52.8702 72.5895 52.8831 74.0666 53.5252C75.1967 54.0261 76.1213 54.848 76.7378 55.8883L44.9639 72.7129Z"
                    fill="white" />
                  <path
                    d="M11.6346 37.9311L19.633 33.4996L27.4656 38.2183L25.7227 29.2419L31.4697 24.2579L29.3478 33.3994C29.2325 33.8936 29.4193 34.4091 29.8244 34.7151C30.2308 35.0211 30.7764 35.0594 31.2204 34.8129L40.1115 29.8883L48.8158 35.1321C49.2356 35.3874 49.7868 35.3832 50.2142 35.0845C50.6294 34.7941 50.835 34.2855 50.7385 33.7876L48.802 23.811L48.9848 23.6524L54.7425 29.0238L52.6751 37.9311L60.6736 33.4996L68.506 38.2183L66.7632 29.2419L73.6711 23.2509L64.5956 22.1346L61.0324 13.7134L57.1663 21.9998L50.1967 22.6014L56.4803 17.1523C56.8641 16.82 57.0146 16.2932 56.8666 15.8078C56.7186 15.3225 56.2997 14.9694 55.7955 14.9073L45.7078 13.6669L41.7483 4.30733C41.5501 3.84012 41.0961 3.53285 40.5894 3.52344C40.5806 3.52344 40.573 3.52344 40.5655 3.52344C40.0676 3.52344 39.6123 3.81191 39.4016 4.26467L35.1047 13.4744L24.9794 14.3485C23.878 14.4428 23.3986 15.8038 24.2131 16.5672L31.1884 23.0735L23.5551 22.1346L19.992 13.7134L16.1259 21.9998L7.01562 22.7862L13.7018 29.0238L11.6346 37.9311ZM36.0654 15.9696C36.5232 15.9301 36.9245 15.6498 37.1189 15.2334L40.5078 7.96838L43.6321 15.3513C43.8114 15.7746 44.2027 16.0693 44.658 16.1258L52.6147 17.1041L46.5581 22.3567C46.2107 22.6577 46.0514 23.1205 46.1392 23.5714L47.6669 31.4416L40.8001 27.3052C40.4044 27.0659 39.9115 27.061 39.5157 27.282L32.5022 31.1669L34.3145 23.3576C34.4186 22.9104 34.2756 22.4414 33.9408 22.1278L28.0773 16.6588L36.0654 15.9696Z"
                    fill="white" />
                </g>
                <defs>
                  <clipPath id="clip0_2357_277">
                    <rect width="80" height="80" fill="white" />
                  </clipPath>
                </defs>
              </svg>
            </div>
            <div class="space-y-1 md:space-y-2">
              <span class="text-xl md:text-4xl font-montaga">+1300</span>
              <p class="text-lg md:text-3xl font-semibold">@lang('Happy Customer')</p>
            </div>
          </div>
          <div class="flex items-center">
            <div class="me-4 p-2 md:p-3 rounded-lg bg-second">
              <svg class="w-14 h-14" width="80" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0_2357_301)">
                  <path
                    d="M39.9944 0.0078125C39.6736 0.0078125 39.3525 0.131137 39.1082 0.376469L32.8632 6.62409C32.0795 7.4124 32.6378 8.75482 33.7494 8.75546H36.2493V12.5934C34.8505 11.7899 33.1514 11.2458 31.247 11.2555H28.747V8.75546C28.7458 8.24959 28.441 7.79533 27.9731 7.60311C27.5058 7.40728 26.9648 7.51149 26.6059 7.86922L20.3585 14.1266C19.874 14.6142 19.874 15.4018 20.3585 15.8893L26.6059 22.1443C27.3935 22.944 28.7547 22.3804 28.747 21.258V18.758H31.247C32.6135 18.7577 33.7494 19.8776 33.7494 21.258V26.1775C33.7494 27.4414 34.0805 28.5498 34.6576 29.4954C33.7888 30.0321 32.8203 30.7124 31.9183 31.6317C31.5478 31.0336 31.0066 30.5361 30.3168 30.2254C28.4576 29.3881 26.2354 30.2217 25.3975 32.0809L22.5362 37.6815L20.876 38.7509H15.0363C12.3546 38.7509 10.2626 39.4077 8.68142 40.6625C7.10027 41.9174 6.08676 43.669 5.21956 45.7505L2.76843 53.5972C2.04838 55.5134 2.80559 57.5962 4.66537 58.4337C5.59177 58.8509 6.6097 58.849 7.4998 58.5143V73.7585C7.4998 75.8144 9.18914 77.5037 11.2449 77.5037C13.3047 77.5037 14.7754 75.8963 14.9899 73.8782L16.1251 62.5035H16.3644L17.5045 73.8928C17.7193 75.8605 19.1825 77.5037 21.2447 77.5037C23.3004 77.5037 24.9922 75.8559 24.9922 73.7585V49.1904C25.5798 48.9044 26.1241 48.5457 26.6157 48.1162C27.4688 47.3709 28.1634 46.4414 28.747 45.3525V46.5854C28.747 47.5573 29.0534 48.5745 29.8554 49.2612C30.2477 49.5972 30.7223 49.8137 31.247 49.9229C31.247 51.5223 30.6353 55.8619 29.8627 60.6212C29.0902 65.3805 28.1665 70.6707 27.5556 74.635C27.2016 76.9327 28.3508 79.2343 30.6757 79.8572C32.9958 80.4789 35.3779 79.1217 36.0272 76.7762L39.6355 63.7585H40.3557L43.9543 76.7762C44.5918 79.0792 46.9954 80.4789 49.3155 79.8573C51.6404 79.2343 52.7956 76.9065 52.4331 74.635C51.8222 70.6708 50.8986 65.3805 50.126 60.6212C49.3535 55.862 48.7418 51.5224 48.7418 49.9229C49.267 49.8209 49.7434 49.5972 50.1358 49.2612C50.9378 48.5746 51.2418 47.5573 51.2418 46.5854V45.3476C51.8259 46.4387 52.5187 47.3698 53.3731 48.1162C53.8652 48.5462 54.4107 48.9043 54.999 49.1904L54.9891 73.7586C54.989 75.8144 56.6858 77.5037 58.7415 77.5037C60.8036 77.5037 62.2644 75.8502 62.4841 73.8928L63.6242 62.5036H63.8635L64.9987 73.8782C65.1813 75.8474 66.6839 77.5037 68.7437 77.5037C70.7994 77.5037 72.4912 75.8144 72.4912 73.7586V58.5167C73.3824 58.8495 74.3986 58.8501 75.3232 58.4337C77.183 57.5962 77.9645 55.3845 77.2202 53.5972L74.7716 45.7505C73.9043 43.669 72.8909 41.9174 71.3098 40.6625C69.7286 39.4077 67.6341 38.7509 64.9525 38.7509H59.1127L57.4526 37.6815L54.5913 32.0809C53.7534 30.2216 51.5239 29.3881 49.6646 30.2254C48.9766 30.5353 48.4369 31.0308 48.068 31.6268C47.1672 30.7095 46.1987 30.0313 45.3312 29.4954C45.9083 28.5498 46.2418 27.4414 46.2418 26.2581C46.2419 26.2556 46.2418 26.2532 46.2418 26.2507V21.258C46.2418 19.8514 47.3976 18.758 48.7418 18.758H51.2418V21.258C51.2424 22.3696 52.5872 22.928 53.3755 22.1443L59.6303 15.8893C60.1148 15.4018 60.1148 14.6142 59.6303 14.1266L53.3755 7.86922C53.0183 7.51538 52.4829 7.41142 52.0181 7.6031C51.5502 7.79532 51.2429 8.24959 51.2418 8.75546V11.2555H48.7418C46.8916 11.2555 45.1835 11.754 43.7419 12.5714V8.75546H46.2418C47.3534 8.75482 47.9117 7.4124 47.1281 6.62409L40.8806 0.376469C40.6363 0.131135 40.3151 0.0078125 39.9944 0.0078125ZM39.9944 3.02542L43.2145 6.25543H42.4968C41.8027 6.25277 41.2368 6.81618 41.2395 7.51033V14.6271C40.7374 15.1953 40.3077 15.8397 39.9944 16.4069C39.6845 15.8288 39.268 15.2158 38.7395 14.6173V7.51033C38.7422 6.81978 38.1849 6.25788 37.4944 6.25543H36.7645L39.9944 3.02542ZM26.247 11.7731V12.5104C26.2494 13.1973 26.8052 13.7531 27.4921 13.7555H31.247C35.046 13.7553 38.1323 16.5085 38.659 20.1496C37.7708 20.3455 36.9534 20.7322 36.2493 21.2605C36.2493 18.5085 34.0463 16.258 31.247 16.258H27.4921C26.8016 16.2605 26.2444 16.8223 26.247 17.5129V18.2404L23.0074 15.0128L26.247 11.7731ZM53.7442 11.7731L56.9814 15.0128L53.7442 18.2404V17.5129C53.7468 16.8223 53.1896 16.2604 52.4991 16.258H48.7418C45.9537 16.258 43.7419 18.5085 43.7419 21.2605C43.0358 20.7307 42.2136 20.3425 41.3225 20.1472C41.8515 16.5073 44.9953 13.7555 48.7418 13.7555H52.4991C53.186 13.7531 53.7417 13.1973 53.7442 12.5104V11.7731ZM39.9797 22.5056C42.1163 22.5428 43.7419 24.1959 43.7419 26.2581C43.7419 28.3439 42.0801 30.0032 39.9944 30.0032C37.9087 30.0032 36.2493 28.3439 36.2493 26.2093C36.2993 24.1527 37.8882 22.5559 39.9797 22.5056ZM63.6634 23.7581C60.1719 23.8452 57.4892 26.6201 57.4892 30.0032C57.4892 33.4401 60.3073 36.2606 63.744 36.2606C67.1807 36.2606 69.989 33.4401 69.989 30.0032C69.989 26.5664 67.2804 23.7581 63.6634 23.7581ZM9.99976 30.0032C9.99976 33.4401 12.8081 36.2606 16.2448 36.2606C19.6815 36.2606 22.4898 33.4401 22.4898 30.0032C22.4898 26.5664 19.6838 23.72 16.2033 23.7629C12.6748 23.7923 9.99976 26.6201 9.99976 30.0032ZM39.9944 32.5033C41.328 32.5033 42.5684 32.0818 43.5856 31.3631C44.6957 32.0228 45.8811 32.8226 46.8326 33.9999C47.3711 34.666 47.8463 35.4504 48.1876 36.4266C48.628 37.7145 48.7372 39.0225 48.7418 40.0717V46.5854C48.7418 47.0588 48.6204 47.2693 48.5123 47.3618C48.4071 47.4519 48.1539 47.5748 47.487 47.4521L44.0251 46.3242C45.6507 45.7352 46.6086 43.9927 46.2418 42.291V40.0253C46.2446 39.3347 45.6873 38.7728 44.9967 38.7704C44.4191 38.7682 43.9315 39.1575 43.7858 39.6884C43.2115 39.5245 42.5902 39.5051 41.9792 39.664L36.2493 40.9482V40.0253C36.2521 39.3311 35.6886 38.7677 34.9945 38.7704C34.3039 38.7728 33.7466 39.3347 33.7494 40.0253L33.7567 42.6303C33.8247 43.4309 34.5949 43.8759 35.2704 43.7241L42.5823 42.0956C43.1215 41.9512 43.6527 42.2592 43.7883 42.7744C43.9249 43.2841 43.6308 43.8598 43.0706 44.0122C39.5433 45.1574 36.0304 46.3033 32.5019 47.4521C31.835 47.5747 31.5841 47.4518 31.4789 47.3618C31.3709 47.2694 31.247 47.0588 31.247 46.5854C31.247 44.4138 31.247 42.2433 31.247 40.0717C31.247 37.1626 32.0736 35.3422 33.1586 33.9999C34.1102 32.8226 35.2956 32.0228 36.4056 31.3631C37.4226 32.0813 38.6613 32.5033 39.9944 32.5033ZM39.9968 47.6352L46.2418 49.669V49.9253C46.2418 52.077 46.8767 56.2444 47.6529 61.0265C48.4292 65.8086 49.3562 71.0947 49.96 75.0134C50.1339 76.1413 49.688 77.1671 48.6686 77.4402C47.6444 77.7147 46.6574 77.1362 46.3712 76.1023L42.5139 62.1715C42.3624 61.6298 41.8679 61.2563 41.3054 61.2584H38.6858C38.1233 61.2563 37.6264 61.6297 37.4749 62.1715L33.62 76.1023C33.3338 77.1362 32.3238 77.7092 31.3202 77.4403C30.3008 77.1671 29.8486 76.1349 30.0214 75.0135C30.6253 71.0947 31.5498 65.8086 32.326 61.0265C33.1023 56.2444 33.7494 52.077 33.7494 49.9253V49.669L39.9968 47.6352Z"
                    fill="white" />
                </g>
                <defs>
                  <clipPath id="clip0_2357_301">
                    <rect width="80" height="80" fill="white" />
                  </clipPath>
                </defs>
              </svg>
            </div>
            <div class="space-y-1 md:space-y-2">
              <span class="text-xl md:text-4xl font-montaga">+60</span>
              <p class="text-lg md:text-3xl font-semibold">@lang('Team Members')</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section>
    <div class="container pt-16 pb-8">
      <div class="flex flex-col items-center justify-center mb-4">
        <h2 class="relative pt-8 pb-6 text-lg md:text-5xl font-medium text-center text-second head-lines">@lang('Customers Opinions')</h2>
        <p class="text-base md:text-3xl font-semibold text-main">@lang('Find out what our customers think about their service with Sidra')</p>
      </div>

      {{-- @include('frontend.partial.home-customers') --}}

      <customer-video locale="{{ App::currentLocale() }}" :reviews="{{ json_encode($reviews) }}"></customer-video>
    </div>
  </section>

  <section>
    <div class="container py-16">
      <div class="flex flex-col items-center justify-center mb-4">
        <h2 class="relative pt-8 pb-6 text-lg md:text-5xl font-medium text-center text-second head-lines">@lang('Sidra team')</h2>
        <p class="text-base md:text-3xl font-semibold text-main">@lang('A specialized creative team')</p>
      </div>

      @include('frontend.partial.home-teams')
    </div>
  </section>

  <section>
    <div class="container py-8">
      <div class="flex flex-col items-center justify-center mb-4">
        <h2 class="relative pt-8 pb-6 text-lg md:text-5xl font-medium text-center text-second head-lines">@lang('Our Partners')</h2>
      </div>

      @include('frontend.partial.home-partners')
    </div>
  </section>

  @include('frontend.partial.home-blogs')
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
        | Logos Slider
        |--------------------------------------------------------------------------
        */
      var ClientsSlider = new Splide('#clientsSlider', {
        direction: dir,
        type: "loop",
        arrows: false,
        autoplay: true,
        pagination: false,
        interval: 3000,
        type: 'loop',
        perPage: 5,
        perMove: 1,
        gap: "0rem",
        breakpoints: {
          1280: {
            perPage: 3,
          },
          1024: {
            arrows: false,
            perPage: 2,
          },
          640: {
            arrows: false,
            perPage: 1,
          },
        },
      });
      ClientsSlider.mount();

      /*
        |--------------------------------------------------------------------------
        | Blogs Slider
        |--------------------------------------------------------------------------
        */
      var BlogsSplide = new Splide('#blogsSlider', {
        direction: dir,
        type: "loop",
        arrows: false,
        autoplay: true,
        pagination: false,
        interval: 3000,
        type: 'loop',
        perPage: 3,
        perMove: 1,
        gap: "0rem",
        breakpoints: {
          1024: {
            arrows: false,
            perPage: 2,
          },
          640: {
            arrows: false,
            perPage: 1,
          },
        },
      });
      BlogsSplide.mount();

      /*
        |--------------------------------------------------------------------------
        | Customers Opinions Slider
        |--------------------------------------------------------------------------
        */
      var CustomersOpinions = new Splide('#customersOpinions', {
        direction: dir,
        type: "loop",
        arrows: false,
        autoplay: false,
        pagination: true,
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

      CustomersOpinions.mount();
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
        | Logos Slider
        |--------------------------------------------------------------------------
        */
      var LogosSplide = new Splide('#logosSlider', {
        direction: dir,
        type: "loop",
        arrows: false,
        autoplay: true,
        pagination: false,
        interval: 3000,
        type: 'loop',
        perPage: 5,
        perMove: 1,
        gap: "0rem",
        breakpoints: {
          1280: {
            perPage: 3,
          },
          1024: {
            arrows: false,
            perPage: 2,
          },
          640: {
            arrows: false,
            perPage: 1,
          },
        },
      });
      LogosSplide.mount();

    });
  </script>
@endpush

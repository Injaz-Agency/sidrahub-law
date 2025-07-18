@extends('frontend.layouts.app')

@push('title')
  @lang('About Us')
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

        <h1 class="my-6 text-2xl lg:text-5xl text-white font-semibold">{{ __('About Us') }}</h1>

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

          <span class="text-sm lg:text-2xl">@lang('About Us')</span>
        </div>
      </div>
    </div>
  </section>

  <section>
    <div class="container py-10 md:py-20">
      <div class=" flex flex-wrap">
        <div class=" w-full lg:w-5/12 px-4 md:px-8">
          <img src="{{ asset('images/about.png') }}" alt="about">
        </div>
        <div class=" w-full lg:w-7/12 px-4 md:px-12">

          <div class="flex flex-col justify-center mb-4">
            <h2 class="relative py-4 md:pt-8 md:pb-6 text-3xl md:text-5xl font-medium text-second head-lines">@lang('عن سيدرا')</h2>
            <p class="text-lg md:text-3xl font-semibold text-main">@lang('تحويل عملك مع الخبرة')</p>

            <p class="mt-10 text-base lg:text-xl leading-normal lg:leading-loose text-justify">
              نقدم منصتنا لتبسيط إدارة الموارد البشرية وشؤون الموظفين. تشمل حلولنا دعم التوظيف ومعالجة كشوف المرتبات، نقدم منصتنا لتبسيط إدارة الموارد البشرية وشؤون الموظفين. تشمل
              حلولنا دعم التوظيف ومعالجة كشوف المرتبات، المرتبات، نقدم منصتنا لتبسيط إدارة الموارد البشرية وشؤون الموظفين. تشمل حلولنا دعم التوظيف ومعالجة كشوف المرتبات.
            </p>
          </div>

          <div class="grid grid-cols-1 md:grid-cols-2 pt-6 lg:pt-10 gap-8">
            <div class="space-y-4 md:space-y-6">
              <svg width="163" height="149" viewBox="0 0 163 149" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="89" cy="74" r="74" fill="#FFE6D0" />
                <g clip-path="url(#clip0_2365_115)">
                  <path
                    d="M104.644 83.3731C104.886 85.2382 105.005 87.1173 105 88.9981C105 99.4125 101.389 109.505 94.7804 117.554C88.1721 125.603 78.9765 131.111 68.7614 133.139C58.5463 135.167 47.9441 133.588 38.7624 128.673C29.5808 123.758 22.3882 115.811 18.4109 106.186C14.4336 96.5606 13.9179 85.854 16.9517 75.8913C19.9855 65.9285 26.3809 57.3265 35.0477 51.5517C43.7144 45.7769 54.1158 43.187 64.4786 44.2235C74.8413 45.26 84.5237 49.8587 91.875 57.2356"
                    stroke="#FF8216" stroke-width="3.94369" stroke-linecap="round" stroke-linejoin="round" />
                  <path
                    d="M92.9063 81.5054C93.4728 83.965 93.7558 86.4814 93.75 89.0054C93.7487 96.9991 90.9102 104.733 85.7398 110.829C80.5695 116.926 73.403 120.989 65.5168 122.296C57.6306 123.603 49.5365 122.068 42.6762 117.965C35.8159 113.861 30.6347 107.456 28.0553 99.8903C25.4759 92.3241 25.6658 84.088 28.5913 76.6488C31.5167 69.2096 36.9876 63.0502 44.0298 59.2677C51.072 55.4851 59.2282 54.3249 67.0458 55.9937C74.8634 57.6625 81.8349 62.052 86.7188 68.3804"
                    stroke="#FF8216" stroke-width="3.94369" stroke-linecap="round" stroke-linejoin="round" />
                  <path
                    d="M78.75 87.1223C78.75 87.7411 78.75 88.3598 78.75 88.9973C78.7506 93.3432 77.2416 97.5544 74.4809 100.911C71.7202 104.267 67.8793 106.56 63.6149 107.398C59.3505 108.236 54.9275 107.567 51.1021 105.504C47.2767 103.442 44.2866 100.115 42.6428 96.0917C40.9991 92.0686 40.804 87.5995 42.0907 83.4484C43.3775 79.2974 46.0663 75.7222 49.6973 73.3342C53.3284 70.9463 57.6762 69.8938 61.9974 70.3567C66.3186 70.8197 70.3447 72.7693 73.3875 75.8723"
                    stroke="#FF8216" stroke-width="3.94369" stroke-linecap="round" stroke-linejoin="round" />
                  <path
                    d="M60 94.625C63.1066 94.625 65.625 92.1066 65.625 89C65.625 85.8934 63.1066 83.375 60 83.375C56.8934 83.375 54.375 85.8934 54.375 89C54.375 92.1066 56.8934 94.625 60 94.625Z"
                    stroke="#FF8216" stroke-width="3.94369" stroke-linecap="round" stroke-linejoin="round" />
                  <path d="M60 89L105.675 67.1562" stroke="#FF8216" stroke-width="3.94369" stroke-linecap="round" stroke-linejoin="round" />
                  <path d="M90.4512 74.4219L92.2887 65.2344L105.02 57.0781L103.989 67.9531" stroke="#FF8216" stroke-width="3.94369" stroke-linecap="round" stroke-linejoin="round" />
                  <path d="M90.4512 74.4297L98.7574 78.7797L113.101 73.9984L103.989 67.9609" stroke="#FF8216" stroke-width="3.94369" stroke-linecap="round" stroke-linejoin="round" />
                </g>
                <defs>
                  <clipPath id="clip0_2365_115">
                    <rect width="120" height="120" fill="white" transform="translate(0 29)" />
                  </clipPath>
                </defs>
              </svg>

              <h3 class="text-xl lg:text-3xl font-semibold text-main">@lang('أفضل الحلول')</h3>
              <p class="text-base md:text-lg">نقدم منصتنا لتبسيط إدارة الموارد البشرية وشؤون الموظفين. تشمل حلولنا دعم التوظيف.</p>
            </div>

            <div class="space-y-4 md:space-y-6">
              <svg width="167" height="149" viewBox="0 0 167 149" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="93" cy="74" r="74" fill="#FFE6D0" />
                <g clip-path="url(#clip0_2365_111)">
                  <path
                    d="M59.2987 32.75L57.4237 32.8663H56.25L53.5538 33.2188L51.6788 33.5712L52.1475 37.2013L54.0225 36.9688L56.6025 36.6162H57.6562L59.5312 36.5L59.2987 32.75ZM63.3975 32.8663L62.9288 36.6162L64.8038 36.8525L66.4462 37.085L68.3212 37.4375L70.0763 37.9062L70.9012 34.1562L69.1388 33.8038L67.1512 33.335H67.0312L65.2725 33.1025L63.3975 32.8663ZM47.58 34.5087L45.8175 35.21L42.7725 36.5L42.6562 36.6162L42.1875 36.7325L40.545 37.67L42.3075 40.955L43.9462 40.13L44.2987 39.8975L47.2238 38.7275L48.9862 38.0225L47.58 34.5087ZM74.7675 35.4462L73.3612 38.96L75.1163 39.665L75.4688 39.8975L78.2812 41.3037L80.04 42.125L81.6788 38.8438L80.04 37.9062L77.2275 36.5H77.1075V36.3837L76.5225 36.1475L74.7675 35.4462ZM37.0275 39.665L35.505 40.835L33.9825 42.0088L33.8625 42.125L32.5725 43.2987L31.17 44.4688L33.63 47.2812L35.0363 46.1075L36.3263 44.9375L37.8488 43.7638L39.255 42.7138L37.0275 39.665ZM60 39.8975C41.3888 39.8975 26.25 54.92 26.25 73.415C26.25 83.5362 31.35 90.3725 36.0938 97.4375C38.055 100.359 40.0237 103.347 41.6025 106.696L40.1962 105.875L38.3212 109.04L39.8438 109.977L40.08 110.21H40.3125L43.3612 111.736L43.5938 111.849C44.6812 115.37 45.3525 119.36 45.3525 124.036V139.273C45.3525 139.77 45.55 140.247 45.9017 140.598C46.2533 140.95 46.7302 141.148 47.2275 141.148H72.7725C73.2698 141.148 73.7467 140.95 74.0983 140.598C74.45 140.247 74.6475 139.77 74.6475 139.273V124.156C74.6487 124.118 74.6487 124.079 74.6475 124.04C74.6475 119.375 75.21 115.479 76.29 111.969L76.7587 111.733L77.6962 111.264L79.335 110.446L78.0487 107.634C79.6987 103.91 81.6488 100.621 83.7863 97.4375C88.5375 90.3725 93.75 83.5362 93.75 73.415C93.75 54.92 78.6112 39.8975 60 39.8975ZM85.1962 41.1875L82.7325 44L84.1388 45.29L86.0138 46.9288L86.7188 47.75L88.0087 49.04L90.7013 46.46L89.415 45.1738L88.5938 44.2363L88.4775 44.1163L86.6025 42.4775L85.1962 41.1875ZM60 43.6475C76.5975 43.6475 90 56.96 90 73.415C90 82.2762 85.56 88.1525 80.7413 95.33C78.0938 99.2675 75.54 103.677 73.71 109.04L73.4775 109.156L73.5938 109.392C72.2186 113.518 71.4296 117.816 71.25 122.161H61.875V101.653C61.875 101.155 61.6775 100.678 61.3258 100.327C60.9742 99.975 60.4973 99.7775 60 99.7775C59.5027 99.7775 59.0258 99.975 58.6742 100.327C58.3225 100.678 58.125 101.155 58.125 101.653V122.161H48.75C48.5825 117.899 47.8331 113.68 46.5225 109.621L46.7587 109.269L46.29 109.036C44.46 103.693 41.8987 99.2563 39.2587 95.3225C34.44 88.16 30 82.2763 30 73.4188C30 56.9638 43.4025 43.6513 60 43.6513V43.6475ZM28.3575 47.5137L27.1875 49.04L26.835 49.5087L26.7188 49.625L24.96 52.205L23.9062 53.7275L27.0712 55.835L28.125 54.3125L29.7675 51.7325H29.88L30.1163 51.3837L31.29 49.8575L28.3613 47.5137H28.3575ZM59.7638 49.5087C59.22 49.5162 58.6613 49.58 58.125 49.625V71.1875L46.4062 82.9062L42.8888 86.4237C43.2638 86.8625 43.5337 87.2938 43.9462 87.71C43.9725 87.7475 44.0325 87.7963 44.0625 87.8263L44.1788 87.9462C46.6213 90.3512 49.5781 92.1702 52.8261 93.2661C56.074 94.362 59.5284 94.7061 62.9288 94.2725C69.8213 93.365 75.8288 89.2512 79.335 83.2587C79.3613 83.2212 79.4287 83.2962 79.455 83.2587L79.5675 83.0225C81.4859 79.622 82.4845 75.78 82.4648 71.8757C82.4451 67.9714 81.4077 64.1397 79.455 60.7587C77.496 57.3834 74.696 54.573 71.3279 52.6015C67.9599 50.6299 64.1385 49.5644 60.2362 49.5087C60.1387 49.4937 60.0975 49.5087 60 49.5087C59.91 49.5087 59.8538 49.4937 59.7638 49.5087ZM93.2812 49.625L90.2325 51.7363L91.29 53.2587L91.875 54.1962L93.0487 56.3038L93.9862 57.9462L97.2675 56.1875L96.33 54.545L95.1562 52.3212L95.04 52.2012L94.335 51.1513L93.2812 49.625ZM54.375 50.21C47.6475 51.9538 41.88 56.7238 39.1388 63.335C36.4013 69.9575 37.1325 77.3825 40.665 83.375L43.71 80.3263C41.1413 75.575 40.515 69.9125 42.6562 64.7413C44.7937 59.585 49.2075 56.0975 54.375 54.545C54.4087 54.5412 54.3712 54.4625 54.375 54.4325V50.21ZM61.875 53.7275C67.7925 54.3575 73.155 57.41 76.1737 62.6337C79.1887 67.8575 79.1737 74.0637 76.7587 79.5087L73.2413 77.3975L61.875 70.835V53.7275ZM22.0312 57.5938L21.4462 59.3525L20.5087 62.0487V62.1613L20.2725 63.0988L19.8038 64.8612L23.4375 65.7987L23.9062 63.9237L24.1425 63.0988L24.96 60.5225L25.665 58.7637L22.0312 57.5938ZM98.79 59.9375L95.2725 61.2275L95.8612 62.9862L96.6788 66.1475V66.2638L97.0312 68.1388L100.665 67.5538L100.429 65.6788V65.5625L100.312 65.4462V65.33L99.4913 62.045V61.8125L99.375 61.6962L98.79 59.9375ZM18.9825 68.8438L18.87 70.7188L18.75 72.71V76.5763L22.5 76.4637V72.8263L22.6163 71.0712L22.7363 69.1962L18.9863 68.8438H18.9825ZM97.5 71.54V75.875L97.3837 77.0487L97.1475 78.8038L100.898 79.1562L101.134 77.3975L101.25 76.2275V71.54H97.5ZM60.2325 74.3525L74.8837 82.79C71.8762 86.9262 67.5863 89.8475 62.46 90.5225C57.3338 91.1975 52.3725 89.4088 48.3975 86.1875L60.2325 74.3525ZM22.9688 79.8612L19.2188 80.5625L19.5712 82.4375L19.8038 83.1425V83.255L20.625 86.1875L21.0938 87.9462L24.7275 87.0087L24.1387 85.25L23.4375 82.3212L23.3212 81.7362L22.9688 79.8612ZM96.5625 82.2013L96.0938 84.0763L95.8575 85.25L95.04 87.4775L94.335 89.2362L97.8525 90.5225L98.5538 88.7675L99.375 86.54V86.3038L99.7275 85.0138L100.196 83.2587L96.5625 82.2013ZM26.0137 90.0575L22.7325 91.9325L23.67 93.575L24.96 95.9187H25.08V96.035L25.665 96.8562L26.7188 98.3787L29.8837 96.2675L28.71 94.745L28.2413 93.9275H28.125L26.9512 91.7L26.0137 90.0575ZM92.9288 92.1687L91.875 93.8075L90.1163 96.5037H90L89.8837 96.74L88.71 98.1462L91.6425 100.49L92.8125 99.0837L93.0487 98.7312V98.6112H93.1613L95.0363 95.9187L96.0938 94.2762L92.9288 92.1687ZM31.9913 98.9637L29.295 101.544L30.585 102.95L31.5225 103.887L31.6388 104.004L33.5138 105.646L34.9237 106.816L37.3837 104.004L35.9775 102.714L34.2188 101.307L33.2812 100.37L31.9913 98.9637ZM86.3663 100.722L84.96 102.012L83.5538 103.299L82.1475 104.236L80.625 105.294L82.8525 108.339L84.375 107.285L85.7812 106.231H85.8975V106.111L87.4237 104.825L88.83 103.535L86.3663 100.722ZM49.1025 125.919H59.6475C59.8413 125.949 60.0387 125.949 60.2325 125.919H70.8975V137.401H49.1025V133.651H67.5V129.901H49.1025V125.919ZM50.625 145.25C48.09 145.213 48.09 149.037 50.625 149H69.375C71.91 149.037 71.91 145.213 69.375 145.25H50.625Z"
                    fill="#FF8216" />
                </g>
                <defs>
                  <clipPath id="clip0_2365_111">
                    <rect width="120" height="120" fill="white" transform="translate(0 29)" />
                  </clipPath>
                </defs>
              </svg>

              <h3 class="text-xl lg:text-3xl font-semibold text-main">@lang('أفضل الحلول')</h3>
              <p class="text-base md:text-lg">نقدم منصتنا لتبسيط إدارة الموارد البشرية وشؤون الموظفين. تشمل حلولنا دعم التوظيف.</p>
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>

  <section>
    <div class="container py-14">
      <div class=" flex flex-wrap">
        <div class="w-full lg:w-4/12 px-8">
          <div class="flex flex-col justify-center mb-4">
            <h2 class="relative pt-8 pb-6 text-lg md:text-5xl font-medium text-second head-lines">@lang('الاسئلة الشائعة')</h2>
            <p class="text-base md:text-3xl font-semibold text-main">@lang('هل لديك أية اسئلة؟')</p>
          </div>
        </div>
        <div class="w-full lg:w-8/12 px-8">

        </div>
      </div>
    </div>
  </section>
@endsection


@push('js')
@endpush

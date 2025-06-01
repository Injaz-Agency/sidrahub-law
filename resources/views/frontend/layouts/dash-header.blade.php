<header class=" rtl:lg:mr-72">
  <nav class="bg-sh-background">
    <div class="dash-container">
      <div class="relative flex items-center justify-between h-24">

        <aside-menu locale="{{ App::currentLocale() }}"></aside-menu>

        <div class="flex-1 flex items-center justify-end ">
          {{-- <div class="flex items-center">
            <a href="{{ route('frontend.home') }}" title="@lang('Sidra Hub')">
              <img class="w-36 lg:w-44 xl:w-64" src="{{ asset('images/logo.png') }}" alt="logo">
            </a>
          </div> --}}

          <div class="h-full block ltr:me-6 sm:me-6">
            <div class="h-full flex items-center justify-center">
              <a href=""
                class="nav-link h-full relative flex items-center justify-center text-main px-2 lg:px-5 py-2 text-sm lg:text-lg uppercase font-medium @if (Route::is('blogs.index')) active @endif">
                <svg class="w-8 h-8" width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M19.9474 44.3171C19.9474 45.5591 20.4797 46.7502 21.4273 47.6284C22.3748 48.5066 23.66 49 25 49C26.34 49 27.6252 48.5066 28.5727 47.6284C29.5203 46.7502 30.0526 45.5591 30.0526 44.3171M27.3419 5.83746L26.1798 5.68293L26.2606 4.59649L26.2632 4.51219V2.17073C26.2632 1.86023 26.1301 1.56245 25.8932 1.3429C25.6563 1.12334 25.335 1 25 1C24.665 1 24.3437 1.12334 24.1068 1.3429C23.8699 1.56245 23.7368 1.86023 23.7368 2.17073V4.51219L23.7394 4.59649L23.8227 5.68293L22.6606 5.83746C18.7512 6.35947 15.1757 8.16981 12.5894 10.9367C10.0031 13.7036 8.57929 17.2416 8.57895 20.9024V36.1219H4.78947C3.78444 36.1219 2.82058 36.492 2.10991 37.1506C1.39925 37.8093 1 38.7027 1 39.6341C1 40.5656 1.39925 41.459 2.10991 42.1176C2.82058 42.7763 3.78444 43.1463 4.78947 43.1463H45.2105C46.2156 43.1463 47.1794 42.7763 47.8901 42.1176C48.6007 41.459 49 40.5656 49 39.6341C49 38.7027 48.6007 37.8093 47.8901 37.1506C47.1794 36.492 46.2156 36.1219 45.2105 36.1219H41.4211V20.9024C41.4208 17.242 39.9974 13.7042 37.4116 10.9374C34.8258 8.17055 31.2509 6.35998 27.3419 5.83746Z"
                    stroke="#051459" stroke-width="1.41463" />
                </svg>
              </a>

              <lang-menu locale="{{ App::currentLocale() }}"></lang-menu>
            </div>
          </div>
        </div>
        {{-- absolute inset-y-0 end-0 --}}
        <div class=" flex items-center pe-2 lg:static lg:inset-auto sm:pe-0">
          <a href="{{ route('frontend.consulting.register') }}" title="@lang('Free Consultation')" class="hidden lg:flex items-center justify-center py-3 px-4 text-base bg-second text-white rounded-xl">
            @lang('Free Consultation')
          </a>
        </div>
      </div>
    </div>
  </nav>
</header>

<header>
  <nav style="box-shadow: 0px 2px 40px 0px rgba(0, 0, 0, 0.15);" class="border-b">
    <div class="container">
      <div class="relative flex items-center justify-between h-24">

        <mobile-menu :services="{{ json_encode($services) }}" locale="{{ App::currentLocale() }}"></mobile-menu>

        <div class="flex-1 flex items-center justify-end lg:justify-start">
          <div class="flex items-center">
            <a href="{{ route('home') }}" title="@lang('Sidra Hub')">
              <img class="w-36 lg:w-44 xl:w-64" src="{{ asset('images/logo.png') }}" alt="logo">
            </a>
          </div>

          <div class="flex-1 h-full hidden lg:block ltr:me-6 sm:me-6">
            <div class="h-full flex items-center justify-center">
              <a href="{{ route('home') }}"
                class="nav-link h-full relative flex items-center justify-center text-main px-2 lg:px-5 py-2 text-sm lg:text-lg uppercase font-medium @if (Route::is('home')) active @endif">
                @lang('Home')
              </a>
              {{-- <a href="{{ route('frontend.services') }}"
                class="nav-link h-full relative flex items-center justify-center text-main px-2 lg:px-5 py-2 text-sm lg:text-lg uppercase font-medium @if (Route::is('services.saudi')) active @endif">
                @lang('Services')
              </a> --}}
              <services-menu :services="{{ json_encode(value: $services) }}" locale="{{ App::currentLocale() }}"></services-menu>

              <a href=""
                class="nav-link h-full relative flex items-center justify-center text-main px-2 lg:px-5 py-2 text-sm lg:text-lg uppercase font-medium @if (Route::is('contact')) active @endif">
                @lang('Articles')
              </a>
              <a href=""
                class="nav-link h-full relative flex items-center justify-center text-main px-2 lg:px-5 py-2 text-sm lg:text-lg uppercase font-medium @if (Route::is('contact')) active @endif">
                @lang('About Us')
              </a>
              <a href=""
                class="nav-link h-full relative flex items-center justify-center text-main px-2 lg:px-5 py-2 text-sm lg:text-lg uppercase font-medium @if (Route::is('blogs.index')) active @endif">
                @lang('Contact Us')
              </a>
              <lang-menu locale="{{ App::currentLocale() }}"></lang-menu>
            </div>
          </div>
        </div>

        <div class="absolute inset-y-0 end-0 flex items-center pe-2 lg:static lg:inset-auto lg:ms-6 sm:pe-0">
          <a href="" title="@lang('Sign In')" class="hidden xl:flex items-center justify-center ms-3 py-3 px-4 text-base bg-second text-white rounded-xl">
            <svg class="w-4 h-4 fill-white me-2" xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
              <path d=" M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2
                304 269.7 304H178.3z" />
            </svg>
            {{ auth()->check() ? __('Dashboard ') : __('Sign In') }}
            {{--            @lang('Sign In') --}}
          </a>
        </div>
      </div>
    </div>
  </nav>
</header>

<section>
  <div class="container">
    <div class="flex flex-wrap items-center space-y-4 rounded-xl px-8 py-6 md:space-y-0 md:px-20 md:py-10"
      style="background-image:url({{ asset('join_us.jpg') }});background-size: cover;background-position: center;">
      <div class="w-full md:w-8/12">
        <h2 class="text-center text-xl leading-relaxed text-white md:text-start md:text-5xl md:leading-relaxed">@lang('Conduct a free consultation with Sidra Business Services platform specialists')</h2>
      </div>
      <div class="flex w-full justify-center md:w-4/12 md:justify-end">
        <a href="" class="flex items-center justify-center rounded-xl bg-second px-8 py-3 text-base text-white">
          @lang('Free consultation')
        </a>
      </div>
    </div>
  </div>
</section>

<footer class="">
  <div class="container pt-10 lg:pt-16">
    <div class="grid grid-cols-1 gap-10 lg:grid-cols-2 xl:grid-cols-4">
      <div>
        <a href="">
          <span class="sr-only">@lang('Sidra Hub')</span>
          <img src="{{ asset('images/logo.png') }}" alt="">
        </a>

        <p class="my-4 text-center lg:text-start lg:text-lg">@lang('Welcome to Sidra, your trusted partner for unparalleled success in legal, financial and business establishment services.')</p>
      </div>
      <div>
        <h4 class="mb-4 text-xl font-medium text-second lg:text-2xl">@lang('Our services')</h4>

        <ul class="mt-6 list-none space-y-2 md:space-y-4">
          {{-- @foreach (\App\Models\Category::all() as $item)
            <li>
              <a href="" class="text-base lg:text-lg">{{ $item['name'] }}</a>
            </li>
          @endforeach --}}

        </ul>
      </div>
      <div class="lg:col-span-2">
        <h4 class="mb-4 text-xl font-medium text-second lg:text-2xl">@lang('Our Branches')</h4>

        <div class="grid grid-cols-1 gap-5 lg:grid-cols-2">
          <div>
            <h4 class="text-lg font-medium text-main">@lang('Saudi Arabia')</h4>
            <ul class="mt-2 list-none space-y-4">
              <li>
                <a href="" class="flex items-center text-base">
                  <span class="inline-flex">
                    <svg class="h-6 w-6 fill-second lg:h-8 lg:w-8" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 384 512">
                      <path
                        d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z" />
                    </svg>
                  </span>
                  <span class="ms-4">@lang('AddressSA')</span>
                </a>
              </li>
              <li>
                <a href="" class="flex items-center text-base">
                  <span class="inline-flex">
                    <svg class="h-6 w-6 fill-second lg:h-8 lg:w-8" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 384 512">
                      <path
                        d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z" />
                    </svg>
                  </span>
                  <span class="ms-4">@lang('AddressSA_riyad')</span>
                </a>
              </li>

              <li>
                <a href="https://api.whatsapp.com/send?phone=966582322777" target="_blank" class="flex items-center text-base">
                  <span class="inline-flex">
                    <svg class="me-4 h-6 w-6 fill-second lg:h-8 lg:w-8" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512">
                      <path
                        d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z" />
                    </svg>
                  </span>
                  <span dir="ltr">+966 582322777</span>
                </a>
              </li>
            </ul>
          </div>
          <div>
            <h4 class="text-lg font-medium text-main">@lang('United Kingdom')</h4>
            <ul class="mt-2 list-none space-y-4">
              <li>
                <a href="" class="flex items-center text-base">
                  <span class="inline-flex">
                    <svg class="h-6 w-6 fill-second lg:h-8 lg:w-8" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 384 512">
                      <path
                        d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z" />
                    </svg>
                  </span>

                  <span class="ms-4">@lang('AddressUK')</span>
                </a>
              </li>

              <li>
                <a href="https://api.whatsapp.com/send?phone=447721508196" target="_blank" class="flex items-center text-base">
                  <span class="inline-flex">
                    <svg class="me-4 h-6 w-6 fill-second lg:h-8 lg:w-8" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512">
                      <path
                        d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z" />
                    </svg>
                  </span>
                  <span dir="ltr">+44 7721508196</span>
                </a>
              </li>
            </ul>
          </div>
          <div>
            <h4 class="text-lg font-medium text-main">@lang('Egypt')</h4>
            <ul class="mt-2 list-none space-y-4">
              <li>
                <a href="" class="flex items-center text-base">
                  <span class="inline-flex">
                    <svg class="h-6 w-6 fill-second lg:h-8 lg:w-8" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 384 512">
                      <path
                        d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z" />
                    </svg>
                  </span>

                  <span class="ms-4">@lang('AddressEG')</span>
                </a>
              </li>

              <li>
                <a href="https://api.whatsapp.com/send?phone=201005585008" target="_blank" class="flex items-center text-base">
                  <span class="inline-flex">
                    <svg class="me-4 h-6 w-6 fill-second lg:h-8 lg:w-8" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512">
                      <path
                        d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z" />
                    </svg>
                  </span>
                  <span dir="ltr">+2 01005585008</span>
                </a>
              </li>
            </ul>
          </div>
          <div>
            <h4 class="text-lg font-medium text-main">@lang('Dubai Free Zone')</h4>

            <ul class="mt-2 list-none space-y-4">
              <li>
                <a href="https://api.whatsapp.com/send?phone=966582322777" class="flex items-center text-base lg:text-lg lg:font-medium">
                  <svg class="h-6 w-6 fill-second lg:h-8 lg:w-8" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 384 512">
                    <path
                      d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z" />
                  </svg>
                  <span class="ms-4">@lang('AddressDubai')</span>
                </a>
              </li>
              <li>
                <a href="https://api.whatsapp.com/send?phone=966582322777" target="_blank" class="flex items-center text-base">
                  <span class="inline-flex">
                    <svg class="me-4 h-6 w-6 fill-second lg:h-8 lg:w-8" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512">
                      <path
                        d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z" />
                    </svg>
                  </span>
                  <span dir="ltr">+966 582322777</span>
                </a>
                {{--                <a href="tel:+966 50 789 2569" class="flex items-center text-base lg:text-lg lg:font-medium"> --}}
                {{--                  <svg class="me-4 w-6 h-6 lg:w-8 lg:h-8 fill-second" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"> --}}
                {{--                    <path --}}
                {{--                      d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z" /> --}}
                {{--                  </svg> --}}
                {{--                  <span class="ms-4" dir="ltr">+966 50 789 2569</span> --}}
                {{--                </a> --}}
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <div class="mt-10 flex flex-col items-center justify-center border-t border-sh-border py-8 md:flex-row md:justify-between">
      <div>@lang('All Rights Reserved') @lang('To') <span class="text-second">@lang('Sidra')</span> &copy; 2023</div>

      <ul class="mt-4 flex list-none items-center justify-center gap-x-4 lg:justify-start lg:gap-x-6">
        <li>
          <a href="https://instagram.com/sidra.hub" target="_blank" class="inline-flex">
            <svg class="h-8 w-8 fill-second transition-all duration-200 ease-linear hover:fill-white" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512">
              <path
                d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z" />
            </svg>
          </a>
        </li>
        <li>
          <a href="https://www.facebook.com/sidrahubSa?mibextid=ZbWKwL" target="_blank" class="inline-flex">
            <svg class="h-8 w-8 fill-second transition-all duration-200 ease-linear hover:fill-white" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512">
              <path
                d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.78 90.69 226.38 209.25 245V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.31 482.38 504 379.78 504 256z" />
            </svg>
          </a>
        </li>
        <li>
          <a href="https://twitter.com/SidraHub" target="_blank" class="inline-flex">
            <svg class="h-8 w-8 fill-second transition-all duration-200 ease-linear hover:fill-white" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512">
              <path
                d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z" />
            </svg>
          </a>
        </li>
        <li>
          <a href="https://www.linkedin.com/in/sidrahub" target="_blank" class="inline-flex">
            <svg class="h-8 w-8 fill-second transition-all duration-200 ease-linear hover:fill-white" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512">
              <path
                d="M416 32H31.9C14.3 32 0 46.5 0 64.3v383.4C0 465.5 14.3 480 31.9 480H416c17.6 0 32-14.5 32-32.3V64.3c0-17.8-14.4-32.3-32-32.3zM135.4 416H69V202.2h66.5V416zm-33.2-243c-21.3 0-38.5-17.3-38.5-38.5S80.9 96 102.2 96c21.2 0 38.5 17.3 38.5 38.5 0 21.3-17.2 38.5-38.5 38.5zm282.1 243h-66.4V312c0-24.8-.5-56.7-34.5-56.7-34.6 0-39.9 27-39.9 54.9V416h-66.4V202.2h63.7v29.2h.9c8.9-16.8 30.6-34.5 62.9-34.5 67.2 0 79.7 44.3 79.7 101.9V416z" />
            </svg>
          </a>
        </li>
        <li>
          <a href="http://wa.me/966582322777" target="_blank" class="inline-flex">
            <svg class="h-8 w-8 fill-second transition-all duration-200 ease-linear hover:fill-white" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512">
              <path
                d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z" />
            </svg>
          </a>
        </li>
      </ul>
    </div>
  </div>
</footer>

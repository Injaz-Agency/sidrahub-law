@extends('frontend.layouts.dash')

 @push('title', __('Orders'))



@section('content')
  <div class="py-8 px-8 rounded-xl bg-white shadow-login-box">
    <h3 class="flex items-center text-2xl mb-4">
      <svg class="w-10 h-10 me-4 " width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M36.1061 16.1205H43.1467L38.253 30.7905H19.0975L14.2033 16.1205L12.1614 10H4.85547" stroke="black" stroke-width="1.40625" stroke-miterlimit="10" stroke-linecap="round"
          stroke-linejoin="round" />
        <path
          d="M22.5266 39.3344C23.8896 39.3344 24.9945 38.2294 24.9945 36.8664C24.9945 35.5034 23.8896 34.3984 22.5266 34.3984C21.1635 34.3984 20.0586 35.5034 20.0586 36.8664C20.0586 38.2294 21.1635 39.3344 22.5266 39.3344Z"
          stroke="black" stroke-width="1.40625" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
        <path
          d="M34.8215 39.3344C36.1845 39.3344 37.2895 38.2294 37.2895 36.8664C37.2895 35.5034 36.1845 34.3984 34.8215 34.3984C33.4585 34.3984 32.3535 35.5034 32.3535 36.8664C32.3535 38.2294 33.4585 39.3344 34.8215 39.3344Z"
          stroke="black" stroke-width="1.40625" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
        <g clip-path="url(#clip0_2317_116)">
          <path
            d="M33.5938 27.5312H21.4062C20.8892 27.5312 20.4688 27.1108 20.4688 26.5938V17.6875C20.4688 17.1705 20.8892 16.75 21.4062 16.75H33.5938C34.1108 16.75 34.5312 17.1705 34.5312 17.6875V26.5938C34.5312 27.1108 34.1108 27.5312 33.5938 27.5312ZM21.4062 17.6875V26.5938H33.5942L33.5938 17.6875H21.4062Z"
            fill="black" />
          <path
            d="M32.1875 21.9062H22.8125C21.5202 21.9062 20.4688 20.8548 20.4688 19.5625V17.6875C20.4688 17.1705 20.8892 16.75 21.4062 16.75H33.5938C34.1108 16.75 34.5312 17.1705 34.5312 17.6875V19.5625C34.5312 20.8548 33.4798 21.9062 32.1875 21.9062ZM21.4062 17.6875V19.5625C21.4062 20.3378 22.0372 20.9688 22.8125 20.9688H32.1875C32.9628 20.9688 33.5938 20.3378 33.5938 19.5625V17.6875H21.4062Z"
            fill="black" />
          <path
            d="M31.25 17.6875H23.75C23.6257 17.6875 23.5065 17.6381 23.4185 17.5502C23.3306 17.4623 23.2812 17.3431 23.2812 17.2188V15.3438C23.2812 14.3097 24.1222 13.4688 25.1562 13.4688H29.8438C30.8778 13.4688 31.7188 14.3097 31.7188 15.3438V17.2188C31.7188 17.3431 31.6694 17.4623 31.5815 17.5502C31.4935 17.6381 31.3743 17.6875 31.25 17.6875ZM24.2188 16.75H30.7812V15.3438C30.7812 14.8267 30.3608 14.4062 29.8438 14.4062H25.1562C24.6392 14.4062 24.2188 14.8267 24.2188 15.3438V16.75ZM24.2188 23.7812C23.4434 23.7812 22.8125 23.1503 22.8125 22.375V21.4375C22.8125 21.3132 22.8619 21.194 22.9498 21.106C23.0377 21.0181 23.1569 20.9688 23.2812 20.9688H25.1562C25.2806 20.9688 25.3998 21.0181 25.4877 21.106C25.5756 21.194 25.625 21.3132 25.625 21.4375V22.375C25.625 23.1503 24.9941 23.7812 24.2188 23.7812ZM23.75 21.9062V22.375C23.7554 22.4957 23.8071 22.6097 23.8945 22.6932C23.9818 22.7767 24.0979 22.8233 24.2188 22.8233C24.3396 22.8233 24.4557 22.7767 24.543 22.6932C24.6304 22.6097 24.6821 22.4957 24.6875 22.375V21.9062H23.75ZM30.7812 23.7812C30.0059 23.7812 29.375 23.1503 29.375 22.375V21.4375C29.375 21.3132 29.4244 21.194 29.5123 21.106C29.6002 21.0181 29.7194 20.9688 29.8438 20.9688H31.7188C31.8431 20.9688 31.9623 21.0181 32.0502 21.106C32.1381 21.194 32.1875 21.3132 32.1875 21.4375V22.375C32.1875 23.1503 31.5566 23.7812 30.7812 23.7812ZM30.3125 21.9062V22.375C30.3179 22.4957 30.3696 22.6097 30.457 22.6932C30.5443 22.7767 30.6604 22.8233 30.7812 22.8233C30.9021 22.8233 31.0182 22.7767 31.1055 22.6932C31.1929 22.6097 31.2446 22.4957 31.25 22.375V21.9062H30.3125Z"
            fill="black" />
        </g>
        <defs>
          <clipPath id="clip0_2317_116">
            <rect width="15" height="15" fill="white" transform="translate(20 13)" />
          </clipPath>
        </defs>
      </svg>
      <span class="text-main group-hover:text-white">@lang('Orders')</span>
    </h3>
    <div class="min-w-full min-h-80">
      <div class="overflow-auto border border-sh-border rounded-lg">
        <table class="min-w-full divide-y divide-sh-border">
          <thead>
            <tr>
              <th scope="col" class="py-3.5 px-4 text-lg font-normal text-left rtl:text-right text-main">
                #
              </th>
              <th scope="col" class="py-3.5 px-4 text-lg font-normal text-left rtl:text-right text-main">
                @lang('Code')
              </th>
              <th scope="col" class="px-4 py-3.5 text-lg font-normal text-left rtl:text-right text-main">
                @lang('Service')
              </th>
              <th scope="col" class="px-4 py-3.5 text-lg font-normal text-left rtl:text-right text-main">
                @lang('Package')
              </th>

              <th scope="col" class="px-4 py-3.5 text-lg font-normal text-left rtl:text-right text-main">
                @lang('Date')
              </th>
              <th scope="col" class="px-4 py-3.5 text-lg font-normal text-left rtl:text-right text-main">
                @lang('Status')
              </th>
              <th scope="col" class="px-4 py-3.5 text-lg font-normal text-left rtl:text-right text-main">
                @lang('Paid Status')
              </th>
              <th scope="col" class="px-4 py-3.5 text-lg font-normal text-left rtl:text-right text-main">
                @lang('Price')
              </th>
              <th scope="col" class="px-4 py-3.5 text-lg font-normal text-left rtl:text-right text-main">
                @lang('Actions')
              </th>

            </tr>
          </thead>

          <tbody class="bg-white divide-y divide-sh-border">
          @foreach($orders as $order)
                <tr>
                  <td class="px-4 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                    <div class="inline-flex items-center gap-x-3">
                      <span>{{$loop->iteration}}</span>
                    </div>
                  </td>
                  <td class="px-4 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                    <div class="inline-flex items-center gap-x-3">
                      <span>{{$order->code}}</span>
                    </div>
                  </td>
                  <td class="px-4 py-4 text-sm text-gray-500 whitespace-nowrap">{{$order->service?->name}}</td>
                  <td class="px-4 py-4 text-sm text-gray-500 whitespace-nowrap">{{$order->package?->name}}</td>

                  <td class="px-4 py-4 text-sm text-gray-500 whitespace-nowrap">{{$order->created_at?->format('Y-m-d')}}</td>
                  <td class="px-4 py-4 text-sm text-gray-500 whitespace-nowrap">{{__(($order->status_btn['status']))}}</td>

                  <td class="px-4 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                    @if($order->subscription?->paid == 0)
                      <div class="inline-flex items-center px-3 py-1 text-red-500 rounded-full gap-x-2 bg-red-100/60">
                        <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M9 3L3 9M3 3L9 9" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <h2 class="text-sm font-normal">@lang('Not Paid')</h2>
                      </div>
                    @else
                      <div class="inline-flex items-center px-3 py-1 rounded-full gap-x-2 text-emerald-500 bg-emerald-100/60">
                        <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M10 3L4.5 8.5L2 6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <h2 class="text-sm font-normal">@lang('Paid')</h2>
                      </div>
                    @endif
                  </td>
                  <td class="px-4 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">{{price($order?->subscription?->price) == 'Not Defined' ?  __('Not Defined') : price($order?->subscription?->price)}}</td>
                  <td class="px-4 py-4 text-sm whitespace-nowrap">
                    <div class="flex items-center gap-x-6">
                      <a href="{{route('client.orders.show',$order)}}" class="text-amber-900 transition-colors duration-200 hover:text-indigo-500 focus:outline-none">
                        @lang('Show')
                      </a>
                    </div>
                  </td>
                </tr>
          @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection
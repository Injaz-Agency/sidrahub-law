@extends('frontend.layouts.dash')

{{-- @push('title', __('Services')) --}}



@section('content')
  <div class="py-8 px-8 rounded-xl bg-white shadow-login-box">
    <h3 class="flex items-center text-2xl mb-4">
      <svg class="w-10 h-10 me-4 fill-white group-hover:fill-white" width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path
          d="M6.78375 46.1333C7.00033 46.2347 7.2412 46.2726 7.47847 46.2428C7.71573 46.2129 7.93968 46.1164 8.12438 45.9645L11.1318 43.4564L14.7547 46.3805L14.7634 46.3872C14.9862 46.5626 15.2618 46.6576 15.5454 46.657C15.829 46.6563 16.104 46.56 16.3261 46.3836L16.335 46.3764L19.9163 43.4543L23.4975 46.3764L23.5063 46.3836C23.7284 46.56 24.0034 46.6563 24.287 46.6569C24.5706 46.6576 24.8461 46.5626 25.0689 46.3872L25.0776 46.3805L28.7001 43.4563L31.7068 45.9644C31.8927 46.1165 32.1178 46.2131 32.3561 46.2429C32.5945 46.2728 32.8364 46.2347 33.0541 46.1332C33.2594 46.0416 33.4342 45.8929 33.5576 45.705C33.6809 45.517 33.7477 45.2975 33.75 45.0727V40.1663L35.7982 41.881C36.0223 42.0679 36.3049 42.1699 36.5966 42.1692C36.7759 42.1692 36.9528 42.1283 37.1138 42.0497C37.3159 41.9566 37.4865 41.8067 37.605 41.6185C37.7235 41.4302 37.7847 41.2115 37.7812 40.9891V36.0828L39.8557 37.7976C40.0846 37.9847 40.3714 38.0865 40.6672 38.0858C40.8551 38.0858 41.0409 38.045 41.2116 37.9662C41.4168 37.8745 41.5913 37.7258 41.7144 37.5378C41.8376 37.3498 41.9042 37.1304 41.9062 36.9056V4.67278C41.9062 2.83725 40.2865 1.3125 38.3008 1.3125H17.8662C15.8805 1.3125 14.25 2.83725 14.25 4.67278V5.4375H13.7828C11.7969 5.4375 10.2188 6.92072 10.2188 8.75625V9.46875H9.69919C7.71347 9.46875 6.09375 11.0042 6.09375 12.8398V45.0727C6.0949 45.297 6.16056 45.5163 6.28291 45.7043C6.40525 45.8924 6.57911 46.0413 6.78375 46.1333ZM15.75 4.67278C15.75 3.66431 16.7076 2.8125 17.8662 2.8125H38.3008C39.4594 2.8125 40.4062 3.66431 40.4062 4.67278V36.2844L37.7812 34.1295V8.75625C37.7812 6.92072 36.2031 5.4375 34.2173 5.4375H15.75V4.67278ZM11.7188 8.75625C11.7188 7.74778 12.6241 6.9375 13.7828 6.9375H34.2173C35.3759 6.9375 36.2812 7.74778 36.2812 8.75625V40.368L33.75 38.2125V12.8398C33.75 11.0042 32.1195 9.46875 30.1338 9.46875H11.7188V8.75625ZM7.59375 12.8398C7.59375 11.8313 8.54063 10.9688 9.69919 10.9688H30.1338C31.2924 10.9688 32.25 11.8313 32.25 12.8398V44.4515L29.5132 42.1748C29.5101 42.1722 29.5033 42.1697 29.5002 42.1672C29.2781 41.9868 29.0013 41.8874 28.7152 41.8852C28.4291 41.8831 28.1508 41.9784 27.9261 42.1554C27.9232 42.1578 27.9193 42.16 27.9167 42.1623L24.2918 45.0879L20.7094 42.165L20.7 42.1578C20.4772 41.9806 20.201 41.8842 19.9164 41.8842C19.6318 41.8842 19.3556 41.9806 19.1329 42.1578L19.124 42.165L15.5418 45.0879L11.9174 42.1623L11.9088 42.1554C11.6844 41.9784 11.4064 41.8831 11.1206 41.8852C10.8348 41.8873 10.5582 41.9868 10.3365 42.1672C10.3334 42.1697 10.3283 42.1722 10.3252 42.1748L7.59375 44.4515V12.8398Z" />
        <path
          d="M14.0234 37.875H25.8091C26.008 37.875 26.1988 37.796 26.3395 37.6553C26.4801 37.5147 26.5591 37.3239 26.5591 37.125C26.5591 36.9261 26.4801 36.7353 26.3395 36.5947C26.1988 36.454 26.008 36.375 25.8091 36.375H14.0234C13.8245 36.375 13.6338 36.454 13.4931 36.5947C13.3525 36.7353 13.2734 36.9261 13.2734 37.125C13.2734 37.3239 13.3525 37.5147 13.4931 37.6553C13.6338 37.796 13.8245 37.875 14.0234 37.875ZM19.9163 29.5059C19.2212 29.5051 18.5548 29.2286 18.0633 28.7371C17.5717 28.2456 17.2952 27.5792 17.2944 26.8841C17.2944 26.6852 17.2154 26.4944 17.0747 26.3538C16.9341 26.2131 16.7433 26.1341 16.5444 26.1341C16.3455 26.1341 16.1547 26.2131 16.014 26.3538C15.8734 26.4944 15.7944 26.6852 15.7944 26.8841C15.7957 27.8066 16.1059 28.7021 16.6755 29.4277C17.2452 30.1534 18.0414 30.6673 18.9373 30.8875V32.25C18.9373 32.4489 19.0163 32.6397 19.1569 32.7803C19.2976 32.921 19.4883 33 19.6873 33C19.8862 33 20.0769 32.921 20.2176 32.7803C20.3582 32.6397 20.4373 32.4489 20.4373 32.25V30.9719C21.4768 30.8396 22.4269 30.3162 23.0943 29.5082C23.7617 28.7002 24.0962 27.6684 24.0298 26.6226C23.9635 25.5767 23.5012 24.5954 22.737 23.8783C21.9729 23.1612 20.9642 22.7621 19.9163 22.7622C19.2421 22.7625 18.5937 22.503 18.1058 22.0377C17.6179 21.5724 17.3281 20.937 17.2964 20.2636C17.2648 19.5901 17.4938 18.9304 17.936 18.4214C18.3781 17.9124 18.9993 17.5933 19.6706 17.5304C19.6762 17.5304 19.6816 17.5312 19.6873 17.5312C19.7261 17.5311 19.7648 17.528 19.8031 17.5219C19.8406 17.5203 19.8781 17.519 19.9163 17.519C20.6114 17.5198 21.2778 17.7963 21.7693 18.2878C22.2608 18.7794 22.5373 19.4458 22.5381 20.1409C22.5381 20.3398 22.6171 20.5306 22.7578 20.6712C22.8984 20.8119 23.0892 20.8909 23.2881 20.8909C23.487 20.8909 23.6778 20.8119 23.8184 20.6712C23.9591 20.5306 24.0381 20.3398 24.0381 20.1409C24.0368 19.1383 23.6707 18.1705 23.0081 17.4182C22.3454 16.6659 21.4316 16.1805 20.4373 16.0526V14.9062C20.4373 14.7073 20.3582 14.5166 20.2176 14.3759C20.0769 14.2353 19.8862 14.1562 19.6873 14.1562C19.4883 14.1562 19.2976 14.2353 19.1569 14.3759C19.0163 14.5166 18.9373 14.7073 18.9373 14.9062V16.137C17.958 16.376 17.1003 16.9656 16.5264 17.7943C15.9524 18.623 15.7021 19.6332 15.8227 20.634C15.9433 21.6348 16.4264 22.5566 17.1807 23.2253C17.9351 23.8939 18.9083 24.2629 19.9163 24.2625C20.6089 24.2666 21.2718 24.5447 21.7601 25.0359C22.2484 25.5272 22.5225 26.1917 22.5225 26.8844C22.5225 27.577 22.2484 28.2415 21.7601 28.7328C21.2718 29.224 20.6089 29.5021 19.9163 29.5062V29.5059Z" />
      </svg>
      <span class="text-white group-hover:text-white">@lang('Payments')</span>
    </h3>


    <div class="min-w-full">
      <div class="overflow-auto border border-sh-border rounded-lg">
        <table class="min-w-full divide-y divide-sh-border">
          <thead>
            <tr>
              <th scope="col" class="py-3.5 px-4 text-lg font-normal text-left rtl:text-right text-main">
                #
              </th>

              <th scope="col" class="px-4 py-3.5 text-lg font-normal text-left rtl:text-right text-main">
                Date
              </th>

              <th scope="col" class="px-4 py-3.5 text-lg font-normal text-left rtl:text-right text-main">
                Status
              </th>

              <th scope="col" class="px-4 py-3.5 text-lg font-normal text-left rtl:text-right text-main">
                Customer
              </th>

              <th scope="col" class="px-4 py-3.5 text-lg font-normal text-left rtl:text-right text-main">
                Purchase
              </th>

              <th scope="col" class="px-4 py-3.5 text-lg font-normal text-left rtl:text-right text-main">

                <span class="sr-only">Actions</span>
              </th>
            </tr>
          </thead>

          <tbody class="bg-white divide-y divide-sh-border">
            <tr>
              <td class="px-4 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                <div class="inline-flex items-center gap-x-3">
                  <span>#3066</span>
                </div>
              </td>
              <td class="px-4 py-4 text-sm text-gray-500 whitespace-nowrap">Jan 6, 2022</td>
              <td class="px-4 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                <div class="inline-flex items-center px-3 py-1 rounded-full gap-x-2 text-emerald-500 bg-emerald-100/60">
                  <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M10 3L4.5 8.5L2 6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                  </svg>

                  <h2 class="text-sm font-normal">Paid</h2>
                </div>
              </td>
              <td class="px-4 py-4 text-sm text-gray-500 whitespace-nowrap">
                <div class="flex items-center gap-x-2">
                  <img class="object-cover w-8 h-8 rounded-full"
                    src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=880&q=80"
                    alt="">
                  <div>
                    <h2 class="text-sm font-medium text-gray-800 dark:text-white ">Arthur Melo</h2>
                    <p class="text-xs font-normal text-gray-600">authurmelo@example.com</p>
                  </div>
                </div>
              </td>
              <td class="px-4 py-4 text-sm text-gray-500 whitespace-nowrap">Monthly subscription</td>
              <td class="px-4 py-4 text-sm whitespace-nowrap">
                <div class="flex items-center gap-x-6">
                  <button class="text-gray-500 transition-colors duration-200 dark:hover:text-indigo-500 hover:text-indigo-500 focus:outline-none">
                    Archive
                  </button>

                  <button class="text-blue-500 transition-colors duration-200 hover:text-indigo-500 focus:outline-none">
                    Download
                  </button>
                </div>
              </td>
            </tr>

            <tr>
              <td class="px-4 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                <div class="inline-flex items-center gap-x-3">
                  <span>#3065</span>
                </div>
              </td>
              <td class="px-4 py-4 text-sm text-gray-500 whitespace-nowrap">Jan 5, 2022</td>
              <td class="px-4 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                <div class="inline-flex items-center px-3 py-1 text-red-500 rounded-full gap-x-2 bg-red-100/60">
                  <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M9 3L3 9M3 3L9 9" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                  </svg>

                  <h2 class="text-sm font-normal">Cancelled</h2>
                </div>
              </td>
              <td class="px-4 py-4 text-sm text-gray-500 whitespace-nowrap">
                <div class="flex items-center gap-x-2">
                  <img class="object-cover w-8 h-8 rounded-full"
                    src="https://images.unsplash.com/photo-1531590878845-12627191e687?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=764&q=80"
                    alt="">
                  <div>
                    <h2 class="text-sm font-medium text-gray-800 dark:text-white ">Andi Lane</h2>
                    <p class="text-xs font-normal text-gray-600">andi@example.com</p>
                  </div>
                </div>
              </td>
              <td class="px-4 py-4 text-sm text-gray-500 whitespace-nowrap">Monthly subscription</td>
              <td class="px-4 py-4 text-sm whitespace-nowrap">
                <div class="flex items-center gap-x-6">
                  <button class="text-gray-500 transition-colors duration-200 dark:hover:text-indigo-500 hover:text-indigo-500 focus:outline-none">
                    Archive
                  </button>

                  <button class="text-blue-500 transition-colors duration-200 hover:text-indigo-500 focus:outline-none">
                    Download
                  </button>
                </div>
              </td>
            </tr>

            <tr>
              <td class="px-4 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                <div class="inline-flex items-center gap-x-3">
                  <span>#3064</span>
                </div>
              </td>
              <td class="px-4 py-4 text-sm text-gray-500 whitespace-nowrap">Jan 5, 2022</td>
              <td class="px-4 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                <div class="inline-flex items-center px-3 py-1 rounded-full gap-x-2 text-emerald-500 bg-emerald-100/60">
                  <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M10 3L4.5 8.5L2 6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                  </svg>

                  <h2 class="text-sm font-normal">Paid</h2>
                </div>
              </td>
              <td class="px-4 py-4 text-sm text-gray-500 whitespace-nowrap">
                <div class="flex items-center gap-x-2">
                  <img class="object-cover w-8 h-8 rounded-full"
                    src="https://images.unsplash.com/photo-1580489944761-15a19d654956?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=761&q=80"
                    alt="">
                  <div>
                    <h2 class="text-sm font-medium text-gray-800 dark:text-white ">Kate Morrison</h2>
                    <p class="text-xs font-normal text-gray-600">kate@example.com</p>
                  </div>
                </div>
              </td>
              <td class="px-4 py-4 text-sm text-gray-500 whitespace-nowrap">Monthly subscription</td>
              <td class="px-4 py-4 text-sm whitespace-nowrap">
                <div class="flex items-center gap-x-6">
                  <button class="text-gray-500 transition-colors duration-200 dark:hover:text-indigo-500 hover:text-indigo-500 focus:outline-none">
                    Archive
                  </button>

                  <button class="text-blue-500 transition-colors duration-200 hover:text-indigo-500 focus:outline-none">
                    Download
                  </button>
                </div>
              </td>
            </tr>

            <tr>
              <td class="px-4 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                <div class="inline-flex items-center gap-x-3">
                  <span>#3063</span>
                </div>
              </td>
              <td class="px-4 py-4 text-sm text-gray-500 whitespace-nowrap">Jan 4, 2022</td>
              <td class="px-4 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                <div class="inline-flex items-center px-3 py-1 rounded-full gap-x-2 text-emerald-500 bg-emerald-100/60">
                  <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M10 3L4.5 8.5L2 6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                  </svg>

                  <h2 class="text-sm font-normal">Paid</h2>
                </div>
              </td>
              <td class="px-4 py-4 text-sm text-gray-500 whitespace-nowrap">
                <div class="flex items-center gap-x-2">
                  <img class="object-cover w-8 h-8 rounded-full"
                    src="https://images.unsplash.com/photo-1506863530036-1efeddceb993?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1344&q=80"
                    alt="">
                  <div>
                    <h2 class="text-sm font-medium text-gray-800 dark:text-white ">Candice Wu</h2>
                    <p class="text-xs font-normal text-gray-600">candice@example.com</p>
                  </div>
                </div>
              </td>
              <td class="px-4 py-4 text-sm text-gray-500 whitespace-nowrap">Monthly subscription</td>
              <td class="px-4 py-4 text-sm whitespace-nowrap">
                <div class="flex items-center gap-x-6">
                  <button class="text-gray-500 transition-colors duration-200 dark:hover:text-indigo-500 hover:text-indigo-500 focus:outline-none">
                    Archive
                  </button>

                  <button class="text-blue-500 transition-colors duration-200 hover:text-indigo-500 focus:outline-none">
                    Download
                  </button>
                </div>
              </td>
            </tr>

            <tr>
              <td class="px-4 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                <div class="inline-flex items-center gap-x-3">
                  <span>#3062</span>
                </div>
              </td>
              <td class="px-4 py-4 text-sm text-gray-500 whitespace-nowrap">Jan 4, 2022</td>
              <td class="px-4 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                <div class="inline-flex items-center px-3 py-1 text-gray-500 rounded-full gap-x-2 bg-gray-100/60">
                  <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M4.5 7L2 4.5M2 4.5L4.5 2M2 4.5H8C8.53043 4.5 9.03914 4.71071 9.41421 5.08579C9.78929 5.46086 10 5.96957 10 6.5V10" stroke="#667085" stroke-width="1.5"
                      stroke-linecap="round" stroke-linejoin="round" />
                  </svg>

                  <h2 class="text-sm font-normal">Refunded</h2>
                </div>
              </td>
              <td class="px-4 py-4 text-sm text-gray-500 whitespace-nowrap">
                <div class="flex items-center gap-x-2">
                  <img class="object-cover w-8 h-8 rounded-full"
                    src="https://images.unsplash.com/photo-1528892952291-009c663ce843?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=644&q=80"
                    alt="">
                  <div>
                    <h2 class="text-sm font-medium text-gray-800 dark:text-white ">Orlando Diggs</h2>
                    <p class="text-xs font-normal text-gray-600">orlando@example.com</p>
                  </div>
                </div>
              </td>
              <td class="px-4 py-4 text-sm text-gray-500 whitespace-nowrap">Monthly subscription</td>
              <td class="px-4 py-4 text-sm whitespace-nowrap">
                <div class="flex items-center gap-x-6">
                  <button class="text-gray-500 transition-colors duration-200 dark:hover:text-indigo-500 hover:text-indigo-500 focus:outline-none">
                    Archive
                  </button>

                  <button class="text-blue-500 transition-colors duration-200 hover:text-indigo-500 focus:outline-none">
                    Download
                  </button>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection

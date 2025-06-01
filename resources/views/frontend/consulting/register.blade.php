@extends('frontend.layouts.app')

@push('title', __('Free consultation'))

@push('css')
    <style>
        .page-header{
            height: 430px;
            background-image: url("{{asset('frontend/consulting-bg.jpeg')}}")
        }
        .page-header > svg{
            margin: 0 auto 20px;
        }
    </style>

@endpush
@section('content')

    <section class="page-header content-center grid text-center items-center">
        <svg width="91" height="12" viewBox="0 0 91 12" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M90.001 1L25.1051 1" stroke="white" stroke-width="2" stroke-linecap="round"/>
            <path d="M75.167 11L1.00033 11" stroke="#FF8216" stroke-width="2" stroke-linecap="round"/>
        </svg>
        <h1 class="text-white text-4xl bold">
            @lang("Free consultation")
        </h1>
        <nav class="flex items-center text-sm m-auto text-white space-x-2 mt-5">
            <a href="{{route('frontend.home')}}" class="text-gray-200 text-1xl mx-2"> @lang('Home') </a>
            <span class="text-gray-200">
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_601_83)">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M19.6337 0.292192C19.4361 0.104594 19.1741 0 18.9017 0C18.6292 0 18.3672 0.104594 18.1697 0.292192L9.60668 8.55619C9.415 8.73835 9.26237 8.9576 9.15808 9.20059C9.05378 9.44359 9 9.70526 9 9.96969C9 10.2341 9.05378 10.4958 9.15808 10.7388C9.26237 10.9818 9.415 11.201 9.60668 11.3832L18.2317 19.7082C18.6317 20.0932 19.2797 20.0982 19.6857 19.7182C19.784 19.6277 19.8626 19.5179 19.9167 19.3957C19.9708 19.2735 19.9992 19.1415 20.0001 19.0079C20.0011 18.8742 19.9745 18.7418 19.9222 18.6189C19.8698 18.496 19.7927 18.3851 19.6957 18.2932L11.8027 10.6762C11.7068 10.5851 11.6304 10.4755 11.5782 10.3539C11.526 10.2324 11.4991 10.1015 11.4991 9.96919C11.4991 9.83691 11.526 9.70602 11.5782 9.58448C11.6304 9.46293 11.7068 9.35328 11.8027 9.26219L19.6327 1.70519C19.7286 1.61419 19.8049 1.50462 19.8571 1.38316C19.9093 1.2617 19.9362 1.13089 19.9362 0.998692C19.9362 0.866496 19.9093 0.735683 19.8571 0.614221C19.8049 0.49276 19.7296 0.383192 19.6337 0.292192Z" fill="white"/>
                    </g>
                    <g clip-path="url(#clip1_601_83)">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M10.6337 0.292192C10.4361 0.104594 10.1741 0 9.90168 0C9.62925 0 9.36722 0.104594 9.16968 0.292192L0.606677 8.55619C0.414997 8.73835 0.262371 8.9576 0.158076 9.20059C0.0537822 9.44359 0 9.70526 0 9.96969C0 10.2341 0.0537822 10.4958 0.158076 10.7388C0.262371 10.9818 0.414997 11.201 0.606677 11.3832L9.23168 19.7082C9.63168 20.0932 10.2797 20.0982 10.6857 19.7182C10.784 19.6277 10.8626 19.5179 10.9167 19.3957C10.9708 19.2735 10.9992 19.1415 11.0001 19.0079C11.0011 18.8742 10.9745 18.7418 10.9222 18.6189C10.8698 18.496 10.7927 18.3851 10.6957 18.2932L2.80268 10.6762C2.70676 10.5851 2.63038 10.4755 2.57819 10.3539C2.52599 10.2324 2.49908 10.1015 2.49908 9.96919C2.49908 9.83691 2.52599 9.70602 2.57819 9.58448C2.63038 9.46293 2.70676 9.35328 2.80268 9.26219L10.6327 1.70519C10.7286 1.61419 10.8049 1.50462 10.8571 1.38316C10.9093 1.2617 10.9362 1.13089 10.9362 0.998692C10.9362 0.866496 10.9093 0.735683 10.8571 0.614221C10.8049 0.49276 10.7296 0.383192 10.6337 0.292192Z" fill="white"/>
                    </g>
                    <defs>
                    <clipPath id="clip0_601_83">
                    <rect width="11" height="20" fill="white" transform="translate(9)"/>
                    </clipPath>
                    <clipPath id="clip1_601_83">
                    <rect width="11" height="20" fill="white"/>
                    </clipPath>
                    </defs>
                </svg>

            </span>
            <span class="text-gray-200  text-1xl">@lang("Free consultation")</span>
        </nav>
    </section>

    <section>
        <div class="relative" style="top: -115px">
            <div class="container">
                <div class="">
                    <div class="grid grid-cols-2 bg-gray-200 rounded-xl">
                        <div class="px-10 py-16 pl-36">
                            <h1 class="text-blue-950 text-4xl font-semibold mb-10">@lang('Book your free consultation')</h1>
                            <form action="{{route('frontend.consulting.register.store')}}" method="post">
                                @csrf
                                <div class="grid grid-rows-1 mb-6">
                                    <label for="first_name">@lang('First Name')</label>
                                    <input required name="first_name" id="first_name" class="text-sm mt-3 text-gray-600  form-input px-4 py-3 rounded-xl bg-gray-200 border border-gray-400" placeholder="@lang('First Name')">
                                </div>
                                <div class="grid grid-rows-1 mb-6">
                                    <label for="last_name">@lang('Last Name')</label>
                                    <input required name="last_name" id="last_name" class="text-sm mt-3 text-gray-600  form-input px-4 py-3 rounded-xl bg-gray-200 border border-gray-400" placeholder="@lang('Last Name')">
                                </div>
                                <div class="grid grid-rows-1 mb-6">
                                    <label for="mobile">@lang('Mobile')</label>
                                    <input required name="mobile" id="mobile" class="text-sm mt-3 text-gray-600  form-input px-4 py-3 rounded-xl bg-gray-200 border border-gray-400" placeholder="@lang('First Name')">
                                </div>
                                <div class="grid grid-rows-1 mb-6">
                                    <label for="email">@lang('Email')</label>
                                    <input required name="email" id="email" class="text-sm mt-3 text-gray-600  form-input px-4 py-3 rounded-xl bg-gray-200 border border-gray-400" placeholder="@lang('Email')">
                                </div>
                                <div class="grid grid-rows-1 mb-6">
                                    <label for="service">@lang('Service')</label>
                                    <select name="service_id" class="form-select px-4 py-3 rounded-xl text-sm mt-3  bg-gray-200 border border-gray-400 text-gray-600" id="service">
                                        @foreach($services as $row)
                                            <option value="{{$row->id}}">{{$row->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="grid grid-rows-1 mb-6">
                                    <label for="description">@lang('Description')</label>
                                    <textarea rows="10"  name="description" id="description" class="text-sm mt-3 text-gray-600  form-input px-4 py-3 rounded-xl bg-gray-200 border border-gray-400">@lang('Description')</textarea>
{{--                                    <input name="email" id="email" class="text-sm mt-3 text-gray-600  form-input px-4 py-3 rounded-xl bg-gray-200 border border-gray-400" placeholder="@lang('Email')">--}}
                                </div>
                                <button class="py-4 px-16 bg-orange-500 text-white rounded-xl">
                                    @lang('Next')
                                </button>
                            </form>

                        </div>
                        <div class="md:none">
                            <img src="{{asset('/frontend/consulting.jpeg')}}" alt="" class="w-full h-full block object-cover rounded-se-lg" />
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>

@endsection

@push('js')

@endpush
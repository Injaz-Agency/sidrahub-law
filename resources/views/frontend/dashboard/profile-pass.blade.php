@extends('frontend.layouts.dash')

@push('title', __('Profile'))



@section('content')
  {{-- <svg xmlns="http://www.w3.org/2000/svg"
    viewBox="0 0 448 512">
    <path
      d="M201.4 137.4c12.5-12.5 32.8-12.5 45.3 0l160 160c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L224 205.3 86.6 342.6c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3l160-160z" />
  </svg> --}}

  <section>
    <div class="py-14 px-8 rounded-xl bg-white shadow-login-box">
      <h3 class="flex items-center text-2xl mb-4">@lang('Profile Settings')</h3>
      <p>@lang('Joining date'): Dec 25, 2023</p>

      <div class="py-6 flex items-center border-b border-sh-border space-x-8 rtl:space-x-reverse">
        <a href="{{ route('client.profile.index') }}" class="inline-flex items-center text-main hover:text-second group">
          <svg class="w-4 h-4 me-2 fill-main group-hover:fill-second " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
            <path
              d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z" />
          </svg>
          <span>@lang('Personal Information')</span>
        </a>
        <a href="{{ route('client.profile.pass') }}" class="inline-flex items-center text-main hover:text-second group profile-active">
          <svg class="w-4 h-4 me-2 fill-main group-hover:fill-second " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
            <path
              d="M224 64c-44.2 0-80 35.8-80 80v48H384c35.3 0 64 28.7 64 64V448c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V256c0-35.3 28.7-64 64-64H80V144C80 64.5 144.5 0 224 0c57.5 0 107 33.7 130.1 82.3c7.6 16 .8 35.1-15.2 42.6s-35.1 .8-42.6-15.2C283.4 82.6 255.9 64 224 64zm32 320c17.7 0 32-14.3 32-32s-14.3-32-32-32H192c-17.7 0-32 14.3-32 32s14.3 32 32 32h64z" />
          </svg>
          <span>@lang('Change Password')</span>
        </a>
      </div>

      <form class="flex flex-col w-full py-6 px-6 space-y-5 lg:space-y-8" method="post" action="{{ route('frontend.login.store') }}">
        @csrf

        <div class="grid grid-cols-2 gap-5 lg:gap-8">
          <div class="col-span-2">
            <label for="password" class="text-sm lg:text-base">@lang('كلمة المرور الحالية')</label>
            <div class="mt-3">
              <input id="password" required name="password" type="password" autocomplete="current-password" placeholder="*********"
                class="@error('password') is-invalid @enderror w-full px-4 py-2.5 text-sm lg: transition duration-300 ease-in-out transform border border-sh-border rounded-lg text-dark-gary">
              @error('password')
                <div class="text-red-600">{{ $message }}</div>
              @enderror
            </div>
          </div>

          <div>
            <label for="password" class="text-sm lg:text-base">@lang('كلمة المرور الجديدة')</label>
            <div class="mt-3">
              <input id="password" required name="password" type="password" autocomplete="current-password" placeholder="*********"
                class="@error('password') is-invalid @enderror w-full px-4 py-2.5 text-sm lg: transition duration-300 ease-in-out transform border border-sh-border rounded-lg text-dark-gary">
              @error('password')
                <div class="text-red-600">{{ $message }}</div>
              @enderror
            </div>
          </div>

          <div>
            <label for="password" class="text-sm lg:text-base">@lang('تأكيد كلمة المرور')</label>
            <div class="mt-3">
              <input id="password" required name="password" type="password" autocomplete="current-password" placeholder="*********"
                class="@error('password') is-invalid @enderror w-full px-4 py-2.5 text-sm lg: transition duration-300 ease-in-out transform border border-sh-border rounded-lg text-dark-gary">
              @error('password')
                <div class="text-red-600">{{ $message }}</div>
              @enderror
            </div>
          </div>
        </div>

        <div class="flex items-center justify-end mt-10">
          <button type="submit"
            class="inline-flex items-center justify-center px-10 py-2 lg:py-3 text-sm lg:text-base font-medium uppercase text-center text-white bg-main rounded-xl transition duration-200 ease-in-out transform">
            @lang('Save Changes')
          </button>
        </div>
      </form>


    </div>
  </section>
@endsection

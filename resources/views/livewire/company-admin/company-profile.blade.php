<div>
  @if (session()->has('message'))
  <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded-lg mb-6">
    {{ session('message') }}
  </div>
  @endif

  @if ($company)
  <div class="bg-white rounded-xl shadow-small-box p-6 mb-6">
    <div class="flex items-center justify-between mb-6">
      <h3 class="text-xl font-bold text-main">{{ __('Company Profile') }}</h3>
      @if (!$isEditing)
      <button wire:click="startEditing"
        class="bg-second text-white px-4 py-2 rounded-lg hover:bg-orange-600 transition-colors">
        {{ __('Edit Profile') }}
      </button>
      @endif
    </div>

    @if ($isEditing)
    <!-- Edit Form -->
    <form wire:submit.prevent="save" class="space-y-6">
      <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <!-- Company Name (English) -->
        <div>
          <label class="block text-sm font-medium text-main mb-2">{{ __('Company Name (English)') }} *</label>
          <input type="text" wire:model="name_en"
            class="w-full px-3 py-2 border border-sh-border rounded-lg focus:ring-2 focus:ring-second focus:border-transparent">
          @error('name_en') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <!-- Company Name (Arabic) -->
        <div>
          <label class="block text-sm font-medium text-main mb-2">{{ __('Company Name (Arabic)') }} *</label>
          <input type="text" wire:model="name_ar"
            class="w-full px-3 py-2 border border-sh-border rounded-lg focus:ring-2 focus:ring-second focus:border-transparent">
          @error('name_ar') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <!-- Registration Number -->
        <div>
          <label class="block text-sm font-medium text-main mb-2">{{ __('Registration Number') }}</label>
          <input type="text" wire:model="registration_number"
            class="w-full px-3 py-2 border border-sh-border rounded-lg focus:ring-2 focus:ring-second focus:border-transparent">
          @error('registration_number') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <!-- Legal Entity -->
        <div>
          <label class="block text-sm font-medium text-main mb-2">{{ __('Legal Entity') }}</label>
          <select wire:model="legal_entity"
            class="w-full px-3 py-2 border border-sh-border rounded-lg focus:ring-2 focus:ring-second focus:border-transparent">
            <option value="">{{ __('Please select') }}</option>
            <option value="individual_lawyer">{{ __('Individual Lawyer') }}</option>
            <option value="law_firm">{{ __('Law Firm') }}</option>
          </select>
          @error('legal_entity') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <!-- License -->
        <div>
          <label class="block text-sm font-medium text-main mb-2">{{ __('License') }}</label>
          <div class="flex items-center space-x-4">
            @if ($license)
            <div class="flex items-center space-x-2">
              <svg class="w-5 h-5 text-red-500" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd"
                  d="M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4zm2 6a1 1 0 011-1h6a1 1 0 110 2H7a1 1 0 01-1-1zm1 3a1 1 0 100 2h6a1 1 0 100-2H7z"
                  clip-rule="evenodd" />
              </svg>
              <span class="text-sm text-dark-gary">{{ __('Current License') }}</span>
            </div>
            @endif
            <input type="file" wire:model="newLicense" accept=".pdf"
              class="block w-full text-sm text-dark-gary file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-medium file:bg-second file:text-white hover:file:bg-orange-600">
          </div>
          @error('newLicense') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <!-- Country -->
        <div>
          <label class="block text-sm font-medium text-main mb-2">{{ __('Country') }} *</label>
          <select wire:model="country_id"
            class="w-full px-3 py-2 border border-sh-border rounded-lg focus:ring-2 focus:ring-second focus:border-transparent">
            <option value="">{{ __('Select Country') }}</option>
            @foreach($countries as $country)
            <option value="{{ $country->id }}">{{ $country->name_en }}</option>
            @endforeach
          </select>
          @error('country_id') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>


      </div>

      <!-- Address -->
      <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div>
          <label class="block text-sm font-medium text-main mb-2">{{ __('Address (English)') }}</label>
          <textarea wire:model="address_en" rows="3"
            class="w-full px-3 py-2 border border-sh-border rounded-lg focus:ring-2 focus:ring-second focus:border-transparent"></textarea>
          @error('address_en') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <div>
          <label class="block text-sm font-medium text-main mb-2">{{ __('Address (Arabic)') }}</label>
          <textarea wire:model="address_ar" rows="3"
            class="w-full px-3 py-2 border border-sh-border rounded-lg focus:ring-2 focus:ring-second focus:border-transparent"></textarea>
          @error('address_ar') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>
      </div>

      <!-- About -->
      <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div>
          <label class="block text-sm font-medium text-main mb-2">{{ __('About (English)') }}</label>
          <textarea wire:model="about_en" rows="4"
            class="w-full px-3 py-2 border border-sh-border rounded-lg focus:ring-2 focus:ring-second focus:border-transparent"></textarea>
          @error('about_en') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <div>
          <label class="block text-sm font-medium text-main mb-2">{{ __('About (Arabic)') }}</label>
          <textarea wire:model="about_ar" rows="4"
            class="w-full px-3 py-2 border border-sh-border rounded-lg focus:ring-2 focus:ring-second focus:border-transparent"></textarea>
          @error('about_ar') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>
      </div>

      <!-- Company Logo -->
      <div>
        <label class="block text-sm font-medium text-main mb-2">{{ __('Company Logo') }}</label>
        <div class="flex items-center space-x-4">
          @if ($image)
          <div class="w-20 h-20 rounded-lg overflow-hidden border border-sh-border">
            <img src="{{ asset('storage/' . $image) }}" alt="{{ $name_en }}" class="w-full h-full object-cover">
          </div>
          @endif
          <input type="file" wire:model="newImage" accept="image/*"
            class="block w-full text-sm text-dark-gary file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-medium file:bg-second file:text-white hover:file:bg-orange-600">
        </div>
        @error('newImage') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
      </div>

      <!-- Form Actions -->
      <div class="flex justify-end space-x-4 pt-6 border-t border-sh-border">
        <button type="button" wire:click="cancelEditing"
          class="px-6 py-2 border border-sh-border text-main rounded-lg hover:bg-gray-50 transition-colors">
          {{ __('Cancel') }}
        </button>
        <button type="submit" class="px-6 py-2 bg-second text-white rounded-lg hover:bg-orange-600 transition-colors">
          {{ __('Save Changes') }}
        </button>
      </div>
    </form>
    @else
    <!-- View Mode -->
    <div class="space-y-6">
      <!-- Company Logo and Basic Info -->
      <div class="flex items-start space-x-6">
        @if ($image)
        <div class="w-24 h-24 rounded-lg overflow-hidden border border-sh-border flex-shrink-0">
          <img src="{{ asset('storage/' . $image) }}" alt="{{ $name_en }}" class="w-full h-full object-cover">
        </div>
        @endif
        <div class="flex-1">
          <h4 class="text-lg font-semibold text-main mb-2">
            {{ App::currentLocale() == 'ar' ? $name_ar : $name_en }}
          </h4>
          <div class="flex items-center space-x-4">
            <span
              class="px-3 py-1 rounded-full text-sm font-medium {{ $is_active ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800' }}">
              {{ $is_active ? __('Active') : __('Inactive') }}
            </span>
            @if($country)
            <span class="text-dark-gary">{{ $country->name_en }}</span>
            @endif
          </div>
        </div>
      </div>

      <!-- Company Details Grid -->
      <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div>
          <h5 class="font-medium text-main mb-3">{{ __('Company Information') }}</h5>
          <div class="space-y-3">
            <div>
              <span class="text-sm font-medium text-dark-gary">{{ __('Registration Number') }}:</span>
              <p class="text-main">{{ $registration_number ?: __('Not provided') }}</p>
            </div>
            <div>
              <span class="text-sm font-medium text-dark-gary">{{ __('Legal Entity') }}:</span>
              <p class="text-main">{{ $legal_entity ?: __('Not provided') }}</p>
            </div>
            <div>
              <span class="text-sm font-medium text-dark-gary">{{ __('License') }}:</span>
              @if ($license)
              <div class="flex items-center space-x-2 mt-1">
                <svg class="w-4 h-4 text-red-500" fill="currentColor" viewBox="0 0 20 20">
                  <path fill-rule="evenodd"
                    d="M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4zm2 6a1 1 0 011-1h6a1 1 0 110 2H7a1 1 0 01-1-1zm1 3a1 1 0 100 2h6a1 1 0 100-2H7z"
                    clip-rule="evenodd" />
                </svg>
                <a href="{{ asset('storage/' . $license) }}" target="_blank" class="text-second hover:underline">
                  {{ __('View License') }}
                </a>
              </div>
              @else
              <p class="text-main">{{ __('Not provided') }}</p>
              @endif
            </div>
          </div>
        </div>

        <div>
          <h5 class="font-medium text-main mb-3">{{ __('Contact Information') }}</h5>
          <div class="space-y-3">
            <div>
              <span class="text-sm font-medium text-dark-gary">{{ __('Address') }}:</span>
              <p class="text-main">
                {{ App::currentLocale() == 'ar' ? ($address_ar ?: __('Not provided')) : ($address_en ?:
                __('Not provided')) }}
              </p>
            </div>
            <div>
              <span class="text-sm font-medium text-dark-gary">{{ __('Country') }}:</span>
              <p class="text-main">{{ $country ? $country->name_en : __('Not provided') }}</p>
            </div>
          </div>
        </div>
      </div>

      <!-- About Section -->
      @if($about_en || $about_ar)
      <div>
        <h5 class="font-medium text-main mb-3">{{ __('About Company') }}</h5>
        <p class="text-dark-gary leading-relaxed">
          {{ App::currentLocale() == 'ar' ? $about_ar : $about_en }}
        </p>
      </div>
      @endif
    </div>
    @endif
  </div>
  @else
  <div class="bg-white rounded-xl shadow-small-box p-6 text-center">
    <svg class="w-16 h-16 text-dark-gary mx-auto mb-4" fill="currentColor" viewBox="0 0 20 20">
      <path fill-rule="evenodd"
        d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
        clip-rule="evenodd" />
    </svg>
    <h3 class="text-xl font-bold text-main mb-2">{{ __('No Company Found') }}</h3>
    <p class="text-dark-gary">{{ __('You don\'t have any company associated with your account.') }}</p>
  </div>
  @endif
</div>
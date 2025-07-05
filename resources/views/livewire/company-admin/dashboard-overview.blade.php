<div>
    @if ($company)
    <!-- Company Status Widget -->
    <div class="bg-white rounded-xl shadow-small-box p-6 mb-6">
        <div class="flex items-center justify-between">
            <div>
                <h3 class="text-xl font-bold text-main">{{ __('Company Status') }}</h3>
                <p class="text-dark-gary">{{ $company->name_en }}</p>
            </div>
            <div class="flex items-center">
                <span
                    class="px-3 py-1 rounded-full text-sm font-medium {{ $company->is_active ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800' }}">
                    {{ $company->is_active ? __('Active') : __('Inactive') }}
                </span>
            </div>
        </div>

        @if ($company->image)
        <div class="mt-4">
            <img src="{{ asset('storage/' . $company->image) }}" alt="{{ $company->name_en }}"
                class="w-20 h-20 rounded-lg object-cover">
        </div>
        @endif
    </div>

    <!-- Statistics Grid -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
        <!-- Total Professionals -->
        <div class="bg-white rounded-xl shadow-small-box p-6">
            <div class="flex items-center">
                <div class="p-3 bg-blue-100 rounded-lg">
                    <svg class="w-6 h-6 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <div class="ml-4">
                    <p class="text-sm font-medium text-dark-gary">{{ __('Total Professionals') }}</p>
                    <p class="text-2xl font-bold text-main">{{ $totalProfessionals }}</p>
                </div>
            </div>
        </div>

        <!-- Active Professionals -->
        <div class="bg-white rounded-xl shadow-small-box p-6">
            <div class="flex items-center">
                <div class="p-3 bg-green-100 rounded-lg">
                    <svg class="w-6 h-6 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                            clip-rule="evenodd" />
                    </svg>
                </div>
                <div class="ml-4">
                    <p class="text-sm font-medium text-dark-gary">{{ __('Active Professionals') }}</p>
                    <p class="text-2xl font-bold text-main">{{ $activeProfessionals }}</p>
                </div>
            </div>
        </div>

        <!-- Inactive Professionals -->
        <div class="bg-white rounded-xl shadow-small-box p-6">
            <div class="flex items-center">
                <div class="p-3 bg-red-100 rounded-lg">
                    <svg class="w-6 h-6 text-red-600" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z"
                            clip-rule="evenodd" />
                    </svg>
                </div>
                <div class="ml-4">
                    <p class="text-sm font-medium text-dark-gary">{{ __('Inactive Professionals') }}</p>
                    <p class="text-2xl font-bold text-main">{{ $inactiveProfessionals }}</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Company Information -->
    <div class="bg-white rounded-xl shadow-small-box p-6">
        <h3 class="text-xl font-bold text-main mb-4">{{ __('Company Information') }}</h3>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div>
                <h4 class="font-medium text-main mb-2">{{ __('Registration Number') }}</h4>
                <p class="text-dark-gary">{{ $company->registration_number ?? __('Not provided') }}</p>
            </div>
            <div>
                <h4 class="font-medium text-main mb-2">{{ __('Legal Entity') }}</h4>
                <p class="text-dark-gary">{{ $company->legal_entity ?? __('Not provided') }}</p>
            </div>
            <div>
                <h4 class="font-medium text-main mb-2">{{ __('Country') }}</h4>
                <p class="text-dark-gary">{{ $company->country->name_en ?? __('Not provided') }}</p>
            </div>
            <div>
                <h4 class="font-medium text-main mb-2">{{ __('About') }}</h4>
                <p class="text-dark-gary">{{ Str::limit($company->about_en ?? __('No description available'), 100) }}
                </p>
            </div>
        </div>
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
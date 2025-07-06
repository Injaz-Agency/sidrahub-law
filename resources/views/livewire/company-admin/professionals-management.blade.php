<div>
  @if ($company)
  <!-- Header with Search and Filters -->
  <div class="bg-white rounded-xl shadow-small-box p-6 mb-6">
    <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
      <div>
        <h2 class="text-2xl font-bold text-main">{{ __('Professionals Management') }}</h2>
        <p class="text-dark-gary">{{ __('Manage your company professionals') }}</p>
      </div>
      <button wire:click="openCreateModal"
        class="bg-second text-white px-6 py-3 rounded-lg font-medium hover:bg-orange-600 transition-colors">
        {{ __('Add Professional') }}
      </button>
    </div>

    <!-- Search and Filters -->
    <div class="mt-6 grid grid-cols-1 md:grid-cols-3 gap-4">
      <div>
        <label class="block text-sm font-medium text-main mb-2">{{ __('Search') }}</label>
        <input wire:model.live="search" type="text" placeholder="{{ __('Search professionals...') }}"
          class="w-full px-4 py-2 border border-sh-border rounded-lg focus:ring-2 focus:ring-second focus:border-transparent">
      </div>
      <div>
        <label class="block text-sm font-medium text-main mb-2">{{ __('Status') }}</label>
        <select wire:model.live="statusFilter"
          class="w-full px-4 py-2 border border-sh-border rounded-lg focus:ring-2 focus:ring-second focus:border-transparent">
          <option value="">{{ __('All') }}</option>
          <option value="1">{{ __('Active') }}</option>
          <option value="0">{{ __('Inactive') }}</option>
        </select>
      </div>
      <div class="flex items-end">
        <div class="text-sm text-dark-gary">
          {{ __('Total:') }} {{ $professionals->total() }} {{ __('professionals') }}
        </div>
      </div>
    </div>
  </div>

  <!-- Professionals Table -->
  <div class="bg-white rounded-xl shadow-small-box overflow-hidden">
    <div class="overflow-x-auto">
      <table class="w-full">
        <thead class="bg-sh-background">
          <tr>
            <th class="px-6 py-4 text-left text-sm font-medium text-main">{{ __('Image') }}</th>
            <th class="px-6 py-4 text-left text-sm font-medium text-main">{{ __('Name') }}</th>
            <th class="px-6 py-4 text-left text-sm font-medium text-main">{{ __('Job Title') }}</th>
            <th class="px-6 py-4 text-left text-sm font-medium text-main">{{ __('Type') }}</th>
            <th class="px-6 py-4 text-left text-sm font-medium text-main">{{ __('Country') }}</th>
            <th class="px-6 py-4 text-left text-sm font-medium text-main">{{ __('Status') }}</th>
            <th class="px-6 py-4 text-left text-sm font-medium text-main">{{ __('Actions') }}</th>
          </tr>
        </thead>
        <tbody class="divide-y divide-sh-border">
          @forelse($professionals as $professional)
          <tr class="hover:bg-gray-50">
            <td class="px-6 py-4">
              @if ($professional->image)
              <img src="{{ asset('storage/' . $professional->image) }}" alt="{{ $professional->name_en }}"
                class="w-12 h-12 rounded-lg object-cover">
              @else
              <div class="w-12 h-12 bg-gray-200 rounded-lg flex items-center justify-center">
                <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                  <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                    clip-rule="evenodd" />
                </svg>
              </div>
              @endif
            </td>
            <td class="px-6 py-4">
              <div>
                <div class="font-medium text-main">{{ $professional->name_en }}</div>
                <div class="text-sm text-dark-gary">{{ $professional->name_ar }}</div>
              </div>
            </td>
            <td class="px-6 py-4">
              <div>
                <div class="font-medium text-main">{{ $professional->job_title_en }}</div>
                <div class="text-sm text-dark-gary">{{ $professional->job_title_ar }}</div>
              </div>
            </td>
            <td class="px-6 py-4">
              <span class="px-3 py-1 rounded-full text-xs font-medium bg-blue-100 text-blue-800">
                {{ ucfirst($professional->type) }}
              </span>
            </td>
            <td class="px-6 py-4 text-dark-gary">
              {{ $professional->country->name_en ?? __('N/A') }}
            </td>
            <td class="px-6 py-4">
              <button wire:click="toggleStatus({{ $professional->id }})"
                class="px-3 py-1 rounded-full text-xs font-medium {{ $professional->is_active ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800' }}">
                {{ $professional->is_active ? __('Active') : __('Inactive') }}
              </button>
            </td>
            <td class="px-6 py-4">
              <div class="flex space-x-2">
                <button wire:click="openViewModal({{ $professional->id }})" class="text-blue-600 hover:text-blue-800">
                  <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
                    <path fill-rule="evenodd"
                      d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z"
                      clip-rule="evenodd" />
                  </svg>
                </button>
                <button wire:click="openEditModal({{ $professional->id }})" class="text-green-600 hover:text-green-800">
                  <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                    <path
                      d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z" />
                  </svg>
                </button>
                <button wire:click="deleteProfessional({{ $professional->id }})"
                  onclick="return confirm('{{ __('Are you sure you want to delete this professional?') }}')"
                  class="text-red-600 hover:text-red-800">
                  <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd"
                      d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                      clip-rule="evenodd" />
                  </svg>
                </button>
              </div>
            </td>
          </tr>
          @empty
          <tr>
            <td colspan="7" class="px-6 py-8 text-center text-dark-gary">
              {{ __('No professionals found.') }}
            </td>
          </tr>
          @endforelse
        </tbody>
      </table>
    </div>

    <!-- Pagination -->
    @if ($professionals->hasPages())
    <div class="px-6 py-4 border-t border-sh-border">
      {{ $professionals->links() }}
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

  <!-- Success/Error Messages -->
  @if (session()->has('success'))
  <div class="fixed top-4 right-4 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded-lg z-50">
    {{ session('success') }}
  </div>
  @endif

  @if (session()->has('error'))
  <div class="fixed top-4 right-4 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded-lg z-50">
    {{ session('error') }}
  </div>
  @endif

  <!-- Create Professional Modal -->
  @if ($showCreateModal)
  <div class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">
    <div class="bg-white rounded-xl p-6 w-full max-w-2xl max-h-screen overflow-y-auto">
      <div class="flex items-center justify-between mb-6">
        <h3 class="text-xl font-bold text-main">{{ __('Add New Professional') }}</h3>
        <button wire:click="$set('showCreateModal', false)" class="text-dark-gary hover:text-main">
          <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
            <path fill-rule="evenodd"
              d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
              clip-rule="evenodd" />
          </svg>
        </button>
      </div>

      <form wire:submit="createProfessional" class="space-y-4">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
          <div>
            <label class="block text-sm font-medium text-main mb-2">{{ __('Name (English)') }}</label>
            <input wire:model="name_en" type="text"
              class="w-full px-4 py-2 border border-sh-border rounded-lg focus:ring-2 focus:ring-second focus:border-transparent">
            @error('name_en')
            <span class="text-red-600 text-sm">{{ $message }}</span>
            @enderror
          </div>
          <div>
            <label class="block text-sm font-medium text-main mb-2">{{ __('Name (Arabic)') }}</label>
            <input wire:model="name_ar" type="text"
              class="w-full px-4 py-2 border border-sh-border rounded-lg focus:ring-2 focus:ring-second focus:border-transparent">
            @error('name_ar')
            <span class="text-red-600 text-sm">{{ $message }}</span>
            @enderror
          </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
          <div>
            <label class="block text-sm font-medium text-main mb-2">{{ __('Job Title (English)') }}</label>
            <input wire:model="job_title_en" type="text"
              class="w-full px-4 py-2 border border-sh-border rounded-lg focus:ring-2 focus:ring-second focus:border-transparent">
            @error('job_title_en')
            <span class="text-red-600 text-sm">{{ $message }}</span>
            @enderror
          </div>
          <div>
            <label class="block text-sm font-medium text-main mb-2">{{ __('Job Title (Arabic)') }}</label>
            <input wire:model="job_title_ar" type="text"
              class="w-full px-4 py-2 border border-sh-border rounded-lg focus:ring-2 focus:ring-second focus:border-transparent">
            @error('job_title_ar')
            <span class="text-red-600 text-sm">{{ $message }}</span>
            @enderror
          </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
          <div>
            <label class="block text-sm font-medium text-main mb-2">{{ __('Type') }}</label>
            <select wire:model="type"
              class="w-full px-4 py-2 border border-sh-border rounded-lg focus:ring-2 focus:ring-second focus:border-transparent">
              <option value="lawyer">{{ __('Lawyer') }}</option>
              <option value="consultant">{{ __('Consultant') }}</option>
              <option value="expert">{{ __('Expert') }}</option>
            </select>
            @error('type')
            <span class="text-red-600 text-sm">{{ $message }}</span>
            @enderror
          </div>
          <div>
            <label class="block text-sm font-medium text-main mb-2">{{ __('Country') }}</label>
            <select wire:model="country_id"
              class="w-full px-4 py-2 border border-sh-border rounded-lg focus:ring-2 focus:ring-second focus:border-transparent">
              <option value="">{{ __('Select Country') }}</option>
              @foreach ($countries as $country)
              <option value="{{ $country->id }}">{{ $country->name_en }}</option>
              @endforeach
            </select>
            @error('country_id')
            <span class="text-red-600 text-sm">{{ $message }}</span>
            @enderror
          </div>
        </div>

        <div>
          <label class="block text-sm font-medium text-main mb-2">{{ __('Years of Experience') }}</label>
          <input wire:model="years_of_experience" type="number" min="0"
            class="w-full px-4 py-2 border border-sh-border rounded-lg focus:ring-2 focus:ring-second focus:border-transparent">
          @error('years_of_experience')
          <span class="text-red-600 text-sm">{{ $message }}</span>
          @enderror
        </div>

        <div>
          <label class="block text-sm font-medium text-main mb-2">{{ __('Description (English)') }}</label>
          <textarea wire:model="description_en" rows="3"
            class="w-full px-4 py-2 border border-sh-border rounded-lg focus:ring-2 focus:ring-second focus:border-transparent"></textarea>
          @error('description_en')
          <span class="text-red-600 text-sm">{{ $message }}</span>
          @enderror
        </div>

        <div>
          <label class="block text-sm font-medium text-main mb-2">{{ __('Description (Arabic)') }}</label>
          <textarea wire:model="description_ar" rows="3"
            class="w-full px-4 py-2 border border-sh-border rounded-lg focus:ring-2 focus:ring-second focus:border-transparent"></textarea>
          @error('description_ar')
          <span class="text-red-600 text-sm">{{ $message }}</span>
          @enderror
        </div>

        <div>
          <label class="block text-sm font-medium text-main mb-2">{{ __('Image') }}</label>
          <input wire:model="image" type="file" accept="image/*"
            class="w-full px-4 py-2 border border-sh-border rounded-lg focus:ring-2 focus:ring-second focus:border-transparent">
          @error('image')
          <span class="text-red-600 text-sm">{{ $message }}</span>
          @enderror
        </div>

        <div class="flex items-center space-x-4">
          <label class="flex items-center">
            <input wire:model="is_active" type="checkbox"
              class="h-4 w-4 text-second focus:ring-second border-sh-border rounded">
            <span class="ml-2 text-sm text-main">{{ __('Active') }}</span>
          </label>
          <label class="flex items-center">
            <input wire:model="freelancer" type="checkbox"
              class="h-4 w-4 text-second focus:ring-second border-sh-border rounded">
            <span class="ml-2 text-sm text-main">{{ __('Freelancer') }}</span>
          </label>
        </div>

        <div class="flex justify-end space-x-4 pt-4">
          <button type="button" wire:click="$set('showCreateModal', false)"
            class="px-6 py-2 border border-sh-border rounded-lg text-main hover:bg-gray-50">
            {{ __('Cancel') }}
          </button>
          <button type="submit" class="px-6 py-2 bg-second text-white rounded-lg hover:bg-orange-600">
            {{ __('Create Professional') }}
          </button>
        </div>
      </form>
    </div>
  </div>
  @endif

  <!-- Edit Professional Modal -->
  @if ($showEditModal)
  <div class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">
    <div class="bg-white rounded-xl p-6 w-full max-w-2xl max-h-screen overflow-y-auto">
      <div class="flex items-center justify-between mb-6">
        <h3 class="text-xl font-bold text-main">{{ __('Edit Professional') }}</h3>
        <button wire:click="$set('showEditModal', false)" class="text-dark-gary hover:text-main">
          <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
            <path fill-rule="evenodd"
              d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
              clip-rule="evenodd" />
          </svg>
        </button>
      </div>

      <form wire:submit="updateProfessional" class="space-y-4">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
          <div>
            <label class="block text-sm font-medium text-main mb-2">{{ __('Name (English)') }}</label>
            <input wire:model="name_en" type="text"
              class="w-full px-4 py-2 border border-sh-border rounded-lg focus:ring-2 focus:ring-second focus:border-transparent">
            @error('name_en')
            <span class="text-red-600 text-sm">{{ $message }}</span>
            @enderror
          </div>
          <div>
            <label class="block text-sm font-medium text-main mb-2">{{ __('Name (Arabic)') }}</label>
            <input wire:model="name_ar" type="text"
              class="w-full px-4 py-2 border border-sh-border rounded-lg focus:ring-2 focus:ring-second focus:border-transparent">
            @error('name_ar')
            <span class="text-red-600 text-sm">{{ $message }}</span>
            @enderror
          </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
          <div>
            <label class="block text-sm font-medium text-main mb-2">{{ __('Job Title (English)') }}</label>
            <input wire:model="job_title_en" type="text"
              class="w-full px-4 py-2 border border-sh-border rounded-lg focus:ring-2 focus:ring-second focus:border-transparent">
            @error('job_title_en')
            <span class="text-red-600 text-sm">{{ $message }}</span>
            @enderror
          </div>
          <div>
            <label class="block text-sm font-medium text-main mb-2">{{ __('Job Title (Arabic)') }}</label>
            <input wire:model="job_title_ar" type="text"
              class="w-full px-4 py-2 border border-sh-border rounded-lg focus:ring-2 focus:ring-second focus:border-transparent">
            @error('job_title_ar')
            <span class="text-red-600 text-sm">{{ $message }}</span>
            @enderror
          </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
          <div>
            <label class="block text-sm font-medium text-main mb-2">{{ __('Type') }}</label>
            <select wire:model="type"
              class="w-full px-4 py-2 border border-sh-border rounded-lg focus:ring-2 focus:ring-second focus:border-transparent">
              <option value="lawyer">{{ __('Lawyer') }}</option>
              <option value="consultant">{{ __('Consultant') }}</option>
              <option value="expert">{{ __('Expert') }}</option>
            </select>
            @error('type')
            <span class="text-red-600 text-sm">{{ $message }}</span>
            @enderror
          </div>
          <div>
            <label class="block text-sm font-medium text-main mb-2">{{ __('Country') }}</label>
            <select wire:model="country_id"
              class="w-full px-4 py-2 border border-sh-border rounded-lg focus:ring-2 focus:ring-second focus:border-transparent">
              <option value="">{{ __('Select Country') }}</option>
              @foreach ($countries as $country)
              <option value="{{ $country->id }}">{{ $country->name_en }}</option>
              @endforeach
            </select>
            @error('country_id')
            <span class="text-red-600 text-sm">{{ $message }}</span>
            @enderror
          </div>
        </div>

        <div>
          <label class="block text-sm font-medium text-main mb-2">{{ __('Years of Experience') }}</label>
          <input wire:model="years_of_experience" type="number" min="0"
            class="w-full px-4 py-2 border border-sh-border rounded-lg focus:ring-2 focus:ring-second focus:border-transparent">
          @error('years_of_experience')
          <span class="text-red-600 text-sm">{{ $message }}</span>
          @enderror
        </div>

        <div>
          <label class="block text-sm font-medium text-main mb-2">{{ __('Description (English)') }}</label>
          <textarea wire:model="description_en" rows="3"
            class="w-full px-4 py-2 border border-sh-border rounded-lg focus:ring-2 focus:ring-second focus:border-transparent"></textarea>
          @error('description_en')
          <span class="text-red-600 text-sm">{{ $message }}</span>
          @enderror
        </div>

        <div>
          <label class="block text-sm font-medium text-main mb-2">{{ __('Description (Arabic)') }}</label>
          <textarea wire:model="description_ar" rows="3"
            class="w-full px-4 py-2 border border-sh-border rounded-lg focus:ring-2 focus:ring-second focus:border-transparent"></textarea>
          @error('description_ar')
          <span class="text-red-600 text-sm">{{ $message }}</span>
          @enderror
        </div>

        <div>
          <label class="block text-sm font-medium text-main mb-2">{{ __('Image') }}</label>
          <input wire:model="image" type="file" accept="image/*"
            class="w-full px-4 py-2 border border-sh-border rounded-lg focus:ring-2 focus:ring-second focus:border-transparent">
          @error('image')
          <span class="text-red-600 text-sm">{{ $message }}</span>
          @enderror
        </div>

        <div class="flex items-center space-x-4">
          <label class="flex items-center">
            <input wire:model="is_active" type="checkbox"
              class="h-4 w-4 text-second focus:ring-second border-sh-border rounded">
            <span class="ml-2 text-sm text-main">{{ __('Active') }}</span>
          </label>
          <label class="flex items-center">
            <input wire:model="freelancer" type="checkbox"
              class="h-4 w-4 text-second focus:ring-second border-sh-border rounded">
            <span class="ml-2 text-sm text-main">{{ __('Freelancer') }}</span>
          </label>
        </div>

        <div class="flex justify-end space-x-4 pt-4">
          <button type="button" wire:click="$set('showEditModal', false)"
            class="px-6 py-2 border border-sh-border rounded-lg text-main hover:bg-gray-50">
            {{ __('Cancel') }}
          </button>
          <button type="submit" class="px-6 py-2 bg-second text-white rounded-lg hover:bg-orange-600">
            {{ __('Update Professional') }}
          </button>
        </div>
      </form>
    </div>
  </div>
  @endif

  <!-- View Professional Modal -->
  @if ($showViewModal)
  <div class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">
    <div class="bg-white rounded-xl p-6 w-full max-w-2xl max-h-screen overflow-y-auto">
      <div class="flex items-center justify-between mb-6">
        <h3 class="text-xl font-bold text-main">{{ __('Professional Details') }}</h3>
        <button wire:click="$set('showViewModal', false)" class="text-dark-gary hover:text-main">
          <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
            <path fill-rule="evenodd"
              d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
              clip-rule="evenodd" />
          </svg>
        </button>
      </div>

      <div class="space-y-6">
        <div class="flex items-center space-x-4">
          @if ($selectedProfessional->image)
          <img src="{{ asset('storage/' . $selectedProfessional->image) }}" alt="{{ $selectedProfessional->name_en }}"
            class="w-20 h-20 rounded-lg object-cover">
          @else
          <div class="w-20 h-20 bg-gray-200 rounded-lg flex items-center justify-center">
            <svg class="w-10 h-10 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
              <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
            </svg>
          </div>
          @endif
          <div>
            <h4 class="text-xl font-bold text-main">{{ $selectedProfessional->name_en }}</h4>
            <p class="text-dark-gary">{{ $selectedProfessional->name_ar }}</p>
            <span class="px-3 py-1 rounded-full text-xs font-medium bg-blue-100 text-blue-800">
              {{ ucfirst($selectedProfessional->type) }}
            </span>
          </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
          <div>
            <h5 class="font-medium text-main mb-2">{{ __('Job Title') }}</h5>
            <p class="text-dark-gary">{{ $selectedProfessional->job_title_en }}</p>
            <p class="text-dark-gary">{{ $selectedProfessional->job_title_ar }}</p>
          </div>
          <div>
            <h5 class="font-medium text-main mb-2">{{ __('Country') }}</h5>
            <p class="text-dark-gary">{{ $selectedProfessional->country->name_en ?? __('N/A') }}</p>
          </div>
          <div>
            <h5 class="font-medium text-main mb-2">{{ __('Years of Experience') }}</h5>
            <p class="text-dark-gary">{{ $selectedProfessional->years_of_experience }}</p>
          </div>
          <div>
            <h5 class="font-medium text-main mb-2">{{ __('Status') }}</h5>
            <span
              class="px-3 py-1 rounded-full text-xs font-medium {{ $selectedProfessional->is_active ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800' }}">
              {{ $selectedProfessional->is_active ? __('Active') : __('Inactive') }}
            </span>
          </div>
        </div>

        <div>
          <h5 class="font-medium text-main mb-2">{{ __('Description (English)') }}</h5>
          <p class="text-dark-gary">{{ $selectedProfessional->description_en }}</p>
        </div>

        <div>
          <h5 class="font-medium text-main mb-2">{{ __('Description (Arabic)') }}</h5>
          <p class="text-dark-gary">{{ $selectedProfessional->description_ar }}</p>
        </div>

        @if ($selectedProfessional->info_en)
        <div>
          <h5 class="font-medium text-main mb-2">{{ __('Additional Information (English)') }}</h5>
          <p class="text-dark-gary">{{ $selectedProfessional->info_en }}</p>
        </div>
        @endif

        @if ($selectedProfessional->info_ar)
        <div>
          <h5 class="font-medium text-main mb-2">{{ __('Additional Information (Arabic)') }}</h5>
          <p class="text-dark-gary">{{ $selectedProfessional->info_ar }}</p>
        </div>
        @endif

        <div class="flex justify-end pt-4">
          <button wire:click="$set('showViewModal', false)"
            class="px-6 py-2 bg-second text-white rounded-lg hover:bg-orange-600">
            {{ __('Close') }}
          </button>
        </div>
      </div>
    </div>
  </div>
  @endif
</div>
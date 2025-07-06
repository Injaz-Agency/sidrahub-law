@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-sh-background">
    @include('layouts.header')

    <div class="container py-8">
        <div class="flex gap-6">
            <!-- Aside Menu -->
            <div class="w-64 flex-shrink-0">
                <div class="bg-white rounded-xl shadow-small-box p-6">
                    <div class="mb-6">
                        <h2 class="text-xl font-bold text-main">{{ __('Company Dashboard') }}</h2>
                        <p class="text-sm text-dark-gary">{{ auth()->user()->name }}</p>
                    </div>

                    <nav class="space-y-2">
                        <a href="#dashboard"
                            class="flex items-center px-4 py-3 text-main rounded-lg hover:bg-second hover:text-white transition-colors tab-link active bg-second text-white"
                            data-tab="dashboard">
                            <svg class="w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M3 4a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1V4zM3 10a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H4a1 1 0 01-1-1v-6zM14 9a1 1 0 00-1 1v6a1 1 0 001 1h2a1 1 0 001-1v-6a1 1 0 00-1-1h-2z" />
                            </svg>
                            {{ __('Dashboard') }}
                        </a>
                        <a href="#company-profile"
                            class="flex items-center px-4 py-3 text-main rounded-lg hover:bg-second hover:text-white transition-colors tab-link"
                            data-tab="company-profile">
                            <svg class="w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4zm2 6a2 2 0 012-2h8a2 2 0 012 2v4a2 2 0 01-2 2H8a2 2 0 01-2-2v-4zm6 4a2 2 0 100-4 2 2 0 000 4z"
                                    clip-rule="evenodd" />
                            </svg>
                            {{ __('Company Profile') }}
                        </a>
                        <a href="#professionals"
                            class="flex items-center px-4 py-3 text-main rounded-lg hover:bg-second hover:text-white transition-colors tab-link"
                            data-tab="professionals">
                            <svg class="w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            {{ __('Professionals') }}
                        </a>
                    </nav>
                </div>
            </div>

            <!-- Main Content -->
            <div class="flex-1">
                <!-- Dashboard Tab -->
                <div id="dashboard-tab" class="tab-content">
                    @livewire('company-admin.dashboard-overview')
                </div>

                <!-- Company Profile Tab -->
                <div id="company-profile-tab" class="tab-content hidden">
                    @livewire('company-admin.company-profile')
                </div>

                <!-- Professionals Tab -->
                <div id="professionals-tab" class="tab-content hidden">
                    @livewire('company-admin.professionals-management')
                </div>
            </div>
        </div>
    </div>

    @include('layouts.footer')
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
      const tabLinks = document.querySelectorAll('.tab-link');
      const tabContents = document.querySelectorAll('.tab-content');

      tabLinks.forEach(link => {
        link.addEventListener('click', function(e) {
          e.preventDefault();

          // Remove active class from all tabs
          tabLinks.forEach(l => {
            l.classList.remove('active', 'bg-second', 'text-white');
            l.classList.add('text-main');
          });
          tabContents.forEach(c => c.classList.add('hidden'));

          // Add active class to clicked tab
          this.classList.add('active', 'bg-second', 'text-white');
          this.classList.remove('text-main');

          // Show corresponding content
          const tabName = this.getAttribute('data-tab');
          document.getElementById(tabName + '-tab').classList.remove('hidden');
        });
      });
    });
</script>
@endsection
<?php

namespace App\Livewire\CompanyAdmin;

use App\Models\Company;
use App\Models\Professional;
use Illuminate\Support\Str;
use Livewire\Component;

class DashboardOverview extends Component
{
    public $company;
    public $totalProfessionals;
    public $activeProfessionals;
    public $inactiveProfessionals;

    public function mount()
    {
        $this->loadCompanyData();
    }

    public function loadCompanyData()
    {
        $user = \Illuminate\Support\Facades\Auth::user();
        $this->company = Company::where('user_id', $user->id)->first();

        if ($this->company) {
            $this->totalProfessionals = $this->company->professionals()->count();
            $this->activeProfessionals = $this->company->professionals()->where('is_active', true)->count();
            $this->inactiveProfessionals = $this->company->professionals()->where('is_active', false)->count();
        }
    }

    public function render()
    {
        return view('livewire.company-admin.dashboard-overview');
    }
}

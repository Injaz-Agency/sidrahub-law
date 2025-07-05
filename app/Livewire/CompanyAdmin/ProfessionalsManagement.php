<?php

namespace App\Livewire\CompanyAdmin;

use App\Models\Company;
use App\Models\Professional;
use App\Models\Country;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class ProfessionalsManagement extends Component
{
    use WithPagination, WithFileUploads;

    public $search = '';
    public $statusFilter = '';
    public $showCreateModal = false;
    public $showEditModal = false;
    public $showViewModal = false;
    public $selectedProfessional;
    public $countries;

    // Form fields
    public $name_en;
    public $name_ar;
    public $job_title_en;
    public $job_title_ar;
    public $description_en;
    public $description_ar;
    public $years_of_experience;
    public $info_en;
    public $info_ar;
    public $is_active = true;
    public $country_id;
    public $image;
    public $type = 'lawyer';
    public $freelancer = false;

    protected $rules = [
        'name_en' => 'required|string|max:255',
        'name_ar' => 'required|string|max:255',
        'job_title_en' => 'required|string|max:255',
        'job_title_ar' => 'required|string|max:255',
        'description_en' => 'required|string',
        'description_ar' => 'required|string',
        'years_of_experience' => 'required|integer|min:0',
        'info_en' => 'nullable|string',
        'info_ar' => 'nullable|string',
        'is_active' => 'boolean',
        'country_id' => 'required|exists:countries,id',
        'image' => 'nullable|image|max:2048',
        'type' => 'required|in:lawyer,consultant,expert',
        'freelancer' => 'boolean',
    ];

    public function mount()
    {
        $this->countries = Country::all();
    }

    public function updatedSearch()
    {
        $this->resetPage();
    }

    public function updatedStatusFilter()
    {
        $this->resetPage();
    }

    public function openCreateModal()
    {
        $this->resetForm();
        $this->showCreateModal = true;
    }

    public function openEditModal($professionalId)
    {
        $this->selectedProfessional = Professional::findOrFail($professionalId);
        $this->loadProfessionalData();
        $this->showEditModal = true;
    }

    public function openViewModal($professionalId)
    {
        $this->selectedProfessional = Professional::with(['country', 'services'])->findOrFail($professionalId);
        $this->showViewModal = true;
    }

    public function loadProfessionalData()
    {
        $professional = $this->selectedProfessional;
        $this->name_en = $professional->name_en;
        $this->name_ar = $professional->name_ar;
        $this->job_title_en = $professional->job_title_en;
        $this->job_title_ar = $professional->job_title_ar;
        $this->description_en = $professional->description_en;
        $this->description_ar = $professional->description_ar;
        $this->years_of_experience = $professional->years_of_experience;
        $this->info_en = $professional->info_en;
        $this->info_ar = $professional->info_ar;
        $this->is_active = $professional->is_active;
        $this->country_id = $professional->country_id;
        $this->type = $professional->type;
        $this->freelancer = $professional->freelancer;
    }

    public function resetForm()
    {
        $this->name_en = '';
        $this->name_ar = '';
        $this->job_title_en = '';
        $this->job_title_ar = '';
        $this->description_en = '';
        $this->description_ar = '';
        $this->years_of_experience = '';
        $this->info_en = '';
        $this->info_ar = '';
        $this->is_active = true;
        $this->country_id = '';
        $this->image = null;
        $this->type = 'lawyer';
        $this->freelancer = false;
        $this->selectedProfessional = null;
    }

    public function createProfessional()
    {
        $this->validate();

        $user = \Illuminate\Support\Facades\Auth::user();
        $company = Company::where('user_id', $user->id)->first();

        if (!$company) {
            session()->flash('error', 'No company found for this user.');
            return;
        }

        $data = [
            'user_id' => $user->id,
            'company_id' => $company->id,
            'name_en' => $this->name_en,
            'name_ar' => $this->name_ar,
            'job_title_en' => $this->job_title_en,
            'job_title_ar' => $this->job_title_ar,
            'description_en' => $this->description_en,
            'description_ar' => $this->description_ar,
            'years_of_experience' => $this->years_of_experience,
            'info_en' => $this->info_en,
            'info_ar' => $this->info_ar,
            'is_active' => $this->is_active,
            'country_id' => $this->country_id,
            'type' => $this->type,
            'freelancer' => $this->freelancer,
        ];

        if ($this->image) {
            $data['image'] = $this->image->store('professionals', 'public');
        }

        Professional::create($data);

        session()->flash('success', 'Professional created successfully.');
        $this->showCreateModal = false;
        $this->resetForm();
    }

    public function updateProfessional()
    {
        $this->validate();

        $data = [
            'name_en' => $this->name_en,
            'name_ar' => $this->name_ar,
            'job_title_en' => $this->job_title_en,
            'job_title_ar' => $this->job_title_ar,
            'description_en' => $this->description_en,
            'description_ar' => $this->description_ar,
            'years_of_experience' => $this->years_of_experience,
            'info_en' => $this->info_en,
            'info_ar' => $this->info_ar,
            'is_active' => $this->is_active,
            'country_id' => $this->country_id,
            'type' => $this->type,
            'freelancer' => $this->freelancer,
        ];

        if ($this->image) {
            // Delete old image if exists
            if ($this->selectedProfessional->image) {
                Storage::disk('public')->delete($this->selectedProfessional->image);
            }
            $data['image'] = $this->image->store('professionals', 'public');
        }

        $this->selectedProfessional->update($data);

        session()->flash('success', 'Professional updated successfully.');
        $this->showEditModal = false;
        $this->resetForm();
    }

    public function deleteProfessional($professionalId)
    {
        $professional = Professional::findOrFail($professionalId);

        // Delete image if exists
        if ($professional->image) {
            Storage::disk('public')->delete($professional->image);
        }

        $professional->delete();
        session()->flash('success', 'Professional deleted successfully.');
    }

    public function toggleStatus($professionalId)
    {
        $professional = Professional::findOrFail($professionalId);
        $professional->update(['is_active' => !$professional->is_active]);
        session()->flash('success', 'Professional status updated successfully.');
    }

    public function render()
    {
        $user = \Illuminate\Support\Facades\Auth::user();
        $company = Company::where('user_id', $user->id)->first();

        if (!$company) {
            return view('livewire.company-admin.professionals-management', [
                'professionals' => collect(),
                'company' => null
            ]);
        }

        $query = $company->professionals()->with(['country']);

        if ($this->search) {
            $query->where(function ($q) {
                $q->where('name_en', 'like', '%' . $this->search . '%')
                    ->orWhere('name_ar', 'like', '%' . $this->search . '%')
                    ->orWhere('job_title_en', 'like', '%' . $this->search . '%')
                    ->orWhere('job_title_ar', 'like', '%' . $this->search . '%');
            });
        }

        if ($this->statusFilter !== '') {
            $query->where('is_active', $this->statusFilter);
        }

        $professionals = $query->orderBy('created_at', 'desc')->paginate(10);

        return view('livewire.company-admin.professionals-management', [
            'professionals' => $professionals,
            'company' => $company
        ]);
    }
}

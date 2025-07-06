<?php

namespace App\Livewire\CompanyAdmin;

use App\Models\Company;
use App\Models\Country;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class CompanyProfile extends Component
{
    use WithFileUploads;

    public $company;
    public $isEditing = false;

    // Form fields
    public $name_en;
    public $name_ar;
    public $registration_number;
    public $legal_entity;
    public $license;
    public $about_en;
    public $about_ar;
    public $address_en;
    public $address_ar;
    public $country_id;
    public $is_active;
    public $image;
    public $newImage;
    public $newLicense;

    protected $rules = [
        'name_en' => 'required|string|max:255',
        'name_ar' => 'required|string|max:255',
        'registration_number' => 'nullable|string|max:255',
        'legal_entity' => 'nullable|in:individual_lawyer,law_firm',
        'about_en' => 'nullable|string',
        'about_ar' => 'nullable|string',
        'address_en' => 'nullable|string',
        'address_ar' => 'nullable|string',
        'country_id' => 'required|exists:countries,id',
        'newImage' => 'nullable|image|max:2048',
        'newLicense' => 'nullable|file|mimes:pdf|max:2048',
    ];

    public function mount()
    {
        $this->loadCompanyData();
    }

    public function loadCompanyData()
    {
        $user = Auth::user();
        $this->company = Company::where('user_id', $user->id)->first();

        if ($this->company) {
            $this->name_en = $this->company->name_en;
            $this->name_ar = $this->company->name_ar;
            $this->registration_number = $this->company->registration_number;
            $this->legal_entity = $this->company->legal_entity;
            $this->license = $this->company->license;
            $this->about_en = $this->company->about_en;
            $this->about_ar = $this->company->about_ar;
            $this->address_en = $this->company->address_en;
            $this->address_ar = $this->company->address_ar;
            $this->country_id = $this->company->country_id;
            $this->is_active = $this->company->is_active;
            $this->image = $this->company->image;
        }
    }

    public function startEditing()
    {
        $this->isEditing = true;
    }

    public function cancelEditing()
    {
        $this->isEditing = false;
        $this->loadCompanyData();
        $this->newImage = null;
        $this->newLicense = null;
    }

        public function save()
    {
        $this->validate();

        if (!$this->company) {
            return;
        }

        // Handle image upload
        if ($this->newImage) {
            // Delete old image if exists
            if ($this->company->image) {
                Storage::disk('public')->delete($this->company->image);
            }

            $imagePath = $this->newImage->store('companies', 'public');
            $this->company->image = $imagePath;
        }

        // Handle license file upload
        if ($this->newLicense) {
            // Delete old license if exists
            if ($this->company->license) {
                Storage::disk('public')->delete($this->company->license);
            }

            $licensePath = $this->newLicense->store('licenses', 'public');
            $this->company->license = $licensePath;
        }

        // Update company data - set is_active to false for admin review
        $this->company->update([
            'name_en' => $this->name_en,
            'name_ar' => $this->name_ar,
            'registration_number' => $this->registration_number,
            'legal_entity' => $this->legal_entity,
            'about_en' => $this->about_en,
            'about_ar' => $this->about_ar,
            'address_en' => $this->address_en,
            'address_ar' => $this->address_ar,
            'country_id' => $this->country_id,
            'is_active' => false, // Set to false for admin review
        ]);

        $this->isEditing = false;
        $this->newImage = null;
        $this->newLicense = null;
        $this->loadCompanyData();

        session()->flash('message', __('Company profile updated successfully! Your changes are pending admin review.'));
    }

    public function render()
    {
        $countries = Country::orderBy('name_en')->get();

        return view('livewire.company-admin.company-profile', [
            'countries' => $countries,
            'country' => $this->company ? $this->company->country : null
        ]);
    }
}

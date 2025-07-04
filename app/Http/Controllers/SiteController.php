<?php

namespace App\Http\Controllers;

use App\Http\Requests\LawyerJoinRequest;
use App\Models\Company;
use App\Models\Country;
use App\Models\Professional;
use App\Models\Role;
use App\Models\Service;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class SiteController extends Controller
{
    /**
     * Show the application home page.
     */
    public function default()
    {
        $locale = App::currentLocale();
        return redirect()->route('home', $locale);
    }

    /**
     * Show the application home page.
     */
    public function dashboard()
    {
        return view('dashboard');
    }

    /**
     * Show the application home page.
     */
    public function home()
    {
        $homeServices = Service::where('is_active', true)->whereNotNull('icon')->limit(6)->get();
        // $professionals = Professional::where('is_active', true)->inRandomOrder()->limit(20)->get();
        $professionals = Professional::inRandomOrder()->limit(20)->get();
        return view('home', compact('homeServices', 'professionals'));
    }

    /**
     * Show the application lawyers page.
     */
    public function professionals()
    {
        $professionals = Professional::where('freelancer', false)->inRandomOrder()->paginate(16);
        return view('professionals', compact('professionals'));
    }

    /**
     * Show the application lawyer page.
     */
    public function professionalShow($locale, Professional $professional)
    {
        $professional->load('services', 'company');
        $professionals = Professional::where('freelancer', false)->where('company_id', $professional->company_id)->inRandomOrder()->limit(10)->get();
        return view('professional', compact('professional', 'professionals'));
    }

    /**
     * Show the application join lawyers page.
     */
    public function lawyerJoin()
    {
        $services = Service::all();
        $countries = Country::all();
        return view('lawyer_join', compact('services', 'countries'));
    }

    public function lawyerJoinSubmit(LawyerJoinRequest $request)
    {
        // Get the company_admin role
        $companyAdminRole = Role::where('name', 'company_admin')->first();

        if (!$companyAdminRole) {
            return back()->withErrors(['error' => 'Company admin role not found. Please contact administrator.']);
        }

        // Create the user (owner)
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => Hash::make('12345678'),
            'role_id' => $companyAdminRole->id,
        ]);

        // Handle file uploads
        $logoPath = null;
        $licensePath = null;

        if ($request->hasFile('logo')) {
            $logoPath = $request->file('logo')->store('companies/logos', 'public');
        }

        if ($request->hasFile('license')) {
            $licensePath = $request->file('license')->store('companies/licenses', 'public');
        }

        // Create the company
        $company = Company::create([
            'user_id' => $user->id,
            'name_en' => $request->name_en,
            'name_ar' => $request->name_ar,
            'registration_number' => $request->registration_number,
            'legal_entity' => $request->legal_entity,
            'license' => $licensePath,
            'is_active' => false, // Set to false initially, admin can activate later
            'about_en' => $request->info,
            'about_ar' => $request->info,
            'address_en' => null,
            'address_ar' => null,
            'image' => $logoPath,
            'country_id' => $request->country_id,
        ]);

        // Attach the legal specialization service to the company
        $company->services()->attach($request->legal_specialization);

        return redirect()->route('home', app()->getLocale())->with('success', 'Your application has been submitted successfully. Please wait for admin approval.');
    }

    /**
     * Show the application join lawyers page.
     */
    public function legalConsultation()
    {
        return view('legal_consultation');
    }
}

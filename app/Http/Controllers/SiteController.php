<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\Professional;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

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

    /**
     * Show the application join lawyers page.
     */
    public function legalConsultation()
    {
        return view('legal_consultation');
    }
}

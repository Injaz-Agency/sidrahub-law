<?php

namespace App\Providers;

use App\Models\Company;
use App\Models\Country;
use App\Models\Professional;
use App\Models\Role;
use App\Models\Service;
use App\Models\User;
use App\Policies\CompanyPolicy;
use App\Policies\CountryPolicy;
use App\Policies\ProfessionalPolicy;
use App\Policies\RolePolicy;
use App\Policies\ServicePolicy;
use App\Policies\UserPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        User::class => UserPolicy::class,
        Role::class => RolePolicy::class,
        Country::class => CountryPolicy::class,
        Company::class => CompanyPolicy::class,
        Professional::class => ProfessionalPolicy::class,
        Service::class => ServicePolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        $this->registerPolicies();

        // Additional Gates can be defined here if needed
        // Example:
        // Gate::define('manage-system', function (User $user) {
        //     return $user->role && in_array(strtolower($user->role->name), ['super_admin', 'admin']);
        // });
    }
}

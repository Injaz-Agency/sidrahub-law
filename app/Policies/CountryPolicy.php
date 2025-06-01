<?php

namespace App\Policies;

use App\Models\Country;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class CountryPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        // All authenticated users can view countries (for dropdowns, etc.)
        return true;
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Country $country): bool
    {
        // All authenticated users can view individual countries
        return true;
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        // Only admins and super admins can create countries
        return $this->isAdmin($user) || $this->isSuperAdmin($user);
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Country $country): bool
    {
        // Only admins and super admins can update countries
        return $this->isAdmin($user) || $this->isSuperAdmin($user);
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Country $country): bool
    {
        // Only super admins can delete countries
        // Cannot delete if country has related records
        return $this->isSuperAdmin($user) &&
            $country->companies()->count() === 0 &&
            $country->professionals()->count() === 0 &&
            $country->services()->count() === 0;
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Country $country): bool
    {
        return $this->isAdmin($user) || $this->isSuperAdmin($user);
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Country $country): bool
    {
        // Only super admin can force delete
        return $this->isSuperAdmin($user) &&
            $country->companies()->count() === 0 &&
            $country->professionals()->count() === 0 &&
            $country->services()->count() === 0;
    }

    /**
     * Check if user is admin
     */
    private function isAdmin(User $user): bool
    {
        return $user->role && in_array(strtolower($user->role->name), ['admin', 'administrator']);
    }

    /**
     * Check if user is super admin
     */
    private function isSuperAdmin(User $user): bool
    {
        return $user->role && in_array(strtolower($user->role->name), ['super_admin', 'superadmin']);
    }
}
<?php

namespace App\Policies;

use App\Models\Company;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class CompanyPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        // All authenticated users can view companies list
        return true;
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Company $company): bool
    {
        // Users can view companies they own, their company employees can view their company,
        // admins and managers can view all
        return $this->canAccessCompany($user, $company);
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        // All authenticated users can create companies
        return true;
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Company $company): bool
    {
        // Company owners and admins can update companies
        return $user->id === $company->user_id || $this->isAdminOrManager($user);
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Company $company): bool
    {
        // Company owners and admins can delete companies
        // Cannot delete if company has employees
        $hasEmployees = $company->professionals()->count() > 0;

        return !$hasEmployees &&
            ($user->id === $company->user_id || $this->isAdmin($user));
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Company $company): bool
    {
        // Company owners and admins can restore companies
        return $user->id === $company->user_id || $this->isAdminOrManager($user);
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Company $company): bool
    {
        // Only super admin can force delete
        return $this->isSuperAdmin($user);
    }

    /**
     * Determine whether the user can manage employees.
     */
    public function manageEmployees(User $user, Company $company): bool
    {
        // Company owners and admins can manage employees
        return $user->id === $company->user_id || $this->isAdminOrManager($user);
    }

    /**
     * Determine whether the user can add employees.
     */
    public function addEmployee(User $user, Company $company): bool
    {
        // Company owners and admins can add employees
        return $user->id === $company->user_id || $this->isAdminOrManager($user);
    }

    /**
     * Determine whether the user can remove employees.
     */
    public function removeEmployee(User $user, Company $company): bool
    {
        // Company owners and admins can remove employees
        return $user->id === $company->user_id || $this->isAdminOrManager($user);
    }

    /**
     * Check if user can access company (view, work with)
     */
    private function canAccessCompany(User $user, Company $company): bool
    {
        // Company owner
        if ($user->id === $company->user_id) {
            return true;
        }

        // Company employee
        if ($user->professionals()->where('company_id', $company->id)->exists()) {
            return true;
        }

        // Admin or manager
        if ($this->isAdminOrManager($user)) {
            return true;
        }

        return false;
    }

    /**
     * Check if user is admin
     */
    private function isAdmin(User $user): bool
    {
        return $user->role && in_array(strtolower($user->role->name), ['admin', 'administrator']);
    }

    /**
     * Check if user is manager
     */
    private function isManager(User $user): bool
    {
        return $user->role && in_array(strtolower($user->role->name), ['manager']);
    }

    /**
     * Check if user is super admin
     */
    private function isSuperAdmin(User $user): bool
    {
        return $user->role && in_array(strtolower($user->role->name), ['super_admin', 'superadmin']);
    }

    /**
     * Check if user is admin or manager
     */
    private function isAdminOrManager(User $user): bool
    {
        return $this->isAdmin($user) || $this->isManager($user) || $this->isSuperAdmin($user);
    }
}

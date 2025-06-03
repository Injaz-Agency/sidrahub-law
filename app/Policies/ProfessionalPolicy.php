<?php

namespace App\Policies;

use App\Models\Professional;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class ProfessionalPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return isset($user->role) && in_array($user->role->name, ['super_admin', 'admin', 'moderator']);
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Professional $professional): bool
    {
        return isset($user->role) && in_array($user->role->name, haystack: ['super_admin', 'admin', 'moderator']);
        // Users can view their own professional profile,
        // company owners can view their employees,
        // admins and managers can view all
        // return $this->canAccessProfessional($user, $professional);
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return isset($user->role) && in_array($user->role->name, ['super_admin', 'admin', 'moderator']);
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Professional $professional): bool
    {
        return isset($user->role) && in_array($user->role->name, ['super_admin', 'admin', 'moderator']);
        // Users can update their own professional profile
        // if ($user->id === $professional->user_id) {
        //     return true;
        // }

        // // Company owners can update their employees
        // if (
        //     !$professional->freelancer &&
        //     $professional->company &&
        //     $user->id === $professional->company->user_id
        // ) {
        //     return true;
        // }

        // Admins and managers can update all professionals
        // return $this->isAdminOrManager($user);
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Professional $professional): bool
    {
        return isset($user->role) && in_array($user->role->name, ['super_admin', 'admin', 'moderator']);
        // Users can delete their own professional profile
        // if ($user->id === $professional->user_id) {
        //     return true;
        // }

        // // Company owners can delete their employees
        // if (
        //     !$professional->freelancer &&
        //     $professional->company &&
        //     $user->id === $professional->company->user_id
        // ) {
        //     return true;
        // }

        // Only admins can delete other professionals
        // return $this->isAdmin($user);
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Professional $professional): bool
    {
        return isset($user->role) && in_array($user->role->name, ['super_admin', 'admin', 'moderator']);
        // Same logic as update
        // return $this->update($user, $professional);
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Professional $professional): bool
    {
        return isset($user->role) && in_array($user->role->name, ['super_admin', 'admin']);
        // Only super admin can force delete
        // return $this->isSuperAdmin($user);
    }

    /**
     * Determine whether the user can assign services.
     */
    public function assignServices(User $user, Professional $professional): bool
    {
        // Users can assign services to their own profile
        if ($user->id === $professional->user_id) {
            return true;
        }

        // Company owners can assign services to their employees
        if (
            !$professional->freelancer &&
            $professional->company &&
            $user->id === $professional->company->user_id
        ) {
            return true;
        }

        // Admins and managers can assign services to all professionals
        return $this->isAdminOrManager($user);
    }

    /**
     * Determine whether the user can change company association.
     */
    public function changeCompany(User $user, Professional $professional): bool
    {
        // Users cannot change their own company association
        // Only admins and managers can change company associations
        return $this->isAdminOrManager($user);
    }

    /**
     * Determine whether the user can manage as company employee.
     */
    public function manageAsEmployee(User $user, Professional $professional): bool
    {
        // Company owners can manage their employees
        if (
            !$professional->freelancer &&
            $professional->company &&
            $user->id === $professional->company->user_id
        ) {
            return true;
        }

        // Admins and managers can manage all employees
        return $this->isAdminOrManager($user);
    }

    /**
     * Check if user can access professional (view, work with)
     */
    private function canAccessProfessional(User $user, Professional $professional): bool
    {
        // Own professional profile
        if ($user->id === $professional->user_id) {
            return true;
        }

        // Company owner accessing employee
        if (
            !$professional->freelancer &&
            $professional->company &&
            $user->id === $professional->company->user_id
        ) {
            return true;
        }

        // Fellow company employee
        if (
            !$professional->freelancer &&
            $professional->company &&
            $user->professionals()->where('company_id', $professional->company->id)->exists()
        ) {
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
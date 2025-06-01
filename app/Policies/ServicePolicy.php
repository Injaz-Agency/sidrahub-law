<?php

namespace App\Policies;

use App\Models\Service;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class ServicePolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        // All authenticated users can view services list
        return true;
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Service $service): bool
    {
        // All authenticated users can view individual services
        return true;
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        // Admins, managers, and company owners can create services
        return $this->isAdminOrManager($user) || $this->hasCompany($user);
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Service $service): bool
    {
        // Admins and managers can update all services
        if ($this->isAdminOrManager($user)) {
            return true;
        }

        // Company owners can update services if they have professionals assigned to it
        if ($this->hasCompany($user) && $this->hasAssignedProfessionals($user, $service)) {
            return true;
        }

        return false;
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Service $service): bool
    {
        // Only admins can delete services
        // Cannot delete if service has assigned professionals
        return $this->isAdmin($user) && $service->professionals()->count() === 0;
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Service $service): bool
    {
        // Admins and managers can restore services
        return $this->isAdminOrManager($user);
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Service $service): bool
    {
        // Only super admin can force delete
        return $this->isSuperAdmin($user) && $service->professionals()->count() === 0;
    }

    /**
     * Determine whether the user can assign professionals.
     */
    public function assignProfessionals(User $user, Service $service): bool
    {
        // Admins and managers can assign any professionals
        if ($this->isAdminOrManager($user)) {
            return true;
        }

        // Company owners can assign their own employees
        if ($this->hasCompany($user)) {
            return true;
        }

        // Freelance professionals can assign themselves
        if ($this->isFreelanceProfessional($user)) {
            return true;
        }

        return false;
    }

    /**
     * Determine whether the user can detach professionals.
     */
    public function detachProfessionals(User $user, Service $service): bool
    {
        // Admins and managers can detach any professionals
        if ($this->isAdminOrManager($user)) {
            return true;
        }

        // Company owners can detach their own employees
        if ($this->hasCompany($user) && $this->hasAssignedProfessionals($user, $service)) {
            return true;
        }

        // Professionals can detach themselves
        if (
            $user->professionals()->whereHas('services', function ($query) use ($service) {
                $query->where('service_id', $service->id);
            })->exists()
        ) {
            return true;
        }

        return false;
    }

    /**
     * Determine whether the user can manage service in their country.
     */
    public function manageInCountry(User $user, Service $service): bool
    {
        // Admins and managers can manage all services
        if ($this->isAdminOrManager($user)) {
            return true;
        }

        // Check if user has professionals in the same country as the service
        return $user->professionals()
            ->where('country_id', $service->country_id)
            ->exists();
    }

    /**
     * Check if user has a company
     */
    private function hasCompany(User $user): bool
    {
        return $user->companies()->exists();
    }

    /**
     * Check if user has assigned professionals to this service
     */
    private function hasAssignedProfessionals(User $user, Service $service): bool
    {
        // Check if any of user's company employees are assigned to this service
        return $user->companies()
            ->whereHas('professionals.services', function ($query) use ($service) {
                $query->where('service_id', $service->id);
            })
            ->exists();
    }

    /**
     * Check if user is a freelance professional
     */
    private function isFreelanceProfessional(User $user): bool
    {
        return $user->professionals()
            ->where('freelancer', true)
            ->exists();
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
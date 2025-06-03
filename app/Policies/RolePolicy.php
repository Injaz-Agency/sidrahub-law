<?php

namespace App\Policies;

use App\Models\Role;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class RolePolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return isset($user->role) && in_array($user->role->name, ['super_admin', 'admin']);
        // Only admins and super admins can view roles
        // return $this->isAdmin($user) || $this->isSuperAdmin($user);
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Role $role): bool
    {
        return isset($user->role) && in_array($user->role->name, haystack: ['super_admin', 'admin']);
        // Only admins and super admins can view roles
        // return $this->isAdmin($user) || $this->isSuperAdmin($user);
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return isset($user->role) && in_array($user->role->name, ['super_admin', 'admin']);
        // Only super admins can create new roles
        // return $this->isSuperAdmin($user);
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Role $role): bool
    {
        return isset($user->role) && in_array($user->role->name, ['super_admin']);
        // Only super admins can update roles
        // return $this->isSuperAdmin($user);
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Role $role): bool
    {
        return isset($user->role) && in_array($user->role->name, ['super_admin']);
        // Only super admins can delete roles
        // Cannot delete if role has users assigned
        // return $this->isSuperAdmin($user) && $role->users()->count() === 0;
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Role $role): bool
    {
        return isset($user->role) && in_array($user->role->name, ['super_admin']);
        // return $this->isSuperAdmin($user);
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Role $role): bool
    {
        return isset($user->role) && in_array($user->role->name, ['super_admin']);
        // Only super admin can force delete
        // return $this->isSuperAdmin($user) && $role->users()->count() === 0;
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
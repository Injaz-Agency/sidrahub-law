<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\Response;

class UserPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        // Admins and managers can view all users
        return $this->isAdminOrManager($user);
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, User $model): bool
    {
        // Users can view their own profile, admins and managers can view all
        return $user->id === $model->id || $this->isAdminOrManager($user);
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        // Only admins and managers can create new users
        return $this->isAdminOrManager($user);
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, User $model): bool
    {
        // Users can update their own profile, admins can update all users
        // Managers can update users but not other admins
        if ($user->id === $model->id) {
            return true;
        }

        if ($this->isAdmin($user)) {
            return true;
        }

        if ($this->isManager($user) && !$this->isAdmin($model)) {
            return true;
        }

        return false;
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, User $model): bool
    {
        // Users cannot delete themselves
        // Only admins can delete users
        // Admins cannot delete other admins
        if ($user->id === $model->id) {
            return false;
        }

        return $this->isAdmin($user) && !$this->isAdmin($model);
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, User $model): bool
    {
        return $this->isAdmin($user);
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, User $model): bool
    {
        // Only super admin can force delete
        return $this->isSuperAdmin($user);
    }

    /**
     * Determine whether the user can assign roles.
     */
    public function assignRole(User $user, User $model): bool
    {
        // Only admins can assign roles
        // Admins cannot modify other admin roles
        return $this->isAdmin($user) && !$this->isAdmin($model);
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
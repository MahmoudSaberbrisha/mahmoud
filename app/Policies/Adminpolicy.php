<?php

namespace App\Policies;

use App\Models\Admin;
use App\Models\AdminRule;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class Adminpolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny($user): bool
    {
        return $user->role == 'admin' || $user->role == 'superadmin' ? true : false;
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(Admin $admin): bool
    {
        return $admin->role == 'admin' || $admin->role=='superadmin' ? true : false;
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(Admin $admin): bool
    {
        return $admin->role == 'superadmin' ? true : false;
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(Admin $admin): bool
    {
        return AdminRule::where('admin_id', $admin->id)->where('rule_id', 1)->exists() ? true : false;

    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(Admin $admin): bool
    {
               return AdminRule::where('admin_id', $admin->id)->where('rule_id', 5)->exists() ? true : false;
    }


    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Admin $admin): bool
    {
        return false;
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Admin $admin): bool
    {
        return false;
    }
}

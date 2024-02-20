<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Systemowner;
use Illuminate\Auth\Access\HandlesAuthorization;

class SystemownerPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the systemowner can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->hasPermissionTo('list systemowners');
    }

    /**
     * Determine whether the systemowner can view the model.
     */
    public function view(User $user, Systemowner $model): bool
    {
        return $user->hasPermissionTo('view systemowners');
    }

    /**
     * Determine whether the systemowner can create models.
     */
    public function create(User $user): bool
    {
        return $user->hasPermissionTo('create systemowners');
    }

    /**
     * Determine whether the systemowner can update the model.
     */
    public function update(User $user, Systemowner $model): bool
    {
        return $user->hasPermissionTo('update systemowners');
    }

    /**
     * Determine whether the systemowner can delete the model.
     */
    public function delete(User $user, Systemowner $model): bool
    {
        return $user->hasPermissionTo('delete systemowners');
    }

    /**
     * Determine whether the user can delete multiple instances of the model.
     */
    public function deleteAny(User $user): bool
    {
        return $user->hasPermissionTo('delete systemowners');
    }

    /**
     * Determine whether the systemowner can restore the model.
     */
    public function restore(User $user, Systemowner $model): bool
    {
        return false;
    }

    /**
     * Determine whether the systemowner can permanently delete the model.
     */
    public function forceDelete(User $user, Systemowner $model): bool
    {
        return false;
    }
}

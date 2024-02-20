<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Schoolowner;
use Illuminate\Auth\Access\HandlesAuthorization;

class SchoolownerPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the schoolowner can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->hasPermissionTo('list schoolowners');
    }

    /**
     * Determine whether the schoolowner can view the model.
     */
    public function view(User $user, Schoolowner $model): bool
    {
        return $user->hasPermissionTo('view schoolowners');
    }

    /**
     * Determine whether the schoolowner can create models.
     */
    public function create(User $user): bool
    {
        return $user->hasPermissionTo('create schoolowners');
    }

    /**
     * Determine whether the schoolowner can update the model.
     */
    public function update(User $user, Schoolowner $model): bool
    {
        return $user->hasPermissionTo('update schoolowners');
    }

    /**
     * Determine whether the schoolowner can delete the model.
     */
    public function delete(User $user, Schoolowner $model): bool
    {
        return $user->hasPermissionTo('delete schoolowners');
    }

    /**
     * Determine whether the user can delete multiple instances of the model.
     */
    public function deleteAny(User $user): bool
    {
        return $user->hasPermissionTo('delete schoolowners');
    }

    /**
     * Determine whether the schoolowner can restore the model.
     */
    public function restore(User $user, Schoolowner $model): bool
    {
        return false;
    }

    /**
     * Determine whether the schoolowner can permanently delete the model.
     */
    public function forceDelete(User $user, Schoolowner $model): bool
    {
        return false;
    }
}

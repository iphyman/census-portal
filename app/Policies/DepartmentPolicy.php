<?php

namespace App\Policies;

use App\Models\Department;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class DepartmentPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return Department::find($user->department_id)->access_level >= 2;
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Department $department): bool
    {
        return Department::find($user->department_id)->access_level === $department->access_level;
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return Department::find($user->department_id)->access_level >= 2;
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Department $department): bool
    {
        return Department::find($user->department_id)->access_level >= 2;
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Department $department): bool
    {
        return Department::find($user->department_id)->access_level >= 2;
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Department $department): bool
    {
        return Department::find($user->department_id)->access_level >= 2;
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Department $department): bool
    {
        return Department::find($user->department_id)->access_level >= 2;
    }
}
<?php

namespace App\Policies;

use App\Models\User;

class UserPolicy
{
    public function viewAny(User $user): bool
    {
        return $user->hasAnyRole(['super_admin', 'admin']);
    }

    public function view(User $user, User $model): bool
    {
        if ($user->id === $model->id) {
            return true;
        }

        return $user->hasAnyRole(['super_admin', 'admin']);
    }

    public function create(User $user): bool
    {
        return $user->hasAnyRole(['super_admin', 'admin']);
    }

    public function update(User $user, User $model): bool
    {
        if ($user->id === $model->id) {
            return true;
        }

        return $user->hasAnyRole(['super_admin', 'admin']);
    }

    public function delete(User $user, User $model): bool
    {
        return $user->hasAnyRole(['super_admin', 'admin']);
    }

    public function deleteAny(User $user): bool
    {
        return $user->hasAnyRole(['super_admin', 'admin']);
    }

    public function restore(User $user, User $model): bool
    {
        return $user->hasAnyRole(['super_admin', 'admin']);
    }

    public function restoreAny(User $user): bool
    {
        return $user->hasAnyRole(['super_admin', 'admin']);
    }

    public function replicate(User $user, User $model): bool
    {
        return $user->hasAnyRole(['super_admin', 'admin']);
    }

    public function reorder(User $user): bool
    {
        return $user->hasAnyRole(['super_admin', 'admin']);
    }

    public function forceDelete(User $user, User $model): bool
    {
        return $user->hasAnyRole(['super_admin', 'admin']);
    }

    public function forceDeleteAny(User $user): bool
    {
        return $user->hasAnyRole(['super_admin', 'admin']);
    }
}

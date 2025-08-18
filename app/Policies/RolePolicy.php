<?php

namespace App\Policies;

use App\Models\User;
use Spatie\Permission\Models\Role;
use Filament\Facades\Filament;

class RolePolicy
{
    protected function isAdminPanel(): bool
    {
        return Filament::getCurrentPanel()?->getId() === 'admin';
    }

    public function viewAny(User $user): bool
    {
        return $this->isAdminPanel() && $user->hasAnyRole(['super_admin', 'admin']);
    }

    public function view(User $user, Role $role): bool
    {
        return $this->isAdminPanel() && $user->hasAnyRole(['super_admin', 'admin']);
    }

    public function create(User $user): bool
    {
        return $this->isAdminPanel() && $user->hasRole('super_admin');
    }

    public function update(User $user, Role $role): bool
    {
        if (! $this->isAdminPanel()) return false;

        if ($role->name === 'super_admin') {
            return $user->hasRole('super_admin');
        }

        return $user->hasAnyRole(['super_admin', 'admin']);
    }

    public function delete(User $user, Role $role): bool
    {
        if (! $this->isAdminPanel()) return false;

        if ($role->name === 'super_admin') {
            return $user->hasRole('super_admin');
        }

        return $user->hasAnyRole(['super_admin', 'admin']);
    }
}

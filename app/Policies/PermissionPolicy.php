<?php

namespace App\Policies;

use App\Models\User;
use Spatie\Permission\Models\Permission;
use Filament\Facades\Filament;

class PermissionPolicy
{
    protected function isAdminPanel(): bool
    {
        return Filament::getCurrentPanel()?->getId() === 'admin';
    }

    public function viewAny(User $user): bool
    {
        return $this->isAdminPanel() && $user->hasAnyRole(['super_admin', 'admin', 'developer']);
    }

    public function view(User $user, Permission $permission): bool
    {
        return $this->isAdminPanel() && $user->hasAnyRole(['super_admin', 'admin', 'developer']);
    }

    public function create(User $user): bool
    {
        return $this->isAdminPanel() && $user->hasRole('super_admin');
    }

    public function update(User $user, Permission $permission): bool
    {
        return $this->isAdminPanel() && $user->hasAnyRole(['super_admin', 'admin']);
    }

    public function delete(User $user, Permission $permission): bool
    {
        return $this->isAdminPanel() && $user->hasRole('super_admin');
    }
}

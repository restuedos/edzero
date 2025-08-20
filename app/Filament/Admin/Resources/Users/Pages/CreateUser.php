<?php

namespace App\Filament\Admin\Resources\Users\Pages;

use App\Filament\Admin\Resources\Users\UserResource;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Contracts\Auth\MustVerifyEmail;

class CreateUser extends CreateRecord
{
    protected static string $resource = UserResource::class;

    protected function afterCreate(): void
    {
        if ($this->record) {
            $this->record->assignRole('guest');

            if ($this->record instanceof MustVerifyEmail && !$this->record->hasVerifiedEmail()) {
                $this->record->sendEmailVerificationNotification();
            }
        }
    }
}

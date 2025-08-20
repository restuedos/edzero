<?php

namespace App\Filament\Client\Pages;

use Filament\Auth\Pages\Register as BaseRegister;

class Register extends BaseRegister
{
    protected function afterRegister(): void
    {
        if ($this->record) {
            $this->record->assignRole('guest');
        }
    }
}

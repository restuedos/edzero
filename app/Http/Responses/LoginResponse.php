<?php

namespace App\Http\Responses;

use Filament\Http\Responses\Auth\LoginResponse as BaseLoginResponse;
use Filament\Pages\Dashboard;
use Illuminate\Http\RedirectResponse;
use Livewire\Features\SupportRedirects\Redirector;

class LoginResponse extends BaseLoginResponse
{
    public function toResponse($request): RedirectResponse | Redirector
    {
        $user = auth()->user();

        if ($user->canAccessPanel(filament()->getPanel('admin'))) {
            return redirect()->to(Dashboard::getUrl(panel: 'admin'));
        }

        if ($user->canAccessPanel(filament()->getPanel('client'))) {
            return redirect()->to(Dashboard::getUrl(panel: 'client'));
        }

        auth()->logout();

        return redirect()->route('login')
            ->withErrors(['email' => 'You do not have access to any panel.']);
    }
}

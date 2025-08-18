<?php

namespace App\Http\Responses;

use Filament\Auth\Http\Responses\LoginResponse as BaseLoginResponse;
use Filament\Pages\Dashboard;
use Illuminate\Http\RedirectResponse;
use Livewire\Features\SupportRedirects\Redirector;

class LoginResponse extends BaseLoginResponse
{
    public function toResponse($request): RedirectResponse | Redirector
    {
        $user = auth()->user();

        $adminPanel = filament()->getPanel('admin');
        $clientPanel = filament()->getPanel('client');

        if (!$user) {
            return $this->redirectToFailure();
        }

        $panels = [];
        if ($adminPanel && $user->canAccessPanel($adminPanel)) $panels[] = 'admin';
        if ($clientPanel && $user->canAccessPanel($clientPanel)) $panels[] = 'client';

        if (empty($panels)) {
            return $this->redirectToFailure();
        }

        if (count($panels) > 1) {
            $previousUrl = url()->previous();
            $targetPanel = str_contains($previousUrl, 'admin') ? 'admin' : 'client';
        } else {
            $targetPanel = $panels[0];
        }

        return redirect()->to(Dashboard::getUrl(panel: $targetPanel));
    }

    protected function redirectToFailure(string $route = 'welcome', ?string $message = null): RedirectResponse | Redirector
    {
        auth()->logout();

        return redirect()->route($route)->with('error', $message ?? 'You do not have access to any panel.');
    }
}

<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use \Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CanAccessBackoffice
{
    public function handle(Request $request, Closure $next)
    {
        if (! $this->canAccessCMS($request->user())) {
            return redirect('/login');
        }

        return $next($request);
    }

    private function canAccessCMS(User $user):bool {
        return $user->isAdmin() || $user->isCMSUser();
    }
}

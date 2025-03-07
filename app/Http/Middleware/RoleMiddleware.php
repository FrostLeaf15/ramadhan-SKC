<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RoleMiddleware
{
    public function handle(Request $request, Closure $next, string $role): Response
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        $user = Auth::user();

        if ($role === 'siswa' && $user->role->name !== 'siswa') {
            abort(403, 'Akses ditolak');
        }

        if ($role === 'guru' && $user->role->name !== 'guru') {
            abort(403, 'Akses ditolak');
        }

        if ($role === 'admin' && $user->role->name !== 'admin') {
            abort(403, 'Akses ditolak');
        }

        return $next($request);
    }
}

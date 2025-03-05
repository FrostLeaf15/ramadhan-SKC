<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // $this->registerPolicies();

        Gate::define('isAdmin', fn($user) => $user->role === 'admin');
        Gate::define('isGuru', fn($user) => $user->role === 'guru');
        Gate::define('isSiswa', fn($user) => $user->role === 'siswa');
    }
}

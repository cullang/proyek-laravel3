<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    use Illuminate\Support\Facades\Gate;
    use App\Models\User;
    public function boot(): void
    {
        Gate::define('is-admin', function (User $user) {
        return $user->role === 'admin';
    });
    }
}

<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
use App\Models\User; // <-- Import User model
use Illuminate\Support\Facades\Gate; // <-- Import Gate facade
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        //
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        $this->registerPolicies();

        // Definisikan Gate untuk akses panel admin Filament
        Gate::define('access-filament-panel', function (User $user) {
            return in_array($user->role, ['pemilik', 'karyawan']);
        });
    }
}

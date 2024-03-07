<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        'App\Models\Model' => 'App\Policies\ModelPolicy',
        'Spatie\Permission\Models\Role' => 'App\Policies\RolePolicy',
        'Rappasoft\LaravelAuthenticationLog\Models\AuthenticationLog' => 'App\Policies\AuthenticationLogPolicy',
        'App\Models\Category' => 'App\Policies\CategoryPolicy',
        'App\Models\Post' => 'App\Policies\PostPolicy',
        'App\Models\Reservation' => 'App\Policies\ReservationPolicy',
        'App\Models\TextWidget' => 'App\Policies\TextWidgetPolicy',
        'App\Models\Track' => 'App\Policies\TrackPolicy',
        'App\Models\User' => 'App\Policies\UserPolicy',
        
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        //
    }
}

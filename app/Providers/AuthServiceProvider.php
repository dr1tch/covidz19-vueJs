<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('manage_users', function ($user){
            return $user->hasRole('admin');
        });

        Gate::define('manage_ideas', function ($user){
            return $user->hasRole('admin');
        });


        Gate::define('approve_ideas', function ($user){
            return $user->hasRole('admin');
        });

        Gate::define('delete_ideas', function ($user){
            return $user->hasRole('admin');
        });

        Gate::define('edit_users', function ($user){
            return $user->hasRole('admin');
        });

        Gate::define('show_users_explore', function ($user){
            return $user->hasRole('user');
        });

        Gate::define('user_view', function ($user){
            return $user->hasRole('user');
        });

        Gate::define('admin_view', function ($user){
            return $user->hasRole('admin');
        });

        Gate::define('like_ideas_users', function ($user){
            return $user->hasRole('user');
        });

        Gate::define('post_ideas', function ($user){
            return $user->hasRole('user');
        });

        Gate::define('follow_other_users', function ($user){
            return $user->hasRole('user');
        });

        Gate::define('delete_users', function ($user){
            return $user->hasRole('admin');
        });
        //

        //
    }
}

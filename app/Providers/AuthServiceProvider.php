<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Auth;

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
    //

    // Xác định cổng cho trang quản lý người dùng chỉ cho phép truy cập vào vai trò 'quản trị viên'.
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('access-users', function ($user) {
            return $user->role === 'admin';
        });

    }
}

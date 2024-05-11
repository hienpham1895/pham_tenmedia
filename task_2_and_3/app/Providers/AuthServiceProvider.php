<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

use App\Models\Job;
use App\Models\Category;
use App\Models\Company;
use App\Models\User;
use App\Policies\JobPolicy;
use App\Policies\CategoryPolicy;
use App\Policies\CompanyPolicy;
use App\Polices\UserPolicy;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        Job::class => JobPolicy::class,
        Category::class => CategoryPolicy::class,
        Company::class => CompanyPolicy::class,
        User::class => UserPolicy::class

    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        $this->registerPolicies();

        Gate::define('edit-settings', function (User $user) {
            return $user->isAdmin;
        });
    }
}

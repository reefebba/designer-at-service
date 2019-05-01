<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Contracts\Auth\Access\Gate as GateContract;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Models\Design' => 'App\Models\Policies\DesignPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot(GateContract $gate)
    {
        // $this->registerPolicies();
        $this->registerPolicies($gate);

        $gate->define('designer', function($designer){
            return $designer->can === 'design';
        });

        $gate->define('manage', function($designer){
            return $designer->can === 'manage';
        });
    }
}

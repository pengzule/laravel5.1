<?php

namespace App\Providers;

use App\User;
use App\Page;

use Illuminate\Contracts\Auth\Access\Gate as GateContract;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any application authentication / authorization services.
     *
     * @param  \Illuminate\Contracts\Auth\Access\Gate  $gate
     * @return void
     */
    public function boot(GateContract $gate)
    {
        parent::registerPolicies($gate);

        $gate->define('update-page', function ($user, $page) {
            return $user->id === $page->user_id;
        });
	$gate->define('update-comment', function ($user, $comment) {
	   
            return ($user->email === $comment->user)&&(0 === $comment->is_active);
        });
	
    }
}

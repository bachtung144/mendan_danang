<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(
            \App\Repositories\Content\ContentRepositoryInterface::class,
            \App\Repositories\Content\ContentRepository::class,
        );

        $this->app->singleton(
            \App\Repositories\Reward\RewardRepositoryInterface::class,
            \App\Repositories\Reward\RewardRepository::class,
        );
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}

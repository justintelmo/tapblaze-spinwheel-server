<?php

namespace App\Providers;

use App\Interfaces\SpinsRepositoryInterface;
use App\Repositories\SpinsRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(SpinsRepositoryInterface::class, SpinsRepository::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind(SpinsRepositoryInterface::class, SpinsRepository::class);
    }
}

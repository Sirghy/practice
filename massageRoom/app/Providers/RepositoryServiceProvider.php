<?php

namespace App\Providers;

use App\DAL\BookingRepository;
use App\DAL\Interfaces\BookingRepositoryInterface;
use App\DAL\Interfaces\RoleRepositoryInterface;
use App\DAL\UserRepository;
use App\DAL\Interfaces\UserRepositoryInterface;
use App\DAL\RoleRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(
            BookingRepositoryInterface::class,
            BookingRepository::class
        );
        $this->app->bind(
            UserRepositoryInterface::class,
            UserRepository::class
        );
        $this->app->bind(
            RoleRepositoryInterface::class,
            RoleRepository::class
        );
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}

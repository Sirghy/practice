<?php

namespace App\Providers;

use App\DAL\BookingRepository;
use App\DAL\Interfaces\BookingRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
      
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}

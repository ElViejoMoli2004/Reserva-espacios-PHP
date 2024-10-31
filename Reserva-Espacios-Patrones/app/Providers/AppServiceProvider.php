<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Reserva;
use App\Observers\ReservaObserver;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Reserva::observe(ReservaObserver::class);
    }
}

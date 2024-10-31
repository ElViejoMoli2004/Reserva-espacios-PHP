<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Reserva;
use App\Services\EmailService;
use App\Services\SMSService;

class AppServiceProvider extends ServiceProvider
{
    

    /**
     * Bootstrap any application services.
     */
    public function register() {
        $this->app->singleton(EmailService::class, function ($app) {
            return new EmailService();
        });
    
    }
}

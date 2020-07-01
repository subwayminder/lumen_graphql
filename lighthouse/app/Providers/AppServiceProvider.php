<?php

namespace App\Providers;

use Dusterio\LumenPassport\LumenPassport;
use Carbon\Carbon;
use Illuminate\Support\ServiceProvider;
use Laravel\Passport\Passport;
use Nuwave\Lighthouse\LighthouseServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        Passport::tokensExpireIn(Carbon::now()->addDays(15));
        Passport::refreshTokensExpireIn(Carbon::now()->addDays(30));
        LumenPassport::tokensExpireIn(Carbon::now()->addYears(50), 2);
        $this->app->register(LighthouseServiceProvider::class);
    }
}

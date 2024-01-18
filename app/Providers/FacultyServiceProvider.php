<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class FacultyServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */

    public const FACULTYHOME = '/teacher/dashboard';

    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}

<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Project;  // Add this import
use App\Observers\ProjectObserver;  // Add this import

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Project::observe(ProjectObserver::class);
    }
}
